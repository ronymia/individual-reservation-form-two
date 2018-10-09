<?php include "develop.php" ?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <!-- Start WOWSlider.com HEAD section -->
  <link rel="stylesheet" type="text/css" href="engine1/style.css" />
  <script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/hover-min.css">
 <!---for gallery --->
 <link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
  <link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
  <link href='css/demo.css' rel='stylesheet' type='text/css'>
  <!--gallery-->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/datepicker.css">
</head>
<body>

<div class="full-individual">
  <div class="container">
     <div class="row">
      <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12 leftside animated bounceInLeft">
         <div class="header">
            <div class="logo">
                <img src='http://www.hotelshuktara.com/images/logo.png'>
              </div>
              <h4 class="text-center">Hotel Shuktara (Pvt.) Ltd.
                <span> 
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                </span>
              </h4>
        </div>
<!--=======================================================================
  form area start
  ============================================================================
  --->
 <form name="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
             <!-- check in area -->
             <div class="col-md-6 col-md-6 col-lg-6 col-xs-12 col-sm-6">
                 <div class="form-group">
                    <label for="inputEmail3">CheckIn</label>
                      <input  name="cin" size="16" type ="text" class="span2 form-control form-control" placeholder="mm/dd/yyy"  readonly id="dpd1" >
                      <p class="text-danger"><?php if(isset($cinerr)){echo $cinerr;}  ?></p>
                  </div>
            </div>

            <!-- check out area -->
             <div class="col-md-6 col-md-6 col-lg-6 col-xs-12 col-sm-6">
                <div class="form-group">
                  <label for="inputPassword3">CheckOut</label>
                 <input name="cout" type ="text" class="span2 form-control"  placeholder="mm/dd/yyy"  readonly id="dpd2"  >
                      <p class="text-danger"><?php if(isset($couterr)){echo $couterr;}  ?></p>
                 </div>
            </div>
         <!-- Room Details Area -->   
        <div class="roomdetails">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     Deluxe Suite
                       <span style="float: right;"> 
                    <i class="glyphicon glyphicon-plus"></i>
                    </span>
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                   <table>
                     <tr>
                       <th width="41%">Room Type</th>
                       <th width="10%">Max</th>
                       <th width="20%">Rack Rate</th>
                        <th width="20%">Special Rate</th>
                       <th width="10%">Room No.</th>
                     </tr>
                      <tr>
                        <td>
                          <!-- Button trigger modal -->
                    <a href="" data-toggle="modal" data-target="#myModal"> <img style="float: left;" src="assets/g1.jpg"  width="30px;" height="20px"></a>
                         
                         <ul>
                              <p><a href="" data-toggle="modal" data-target="#myModal">Deluxe Suit</a></p>
                            <li>Flat Screen TV </li>
                            <li>Air Conditioning</li>
                            <li>Not included: 26.5% tax.</li>
                            <li>Prices are per room</li>
                            <li>Room size: 1250 sq-feet.</li>
                             <li>Private Bathroom <a href="" data-toggle="modal" data-target="#myModal">More</a></li>
                          </ul>
                        </td>
                        <td>
                            <i class="glyphicon glyphicon-user"></i>
                            <i class="glyphicon glyphicon-user"></i>
                        </td>
                        <td>
                         
                            <span style="color: #000">$</span> 104
                          
                        </td>
                        <td>
                           <ul>
                            <li><span style="color: #000">$</span> 90</li>
                           </ul>
                        </td>
                        <td>
                           <ul>
                            <li><span style="color: #000">$</span> 104</li>
                           </ul>
                        </td>
                      </tr>
                   </table>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Executive Suite
                       <span style="float: right;"> 
                    <i class="glyphicon glyphicon-plus"></i>
                    </span>
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                   <table>
                     <tr>
                       <th width="41%">Room Type</th>
                       <th width="10%">Max</th>
                       <th width="20%">Rack Rate</th>
                        <th width="20%">Special Rate</th>
                       <th width="10%">Room No.</th>
                     </tr>
                      <tr>
                        <td>
                          <!-- Button trigger modal -->
                    <a href="" data-toggle="modal" data-target="#myModal"> <img style="float: left;" src="assets/g1.jpg"  width="30px;" height="20px"></a>
                         
                         <ul>
                              <p><a href="" data-toggle="modal" data-target="#myModal">Deluxe Suit</a></p>
                            <li>Flat Screen TV </li>
                            <li>Air Conditioning</li>
                            <li>Not included: 26.5% tax.</li>
                            <li>Prices are per room</li>
                            <li>Room size: 1250 sq-feet.</li>
                             <li>Private Bathroom <a href="" data-toggle="modal" data-target="#myModal">More</a></li>
                          </ul>
                        </td>
                        <td>
                            <i class="glyphicon glyphicon-user"></i>
                            <i class="glyphicon glyphicon-user"></i>
                        </td>
                        <td>
                          <ul>
                            <li> Special conditions, pay when you stay</li><hr>
                            <li> Free Breakfast</li>
                           </ul>
                        </td>
                        <td>
                           <ul>
                            <li><span style="color: #000">$</span> 104</li>
                           </ul>
                        </td>
                      </tr>
                   </table>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Premium Suite
                       <span style="float: right;"> 
                    <i class="glyphicon glyphicon-plus"></i>
                    </span>
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                   <table>
                    <tr>
                       <th width="41%">Room Type</th>
                       <th width="10%">Max</th>
                       <th width="20%">Rack Rate</th>
                        <th width="20%">Special Rate</th>
                       <th width="10%">Room No.</th>
                     </tr>
                      <tr>
                        <td>
                          <!-- Button trigger modal -->
                    <a href="" data-toggle="modal" data-target="#myModal"> <img style="float: left;" src="assets/g1.jpg"  width="30px;" height="20px"></a>
                         
                         <ul>
                              <p><a href="" data-toggle="modal" data-target="#myModal">Deluxe Suit</a></p>
                            <li>Flat Screen TV </li>
                            <li>Air Conditioning</li>
                            <li>Not included: 26.5% tax.</li>
                            <li>Prices are per room</li>
                            <li>Room size: 1250 sq-feet.</li>
                             <li>Private Bathroom <a href="" data-toggle="modal" data-target="#myModal">More</a></li>
                          </ul>
                        </td>
                        <td>
                            <i class="glyphicon glyphicon-user"></i>
                            <i class="glyphicon glyphicon-user"></i>
                        </td>
                        <td>
                          <ul>
                            <li> Special conditions, pay when you stay</li><hr>
                            <li> Free Breakfast</li>
                           </ul>
                        </td>
                        <td>
                           <ul>
                            <li><span style="color: #000">$</span> 104</li>
                           </ul>
                        </td>
                      </tr>
                   </table>
                  </div>
                </div>
              </div>
            </div>
        </div><!-- room details -->

          <div class="row">
            <div class="col-md-6 col-md-6 col-lg-6 col-xs-12 col-sm-6">
                <div class="form-group">
                  <label>Room Type
                      </label>
                      <select id="soflow" name="troom"  class="form-control" value="" >
                       <option value selected >Select an Option
                        </option>
                        <option value="Deluxe Couple">Deluxe Couple
                        </option>
                        <option value="Deluxe Twin">Deluxe Twin
                        </option>
                        <option value="Family Suite">Family Suite
                        </option>
                        <option value="Deluxe Cottage">Deluxe Cottage
                        </option>
                        <option value="Water Cottage">Water Cottage
                        </option>
                      </select>
                      <p class="text-danger">
                        <?php if(isset($troomerr)){echo $troomerr;}  ?>
                      </p>
                    </div>
             </div>


             <div class="col-md-6 col-md-6 col-lg-6 col-xs-12 col-sm-6">
                <div class="form-group">
                      <label>Bedding Type
                      </label>
                      <select id="soflow" name="bed" class="form-control" value="" >
                       <option value selected >Select an Option
                        </option>
                        <option value="Single">Single
                        </option>
                        <option value="Double">Double
                        </option>
                        <option value="Triple">Triple
                        </option>
                        <option value="Quad">Quad
                        </option>
                        <option value="None">None
                        </option>
                      </select>
                      <p class="text-danger">
                        <?php if(isset($bederr)){echo $bederr;}  ?>
                      </p>
                    </div>
            </div>
         </div>
      <div class="row">
            <div class="col-md-6 col-md-6 col-lg-6 col-xs-12 col-sm-6">
                  <div class="form-group">
                      <label>Number of adults
                      </label>
                      <select name="adult" id="soflow" class="form-control" value="" >
                        <option value selected >Select an Option
                        </option>
                        <option value="No">No
                        </option>
                        <option value="1">1
                        </option>
                        <option value="2">2
                        </option>
                        <option value="3">3
                        </option>
                        <option value="4">4
                        </option>
                        <option value="5">5
                      </select>
                      <p class="text-danger">
                        <?php if(isset($adulterr)){echo $adulterr;}  ?>
                      </p>
                    </div>
            </div>


             <div class="col-md-6 col-md-6 col-lg-6 col-xs-12 col-sm-6">
                <div class="form-group">
                      <label>Number of children
                      </label>
                      <select name="children" id="soflow" class="form-control" value="" >
                        <option value selected >Select an Option
                        </option>
                        <option value="No">No
                        </option>
                        <option value="1">1
                        </option>
                        <option value="2">2
                        </option>
                        <option value="3">3
                        </option>
                        <option value="4">4
                        </option>
                        <option value="5">5
                      </select>
                      <p class="text-danger">
                        <?php if(isset($childrenerr)){echo $childrenerr;}  ?>
                      </p>
                    </div>
            </div>
        </div>

     <div class="row">
            <div class="col-md-6 col-md-6 col-lg-6 col-xs-12 col-sm-6">
               <div class="form-group">
                      <label>No.of Rooms
                      </label>
                      <select name="nroom" id="soflow" class="form-control" value="" >
                        <option value selected >Select an Option
                        </option>
                        <option value="1">1
                        </option>
                        <option value="2">2
                        </option>
                        <option value="3">3
                        </option>
                        <option value="4">4
                        </option>
                        <option value="5">5
                        </option>
                      </select>
                      <p class="text-danger">
                        <?php if(isset($nroomerr)){echo $nroomerr;}  ?>
                      </p>
                    </div>
            </div>

             <div class="col-md-6 col-md-6 col-lg-6 col-xs-12 col-sm-6">
                <div class="form-group">
                      <label>No.of People
                      </label>
                      <select name="npeople" id="soflow" class="form-control" value="" >
                        <option value selected >Select an Option
                        </option>
                        <option value="1">1
                        </option>
                        <option value="2">2
                        </option>
                        <option value="3">3
                        </option>
                        <option value="4">4
                        </option>
                        <option value="5">5
                        </option>
                      </select>
                      <p class="text-danger">
                        <?php if(isset($nperr)){echo $nperr;}  ?>
                      </p>
                    </div>
            </div>
         </div>
        
        <div class="row">
           <div class="text-center"><h4>Personal Information</h4></div>
           <hr>
            <div class="col-md-6 col-md-6 col-lg-6 col-xs-12 col-sm-6">
             <div class="form-group">
                  <label for="inputEmail3">First name</label>
                  <input type="text" name="fname" class="form-control" id="inputEmail3" placeholder="first name">
                   <p class="text-danger">
                        <?php if(isset($fnerr)){echo $fnerr;}  ?>
                      </p>
                  </div>
            </div>


             <div class="col-md-6 col-md-6 col-lg-6 col-xs-12 col-sm-6">
                 <div class="form-group">
                  <label for="inputEmail3">Last name</label>
                  <input type="text" name="lname" class="form-control" id="inputEmail3" placeholder="last name">
                   <p class="text-danger">
                        <?php if(isset($lnerr)){echo $lnerr;}  ?>
                      </p>
                  </div>
            </div>
        </div>

      <div class="row">
            <div class="col-md-6 col-md-6 col-lg-6 col-xs-12 col-sm-6">
                  <div class="form-group">
                  <label for="inputEmail3">Phone</label>
                  <input type="text" name="phone" class="form-control" id="inputEmail3" placeholder="phone">
                  <p class="text-danger">
                        <?php if(isset($pherr)){echo $pherr;}  ?>
                      </p>
                  </div>
            </div>


             <div class="col-md-6 col-md-6 col-lg-6 col-xs-12 col-sm-6">
                 <div class="form-group">
                  <label for="inputEmail3">Email</label>
                  <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="email">
                  <p class="text-danger">
                        <?php if(isset($eerr)){echo $eerr;}  ?>
                      </p>
                  </div>
            </div>
          </div>
        <div class="row">
            <div class="col-md-6 col-md-6 col-lg-6 col-xs-12 col-sm-6">
                  <div class="form-group">
                                            <label>Passport Country</label>
                                            <select id="soflow" name="country" class="form-control" value="">
                        <option value selected >country</option>
                                                <option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote d'Ivoire">Cote d'Ivoire</option><option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="France Metropolitan">France Metropolitan</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option><option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option><option value="Korea, Republic of">Korea, Republic of</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Moldova, Republic of">Moldova, Republic of</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="St. Helena">St. Helena</option><option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Taiwan, Province of China">Taiwan, Province of China</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania, United Republic of">Tanzania, United Republic of</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands (British)">Virgin Islands (British)</option><option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option><option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Yugoslavia">Yugoslavia</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>                                            </select>
                                              <p class="text-danger"><?php if(isset($cerr)){echo $cerr;}  ?></p>
                </div>
            </div>


             <div class="col-md-6 col-md-6 col-lg-6 col-xs-12 col-sm-6">
                 <div class="form-group">
                  <label>Gender
                      </label>
                      <select id="soflow" name="gendertype"  class="form-control" value="" >
                       <option value selected >Select an Option
                        </option>
                        <option value="Male">Male
                        </option>
                          <option value="Female">Female
                        </option>
                        <option value="Others">Others
                        </option>
                        
                      </select>
                      <p class="text-danger">
                        <?php if(isset($gendererr)){echo $gendererr;}  ?>
                      </p>
                    </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-md-6 col-lg-6 col-xs-12 col-sm-6">
               <div class="form-group">
                      <div class="checkbox">
                       <input type="checkbox" name="checkbox" value="check"  /><span>By clicking Book Now, you agree to our <a href="https://stackoverflow.com/legal/privacy-policy" target="_blank">Terms & Conditions.</a></span>
                      
                      </div>
                    </div>
            </div>

             <div class="col-md-6 col-md-6 col-lg-6 col-xs-12 col-sm-6">
                  <div class="form-group"><a href="" class="hvr-wobble-horizontal">
                      <input name="contact" type ="submit" class="form-control btn btn-success" value="BOOK NOW" onclick="if(!this.form.checkbox.checked){alert('You must agree to the Terms & Conditions.');return false}" /> </a>
                    </div>
            </div>
         </div>
  </form>
      </div><!--col-area-->
      <div class="col-md-4 col-lg-4 col-xs-12 col-sm-4 animated bounceInRight">
         <div class="rightside">
           <div class="header">
           <h4 class="text-center">AT A GLANCE</h4>
           <img src="assets/border.png" alt="">
            </div>
            <div class="right-body">
              <!-- Start WOWSlider.com BODY section -->
                <div id="wowslider-container1">
                <div class="ws_images"><ul>
                    <li><img src="data1/images/img_6202.jpg" alt="IMG_6202"  id="wows1_0"/></li>
                    <li><img src="data1/images/img_6594.jpg" alt="IMG_6594"  id="wows1_1"/></li>
                    <li><a href="http://wowslider.net"><img src="data1/images/img_6286.jpg" alt="bootstrap slideshow"  id="wows1_2"/></a></li>
                    <li><img src="data1/images/img_6288.jpg" alt="IMG_6288"  id="wows1_3"/></li>
                  </ul></div>
                  <div class="ws_bullets"><div>
                    <a href="#"><span><img src="data1/tooltips/img_6202.jpg" />1</span></a>
                    <a href="#"><span><img src="data1/tooltips/img_6594.jpg" />2</span></a>
                    <a href="#"><span><img src="data1/tooltips/img_6286.jpg" />3</span></a>
                    <a href="#"><span><img src="data1/tooltips/img_6288.jpg" />4</span></a>
                  </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href=""></a></div>
                <div class="ws_shadow"></div>
                </div>  
               <!-- End WOWSlider.com BODY section -->
               <!-- map area start-->
               <div class="map">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7303.3652938867735!2d90.38530799468998!3d23.758693716753285!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xddec1fae8aa60761!2sHotel+Shuktara+Pvt.+Ltd.!5e0!3m2!1sen!2sbd!4v1539001616065" width="362" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                 </div>
               <!-- map area end -->

              
              </div>
          </div><!-- right side -->
          </div><!-- col-4 -->
           </div>
         </div><!--rightside--->
      </div>
    </div>
  </div>
