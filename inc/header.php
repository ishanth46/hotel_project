<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Business Class Hotels in Chennai | Rohaan Hotels Medavakkam & Ashok Nagar</title>
    <meta name="description"
        content="Rohaan Hotels offers business & budget hotel stays in Medavakkam & Ashok Nagar, Chennai. Perfect for corporate guests & family travelers. Book now!"> -->

    <meta charset="utf-8">
    <title><?php echo $metaData['title']; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="<?php echo $metaData['description']; ?>" name="description">
    <meta name="google-site-verification" content="dUyvTp5TPKvRAy71NgoZ2ioIVSi0K0Mz9v-EK97tsDA" />
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-K5PT9V7W');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17436790853"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-17436790853');
    </script>


    <!-- Canonical tag (Dynamic) -->
    <?php
    // Current page
    $current_page = basename($_SERVER['PHP_SELF']);

    // Canonical mapping
    $canonicals = [
        "index.php" => "https://rohaanhotels.com/",
        "hotels-in-medavakkam-business-class-hotel-in-medavakkam-chennai.php" => "https://rohaanhotels.com/hotels-in-medavakkam-business-class-hotel-in-medavakkam-chennai.php",
        "hotels-in-ashok-nagar-business-class-hotel-in-chennai.php" => "https://rohaanhotels.com/hotels-in-ashok-nagar-business-class-hotel-in-chennai.php",
        "online-hotel-booking-website-medavakkam-and-ashok-nagar.php" => "https://rohaanhotels.com/online-hotel-booking-website-medavakkam-and-ashok-nagar.php",
        "corporate-hotels-booking-in-chennai-medavakkam-ashok-nagar.php" => "https://rohaanhotels.com/corporate-hotels-booking-in-chennai-medavakkam-ashok-nagar",
        "rohaan-elite-stays-medavakkam-perumbakkam.php" => "https://rohaanhotels.com/rohaan-elite-stays-medavakkam-perumbakkam.php",
        "business-class-hotels-in-chennai.php" => "https://rohaanhotels.com/business-class-hotels-in-chennai.php",
        "hotel-rooms-under-2500-ashok-nagar.php" => "https://rohaanhotels.com/hotel-rooms-under-2500-ashok-nagar.php",
        "hotel-rooms-under-2500-near-medavakkam.php" => "https://rohaanhotels.com/hotel-rooms-under-2500-near-medavakkam.php",
        "single-room-stay-near-medavakkam.php" => "https://rohaanhotels.com/single-room-stay-near-medavakkam.php",
    ];

    // Print canonical
    if (isset($canonicals[$current_page])) {
        echo '<link rel="canonical" href="' . $canonicals[$current_page] . '" />' . PHP_EOL;
    } else {
        // Default fallback (homepage)
        echo '<link rel="canonical" href="https://www.rohaanhotels.com/" />' . PHP_EOL;
    }
    ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../css/output.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />






