<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Feed Tech Bangladesh</title>
        <link rel="shortcut icon" href="images/licon.png"/>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="engine1/style.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style2.css">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
        <div class="main">

            <section class="top_menu_main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 top_menu" id="nav">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li></li>
                                <li><a href="aboutcompany.html">About Feed Tech Expo</a></li>
                                <li></li>
                                <li><a href="fact.html">Fact Sheet</a></li>
                                <li></li>
                                <li><a href="exibitorprofile.html">Exhibitor Profile</a></li>
                                <li></li>
                                <li><a href="visitor.html">Visitor Profile</a></li>
                                <li></li>
                                <li><a href="floorplan.html">Floor Plan</a></li>
                                <li></li>
                                <li><a href="aboutus.html">About us</a></li>
                                <li></li>
                                <li><a href="contact.html">Contact us</a></li>
                                <li></li>
                                <li><a href="form.html">Enquiry</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </section>

            <div class="container">
                <section class="banner">
                    <img src="images/banner.jpg" alt="banner" width="100%" height="auto">
                </section>
            </div>

            <section class="menu_main">
                <div class="container">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr id="menu">
                            <td width="140" class="menubar" style="text-align:center;">
                                <a style="color:#666;" href="report.html">
                                    <span>7th EDITION Show Report</span></a>
                            </td>

                            <td width="140" class="menubar">
                                <a style="color:#666;" href="mediaco.html">
                                    <span>Media Coverage </span></a>
                            </td>

                            <td width="109" class="menubar">
                                <a style="color:#666;  " href="download.html">
                                    <span>Downloads</span></a>
                            </td>

                            <td width="171" class="menubar">
                                <a style="color:#666;" href="https://photos.google.com/share/AF1QipN1ykwhqi2xdI7w9dyWwZzWJiX4DGmQL4fI8QNuZcUpdm6Xk13ZUWNP2_uR5myZhQ?key=Q1BuWXlINHRqWE8zcmJ5b0xHRUxuSGpVdmIydVdB" target="_blank"><span>Gallery</span></a>
                            </td>

                            <td width="171" class="menubar">
                                <a style="color:#666;" href="accommodation.html"><span>Accommodation</span></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </section>


            <section class="registration">
                <?php
