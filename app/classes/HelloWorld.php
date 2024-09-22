<?php
namespace App\classes;

use App\classes\CourseList;

class HelloWorld{

    public $message,$course,$courses = [],$randomKeys,$singleDetail;

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
    $this->course = new CourseList();
    $this->courses = $this->course->getAllCourse();
    $this->randomKeys = array_rand($this->courses, 4);
    $randomCourses = array_intersect_key($this->courses, array_flip($this->randomKeys));
    return view('about', ['courses' => $randomCourses]);
}
//about
public function details($id){
    $this->course = new CourseList();
    $this->singleDetail = $this->course->getCourseById($id);
    return view('details',['course'=> $this->singleDetail]);
}
//about
};
// class