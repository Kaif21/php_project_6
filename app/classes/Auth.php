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
        $this->email = $post['email'];
        $this->password = $post['password'];
    }

    public function loginCheck()
    {
        $this->user = new User();
        $this->users = $this->user->getAllUser();
        $this->status = false;

        foreach ($this->users as $user) {
            if ($user['email'] === $this->email && $user['password'] === $this->password) {
                $this->status = true;
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                break;
            }
        }

        if ($this->status) {
            // Make sure there's no output before this header
            ob_clean(); // Clear any output buffers
            header('Location: route.php?page=dashboard');
            exit();
        } else {
            header('Location: route.php?page=home&message=Invalid credentials');
            exit();
        }
    }
}