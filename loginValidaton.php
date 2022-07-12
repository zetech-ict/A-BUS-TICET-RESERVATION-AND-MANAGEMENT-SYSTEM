<?php

if (isset($_POST['login'])) {

    $username = $_POST['uname'];
     $password = $_POST['upass'];

     require_once 'connection.php';
      require_once 'functions.php';

     if (emptyInputLogin($username,$password)   !==  false ) {
         header('location: index.php?error=emptyinput');
         exit(); //stop the script from running
     }

     loginUser($connection,$username,$password,$email);
}