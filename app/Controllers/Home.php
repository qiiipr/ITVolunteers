<?php

namespace App\Controllers;

class Home extends BaseController
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
            // ->limit(2)
            // ->orderBy('id', 'DESC')
            ->findAll();
        foreach ($events as $event) {
            $event->user = $this->userModel->getUserById($event->user_id);
        }

        return view('Home', [
            'events' => $events
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
}
