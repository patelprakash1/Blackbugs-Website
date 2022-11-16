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
    <include src="assets/header.html"></include>
    <section class="header">
        <div class="container-fluid">
            <div class="row align-items-baseline">
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="header_logo">
                        <a href="index.html"><img src="assets/Images/logo.svg" width="100%"/></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-6 d-flex justify-content-end">
                    <nav class="navbar navbar-expand-lg">
                        <div class="">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="navmenu">
                                <div class="mobile-menu">
                                    <!-- <div class="top-em-link">
                                        <a href="mailto:contact@invints.com" class="text-gray d-block">contact@invints.com</a>
                                        <a href="tel:+91 99786 01134" class="text-white">+91 99786 01134</a>
                                    </div> -->
                                    <a href="index.html"><img src="assets/Images/logo.svg" width="100%"/></a>
                                   <!--  <div class="header_logo">
                                        <a href=".work/index.html"><img src="assets/Images/logo.svg" width="100%"/></a>
                                    </div> -->
                                    <span class="navigation-body-close-button text-danger">✕</span>
                                    
                                </div>
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="aboutus.html">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="portfolios.html">Portfolio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="career.html">Career <span class="me-3">We’r Hiring!</span></a>
                                    </li>
                                    
                                    <!-- <li class="nav-item">
                                        <a class="nav-link " href="#">We’r Hiring!</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link " href="contactus.html">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="team.html">Team</a>
                                    </li> 
                                    <!-- <div class="buttonBox position-relative d-inline-flex">
                                        <button class="btn-style"><img src="assets/Images/arrow_right.png"> Get Started </span></button>
                                        <div class="border-class"></div>
                                        <div class="border-class"></div>
                                    </div>                                    -->
                                </ul>
                                <!-- <div class="nav-head-bottom">
                                    <a href="">Dribbble</a>
                                    <a href="">Behance</a>
                                    <a href="">Instagram</a>
                                    <a href="">uplabs</a>
                                </div> -->
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 d-flex justify-content-end">
                    <div class="header_btn">
                        <button class="btn"><a href="contactus.html">Let’s Talk</a><img src="assets/Images/right_arrow.png" class="ms-3" width="14px"></button>
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
