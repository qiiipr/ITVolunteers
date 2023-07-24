<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    private $userModel, $eventModel, $reviewModel, $registerEventModel, $groupModel;

    public function __construct()
    {
        $this->userModel = new \App\Models\UserModel;
        $this->eventModel = new \App\Models\EventModel;
        $this->reviewModel = new \App\Models\ReviewModel;
        $this->groupModel = new \App\Models\GroupModel;
        $this->registerEventModel = new \App\Models\registerEventModel;
    }

    public function index()
    {
        $users = $this->userModel
            ->findAll();

        $events = $this->eventModel
            ->findAll();

        $reviews = $this->reviewModel
            ->findAll();

        $register = $this->registerEventModel
            ->findAll();


        return view('admin/index', [
            'users' => $users,
            'events' => $events,
            'reviews' => $reviews,
            'register' => $register
        ]);
    }

    public function users()
    {
        $users = $this->userModel
            ->findAll();

        return view('admin/users/index', [
            'users' => $users,
        ]);
    }

    public function events()
    {
        if (in_groups('admin')) {

            $events = $this->eventModel
                ->findAll();
        } elseif (in_groups('volunteer')) {
            $events = $this->eventModel
                ->where('user_id', user()->id)
                ->findAll();
        }
        return view('admin/events/index', [
            'events' => $events,
        ]);
    }

    public function added_events()
    {
        if (in_groups('admin')) {
            $events = $this->eventModel
                ->where('active', 0)
                ->findAll();
        } elseif (in_groups('volunteer')) {
            $events = $this->eventModel
                ->where('user_id', user()->id)
                ->where('active', 0)
                ->findAll();
        }
        return view('admin/notifications/index', [
            'events' => $events,
        ]);
    }

    public function reviews()
    {
        $reviews = $this->reviewModel
            ->findAll();

        return view('admin/reviews/index', [
            'reviews' => $reviews,
        ]);
    }


    public function edit_user($user_id)
    {
        $user = $this->userModel
            ->find($user_id);
        $user_groups = $this->groupModel->getGroupsForUser($user_id);

        return view('admin/users/edit_user', [
            'user' => $user,
            'user_groups' => $user_groups
        ]);
    }

    public function deactivate()
    {
        $id = $this->request->getPost('id');
        $active = $this->request->getPost('active');
        $user = $this->getUserOr404($id);

        if ($active == 1) {
            $user->activate();
            if ($this->userModel->protect(false)->save($user)) {

                return redirect()->back()
                    ->with('success', ' Activate is succefully ');
            } else {
                return redirect()->back()
                    ->with('errors', $this->userModel->errors())
                    ->withInput();
            }
        } elseif ($active == 0) {
            $user->deactivate();
            if ($this->userModel->protect(false)->save($user)) {

                return redirect()->back()
                    ->with('success', ' deactivate is succefully');
            } else {
                return redirect()->back()
                    ->with('errors', $this->userModel->errors())
                    ->withInput();
            }
        }
    }

    public function update_user()
    {
        // $user = $this->request->getPost();
        $user_id = $this->request->getPost('id');

        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
        ];

        if ($this->userModel->update($user_id, $data)) {
            return redirect()->back()
                ->with('success', 'User is updated successfully');
        } else {

            return redirect()->back()
                ->with('errors', $this->userModel->errors())
                ->withInput();
        }
    }

    public function delete_user($user_id)
    {
        if ($this->userModel->delete($user_id)) {
            return redirect()->back()
                ->with('success', 'User is Deleted successfully');
        } else {

            return redirect()->back()
                ->with('errors', $this->userModel->errors())
                ->withInput();
        }
    }

    public function edit_event($event_id)
    {
        $event = $this->eventModel
            ->find($event_id);

        return view('admin/events/edit_event', [
            'event' => $event
        ]);
    }

    public function update_event()
    {
        $event_id = $this->request->getPost('id');

        $data = [
            'name' => $this->request->getPost('name'),
            'location' => $this->request->getPost('location'),
            'date' => $this->request->getPost('date'),
            'description' => $this->request->getPost('description'),
            'active' => $this->request->getPost('active'),
            'volunteer_hrs' => $this->request->getPost('volunteer_hrs'),
            'category' => $this->request->getPost('category'),
        ];

        if ($this->eventModel->update($event_id, $data)) {
            return redirect()->back()
                ->with('success', 'Event is updated successfully');
        } else {

            return redirect()->back()
                ->with('errors', $this->eventModel->errors())
                ->withInput();
        }
    }

    public function delete_event($event_id)
    {
        if ($this->eventModel->delete($event_id)) {
            return redirect()->back()
                ->with('success', 'event is Deleted successfully');
        } else {

            return redirect()->back()
                ->with('errors', $this->eventModel->errors())
                ->withInput();
        }
    }


    public function view_event()
    {

        $eventId = $this->request->getPost('event_id');


        $registerModel = $this->registerEventModel;
        $userModel = $this->userModel;

        $userIds = $registerModel->where('event_id', $eventId)->findColumn('user_id');
        $userIdsArray = is_array($userIds) ? $userIds : [$userIds];

        $subscribers = $userModel->whereIn('id', $userIdsArray)->findAll();

        return view('admin/events/view_event', [
            'subscribers' => $subscribers
        ]);
    }


    public function edit_review($review_id)
    {
        $review = $this->reviewModel
            ->find($review_id);

        return view('admin/reviews/edit_review', [
            'review' => $review
        ]);
    }

    public function update_review()
    {
        $review_id = $this->request->getPost('id');

        $data = [
            'comment' => $this->request->getPost('comment'),
            'rate' => $this->request->getPost('rate')
        ];

        if ($this->reviewModel->update($review_id, $data)) {
            return redirect()->back()
                ->with('success', 'review is updated successfully');
        } else {

            return redirect()->back()
                ->with('errors', $this->reviewModel->errors())
                ->withInput();
        }
    }

    public function delete_review($review_id)
    {
        if ($this->reviewModel->delete($review_id)) {
            return redirect()->back()
                ->with('success', 'review is Deleted successfully');
        } else {

            return redirect()->back()
                ->with('errors', $this->reviewModel->errors())
                ->withInput();
        }
    }

    public function viewRegisterEvent($event_id)
    {

        $registerModel = $this->registerEventModel;
        $userModel = $this->userModel;

        $registerData = $registerModel->where('event_id', $event_id)->findAll();

        $userIds = array_column($registerData, 'user_id');
        $users = $userModel->whereIn('id', $userIds)->findAll();

        $userNames = array_column($users, 'username', 'id');

        foreach ($registerData as &$row) {
            if (isset($userNames[$row['user_id']])) {
                $row['user_name'] = $userNames[$row['user_id']];
            } else {
                $row['user_name'] = 'Unknown User';
            }
        }

        $data['registerData'] = $registerData;

        return view('admin/events/view_event', $data);
    }

    public function updateAttend()
    {
        $userId = $this->request->getPost('user_id');
        $eventId = $this->request->getPost('event_id');

        $registerModel = $this->registerEventModel;

        $registerModel->where('user_id', $userId)
            ->where('event_id', $eventId)
            ->set('attend', 1)
            ->update();

        return redirect()->back();
    }

    public function eventActive()
    {
        $eventId = $this->request->getPost('event_id');

        $eventModel = $this->eventModel;

        $eventModel->where('id', $eventId)
            ->set('active', 1)
            ->update();

        return redirect()->back()->with('success', 'Event activated successfully.');
    }

    private function getUserOr404($user_id)
    {
        $user = $this->userModel
            ->where('id', $user_id)
            ->first();

        if ($user === null) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("User: $user_id is not found");
        }

        return $user;
    }

    public function set_admin()
    {
        $id = $this->request->getPost('id');
        $is_admin = $this->request->getPost('is_admin');
        $user = $this->getUserOr404($id);

        if ($is_admin == 1) {
            if ($this->groupModel->addUserToGroup($user->id, 1)) {
                return redirect()->back()
                    ->with('success', 'add user to the administration group successfully');
            } else {

                return redirect()->back()
                    ->with('errors', $this->userModel->errors())
                    ->withInput();
            }
        } elseif ($is_admin == 0) {
            if ($this->groupModel->removeUserFromGroup($user->id, 1)) {
                return redirect()->back()
                    ->with('success', 'remove user to the administration group successfully');
            } else {

                return redirect()->back()
                    ->with('errors', $this->userModel->errors())
                    ->withInput();
            }
        }
    }

    public function set_volunteer()
    {
        $id = $this->request->getPost('id');
        $is_volunteer = $this->request->getPost('is_volunteer');
        $user = $this->getUserOr404($id);

        if ($is_volunteer == 1) {
            if ($this->groupModel->addUserToGroup($user->id, 2)) {
                return redirect()->back()
                    ->with('success', 'add user to the volunteer group successfully');
            } else {

                return redirect()->back()
                    ->with('errors', $this->groupModel->errors())
                    ->withInput();
            }
        } elseif ($is_volunteer == 0) {
            if ($this->groupModel->removeUserFromGroup($user->id, 2)) {
                return redirect()->back()
                    ->with('success', 'remove user to the volunteer group successfully');
            } else {

                return redirect()->back()
                    ->with('errors', $this->groupModel->errors())
                    ->withInput();
            }
        }
    }
}
