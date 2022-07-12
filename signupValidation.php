<?php

if (isset($_POST['submit'])) {
   
     $username = $_POST['uname'];
     $fullnames = $_POST['fullname'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $Confirmpassword= $_POST['Confirmpassword'];




      require_once 'connection.php';
      require_once 'functions.php';

     if (emptyInputSignup($username, $fullnames,$email,$password,$Confirmpassword)   !==  false ) {
         header('location: index.php?error=emptyinput');
         exit(); //stop the script from running
     }if (invalidUid($username )   !==  false ) {
        header('location: signup.php?error=invalidusername');
        exit(); //stop the script from running
    } if (invalidEmail($email)   !==  false ) {
        header('location: signup.php?error=invalidemail');
        exit(); //stop the script from running
    } if (passwordMatch($password,$Confirmpassword)   !==  false ) {
        header('location: signup.php?error=passworddontmatch');
        exit(); //stop the script from running
    } if (uidExists($connection , $username, $email)   !==  false ) {
        header('location: signup.php?error=usernametaken');
        exit(); //stop the script from running
    }

    createUser($connection,$username,$fullnames,$email,$password);


}else {
    header('location: ./index.php');
    exit();
}
