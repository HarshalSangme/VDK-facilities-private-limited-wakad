<!doctype html>
<html lang="en">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- AOS link -->

        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Manual css -->
        <link rel="stylesheet" href="../../assets/css/general/homepage.css">
        <link rel="stylesheet" href="../../assets/css/general/footer.css">

        <!-- Service Section Css -->
        <link rel="stylesheet" href="../../assets/css/general/servicesSectionCommon.css">

        <!-- Font awesome -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- owl css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

        <title>Hello, world!</title>
</head>

<body>

        <nav class="navbar fixed-top navbar-expand-lg">
                <div class="container">
                        <a class="navbar-brand" href="/">
                                <img src="../../assets/images/logo/logo.png" alt="" width="120" height="50" class="d-inline-block align-text-top">
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">

                                        <li class="nav-item">
                                                <a class=" nav-list-color nav-link" aria-current="page" href="/">HOME</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                                <a class=" nav-list-color nav-link" href="../../pages/navbarPages/aboutUs.html">ABOUT US</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                                <a class=" nav-list-color nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        SERVICES
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="../../pages/servicesPages/serviceOne.html">SERVICE ONE</a></li>
                                                        <li><a class="dropdown-item" href="../../pages/servicesPages/serviceTwo.html">
                                                                        SERVICE TWO </a></li>
                                                        <li><a class="dropdown-item" href="../../pages/servicesPages/serviceThree.html">
                                                                        SERVICE THREE
                                                                </a></li>
                                                        <li><a class="dropdown-item" href="../../pages/servicesPages/serviceFour.html">
                                                                        SERVICE FOUR
                                                                </a></li>
                                                        <li><a class="dropdown-item" href="../../pages/servicesPages/serviceFive.html">SERVICE FIVE</a></li>
                                                        <li><a class="dropdown-item" href="../../pages/servicesPages/serviceSix.html">SERVICE SIX</a></li>
                                                        <!-- <li><a class="dropdown-item"
                                                                        href="pages/whatWeOfferPages/technical-services.html">TECHNICAL
                                                                        SERVICES</a></li>
                                                        <li><a class="dropdown-item"
                                                                        href="pages/whatWeOfferPages/finance-and-accounting.html">FINANCE
                                                                        AND ACCOUNTING</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                        href="pages/whatWeOfferPages/sales.html">SALES</a>
                                                        </li> -->
                                                </ul>
                                        </li>

                                        <li class="nav-item dropdown">
                                                <a class=" nav-list-color nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        SECTORS
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/hotel-management.html">HOTEL
                                                                        MANAGEMENT</a></li>
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/property-development.html">
                                                                        PROPERTY DEVELOPMENT </a></li>
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/design-management.html">DESIGN
                                                                        MANAGEMENT</a></li>
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/human-resources-training.html">HUMAN
                                                                        RESOURCE AND
                                                                        TRAINING</a></li>
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/marketing-revenue.html">MARKETING
                                                                        & REVENUE MANAGEMENT</a></li>
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/brand-compliance.html">BRAND
                                                                        COMPLIANCE</a></li>
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/technical-services.html">TECHNICAL
                                                                        SERVICES</a></li>
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/finance-and-accounting.html">FINANCE
                                                                        AND ACCOUNTING</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/sales.html">SALES</a>
                                                        </li>
                                                </ul>
                                        </li>

                                        <li class="nav-item dropdown">
                                                <a class=" nav-list-color nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        INSIGHTS
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/hotel-management.html">HOTEL
                                                                        MANAGEMENT</a></li>
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/property-development.html">
                                                                        PROPERTY DEVELOPMENT </a></li>
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/design-management.html">DESIGN
                                                                        MANAGEMENT</a></li>
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/human-resources-training.html">HUMAN
                                                                        RESOURCE AND
                                                                        TRAINING</a></li>
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/marketing-revenue.html">MARKETING
                                                                        & REVENUE MANAGEMENT</a></li>
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/brand-compliance.html">BRAND
                                                                        COMPLIANCE</a></li>
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/technical-services.html">TECHNICAL
                                                                        SERVICES</a></li>
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/finance-and-accounting.html">FINANCE
                                                                        AND ACCOUNTING</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/sales.html">SALES</a>
                                                        </li>
                                                </ul>
                                        </li>

                                        <li class="nav-item dropdown">
                                                <a class="nav-list-color nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        INVERSTOR RELATIONS
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/hotel-management.html">HOTEL
                                                                        MANAGEMENT</a></li>
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/property-development.html">
                                                                        PROPERTY DEVELOPMENT </a></li>
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/design-management.html">DESIGN
                                                                        MANAGEMENT</a></li>
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/human-resources-training.html">HUMAN
                                                                        RESOURCE AND
                                                                        TRAINING</a></li>
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/marketing-revenue.html">MARKETING
                                                                        & REVENUE MANAGEMENT</a></li>
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/brand-compliance.html">BRAND
                                                                        COMPLIANCE</a></li>
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/technical-services.html">TECHNICAL
                                                                        SERVICES</a></li>
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/finance-and-accounting.html">FINANCE
                                                                        AND ACCOUNTING</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="pages/whatWeOfferPages/sales.html">SALES</a>
                                                        </li>
                                                </ul>
                                        </li>



                                        <li class="nav-item">
                                                <a class="nav-list-color nav-link" href="forms/partnerContactForm/partner.php">ENQUIRY</a>
                                        </li>


                                </ul>

                        </div>
                </div>
        </nav>
        <!-- ----------------------------------SECTIONS ------------------------------->

        <!-- SERVICE SECTION 1 -->
        <section>

                <div class="row service1-container">

                        <div class="col">
                                <h2 class="heading-service"> SOLID WASTE MANAGEMENT </h2>

                                <div class="span-line"></div>

                                <p class="service1-para mt-5">
                                        Solid waste management plays an vital role to every municipal corporation, municipal councils.
                                        <br>
                                        The whole work need to be carried out as per the guidelines of MSW rule 2016.
                                        <br>
                                        We are providing end to end solutions for management of solid waste.
                                       
                                </p>

                        </div>


                        <div class="col ">
                                <div class="service1-img-con">
                                        <img src="../../assets/images/Service-section-imgs/facli.jpg" alt="">
                                </div>
                        </div>

                </div>

        </section>

        <!-- SERVICE SECION 2 -->

  <section>

     <div class="section2-container">
        
        <h2 class="section2-h1-heading">Solid waste management by <span class="text-danger">VDK</span></h2>
        
        <div class="row">
            <!-- <div class="col-12 m-auto"> -->
                <div class="owl-carousel owl-theme">

                        <div class="item">
                                <img src="../../assets/images/Service-section-imgs/facli.jpg" alt="">
                        </div>

                        <div class="item">
                                <img src="../../assets/images/Service-section-imgs/facli.jpg" alt="">
                        </div>

                        <div class="item">
                                <img src="../../assets/images/management.jpeg" alt="">
                        </div>

                        <div class="item">
                                <img src="../../assets/images/Service-section-imgs/facli.jpg" alt="">
                        </div>

                        <div class="item">
                                <img src="../../assets/images/Service-section-imgs/facli.jpg" alt="">
                        </div>

                        <div class="item">
                                <img src="../../assets/images/Service-section-imgs/facli.jpg" alt="">
                        </div>

                        <div class="item">
                                <img src="../../assets/images/Service-section-imgs/facli.jpg" alt="">
                        </div>

                        <div class="item">
                                <img src="../../assets/images/Service-section-imgs/facli.jpg" alt="">
                        </div>

                        <div class="item">
                                <img src="../../assets/images/Service-section-imgs/facli.jpg" alt="">
                        </div>

     
                </div>
            <!-- </div> -->
        </div>
   </div>

