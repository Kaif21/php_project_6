<?php

namespace App\classes;

use App\classes\User;

class Auth {
    public $email;
    public $password;
    public $user;
    public $users = [];
    public $status;

    public function __construct($post)
    {
        // Fix: Properly access POST data
        $this->email = $post['email'];
        $this->password = $post['password'];
    }

    public function loginCheck()
    {
        $this->user = new User();
        $this->users = $this->user->getAllUser();
        $this->status = false; // Initialize as false

        foreach ($this->users as $user) {
            // Fix: Correct comparison syntax
            if ($user['email'] === $this->email && $user['password'] === $this->password) {
                $this->status = true;
                break;
            }
        }

        if ($this->status) {
            header('Location: route.php?page=dashboard');
            exit(); // Add exit after redirect
        } else {
            header('Location: route.php?page=home&message=Invalid credentials');
            exit(); // Add exit after redirect
        }
    }
}