<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\Event;
use App\Entities\EventReview;


class Events extends BaseController
{
    private $eventModel, $userModel, $registerModel, $eventReviewModel;
    public function __construct()
    {
        $this->eventModel = new \App\Models\EventModel;
        $this->userModel = new \App\Models\UserModel;
        $this->registerModel = new \App\Models\RegisterEventModel;
        $this->eventReviewModel = new \App\Models\EventReviewModel;
    }

    public function index()
    {
        $events = $this->eventModel
            ->findAll();

        foreach ($events as $event) {
            $event->user = $this->userModel->getUserById($event->user_id);

            if (logged_in()) {
                $event->subscribe = $this->registerModel
                    ->select('type')
                    ->where('event_id', $event->id)
                    ->where('user_id', user()->id)
                    ->first();
            }
        }

        return view('events/index', [
            'events' => $events
        ]);
    }

    public function new()
    {
        return view('events/new');
    }

    public function create()
    {
        $event = new Event($this->request->getPost());

        $image = $this->request->getFile('image');


        if ($image->getSizeByUnit('mb') > 0) {

            if (!$image->isValid()) {
                return redirect()->back()
                    ->with('error', 'image is not valid!')
                    ->withInput();
            }

            // check if image is valid format
            $type = $image->getMimeType();
            if (!in_array($type, ['image/png', 'image/jpeg', 'image/gif', 'image/bmp'])) {
                return redirect()->back()
                    ->with('error', 'ivalid image format!')
                    ->withInput();
            }

            // check file size

            // echo 'store event + image';
            $newImageName = $image->getRandomName();

            $event->image = $newImageName;

            if ($this->eventModel->insert($event)) {

                // storing image
                $imageObj = \Config\Services::image()
                    ->withFile($image)
                    ->flatten()
                    ->fit(626, 352, 'center')
                    // ->resize(574, 323, true, 'width') //height
                    ->save(WRITEPATH . 'uploads/event_images/' . $newImageName);

                return redirect()->back() // home
                    ->with('success', 'Event is submitted successfully');
            } else {

                return redirect()->back()
                    ->with('errors', $this->eventModel->errors())
                    ->withInput();
            }
        } else {

            if ($this->eventModel->insert($event)) {

                return redirect()->back()
                    ->with('success', 'Event is submitted to Admins successfully');
            } else {

                return redirect()->back()
                    ->with('errors', $this->eventModel->errors())
                    ->withInput();
            }
        }
    }

    public function manage_events()
    {
        $events_data = $this->eventModel->paginateEventsByUserId(user()->id);
        return view("Events/manage_events", [
            'events' => $events_data,
            'pager' => $this->eventModel->pager
        ]);
    }

    public function show($id)
    {
        $event = $this->eventModel->getEventById($id);

        $event_reviews = $this->eventReviewModel
            ->select('users.username as user, reviews.rate as rate, reviews.comment as comment, reviews.created_at as created_at')
            ->join('users', 'users.id = reviews.user_id')
            ->where('reviews.event_id', $id)
            ->orderBy('reviews.id DESC')
            ->findAll();

        if (logged_in()) {
            $event->subscribe = $this->registerModel
                ->select('type')
                ->where('event_id', $event->id)
                ->where('user_id', user()->id)
                ->first();
        }

        return view("Events/show", [
            'event' => $event,
            'event_reviews' => $event_reviews
        ]);
    }

    public function edit($id)
    {
        $event = $this->getEventOr404($id);

        return view("Events/edit", [
            'event' => $event
        ]);
    }

    public function search()
    {
        $term = $this->request->getPost('term');
        $events = $this->eventModel
            ->like('name', $term)
            ->orLike('description', $term)
            ->findAll();

        foreach ($events as $event) {
            $event->user = $this->userModel->getUserById($event->user_id);
        }

        return view("Events/search", [
            'events' => $events
        ]);
    }

    private function getEventOr404($id)
    {
        $event = $this->eventModel->getEventByUserId($id, user()->id);
        if ($event === null) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Event with id: $id not found");
        }
        return $event;
    }



    public function delete($id)
    {
        $event = $this->getEventOr404($id);
        if ($this->request->getMethod() === 'post') {
            $this->eventModel->delete($id);
            return redirect()->to('events/manage_events')
                ->with('info', 'Event deleted');
        }
        return view("events/delete", [
            'event' => $event
        ]);
    }

    public function saveRegistration()
    {

        $userId = $this->request->getPost('user_id');
        $eventId = $this->request->getPost('event_id');
        $type = $this->request->getPost('type');

        $registered = $this->registerModel
            ->where('user_id', $userId)
            ->where('event_id', $eventId)
            ->countAllResults() > 0;

        if ($registered) {
            return redirect()->back()->with('error', 'You have already registered for this event.');
        }

        $validationRules = [
            'user_id' => 'required',
            'event_id' => 'required',
            'type' => 'required|in_list[0,1]',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'There was an error with your registration.
                Please choose if you are Volunteer or Present');
        }

        $data = [
            'user_id' => $userId,
            'event_id' => $eventId,
            'type' => $type,
            'attend' => false,
        ];

        $this->registerModel->save($data);

        return redirect()->back()->with('success', 'Thank you for registering!');
    }



    public function addReview()
    {
        $event_review = new EventReview($this->request->getPost());
        // check if user logged in
        if (!logged_in()) {
            return redirect()->back()
                ->with('error', 'You cannot review the event without login first!');
            exit;
        }
        // check if review exist
        $review_exist = $this->eventReviewModel
            ->where('event_id', $event_review->event_id)
            ->where('user_id', $event_review->user_id)
            ->first();

        if ($review_exist) {
            return redirect()->back()
                ->with('error', 'You already review this event!');
        } else {
            if ($this->eventReviewModel->save($event_review)) {
                return redirect()->back()
                    ->with('success', 'Review is added successfully.');
            } else {
                return redirect()->back()
                    ->with('errors', $this->eventReviewModel->errors())
                    ->withInput();
            }
        }
    }
    public function image($image)
    {
        if ($image) {

            $path = WRITEPATH . 'uploads/event_images/' . $image;

            $finfo = new \finfo(FILEINFO_MIME);

            $type = $finfo->file($path);

            header("Content-Type: $type");

            header("Content-Length: " . filesize($path));

            readfile($path);

            exit;
        }
    }
}
