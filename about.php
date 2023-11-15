<?php
require_once ("dbconnection.php");
$query = "SELECT * FROM xy_teacher WHERE id BETWEEN 8 and 12"; 
$result = mysqli_query($connection,$query);  
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> Xing Xing's Beauty - About </title>
        <link rel="shortcut icon" type="image/jpg" href="Images/logo.jpg">
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

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
                                <a href="about.php" class="nav-link active l-en">Our Story</a>
                                <a href="about.php" class="nav-link active l-ch">我们的故事</a>
                                <a href="about.php" class="nav-link active l-mm">အကြောင်းအရာ</a>
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
                                <a href="contact.php" class="nav-link l-en">Contact</a>
                                <a href="contact.php" class="nav-link l-ch">接触</a>
                                <a href="contact.php" class="nav-link l-mm">ဆက်သွယ်ရန်</a>
                            </li>
                            <div class="dropdown">
                                <li class="nav-item"><a href="#" class="nav-link l-en">Languages</a></li>
                                <li class="nav-item"><a href="#" class="nav-link l-ch">语言</a></li>
                                <li class="nav-item"><a href="#" class="nav-link l-mm">ဘာသာစကား</a></li>
                                <div class="dropdown-content">
                                    <a href="#" onclick="lang_en()">English</a>
                                    <a href="#" onclick="lang_ch()">Chinese</a>
                                    <a href="#" onclick="lang_mm()">Myanmar</a>
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
                        <h2 class="text-white l-en">About Us</h2>
                        <h2 class="text-white l-mm mb-5">အကြောင်းအရာ</h2>
                        <h2 class="text-white l-ch mb-5">我们的故事</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php" class="text-white">Home</a>
                        <a href="about.php" class="text-white">About Us</a>
                    </div>
                        
                    
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="Images/about-img (1).jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                            <p>Learn About Us</p>
                            <h2 class="l-en">Permanent Makeup and Lashes extensions Service</h2>
                            <h2 class="l-mm mt-3" style="font-size: 30px;">အမြဲတမ်း မိတ်ကပ်နှင့် မျက်တောင်ဆက်ခြင်း ဝန်ဆောင်မှု</h2>
                            <h2 class="l-ch mt-2">永久化妆和睫毛扩展服务</h2>
                        </div>
                        <div class="about-text">
                            <p class="l-mm">
                                နိုင်ငံတကာအဆင့်မှီ မျက်ခုံးမွေး မျက်လုံး နူတ်ခမ်း အလှပြုပြင်ရေး စင်တာ Xing Xing beauty eyebrow Academy သည် permanent makeup နဲ့ ပတ်သက်ပြီး နိုင်ငံတကာအသိမှတ်ပြုထားသော Academy ပဲဖြစ်ပါသည်
Xing xing beauty ရဲ့ ဆရာမ သည် Permanent makeup နဲ့ ပတ်သက်ပြီး ကမ္ဘာ့ အဆင့်မြင့်ဆုံး သင်တန်းကျောင်းမှာ သင်ယူလေ့လာထားပါတယ်
                            </p>
                            <p class="l-en">
                                Xing Xing Beauty Eyebrow Academy is an internationally recognized academy for permanent makeup.
Xing xing beauty's teacher studied permanent makeup at the world's most advanced training school
                            </p>
                            <p class="l-ch">
                                Xing Xing Beauty Eyebrow Academy是国际公认的永久化妆学院。
星星美妆老师在全球最先进的培训学校学习永久化妆
                            </p>
                            <p class="l-mm">
                                ကမ္ဘာ့နံပါတ် (၁) သင်တန်းကျောင်း .... Phi Academy
ကမ္ဘာ့
နိုင်ငံတကာအဆင့်မှီ မျက်ခုံးမွေး မျက်လုံး နူတ်ခမ်း အလှပြုပြင်ရေး စင်တာ Xing Xing beauty eyebrow Academy သည် permanent makeup နဲ့ ပတ်သက်ပြီး နိုင်ငံတကာအသိမှတ်ပြုထားသော Academy ပဲဖြစ်ပါသည် Xing xing beauty ရဲ့ ဆရာမ သည် Permanent makeup နဲပတ်သက်ပြီး ကမ္ဘာ့ အဆင့်မြင့်ဆုံး သင်တန်းကျောင်းမှာ သင်ယူလေ့လာထားပါတယ် ကမ္ဘာ့နံပါတ် (၁) သင်တန်းကျောင်း .... Phi Academy</p>
                            <p class="l-en">
                                The world's number 1 training school .... Phi Academy
World
Xing Xing beauty eyebrow academy is an internationally recognized academy for permanent makeup. Xing xing beauty's teacher studied permanent makeup at the world's most advanced training school. The world's No. 1 training school.... Phi Academy</p>
                            <p class="l-ch">
                               世界排名第一的培训学校.... Phi Academy
世界
星星美眉学院是国际公认的纹眉学院，星星美眉的老师在全球最先进的培训学校学习纹眉，全球排名第一的培训学校....披学院</p>

<p class="l-mm">ကျွန်မတို့ အကယ်ဒမီ တွင် ကမ္ဘာ့အကောင်းဆုံးဆေး / ပစ္စည်း သာအသုံး​ပြုပေးပါသည်</p>
<p class="l-en">In our academy, we use only the world's best medicine/equipment</p>
<p class="l-ch">在我们的学院里，我们只使用世界上最好的药物/设备</p>
                            <a class="btn" href="https://www.facebook.com/xingxingbeauty">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Team</p>
                    <h2 class="l-en"> Meet Our Teachers and Artists </h2>
                    <h2 class="l-mm" style="font-size: 33px;"> ကျွန်ုပ်တို့၏ ဆရာများနှင့် အနုပညာရှင်များနှင့် တွေ့ဆုံပါ။ </h2>
                    <h2 class="l-ch mt-4"> 认识我们的老师和艺术家 </h2>
                </div>

                <!-- <form action="index.php" method="post" enctype="multipart/form-data"> -->

                <div class="row">

                <?php 
                    while($rows = mysqli_fetch_array($result))
                    {
                        $img_id = $rows['id'];
                        $img_name = $rows['name'];
                        $img_src = $rows['img_path']; 
                        $img_position = $rows['position'];
                        $about = $rows['about']; 
                ?>
                    
                    <div class="card mb-3">
                            <div class="row">
                                <div class="col-4">
                                <img src="<?php echo $img_src; ?>" class=" img-thumbnail rounded-start" alt="..." width="100%">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $img_name; ?> <span> ( <?php echo $img_position; ?> ) </span> </h5>
                                        <p class="card-text"> <?php echo $about; ?> </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        <a href="team1.php?id=<?php echo $img_id; ?>" class="btn btn-dark">Booking</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>   
                
                
                <!-- </form> -->
            </div>
        </div>
        <!-- Team End -->

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