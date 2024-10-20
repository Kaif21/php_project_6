<?php

namespace App\classes;

class User
{
    public $user = [];

    public function __construct()
    {
        $this->user  = [
            1 => [
                'id' => 1,
                'email' => 'admin@x.com',
                'password' => '1234'
            ],
            2 => [
                'id' => 2,
                'email' => 'kaif@gmail.com',
                'password' => '1234'
            ],
            3 => [
                'id' => 3,
                'email' => 'kaif@gmail.com',
                'password' => '1234'
            ],
        ];
    }

    public function getAllUser(){
        return $this->user;
    }
}
