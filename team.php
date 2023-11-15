<!-- start -->
<?php

$dateError = $timeError = $nameError = $phoneError = $messageError = ''; 
$isValid = true; 
date_default_timezone_set('Asia/Yangon'); 

include "validate.php"; 
require_once "dbconnection.php";

    if(isset($_POST['bookingBtn'])){

        if(isset($_POST['treatment_id'])){
            $treatment = $_POST['treatment_id'];
        }

        if(isset($_POST['teacher_id'])){
            $teacher = $_POST['teacher_id']; 
        }

        if(isset($_POST['material_id'])){
            $material = $_POST['material_id']; 
        }

        if(isset($_POST['price_id'])){
            $price = $_POST['price_id']; 
        }

        if(validateDate($_POST['date'])){
            $date = $_POST['date']; 
        }

        if(validateTime($_POST['time'])){
            $time = $_POST['time']; 
        }

        if(validateName($_POST['name'])){
            $name = $_POST['name']; 
        }

        if(validatePhone($_POST['phone'])){
            $phone = $_POST['phone']; 
        }

        if(validateMessage($_POST['message'])){
            $message = $_POST['message']; 
        }

        if($isValid){
            $createdTime = time();
            $query = "INSERT INTO xy_booking (`treatment_id`,`teacher_id`,`material_id`,`price_id`,`date`,`time`,`name`,`phone`,`message`) VALUES ('$treatment','$teacher','$material','$price','$date','$time','$name','$phone','$message')";
            $result = mysqli_query($connection,$query); 

            if($result){
                echo 'Update Successfully'; 
            }else{
                echo mysqli_connect_error(); 
            }

            header("Location: show.php"); 
        }

    }

    // if(isset($_POST['deleteBtn'])){
    //     $query = "DELETE * FROM xy_booking where id=". $_POST['id']; 
    //     $result = mysqli_query($connection,$query); 
    //     if($result){
    //         echo "<script>alert('Delete Success');</script>"; 
    //     }
    // }

    // $treatments = ["မျက်ခုံးသီးသန့် ခဲမူန်(အပိတ်)","မျက်ခုံးသီးသန့် အမျှင်","မျက်ခုံးသီးသန့် ရှေ့မျှင်နောက်ခဲမှုန်","မျက်ခုံး Hairstroke","နှုတ်ခမ်းအညိုဖျောက်ခြင်း","နှုတ်ခမ်းအရောင်သွင်းခြင်း","မျက်တောင်ဆက် - မျက်တောင်ကောက်","Eyeliner","Laser tattoo removal treatment","Phi removal treatment"];

    // $materials = ["Gold Germany","Germany","USA","Korea","Japan"];

    $query = "SELECT * FROM xy_treatment"; 
    $result = mysqli_query($connection,$query); 

    $teacherII = "SELECT * FROM xy_teacher"; 
    $resultIII = mysqli_query($connection,$teacherII); 

    $materialII = "SELECT * FROM xy_price";
    $resultII = mysqli_query($connection,$materialII); 

    $price = "SELECT xy_teacher_treatment.teacher_id,xy_teacher_treatment.price_id,xy_price.price FROM xy_teacher_treatment INNER JOIN xy_price ON xy_teacher_treatment.price_id = xy_price.id WHERE teacher_id=8";
    $items = mysqli_query($connection,$price); 

    // if(isset($_POST['bookingBtn'])){
    //     $date = $_POST['date'];
    //     $time = $_POST['time'];
    //     $name = $_POST['name'];
    //     $phone = $_POST['phone'];
    //     $message = $_POST['message']; 

    //     // echo $date . '<br>'; 
    //     // echo $time . '<br>'; 
    //     // echo $name . '<br>'; 
    //     // echo $phone . '<br>'; 
    //     // echo $message . '<br>';  
    // }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> Xing Xing's Beauty - Booking </title>
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
            .background{
                background-color: #926A3B;
                width: 100%;
                height: 1200px;
                position: relative;
            }
            .img-1{
                margin-top: 30px;
                /* position: absolute; */
                animation: fadeInUp;
                animation-duration: 2s;
            }
            .text-2{
                margin-top: 150px;
                animation: fadeInLeftBig;
            animation-duration: 1s;
            }
            .text-1{
            animation: fadeInLeftBig;
            animation-duration: 2s;
            }
            .text-3{
                animation: fadeInLeftBig;
            animation-duration: 3s;
            }
            .text-4{
            animation: fadeInLeftBig;
            animation-duration: 4s;
            }
            .box1{
                animation: fadeInRight;
                animation-duration: 2s;
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
                                <a href="team.php" class="nav-link active l-en">Booking</a>
                                <a href="team.php" class="nav-link active l-ch">预订</a>
                                <a href="team.php" class="nav-link active l-mm">ရက်ချိန်း</a>
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
        <!-- <div class="page-header" style="background-color: #926A3B;">
            <div class="container">
                <div class="row">
                    <div class="col-12 h-6">
                        <h2 class="text-white l-en">Appointment</h2>
                        <h2 class="text-white l-mm mb-5">ရက်ချိန်း</h2>
                        <h2 class="text-white l-ch">预订</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php" class="text-white">Home</a>
                        <a href="team.php" class="text-white">Booking</a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Page Header End -->

        <div class="background">
            
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <p class="text-2"><small class="text-white l-en">Permanent Makeup and Lashes Extensions Service</small></p>
                        <p class=""><small class="text-white l-mm">အမြဲတမ်း မိတ်ကပ်နှင့် မျက်တောင် တိုးချဲ့ဝန်ဆောင်မှု</small></p>
                        <p class=""><small class="text-white l-ch">永久化妆和睫毛扩展服务</small></p>
                        <h1 class="text-white text-1 l-en">Make an Appointment</h1>
                        <h1 class="text-white text-1 l-mm mt-2 mb-4">ရက်ချိန်းယူပါ</h1>
                        <h1 class="text-white text-1 l-ch">预约</h1>
                        
                        <p class="text-white text-3 l-en"> The teachers of Xing xing beauty learned about permanent makeup at the world's most advanced school. The service is mainly clean.</p>
                        <p class="text-white text-3 l-mm">Xing xing အလှပြင်ဆရာများသည် ကမ္ဘာ့အဆင့်မြင့်ဆုံးကျောင်းတွင် အမြဲတမ်း မိတ်ကပ်လိမ်းနည်းကို သင်ယူခဲ့ကြသည်။ ဝန်ဆောင်မှုက အဓိကအားဖြင့် သန့်ရှင်းတယ်။</p>
                        <p class="text-white text-3 l-ch">星星美的老师们在世界上最先进的学校学习了永久化妆。服务主要是干净。</p>
                        <p class="text-white text-4">More Information - 09781957470</p>
                        <img src="Images/address.jpg" alt="" width="100%" class="img-1">
                    </div>

                    <div class="col-6">
                        <div class="box1">
<div class=" p-3 shadow" style="background-color: #FBFBF9; color:dark; border-radius:10px; margin:150px 0px 150px 0px;">
                                <form action="team.php" method="POST" class="form1" style="border-radius: 15px;">

                                <div>
                                    <h4 class="mb-4 text-secondary">
                                        Appointment Form 
                                    </h4>
                                </div>

                                    <div class="mb-4">
                                        <select name="teacher_id" class="form-control" id="myChoice">
                                            <option value="" selected>Teacher</option>
                                            <!-- <option value="" selected> Teachers </option> -->
                                            <?php foreach ($resultIII as $trainer) { ?>
                                                <option value="<?php echo $trainer['id'] ?>"> <?php echo $trainer['name'] ?> </option>
                                            <?php } ?>

                                        </select>
                                    </div>

                                    <!-- <div class="mb-4">
                                        <select class="form-control" name="treatment_id" id="myOption">
                                            
                                            <option value="" selected> Choose One Service </option>
                                    
                                            <?php foreach($result as $item) { ?>
                                                <option value="<?php echo $item['id']; ?>"> <?php echo $item['name'] . '<br>' ?> </option>
                                            <?php } ?>

                                        </select>
                                    </div> -->

                                    <!-- treatments -->

                                    <div class="mb-4">
                                        <select class="form-control" name="treatment_id" id="myOption">
                                            <option value=""> Choose One Service </option>
                                        </select>
                                    </div>

                                    <!-- <div class="mb-4">
                                        <select class="form-control" name="material_id" id="material">
                                        <option value="" selected>Materials</option>
                                        <?php foreach($resultII as $itemII) { ?>
                                            <option value="<?php echo $itemII['id']; ?>"> <?php echo $itemII['material']; ?> </option>
                                        <?php } ?>
                                        </select>
                                    </div> -->

                                    <div class="mb-4">
                                        <select class="form-control" name="material_id" id="material">
                                            <option value=""> Materials </option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <input id="cash" class="soome form-control" type="text" value="Price" name="price_id" disabled>
                                    </div>

                                    <div class="mb-4">
                                        <label for="" class="mb-2" style="margin-right:460px;">Date</label>
                                        <input type="date" value="Date" class="soome1 form-control" name="date">
                                        <span class="text-danger"> <?php echo $dateError ?> </span>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <label for="" class="mb-2" style="margin-right:460px;">Time</label>
                                        <input type="time" value="time" class="soome1 form-control" name="time">
                                        <span class="text-danger"> <?php echo $timeError ?> </span>
                                    </div>

                                    <div class="mb-4">
                                        <label for="" class="mb-2" style="margin-right:460px;">Name</label>
                                        <input type="text" class="soome form-control" placeholder="Enter your full name" name="name">
                                        <span class="text-danger"> <?php echo $nameError ?> </span>
                                    </div>

                                    <div class="mb-4">
                                        <label for="" class="mb-2" style="margin-right:460px;">Phone</label>
                                        <input type="number" class="form-control" placeholder="Enter your phone" name="phone">
                                        <span class="text-danger"> <?php echo $phoneError ?> </span>
                                    </div>

                                    <div class="mb-4">
                                        <label for="" class="mb-2" style="margin-right:460px;">Message</label>
                                        <textarea name="message" class="form-control" cols="30" rows="5" placeholder="Enter your informations"></textarea>
                                        <span class="text-danger"> <?php echo $messageError ?> </span>
                                    </div>
                                    
                                <!-- <div>
                                        <input type="submit" value=" Upload an appointment " class=" bg-primary text-white form-control" name="bookingBtn">
                                    </div> -->

                                    <div>
                                    
                                            <button type="submit" class=" bg-dark text-white form-control" name="bookingBtn"> Booking  </button>   
                                    
                                        
                                        <!-- <input type="submit" value=" Upload an appointment " class=" bg-dark text-white form-control" name="bookingBtn"> -->
                                    </div>
                                </form>
                                

                            </div>
                        </div>
                        
                    </div>
                    
                    
                    
                </div>
                    </div>
                </div>
            </div>
            
        </div>

        

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

        <script>

            var treatments;
            var materials = []; 
            var prices;

            $("#myChoice").change(function(event){
                var teacher_id = $(this).val();
                var treatment_id = $(this).val();
                $.ajax({
                    url: "test3.php?teacher_id="+teacher_id+"&treatment_id="+treatment_id,
                    success: function(result){
                        var result = JSON.parse(result);
                        treatments = result;
                        console.log(treatments)
                        $("#myOption").empty();
                        result.forEach(function(data,index){
                            $("#myOption").append("<option value='"+index+"'>"+data.name+"</option>")
                        });
                    }
                });
            });

            $("#myOption").change(function(event){
                var teacher_id = $('#myChoice').val();
                var treatment_id = $(this).val(); 
                $.ajax({
                    url: "test4.php?treatment_id="+treatment_id+"&teacher_id="+teacher_id,
                    success: function(result){
                        var result = JSON.parse(result);
                        $("#material").empty(); 
                        result.forEach(function(data,index){
                            materials[data["id"]] = data;
                            $("#material").append("<option value='"+data['id']+"'>"+data['material']+"</option>")
                        });
                        console.log(materials)
                        $("#cash").val(materials[result[0]['id']]['price']); 
                    }
                }); 
            });

            $("#material").change(function(event){
                var id = $(this).val();
                $("#cash").val(materials[id]['price']); 
            });

        </script>

    </body>
</html>
<!-- end -->