</div>

<!-----gallery =----->


<!-- model area start -->
<div class="room-model">
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Deluxe Suite</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
            <div class="gallery">
                      <a href="assets/gmain.jpg" class="big"><img src="assets/gmain.jpg" width="40px;" alt="" title="Beautiful Image" /></a>
                      <a href="assets/g1.jpg"></a>
                      <a href="assets/g2.jpg"></a>
                      <a href="assets/g3.jpg"></a>
                      <a href="assets/g4.jpg"></a>
                    </div>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
            <div class="gallery">
                      <a href="assets/gmain.jpg" class="big"><img src="assets/gmain.jpg" width="40px;" alt="" title="Beautiful Image" /></a>
                      <a href="assets/g1.jpg"></a>
                      <a href="assets/g2.jpg"></a>
                      <a href="assets/g3.jpg"></a>
                      <a href="assets/g4.jpg"></a>
                    </div>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
            <div class="gallery">
                      <a href="assets/gmain.jpg" class="big"><img src="assets/gmain.jpg" width="40px;" alt="" title="Beautiful Image" /></a>
                      <a href="assets/g1.jpg"></a>
                      <a href="assets/g2.jpg"></a>
                      <a href="assets/g3.jpg"></a>
                      <a href="assets/g4.jpg"></a>
                    </div>
          </div>
        </div>
        <p><strong>Room facilities:</strong> Flat-Screen TV, Satelite Channel, Dining area, Dining table, Oven, Electrical kettle, Minibar, Kitchen, Kitchenette, Kitchenware, Microwave, Refrigerator, Balcony, View, City view, Wake-up service, Linens, Towel, Clothes rack, Air conditioning, Private pool, Dryer, Wardrobe/Closet, Extra long beds, Iron, Sofa, Safe, Soundproof, Sitting area, Tile/Marbel floor, Suit press, Desk, Shower, Bathroom, Free toiletries, Hairdryer, Slippers, Toilet, Additional bathroom.</p>
        <ul>
          <li><strong>Not included:</strong> 26.5% tax for this room.</li>
          <li><strong>Room price:</strong> US$ 104 /night</li>
          <li><strong>Room available:</strong> 8 ( out of 8 rooms )</li>
          <li><strong>Room size:</strong> 1250 sq-feet.</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div><!-- room-model -->
