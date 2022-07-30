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
    <link rel="stylesheet" href="css/easy-autocomplete.min.css" />
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>

<body>
    <nav class="navbar fixed-top navbar-default header">
        <div class="container-fluid">
            <h3>Bus Ticket Booking System</h3>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./profile.php">Profile</a>
        </li>
    </ul>
            <div class="navbar-right">Welcome <a href="/index.php?logout=1"><button class="btn btn-success ml-3 btn-sm">Logout</button></a></div>
        </div>
    </nav>
    <div class="row">
        <div class="col-md-2 sidebar">
            <ul>
                <li><a href="buy_ticket.php" ><i class="fa fa-ticket"></i> Buy Ticket</a></li>
                <li><a href="profile.php" ><i class="fa fa-address-card"></i> My Profile</a></li>
                <li><a href="history.php" ><i class="fa fa-history"></i> History</a></li>
            </ul>
        </div>
        <form action="./booking_validation.php" method="post">
            <div class="form-group row">
                <label for="from" class="col-sm-2 col-form-label">From</label>
                <div class="col-sm-7 well">
                    <input type="text" class="form-control" id="inputFrom" name="from" value="" />
                </div>
            </div>
            <div class="form-group row">
                <label for="to" class="col-sm-2 col-form-label">To</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="inputTo" name="to" value="" />
                </div>
            </div>
            <script src="js/jquery.easy-autocomplete.min.js"></script>
            <script>
                var opt = {
                    url: "inc/ajax.php?type=locations",
                    list: {
                        match: {
                            enabled: true
                        }
                    }
                };
                $("#inputFrom").easyAutocomplete(opt);
                $("#inputTo").easyAutocomplete(opt);
            </script>
            <div class="form-group row">
                <label for="jdate" class="col-sm-2 col-form-label">Journey Date</label>
                <div class="col-sm-7 input-group">
                    <input name="jdate" class="form-control" id="inputJDate" type="text" value="" />
                </div>
            </div>
            <script src="js/bootstrap-datepicker.min.js"></script>
            <script>
                $('#inputJDate').datepicker({
                    format: "dd/mm/yyyy",
                    weekStart: 6,
                    startDate: "today",
                    autoclose: true,
                    todayHighlight: true
                });
            </script>
            <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm-7">
                    <input type="submit" class="btn btn-info" name="submit" value="Submit" />
                </div>
            </div>
        </form>
        <div class="popup" id="seatViewer">
            <div class="loader text-center" id="wait"><img src="/img/bus-loader.gif" alt="Wait..." /></div>
            <div class="table-con">
                <div class="row">
                    <div class="col-sm-2">Sl.</div>
                    <div class="col-sm-4">Bus Name</div>
                    <div class="col-sm-2">Dip. Time</div>
                    <div class="col-sm-2">Arr. Time</div>
                    <div class="col-sm-2">Fare (৳)</div>
                </div>
            </div>
            <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

            <script src="" async defer></script>
</body>

</html>