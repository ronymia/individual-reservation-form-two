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
    
   }elseif(!empty($full_name) && !empty($email) && !empty($phone) && !empty($country)  && $radio == "individual"){
     header("Location: individual.php");
   }
}

?>