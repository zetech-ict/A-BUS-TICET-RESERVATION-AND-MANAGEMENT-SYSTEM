<?php

if (isset($_POST['submit'])) {
    
   $from = $_POST['from'];
   $to = $_POST['to'];
   $jdate = date('Y-m-d' , strtotime($_POST['jdate']));


   require_once 'connection.php';
   require_once 'functions.php';


     if (emptyBooking($from,$to,$jdate)   !==  false ) {
        header('location: buy_ticket.php?error=emptyinput');
        exit(); //stop the script from running
    }

    booking_time($connection,$from,$to,$jdate);



}else{
    header('location: buy_ticket.php');
    exit(); 
}