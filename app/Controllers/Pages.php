<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
    }
    public function about()
    {
        return view('pages/about');
    }

    public function contact()
    {
        return view('pages/contact');
    }

    public function sendEmail()
    {
        $input = $this->validate([

            'email' => [
                'label' => 'E-mail',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'please enter your Email',
                    'valid_email' => 'please enter Valid Email '
                ],
            ],
            'name' => [
                'label' => 'name',
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'please enter a name',
                    'valid_email' => 'please enter name with 3 characters'
                ],
            ],
            'massage' => [
                'label' => 'massage',
                'rules' => 'required|min_length[15]',
                'errors' => [
                    'required' => 'please enter a massage',
                    'valid_email' => 'please enter massage with 15 characters'
                ],
            ]

        ]);

        if (!$input) {
            return view('pages/contact', [

                'validation' => $this->validator
            ]);
        } else {
            $email = $this->request->getPost('email');
            $name = $this->request->getPost('name');
            $massage = $this->request->getPost('massage');

            $mail = \config\Services::email();
            $mail->setFrom('ITvolunteers5@gmail.com');
            $mail->setTo('ITvolunteers5@gmail.com');
            $mail->setSubject($name);
            $mail->setMessage($massage);
            if ($mail->send()) {
                session()->setFlashdata('success', ' your Massge has been sent successfully');
                return redirect()->to('pages/contact');
            } else {
                session()->setFlashdata('error', ' your massage could not be sent');
                return redirect()->to('pages/contact');
            }
        }
    }
}
