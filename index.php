<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About</h4>
                    <p class="text-muted">Welcome to our student management website, hoping you will find all the information you are looking for.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                        <li class="nav-item"><a href="index.php?page=guest" class="nav-link">HOME</a></li>

                        <li class="nav-item"><a href="index.php?page=list-student" class="nav-link">LIST STUDENT</a></li>
                        <li class="nav-item"><a href="index.php?page=list-point" class="nav-link">LIST POINT</a></li>
                        <li class="nav-item"><a href="index.php?page=list-subject" class="nav-link">LIST SUBJECT</a></li>
                        <li><a href="https://www.facebook.com/" class="text-white">FACEBOOK ME</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                <strong>Support</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header></body>
</html>
<?php
require __DIR__."/vendor/autoload.php";
$studentController = new \QLD\Controller\StudentController();
$subjectController = new \QLD\Controller\SubjectController();
$pointController = new \QLD\Controller\PointController();
$page = isset($_REQUEST["page"])? $_REQUEST["page"]: NULL;

switch ($page){
    case "add-student":
        $studentController->addStudent();
        break;
    case "add-point":
        $pointController->addPoint();
        break;
    case "list-point":
        $pointController->showPoint();
        break;
    case "list-student":
        $studentController->showStudent();
        break;
    case "list-subject":
        $subjectController->showSubject();
        break;
    case "delete-student":
        $studentController->deleteStudent();
        break;
    case "search":
//        $student = isset($_REQUEST['name']) ? $_REQUEST['name'] : "";
        $studentController->search();
        break;
    case "edit":
        $studentController->edit();
        break;
//    default:
//        $studentController->showGuest();
//        break;
    case "guest":
        $studentController->showGuest();
        break;
    default:
        include "login.php";
}