<script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <!-- wow slider script -->
   <script type="text/javascript" src="engine1/wowslider.js"></script>
   <script type="text/javascript" src="engine1/script.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script> 

<!--script for gallery--->
 <script type="text/javascript" src="js/simple-lightbox.js"></script>
<script>
  $(function(){
    var $gallery = $('.gallery a').simpleLightbox();

    $gallery.on('show.simplelightbox', function(){
      console.log('Requested for showing');
    })
    .on('shown.simplelightbox', function(){
      console.log('Shown');
    })
    .on('close.simplelightbox', function(){
      console.log('Requested for closing');
    })
    .on('closed.simplelightbox', function(){
      console.log('Closed');
    })
    .on('change.simplelightbox', function(){
      console.log('Requested for change');
    })
    .on('next.simplelightbox', function(){
      console.log('Requested for next');
    })
    .on('prev.simplelightbox', function(){
      console.log('Requested for prev');
    })
    .on('nextImageLoaded.simplelightbox', function(){
      console.log('Next image loaded');
    })
    .on('prevImageLoaded.simplelightbox', function(){
      console.log('Prev image loaded');
    })
    .on('changed.simplelightbox', function(){
      console.log('Image changed');
    })
    .on('nextDone.simplelightbox', function(){
      console.log('Image changed to next');
    })
    .on('prevDone.simplelightbox', function(){
      console.log('Image changed to prev');
    })
    .on('error.simplelightbox', function(e){
      console.log('No image found, go to the next/prev');
      console.log(e);
    });
  });
</script>       
</body>
</html>


