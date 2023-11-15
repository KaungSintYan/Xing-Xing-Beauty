<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> Xing Xing's Beauty - Services </title>
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
        <!-- Nav Bar End -->


        <!-- Page Header Start -->
        <div class="page-header" style="background-color: #926A3B;">
            <div class="container">
                <div class="row">
                    <div class="col-12 h-6">
                        <h2 class="l-en">Service</h2>
                        <h2 class="l-mm mb-5">ဝန်ဆောင်မှု</h2>
                        <h2 class="l-ch">服务</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Home</a>
                        <a href="service.php">Service</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Salon Services</p>
                    <h2 class="l-en">Best Salon  Services for You</h2>
                    <h2 class="l-ch">最适合您的沙龙服务</h2>
                    <h2 class="l-mm" style="font-size: 35px;">သင့်အတွက် အကောင်းဆုံး Salon ဝန်ဆောင်မှုများ</h2>
                </div>
                <div class="row">
                <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="Xingxing/xc5.jpg" alt="Image">
                            </div>
                            <h3 class="l-mm">ခဲမူန်(အပိတ်)</h3>
                            <h3 class="l-en">lead (closed)</h3>
                            <h3 class="l-ch">铅（关闭）</h3>
                            <p class="l-mm">
                            Ombré 3 tone - အမူန် / အပိတ် / ခဲမူန်  စသဖြင့် အမည်ပေးကြပါတယ် 
                            ချစ်မိတ်ဆွေ အတော်များများ (အပိတ်) လို့ ကြားလိုက်တာနဲ့ ထိပ်ပိတ်      
                            </p>
                            <p class="l-en">
                            Ombré 3 tone - Amun / Closed / Cheymun etc. are named
                             When I heard that many dear friends (closed), the top closed      
                            </p>
                            <p class="l-ch">
                            Ombré 3 音 - Amun / Closed / Cheymun 等被命名
                             听说很多亲（已关闭），顶一下关闭      
                            </p>
                            <a class="btn" href="khal.php">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="Xingxing/lip.jpg" alt="Image">
                            </div>
                            <h3 class="l-mm">နှုတ်ခမ်းအညိုဖျောက်ခြင်:</h3>
                            <h3 class="l-en">Hides dark lips:</h3>
                            <h3 class="l-ch">隐藏深色嘴唇：</h3>
                            <p class="l-mm">
                            💁‍♀️နှုတ်ခမ်းသားအရောင်က မညီညာလို့
                            💁‍♀️ဘေးဘောင်နေရာတွေညိုနေလို့
                            💁‍♀️ဖြူရော်နေတဲ့ နှုတ်ခမ်းလွှာကြောင့် 
                            💁‍♀️နှုတ်ခမ်းနီဆိုးပါသော်လည်း သဘာဝမဆန် စိတ်တိုင်းမကျသူများအတွက် Xing Xing’s Beauty ရဲ့ Coloring BBLips က.....
                            </p>
                            <p class="l-en">
                            💁‍♀️Lip color is uneven
                            💁‍♀️Because the side panels are dark
                            💁‍♀️Because of pale lips 
                            💁‍♀️Xing Xing's Beauty's Coloring BBLips is for those who have bad lipstick but don't like unnatural color...
                            </p>
                            <p class="l-ch">
                            💁‍♀️唇色不均匀
                            💁‍♀️因为侧板是深色的
                            💁‍♀️因为嘴唇苍白
                            💁‍♀️Xing Xing's Beauty's Coloring BBLips 适合口红不好但又不喜欢不自然颜色的人...
                            </p>
                            <a class="btn" href="brownlip.php">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="Xingxing/lip.jpg" alt="Image">
                            </div>
                            <h3 class="l-mm">နှုတ်ခမ်းအရောင်သွင်းခြင်း</h3>
                            <h3 class="l-en">Lip tinting</h3>
                            <h3 class="l-ch">唇彩</h3>
                            <p class="l-mm">
                            💁‍♀️နှုတ်ခမ်းသားအရောင်က မညီညာလို့
                            💁‍♀️ဘေးဘောင်နေရာတွေညိုနေလို့
                            💁‍♀️ဖြူရော်နေတဲ့ နှုတ်ခမ်းလွှာကြောင့် 
                            💁‍♀️နှုတ်ခမ်းနီဆိုးပါသော်လည်း သဘာဝမဆန် စိတ်တိုင်းမကျသူများအတွက် Xing Xing’s Beauty ရဲ့ Coloring BBLips က.....
                            </p>
                            <p class="l-ch">
                            💁‍♀️唇色不均匀
                            💁‍♀️因为侧板是深色的
                            💁‍♀️因为嘴唇苍白
                            💁‍♀️Xing Xing's Beauty's Coloring BBLips 适合口红不好但又不喜欢不自然颜色的人...
                            </p>
                            <p class="l-en">
                            💁‍♀️Lip color is uneven
                            💁‍♀️Because the side panels are dark
                            💁‍♀️Because of pale lips
                            💁‍♀️Xing Xing's Beauty's Coloring BBLips is for those who have bad lipstick but don't like unnatural color...
                            </p>
                            <a class="btn" href="lipcolouring.php">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="Xingxing/xc1.jpg" alt="Image">
                            </div>
                            <h3 class="l-mm">အမျှင်</h3>
                            <h3 class="l-en">Fiber</h3>
                            <h3 class="l-ch">纤维</h3>
                            <p class="l-mm">
                                နိုးနိုးချင်းမှာ မျက်ခုံးမွှေးမရှိလို့
                                မျက်ခုံးကတုံး…  ပြောင်ရှင်းနေတဲ့ အလှလေးဆိုတဲ့ ခံစားချက်က သိပ်ကိုဆိုးပါတယ်နော် 🥺
                                မိုးလင်းတိုင်း ဘာမှမလိမ်းရသေးခင်....
                            </p>
                            <p class="l-en">
                                When I woke up, I had no eyebrows
                                 The eyebrows... the feeling of being a bald beauty is so bad 🥺
                                 Every morning before applying anything...
                            </p>
                            <p class="l-ch">
                                当我醒来时，我没有眉毛
                                 眉毛……秃头美人的感觉好难受🥺
                                 每天早上在涂抹任何东西之前...
                            </p>
                            <a class="btn" href="string.php">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="Xingxing/xc3.jpg" alt="Image">
                            </div>
                            <h3 class="l-mm">ရှေ့မျှင်နောက်ခဲမှုန်</h3>
                            <h3 class="l-en">Front and rear lead particles</h3>
                            <h3 class="l-ch">前后铅粒</h3>
                            <p class="l-mm">
                                နိုးနိုးချင်းမှာ မျက်ခုံးမွှေးမရှိလို့
                                မျက်ခုံးကတုံး…  ပြောင်ရှင်းနေတဲ့ အလှလေးဆိုတဲ့ ခံစားချက်က သိပ်ကိုဆိုးပါတယ်နော် 🥺
                                မိုးလင်းတိုင်း ဘာမှမလိမ်းရသေးခင်....
                            </p>
                            <p class="l-en">
                                When I woke up, I had no eyebrows
                                 The eyebrows... the feeling of being a bald beauty is so bad 🥺
                                 Every morning before applying anything...
                            </p>
                            <p class="l-ch">
                                当我醒来时，我没有眉毛
                                 眉毛……秃头美人的感觉好难受🥺
                                 每天早上在涂抹任何东西之前...
                            </p>
                            <a class="btn" href="string2.php">Learn More</a>
                        </div>
                    </div>
                 
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="Xingxing/eyeliner1.jpg" alt="Image">
                            </div>
                            <h3 class="l-en">Eyeliner</h3>
                            <h3 class="l-mm" style="font-size: 20px;">မျက်လုံးပုံသဏ္ဍာန်ကို အလေးပေးရန်အတွက် <br><br> မိတ်ကပ်လိမ်းပါ။</h3>
                            <h3 class="l-ch">眼线笔</h3>
                            <p class="l-mm">
                                မှေးစက်နေတဲ့မျက်ခမ်းပါးများဆီက ရုန်းထွက်ကြစို့....
                            </p>
                            <p class="l-en">
                                Let's get away from the drooping eyelids...
                            </p>
                            <p class="l-ch">
                                让我们远离下垂的眼皮...
                            </p>
                            <a class="btn" href="eyeliners.php">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="Xingxing/eyelash2.jpg" alt="Image">
                            </div>
                            <h3 class="l-mm">မျက်တောင်ဆက် - မျက်တောင်ကောက်</h3>
                            <h3 class="l-en">Eyelash extension - Raised eyelashes</h3>
                            <h3 class="l-ch">睫毛延长 - 翘起的睫毛</h3>
                            <p class="l-mm">
                                မှေးစက်နေတဲ့မျက်ခမ်းပါးများဆီက ရုန်းထွက်ကြစို့....
                            </p>
                            <p class="l-en">
                                Let's get away from the drooping eyelids...
                            </p>
                            <p class="l-ch">
                                让我们远离下垂的眼皮...
                            </p>
                            <a class="btn" href="eyelash.php">Learn More</a>
                        </div>
                    </div>
                   
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="Xingxing/laser.jpg" alt="Image">
                            </div>
                            <h3 class="l-en">Laser and phi <br> removal treatment</h3>
                            <h3 class="l-mm">လေဆာနှင့် phi <br> ဖယ်ရှားရေးကုသမှု</h3>
                            <h3 class="l-ch">激光和 phi <br> 去除处理</h3>
                            <p class="l-mm">
                                Laser Tattoo Removal Treatment 
                                တစ်ကြိမ်ဖျက် တစ်ကြိမ်သိသာဆိုတာမျိုး 
                                ဒီပုံဆိုရင် တစ်ကြိမ်ဖျက်ပြီးရလာဒ်ပါ.....
                            </p>
                            <p class="l-en">
                                Laser Tattoo Removal Treatment
                                 One erasing, one recognition
                                 This picture is the result after deleting it once...
                            </p>
                            <p class="l-ch">
                                激光去除纹身治疗
                                 一种擦除，一种识别
                                 这张图是删除一次后的结果...
                            </p>
                            <a class="btn" href="laser-phi.php">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


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