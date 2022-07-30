<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css?'.date('his').'" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>

<body>
    <nav class="navbar fixed-top navbar-default header">
        <div class="container-fluid">
            <h3>Bus Ticket Booking System</h3>
            <div class="navbar-right">
                <form action="./loginValidaton.php" method="post" class="form-inline">
                    <input type="text" name="uname" placeholder="Username" class="form-control-sm mr-1" />
                    <input type="password" name="upass" placeholder="Password" class=" form-control-sm mr-1" />
                    <input type="submit" name="login" value="Login" class="btn btn-info btn-sm" />
                </form>
            </div>
        </div>
    </nav>
    </div>
    </div>
    </div>

    <h4 class="my-3">Create an Account</h4>
    <form action="./signupValidation.php" method="post">
        <div class="form-group row">
            <label for="uname" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-7">
                <input name="uname" type="text" class="form-control" id="inputUname" placeholder="Username" />
            </div>
            <div class="col-sm-2" id="infoUname"></div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-7">
                <input name="fullname" type="text" class="form-control" id="inputName" placeholder="Full Name" />
            </div>
            <div class="col-sm-2" id="infoName"></div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-7">
                <input name="email" type="text" class="form-control" id="inputEmail" placeholder="Email" />
            </div>
            <div class="col-sm-2" id="infoEmail"></div>
        </div>
        <div class="form-group row">
            <label for="upass" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-7">
                <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
            <div class="col-sm-2" id="infoPass"></div>
        </div>
        <div class="form-group row">
            <label for="upass" class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-7">
                <input name="Confirmpassword" type="password" class="form-control" id="inputPassword" placeholder=" Confirm Password">
            </div>
            <div class="col-sm-2" id="infoPass"></div>
        </div>

        <div class = "form-group row">
        <input type="submit" name="submit" value="create Account" class="btn btn-info btn-sm" />
        </div>
</form>
        <footer class="footer">
            <div class="row p-4">
                <div class="col-md-4">KTS, owned and operated by Kenya Limited, is a premium online and on-demand service provider committed to make your life convenient, easier and smarter.<br/>© 2022 KTS · All Rights Reserved</div>
                <div class="col-md-4 text-center">
                    <ul class="list-null">
                        <li><a href="">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-4 text-center text-light">
                    <ul class="list-null">
                        <li><a target="_blank" href="//facebook.com/#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a target="_blank" href="//www.instagram.com/#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a target="_blank" href="//www.linkedin.com/#"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a target="_blank" href="//twitter.com/#"><i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <script src="" async defer></script>
</body>

</html>