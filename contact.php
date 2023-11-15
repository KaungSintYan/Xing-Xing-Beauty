<?php

$nameError = $emailError = $subjectError = $messageError = ''; 
$isValid = true; 
date_default_timezone_set('Asia/Yangon');

include 'validate1.php';
require_once 'dbconnection.php'; 

if(isset($_POST['btnSubmit'])){
    
    if(validateName($_POST['name'])){
        $name = $_POST['name']; 
    }

    if(validateEmail($_POST['email'])){
        $email = $_POST['email']; 
    }

    if(validateSubject($_POST['subject'])){
        $subject = $_POST['subject']; 
    }

    if(validateMessage($_POST['message'])){
        $message = $_POST['message']; 
    }

    if($isValid){
        $createdTime = time();
        $query = "INSERT INTO xy_contact (`name`,`email`,`subject`,`message`) VALUES ('$name','$email','$subject','$message')";
        $result = mysqli_query($connection,$query); 

        if($result){
            echo 'Contact Successfully!';
        }else{
            echo mysqli_connect_error();
        }
        header('Location:contact.php'); 
    }

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> Xing Xing's Beauty - Contact </title>
        <link rel="shortcut icon" type="image/jpg" href="Images/logo.jpg" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

    <style>
            .team-item{
                /* float: left; */
                /* display: flex; */
                /* flex-direction: column; */
                margin-top: 50px;
            }
            .dropdown{
                position: relative;
                display: inline-block;
            }
            .dropdown-content{
                display: none;
                position: absolute;
                background-color: #835f35;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }
            .dropdown-content a{
                color: lightgrey;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }
            .dropdown-content a:hover {background-color: #ddd; color: black;}
            .dropdown:hover .dropdown-content {display: block;}
            .dropdown:hover .dropbtn{background-color: #3e8e41;}

            .h-6{
            animation: fadeInLeftBig;
            animation-duration: 1s;
            }
        </style>

    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block" style="background-color: #926A3B;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top-bar-left">
                            <div class="text">
                                <h2>10:00-19:00</h2>
                                <p>Mon - Sun</p>
                            </div>
                            <div class="text">
                                <h2>09-781 122838<h2>
                                <p>Call Us For Appointment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href="https://www.facebook.com/xingxingbeauty/about/?ref=page_internal"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/xingxing.beauty/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand"> <span>Xing</span>Xing</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="ml-auto">
                        <ul class="nav-menu navbar-nav">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link l-en">Home</a>
                                <a href="index.php" class="nav-link l-ch">家</a>
                                <a href="index.php" class="nav-link l-mm">ပင်မစာမျက်နှာ</a>
                            </li>
                            <li class="nav-item"> 
                                <a href="about.php" class="nav-link l-en">Our Story</a>
                                <a href="about.php" class="nav-link l-ch">我们的故事</a>
                                <a href="about.php" class="nav-link l-mm">အကြောင်းအရာ</a>
                            </li>
                            <li class="nav-item">
                                <a href="service.php" class="nav-link l-en">Service</a>
                                <a href="service.php" class="nav-link l-ch">服务</a>
                                <a href="service.php" class="nav-link l-mm">ဝန်ဆောင်မှု</a>
                            </li>
                            <li class="nav-item">
                                <a href="team.php" class="nav-link l-en">Booking</a>
                                <a href="team.php" class="nav-link l-ch">预订</a>
                                <a href="team.php" class="nav-link l-mm">ရက်ချိန်း</a>
                            </li>
                            <li class="nav-item">
                                <a href="gallery.php" class="nav-link l-en">Gallery</a>
                                <a href="gallery.php" class="nav-link l-ch">画廊</a>
                                <a href="gallery.php" class="nav-link l-mm">ဓါတ်ပုံပြခန်း</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link l-en active">Contact</a>
                                <a href="contact.php" class="nav-link l-ch active">接触</a>
                                <a href="contact.php" class="nav-link l-mm active">ဆက်သွယ်ရန်</a>
                            </li>
                            <div class="dropdown">
                                <li class="nav-item"><a href="#" class="nav-link l-en">Languages</a></li>
                                <li class="nav-item"><a href="#" class="nav-link l-ch">语言</a></li>
                                <li class="nav-item"><a href="#" class="nav-link l-mm">ဘာသာစကား</a></li>
                                <div class="dropdown-content">
                                    <a href="#" onclick="lang_en()" >English</a>
                                    <a href="#" onclick="lang_ch()" >Chinese</a>
                                    <a href="#" onclick="lang_mm()" >Myanmar</a>
                                </div>
                            </div>
                            
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- Nav Bar End -->

        <!-- Page Header Start -->
        <div class="page-header" style="background-color: #926A3B;">
            <div class="container">
                <div class="row">
                    <div class="col-12 h-6">
                        <h2 class="text-white l-en">Contact</h2>
                        <h2 class="text-white l-mm mb-5">ဆက်သွယ်ရန်</h2>
                        <h2 class="text-white l-ch">接触</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php" class="text-white">Home</a>
                        <a href="contact.php" class="text-white">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Contact Start -->
        <div class="section-header text-center" style="margin-top: 90px;">
            <p>Get In Touch</p>
            <h2 class="l-en" > If You Have Any Query, Please Contact Us </h2>
            <h2 class="l-mm mt-4" style="font-size: 25px;"> သိချင်တာမေးမြန်းလိုပါက ကျေးဇူးပြု၍ ဆက်သွယ်ပါ </h2>
            <h2 class="l-ch" style="font-size: 30px;"> 如果您有任何疑问，请联系我们 </h2>
        </div>

        <div class="contact">
            <div class="">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div>
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                <th scope="col" class="l-en">Monday :</th>
                                <th scope="col" class="l-mm">တနင်္လာနေ့ :</th>
                                <th scope="col" class="l-ch">周一 :</th>
                                <th scope="col"></th>
                                <th scope="col">10:00 AM - 7:00 PM</th>
                                </tr>
                            </thead>

                            <thead>
                                <tr>
                                <th scope="col" class="l-en">Tuesday :</th>
                                <th scope="col" class="l-mm">အင်္ဂါ :</th>
                                <th scope="col" class="l-ch">周二 :</th>
                                <th scope="col"></th>
                                <th scope="col">10:00 AM - 8:00 PM</th>
                                </tr>
                            </thead>

                            <thead>
                                <tr>
                                <th scope="col" class="l-en">Wednesday :</th>
                                <th scope="col" class="l-mm">ဗုဒ္ဓဟူးနေ့ :</th>
                                <th scope="col" class="l-ch">周三 :</th>
                                <th scope="col"></th>
                                <th scope="col">10:00 AM - 7:00 PM</th>
                                </tr>
                            </thead>

                            <thead>
                                <tr>
                                <th scope="col" class="l-en">Thursday :</th>
                                <th scope="col" class="l-mm">ကြာသပတေးနေ့ :</th>
                                <th scope="col" class="l-ch">周四 :</th>
                                <th scope="col"></th>
                                <th scope="col">10:00 AM - 7:00 PM</th>
                                </tr>
                            </thead>

                            <thead>
                                <tr>
                                <th scope="col" class="l-en">Friday :</th>
                                <th scope="col" class="l-mm">သောကြာ :</th>
                                <th scope="col" class="l-ch">星期五 :</th>
                                <th scope="col"></th>
                                <th scope="col">10:00 AM - 8:00 PM</th>
                                </tr>
                            </thead>

                            <thead>
                                <tr>
                                <th scope="col" class="l-en">Saturday :</th>
                                <th scope="col" class="l-mm">စနေနေ့ :</th>
                                <th scope="col" class="l-ch">周六 :</th>
                                <th scope="col"></th>
                                <th scope="col">10:00 AM - 7:00 PM</th>
                                </tr>
                            </thead>

                            <thead>
                                <tr>
                                <th scope="col" class="l-en">Sunday :</th>
                                <th scope="col" class="l-mm">တနင်္ဂနွေ :</th>
                                <th scope="col" class="l-ch">星期日 :</th>
                                <th scope="col"></th>
                                <th scope="col">10:00 AM - 7:00 PM</th>
                                </tr>
                            </thead>
                            
                            </table>
                    </div>
                        </div>
                        
                        <div class="col-6">
                            <div class="contact-form">
                                <div id="success"></div>
                                <form method="POST" action="contact.php">
                                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                        <div class="control-group">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" name="name" />
                                            <p class="help-block text-danger"> <?php echo $nameError ?> </p>
                                        </div>
                                        <div class="control-group">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" name="email"/>
                                            <p class="help-block text-danger"> <?php echo $emailError ?> </p>
                                        </div>
                                        <div class="control-group">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" name="subject" />
                                            <p class="help-block text-danger"> <?php echo $subjectError ?> </p>
                                        </div>
                                        <div class="control-group">
                                            <textarea class="form-control" name="message" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                            <p class="help-block text-danger"> <?php echo $messageError ?> </p>
                                        </div>
                                        <div>
                                            <button class="btn" type="submit" id="sendMessageButton" name="btnSubmit">Send Message</button>
                                        </div>
                                    </form>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- map start -->
        <div class="section-header text-center" style="margin-top: 90px;">
            <p>Exact Address</p>
            <h2 class="" > Our Location </h2>
        </div>
            <div class="map-detail">
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.229047574667!2d96.14252711478817!3d16.814989488424004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ebd28dd5f16d%3A0xe81515853d89062f!2sXing%20Xing%20beauty!5e0!3m2!1sen!2smm!4v1673947055267!5m2!1sen!2smm" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        <!-- map end -->

        <!-- Footer Start -->
        <div class="footer" style="margin: 0;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2 class="l-en">Salon Address</h2>
                                    <h2 class="l-ch">沙龙地址</h2>
                                    <h2 class="l-mm">အလှပြင်ဆိုင်လိပ်စာ</h2>
                                    <p class="l-en"><i class="fa fa-map-marker-alt"></i>
                                        Aung Min Gaung 2 Street , Kamayut Township , Yangon . ( Nearly Gangnam Medical Center ) Yangon, Myanmar, 11201</p>
                                    <p class="l-mm"><i class="fa fa-map-marker-alt"></i>
                                        အောင်မင်းဂေါင် ၂လမ်း ၊ကမာရွတ်မြို့နယ် ၊ရန်ကုန်။ (ဂန်းနမ်ဆေးဘက်ဆိုင်ရာစင်တာအနီး) ရန်ကုန်၊ မြန်မာ၊ ၁၁၂၀၁ </p>
                                    <p class="l-ch"><i class="fa fa-map-marker-alt"></i>
                                        仰光 Kamayut 乡 Aung Min Gaung 2 街。 (近江南医疗中心) Yangon, Myanmar, 11201 </p>
                                    <p><i class="fa fa-phone-alt"></i>09-781 122838</p>
                                    <p><i class="fa fa-envelope"></i>info@example.com</p>
                                    
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2 class="l-en">Quick Links</h2>
                                    <h2 class="l-mm">အမြန်လင့်များ</h2>
                                    <h2 class="l-ch">快速链接</h2>
                                    <a href="about.php" class="l-en">About us</a>
                                    <a href="about.php" class="l-mm">အကြောင်းအရာ</a>
                                    <a href="about.php" class="l-ch">我们的故事</a>
                                    <a href="contact.php" class="l-en">Contact us</a>
                                    <a href="contact.php" class="l-mm">ဆက်သွယ်ရန်</a>
                                    <a href="contact.php" class="l-ch">接触</a>
                                    <a href="team.php" class="l-en">Booking</a>
                                    <a href="team.php" class="l-mm">ရက်ချိန်း</a>
                                    <a href="team.php" class="l-ch">预订</a>
                                </div>
                                <div class="footer-social">
                                    <a href="https://www.facebook.com/xingxingbeauty/about/?ref=page_internal"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/xingxing.beauty/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-newsletter">
                            <h2 class="l-en">Newsletter</h2>
                            <h2 class="l-mm">စကားပါးလွှာ</h2>
                            <h2 class="l-ch">通讯</h2>
                                <p class="l-en">
                                    Whether it's hate or love, 
                                    Welcome every arrival with love and a smile 
                                    Thank you always for everyone you've met because there's a water machine. 
                                    and he's always trying to share better wisdom.
                                </p>
                                <p class="l-mm">
                                    အမုန်းပဲဖြစ်ဖြစ် အချစ်ပဲဖြစ်ဖြစ်၊
                                     ရောက်ရှိလာသူတိုင်းကို ချစ်ခြင်းမေတ္တာ အပြုံးများဖြင့် ကြိုဆိုလျက်ပါ။
                                     ရေစက်ရှိလို့ တွေ့ဖူးသူတိုင်းကို အမြဲကျေးဇူးတင်ပါတယ်။
                                     ပိုမိုကောင်းမွန်သော ဉာဏ်ပညာကို မျှဝေရန် အမြဲကြိုးစားနေပါသည်။
                                </p>
                                <p class="l-ch">
                                    不管是恨还是爱，
                                     用爱和微笑迎接每一个到来
                                     永远感谢你遇到的每一个人，因为有一台饮水机。
                                     他总是试图分享更好的智慧。
                                </p>
                                <div class="form">
                                    <input class="form-control" placeholder="Email goes here">
                                    <button class="btn" type="submit"> <a href="contact.php">Submit</a></button>
                                </div>  
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="https://www.facebook.com/xingxingbeauty"> Xing Xing Beauty </a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By <a href="https://www.facebook.com/secretcode.com.mm"> Secret Code </a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script src="js/style.js"></script>
    </body>
</html>