<?php
    require_once "connect.php";
    $id = $_GET["id"];
    $sql ="SELECT * FROM sanpham where id=$id";
    $query = $connect->query($sql);
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Chi tiết sản phẩm</title>

    <!-- ------------add logo on tab---------- -->
    <link rel="icon" href="../Images/logo_small.f2cdcd68.svg">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../font/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://allfont.net/allfont.css?fonts=roboto-thin" rel="stylesheet" type="text/css" />
    <!-- // Add the new slick-theme.css if you want the default styling -->


    <link rel="stylesheet" href="../Css/layout.css">
    <link rel="stylesheet" href="../Css/curon.css">
    <link rel="stylesheet" href="../Css/headerHover.css">
    <link rel="stylesheet" href="../Css/footer.css">
    <link rel="stylesheet" href="../Css/reponsive.css">
    <link rel="stylesheet" href="../Css/chitiet.css">


   


</head>

<body>
    <!-- start-header -->

    <header>
        <nav class="">
            <div class="menu-left position-rel ">
                <div class="menu-icon">
                    <button><i class="fa-solid fa-bars"></i></button>
                </div>
                <ul class="option d-flex "> 
                    <li class="nav-item " data-option="false" href="#option-1">
                        <a href="#option-1">Nam Giới</a>
               
                    </li>

                    <li class="nav-item " data-option="false" href="#option-2">
                        <a href="#">Nữ Giới</a>

                    </li>
                    <li class="nav-item" data-option="false" href="#option-3">
                        <a href="..//View/lienhe.php">Liên Hệ</a>
                    </li>
                    <li class="nav-item" data-option="false" href="#option-4">
                        <a href="..//View/thongtin.php">Thông tin</a>
                    </li>
                </ul>
                <div class="option-content ">
                    <div class="aaa" style="position: absolute;left: -5rem; width: 100vw;">
                        <div id="option-1" class="option-content-item active">
                            <div class="menu-gender">
                                <div class="view d-flex">
                                    <div class="gender-left" id="gender-left1">
                                        <div class="gender-item active" data-active="true" href="#menu_1">
                                            <a href="..//View/curron_male.php">ĐỒNG HỒ</a>

                                        </div>
                                        <div class="gender-item" data-active="false" href="#menu_2">
                                            <a href="#">PHỤ KIỆN</a>
                                        </div>
                                        <div class="gender-item" data-active="false" href="#menu_3">
                                            <a href="..//View/daydongho.php">DÂY ĐÔNG HỒ</a>
                                        </div>
                                        <div class="gender-item" data-active="false" href="#menu_4">
                                            <a href="#">QUÀ TẶNG</a>
                                        </div>
                                    </div>
                                    <div class="nav-content">
                                        <div id="menu_1" class="nav-content-item  ">
                                            <div class="item-image">
                                                <img src="../Images/Kashmir.webp" alt="">
                                                <p>KASHMIR</p>
                                            </div>
                                            <div class="item-image">
                                                <img src="../Images/Weimar.webp" alt="">
                                                <p>WEIMAR</p>
                                            </div>
                                            <div class="item-image">
                                                <img src="../Images/Colosseum.webp" alt="">
                                                <p>COLOSSEUM</p>
                                            </div>
                                            <div class="item-image">
                                                <img src="../Images/Jackson.webp" alt="">
                                                <p>JACKSON</p>
                                            </div>
                                            <div class="item-image">
                                                <img src="../Images/Detroit_1.webp" alt="">
                                                <p>DETROIT</p>
                                            </div>
                                            <div class="item-image">
                                                <img src="../Images/Futura.webp" alt="">
                                                <p>FUTURA</p>
                                            </div>
                                            <div class="item-image">
                                                <img src="../Images/Whitesands.webp" alt="">

                                            </div>
                                            <div class="item-image">
                                                <img src="../Images/G_FORKS_300x300_.webp" alt="">
                                            </div>
                                            <div class="item-image">
                                                <div class="item-img" style="padding: 50px 0;"> <a href="#">Xem tất cả
                                                        <i class="fa-solid fa-arrow-right"></i></a></div>
                                            </div>
                                        </div>
                                        <div id="menu_2" class="nav-content-item">
                                            <div class="item-image">
                                                <img src="../Images/Cuff_1.webp" alt="">
                                                <p>KASHMIR</p>
                                            </div>
                                            <div class="item-image">
                                                <div class="item-img" style="padding: 50px 0;"> <a href="#">Xem tất cả
                                                        <i class="fa-solid fa-arrow-right"></i></a></div>
                                            </div>
                                        </div>
                                        <div id="menu_3" class="nav-content-item w-100 d">
                                            <div class="item-image_2">
                                                <img style="width: 13rem;" class=""  src="../Images/3_ebc2dc50c4.webp" alt="">
                                            </div>
                                            <div class="item-image_2 ">
                                                <div class="item-img">
                                                    <div class="buynow">
                                                        <p> Từ nay bạn đã có thể biến một thành nhiều chiếc đồng hồ để
                                                            thay đổi phong cách thời trang của bản thân với dây đồng hồ
                                                            Curnon
                                                        </p>

                                                      
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                        <div id="menu_4" class="nav-content-item">
                                            <div class="item-image_2">
                                                <img class="w-80" src="../Images/Gift_for_him_3f92a1034a.webp" alt="">

                                            </div>
                                            <div class="item-image_2">
                                                <div class="buynow">
                                                    <p> Từ nay bạn đã có thể biến một thành nhiều chiếc đồng hồ để
                                                        thay đổi phong cách thời trang của bản thân với dây đồng hồ
                                                        Curnon
                                                    </p>

                                                  
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div id="option-2" class="option-content-item">
                            <div class="menu-gender">
                                <div class="view d-flex">
                                    <div class="gender-left" id="gender-left2">
                                        <div class="gender-item active" data-active="true" href="#menu_11">
                                            <a href="..//View/curron_nu.php">ĐỒNG HỒ</a>

                                        </div>
                                        <div class="gender-item" data-active="false" href="#menu_22">
                                            <a href="..//View/vongtay.php">VÒNG TAY</a>
                                        </div>
                                        <div class="gender-item" data-active="false" href="#menu_33">
                                            <a href="..//View/daydongho.php">DÂY ĐÔNG HỒ</a>
                                        </div>
                                        <div class="gender-item" data-active="false" href="#menu_44">
                                            <a href="#">QUÀ TẶNG</a>
                                        </div>
                                    </div>
                                    <div class="nav-content  ">
                                        <div id="menu_11" class="nav-content-item">
                                            <div class="item-image">
                                                <img src="../Images/Kashmir.webp" alt="">
                                                <p>KASHMIR</p>
                                            </div>
                                            <div class="item-image">
                                                <img src="../Images/Weimar.webp" alt="">
                                                <p>WEIMAR</p>
                                            </div>
                                            <div class="item-image">
                                                <img src="../Images/Colosseum.webp" alt="">
                                                <p>COLOSSEUM</p>
                                            </div>
                                            <div class="item-image">
                                                <img src="../Images/Jackson.webp" alt="">
                                                <p>JACKSON</p>
                                            </div>
                                           
                                            <div class="item-image">
                                                <div class="item-img" style="padding: 50px 0;"> <a href="#">Xem tất cả
                                                        <i class="fa-solid fa-arrow-right"></i></a></div>
                                            </div>
                                        </div>
                                        <div id="menu_22" class="nav-content-item">
                                            <div class="item-image">
                                                <img src="../Images/Cuff_1.webp" alt="">
                                                <p>KASHMIR</p>
                                            </div>
                                            <div class="item-image">
                                                <div class="item-img" style="padding: 50px 0;"> <a href="#">Xem tất cả
                                                        <i class="fa-solid fa-arrow-right"></i></a></div>
                                            </div>
                                        </div>
                                        <div id="menu_33" class="nav-content-item">
                                            <div class="item-image_2">
                                                <img style="width: 13rem;" class=""  src="../Images/3_ebc2dc50c4.webp" alt="">
                                            </div>
                                            <div class="item-image_2 ">
                                                <div class="item-img">
                                                    <div class="buynow">
                                                        <p> Từ nay bạn đã có thể biến một thành nhiều chiếc đồng hồ để
                                                            thay đổi phong cách thời trang của bản thân với dây đồng hồ
                                                            Curnon
                                                        </p>

                                                      
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                        <div id="menu_44" class="nav-content-item">
                                            <div class="item-image_2">
                                                <img class="w-80" src="../Images/Gift_for_him_3f92a1034a.webp" alt="">

                                            </div>
                                            <div class="item-image_2">
                                                <div class="buynow">
                                                    <p> Từ nay bạn đã có thể biến một thành nhiều chiếc đồng hồ để
                                                        thay đổi phong cách thời trang của bản thân với dây đồng hồ
                                                        Curnon
                                                    </p>

                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="option-3" class="option-content-item">

                        </div>

                    </div>

                </div>

            </div>
            <div class="menu-center ">
                <div class="logo"  style="margin-left: 100px;"><a href="..//View/curron.php"><img
                            src="https://curnonwatch.com/_next/static/media/logo.cc5d661a.svg" alt=""></a></div>
            </div>
            <div class="menu-right ">
            <ul class="d-flex">
                    <li>
                        <a href="..//View/cart.php"><span>SẢN PHẨM </span> </a>
                    <li>
                    <li  style="margin: 0 20px;
                                width:20%;">
                        <a href="..//View/shopping.php"><span class="del-mob">GIỎ HÀNG</span></i></a>
                    <li>  
                    <li >
                        <a href="..//View/dangnhap.php"><span class="del-mob">ĐĂNG XUẤT</span></i></a>
                    </li>           
                </ul>
            </div>
            </div>
        </nav>
    </header>
   
 <!-- end header -->
    
    <section>
        
        <div class="banner">
            <div class="banner-1 position-rel  ">
                <div class="image-banner ">
                    <video autoplay muted loop id="" style=" width:100%;
                                                           ">
                        <source  src="../Images/JACKSON - THE 1ST VIETNAMESE DIVE WATCH _ CURNON.mp4" type="">
                    </video>
                </div>
            </div>
            <div class="banner2 ">
                <div class="banner-item">
                    <ul class="d-flex ">
                        <li><i class="fa-solid fa-truck-fast"></i> FRERSHIP ĐƠN HÀNG >700K</li>
                        <li><i class='fas fa-shield-alt'></i> BẢO HÀNH 10 NĂM</li>
                        <li><i class="fa-solid fa-box-archive"></i> ĐỔI TRẢ MIỄN PHÍ TRONG VÒNG 3 NGÀY</li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="home-category" style="margin-left: 10rem;">
            <div class="list-cate d-flex w-100 ">
                <div class="cate-item   position-rel  ">
                    <div class="cate-img">
                        <img style="width:125%;" src="../Images/Dh_Nam_PC_9edf6413d0.jpg" alt="">
                    </div>
                   
                </div>
                <div class="cate-item position-rel ">
                    <div class="cate-img">
                        <img src="../Images/Dh_Nu_PC_6f0fd420b2.jpg" alt="" style="width:125%;">
                    </div>
                    
                </div>
                <div class="cate-item position-rel ">
                    <div class="cate-img">
                        <img  src="../Images/Banner_Collection_1_Cuff_pc_64bc8697e3.jpg" alt="" style="width:60%;">
                    </div>
                  
                </div>
            </div>
        </div>


        <!-- End-category -->
        <div class="content-product">
                    <div class="content">
                        <div class="product-img">
                            <div > 
                                <?php
                                foreach ($query as $value) { ?>
                                 <img class="anh" src="../Images/<?php echo $value["Anh"];?>" style="width:85%;">
                                <div class="anh1">
                                    <a href="..//HTML/sanphamchitiet.html">
                                        <img class="sd" src="../Images/lace.webp" alt="" style="width: 20%;">
                                    </a>
                                    <a href="..//HTML/sanphamchitiet1.html"> 
                                        <img class="sd" src="../Images/1_black5.webp" alt=""style="width: 20%;">
                                    </a>
                                    <a href="..//HTML/sanphamchitiet2.html">
                                        <img class="sd" src="../Images/haze.webp" alt="" style="width: 20%;">
                                    </a>
                                    <a href="..//HTML/sanphamchitiet3.html">
                                        <img class="sd" src="../Images/charm.webp" alt="" style="width: 20%;">
                                    </a>
                                </div>
                             </div>
                        </div>
                        <div class="price">
                            <div class="mota">
                                <h1><b><?php echo $value["TenSanPham"]; ?></b></h1>
                            </div >
                            <div class="mota">
                                <h5> Kích cỡ dây: 20MM</h5> 
                            </div>
                            <div class="mota">
                                <h5> Chất liệu dây: DÂY DA GENUINE</h5> 
                            </div>
                            <div class="mota">
                                <h5> Độ dày : 7MM</h5> 
                            </div>
                            <hr>
                            <div class="giaban">
                                <div class="gb"> 
                                    <h3> Giá bán</h3> 
                                    <h3 class="fw-900 mota"><?php echo number_format($value["Gia"]); ?></h3>
                                    <div class="icon-container">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>                                
                                        <i class="fas fa-star"></i>                               
                                        <i class="fas fa-star"></i>                     
                                        <i class="fas fa-star"></i>                           
                                        <i class="quantity"> 5/5 Rating</i>                         
                                    </div>
                                </div> 
                            </div>
                            <div style="text-align:center;
                                                        padding:10px 10px;
                                                        ">
                                <form action="giohang.php?id=<?php echo $value["ID"]; ?>" method="POST">
                                    <button type="submit" name="add-to-cart" style="width:30%;
                                                                                    padding: 10px 10px;">THÊM GIỎ HÀNG </button>  
                             </div>
                            <hr>
                            <div class="mota">
                                <div>
                                    <b>Mô Tả Ngắn</b>
                                </div>
                                <div class="kn font-15">
                                    <p>Đồng hồ KASHMIR với thiết kế xanh trắng lịch lãm, sang trọng. Mặt kính làm từ chất liệu kính khoáng (Mineral) giúp hạn chế trầy xước, tăng độ bền sản phẩm, dây đeo bằng thép không gỉ bền bỉ, cứng cáp.Đồng hồ trang bị thêm tính năng xem thứ và ngày, giúp bạn quản lý thời gian hiệu quả. Hệ số chống nước 5 ATM, cho phép bạn sử dụng đồng hồ khi tắm, rửa tay, đi mưa mà không lo lắng bị vào nước.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
        <?php } 
        ?> 
     
        
        <!-- Banner-bottom -->


       
            <!-- Banner-Mobile -->
            
             <!--End banner-Mobile -->
         <!-- Banner-bottom -->
        <div class="story w-70  ">
            <div class="story-title " >
                <div class="story-logo  text-center  ">
                    <img src="../Images/logo_small.f2cdcd68.svg" alt="logo_small">
                    <p class="font-15 w-50 text-center ">Cuối năm 2016, 3 chàng trai đam mê Startup và Đồng hồ quyết định thành lập
                        Curnon, nhưng ngay từ đầu,
                        chúng tôi đã biết rằng: Curnon sinh ra với một sứ mệnh lớn lao hơn, không chỉ dừng lại là một
                        thương
                        hiệu đồng hồ. Chúng tôi muốn mang tới một nguồn cảm hứng, một sự thay đổi về tư duy, về suy nghĩ
                        và
                        chính những cái chúng tôi gọi là trải nghiệm cho người trẻ.</p>
                </div>
                <div class="story-img text-center">
                    <img src="../Images/storyLarge.b54806b1.png" class="w-100" alt="">
                </div>
            </div>
        </div>
        <div class="slider-wapper ">
            <div class="title-slider text-center">
                <h2 class="mb-1r">BE PART OF CURNON</h2>
                <p class="font-15">Ai nói bạn không thể lựa chọn gia đình?</p>
            </div>
            <div class="image-slider d-flex">
                <div class="image-item">
                    <div class="image">
                        <img src="../Images/Background-5.webp" alt="">
                    </div>
                </div>
                <div class="image-item">
                    <div class="image">
                        <img src="../Images/Background-9.webp" alt="">
                    </div>
                </div>
                <div class="image-item">
                    <div class="image">
                        <img src="../Images/Background-10.webp" alt="">
                    </div>
                </div>
                <div class="image-item">
                    <div class="image">
                        <img src="../Images/Background-11.webp" alt="">
                    </div>
                </div>
                <div class="image-item">
                    <div class="image">
                        <img src="../Images/Background-12.webp" alt="">
                    </div>
                </div>
                <div class="image-item">
                    <div class="image">
                        <img src="../Images/Background-13.webp" alt="">
                    </div>
                </div>
                <div class="image-item">
                    <div class="image">
                        <img src="../Images/Background-14.webp" alt="">
                    </div>
                </div>
                <div class="image-item">
                    <div class="image">
                        <img src="../Images/Background-8.webp" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- start-banner -->

    </div>
    <footer >
        <div class="footer-top w-70">
            <div class="footer-contact">
                <div class="footer-info">
                    <h4>LIÊN LẠC</h4>
                    <p>cskh@curnonwatch.com</p>
                    <p>0868889103</p>
                    <div class="footer-soial-netword">
                        <a href="http://facebook.com/"><i class="fa-brands fa-facebook fa-sm fa-bounce fa-2xl"></i></a>
                        <a href="http://facebook.com/"><i
                                class="fa-brands fa-square-instagram fa-bounce fa-2xl"></i></a>
                        <a href="http://facebook.com/"><i class="fa-brands fa-square-youtube fa-bounce fa-2xl"></i></a>
                    </div>
                    <div class="footer-bank">
                        <span><img src="../Images/cod.10bcbd91.png" alt=""></span>
                        <span><img src="../Images/fundiin.34ef01d3.png" alt=""></span>
                        <span><img src="../Images/momo.1a8e86d8.png" alt=""></span>
                        <span><img src="../Images/vnpay.3fa45c06.png" alt=""></span>
                    </div>
                </div>
            </div>
            <div class="footer-address">
                <div class="address-HN">
                    <h5>HANOI STORES</h5>
                    <p>33 Hàm Long, Hoàn Kiếm.</p>
                    <p>9 B7 Phạm Ngọc Thạch, Đống Đa.</p>
                    <p>173C Kim Mã, Ba Đình.</p>
                    <p>82 Cầu Giấy, Quan Hoa, Cầu Giấy.</p>
                </div>
            </div>
            <div class="footer-address">
                    <h5>TP.HCM STORES</h5>
                    <p>25 Nguyễn Trãi, P.Bến Thành, Quận 1.</p>
                    <p>348 Lê Văn Sỹ, Phường 14, Quận 3.</p>
                    <p>349 Quang Trung, Phường 10, Quận Gò Vấp.</p>
            </div>
        </div>
        <div class="footer-center ">
            <div class="d-flex w-70">
                <div class="footer-loading">
                    <span>
                        <a href="..//View/curron_male.php">ĐỒNG HỒ NAM</a>
                    </span>
                    <span>
                        <a href="..//View/curron_nu.php">ĐỒNG HỒ NỮ</a>
                    </span>
                    <span>
                        <i class="fa-solid fa-spinner fa-spin"></i>
                    </span>
                </div>
                <div class="footer-guarantee ">
                    <span class="border-right">
                        <a href="..//View/guarantee.php">Chính sách vận chuyển </a>
                    </span>
                    <span><a href="..//View/dangki.php">Đăng ký</a></span>
                    <span><a href="..//View/dangnhap.php">Đăng nhập</a></span>
                </div>
            </div>
            
        </div>
        <div class="footer-bottom d-flex">
            <div class="certificate w-50">
                <h5>© 2021 - Bản quyền của CTCP PHÁT TRIỂN SẢN PHẨM SÁNG TẠO VIỆT</h5>
                <p>Giấy chứng nhận ĐKKD số 0108150321 do Sở Kế hoạch và Đầu tư Thành phố Hà Nội cấp ngày 29/01/2018 123C
                    Thụy Khuê, Tây Hồ, Hà Nội</p>
            </div>
            <div class="certificate-img">
                <img src="../Images/certificate.e07e4993.png" alt="">
            </div>
        </div>
    </footer>



    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

   
    <script src="../Js/heder-hover.js"></script>
    <script src="../Js/slick.js"></script>
    <script src="../Js/giohang.js"></script>
    
</body>

</html>