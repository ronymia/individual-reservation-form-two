<?php

$radio = "";
$error = "";

if(isset($_POST['contact'])){

      if(empty($_POST['radio'])){
        $error = "Field must not be empty!!";
    }else{
       $radio =  $_POST['radio']; 
    }
       
   if($radio == "coorporate"){
            header("Location: coorporate.php");
    
   }elseif($radio == "individual"){
     header("Location: individual.php");
   }
}

?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/hover-min.css">
  <link rel="stylesheet" href="css/datepicker.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body class="hero-bkg-animated">
<div class="full-area">
 <form action="index.php" method="post" class="animated bounceInDown">
  <table>
    <tr>
      
      <td colspan="2" style="text-align: center; color: #fff"><h2>Select Booking Category</h2>
         <img src="assets/border.png" alt="">
            <?php if (isset($error)) {echo "<spna style='color:#C9302C; float:left;'>$error</span>";} ?>
         </td>
    </tr>
   
    <tr>
          <td>
               <label class="control control-radio">
              <input name="radio" type ="radio" class="form-control" value="coorporate" ><span>Coorporate</span>
              <div class="control_indicator"></div>
         </td>

          <td>
             <label class="control control-radio">
            <input type="radio" name="radio" value="individual"><span>Individual</span>
            <div class="control_indicator"></div>
                 
      </td>
     
      </tr>
        <tr>
     
      <td colspan="3"> <input  name="contact" type ="submit" class="form-control btn btn-success hvr-shutter-in-vertical" value="GO NOW"></td>
    </tr>
  </table>
</form>
</div><!-- full area div -->
  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>

</body>

</html>
