<?php

namespace App\classes;

class CourseList
{

    public $courses = [];
    public function __construct()
    {
        $this->courses = [
            0 => [
                'id' => 1,
                'title' => 'Introduction to PHP',
                'description' => 'Learn the basics of PHP programming, including syntax, variables, and control structures.',
                'duration' => '20 Aug - 20 Dec',
                'price' => 299.99,
                'total_hours' => 15,
                'image_url' => 'https://bitm.org.bd/assets/media/course_banner/1705811815.png',
                'last_date' => '29 June',
                'no_classes' => '108',
                'schedule_day' => 'Sat ,Mon ,Wednesday',
                'schedule_time' => '9 AM',
                'technology' => [
                    'name' => 'HTML',
                    'name' => 'CSS',
                    'name' => 'JS',
                    'name' => 'PHP',
                    'name' => 'LARAVEL',
                    'name' => 'VUEJS'
                ],
                'videos' => '108',
                'resources' => '108',
                'projects' => '104',
                'teacher_name' => 'Habibur Rahman',
                'teacher_img' => 'https://bitm.org.bd/assets/media/trainer_photo/1695814430.png',
                'teacher_details' => 'Habibur Rahman is a professional web-based application
                                    Designer, Developer, Trainer & Web Based Application System Designer. Always I
                                    want to do something where I would be able to exert my academic knowledge,
                                    experience and potentiality to develop an institute or someone career and
                                    establish as a dexterous one in the related field and in this way, I want to
                                    contribute to the welfare & enhancement of the country & world.
                                My Expertise on Computer Hardware & Networking are excellent
                                    and my Special Expertise on web based technology like HTML5, CSS3, JavaScript
                                    (SCMA-5, 6), jQuery, JSON, NodeJS, Ajax, VueJS, PHP8, Laravel 10, Codeigniter,
                                    Cake PHP,MySQL, MSSQL. I love my work & I also love to do my work.',
                'modules' => [
                    0 => [
                        'modules_title' => 'Basics of HTML',
                        'modules_content' => [
                            0 => 'HTML Tags, Attributes,',
                            1 => 'HTML Tags, Attributes,'
                        ]
                    ],
                    1 => [
                        'modules_title' => 'Basics of HTML',
                        'modules_content' => [
                            0 => 'HTML Tags, Attributes,',
                            1 => 'HTML Tags, Attributes,'
                        ]
                    ]
                ],


            ],
            1 => [
                'id' => 2,
                'title' => 'Advanced JavaScript',
                'description' => 'Master advanced JavaScript concepts and modern ES6+ features.',
                'duration' => '15 Sep - 15 Jan',
                'price' => 349.99,
                'total_hours' => 20,
                'image_url' => 'https://bitm.org.bd/assets/media/course_banner/1705811815.png',
                'last_date' => '31 July',
                'no_classes' => '120',
                'schedule_day' => 'Mon ,Thu ,Saturday',
                'schedule_time' => '7 PM',
                'technology' => [
                    'name' => 'JavaScript',
                    'name' => 'ES6+',
                    'name' => 'Node.js',
                    'name' => 'React',
                    'name' => 'Vue.js',
                    'name' => 'TypeScript'
                ],
                'videos' => '120',
                'resources' => '130',
                'projects' => '110',
                'teacher_name' => 'MD. RASHED KARIM',
                'teacher_img' => 'https://bitm.org.bd/assets/media/trainer_photo/1618732479.jpg',
                'teacher_details' => 'Experienced Head Of Software with a demonstrated history of working in the education and software industry. Strong engineering professional skilled in Project Management, Software Testing, Different Databases, Software Architecture, Programming Languages like Java, PHP, Spring Framework, Hibernate. 

Degree: Doctor of Philosophy in Computer Engineering
Institution: Universiti Malaysia Perlis',
                'modules' => [
                    0 => [
                        'modules_title' => 'ES6+ Features',
                        'modules_content' => [
                            0 => 'Arrow Functions, Destructuring',
                            1 => 'Promises, Async/Await'
                        ]
                    ],
                    1 => [
                        'modules_title' => 'Advanced Concepts',
                        'modules_content' => [
                            0 => 'Closures, Prototypes',
                            1 => 'Functional Programming'
                        ]
                    ]
                ]
            ],
            2 => [
                'id' => 3,
                'title' => 'Data Science Fundamentals',
                'description' => 'Introduction to data analysis, visualization, and machine learning with Python.',
                'duration' => '1 Oct - 1 Feb',
                'price' => 399.99,
                'total_hours' => 25,
                'image_url' => 'https://bitm.org.bd/assets/media/course_banner/1705811815.png',
                'last_date' => '15 August',
                'no_classes' => '130',
                'schedule_day' => 'Tue ,Fri ,Sunday',
                'schedule_time' => '6 PM',
                'technology' => [
                    'name' => 'Python',
                    'name' => 'Pandas',
                    'name' => 'NumPy',
                    'name' => 'Matplotlib',
                    'name' => 'Scikit-learn',
                    'name' => 'Jupyter'
                ],
                'videos' => '130',
                'resources' => '150',
                'projects' => '115',
                'teacher_name' => 'Habibur Rahman',
                'teacher_img' => 'https://bitm.org.bd/assets/media/trainer_photo/1695814430.png',
                'teacher_details' => 'Habibur Rahman is a professional web-based application
                                    Designer, Developer, Trainer & Web Based Application System Designer. Always I
                                    want to do something where I would be able to exert my academic knowledge,
                                    experience and potentiality to develop an institute or someone career and
                                    establish as a dexterous one in the related field and in this way, I want to
                                    contribute to the welfare & enhancement of the country & world.
                                My Expertise on Computer Hardware & Networking are excellent
                                    and my Special Expertise on web based technology like HTML5, CSS3, JavaScript
                                    (SCMA-5, 6), jQuery, JSON, NodeJS, Ajax, VueJS, PHP8, Laravel 10, Codeigniter,
                                    Cake PHP,MySQL, MSSQL. I love my work & I also love to do my work.',
                'modules' => [
                    0 => [
                        'modules_title' => 'Data Analysis with Python',
                        'modules_content' => [
                            0 => 'Pandas for Data Manipulation',
                            1 => 'Data Visualization with Matplotlib'
                        ]
                    ],
                    1 => [
                        'modules_title' => 'Machine Learning Basics',
                        'modules_content' => [
                            0 => 'Supervised Learning Algorithms',
                            1 => 'Unsupervised Learning Techniques'
                        ]
                    ]
                ]
            ],
            3 => [
                'id' => 4,
                'title' => 'Mobile App Development with Flutter',
                'description' => 'Learn to build cross-platform mobile apps using Flutter and Dart.',
                'duration' => '5 Nov - 5 Mar',
                'price' => 379.99,
                'total_hours' => 22,
                'image_url' => 'https://bitm.org.bd/assets/media/course_banner/1705811815.png',
                'last_date' => '20 September',
                'no_classes' => '110',
                'schedule_day' => 'Wed ,Sat ,Monday',
                'schedule_time' => '8 PM',
                'technology' => [
                    'name' => 'Flutter',
                    'name' => 'Dart',
                    'name' => 'Firebase',
                    'name' => 'RESTful APIs',
                    'name' => 'State Management',
                    'name' => 'Material Design'
                ],
                'videos' => '110',
                'resources' => '120',
                'projects' => '105',
                'teacher_name' => 'Habibur Rahman',
                'teacher_img' => 'https://bitm.org.bd/assets/media/trainer_photo/1695814430.png',
                'teacher_details' => 'Habibur Rahman is a professional web-based application
                                    Designer, Developer, Trainer & Web Based Application System Designer. Always I
                                    want to do something where I would be able to exert my academic knowledge,
                                    experience and potentiality to develop an institute or someone career and
                                    establish as a dexterous one in the related field and in this way, I want to
                                    contribute to the welfare & enhancement of the country & world.
                                My Expertise on Computer Hardware & Networking are excellent
                                    and my Special Expertise on web based technology like HTML5, CSS3, JavaScript
                                    (SCMA-5, 6), jQuery, JSON, NodeJS, Ajax, VueJS, PHP8, Laravel 10, Codeigniter,
                                    Cake PHP,MySQL, MSSQL. I love my work & I also love to do my work.',
                'modules' => [
                    0 => [
                        'modules_title' => 'Flutter Basics',
                        'modules_content' => [
                            0 => 'Dart Programming Fundamentals',
                            1 => 'Widget Tree and State Management'
                        ]
                    ],
                    1 => [
                        'modules_title' => 'Building Complex UIs',
                        'modules_content' => [
                            0 => 'Custom Animations',
                            1 => 'Responsive Layouts'
                        ]
                    ]
                ]
            ],
            4 => [
                'id' => 5,
                'title' => 'Full Stack Web Development',
                'description' => 'Comprehensive course covering both front-end and back-end web technologies.',
                'duration' => '10 Jan - 10 May',
                'price' => 449.99,
                'total_hours' => 30,
                'image_url' => 'https://bitm.org.bd/assets/media/course_banner/1705811815.png',
                'last_date' => '1 November',
                'no_classes' => '150',
                'schedule_day' => 'Mon ,Thu ,Saturday',
                'schedule_time' => '7 PM',
                'technology' => [
                    'name' => 'HTML/CSS',
                    'name' => 'JavaScript',
                    'name' => 'React',
                    'name' => 'Node.js',
                    'name' => 'Express',
                    'name' => 'MongoDB'
                ],
                'videos' => '150',
                'resources' => '170',
                'projects' => '120',
                'teacher_name' => 'Habibur Rahman',
                'teacher_img' => 'https://bitm.org.bd/assets/media/trainer_photo/1695814430.png',
                'teacher_details' => 'Habibur Rahman is a professional web-based application
                                    Designer, Developer, Trainer & Web Based Application System Designer. Always I
                                    want to do something where I would be able to exert my academic knowledge,
                                    experience and potentiality to develop an institute or someone career and
                                    establish as a dexterous one in the related field and in this way, I want to
                                    contribute to the welfare & enhancement of the country & world.
                                My Expertise on Computer Hardware & Networking are excellent
                                    and my Special Expertise on web based technology like HTML5, CSS3, JavaScript
                                    (SCMA-5, 6), jQuery, JSON, NodeJS, Ajax, VueJS, PHP8, Laravel 10, Codeigniter,
                                    Cake PHP,MySQL, MSSQL. I love my work & I also love to do my work.',
                'modules' => [
                    0 => [
                        'modules_title' => 'Front-end Development',
                        'modules_content' => [
                            0 => 'Responsive Web Design',
                            1 => 'React Components and Hooks'
                        ]
                    ],
                    1 => [
                        'modules_title' => 'Back-end Development',
                        'modules_content' => [
                            0 => 'RESTful API Design with Node.js',
                            1 => 'Database Integration with MongoDB'
                        ]
                    ]
                ]
            ],
            5 => [
                'id' => 6,
                'title' => 'Cybersecurity Fundamentals',
                'description' => 'Learn essential cybersecurity concepts, tools, and best practices.',
                'duration' => '15 Feb - 15 Jun',
                'price' => 419.99,
                'total_hours' => 24,
                'image_url' => 'https://bitm.org.bd/assets/media/course_banner/1705811815.png',
                'last_date' => '5 December',
                'no_classes' => '120',
                'schedule_day' => 'Tue ,Fri ,Sunday',
                'schedule_time' => '6 PM',
                'technology' => [
                    'name' => 'Network Security',
                    'name' => 'Cryptography',
                    'name' => 'Ethical Hacking',
                    'name' => 'Firewalls',
                    'name' => 'Intrusion Detection',
                    'name' => 'Security Policies'
                ],
                'videos' => '120',
                'resources' => '140',
                'projects' => '108',
                'teacher_name' => 'Habibur Rahman',
                'teacher_img' => 'https://bitm.org.bd/assets/media/trainer_photo/1695814430.png',
                'teacher_details' => 'Habibur Rahman is a professional web-based application
                                    Designer, Developer, Trainer & Web Based Application System Designer. Always I
                                    want to do something where I would be able to exert my academic knowledge,
                                    experience and potentiality to develop an institute or someone career and
                                    establish as a dexterous one in the related field and in this way, I want to
                                    contribute to the welfare & enhancement of the country & world.
                                My Expertise on Computer Hardware & Networking are excellent
                                    and my Special Expertise on web based technology like HTML5, CSS3, JavaScript
                                    (SCMA-5, 6), jQuery, JSON, NodeJS, Ajax, VueJS, PHP8, Laravel 10, Codeigniter,
                                    Cake PHP,MySQL, MSSQL. I love my work & I also love to do my work.',
                'modules' => [
                    0 => [
                        'modules_title' => 'Network Security Basics',
                        'modules_content' => [
                            0 => 'Firewall Configuration',
                            1 => 'VPN Setup and Management'
                        ]
                    ],
                    1 => [
                        'modules_title' => 'Ethical Hacking',
                        'modules_content' => [
                            0 => 'Penetration Testing Techniques',
                            1 => 'Vulnerability Assessment'
                        ]
                    ]
                ]
            ],
            6 => [
                'id' => 7,
                'title' => 'Cloud Computing with AWS',
                'description' => 'Master cloud computing concepts and services using Amazon Web Services.',
                'duration' => '1 Mar - 1 Jul',
                'price' => 479.99,
                'total_hours' => 26,
                'image_url' => 'https://bitm.org.bd/assets/media/course_banner/1705811815.png',
                'last_date' => '10 January',
                'no_classes' => '130',
                'schedule_day' => 'Wed ,Sat ,Monday',
                'schedule_time' => '7 PM',
                'technology' => [
                    'name' => 'AWS EC2',
                    'name' => 'S3',
                    'name' => 'Lambda',
                    'name' => 'CloudFormation',
                    'name' => 'IAM',
                    'name' => 'RDS'
                ],
                'videos' => '130',
                'resources' => '150',
                'projects' => '112',
                'teacher_name' => 'Habibur Rahman',
                'teacher_img' => 'https://bitm.org.bd/assets/media/trainer_photo/1695814430.png',
                'teacher_details' => 'Habibur Rahman is a professional web-based application
                                    Designer, Developer, Trainer & Web Based Application System Designer. Always I
                                    want to do something where I would be able to exert my academic knowledge,
                                    experience and potentiality to develop an institute or someone career and
                                    establish as a dexterous one in the related field and in this way, I want to
                                    contribute to the welfare & enhancement of the country & world.
                                My Expertise on Computer Hardware & Networking are excellent
                                    and my Special Expertise on web based technology like HTML5, CSS3, JavaScript
                                    (SCMA-5, 6), jQuery, JSON, NodeJS, Ajax, VueJS, PHP8, Laravel 10, Codeigniter,
                                    Cake PHP,MySQL, MSSQL. I love my work & I also love to do my work.',
                'modules' => [
                    0 => [
                        'modules_title' => 'AWS Fundamentals',
                        'modules_content' => [
                            0 => 'EC2 Instance Management',
                            1 => 'S3 Bucket Operations'
                        ]
                    ],
                    1 => [
                        'modules_title' => 'Serverless Architecture',
                        'modules_content' => [
                            0 => 'Lambda Functions',
                            1 => 'API Gateway Integration'
                        ]
                    ]
                ]
            ],
            7 => [
                'id' => 8,
                'title' => 'UI/UX Design Principles',
                'description' => 'Learn the fundamentals of user interface and user experience design.',
                'duration' => '5 Apr - 5 Aug',
                'price' => 359.99,
                'total_hours' => 20,
                'image_url' => 'https://bitm.org.bd/assets/media/course_banner/1705811815.png',
                'last_date' => '15 February',
                'no_classes' => '100',
                'schedule_day' => 'Mon ,Thu ,Saturday',
                'schedule_time' => '6 PM',
                'technology' => [
                    'name' => 'Sketch',
                    'name' => 'Figma',
                    'name' => 'Adobe XD',
                    'name' => 'InVision',
                    'name' => 'Prototyping',
                    'name' => 'User Research'
                ],
                'videos' => '100',
                'resources' => '120',
                'projects' => '106',
                'teacher_name' => 'Habibur Rahman',
                'teacher_img' => 'https://bitm.org.bd/assets/media/trainer_photo/1695814430.png',
                'teacher_details' => 'Habibur Rahman is a professional web-based application
                                    Designer, Developer, Trainer & Web Based Application System Designer. Always I
                                    want to do something where I would be able to exert my academic knowledge,
                                    experience and potentiality to develop an institute or someone career and
                                    establish as a dexterous one in the related field and in this way, I want to
                                    contribute to the welfare & enhancement of the country & world.
                                My Expertise on Computer Hardware & Networking are excellent
                                    and my Special Expertise on web based technology like HTML5, CSS3, JavaScript
                                    (SCMA-5, 6), jQuery, JSON, NodeJS, Ajax, VueJS, PHP8, Laravel 10, Codeigniter,
                                    Cake PHP,MySQL, MSSQL. I love my work & I also love to do my work.',
                'modules' => [
                    0 => [
                        'modules_title' => 'User-Centered Design',
                        'modules_content' => [
                            0 => 'Creating User Personas',
                            1 => 'Journey Mapping'
                        ]
                    ],
                    1 => [
                        'modules_title' => 'Prototyping and Testing',
                        'modules_content' => [
                            0 => 'Interactive Prototypes',
                            1 => 'Usability Testing Methods'
                        ]
                    ]
                ]
            ],
            8 => [
                'id' => 9,
                'title' => 'Machine Learning with Python',
                'description' => 'Dive into machine learning algorithms and their implementation using Python.',
                'duration' => '10 May - 10 Sep',
                'price' => 499.99,
                'total_hours' => 28,
                'image_url' => 'https://bitm.org.bd/assets/media/course_banner/1705811815.png',
                'last_date' => '20 March',
                'no_classes' => '140',
                'schedule_day' => 'Tue ,Fri ,Sunday',
                'schedule_time' => '7 PM',
                'technology' => [
                    'name' => 'Python',
                    'name' => 'Scikit-learn',
                    'name' => 'TensorFlow',
                    'name' => 'Keras',
                    'name' => 'NumPy',
                    'name' => 'Pandas'
                ],
                'videos' => '140',
                'resources' => '160',
                'projects' => '118',
                'teacher_name' => 'Habibur Rahman',
                'teacher_img' => 'https://bitm.org.bd/assets/media/trainer_photo/1695814430.png',
                'teacher_details' => 'Habibur Rahman is a professional web-based application
                                    Designer, Developer, Trainer & Web Based Application System Designer. Always I
                                    want to do something where I would be able to exert my academic knowledge,
                                    experience and potentiality to develop an institute or someone career and
                                    establish as a dexterous one in the related field and in this way, I want to
                                    contribute to the welfare & enhancement of the country & world.
                                My Expertise on Computer Hardware & Networking are excellent
                                    and my Special Expertise on web based technology like HTML5, CSS3, JavaScript
                                    (SCMA-5, 6), jQuery, JSON, NodeJS, Ajax, VueJS, PHP8, Laravel 10, Codeigniter,
                                    Cake PHP,MySQL, MSSQL. I love my work & I also love to do my work.',
                'modules' => [
                    0 => [
                        'modules_title' => 'Supervised Learning',
                        'modules_content' => [
                            0 => 'Linear Regression',
                            1 => 'Classification Algorithms'
                        ]
                    ],
                    1 => [
                        'modules_title' => 'Unsupervised Learning',
                        'modules_content' => [
                            0 => 'Clustering Techniques',
                            1 => 'Dimensionality Reduction'
                        ]
                    ]
                ]
            ],
        ];
    }
    public function getAllCourse()
    {
        return $this->courses;
    }
    public function getCourseById($id)
    {
        foreach ($this->courses as $course) {
            if ($course['id'] == $id) {
                return $course;
            }
        }
    }
}
