<?php
session_start();
include('connection.php');

//logout
//include('logout.php');
//remember me
//include('8.rememberme.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Airline Ticket Reservation</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="styling.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Arvo:ital@0;1&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Arvo', serif;
            background-color: black;
        }
        .carouselsize{
  height: 100vh;
}
        .adminbtn{
            margin-left: 10px;
            margin-top: 50px;
        }
        .login, .admin{
          color: white;
        }
        .login:hover{
          color: white;
          background-color: green;
        }
        .admin:hover{
          background-color: red;
          color: white;
        }
        .signup{
          color: white;
          margin-bottom: 200px;
          background-color: rgb(5,85,141);
        }
        .signup:hover{
          color: white;
          background-color: green;
        }
        .featurette-divider {
    margin: 5rem 0;
}
hr {
    margin: 1rem 0;
    color: inherit;
    border: 0;
    border-top: var(--bs-border-width) solid;
    opacity: .25;
}
hr {
    display: block;
    unicode-bidi: isolate;
    margin-block-start: 0.5em;
    margin-block-end: 0.5em;
    margin-inline-start: auto;
    margin-inline-end: auto;
    overflow: hidden;
    border-style: inset;
    border-width: 1px;
}
.featurette{
  background-color: black;
  color: white;
}
.info{
  background-color: black;
  margin-bottom: 50px;
}  
.line{
  margin-top: 0;
  background-color: black;
}
.lead{
  font-weight: lighter;
  color: #D4D3D1;
  font-style: italic;
} 
.fw-normal{
  color:#DEE2E5;
}
/* Common styles for all modal content */
.modal-content {
        background: rgba(36, 67, 131, 0.67);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(36, 67, 131, 1);
    }

    /* Specific styles for each modal */
    #loginmodal .modal-title,
    #signupmodal .modal-title,
    #forgotpasswordmodal .modal-title {
        color: white; /* Change text color for better visibility */
    }

    /* Optional: Adjust padding for better visual appearance */
    .modal-body, .modal-footer {
        padding: 15px;
    }

    /* Optional: Style buttons inside the modal footer */
    .modal-footer button {
        background: rgba(36, 67, 131, 0.8);
        border: 1px solid rgba(36, 67, 131, 1);
        color: white;
        border-radius: 8px;
        padding: 10px 20px;
        cursor: pointer;
    }

    .modal-footer button.btn-secondary {
        background: rgba(36, 67, 131, 0.2);
        border: 1px solid rgba(36, 67, 131, 0.5);
        color: white;
        border-radius: 8px;
        padding: 10px 20px;
        cursor: pointer;
    }
    .form-check-label, .green{
      color: white;
    }
    .navbar-nav li:hover {
        border-bottom: 1px solid white; 
    }

    .navbar-nav li a {
        transition: border-bottom 0.3s; /* Add a smooth transition effect */
    }
    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">Airline Ticket Reservation</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarcollapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="1.index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="2.feedbackfront.php">Feedback</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" tabindex="-1" aria-disabled="true">About</a>
                </li>
            </ul>

            <ul class="navbar-nav navbar-right">
                <li class="nav-item">
                <button type="button" class="btn admin" data-target="#signupmodal" data-toggle="modal" id="admin">Admin</button>
                    <!--<a class="nav-link text-white login" type="button" href="#loginmodal" data-toggle="modal">Login</a>-->
                </li>
            </ul>

            <ul class="navbar-nav navbar-right">
                <li class="nav-item">
                <button type="button" class="btn login" data-target="#loginmodal" data-toggle="modal" id="login">Login</button>
                    <!--<a class="nav-link text-white login" type="button" href="#loginmodal" data-toggle="modal">Login</a>-->
                </li>
            </ul>


            
        </div>
    </div>
</nav>