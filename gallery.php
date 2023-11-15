<!-- start -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> Xing Xing's Beauty - Gallery </title>
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
                                <a href="gallery.php" class="nav-link l-en active">Gallery</a>
                                <a href="gallery.php" class="nav-link l-ch active">画廊</a>
                                <a href="gallery.php" class="nav-link l-mm active">ဓါတ်ပုံပြခန်း</a>
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
        <!-- Nav Bar End -->

        <!-- Page Header Start -->
        <div class="page-header" style="background-color: #926A3B;">
            <div class="container">
                <div class="row">
                    <div class="col-12 h-6">
                        <h2 class="text-white l-en">Gallery</h2>
                        <h2 class="text-white l-mm mb-5">ဓါတ်ပုံပြခန်း</h2>
                        <h2 class="text-white l-ch">画廊</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php" class="text-white">Home</a>
                        <a href="gallery.php" class="text-white">Gallery</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Portfolio Start -->
       
                <!-- start -->

                <div class="portfolio">
            <div class="container">
                <div class="section-header text-center">
                    <p class="l-en">Xing Xing Beauty Image Gallery</p>
                    <p class="l-mm">Xing Xing Beauty ဓါတ်ပုံပြခန်း</p>
                    <p class="l-ch">星星美人图片廊</p>
                    <h2 class="l-en" style="font-size: 30px;">Some Images From Our Xing Xing Gallery</h2>
                    <h2 class="l-mm mt-3" style="font-size: 30px;">ကျွန်ုပ်တို့၏ Xing Xing ပြခန်းမှ ပုံရိပ်အချို့</h2>
                    <h2 class="l-ch" style="font-size: 30px;">我们 Xing Xing 画廊的一些图片</h2>
                </div>
                <div class="row">

                    <div class="col-12 l-mm">
                        <ul id="portfolio-flters">

                            <li data-filter="*" class="filter-active">အားလုံး</li>
                            <li data-filter=".first">
                               မျက်ခုံးသီးသန့် အမျှင်
                            </li>
                            <li data-filter=".second">မျက်ခုံးသီးသန့် ခဲမူန်(အပိတ်)</li>
                            <li data-filter=".third">မျက်ခုံးသီးသန့် ရှေ့မျှင်နောက်ခဲမှုန်</li>
                            <li data-filter=".fouth">မျက်ခုံး Hairstroke</li>
                            <li data-filter=".fifth">နှုတ်ခမ်းအညိုဖျောက်ခြင်း</li>
                            <li data-filter=".sixth">နှုတ်ခမ်းအရောင်သွင်းခြင်း</li>
                            <li data-filter=".seventh">မျက်တောင်ဆက်</li>
                            <li data-filter=".eight">မျက်တောင်ကောက်</li>
                            <li data-filter=".ninth">မျက်လုံးအလှဆင်</li>

                        </ul>
                    </div>

                    <div class="col-12 l-en">
                        <ul id="portfolio-flters">

                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".first">
                               Eyebrow specific fiber
                            </li>
                            <li data-filter=".second">Eyebrow Pencil (Closed)</li>
                            <li data-filter=".third">Brow-specific front and rear hairline</li>
                            <li data-filter=".fouth">Eyebrow Hairstroke</li>
                            <li data-filter=".fifth">Hide brown lips</li>
                            <li data-filter=".sixth">Lip tinting</li>
                            <li data-filter=".seventh">Eyelash extension</li>
                            <li data-filter=".eight">Raised eyelashes</li>
                            <li data-filter=".ninth">Eyeliner</li>

                        </ul>
                    </div>

                    <div class="col-12 l-ch">
                        <ul id="portfolio-flters">

                            <li data-filter="*" class="filter-active">全部</li>
                            <li data-filter=".first">
                               眉毛专用纤维
                            </li>
                            <li data-filter=".second">眉笔（闭合）</li>
                            <li data-filter=".third">眉毛专用眉粉</li>
                            <li data-filter=".fouth">眉毛发型</li>
                            <li data-filter=".fifth">隐藏棕色的嘴唇</li>
                            <li data-filter=".sixth">嘴唇</li>
                            <li data-filter=".seventh">睫毛延长</li>
                            <li data-filter=".eight">翘起的睫毛</li>
                            <li data-filter=".ninth">眼睛装饰</li>

                        </ul>
                    </div>

                </div>
                <div class="row portfolio-container">
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first">
                        <div class="portfolio-wrap">
                            <a href="Image-folder/foto6 (11).png" data-lightbox="portfolio">
                                <img src="Image-folder/foto6 (1).png" alt="Portfolio Image">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second">
                        <div class="portfolio-wrap">
                            <a href="Image-folder/foto99.jpg" data-lightbox="portfolio">
                                <img src="Image-folder/foto9.png" alt="Portfolio Image">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third">
                        <div class="portfolio-wrap">
                            <a href="Image-folder/foto1010.jpg" data-lightbox="portfolio">
                                <img src="Image-folder/foto10.png" alt="Portfolio Image">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first">
                        <div class="portfolio-wrap">
                            <a href="Image-folder/foto1111.png" data-lightbox="portfolio">
                                <img src="Image-folder/foto11.png" alt="Portfolio Image">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second">
                        <div class="portfolio-wrap">
                            <a href="Image-folder/foto12a.jpg" data-lightbox="portfolio">
                                <img src="Image-folder/foto12.png" alt="Portfolio Image">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third">
                        <div class="portfolio-wrap">
                            <a href="Image-folder/foto9a.jpg" data-lightbox="portfolio">
                                <img src="Image-folder/foto9.png" alt="Portfolio Image">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item fifth">
                        <div class="portfolio-wrap">
                            <a href="Image-folder/fode2a.jpg" data-lightbox="portfolio">
                                <img src="Image-folder/fode2.jpg" alt="Portfolio Image">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item sixth">
                        <div class="portfolio-wrap">
                            <a href="Image-folder/fode3a.jpg" data-lightbox="portfolio">
                                <img src="Image-folder/fode3.jpg" alt="Portfolio Image">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item sixth">
                        <div class="portfolio-wrap">
                            <a href="Image-folder/fode4a.jpg" data-lightbox="portfolio">
                                <img src="Image-folder/fode4.jpg" alt="Portfolio Image">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item sixth">
                        <div class="portfolio-wrap">
                            <a href="Image-folder/fode5.jpg" data-lightbox="portfolio">
                                <img src="Image-folder/fode5.jpg" alt="Portfolio Image">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item sixth">
                        <div class="portfolio-wrap">
                            <a href="Image-folder/fode6a.jpg" data-lightbox="portfolio">
                                <img src="Image-folder/fode6.jpg" alt="Portfolio Image">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item sixth">
                        <div class="portfolio-wrap">
                            <a href="Image-folder/fode8a.jpg" data-lightbox="portfolio">
                                <img src="Image-folder/fode8.jpg" alt="Portfolio Image">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item sixth">
                        <div class="portfolio-wrap">
                            <a href="Image-folder/fode7a.jpg" data-lightbox="portfolio">
                                <img src="Image-folder/fode7.jpg" alt="Portfolio Image">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item seventh">
                        <div class="portfolio-wrap">
                            <a href="Image-folder/fode9a.jpg" data-lightbox="portfolio">
                                <img src="Image-folder/fode9.jpg" alt="Portfolio Image">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item seventh">
                        <div class="portfolio-wrap">
                            <a href="Image-folder/fode11a.jpg" data-lightbox="portfolio">
                                <img src="Image-folder/fode11.jpg" alt="Portfolio Image">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item eight">
                        <div class="portfolio-wrap">
                            <a href="Image-folder/fode12a.jpg" data-lightbox="portfolio">
                                <img src="Image-folder/fode12.jpg" alt="Portfolio Image">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item eight">
                        <div class="portfolio-wrap">
                            <a href="Image-folder/fode10a.jpg" data-lightbox="portfolio">
                                <img src="Image-folder/fode10.jpg" alt="Portfolio Image">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item ninth">
                        <div class="portfolio-wrap">
                            <a href="Image-folder/fode13a.jpg" data-lightbox="portfolio">
                                <img src="Image-folder/fode13.jpg" alt="Portfolio Image">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item fouth">
                        <div class="portfolio-wrap">
                            <a href="Image-folder/fode1a.jpg" data-lightbox="portfolio">
                                <img src="Image-folder/fode1.jpg" alt="Portfolio Image">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

                <!-- end -->

                

            </div>
        </div>
        <!-- Portfolio Start -->

        <!-- Footer Start -->
        <div class="footer">
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
<!-- end -->

