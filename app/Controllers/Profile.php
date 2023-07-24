<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\User;
use App\Models\UserModel;
use Myth\Auth\Facades\Auth;
use Myth\Auth\Contracts\AuthenticatorInterface;


class Profile extends BaseController

{
    private $userModel;
    public function __construct()
    {
        $this->userModel = new \App\Models\UserModel;
    }

    public function index()
    {
        return view('profile/index');
    }

    public function edit()
    {

        $userId = user()->id;

        if ($userId !== null) {
            $user = $this->userModel->getUserById($userId);

            // Get the total volunteer hours for the user
            $totalVolunteerHours = $this->userModel->getTotalVolunteerHours($userId);
        } else {
            // User is not authenticated, handle accordingly (e.g., redirect to login)
            // You can set $user and $totalVolunteerHours to appropriate values based on your application logic
            $user = null;
            $totalVolunteerHours = 0;
        }

        // Pass the user and total volunteer hours to the view
        $data['user'] = $user;
        $data['totalVolunteerHours'] = $totalVolunteerHours;

        // Load the profile view and pass the data
        return view('profile/edit', $data);
    }

    public function update()
    {
        $user = new User($this->request->getPost());
        $user_id = $user->id;

        unset($user->id);

        $image = $this->request->getFile('avatar');

        if ($image->getSizeByUnit('mb') > 0) {

            if (!$image->isValid()) {
                return redirect()->back()
                    ->with('error', 'image is not valid!')
                    ->withInput();
            }

            $type = $image->getMimeType();
            if (!in_array($type, ['image/png', 'image/jpeg', 'image/gif', 'image/bmp'])) {
                return redirect()->back()
                    ->with('error', 'ivalid image format!')
                    ->withInput();
            }

            $newImageName = $image->getRandomName();

            $user->avatar = $newImageName;


            if ($this->userModel->update($user_id, $user)) {
                $imageObj = \Config\Services::image()
                    ->withFile($image)
                    ->flatten()
                    ->fit(100, 100, 'center')
                    // ->resize(574, 323, true, 'width') //height
                    ->save(WRITEPATH . 'uploads/avatars/' . $newImageName);
                return redirect()->back()
                    ->with('success', 'User info is updated successfully');
            } else {

                return redirect()->back()
                    ->with('errors', $this->userModel->errors())
                    ->withInput();
            }
        } else {

            // echo 'store event only';
            // $user->avatar = 'default.jpg';

            if ($this->userModel->update($user_id, $user)) {

                return redirect()->back()
                    ->with('success', 'User info is updated successfully');
            } else {

                return redirect()->back()
                    ->with('errors', $this->userModel->errors())
                    ->withInput();
            }
        }
    }

    public function image($avatar)
    {

        if ($avatar) {

            $path = WRITEPATH . 'uploads/avatars/' . $avatar;

            $finfo = new \finfo(FILEINFO_MIME);

            $type = $finfo->file($path);

            header("Content-Type: $type");

            header("Content-Length: " . filesize($path));

            readfile($path);

            exit;
        }
    }
}
