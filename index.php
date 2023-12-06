<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <meta name="description" content="Imperial Internet Home Page-Most Reliable provider of Imperial Wireless, Broadband, Internet, Fiber, and Voice Residential & Business Plans.">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/image/imperail.webp" type="image/x-icon">
    <title>Imperial Internet-Home Billing Portal</title>

    <!-- Demo styles -->
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            font-size: 18px;
            background: #fff;
            /* display: flex;
            justify-content: center;
            align-items: center; */
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="assets/image/imperial-logo.webp" class="img-fluid" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="text-white"><i class="bi bi-text-right fs-2"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item nav-li">
                        <a class="nav-link nav-achor active" aria-current="page" href="https://plans.imperialinternet.com/">Plans</a>
                    </li>
                    <li class="nav-item nav-li dropdown">
                        <a class="nav-achor nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Imperial Offering
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="https://imperialwireless.com/">Imperial Wireless</a></li>
                            <li><a class="dropdown-item" href="https://imperialbroadband.com/">Imperial Broadband</a></li>
                            <li><a class="dropdown-item" href="https://imperialinternet.com/">Imperial Internet</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-li">
                        <a class="nav-link nav-achor" href="https://imperialinternet.com/about-us/">About Us</a>
                    </li>
                    <li class="nav-item nav-li">
                        <a class="nav-link nav-achor" href="https://imperialwireless.com/pages/support">Support</a>
                    </li>
                    <li class="nav-item nav-li">
                        <a class="nav-link nav-achor" href="https://imperialinternet.com/contact/">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a href="sign-in.php" class="btn bttn" type="submit">Pay Your Bill Now</a>
                </form>
            </div>
        </div>
    </nav>
    <!-- Swiper -->
    <div class="swiper mySwiper  " style="margin-top: 80px;">
        <div class="swiper-wrapper">
            <div class="swiper-slide d-flex justify-content-center align-items-center position-relative">
                <img src="assets/image/home-img2.webp" class="img-fluid position-absolute slide-img" alt="">
                <video autoplay muted loop id="background-video" class=" position-absolute w-100 video">
                    <source src="assets/image/coverage.mp4"  type="video/mp4">
                </video>
                <div class="container w-100 position-absolute">
                    <div class="row  w-100  ">
                        <div class="col-12 col-md-7 col-sm-12 text-white ">
                        <div class="card p-3" style="background-color: #0000006b;">
                            <h1 data-aos="fade-down" data-aos-duration="1000" class="fw-bold text-center">IMPERIAL INTERNET</h1>
                            <p class="m-2 text-center" data-aos="fade-left" data-aos-duration="1000">WIRELESS & FIBER OPTIC NETWORK INTERNET</p>
                            <h5 class="text-grey text-center" data-aos="fade-right" data-aos-duration="1000">ULTRA-FAST INTERNET SPEEDS</h5>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide d-flex justify-content-center align-items-center position-relative">
                <img src="assets/image/home-img2.webp" class="img-fluid position-absolute slide-img" alt="">
                <video autoplay muted loop id="background-video" class=" position-absolute w-100 video">
                    <source src="assets/image/main4.mp4"  type="video/mp4">
                </video>
                <div class="container w-100 position-absolute">
                    <div class="row  w-100  ">
                        <div class="col-12 col-md-7 col-sm-12 text-white ">
                        <div class="card p-3" style="background-color: #0000006b;">
                            <h1 class="fw-bold">IMPERIAL WIRELESS</h1>
                            <h3 class="">YOUR ONE SOURCE OF CONNECTIVITY</h3>
                            <p class=""> Imperial Wireless offers a full spectrum of wireless internet solutions and is backed up by highly trained support personnel. Our broad expertise across an array of vertical sectors, along with best-in-class technologies, enables our customers to fully leverage Imperial Wireless connectivity, a fully equipped router, exceptionally minimal latency, no lock-in contract, and 4G/5G for maximum business development.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide d-flex justify-content-center align-items-center position-relative">
                <img src="assets/image/home-img3.webp" class="img-fluid position-absolute slide-img" alt="">
                <video autoplay muted loop id="background-video" class=" position-absolute w-100 video">
                    <source src="assets/image/main1.mp4" type="video/mp4">
                </video>
                <div class="container position-absolute">
                    <div class="row  w-100 ">
                        <div class="col-12 col-md-7 col-sm-12 text-white ">
                           <div class="card p-3" style="background-color: #0000006b;">
                           <h1>IMPERIAL BROADBAND</h1>
                            <h3 class="">STAY CONNECTED WITH IMPERIAL BROADBAND SERVICES</h3>
                            <p class="">Imperial Wireless offers suitable broadband connections and bundles based on your demands and more potent connectivity. You should opt for Imperial Broadband services if you want a splendid browsing experience while downloading images, watching videos, downloading, or playing games. Access to continually higher bandwidths that can enable new and innovative interactive content and applications. </p>
                           </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide d-flex justify-content-center align-items-center position-relative">
                <img src="assets/image/home-img4.webp" class="img-fluid position-absolute slide-img" alt="">
                <video autoplay muted loop id="background-video" class=" position-absolute w-100 video">
                    <source src="assets/image/main2.mp4" type="video/mp4">
                </video>
                <div class="container position-absolute">
                    <div class="row w-100">
                        <div class="col-12 col-md-7 col-sm-12 text-white ">
                        <div class="card p-3" style="background-color: #0000006b;">
                            <h1>IMPERIAL VOICE</h1>
                            <h3 class="">LIVE FREELY AND SPEAK YOUR MIND</h3>
                            <p class="">Imperial Voice offers crystal-clear voice quality on a modernized digital fiber-optic network. With its cutting-edge technology, you are guaranteed pristine connections and trouble-free phone service. Imperial Voice gives you the freedom to communicate with anyone, anywhere for an endless amount of time. Rediscover the living energy of connecting hearts by calling with the best HD voice and without any lag. </p>
                        </div>
                         </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide d-flex justify-content-center align-items-center position-relative">
                <img src="assets/image/home-img4.webp" class="img-fluid position-absolute slide-img" alt="">
                <video autoplay muted loop id="background-video" class=" position-absolute w-100 video">
                    <source src="assets/image/iptv.mp4" type="video/mp4">
                </video>
                <div class="container position-absolute">
                    <div class="row w-100">
                        <div class="col-12 col-md-7 col-sm-12 text-white ">
                        <div class="card p-3" style="background-color: #0000006b;">
                            <h1>IMPERIAL VOICE</h1>
                            <h3 class="">LIVE FREELY AND SPEAK YOUR MIND</h3>
                            <p class="">Imperial Voice offers crystal-clear voice quality on a modernized digital fiber-optic network. With its cutting-edge technology, you are guaranteed pristine connections and trouble-free phone service. Imperial Voice gives you the freedom to communicate with anyone, anywhere for an endless amount of time. Rediscover the living energy of connecting hearts by calling with the best HD voice and without any lag. </p>
                        </div>
                         </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide gg">
                <footer class="bg-dark h-100 ">
                    <div class="container">
                        <div class="d-flex justify-content-center pt-5"><img src="assets/image/footer-logo.webp" class="img-fluid footer-logo" alt=""></div>
                        <div class="row pt-5">
                            <div class="col-12 col-md-5 col-sm-12 text-white">
                                <h3 class="fw-bold">Departments:</h3>
                                <ul class="p-0 footer-li">
                                    <li><span class="">Sales :</span> <a href="tel:(800) 660-2639" class="text-decoration-none text-white">(800) 660-2639</a></li>
                                    <li><span class="">Billing :</span> <a href="tel:(888) 581-0740" class="text-decoration-none text-white">(888) 581-0740</a></li>
                                    <li><span class="">Technical Support :</span> <a href="tel:(888) 483-4115" class="text-decoration-none text-white">(888) 483-4115</a></li>
                                    <li><span class="">Customer Service :</span> <a href="tel:(888) 431-1090" class="text-decoration-none text-white">(888) 431-1090</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4 col-sm-12 text-white">
                                <ul class="p-0 footer-li">
                                    <li><span class="fw-bold ">Trade Name :</span> <span>Imperial Internet</span></li>
                                    <li><span class="fw-bold ">Email : </span> <a href="mailto:info@imperialinternet.com" class="text-decoration-none text-white">info@imperialinternet.com</a></li>
                                    <li><span class="fw-bold ">Operational Hours:</span></li>
                                    <li><span class="text-light">8 am to 9 pm - EST</span> </li>

                                </ul>
                            </div>
                            <div class="col-12 col-md-3 col-sm-12 text-white">
                                <ul class="p-0 d-flex justify-content-evenly">
                                    <li><a href=""><img src="assets/image/facebook.webp" class="img-fluid " alt=""></a></li>
                                    <li><a href=""><img src="assets/image/insta.webp" class="img-fluid " alt=""></a></li>
                                    <li><a href=""><img src="assets/image/linkedin.webp" class="img-fluid " alt=""></a></li>
                                    <li><a href=""><img src="assets/image/youtube.webp" class="img-fluid " alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <hr class="bg-light">
                        <p class="text-white m-0">Copyright © 2023. Imperial Wireless. All rights reserved.</p>
                    </div>
                </footer>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>


    <!-- Swiper JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            direction: window.innerWidth < 780 ? "horizontal" : "vertical",
            slidesPerView: 1,
            spaceBetween: 30,
            mousewheel: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>
<script>
    AOS.init();
</script>

</html>