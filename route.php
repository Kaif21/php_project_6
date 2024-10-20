<?php
require_once'vendor/autoload.php';
use App\classes\HelloWorld;
use App\classes\Auth;
use App\classes\Dashboard;
$helloWorld = new HelloWorld();
//home
if($_GET['page'] == 'home'){
    $helloWorld->index();
}
//about
elseif($_GET['page'] == 'about'){
    $helloWorld->about();
}
//contact
elseif($_GET['page'] == 'contact'){
    $helloWorld->contact();
}
//details
elseif($_GET['page'] == 'details'){
    $helloWorld->details($_GET['id']);
}
//login
elseif($_GET['page'] == 'login'){
    $helloWorld->login();
}
//auth
elseif(isset($_POST['loginBtn'])){
    $auth = new Auth($_POST);
    $auth->loginCheck();
}
//dashboard
elseif($_GET['page'] == 'dashboard'){
    $dashboard = new Dashboard();
    $dashboard->index();
}