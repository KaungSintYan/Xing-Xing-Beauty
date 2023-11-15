<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Xing Xing's Beauty - နှုတ်ခမ်းအညိုဖျောက်ခြင်</title>
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
                                <a href="service.php" class="nav-link l-en active">Service</a>
                                <a href="service.php" class="nav-link l-ch active">服务</a>
                                <a href="service.php" class="nav-link l-mm active">ဝန်ဆောင်မှု</a>
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
                    <div class="h-6 col-12">
                        <h2 class="l-mm">နှုတ်ခမ်းအညိုဖျောက်ခြင်: - Service</h2>
                        <h2 class="l-en">Hides dark lips - Service</h2>
                        <h2 class="l-ch">隐藏深色嘴唇 - Service</h2>
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
                            <img src="Xingxing/lip2.jpg" class="card-img" alt="..." style="width:220px; height: 200px; ">
                          </div>
                          <div class="card text-bg-light" style="width:220px; height: 200px; margin-top: 10px;">
                            <img src="Xingxing/lip3.jpg" class="card-img" alt="..." style="width:220px; height: 200px;">
                          </div>
                        </div>
                        <div>
                          <div class="card text-bg-light" style="width:220px; height: 200px; margin-right: 10px;">
                            <img src="Xingxing/lip4.jpg" class="card-img" alt="..." style="width:220px; height: 200px; ">
                          </div>
                          <div class="card text-bg-light" style="width:220px; height: 200px; margin-top: 10px;">
                            <img src="Xingxing/lip5.jpg" class="card-img" alt="..." style="width:220px; height: 200px;">
                          </div>
                        </div>
                        </div>
                </div>
                <div class="textborder">
                        <p style="font-size:17px; margin-left: 20px;" class="l-mm">
                            💁‍♀️နှုတ်ခမ်းသားအရောင်က မညီညာလို့
                            💁‍♀️ဘေးဘောင်နေရာတွေညိုနေလို့
                            💁‍♀️ဖြူရော်နေတဲ့ နှုတ်ခမ်းလွှာကြောင့် 
                            💁‍♀️နှုတ်ခမ်းနီဆိုးပါသော်လည်း သဘာဝမဆန် စိတ်တိုင်းမကျသူများအတွက် Xing Xing’s Beauty ရဲ့ Coloring BBLips က အရာအားလုံးကိုဖြေရှင်းပေးသွားမှာပါ 👄
                            နှုတ်ခမ်းအရောင်ပဲဖျောက်မလား? နှုတ်ခမ်းအရောင်ပဲသွင်းမလား? ပန်းနုသွေးဖူးပြီး အများကြားမှာ အလှထူးစေဖို့ Xing Xing’s Beauty ရဲ့ ကျွမ်းကျင် အမြင်ဆန်းသစ်တဲ့ ဆရာမတွေကိုယ်တိုင် တာဝန်ယူ ဖန်တီးပေးနေပြီမို့ အခုပဲ 🤳Booking ယူထားလိုက်တော့နော် 😇<br>
                            📞 ဖုန်း - 09781122838 <br>
                            📍Aung Min Gaung 2 Street , Kamayut Township , Yangon <br>
                            #အရောင်ပြန်တင်တာလေးက ၃လအတွင်းဆို free ပါရှင့် <br>
                        </p>

                        <p style="font-size:17px; margin-left: 20px;" class="l-en">
                            💁‍♀️ Lip color is uneven
                            💁‍♀️ Because the side panels are dark
                            💁‍♀️ Because of pale lips 
                            💁‍♀️ Xing Xing's Beauty's Coloring BBLips will solve everything for those who have bad red lips but don't like the unnatural look 👄
                             Just hide the color of the lips? Lip color only? Xing Xing's Beauty's professional and innovative teachers are already responsible for creating the beauty salon, so that you can stand out from the crowd. 😇<br>
                            📞 phone - 09781122838 <br>
                            📍Aung Min Gaung 2 Street, Kamayut Township, Yangon <br>
                             # Color reposting is free for 3 months <br>
                        </p>

                        <p style="font-size:17px; margin-left: 20px;" class="l-ch">
                            💁‍♀️ 唇色不均匀
                            💁‍♀️ 因为侧板是深色的
                            💁‍♀️ 因为嘴唇苍白
                            💁‍♀️ 星星的Beauty's Coloring BBLips 解决了红唇不好又不喜欢不自然妆容的人的一切👄
                             只是隐藏嘴唇的颜色？ 只有唇色？ Xing Xing's Beauty专业创新的老师们已经负责打造的美容院，让你在人群中脱颖而出。😇<br>
                            📞 电话 - 09781122838 <br>
                            📍Aung Min Gaung 2 Street, Kamayut Township, 仰光 <br>
                             #颜色转载3个月免费. <br>
                        </p>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 20px;">
            <table class="table">
                <tr>
                    <th>Artists/teacher</th>
                    
                    <th class="l-mm">နှုတ်ခမ်းအညိုဖျောက်ခြင်:</th>
                    <th class="l-en">Hides dark lips</th>
                    <th class="l-ch">隐藏深色嘴唇</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <th class="l-mm">ဆရာမရှင်းရှင်း</th>
                    <th class="l-en">Teacher Shin Shin</th>
                    <th class="l-ch">老师清楚</th>
                    <td>
                    Gold Germany - 518,000
                    </td>
                    
                    <td>
                        <a href="team1.php" class="btn btn-primary">Book</a>
                    </td>
                </tr>
                <tr>
                    <th class="l-mm">ဆရာမခင်မျိုးသူ</th>
                    <th class="l-en">Teacher Khin Myo Thu</th>
                    <th class="l-ch">曾经的老师</th>
                    <td>
                       
                    </td>
                    <td>
                        <a href="team4.php" class="btn btn-primary" type="Submit">Book</a>
                    </td>
                </tr>
                <tr>
                    <th class="l-mm">ဆရာမအဲလာ</th>
                    <th class="l-en">Teacher Ela</th>
                    <th class="l-ch">埃拉夫人</th>
                    <td>
                      
                    </td>
                    <td>
                        <a href="team2.php" class="btn btn-primary" type="Submit">Book</a>
                    </td>
                </tr>
                <tr>
                    <th class="l-mm">ဆရာမသန်းသန်းခိုင်</th>
                    <th class="l-en">Teacher Than Than Khine</th>
                    <th class="l-ch">老师丹丹凯英</th>
                    <td>
                         
                    </td>
                    <td>
                        <a href="team3.php" class="btn btn-primary" type="Submit">Book</a>
                    </td>
                </tr>
                <tr>
                    <th class="l-mm">Pro Artist ဆရာမစန်းစန်း</th>
                    <th class="l-ch">美术老师三三</th>
                    <th class="l-en">Pro Artist, Teacher San San</th>
                    <td>
                                                
                    </td>
                    <td>
                        <a href="team.php" class="btn btn-primary" type="Submit">Book</a>
                    </td>
                </tr>
                <tr>
                    <th class="l-mm">ဆရာမအိပွင့်</th>
                    <th class="l-en">Teacher Ei Phwit</th>
                    <th class="l-ch">Yi Phong女士</th>
                   <td></td>
                    <td>
                        <a href="#" class="btn btn-danger" type="button">Book</a>
                    </td>
                    
                </tr>
            </table>
            <p>
                More Information :: Call -09781122838
            </p>
        </div>

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