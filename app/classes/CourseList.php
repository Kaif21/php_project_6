<?php

namespace App\classes;

class CourseList
{

    public $courses = [];
    public function __construct()
    {
        $this->courses = [
            0 => [
                'title' => 'Introduction to PHP',
                'description' => 'Learn the basics of PHP programming, including syntax, variables, and control structures.',
                'duration' => '20 Aug - 20 Dec',
                'price' => 299.99,
                'total_classes' => 15,
                'image_url' => 'https://bitm.org.bd/assets/media/course_photo/thumbs/1705224866.png'
            ],
            1 => [
                'title' => 'Advanced OOP in PHP',
                'description' => 'Master object-oriented programming in PHP with a focus on design patterns, inheritance, and polymorphism.',
                'duration' => '20 Aug - 20 Dec',
                'price' => 349.99,
                'total_classes' => 12,
                'image_url' => 'https://bitm.org.bd/assets/media/course_photo/thumbs/1699955776.jpg'
            ],
            2 => [
                'title' => 'JavaScript for Beginners',
                'description' => 'An introductory course to JavaScript covering fundamentals, DOM manipulation, and event handling.',
                'duration' => '01 Sep - 15 Dec',
                'price' => 279.99,
                'total_classes' => 14,
                'image_url' => 'https://bitm.org.bd/assets/media/course_photo/thumbs/1699955972.jpg'
            ],
            3 => [
                'title' => 'Introduction to Networking',
                'description' => 'Learn the basics of computer networking including protocols, topologies, and IP addressing.',
                'duration' => '01 Oct - 31 Dec',
                'price' => 329.99,
                'total_classes' => 16,
                'image_url' => 'https://bitm.org.bd/assets/media/course_photo/thumbs/1705224866.png'
            ],
            4 => [
                'title' => 'Network Security Fundamentals',
                'description' => 'Understand key concepts in network security, including firewalls, intrusion detection systems, and encryption.',
                'duration' => '15 Sep - 15 Jan',
                'price' => 399.99,
                'total_classes' => 20,
                'image_url' => 'https://bitm.org.bd/assets/media/course_photo/thumbs/1705224866.png'
            ],
            5 => [
                'title' => 'Microsoft Excel for Professionals',
                'description' => 'Enhance your Excel skills with advanced functions, pivot tables, and data visualization techniques.',
                'duration' => '05 Sep - 05 Nov',
                'price' => 249.99,
                'total_classes' => 10,
                'image_url' => 'https://bitm.org.bd/assets/media/course_photo/thumbs/1705224866.png'
            ],
            6 => [
                'title' => 'PowerPoint Mastery',
                'description' => 'Create compelling presentations with advanced PowerPoint techniques including animations and muldurationdia integration.',
                'duration' => '10 Sep - 10 Dec',
                'price' => 219.99,
                'total_classes' => 8,
                'image_url' => 'https://bitm.org.bd/assets/media/course_photo/thumbs/1705224866.png'            ],
            7 => [
                'title' => 'Project Management Fundamentals',
                'description' => 'Learn the essential concepts of project management, including planning, execution, and monitoring.',
                'duration' => '01 Oct - 01 Jan',
                'price' => 359.99,
                'total_classes' => 12,
                'image_url' => 'https://bitm.org.bd/assets/media/course_photo/thumbs/1705224866.png'
            ],
            8 => [
                'title' => 'Digital Marketing Strategies',
                'description' => 'Explore effective digital marketing strategies, including SEO, SEM, and social media marketing.',
                'duration' => '15 Oct - 15 Feb',
                'price' => 399.99,
                'total_classes' => 16,
                'image_url' => 'https://bitm.org.bd/assets/media/course_photo/thumbs/1705224866.png'
            ],
            9 => [
                'title' => 'Web Development Bootcamp',
                'description' => 'A comprehensive bootcamp covering HTML, CSS, JavaScript, and backend technologies for building modern web applications.',
                'duration' => '01 Nov - 01 Apr',
                'price' => 799.99,
                'total_classes' => 30,
                'image_url' => 'https://bitm.org.bd/assets/media/course_photo/thumbs/1705224866.png'
            ],
            10 => [
                'title' => 'Introduction to Data Science',
                'description' => 'Learn the fundamentals of data science including data analysis, visualization, and machine learning basics.',
                'duration' => '01 Dec - 30 Jun',
                'price' => 499.99,
                'total_classes' => 20,
                'image_url' => 'https://bitm.org.bd/assets/media/course_photo/thumbs/1705224866.png'
            ],
            11 => [
                'title' => 'Business Analytics with Python',
                'description' => 'Use Python for business analytics, including data manipulation, statistical analysis, and predictive modeling.',
                'duration' => '15 Nov - 15 May',
                'price' => 479.99,
                'total_classes' => 18,
                'image_url' => 'https://bitm.org.bd/assets/media/course_photo/thumbs/1705224866.png'
            ],
            12 => [
                'title' => 'Postgraduate Diploma in IT Management',
                'description' => 'A postgraduate program focusing on IT management principles, project management, and strategic planning.',
                'duration' => '01 Jan - 31 Dec',
                'price' => 999.99,
                'total_classes' => 30,
                'image_url' => 'https://bitm.org.bd/assets/media/course_photo/thumbs/1705224866.png'
            ],
            13 => [
                'title' => 'Advanced Networking Concepts',
                'description' => 'Deep dive into advanced networking topics such as routing, switching, and network troubleshooting.',
                'duration' => '01 Feb - 30 Jun',
                'price' => 399.99,
                'total_classes' => 20,
                'image_url' => 'https://bitm.org.bd/assets/media/course_photo/thumbs/1705224866.png'
            ],
            14 => [
                'title' => 'Introduction to Cybersecurity',
                'description' => 'Understand the fundamentals of cybersecurity, including threats, vulnerabilities, and protective measures.',
                'duration' => '15 Feb - 15 May',
                'price' => 349.99,
                'total_classes' => 14,
                'image_url' => 'https://bitm.org.bd/assets/media/course_photo/thumbs/1705224866.png'
            ],
            15 => [
                'title' => 'Microsoft Office Suite Mastery',
                'description' => 'Become proficient in Microsoft Office Suite, including Word, Excel, PowerPoint, and Outlook.',
                'duration' => '01 Mar - 01 Jun',
                'price' => 299.99,
                'total_classes' => 12,
                'image_url' => 'https://bitm.org.bd/assets/media/course_photo/thumbs/1705224866.png'
            ]
        ];
    }
    public function getAllCourse()
    {
        return $this->courses;
    }
}
