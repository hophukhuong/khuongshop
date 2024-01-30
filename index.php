<?php  
    ob_start();
    session_start();
    include_once './cauhinh/ketnoi.php';
    if( !isset($_SESSION['email']) || ($_SESSION['email']!='phukhuong@gmail.com' && $_SESSION['pass']!='12345')){
?>
<html>
    <head><title>KHUONG SHOP</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/logo1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <?php
            if(isset($_GET['page_layout'])){
            switch ($_GET['page_layout']) {
                case 'danhsachtimkiem':
                    echo '<link rel="stylesheet" href="css/danhsachtimkiem.css">';
                    break;
                case 'danhsachsp':
                    echo '<link rel="stylesheet" href="css/danhsachsp.css">';
                    break;
                case 'chitietsp':
                    echo '<link rel="stylesheet" href="css/chitietsp.css">';
                    break;
                case 'giohang':
                    echo '<link rel="stylesheet" href="css/giohang.css">';
                    break;              
                case 'muahang':
                    echo '<link rel="stylesheet" href="css/muahang.css">';
                    break;
                case 'hoanthanh':
                    echo '<link rel="stylesheet" href="css/hoanthanh.css">';
                    break;
                }
            }

        ?>
    </head>
    <body>
        <div class="container">
            <!-- Header -->
            <div id="header">
                <div class="row">
                    <!-- search -->
                    <?php  
                        include_once './chucnang/timkiem/timkiem.php';
                    ?>
                    <!-- end search -->
                    <?php  
                        include_once './chucnang/login/login.php';
                    ?>
                    <!-- y-cart -->
                    <?php  
                        include_once './chucnang/giohang/giohangcuaban.php';
                    ?>
                    <!-- end y-cart -->
                </div>
            </div>
            <!-- End Header -->

            <!-- Banner  -->
            <div id="banner">
                <div class="row">           
                    <div id="logo"        class="col-md-12 text-center">
                        <h1>
                            <a href="index.php">
                            <img class="img-thumbnail" src="images/brand.png">
                            </a>
                        </h1>
                    </div>
                    <div id="ship" class="col-md-8 col-sm-12 col-xs-12">
                        
                    </div>            
                </div>        
            </div>
            <!-- End Banner -->

            <!-- Body -->
            <div id="body">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <?php  
                        include_once './chucnang/sanpham/danhmucsp.php';
                        include_once './chucnang/quangcao/quangcao.php';
                        include_once './chucnang/thongke/thongke.php';
                        ?>
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <?php  
                        include_once './chucnang/slideshow/slideshow.php';
                        ?>

                        <div id="main">
                            <?php
                            if(isset($_GET['page_layout'])){
                                switch ($_GET['page_layout']) {
                                case 'danhsachtimkiem':
                                    include_once './chucnang/timkiem/danhsachtimkiem.php';
                                    break;
                                case 'danhsachsp':
                                    include_once './chucnang/sanpham/danhsachsp.php';
                                    break;
                                case 'chitietsp':
                                    include_once './chucnang/sanpham/chitietsp.php';
                                    break;
                                case 'giohang':
                                    include_once './chucnang/giohang/giohang.php';
                                    break;
                                case 'muahang':
                                    include_once './chucnang/giohang/muahang.php';
                                    break;
                                case 'hoanthanh':
                                    include_once './chucnang/giohang/hoanthanh.php';
                                    break;
                                }
                            }else{
                                include_once './chucnang/sanpham/sanpham.php';
                            }
                            
                            ?>
                        </div>

                        
                    </div>
                </div>
            </div>  
            <!-- End Body -->

            <div id="brand">
                <div class="row">
                    <div class="col-md-12 text-center">
                        
                    </div>
                </div>
            </div>
 
            <!-- Footer -->
            <div id="footer">
                <div class="row">
                    <div id="footer-main" class="col-md-12 col-sm-12 col-xs-12">
                        <h4>CÔNG TY THƯƠNG MẠI ĐIỆN TỬ PHÚ Khương</h4>
                        <p><b>Trụ sở chính:</b> ấp Long Bình Long An | <b>Hotline</b> 0988 550 553</p> 
                        
                        <p>Bản quyền thuộc Khương 21TH</p>
                    </div>   
                </div>
            </div>
            <!-- End Footer -->
        </div>
    </body>
</html>
<?php  
    }
    else{
        header('location: ./quantri/quantri.php');
    }
?>