</section> 




        <!-- Back to top button
<button type="button" class="btn btn-outline-dark btn-floating btn-lg" id="btn-back-to-top">
    <i class="fa fa-arrow-up"></i>
</button> -->

        <!-- ------------------------------FOOTER---------------------------- -->

        <footer class="footer-container">
                <div class="footer-top footer">
                        <div class="container ft-container-main">

                                <div class="row">

                                        <div class="col-md-4 col-lg-4 footer-about wow fadeInUp">

                                                <img src="../../assets/images/logo/logo.png" alt="" width="120" height="50" style="margin-bottom: 20px;">

                                                <p class="ft-row-1-p">
                                                        Vdk Group Today Is Amongst The Top Facility Management Companies In Pune And A
                                                        One-stop-shop For All Your Facility Management Requirements Related To Business.
                                                </p>

                                                <p><a href="#">Services</a></p>
                                                <p><a href="#">Our Team</a></p>
                                                <p><a href="#">About us</a></p>
                                                <p><a href="#">Contact us</a></p>

                                        </div>

                                        <div class="col-md-4 col-lg-4 offset-lg-1 footer-contact wow fadeInDown" style="color: white;">

                                                <h3 style="color: white; margin-bottom: 20px;">Contact</h3>

                                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> Corporate Office :
                                                        <!-- <br> -->
                                                        Office No 408
                                                        <br>
                                                        The Address Commercia Mall
                                                        <br>
                                                        Shanker Kalate Nagar
                                                        <br>
                                                        Wakad - 411057
                                                </p>

                                                <p><i class="fa fa-whatsapp"></i> Whatsapp: +91-9657550522</p>
                                                <p><i class="fa fa-phone"></i> Phone: +91-9922733222</p>
                                                <p><i class="fa fa-envelope"></i> Email: <a href="mailto:hello@domain.com">info@nexottel.com</a>
                                                </p>

                                        </div>

                                        <div class="col-md-4 col-lg-3 footer-social wow fadeInUp " style="color: white;">
                                                <h3 style="margin-bottom: 20px;">Follow us</h3>
                                                <p style="margin-bottom: 40px;">
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                </p>

                                                <button id="btn-enquiry"> ENQUIRY </button>

                                        </div>

                                </div>

                        </div>
                </div>

        </footer>



        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

        <!-- AOS LIBRARY SCRIPT -->

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
                AOS.init();
        </script>

        <!-- owl -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

        <!-- <script>
                
$(document).ready(function(){
  
        $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})

});
        
        </script> -->

        <script>
                
                $('.owl-carousel').owlCarousel({
    margin:10,
    loop:true,
    autoWidth:true,
    items:3
})


    </script>


</body>

</html>