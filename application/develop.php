<?php

$terms = "<a href='https://www.facebook.com/'>Our terms & conditions</a>";
if(isset($_POST['contact'])){

if(empty($_POST['fname'])){
$fnerr =  'Field must not be empty!';
}else{
$fname =  test_input($_POST['fname']);
 // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    } 
}

if(empty($_POST['lname'])){
$lnerr =  'Field must not be empty!';
}else{
$lname =  test_input($_POST['lname']); 
}

if(empty($_POST['email'])){
$eerr=  'Field must not be empty!';
}else{
$email =  test_input($_POST['email']);
 // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    } 
}

if(empty($_POST['phone'])){
$pherr=  'Field must not be empty!';
}else{
$phone =  test_input($_POST['phone']); 
}

if(empty($_POST['country'])){
$cerr=  'Field must not be empty!';
}else{
$country =  test_input($_POST['country']); 
}

if(empty($_POST['gendertype'])){
$gendererr=  'Field must not be empty!';
}else{
$gendertype =  test_input($_POST['gendertype']); 
}


if(empty($_POST['bed'])){
$bederr =  'Field must not be empty!';
}else{
$bed =  test_input($_POST['bed']); 
}

if(empty($_POST['nroom'])){
$nroomerr =  'Field must not be empty!';
}else{
$nroom =  test_input($_POST['nroom']); 
}

if(empty($_POST['cin'])){
$cinerr =  'Field must not be empty!';
}else{
$cin =  $_POST['cin']; 
}
    
    
if(empty($_POST['cout'])){
$couterr =  'Field must not be empty!';
}else{
$cout =  $_POST['cout']; 
}

if(empty($_POST['nroom'])){
$nrerr =  'Field must not be empty!';
}else{
$nroom =  test_input($_POST['nroom']); 
}


if(empty($_POST['adult'])){
$adulterr =  'Field must not be empty!';
}else{
$adult =  test_input($_POST['adult']); 
}

if(empty($_POST['children'])){
$childrenerr =  'Field must not be empty!';
}else{
$children =  test_input($_POST['children']); 
}

if(empty($_POST['troom'])){
$troomerr =  'Field must not be empty!';
}else{
$troom =  test_input($_POST['troom']); 
}


if(empty($_POST['npeople'])){
$nperr =  'Field must not be empty!';
}else{
$npeople =  test_input($_POST['npeople']); 
}

if($_POST['checkbox']){
    $checkbox = "you have stay our hotel within 2 days";
}

if(!empty ($fname) && !empty($lname) && !empty($email) && !empty($phone) && !empty($country) && !empty($gendertype) && !empty($bed) && !empty($nroom) && !empty($cin) && !empty($cout) && !empty($npeople) &&  !empty($adult) && !empty($children) && !empty($troom)){
    
$msg = "
<table style='width:635px; margin: 0 auto; background: #ddd; padding: 14px; border-radius: 3px;'>
    <tr><td colspan='2'><img src='http://sksinn.com/assets/img/logo.png'></td></tr>
    <tr style='color:#008000; font-size:16px; '>
    <td colspan='2'>Thanks $fname $lname! Your reservation is complete.</td>
    </tr>
     <tr style='color:#4294de; font-size:18px; '>
    <td colspan='2'>SKSInn Hotel & Resort</td>
    </tr>
     <tr>
        <td style='border:1px solid #CCC; padding:5px 12px; width:113px;'><img src='http://sksinn.com/assets/img/property1.jpg'/></td>
        <td style='border:1px solid #CCC; '>
        Address: College Road, Radhakrisnopur,Gaibandha-5700, Bangladesh.<br/>
        Phone : +88-01853332974<br/>
        Email : info@sksinn.com
        </td>
    </tr>
    <tr>
        <td style='border:1px solid #CCC; padding:5px 12px;'>First Name</td>
        <td style='border:1px solid #CCC; '>$fname</td>
    </tr>
     <tr>
        <td style='border:1px solid #CCC; padding:5px 12px; '>Last Name</td>
        <td style='border:1px solid #CCC; '>$lname</td>
    </tr>
     <tr>
        <td style='border:1px solid #CCC; padding:5px 12px;'>Email</td>
        <td style='border:1px solid #CCC; '>$email</td>
    </tr>
     <tr>
        <td style='border:1px solid #CCC; padding:5px 12px;'>Phone</td>
        <td style='border:1px solid #CCC; '>$phone</td>
    </tr>
     <tr>
        <td style='border:1px solid #CCC; padding:5px 12px;'>Country</td>
        <td style='border:1px solid #CCC; '>$country</td>
    </tr>
     <tr>
        <td style='border:1px solid #CCC; padding:5px 12px;'>Gender</td>
        <td style='border:1px solid #CCC; '>$gendertype</td>
    </tr>
     <tr>
        <td style='border:1px solid #CCC; padding:5px 12px;'>Check In</td>
        <td style='border:1px solid #CCC; '>$cin</td>
    </tr>
     <tr>
        <td style='border:1px solid #CCC; padding:5px 12px;'>Check Out</td>
        <td style='border:1px solid #CCC; '>$cout</td>
    </tr>
     <tr>
        <td style='border:1px solid #CCC; padding:5px 12px;'>Adult</td>
        <td style='border:1px solid #CCC; '>$adult</td>
    </tr>
     <tr>
        <td style='border:1px solid #CCC; padding:5px 12px;'>Children</td>
        <td style='border:1px solid #CCC; '>$children</td>
    </tr>
     <tr>
        <td style='border:1px solid #CCC; padding:5px 12px;'>Room Type</td>
        <td style='border:1px solid #CCC; '>$troom</td>
    </tr>
     <tr>
        <td style='border:1px solid #CCC; padding:5px 12px;'>Bed Type</td>
        <td style='border:1px solid #CCC; '>$bed</td>
    </tr>
     <tr>
        <td style='border:1px solid #CCC; padding:5px 12px;'>Number of Room</td>
        <td style='border:1px solid #CCC; '>$nroom</td>
    </tr>
    <tr>
        <td style='border:1px solid #CCC; padding:5px 12px;'>Number of People</td>
        <td style='border:1px solid #CCC; '>$npeople</td>
    </tr>
     <tr>
        <td style='border:1px solid #CCC; padding:5px 12px;'>Terms & Conditions</td>
        <td style='border:1px solid #CCC; '>$terms</td>
    </tr>
                  
</table>
";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'Cc: ' .$email. "\r\n";
$headers .= 'Cc: ronymia111333@gmail.com'. "\r\n";


$mail =  mail('mytechcs365@gmail.com', 'From Website', $msg, $headers);
if($mail){
header("Location: confirm.php");
}
}
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



