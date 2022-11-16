<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" />
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" rel="stylesheet" /> -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/Css/style.css">
</head>

<body class="index-page"> 

    <section class="footer" data-aos="fade-up" data-aos-duration="3000">
        <div class="container footer_bg">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-md-5 mb-5">
                    <img src="assets/Images/footerlogo.svg"/>
                    <p class="footer_content">236, Tulsi Arcade, Sudama Chowk,Mota Varachha, Surat.-394101</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-md-5 mb-3">
                    <p><a href="index.html">Home</a></p>
                    <p><a href="aboutus.html">About Us</a></p>
                    <p><a href="portfolios.html">Portfolio</a></p>
                    <p><a href="career.html">Career</a></p>
                    <p><a href="contactus.html">Contact</a></p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-md-5 mb-3">
                    <p><img src="assets/Images/facebook.png" class="me-3"/><a href="#">Facebook</a></p>
                    <p><img src="assets/Images/instagram.png" class="me-3"/><a href="#">Instagram</a></p>
                    <p><img src="assets/Images/linkedin.png" class="me-3"/><a href="#">Linkedin</a></p>
                    <p><img src="assets/Images/upwork.png" class="me-3"/><a href="#">Upwork</a></p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-md-5 mb-3">
                    <p>Phone Number</p>
                    <p><a href="tel:+9176983-76466" class="social_details">+91 76983-76466</a></p>
                    <p>Email</p>
                    <p><a href="mailto:info@blackbugtechnlogies" class="social_details">info@blackbugtechnlogies</p>
                </div>
            </div>
            <div class="footer_bar" data-aos="fade-up" data-aos-duration="3000">
                <div class="row justify-content-between">
                    <div class="col-md-6 ">
                        <p class="mb-0 Copyrights mb-sm-0 mb-3">© Copyrights Woodiewin 2022 <a>Woodiewin</a></p>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-0 text-lg-end text-md-end"><a href="#" class="me-3">Terms & Conditions</a> <a href="#">Privacy Policy</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script>

        jQuery(document).ready(function(){

            /* Header Responsive */

            jQuery('.navbar-toggler-icon').click(function(){
                jQuery('.navmenu').addClass("active");
                jQuery('.navmenu').removeClass("remove");
            });
            jQuery('.navigation-body-close-button').click(function(){
                jQuery('.navigation-body-close-button').addClass('active');
                jQuery('.navmenu').addClass('remove');
            });

            jQuery(".navmenu .nav-item .nav-link").click(function(){
                jQuery('.navmenu .nav-item .nav-link').removeClass('active');
                jQuery(this).addClass('active');
            });
        });

        AOS.init();
    
    </script>
</body>
</html>