// Include phpmailer class

                if (isset($_POST['submit'])) {

                    require 'PHPMailer/PHPMailerAutoload.php';

                    $mail = new PHPMailer;

// SMTP configuration
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'talk2twome@gmail.com';
                    $mail->Password = '01749677671';
                    $mail->SMTPSecure = 'tls';
                    $mail->Port = 587;

                    $mail->setFrom('rubelnayagola@gmail.com', 'From Local Server');
                    $mail->addReplyTo('info@example.com', 'CodexWorld');

// Add a recipient
                    $mail->addAddress('importantok@gmailgit.com');

// Add cc or bcc 
                    $mail->addCC('cc@example.com');
                    $mail->addBCC('bcc@example.com');

// Add attachments
                    //                $mail->addAttachment('codexworld.pdf');
// Email subject
                    $mail->Subject = 'Send Email via SMTP using PHPMailer by Coder Rubel';

// Set email format to HTML
                    $mail->isHTML(true);

// Email body content
                    $field = $_POST['opinion'];
                    $user = $_POST['user'];
                    $email = $_POST['email'];
                    $portfolio = $_POST['website'];
                    $phone = $_POST['mobile'];
                    $message = $_POST['message'];
                    $country = $_POST['country'];

                    $mailContent = '<h1>Feed Tech</h1>' . '<b>Interested Fill :</b>' . $field . '<br><b>Name :</b>' . $user . '<br><b>Mobile No : </b>' . $phone . '<br><b>Email :</b>' . $email . '<br><b>Website : </b>' . $portfolio . '<br><b>Message : </b>' . $message . '<br><b>Country : </b>' . $country . '<br>';
                    $mail->Body = $mailContent;

// Send email
                    if (!$mail->send()) {
                        echo 'Message could not be sent.';
                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                    } else {
                        echo 'Message has been sent';
                    }
                }
                ?>


                <h2>Registration Form</h2>

                <div class="form_body">
                    <form method="post" action="#" role="form">
                        <div class="select_radio">
                            <h5><strong>Select your option</strong></h5>

                            <input type="radio" name="opinion" value="Visitor" checked=""> &nbsp; Visitor<br>
                            <input type="radio" name="opinion" value="Exhibitor"> &nbsp; Exhibitor<br>
                            <input type="radio" name="opinion" value="Seminar"> &nbsp; Seminar

                        </div>
                        <div class="log_form">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input type="text" class="form_control" id="email" name="user" placeholder="Name">
                        </div>
                        <div class="log_form">
                            <i class="fa fa-phone"></i> 
                            <input type="text" name="mobile" class="form_control" id="mbl" placeholder="Mobile">
                        </div>
                        <div class="log_form">
                            <i class="fa fa-envelope" aria-hidden="true">

                            </i> <input type="email" name="email" class="form_control" id="email" placeholder="Email">
                        </div>
                        <div class="log_form">
                            <i class="fa fa-globe" aria-hidden="true"></i> 
                            <input type="text" name="website" class="form_control" id="web" placeholder="Website">
                        </div>
                        <br>
                        <select name="country" id="country">
                            <option value="">Your country</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AG">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AG">Antigua &amp; Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AA">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia</option>
                            <option value="BL">Bonaire</option>
                            <option value="BA">Bosnia &amp; Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BR">Brazil</option>
                            <option value="BC">British Indian Ocean Ter</option>
                            <option value="BN">Brunei</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="IC">Canary Islands</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CD">Channel Islands</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CI">Christmas Island</option>
                            <option value="CS">Cocos Island</option>
                            <option value="CO">Colombia</option>
                            <option value="CC">Comoros</option>
                            <option value="CG">Congo</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CT">Cote D'Ivoire</option>
                            <option value="HR">Croatia</option>
                            <option value="CU">Cuba</option>
                            <option value="CB">Curacao</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="TM">East Timor</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FA">Falkland Islands</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="FS">French Southern Ter</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GB">Great Britain</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GN">Guinea</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HW">Hawaii</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IA">Iran</option>
                            <option value="IQ">Iraq</option>
                            <option value="IR">Ireland</option>
                            <option value="IM">Isle of Man</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="NK">Korea North</option>
                            <option value="KS">Korea South</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Laos</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macau</option>
                            <option value="MK">Macedonia</option>
                            <option value="MG">Madagascar</option>
                            <option value="MY">Malaysia</option>
                            <option value="MW">Malawi</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="ME">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="MI">Midway Islands</option>
                            <option value="MD">Moldova</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Nambia</option>
                            <option value="NU">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="AN">Netherland Antilles</option>
                            <option value="NL">Netherlands (Holland, Europe)</option>
                            <option value="NV">Nevis</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NW">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau Island</option>
                            <option value="PS">Palestine</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PO">Pitcairn Island</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="ME">Republic of Montenegro</option>
                            <option value="RS">Republic of Serbia</option>
                            <option value="RE">Reunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russia</option>
                            <option value="RW">Rwanda</option>
                            <option value="NT">St Barthelemy</option>
                            <option value="EU">St Eustatius</option>
                            <option value="HE">St Helena</option>
                            <option value="KN">St Kitts-Nevis</option>
                            <option value="LC">St Lucia</option>
                            <option value="MB">St Maarten</option>
                            <option value="PM">St Pierre &amp; Miquelon</option>
                            <option value="VC">St Vincent &amp; Grenadines</option>
                            <option value="SP">Saipan</option>
                            <option value="SO">Samoa</option>
                            <option value="AS">Samoa American</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome &amp; Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="OI">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syria</option>
                            <option value="TA">Tahiti</option>
                            <option value="TW">Taiwan</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania</option>
                            <option value="TH">Thailand</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad &amp; Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TU">Turkmenistan</option>
                            <option value="TC">Turks &amp; Caicos Is</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="GB">United Kingdom</option>
                            <option value="US">United States of America</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VS">Vatican City State</option>
                            <option value="VE">Venezuela</option>
                            <option value="VN">Vietnam</option>
                            <option value="VB">Virgin Islands (Brit)</option>
                            <option value="VA">Virgin Islands (USA)</option>
                            <option value="WK">Wake Island</option>
                            <option value="WF">Wallis &amp; Futana Is</option>
                            <option value="YE">Yemen</option>
                            <option value="ZR">Zaire</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
                        <br>
                        <textarea class="message" name="message" id="email" placeholder="Message"></textarea>
                        <br>
                        <button type="submit" name="submit" class="btn btn-default submit_form">SUBMIT</button>
                    </form>
                </div>
            </section>


            <section class="footer">
                <div class="container">
                    <div class="footer_bdr">

                        <div class="row">

                            <div class="col-lg-7">
                                <p>© Limra Trade Fairs and Exhibitions Pvt. Ltd. 2017 - Developed by <a href="http://www.nextwebtheme.com" target="_blank">nextwebtheme.com</a></p>
                            </div>

                            <div class="col-lg-5">

                                <div id="social-link">
                                    <div class="icon_over">
                                        <a href="#" target="_blank"><span class="fa fa-twitter"></span></a>
                                        <div class="overlay"></div>
                                    </div>
                                    <div class="icon_over">
                                        <a href="https://www.facebook.com/agrotechbangladeshbd/" target="_blank"><span class="fa fa-facebook"></span></a>
                                        <div class="overlay"></div>
                                    </div>
                                    <div class="icon_over">
                                        <a href="#" target="_blank"><span class="fa fa-linkedin"></span></a>
                                        <div class="overlay"></div>
                                    </div>
                                    <div class="icon_over">
                                        <a href="https://plus.google.com/u/0/113461053161664397888" target="_blank"><span class="fa fa-google-plus"></span></a>
                                        <div class="overlay"></div>
                                    </div>
                                    <div class="icon_over">
                                        <a href="https://www.youtube.com/channel/UClnaePpYGoIO_gcFodKceiA" target="_blank"><span class="fa fa-youtube"></span></a>
                                        <div class="overlay"></div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </section>


            <section class="event wow wow bounceInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <a href="http://www.limraexpo.com/" target="_blank"><img src="images/limra.jpg" alt="limra.jpeg"></a>
            </section>


            <div class="scroll-to-top">
                <div id="scroll-up">
                    <a href="#"><span class="fa fa-angle-up"></span></a>
                </div>
            </div>


        </div>



        <script src="js/jquery-ajax.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="engine1/wowslider.js"></script>
        <script type="text/javascript" src="engine1/script.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
    </body>
</html>