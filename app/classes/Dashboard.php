<?php

namespace App\classes;

class Dashboard{
     
    public function index(){
        return view('dashboard'); 
    }
    public function logout(){
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('Location:route.php?page=home');
    }
}