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
    <link rel="stylesheet" href="">
</head>

<body>
    <nav class="navbar fixed-top navbar-default header">
   
        <div class="container-fluid">
            <h3>Bus Ticket Booking System</h3>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./buy_ticket.php">Booking</a>
        </li>
    </ul>
            <div class="navbar-right">Welcome <a href="/index.php?logout=1"><button class="btn btn-success ml-3 btn-sm">Logout</button></a></div>
        </div>
    </nav>
    
    

                    <div class="d-flex p-2 bd-highlight"> 
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
            <?php
                    include './connection.php';
                     $sql = ' SELECT * FROM booking_data ';
                     $result = $connection->query($sql);
                     if ($result->num_rows > 0) {
                     
                       foreach ($result as $results) {
                        echo '<tr>
                        
                        <td> '. $results['id'] .' </td>
                        <td> '. $results['origin'] .' </td>
                        <td> '. $results['destination'] .' </td>
                        <td> '. $results['date_of_travel'] .' </td>
                      
                      </tr>';
                       }
                      } else {
                        echo "0 results";
                      }

                   
                    ?>
  </tbody>
</table>

                 
                   
                    </div>

                    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

                    <script src="" async defer></script>
</body>

</html>