<?php
$results; 


function emptyInputSignup($username,$fullnames,$email,$password,$confirmpassword){
    
    if (empty($fullnames) || empty($username) || empty($email) || empty($password) || empty($confirmpassword) ) {
        $results = true;
    }else {
        $results = false;
    }

    return $results;
}

 
function invalidUid($username){
    
    if (!preg_match("/^[a-zA-Z0-9]*$/" , $username )) {   /* function returns whether a match was found in a string. */
        $results = true;
    }else {
        $results = false;
    }

    return $results;
} 


function invalidEmail($email) {
    
    if (!filter_var($email , FILTER_VALIDATE_EMAIL)) {
        $results = true;
    }else {
        $results = false;
    }

    return $results;
}



function passwordMatch($password,$confirmpassword) {
    
    if ($password !== $confirmpassword) {
        $results = true;
    }else {
        $results = false;
    }

    return $results;
}

function uidExists($connection , $username , $email)  {
    
    $sql = " SELECT *  FROM  account_data WHERE  username  = ?  OR  email  = ? ; " ; 
    $stmt = mysqli_stmt_init($connection);    /*  initializes a statement and returns an object suitable for mysqli_stmt_prepare(). */
    if (!mysqli_stmt_prepare($stmt , $sql) ) {    /* prepares an SQL statement for execution */
        header('location: signup.php?error=stmtfailed');
        exit(); //stop the script from running
    }

         mysqli_stmt_bind_param($stmt , "ss" ,  $username , $email);  /* returns a boolean value which is true on success and false on failure. */
        mysqli_stmt_execute($stmt);  /* function accepts a prepared statement object (created using the prepare() function) as a parameter, and executes it. */
        $resultsData = mysqli_stmt_get_result($stmt);

        if ( $row  =  mysqli_fetch_assoc($resultsData)) {
            return $row;
        }else {
            $results = false;
            return $results;
        }

        mysqli_stmt_close($stmt);
   
}

function createUser($connection,$username,$fullnames,$email,$password)  {
    
    $sql = "INSERT INTO account_data (username,fullnames,email,password)  VALUES (?, ?, ?, ?) ;" ; 
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt , $sql) ) {
        header('location: index.php?error=stmtfailed');
        exit(); //stop the script from running
    }

    $hashedPassword = password_hash($password,PASSWORD_DEFAULT);

         mysqli_stmt_bind_param($stmt , "ssss" ,    $username ,$fullnames, $email, $hashedPassword);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header('location:index.php?error=none');
        exit(); //stop the script from running
 
}

function emptyInputLogin($username,$password){
    
    if (empty($username) || empty($password)  ) {
        $results = true;
    }else {
        $results = false;
    }

    return $results;
}

function loginUser($connection,$username,$password,$email){
   
   
    $uidExists = uidExists($connection , $username , $email);
    if ($uidExists === false ) {
      header('location:index.php?error=wronglogin');
      exit();
    }

    $passwordHashed = $uidExists['password'];
    $checkPassword = password_verify($password,$passwordHashed);

    if ($checkPassword === false) {
        header('location:index.php?error=wronglogindetails');
      exit();
    }elseif ($checkPassword === true) {
        session_start();
        $_SESSION['username'] = $uidExists['username'];
        header('location:buy_ticket.php?error=none');
        exit();
    }



}


function emptyBooking($from,$to,$jdate){
    
    if (empty($from) || empty($to) || empty($jdate)  ) {
        $results = true;
    }else {
        $results = false;
    }

    return $results;
}

function booking_time ($connection,$from,$to,$jdate){

     $sql = "INSERT INTO booking_data (origin,destination,date_of_travel) VALUES (?,?,?);";
     $stmt = mysqli_stmt_init($connection);

     if (!mysqli_stmt_prepare($stmt , $sql)) {
        header('location: buy_ticket.php?error=stmtfailed');
        exit(); //stop the script from running
     }

     mysqli_stmt_bind_param($stmt , "sss" ,$from,$to,$jdate);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_close($stmt);

     header('location:buy_ticket.php?error=booked');
     exit(); //stop the script from running
}