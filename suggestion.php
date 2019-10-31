<!DOCTYPE html>
<html lang="en">

<head>

<style>
div.fixed {
  position: fixed;
  bottom: 25px;
  right: 20px;
  width: 600px;

  border: 3px solid #73AD21;
}
#example2 {
  border: 1px solid;
  padding: 10px;
  box-shadow: 5px 10px #054444;
}
</style>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css" type="text/css" />
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
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">LogOut</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

 <br>
 <br>
  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Suggested Crops</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <div class="fixed">
         <img src="img/typesdesc.png" height="350px"; >
      </div>


    <!-- Suggested Crops -->
    <div class="email-qoute overflowscrollbar">
          <?php
          $conn = mysqli_connect("localhost","root","","agreenculturedb");
          
          $query = "SELECT * FROM tblcrop, tbllocationrelation, tblcroplocation WHERE tblcrop.CropID = tbllocationrelation.CropID AND tbllocationrelation.LocationID = tblcroplocation.LocationID AND tblcroplocation.Municipality = 'Sto. Tomas' ORDER BY Successrate DESC";

          $result = mysqli_query($conn,$query);

          if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
              echo "<div class='name left'> <img src = '" . $row['Image'] . "'></div>";
              echo "<div class='name left'> Success Rate: " . $row['Successrate'] . " <br></div>";
              echo "<div class='name left'> Crop: " . $row['Cropname'] . " <br></div>";
              echo "<div class='name left'> Soil Type: " . $row['Soiltype'] . " <br></div>";
              echo "<div class='name left'> Planting Period: " . $row['Plantingstart'] . " to " . $row['Plantingend'] . "<br></div>";
              echo "<div class='name left'> Harvesting Period: " . $row['HarvestingDuration'] . " <br></div>";
              echo "<div class='name left'> Depth of Sowing: " . $row['Sowingdepth'] . " <br></div>";
              echo "<div class='name left'> Climate Type: " . $row['Type'] . " <br></div>";
              echo "<br>";
              if ($row['Cropname'] == "Ampalaya") {
                echo "<div><a href='ampalayaAdvisory.php'> <input type='submit' value='Try' / class='button-design'></a></div>";
              }
              elseif ($row['Cropname'] == "Cabbage") {
                echo "<div><a href='cabbageAdvisory.php'> <input type='submit' value='Try' / class='button-design'></a></div>";
              } 
              elseif ($row['Cropname'] == "Garlic") {
                echo "<div><a href='garlicAdvisory.php'> <input type='submit' value='Try' / class='button-design'></a></div>";
              }
              elseif ($row['Cropname'] == "Lettuce") {
                echo "<div><a href='lettuceAdvisory.php'> <input type='submit' value='Try' / class='button-design'></a></div>";
              }
              elseif ($row['Cropname'] == "Carrot") {
                echo "<div><a href='carrotAdvisory.php'> <input type='submit' value='Try' / class='button-design'></a></div>";
              }
              
            }
          }else{
            echo "NO MESSAGES / POST";
            }



          ?>

        </div>


      </div>
    </div>

 


  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
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