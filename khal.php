<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> Xing Xing's Beauty - ခဲမူန် </title>
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
        <link href="css/style2.css" rel="stylesheet">

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
                                <a href="service.php" class="nav-link active l-en">Service</a>
                                <a href="service.php" class="nav-link active l-ch">服务</a>
                                <a href="service.php" class="nav-link active l-mm">ဝန်ဆောင်မှု</a>
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
                                <a href="contact.php" class="nav-link l-en">Contact</a>
                                <a href="contact.php" class="nav-link l-ch">接触</a>
                                <a href="contact.php" class="nav-link l-mm">ဆက်သွယ်ရန်</a>
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
        <!-- Page Header Start -->
        <div class="page-header" style="background-color: #926A3B;">
            <div class="container">
                <div class="row">
                    <div class="col-12 h-6">
                        <h2 class="l-mm"> ခဲမူန် - Service </h2>
                        <h2 class="l-en"> Lead addiction - Service </h2>
                        <h2 class="l-ch"> 铅瘾 - Service </h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Home</a>
                        <a href="service.php">Service</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div style="display: flex; flex-direction: row; justify-content: space-evenly;">
                <div class="box">
                    <div style="display:flex; flex-direction: row;">
                        <div>
                          <div class="card text-bg-light" style="width:220px; height: 200px; margin-right: 10px;">
                            <img src="Xingxing/xc5.jpg" class="card-img" alt="..." style="width:220px; height: 200px; ">
                          </div>
                          <div class="card text-bg-light" style="width:220px; height: 200px; margin-top: 10px;">
                            <img src="Xingxing/xc6.jpg" class="card-img" alt="..." style="width:220px; height: 200px;">
                          </div>
                        </div>
                        <div>
                          <div class="card text-bg-light" style="width:220px; height: 200px; margin-right: 10px;">
                            <img src="Xingxing/xc7.jpg" class="card-img" alt="..." style="width:220px; height: 200px; ">
                          </div>
                          <div class="card text-bg-light" style="width:220px; height: 200px; margin-top: 10px;">
                            <img src="Xingxing/xc6.jpg" class="card-img" alt="..." style="width:220px; height: 200px;">
                          </div>
                        </div>
                        </div>
                </div>
                <div class="textborder">
                        <p style="font-size:17px; margin-left: 20px;" class="l-mm">
                        Ombré 3 tone - အမူန် / အပိတ် / ခဲမူန်  စသဖြင့် အမည်ပေးကြပါတယ် <br>
                        ချစ်မိတ်ဆွေ အတော်များများ (အပိတ်) လို့ ကြားလိုက်တာနဲ့ ထိပ်ပိတ် အမြှီးပိတ် မျက်ခုံးပေါ်မှာ မျှော့ နှစ်ကောင်ကပ်ထားသလိုပဲ ထငိနေကြပါတယ် ။ <br>
                        ❌ လုံးဝမျှော့လိုမဟုတ်ပါ <br>
                        ✔️ Xing Xing beauty မှာ ခဲချယ်ထားသလို ပါးပါးလေးပါ ရှင့် <br>
                        ✔️ Makeup look ကြိုက်တဲ့ မိတ်ဆွေများအတွက် အရမ်းအဆင်ပြေပါတယ် <br>
                        ✔️ ထိုးပြီး ရေထိလို့ရပါတယ် <br>
                        ✔️ အနာဖေး အပြားလိုက်ကြီးဖြစ်မနေပါ <br>
                        New Techniques <br>
                        New Pigments colour <br>
                        New Design <br>                          
                        </p>
                        <p style="font-size:17px; margin-left: 20px;" class="l-en">
                        Ombré 3 tone - Amun / Off / Cheimun etc. are named <br>
                         When many of my dear friends heard (closed), they felt as if they had two rubber bands on their eyebrows. <br>
                         ❌ Not at all elastic <br>
                         ✔️ Xing Xing beauty is as thin as it is embroidered <br>
                         ✔️ Very convenient for friends who like makeup look <br>
                         ✔️ Can be injected and touched with water <br>
                         ✔️ The scab does not become a big flat <br>
                         New Techniques <br>
                         New Pigments color <br>
                         New Design <br>                         
                        </p>
                        <p style="font-size:17px; margin-left: 20px;" class="l-ch">
                        Ombré 3 音 - Amun / Off / Cheimun 等 <br>
                         很多仁兄一听（闭），感觉眉毛上好像套了两根皮筋。 <br>
                         ❌完全没有弹性<br>
                         ✔️星星美得像绣出来的一样瘦<br>
                         ✔️对于喜欢妆容的朋友来说非常方便<br>
                         ✔️ 可以用水注射和触摸<br>
                         ✔️结痂不会变成大扁<br>
                         新技术<br>
                         新颜料颜色 <br>
                         新设计 <br>                         
                        </p>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 20px;">
            <table class="table">
                <tr>
                    <th>Artists/teacher</th>
                    <th>ခဲမူန်</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <th>ဆရာမရှင်းရှင်း</th>
                    <td>
                     Gold Germany-518,000,
                     Germany-438,000,
                     USA-338,000
                    </td>
                    <td>
                        <a href="team1.php" class="btn btn-primary">Book</a>
                    </td>
                </tr>
                <tr>
                    <th>ဆရာမခင်မျိုးသူ</th>
                    <td>
                        Gold Germany- 388,000
                        Germany - 338,000
                        USA - 278,000 
                    </td>
                    <td>
                        <a href="team4.php" class="btn btn-primary" type="Submit">Book</a>
                    </td>
                </tr>
                <tr>
                    <th>ဆရာမအဲလာ</th>
                    <td>
                        Gold Germany - 298,000, 
                        Germany - 258,000, 
                        USA - 188,000 
                    </td>
                    <td>
                        <a href="team2.php" class="btn btn-primary" type="Submit">Book</a>
                    </td>
                </tr>
                <tr>
                    <th>ဆရာမသန်းသန်းခိုင်</th>
                   
                    <td>
                        Gold Germany - 248,000, 
                        Germany - 208,000, 
                        USA - 148,000 
                    </td>
                    <td>
                        <a href="team3.php" class="btn btn-primary" type="Submit">Book</a>
                    </td>
                </tr>
                <tr>
                    <th>Pro Artistဆရာမစန်းစန်း</th>
                    
                    <td>
                        Gold Germany -208,000 
                        Germany - 168,000 
                        USA - 98,000                         
                    </td>
                    <td>
                        <a href="team.php" class="btn btn-primary" type="Submit">Book</a>
                    </td>
                </tr>
                <tr>
                    <th>ဆရာမအိပွင့်</th>
                   <td></td>
                    <td>
                        <a href="#" class="btn btn-danger" type="button">BooK</a>
                    </td>
                    
                </tr>
            </table>
            <p>
                More Information::Call -09781122838
            </p>
        </div>

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Salon Address</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>
                                        Aung Min Gaung 2 Street , Kamayut Township , Yangon . ( Nearly Gangnam Medical Center ) Yangon, Myanmar, 11201</p>
                                    <p><i class="fa fa-phone-alt"></i>09-781 122838</p>
                                    <p><i class="fa fa-envelope"></i>info@example.com</p>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Quick Links</h2>
                                    <a href="about.php">About us</a>
                                    <a href="contact.php">Contact us</a>
                                    <a href="team.php">Booking</a>
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
                        <h2>Newsletter</h2>
                            <p>
                                Whether it's hate or love, 
                                Welcome every arrival with love and a smile 
                                Thank you always for everyone you've met because there's a water machine. 
                                and he's always trying to share better wisdom.
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
                        <p>&copy; <a href="https://www.facebook.com/xingxingbeauty">Xing Xing Beauty</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By <a href="https://www.facebook.com/secretcode.com.mm"> Secret Code </a></p>
                    </div>
                </div>
            </div>
        </div>
    
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- Page Header End -->
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