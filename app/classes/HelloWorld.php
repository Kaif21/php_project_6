<?php
namespace App\classes;

use App\classes\CourseList;

class HelloWorld{

    public $message,$course,$courses = [];

public function __construct()
{
    $this->message = "hello World";
}
// __construct
public function index(){
    $this->course = new CourseList();
    $this->courses = $this->course->getAllCourse();
    return view('home', ['course'=>$this->courses]);
}
// index
public function contact(){
    return view('contact');
}
//contact
public function about(){
    return view('about');
}
//about
};
// class