</head>
<!-- Before </body> -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K5PT9V7W" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class=" sticky top-0 z-50 w-full h-[50px] nav-gradient px-8 hidden md:flex justify-between items-center ">
        <div>
            <ul class="flex  justify-between w-[150px]">
                <li><a href="https://www.facebook.com/rohaanhotels/" target="_blank">
                        <i class="fa-brands fa-facebook" style="color: #ffffff;"></i></a></li>
                <li><a href="https://www.instagram.com/rohaanhotels/" target="_blank">
                        <i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a></li>
                <li><a href="https://www.linkedin.com/in/rohaan-hotels" target="_blank">
                        <i class="fa-brands fa-square-linkedin" style="color: #ffffff;"></i></a>
                </li>
                <li><a href="https://www.youtube.com/@RohaanHotels" target="_blank">
                        <i class="fa-brands fa-youtube" style="color: #ffffff;"></i></a>
                </li>
            </ul>
        </div>
        <div>
            <ul class="flex  justify-between w-[780px]">
                <li><a href="rohaan-elite-stays-medavakkam-perumbakkam.php" class="bg-white font-semibold text-[#1a6c9c]  px-3 py-1 rounded no-underline hover:no-underline ">FOR BUSINESS </a></li>
                <li><a href="corporate-hotels-booking-in-chennai-medavakkam-ashok-nagar.php" class="bg-white font-semibold text-[#1a6c9c] rounded px-2 py-1 no-underline hover:no-underline ">
                        FOR CORPORATE</a></li>
                <li><a href="tel:+919677712089" class="no-underline hover:no-underline text-white" target="_blank">
                        <i class="fa-solid fa-phone pr-4" style="color: #ffffff;"></i>+91 96777 12089</a></li>
                <li><a href="mailto:rohaanhotels@gmail.co m" class="no-underline hover:no-underline text-white" target="_blank">
                        <i class="fa-solid fa-envelope" style="color: #ffffff;"></i> rohaanhotels@gmail.com</a></li>
            </ul>
        </div>
    </div>

    <div class="sticky top-0 z-50 w-full h-[50px] nav-gradient px-4 flex md:hidden justify-between items-center">
        <div>
            <ul class="flex  justify-center gap-4 w-[350px] md:w-[380px] ">
                <li><a href="rohaan-elite-stays-medavakkam-perumbakkam.php" class="bg-white font-semibold text-[#1a6c9c] text-sm px-3 py-1 rounded no-underline hover:no-underline">FOR BUSINESS</a></li>
                <li><a href="corporate-hotels-booking-in-chennai-medavakkam-ashok-nagar.php" class="bg-white font-semibold text-sm  text-[#1a6c9c]  px-3 py-1 rounded no-underline hover:no-underline ">
                        FOR CORPORATE</a></li>
            </ul>
        </div>
    </div>

    <!-- navbar  -->
    <nav class="sticky top-[50px] z-50 bg-white shadow-md p-4 max-w-[1600px] mx-auto">
        <div class="flex justify-between items-center">
            <div class="flex items-center pl-8">
                <a href="/">
                    <img src="../assets/rohanlogo.png" alt="Rohaan-hotel-logo" class="w-[138px]"></a>
            </div>

            <!-- Hamburger / Close -->
            <div class="md:hidden flex items-center pr-8">
                <button onclick="toggleMenu()" class="text-[#009CFF] focus:outline-none">
                    <i class="fas fa-bars text-2xl" id="bars"></i>
                    <i class="fas fa-times text-2xl hidden" id="close"></i>
                </button>
            </div>

            <!-- NAVIGATION - LARGE SCREENS -->
            <div class="hidden md:flex ">
                <ul class="hidden md:flex justify-between w-[700px]">
                    <li class="text-base">
                        <a href="/"
                            class="transition duration-300 focus:outline-none focus:text-[#004875] focus:underline hover:underline hover:text-[#009CFF]"
                            style="text-underline-offset: 8px;">HOME</a>
                    </li>
                    <li class="text-base ">
                        <a href="#about"
                            class="transition duration-300 focus:outline-none focus:text-[#004875] focus:underline hover:underline hover:text-[#009CFF]"
                            style="text-underline-offset: 8px;">ABOUT US</a>
                    </li>

                    <li class="nav-list ">
                        <p>LOCATIONS</p>
                        <span class="nav-arrow"></span>
                        <ul class="nav-dropdown">
                            <li><a href="hotels-in-medavakkam-business-class-hotel-in-medavakkam-chennai.php">MEDAVAKKAM</a></li>
                            <li><a href="hotels-in-ashok-nagar-business-class-hotel-in-chennai.php">ASHOK NAGAR</a></li>
                            <li><a href="rohaan-elite-stays-medavakkam-perumbakkam.php">ROHAAN ELITE STAY <br>(MEDAVAKKAM)</a></li>
                        </ul>
                    </li>
                    <li class="text-base ">
                        <a href="#rooms"
                            class="transition duration-300 focus:outline-none focus:text-[#004875] focus:underline hover:underline hover:text-[#009CFF]"
                            style="text-underline-offset: 8px;">GALLERY</a>
                    </li>
                    <li class="text-base ">
                        <a href="online-hotel-booking-website-medavakkam-and-ashok-nagar.php"
                            class="transition duration-300 focus:outline-none focus:text-[#004875] focus:underline hover:underline hover:text-[#009CFF]"
                            style="text-underline-offset: 8px;">ONLINE BOOKING</a>
                    </li>
                    <li class="text-base ">
                        <a href="#contactus"
                            class="transition duration-300 focus:outline-none focus:text-[#004875] focus:underline hover:underline hover:text-[#009CFF]"
                            style="text-underline-offset: 8px;">CONTACT US</a>
                    </li>
                    <!-- <li class="text-base">
                        <a href="corporate-hotels-booking-in-chennai-medavakkam-ashok-nagar.php"
                            class="transition duration-300 focus:outline-none focus:text-[#004875] focus:underline hover:underline hover:text-[#009CFF]"
                            style="text-underline-offset: 8px;">CORPORATE</a>
                    </li> -->
                    <li class="nav-list ">
                        <p>PRICING</p>
                        <span class="nav-arrow"></span>
                        <ul class="nav-dropdown">
                            <li><a href="hotel-rooms-under-2500-near-medavakkam.php">For rooms @2500</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="hidden md:flex">
                <button onclick="openForm()"
                    class="bg-[#009CFF] text-white py-2 px-4 rounded hover:bg-[#004875] outline-none project-brochure-button">ROOM AVAILABILITY
                </button>
            </div>
        </div>

        <!-- MOBILE MENU -->
        <div id="mobileMenu" class="hidden flex flex-col gap-8 absolute top-[80px] left-0 w-full py-8 text-center flex-col items-center bg-gray-100 z-50 shadow-lg">
            <a href="#"
                class="transition duration-300 focus:outline-none focus:text-[#004875] focus:underline hover:underline hover:text-[#009CFF]"
                style="text-underline-offset: 8px;">HOME</a>
            <a href="#about"
                class="transition duration-300 focus:outline-none focus:text-[#004875] focus:underline hover:underline hover:text-[#009CFF]"
                style="text-underline-offset: 8px;">ABOUT</a>
            <!-- <a href="#locations"
                class="block text-gray-800 cursor-pointer mt-1 py-3 transition duration-300 focus:outline-none focus:text-yellow-500 focus:underline hover:underline hover:text-yellow-500"
                style="text-underline-offset: 8px;">Locations</a> -->
            <li class="nav-list ">
                <p>LOCATIONS</p>
                <span class="nav-arrow"></span>
                <ul class="nav-dropdown">
                    <li><a href="hotels-in-medavakkam-business-class-hotel-in-medavakkam-chennai.php">MEDAVAKKAM</a></li>
                    <li><a href="hotels-in-ashok-nagar-business-class-hotel-in-chennai.php">ASHOK NAGAR</a></li>
                    <li><a href="rohaan-elite-stays-medavakkam-perumbakkam.php">ROHAAN ELITE STAY <br>(MEDAVAKKAM)</a></li>
                    <!-- <li><a href="#service">ELITE STAY</a></li> -->
                </ul>
            </li>
            <a href="#rooms"
                class="transition duration-300 focus:outline-none focus:text-[#004875] focus:underline hover:underline hover:text-[#009CFF]"
                style="text-underline-offset: 8px;">GALLERY</a>

            <a href="online-hotel-booking-website-medavakkam-and-ashok-nagar.php"
                class="transition duration-300 focus:outline-none focus:text-[#004875] focus:underline hover:underline hover:text-[#009CFF]"
                style="text-underline-offset: 8px;">ONLINE BOOKING</a>

            <a href="#contactus"
                class="transition duration-300 focus:outline-none focus:text-[#004875] focus:underline hover:underline hover:text-[#009CFF]"
                style="text-underline-offset: 8px;">CONTACT US</a>
            <li class="nav-list ">
                <p>PRICING</p>
                <span class="nav-arrow"></span>
                <ul class="nav-dropdown">
                    <li><a href="hotel-rooms-under-2500-near-medavakkam.php">For rooms @2500</a></li>
                </ul>
            </li>

            <!-- <a href="corporate-hotels-booking-in-chennai-medavakkam-ashok-nagar.php"
                class="transition duration-300 focus:outline-none focus:text-[#004875] focus:underline hover:underline hover:text-[#009CFF]"
                style="text-underline-offset: 8px;">CORPORATE</a> -->
            <div class="md:flex">
                <button onclick="openForm()"
                    class="bg-[#009CFF] text-white py-2 px-4 rounded hover:bg-[#004875] outline-none project-brochure-button">ROOM AVAILABILITY
                </button>
            </div>
        </div>
    </nav>

    <!-- floating icons -->

    <div class="contact-icons">
        <a href="tel:+919677712089" target="_blank" class="whatsapp-icon">
            <img src="assets/floating-phone.png" alt="WhatsApp Icon">
        </a>
        <a href="https://wa.me/+919677712089" target="_blank" class="whatsapp-icon">
            <img src="assets/what-icom.png" alt="WhatsApp Icon">
        </a>
    </div>
    <!-- <button onclick="openForm()" class="fixed bottom-6 left-1/2 -translate-x-1/2 block md:hidden w-[300px] bg-[#1a6c9c] text-white px-6 py-3 z-10000 focus:outline-none rounded-full shadow-lg hover:bg-[#159cee] transition">
        Enquiry
    </button> -->


    <!-- Auto Popup (appears after 5 seconds) -->
    <div id="autoPopup" class="auto-popup-overlay">
        <div class="auto-popup-content">
            <span class="auto-close-btn" onclick="closeAutoPopup()">&times;</span>

            <div class="auto-popup-grid">

                <div class="auto-popup-image">
                    <img src="assets\Rohaan-Hotels-popup-img.jpeg" alt="Rohaan-Hotels-popup-img">
                </div>

                <div class="auto-popup-form">
                    <h2>Book Your Rooms</h2>
                    <form class="form-container" method="post" action="action.php">

                        <input name="name" type="text" placeholder="Enter your Name">
                        <input name="email" type="email" placeholder="Enter your Email">
                        <input name="phone" type="number" placeholder="Enter your Phone Number">
                        <input name="msg" class="contact-message" type="text" placeholder="Add a Message">
                        <input class="contact-submit" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>