<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="some.css" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AGreenCulture</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">
<img src="img/AmpalayaCircle.png" style="position: fixed; top: 100px  ;z-index: -99">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">A<img src="img/logo.png" height="50px" width="50px"></img>Culture</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">


          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="suggestion.php">Back</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="email-body two automargin">
  <br/>
  <br/>
  <br/>
  <br/><br/><br/><br/><br/>
        <div>
          <img src="">
        </div>
        <form action="#"  method="POST">
          <?php
          $ISQM = 0;
          $Temp = 0;
          $conn = mysqli_connect("localhost","root","","agreenculturedb");
          
          $query = "SELEcT * FROM tblfarmer WHERE FarmerID = 1";

          $result = mysqli_query($conn,$query);

          if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
              echo "<h2 align='center'>Lot Size(Hectares)</h2>";
              echo "<div><input type='text' value=" . $row['Lotsize'] . " /></div>";
              $ISQM = 64.64;
              $Temp = 12*10000;
              echo "<h2 align='center'>Estimated Income(Gross Income)</h2>";
              echo "<div><input type='text' value= " . $ISQM * $Temp . " /></div>";
              echo "<h2 align='center'>Estimated Capital</h2>";
              $month = 4;
              $SeedPrice = 24*$Temp;
              $WaterPrice = 1000*$month;
              $GasolineorFeeds = 500*$month;
              $TotalPrice = $SeedPrice+$WaterPrice+$GasolineorFeeds;

              echo "<div ><input type='text' value=" . $TotalPrice . " / ><br/></div>";
            }
          }



          ?>

                

          <div>
            <input type="submit" value="GENERATE" / class="button-design">


          </div>

        </form>
         <div>
            <img src="img/AmpalayaBarchart.png" style="margin-right: 200px;height: 440px;">
      </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>

</body>

</html>
