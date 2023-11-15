<?php
require_once ("dbconnection.php");
$query = "SELECT * FROM xy_teacher"; 
$result = mysqli_query($connection,$query);  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> Xing Xing's Beauty - Home </title>
        <link rel="shortcut icon" type="image/jpg" href="Images/logo.jpg" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style2.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

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

            .home-1{
            animation: fadeInRight;
            animation-duration: 4s;
            }

            .h-1{
            animation: fadeInUp;
            animation-duration: 4s;
            }
            /* .home3{
                background: linear-gradient(to right, #A57D44, #C5A76C );
                opacity: 0.9;
                width: 100%;
                height: 700px;
            } */

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
                <!-- <img src="Images/logo.jpg" alt="" width="70px"> -->
                <a href="index.php" class="navbar-brand"> <span>Xing</span>Xing</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Service</a>
                        <a href="team.php" class="nav-item nav-link">Booking</a>
                        <a href="gallery.php" class="nav-item nav-link">Gallery</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <a href="#" class="nav-item nav-link">Languages</a>
                    </div>
                </div> -->

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="ml-auto">
                        <ul class="nav-menu navbar-nav">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link active l-en">Home</a>
                                <a href="index.php" class="nav-link active l-ch">家</a>
                                <a href="index.php" class="nav-link active l-mm">ပင်မစာမျက်နှာ</a>
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

        <!-- Hero Start -->
        <div class="hero home3" style="background-color: #926A3B;">
            <div class="container-fluid">
                <div class="row ">

                    <div class="col-sm-12 col-md-6">
                        <div class="">
                            <div class="hero-text h-1">
                                <h1 style="font-size: 45px;" class="l-mm">နိုင်ငံတကာအဆင့်မှီ မျက်ခုံးမွေး  မျက်လုံး နူတ်ခမ်း အလှပြုပြင် ရေး စင်တာ</h1>
                                <h1 style="font-size: 45px;" class="l-en">An international-level eyebrow, eye, lip and lip beauty treatment center</h1>
                                <h1 style="font-size: 45px;" class="l-ch">国际级眉眼唇唇美容中心</h1>
                                <p class="l-mm">ကျွန်ုပ်တို့၏ Xing Xing Beauty သို့လာရောက်၍ သင်၏ချိန်းဆိုမှုကို အချိန်ဇယားဆွဲရန် ဤအခွင့်အရေးကို ရယူလိုက်ပါ။</p>
                                <p class="l-en">Take this opportunity to visit our Xing Xing Beauty and schedule your appointment.</p>
                                <p class="l-ch">借此机会参观我们的 Xing Xing Beauty 并安排您的约会。</p>
                                <a class="btn" href="team.php">Book Service Now</a>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-sm-12 col-md-6 d-none d-md-block">
                        <div class="hero-imagee shadow-lg home-1" style="margin-top:150px;"> 
                            <img src="Xingxing/xingxing2.jpg" alt="Hero Image" width="100%">
                        </div>
                    </div>

                </div>
               
            </div>
        </div>
        <!-- Hero End -->
    
        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="Xingxing/about-img (1).jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                            <p style="font-size: 50px;">Learn About Us</p>
                        </div>
                        <div class="about-text">
                            <p class="l-mm">                            
                                နိုင်ငံတကာအဆင့်မှီ မျက်ခုံးမွေး မျက်လုံး နူတ်ခမ်း အလှပြုပြင်ရေး စင်တာ Xing Xing beauty eyebrow Academy သည် permanent makeup နဲ့ ပတ်သက်ပြီး နိုင်ငံတကာအသိမှတ်ပြုထားသော Academy ပဲဖြစ်ပါသည်
                                Xing xing beauty ရဲ့ ဆရာမ သည် Permanent makeup နဲ့ ပတ်သက်ပြီး ကမ္ဘာ့ အဆင့်မြင့်ဆုံး သင်တန်းကျောင်းမှာ သင်ယူလေ့လာထားပါတယ် ကမ္ဘာ့နံပါတ် (၁) သင်တန်းကျောင်း .......
                            </p>
                            <p class="l-en">                            
                                Xing Xing Beauty Eyebrow Academy is an internationally recognized academy for permanent makeup.
                                Xing xing beauty's teacher studied permanent makeup at the world's most advanced training school, the world's No. 1 training school.
                            </p>
                            <p class="l-ch">                            
                                Xing Xing Beauty Eyebrow Academy 是国际公认的永久化妆学院。
                                星星美的老师在世界最先进的培训学校，世界第一的培训学校学习永久化妆。 
                            </p>
                            <!-- <p class="l-en"></p> -->
                            <a class="btn" href="about.php">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Salon Services</p>
                    <h2 class="l-en"> Salon Services for You </h2>
                    <h2 class="l-ch"> 为您提供的沙龙服务 </h2>
                    <h2 class="l-mm mt-4" style="font-size: 40px;"> သင့်အတွက် အလှပြင်ဝန်ဆောင်မှုများ </h2>
                </div>
                <div class="row">
                  
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="Xingxing/lip.jpg" alt="Image" >
                            </div>
                            <h3 class="l-mm">နှုတ်ခမ်းအညိုဖျောက်ခြင်:</h3>
                            <h3 class="l-en">Hides dark lips:</h3>
                            <h3 class="l-ch">隐藏深色嘴唇：</h3>
                            <p class="l-mm">
                                💁‍♀️နှုတ်ခမ်းသားအရောင်က မညီညာလို့
                                💁‍♀️ဘေးဘောင်နေရာတွေညိုနေလို့
                                💁‍♀️ဖြူရော်နေတဲ့ နှုတ်ခမ်းလွှာကြောင့် 
                                💁‍♀️နှုတ်ခမ်းနီဆိုးပါသော်လည်း သဘာဝမဆန် စိတ်တိုင်းမကျသူများအတွက် Xing Xing's Beauty ရဲ့ Coloring BBLips က.....
                            </p>
                            <p class="l-en">
                                💁‍♀️Lip color is uneven
                                💁‍♀️the side panels are dark
                                💁‍♀️Because of pale lips 
                                💁‍♀️Xing Xing's Beauty's Coloring BBLips is for those who have bad lipstick but don't mind the unnatural color...
                            </p>
                            <p class="l-ch">
                                💁‍♀️唇色不均匀
                                💁‍♀️因为侧板是深色的
                                💁‍♀️因为嘴唇苍白 
                                💁‍♀️Xing Xing's Beauty's Coloring BBLips 适合口红不好但又不介意颜色不自然的人...
                            </p>
                            <a class="btn" href="brownlip.php">Learn More</a>
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
                                 每天早上在涂抹任何东西之前
                            </p>
                            <a class="btn" href="string.php">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="Xingxing/lip.jpg" alt="Image" >
                            </div>
                            <h3 class="l-mm">နှုတ်ခမ်းအရောင်သွင်းခြင်း</h3>
                            <h3 class="l-en">Lip tinting</h3>
                            <h3 class="l-ch">唇彩</h3>
                            <p class="l-mm">
                                💁‍♀️နှုတ်ခမ်းသားအရောင်က မညီညာလို့
                                💁‍♀️ဘေးဘောင်နေရာတွေညိုနေလို့
                                💁‍♀️ဖြူရော်နေတဲ့ နှုတ်ခမ်းလွှာကြောင့် 
                                💁‍♀️နှုတ်ခမ်းနီဆိုးပါသော်လည်း သဘာဝမဆန် စိတ်တိုင်းမကျသူများအတွက် Xing Xing's Beauty ရဲ့ Coloring BBLips က.....
                            </p>
                            <p class="l-en">
                                💁‍♀️Lip color is uneven
                                💁‍♀️The side panels are dark
                                💁‍♀️Because of pale lips
                                💁‍♀️Xing Xing's Beauty's Coloring BBLips for those who have bad lipstick but don't like unnatural color...
                            </p>
                            <p class="l-ch">
                                💁‍♀️唇色不均匀
                                💁‍♀️因为侧板是深色的
                                💁‍♀️因为嘴唇苍白 
                                💁‍♀️Xing Xing's Beauty's Coloring BBLips 适合口红不好但又不介意颜色不自然的人...
                            </p>
                            <a class="btn" href="lipcolouring.php">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Team</p>
                    <h2 class="l-en"> Meet Our Teachers and Artists </h2>
                    <h2 class="l-mm" style="font-size: 33px;"> ကျွန်ုပ်တို့၏ ဆရာများနှင့် အနုပညာရှင်များနှင့် <br> တွေ့ဆုံပါ။ </h2>
                    <h2 class="l-ch"> 认识我们的老师和艺术家 </h2>
                </div>

                <!-- <form action="index.php" method="post" enctype="multipart/form-data"> -->

            <div class="row ">
                
                <?php 
                    while($rows = mysqli_fetch_array($result))
                    {
                        $img_id = $rows['id'];
                        $img_name = $rows['name'];
                        $img_src = $rows['img_path']; 
                        $img_position = $rows['position'];
                ?>
                
                    <div class="col-lg-3 col-md-6 ">
                        
                        <div class="team-item ">
                            <!-- <a href="team1.php"> -->
                                <div class="team-img">
                                    <a href="team1.php?id=image1">
                                        <img src="<?php echo $img_src; ?>" alt="Team Image" title="<?php echo $img_name; ?>" id="image1">
                                    </a>
                                    <!-- Images/Xingxing.PNG -->
                                </div>
                                <div class="team-text">
                                    <h2><?php echo $img_name; ?></h2>
                                    <p><?php echo $img_position; ?></p>
                                    <!-- <input type="submit" name="viewProfile" value="View Profile" class=" btn btn-dark mt-3"> -->
                                    <a href="team1.php?id=<?php echo $img_id; ?>" class="btn btn-dark mt-3"> View Profile </a>
                                </div>
                                
                            <!-- </a> -->
                        </div>
                        
                    </div>

                    
                    <?php } ?>
                
                
                     
            </div>    
                
                
                <!-- </form> -->
            </div>
        </div>

        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Latest From Blog</p>
                    <h2 class="l-en" style="font-size: 45px;">Learn More from Latest Blog</h2>
                    <h2 class="l-mm mt-3" style="font-size: 33px;">နောက်ဆုံးရအချက်အလက်မှ ပိုမိုလေ့လာပါ။</h2>
                    <h2 class="l-ch">从最新博客了解更多信息</h2>
                </div>
                
                <div class="owl-carousel blog-carousel">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="Xingxing/foto6 (1).png" alt="Blog">
                        </div>
                        <div class="blog-meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="">Microblading</a>
                            <i class="fa fa-calendar-alt"></i>
                            <p>18-Jan-21</p>
                        </div>
                        <div class="blog-text">
                            <h2 class="l-mm">Sis Eaint Chit Chaw ❤️ လို မျက်ခုံးမွှေးလေး ထိုးကြမယ်</h2>
                            <h2 class="l-en">We will draw eyebrows like Sis Eaint Chit Chaw ❤️</h2>
                            <h2 class="l-ch">我们会像 Eaint Chit Chaw 姐一样画眉❤️</h2>
                            <p class="l-mm">
                                မအိမ့်ချစ်ချော က သဘာဝဆန်ဆန်လေးပဲ ကြိုက်တာမို့ Microblading လေး ထိုးထားပါတယ်...
                            </p>
                            <p class="l-en">
                                Ma Eaint Chit Chaw likes to be natural, so I got microblading...
                            </p>
                            <p class="l-ch">
                                Ma Eaint Chit Chaw 喜欢自然，所以我得到了微刀片...
                            </p>
                            <a class="btn" href="https://www.facebook.com/987472674643780/posts/pfbid0b2bx6HcjYoCsEzS814qbbbxJugjgt9g92QaeJ7UNLQ9kFQqmVUhfhdZB2nNEGCnwl/?mibextid=Nif5oz">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="Xingxing/blog2.jpg" alt="Blog">
                        </div>
                        <div class="blog-meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="">Attending</a>
                            <i class="fa fa-calendar-alt"></i>
                            <p>17-12-22</p>
                        </div>
                        <div class="blog-text">
                            <h2 class="l-en">Mai Tuyet Ha Acedemy</h2>
                            <h2 class="l-mm">Mai Tuyet Ha အကယ်ဒမီ</h2>
                            <h2 class="l-ch">麦雪夏学院</h2>
                            <p class="l-mm">
                                ဒီတစ်ခေါက်မှာတော့ 👄 Soft lips technique Master Class ကို Bangkok မှာရှိတဲ့ Mai Tuyet Ha Acedemy မှာ သွားရောက်လေ့လာမှာဖြစ်ပါတယ်..
                            </p>
                            <p class="l-en">
                                This time, I will visit the 👄 Soft lips technique Master Class at Mai Tuyet Ha Acedemy in Bangkok..
                            </p>
                            <p class="l-ch">
                                这次去曼谷 Mai Tuyet Ha Acedemy 参观 👄 软唇技巧大师班..
                            </p>
                            <a class="btn" href="https://www.facebook.com/987472674643780/posts/pfbid0qKckxjovoVL5j4eb6xmM1WP8CY4wMTpnFL8VZumYHiWRgu13uuFeYWvQ4MfUNif6l/?mibextid=Nif5oz">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="Xingxing/blog3.jpg" alt="Blog">
                        </div>
                        <div class="blog-meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="">Sharing</a>
                            <i class="fa fa-calendar-alt"></i>
                            <p>27-11-22</p>
                        </div>
                        <div class="blog-text">
                            <h2 class="l-en"> Master Hairstroke Technique </h2>
                            <h2 class="l-mm">Master Hairstroke နည်းပညာ</h2>
                            <h2 class="l-ch">掌握击发技巧</h2>
                            <p class="l-mm">
                                VIETNAM 🇻🇳 နိုင်ငံမှ Master Hairstroke Technique  လေး Sharing သွားတဲ့ ပုံပါ.. 
                            </p>
                            <p class="l-en">
                                Master Hairstroke Technique from VIETNAM 🇻🇳 Sharing.. 
                            </p>
                            <p class="l-ch">
                                来自越南的高手发型技巧🇻🇳分享.. 
                            </p>
                            <a class="btn" href="https://www.facebook.com/987472674643780/posts/pfbid0PMPgkn9NZrw6nGMJFLW9AqohUSAKRzFTz3BnC9D36fE147hxgtdasbq3Mi1g9tGnl/?mibextid=Nif5oz">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="Xingxing/blog4.jpg" alt="Blog">
                        </div>
                        <div class="blog-meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="">Blog</a>
                            <i class="fa fa-calendar-alt"></i>
                            <p>15-12-22</p>
                        </div>
                        <div class="blog-text">
                            <h2 class="l-mm">(24) ရက်နေ့ထိ တာချီလိတ်ဆိုင်မှာ ရှိမယ်နော်</h2>
                            <h2 class="l-en">I will be at the Tachilek store until (24).</h2>
                            <h2 class="l-ch">我将在大其力商店直到（24）。</h2>
                            <p class="l-mm">
                                ချစ်သော တာချီလိတ် / ကျိုင်းတုံ /မိုင်းယောင်း မိတ်ဆွေများရှင် 
                                (24) ရက်နေ့ထိ တာချီလိတ်ဆိုင်မှာ ရှိမယ်နော် 
                                ကြိုတင်ဘိုကင်ယူထား...
                            </p>
                            <p class="l-en">
                                Dear Tachilek / Kyang Tong / My Young friends
                                 I will be at the Tachilek store until (24).
                                 Book in advance...
                            </p>
                            <p class="l-ch">
                                亲爱的大其力 / Kyang Tong / 我年轻的朋友们
                                 我将在大其力商店直到（24）。
                                 提前预定...
                            </p>
                            <a class="btn" href=" https://www.facebook.com/987472674643780/posts/pfbid02G6iKHeNFDVqdCrwoctTHSJ2odtujymZK4zLBUQiJkgdHj1tby6bmN5xVetcGD43el/?mibextid=Nif5oz">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="Xingxing/Xingxing.PNG" alt="Blog">
                        </div>
                        <div class="blog-meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="">Blog</a>
                            <i class="fa fa-calendar-alt"></i>
                            <p>04-12-22</p>
                        </div>
                        <div class="blog-text">
                            <h2 class="l-en">ADVANCED MICROBLADING EYEBROWS Class</h2>
                            <h2 class="l-mm">အဆင့်မြင့် မိုက်ခရိုဝေ့ မျက်ခုံးမွေး အတန်း</h2>
                            <h2 class="l-ch">高级微整形眉毛课程</h2>
                            <p class="l-mm">
                                Warmly welcome to Xing Xing Beauty 
                                ADVANCED MICROBLADING EYEBROWS Class 
                                မနက်ဖြန်...
                            </p>
                            <p class="l-en">
                                Warmly welcome to Xing Xing Beauty
                                 ADVANCED MICROBLADING EYEBROWS Class
                                 tomorrow...
                            </p>
                            <p class="l-ch">
                                热烈欢迎来到 Xing Xing Beauty
                                 高级微整形眉毛课程
                                 明天...
                            </p>
                            <a class="btn" href="https://www.facebook.com/987472674643780/posts/pfbid02QXkoVC52TTQJ9HtRqFhWVWwSVcwMuLqkboyezataF1cwWAGd9pJk4F6sEBMd8TAWl/?mibextid=Nif5oz">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->
       
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
        <script src="OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
    </body>
</html>