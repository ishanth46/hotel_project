<?php
$metaData = [
    "title" => "Business Class Hotels in Chennai | Rohaan Hotels Medavakkam & Ashok Nagar",
    "description" => "Rohaan Hotels offers business & budget hotel stays in Medavakkam & Ashok Nagar, Chennai. Perfect for corporate guests & family travelers. Book now!",
];

include("inc/header.php")

?>

<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">


<style>
    .testimonial {
        margin: 0 20px 40px;
    }

    .testimonial .testimonial-content {
        padding: 35px 25px 35px 50px;
        margin-bottom: 35px;
        background: #e1e1e180;
        position: relative;
    }

    .testimonial .testimonial-content:before {
        content: "";
        position: absolute;
        bottom: -30px;
        left: 0;
        border-top: 15px solid #ced0ce;
        border-left: 15px solid transparent;
        border-bottom: 15px solid transparent;
    }

    .testimonial .testimonial-content:after {
        content: "";
        position: absolute;
        bottom: -30px;
        right: 0;
        border-top: 15px solid #ced0ce;
        border-right: 15px solid transparent;
        border-bottom: 15px solid transparent;
    }

    .testimonial-content .testimonial-icon {
        width: 50px;
        height: 45px;
        background: #009CFF;
        text-align: center;
        font-size: 22px;
        color: #fff;
        line-height: 42px;
        position: absolute;
        top: 37px;
        left: -19px;
    }

    .testimonial-content .testimonial-icon:before {
        content: "";
        border-bottom: 16px solid #0770b3;
        border-left: 18px solid transparent;
        position: absolute;
        top: -16px;
        left: 1px;
    }

    .testimonial .description {
        font-size: 15px;
        font-style: italic;
        color: #8a8a8a;
        line-height: 23px;
        margin: 0;
    }

    .testimonial .title {
        display: block;
        font-size: 18px;
        font-weight: 700;
        color: #525252;
        text-transform: capitalize;
        letter-spacing: 1px;
        margin: 0 0 5px 0;
    }

    .testimonial .post {
        display: block;
        font-size: 14px;
        color: #009CFF;
    }

    .owl-theme .owl-controls {
        margin-top: 20px;
    }

    .owl-theme .owl-controls .owl-page span {
        background: #ccc;
        opacity: 1;
        transition: all 0.4s ease 0s;
    }

    .owl-theme .owl-controls .owl-page.active span,
    .owl-theme .owl-controls.clickable .owl-page:hover span {
        background: #009CFF;
    }

    .container-greviews {
        max-width: 1400px;
        margin: auto;
    }

    .owl-theme .owl-controls .owl-buttons div {
        position: absolute;
        top: 40%;
        background: #f0f0f0;
        color: #000000;
        padding: 0px 0px;
        cursor: pointer;

    }

    /* Left arrow */
    .owl-theme .owl-controls .owl-buttons .owl-prev {
        left: -40px;
        width: 50px;
        height: 50px;
        border-radius: 50px;
        font-size: 30px;

        /* adjust as needed */
    }

    /* Right arrow */
    .owl-theme .owl-controls .owl-buttons .owl-next {
        right: -40px;
        width: 50px;
        height: 50px;
        border-radius: 50px;
        font-size: 30px;
        /* adjust as needed */
    }

    /*     
    .container-greviews h2 {

        padding-bottom: 30px;
    } */

    @media (max-width:768px) {
        .owl-theme .owl-controls .owl-buttons .owl-next {
            right: -10px;
        }

        .owl-theme .owl-controls .owl-buttons .owl-prev {
            left: -7px;
        }

        .container-greviews h2 {
            margin-top: 30px;
            padding: 0px;
        }

        .owl-theme .owl-controls {
            margin-top: 0px;
        }

        .row {
            width: 400px;
            margin: auto;
        }
    }
</style>

<body>
    <!-- hero section  -->
    <section
        class="max-w-[1600px] mx-auto z-0 bg-[url(../assets/mobile-banner.png)] h-[305px] md:h-[512px] md:bg-[url(../assets/banner-bg.png)]  bg-cover bg-center px-8 md:px-12 py-[5px] md:py-[120px] ">
        <div class="max-w-3xl text-left text-white  md:pl-8 flex flex-col pt-8 md:pt-0">
            <h1 class="font-medium uppercase mb-4 font-lora text-xl md:text-[40px] leading-[1.5] md:leading-[1.3]">
                Business Class Hotel in Chennai,
                Medavakkam & Ashok Nagar - Rohaan Hotels
            </h1>

            <button onclick="openForm()"
                class="project-brochure-button bg-[#ffff]  rounded-md font-medium w-[100px] md:w-[165px] text-[#004875]  text-sm md:text-base py-2 px-2 md:px-4 md:mt-5 focus:outline-none focus:ring-0 outline-none outline-0 outline-offset-0 animated-button victoria-two ">
                BOOK NOW
            </button>
        </div>
    </section>


    <!-- Popup Form -->
    <div id="popupForm" class="form-popup">

        <form class="form-container" method="post" action="action.php">
            <button type="button" class="btn cancel" onclick="closeForm()"><span class="close-x">X</span></button>
            <input type="hidden" name="source" value="popup">
            <input name="name" type="text" placeholder="Enter your Name">
            <input name="email" type="email" placeholder="Enter your Email">
            <input name="phone" type="number" placeholder="Enter your Phone Number">
            <input name="msg" class="contact-message" type="text" placeholder="Add a Message">
            <input class="contact-submit" type="submit" value="Submit">
        </form>
    </div>
    <!-- Popup Form ends -->


    <!-- calender  -->
    <?php include("inc/calenderform.php") ?>



    <!-- g reviews  -->
    <!-- <div class="max-w-xl md:max-w-7xl mx-auto p-4 md:p-0 md:mt-[-50px]">
        <script src="https://static.elfsight.com/platform/platform.js" async></script>
        <div class="elfsight-app-7b885646-e05a-4b1f-900f-89ca0b789fe2" data-elfsight-app-lazy></div>
    </div> -->

    <!-- g reviews new  -->
    <div class="container-greviews -z-10">
        <div class="flex items-center justify-center pb-8">
            <span><img src="../assets/line1.png" alt="line-vector"></span>
            <h2 class="text-[#004875] text-xl md:text-3xl font-lora leading-[1.5] text-center px-0 md:!px-4">What Our Customer Says</h2>
            <span><img src="../assets/Line2.png" alt="line-vector"></span>
        </div>

        <div class="row flex justify-center -z-10">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <h3 class="title">Ragul</h3>
                            <p class="description">
                                The room was spotless and beautifully decorated.
                                The staff were incredibly friendly and helpful throughout my stay.<br><br>
                            </p>
                        </div>
                    </div>

                    <div class="testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <h3 class="title">Mohammed Affrudin</h3>
                            <p class="description">
                                I recently had the pleasure of staying at Rohaan Hotels Medavakkam,
                                it’s one of the best budget-friendly and clean hotels I’ve experienced!
                            </p>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <h3 class="title">suresh kumar</h3>
                            <p class="description">
                                Rohaan hotel - I had a nice experience. receptionist was well mannered
                                and good attitude.rooms are clean and neat on a whole it's a awesome experience.
                            </p>
                        </div>
                    </div>


                    <div class="testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <h3 class="title">Naveen B V</h3>
                            <p class="description">
                                I recently stayed here,
                                The location of the hotel was perfect, with easy access to nearby attractions and essential facilities.<br><br>
                            </p>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <h3 class="title">Pritam Raju</h3>
                            <p class="description">
                                I had an excellent stay at this affordable hotel. The room was surprisingly spacious, clean,the staff were friendly and well-equipped for the price
                            </p>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <h3 class="title"> B Nh</h3>
                            <p class="description">
                                Fantastics stay
                                I really love this hotel
                                Nice place to stay staff are good rooms
                                Clean and neat
                                <br>
                                <br>
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center pb-[20px] -z-10">
                <a href="https://g.page/r/CYK53oyftKrwEBM/review">
                    <button
                        class="bg-[#009CFF] text-white  uppercase text-base font-semibold outline-none animated-button victoria-one">
                        Write a Review
                    </button>
                </a>
            </div>
        </div>
    </div>


    <!-- about us section -->
    <section id="about"
        class="max-w-[1540px] bg-[url(../assets/about-bg.png)] bg-cover bg-center  mx-auto flex flex-col  justify-between md:flex-row gap-8  bg-white p-[5%] mobile-text-center">
        <div class="max-w-xl mx-auto  ">
            <h2 class="text-[#004875] text-xl  md:text-3xl  font-lora leading-[1.5] ">Welcome to Rohaan Hotels – Where
                <br> Comfort
                Meets Convenience
            </h2>

            <p class="py-4 text-sm  md:text-base">If you're looking for a business class hotel in Chennai, Rohaan Hotels
                offers the
                perfect blend of luxury
                and affordability. We are strategically located across Medavakkam, Ashok Nagar, and nearby areas,
                catering to both business professionals and families. Our properties are also ideal for those seeking
                budget hotels in Chennai with top-class service. </p>
            <p class="py-4 text-sm  md:text-base">We are proud to be recognized as one of the top business class hotels
                in
                Medavakkam and business class
                hotels in Ashok Nagar, and a preferred choice among budget hotels in Medavakkam for short and long
                stays.</p>
        </div>
        <div class="max-w-xl mx-auto relative">
            <img src="../assets/about-1-img.png" alt="Rohaan Hotels">
            <img src="../assets/about-2-img.png" class="absolute left-[-4%] md:left-[-15%] top-[70%] w-[273px]"
                alt="Rohaan Hotels">
            <img src="../assets/line-rectangle.png" class="absolute right-[-3%] top-[91%]" alt="Rohaan Hotels">
        </div>
    </section>

    <!-- Medavakkam location slider  -->
    <section id="locations" class="max-w-8xl mx-auto p-0 md:p-8 mt-[80px] md:mt-0">
        <div class="flex items-center justify-center ">
            <span><img src="../assets/line1.png" alt="line-vector"></span>
            <h2 class="px-4 font-lora text-xl  md:text-3xl text-center text-[#004875]">Hotel Locations</h2>
            <span><img src="../assets/Line2.png" alt="line-vector"></span>
        </div>
        <div
            class="w-[350px] md:w-[1200px] mx-auto flex flex-col md:flex-row space-y-2 justify-center md:space-x-[100px] items-center mt-4 mobile-text-center">
            <div class="w-[200px] md:w-[400px] md:text-right relative">
                <span class=" hidden md:block "><img src="../assets/vector-line-3.png"
                        class="absolute right-[40%] top-[-26%] w-[30px] h-[30px]" alt="vectors"></span>
                <h3 class="text-xl md:text-3xl font-bold font-lora">Medavakkam</h3>
                <span class=" hidden md:block "><img src="../assets/vector-right-lines.png"
                        class="absolute right-[-4%] top-[46%] w-[30px] h-[30px" alt="vectors"></span>
            </div>
            <div class="w-[300px] md:w-[600px] text-left">
                <p class="mobile-text-center md:text-left">Rohaan Hotel Medavakkam offers a business class hotel stay
                    experience in one of South Chennai’s
                    fastest growing localities. Ideally suited for professionals, families, and medical visitors, our
                    hotel combines contemporary design with comfort. As a leading business class hotel in Medavakkam, we
                    offer easy access to the IT corridors of OMR and Sholinganallur, making it perfect for corporate
                    stays.
                </p>
            </div>
        </div>
    </section>

    <!-- slider section  -->
    <section class="max-w-[1400px] mx-auto base-template">
        <div class="base-template__wrapper wrapper">
            <div class="base-template__content">
                <div class="booking-slider">
                    <!-- Slider Navigation -->
                    <div class="booking-slider__nav slider-nav">
                        <div title="Newest offers" tabindex="0" class="slider-nav__item slider-nav__item_prev">
                            <svg width="16" height="28" viewBox="0 0 16 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 26L2 14L14 2" stroke="white" stroke-width="4" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div title="Oldest offers" tabindex="0" class="slider-nav__item slider-nav__item_next">
                            <svg width="16" height="28" viewBox="0 0 16 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 26L14 14L2 2" stroke="white" stroke-width="4" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <!-- Slider Content -->

                    <div class="booking-slider__slider swiper">
                        <div class="booking-slider__wrapper swiper-wrapper">
                            <!-- Slider: Slide 1 -->
                            <div class="booking-slider__slide swiper-slide">
                                <div class="booking-slider__item booking-slider-item">
                                    <a title="Luxury Detached Home in Bournemouth" href="/"
                                        class="booking-slider-item__image" onclick="event.preventDefault();">
                                        <img src="../assets/bedroom-rohaan.png" alt="Hotels in Medavakkam - Rohaan Hotels" />
                                    </a>
                                    <div class="booking-slider-item__content">
                                        <h2 class="booking-slider-item__title">
                                            <a title="Hotels in Medavakkam" href="/" onclick="event.preventDefault();">
                                                Deluxe Double Room
                                            </a>
                                        </h2>
                                        <div class="booking-slider-item__text">
                                            Enjoy a refined stay in our Deluxe Double Room with air-conditioned rooms,
                                            featuring an array of amenities designed to ensure maximum comfort and ease
                                            throughout your visit.
                                        </div>

                                        <div class="py-4">
                                            <img src="../assets/black-line.png" alt="black-line-vector" />
                                        </div>

                                        <div class="booking-slider-item__footer">
                                            <div class="booking-slider-item__footer-inner">
                                                <div class="booking-slider-item__amenities grid grid-cols-2">
                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/queensizebed.png" alt="queensizebed" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Queen Size 170
                                                            Sq.ft</div>
                                                    </div>

                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/digitalsafe.png" alt="digitalsafe" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Digital Safe
                                                        </div>
                                                    </div>

                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/hotwater.png" alt="hotwater" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">24x7 hot water
                                                        </div>
                                                    </div>
                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/airconditioner.png"
                                                                alt="airconditioner" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Air conditioner
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="py-4">
                                                    <img src="../assets/black-line.png" alt="black-line-vector" />
                                                </div>
                                                <div class="flex  items-center justify-center">
                                                    <div>
                                                        <a class="booking-slider-item__btn" href="#calendar"
                                                            onclick="event.preventDefault(); document.querySelector('#calendar').scrollIntoView({ behavior: 'smooth' });">
                                                            <span class="booking-slider-item__btn-text">Book Now</span>
                                                            <span class="booking-slider-item__btn-icon"></span>
                                                        </a>
                                                    </div>
                                                    <!-- <div>
                                                        <p class="text-[#004875] font-bold text-xl">₹2,500 / Night</p>

                                                    </div> -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slider: Slide 2 -->

                            <div class="booking-slider__slide swiper-slide">
                                <div class="booking-slider__item booking-slider-item">


                                    <a title="Luxury Detached Home in Bournemouth" href="/"
                                        class="booking-slider-item__image" onclick="event.preventDefault();">
                                        <img src="../assets/double-bedroom-with-breakfast.png"
                                            alt="Hotels in Medavakkam" />
                                    </a>

                                    <div class="booking-slider-item__content">
                                        <!-- <div class="booking-slider-item__price">
                                            £3,500<small>/month</small>
                                        </div> -->

                                        <h2 class="booking-slider-item__title">
                                            <a title="Hotels in Medavakkam" href="/" onclick="event.preventDefault();">
                                                Deluxe Double Room with breakfast
                                            </a>
                                        </h2>

                                        <!-- <div title="Address" class="booking-slider-item__address">
                                            <span class="booking-slider-item__address-icon">
                                                <img src="https://bato-web-agency.github.io/bato-shared/img/slider-2/icon-address.svg"
                                                    alt="Address" />
                                            </span>
                                            29 Terrace Rd, BH2 5EL
                                        </div> -->

                                        <div class="booking-slider-item__text">
                                            Start your day right in our Deluxe Double room with a delicious breakfast
                                            and an array of amenities thoughtfully designed for your perfect stay.
                                        </div>

                                        <div class="py-4">
                                            <img src="../assets/black-line.png" alt="black-line-vector" />
                                        </div>

                                        <div class="booking-slider-item__footer">
                                            <div class="booking-slider-item__footer-inner">
                                                <div class="booking-slider-item__amenities grid grid-cols-2">
                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/queensizebed.png" alt="queensizebed" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Queen Size 170
                                                            Sq.ft</div>
                                                    </div>

                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/digitalsafe.png" alt="digitalsafe" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Digital Safe
                                                        </div>
                                                    </div>

                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/hotwater.png" alt="hotwater" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">24x7 hot water
                                                        </div>
                                                    </div>
                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/airconditioner.png"
                                                                alt="airconditioner" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Air conditioner
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="py-4">
                                                    <img src="../assets/black-line.png" alt="black-line-vector" />
                                                </div>
                                                <div class="flex  items-center justify-center">
                                                    <div>
                                                        <a class="booking-slider-item__btn" href="#calendar"
                                                            onclick="event.preventDefault(); document.querySelector('#calendar').scrollIntoView({ behavior: 'smooth' });">
                                                            <span class="booking-slider-item__btn-text">Book Now</span>
                                                            <span class="booking-slider-item__btn-icon"></span>
                                                        </a>
                                                    </div>
                                                    <!-- <div>
                                                        <p class="text-[#004875] font-bold text-xl">₹2,700 / Night</p>

                                                    </div> -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slider: Slide 3 -->
                            <div class="booking-slider__slide swiper-slide">
                                <div class="booking-slider__item booking-slider-item">
                                    <!-- <div title="The most popular option" class="booking-slider-item__badge">
                                        Popular
                                    </div> -->

                                    <a title="Luxury Detached Home in Bournemouth" href="/"
                                        class="booking-slider-item__image" onclick="event.preventDefault();">
                                        <img src="../assets/twin-room.png" alt="Hotels in Medavakkam - Rohaan Hotels " />
                                    </a>

                                    <div class="booking-slider-item__content">
                                        <!-- <div class="booking-slider-item__price">
                                            £3,500<small>/month</small>
                                        </div> -->

                                        <h2 class="booking-slider-item__title">
                                            <a title="Hotels in Medavakkam" href="/" onclick="event.preventDefault();">
                                                Deluxe Twin Room
                                            </a>
                                        </h2>

                                        <!-- <div title="Address" class="booking-slider-item__address">
                                            <span class="booking-slider-item__address-icon">
                                                <img src="https://bato-web-agency.github.io/bato-shared/img/slider-2/icon-address.svg"
                                                    alt="Address" />
                                            </span>
                                            29 Terrace Rd, BH2 5EL
                                        </div> -->

                                        <div class="booking-slider-item__text">
                                            Enjoy the perfect blend of comfort and convenience in our twin room, with
                                            two comfortable beds and amenities to refresh and revitalise.
                                        </div>

                                        <div class="py-4">
                                            <img src="../assets/black-line.png" alt="black-line-vector" />
                                        </div>

                                        <div class="booking-slider-item__footer">
                                            <div class="booking-slider-item__footer-inner">
                                                <div class="booking-slider-item__amenities grid grid-cols-2">
                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/twin-bedroom.png" alt="twin-bedroom" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Twin Beds 150
                                                            Sq.ft</div>
                                                    </div>

                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/digitalsafe.png" alt="digitalsafe" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Digital Safe
                                                        </div>
                                                    </div>

                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/hotwater.png" alt="hotwater" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">24x7 hot water
                                                        </div>
                                                    </div>
                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/airconditioner.png"
                                                                alt="airconditioner" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Air conditioner
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="py-4">
                                                    <img src="../assets/black-line.png" alt="black-line-vector" />
                                                </div>
                                                <div class="flex  items-center justify-center">
                                                    <div>
                                                        <a class="booking-slider-item__btn" href="#calendar"
                                                            onclick="event.preventDefault(); document.querySelector('#calendar').scrollIntoView({ behavior: 'smooth' });">
                                                            <span class="booking-slider-item__btn-text">Book Now</span>
                                                            <span class="booking-slider-item__btn-icon"></span>
                                                        </a>
                                                    </div>
                                                    <!-- <div>
                                                        <p class="text-[#004875] font-bold text-xl">₹2,850/ Night</p>

                                                    </div> -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slider: Slide 4 -->
                            <div class="booking-slider__slide swiper-slide">
                                <div class="booking-slider__item booking-slider-item">
                                    <!-- <div title="The most popular option" class="booking-slider-item__badge">
                                        Popular
                                    </div> -->

                                    <a title="Luxury Detached Home in Bournemouth" href="/"
                                        class="booking-slider-item__image" onclick="event.preventDefault();">
                                        <img src="../assets/twin-bedroom-with-breakfast.png"
                                            alt="Hotels in Medavakkam" />
                                    </a>

                                    <div class="booking-slider-item__content">
                                        <!-- <div class="booking-slider-item__price">
                                            £3,500<small>/month</small>
                                        </div> -->

                                        <h2 class="booking-slider-item__title">
                                            <a title="Hotels in Medavakkam" href="/" onclick="event.preventDefault();">
                                                Deluxe Twin Room With breakfast
                                            </a>
                                        </h2>

                                        <!-- <div title="Address" class="booking-slider-item__address">
                                            <span class="booking-slider-item__address-icon">
                                                <img src="https://bato-web-agency.github.io/bato-shared/img/slider-2/icon-address.svg"
                                                    alt="Address" />
                                            </span>
                                            29 Terrace Rd, BH2 5EL
                                        </div> -->

                                        <div class="booking-slider-item__text">
                                            Enjoy the perfect blend of comfort and convenience in our twin room, with
                                            two comfortable beds and amenities to refresh and revitalise.
                                        </div>

                                        <div class="py-4">
                                            <img src="../assets/black-line.png" alt="black-line-vector" />
                                        </div>

                                        <div class="booking-slider-item__footer">
                                            <div class="booking-slider-item__footer-inner">
                                                <div class="booking-slider-item__amenities grid grid-cols-2">
                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/twin-bedroom.png" alt="queensizebed" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Twin Beds 150
                                                            Sq.ft</div>
                                                    </div>

                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/digitalsafe.png" alt="digitalsafe" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Digital Safe
                                                        </div>
                                                    </div>

                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/hotwater.png" alt="hotwater" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">24x7 hot water
                                                        </div>
                                                    </div>
                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/airconditioner.png"
                                                                alt="airconditioner" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Air conditioner
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="py-4">
                                                    <img src="../assets/black-line.png" alt="black-line-vector" />
                                                </div>
                                                <div class="flex  items-center justify-center">
                                                    <div>
                                                        <a class="booking-slider-item__btn" href="#calendar"
                                                            onclick="event.preventDefault(); document.querySelector('#calendar').scrollIntoView({ behavior: 'smooth' });">
                                                            <span class="booking-slider-item__btn-text">Book Now</span>
                                                            <span class="booking-slider-item__btn-icon"></span>
                                                        </a>
                                                    </div>
                                                    <!-- <div>
                                                        <p class="text-[#004875] font-bold text-xl">₹3,000/ Night</p>

                                                    </div> -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Slider Pagination -->

                    <div class="booking-slider__pagination slider-pagination"></div>
                </div>
                <div class="max-w-6xl px-2 md:px-0 px-2 md:px-0  mx-auto text-center mt-8 mb-8 mobile-text-center">
                    <p>For travelers seeking a budget hotel in Medavakkam without compromising on quality, Rohaan
                        provides clean, well equipped rooms, high-speed Wi-Fi, and 24/7 support. The location is close
                        to Global Hospital, educational institutions, and shopping hubs, making it one of the most
                        preferred budget hotels in Chennai for short and extended stays.</p>
                    <div
                        class="max-w-sm mx-auto flex flex-col md:flex-row space-y-5 md:space-y-0 items-center justify-between mt-8 ">
                        <a href="hotels-in-medavakkam-business-class-hotel-in-medavakkam-chennai.php">
                            <button
                                class="bg-[#009CFF] text-white px-8 py-2 uppercase text-base font-semibold outline-none animated-button victoria-one">Read
                                more
                            </button>
                        </a>
                        <button onclick="openForm()"
                            class="project-brochure-button border border-[#009CFF] text-[#009CFF]  rounded-md font-medium w-[100px] md:w-[165px] text-[#004875]  text-sm md:text-base py-2 px-2 md:px-4 md:mt-5 focus:outline-none focus:ring-0 outline-none outline-0 outline-offset-0 animated-button victoria-two ">
                            BOOK NOW
                        </button>

                        <!-- <a href="https://www.google.com/maps/place/Rohaan+Hotels+Medavakkam+by+UPAR/@12.9093978,80.1942302,17z/data=!4m9!3m8!1s0x3a525dddafbf6983:0x313f72403e08ee91!5m2!4m1!1i2!8m2!3d12.9093978!4d80.1968051!16s%2Fg%2F11wfy1hclj?hl=en&entry=ttu&g_ep=EgoyMDI1MDgxMy4wIKXMDSoASAFQAw%3D%3D"
                            target="_blank">
                            <button
                                class="border border-[#009CFF] text-[#009CFF] px-8 py-2 uppercase text-base font-semibold outline-none focus-none">Get
                                directions</button> </a> -->
                    </div>
                </div>

                <div class="px-8">
                    <img src="../assets/divider.png" alt="divider" class="mx-auto mt-4" />
                </div>
            </div>
        </div>
    </section>

    <!--Ashok Nagar location slider  -->
    <section class="max-w-7xl mx-auto pb-8">
        <div
            class="w-[350px] md:w-[1200px] mx-auto flex flex-col md:flex-row space-y-2 justify-center md:space-x-[100px] items-center mt-4 mobile-text-center">
            <div class="w-[200px] md:w-[400px] md:text-right relative -z-10">
                <span class=" hidden md:block "><img src="../assets/vector-line-3.png"
                        class="absolute right-[40%] top-[-26%] w-[30px] h-[30px]" alt="vectors"></span>
                <h3 class="text-xl md:text-3xl font-bold font-lora">Ashok Nagar</h3>
                <span class=" hidden md:block "><img src="../assets/vector-right-lines.png"
                        class="absolute right-[-4%] top-[46%] w-[30px] h-[30px" alt="vectors"></span>
            </div>
            <div class="w-[300px] md:w-[600px] text-left">
                <p class="mobile-text-center md:text-left">Rohaan Hotel Ashok Nagar brings together style, comfort, and
                    a prime central location. Recognized as
                    a top business class hotel in Ashok Nagar, the property is perfect for working professionals,
                    transit guests, and shoppers visiting nearby T. Nagar. With metro connectivity and quick access to
                    major business hubs, it stands out among business hotels in Chennai near metro stations.
                </p>
            </div>
        </div>

    </section>
    <section class="max-w-[1400px] mx-auto base-template">
        <div class="base-template__wrapper wrapper">
            <div class="base-template__content">
                <div class="booking-slider">
                    <!-- Slider Navigation -->
                    <div class="booking-slider__nav slider-nav">
                        <div title="Newest offers" tabindex="0" class="slider-nav__item slider-nav__item_prev">
                            <svg width="16" height="28" viewBox="0 0 16 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 26L2 14L14 2" stroke="white" stroke-width="4" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div title="Oldest offers" tabindex="0" class="slider-nav__item slider-nav__item_next">
                            <svg width="16" height="28" viewBox="0 0 16 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 26L14 14L2 2" stroke="white" stroke-width="4" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <!-- Slider Content -->

                    <div class="booking-slider__slider swiper">
                        <div class="booking-slider__wrapper swiper-wrapper">

                            <!-- Slider: Slide 1 -->

                            <div class="booking-slider__slide swiper-slide">
                                <div class="booking-slider__item booking-slider-item">
                                    <!-- <div title="The most popular option" class="booking-slider-item__badge">
                                        Popular
                                    </div> -->

                                    <a title="Luxury Detached Home in Bournemouth" href="/"
                                        class="booking-slider-item__image" onclick="event.preventDefault();">
                                        <img src="../assets/ashok-nagar-room1.jpeg" alt="Hotels in Ashok Nagar - Rohaan Hotels" />
                                    </a>

                                    <div class="booking-slider-item__content">
                                        <!-- <div class="booking-slider-item__price">
                                            £3,500<small>/month</small>
                                        </div> -->

                                        <h2 class="booking-slider-item__title">
                                            <a title="Hotels in Medavakkam" href="/" onclick="event.preventDefault();">
                                                Deluxe Double Room
                                            </a>
                                        </h2>

                                        <!-- <div title="Address" class="booking-slider-item__address">
                                            <span class="booking-slider-item__address-icon">
                                                <img src="https://bato-web-agency.github.io/bato-shared/img/slider-2/icon-address.svg"
                                                    alt="Address" />
                                            </span>
                                            29 Terrace Rd, BH2 5EL
                                        </div> -->

                                        <div class="booking-slider-item__text">
                                            Enjoy a refined stay in our Deluxe Double Room with air-conditioned rooms,
                                            featuring an array of amenities designed to ensure maximum comfort and ease
                                            throughout your visit.
                                        </div>

                                        <div class="py-4">
                                            <img src="../assets/black-line.png" alt="black-line-vector" />
                                        </div>

                                        <div class="booking-slider-item__footer">
                                            <div class="booking-slider-item__footer-inner">
                                                <div class="booking-slider-item__amenities grid grid-cols-2">
                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/queensizebed.png" alt="queensizebed" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Queen Size 170
                                                            Sq.ft</div>
                                                    </div>

                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/digitalsafe.png" alt="digitalsafe" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Digital Safe
                                                        </div>
                                                    </div>

                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/hotwater.png" alt="hotwater" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">24x7 hot water
                                                        </div>
                                                    </div>
                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/airconditioner.png"
                                                                alt="airconditioner" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Air conditioner
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="py-4">
                                                    <img src="../assets/black-line.png" alt="black-line-vector" />
                                                </div>
                                                <div class="flex  items-center justify-center">
                                                    <div>
                                                        <a class="booking-slider-item__btn" href="#calendar"
                                                            onclick="event.preventDefault(); document.querySelector('#calendar').scrollIntoView({ behavior: 'smooth' });">
                                                            <span class="booking-slider-item__btn-text">Book Now</span>
                                                            <span class="booking-slider-item__btn-icon"></span>
                                                        </a>
                                                    </div>
                                                    <!-- <div>
                                                        <p class="text-[#004875] font-bold text-xl">₹2,500 / Night</p>

                                                    </div> -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slider: Slide 2 -->

                            <div class="booking-slider__slide swiper-slide">
                                <div class="booking-slider__item booking-slider-item">
                                    <!-- <div title="The most popular option" class="booking-slider-item__badge">
                                        Popular
                                    </div> -->

                                    <a title="Luxury Detached Home in Bournemouth" href="/"
                                        class="booking-slider-item__image" onclick="event.preventDefault();">
                                        <img src="../assets/rohaan-ashok-nagar.jpeg" alt="Hotels in Ashok Nagar - Rohaan Hotels" />

                                    </a>

                                    <div class="booking-slider-item__content">
                                        <!-- <div class="booking-slider-item__price">
                                            £3,500<small>/month</small>
                                        </div> -->

                                        <h2 class="booking-slider-item__title">
                                            <a title="Hotels in Medavakkam" href="/" onclick="event.preventDefault();">
                                                Deluxe Double Room with breakfast
                                            </a>
                                        </h2>

                                        <!-- <div title="Address" class="booking-slider-item__address">
                                            <span class="booking-slider-item__address-icon">
                                                <img src="https://bato-web-agency.github.io/bato-shared/img/slider-2/icon-address.svg"
                                                    alt="Address" />
                                            </span>
                                            29 Terrace Rd, BH2 5EL
                                        </div> -->

                                        <div class="booking-slider-item__text">
                                            Start your day right in our Deluxe Double room with a delicious breakfast
                                            and an array of amenities thoughtfully designed for your perfect stay.
                                        </div>

                                        <div class="py-4">
                                            <img src="../assets/black-line.png" alt="black-line-vector" />
                                        </div>

                                        <div class="booking-slider-item__footer">
                                            <div class="booking-slider-item__footer-inner">
                                                <div class="booking-slider-item__amenities grid grid-cols-2">
                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/queensizebed.png" alt="queensizebed" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Queen Size 170
                                                            Sq.ft</div>
                                                    </div>

                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/digitalsafe.png" alt="digitalsafe" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Digital Safe
                                                        </div>
                                                    </div>

                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/hotwater.png" alt="hotwater" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">24x7 hot water
                                                        </div>
                                                    </div>
                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/airconditioner.png"
                                                                alt="airconditioner" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Air conditioner
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="py-4">
                                                    <img src="../assets/black-line.png" alt="black-line-vector" />
                                                </div>
                                                <div class="flex  items-center justify-center">
                                                    <div>
                                                        <a class="booking-slider-item__btn" href="#calendar"
                                                            onclick="event.preventDefault(); document.querySelector('#calendar').scrollIntoView({ behavior: 'smooth' });">
                                                            <span class="booking-slider-item__btn-text">Book Now</span>
                                                            <span class="booking-slider-item__btn-icon"></span>
                                                        </a>
                                                    </div>
                                                    <!-- <div>
                                                        <p class="text-[#004875] font-bold text-xl">₹2,700 / Night</p>

                                                    </div> -->
                                                </div>

                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>

                            <!-- Slider: Slide 3 -->

                            <div class="booking-slider__slide swiper-slide">
                                <div class="booking-slider__item booking-slider-item">
                                    <!-- <div title="The most popular option" class="booking-slider-item__badge">
                                        Popular
                                    </div> -->

                                    <a title="Luxury Detached Home in Bournemouth" href="/"
                                        class="booking-slider-item__image" onclick="event.preventDefault();">
                                        <img src="../assets/ashok-nagar-room-3.jpeg" alt="Hotels in Ashok Nagar" />
                                    </a>

                                    <div class="booking-slider-item__content">
                                        <!-- <div class="booking-slider-item__price">
                                            £3,500<small>/month</small>
                                        </div> -->

                                        <h2 class="booking-slider-item__title">
                                            <a title="Hotels in Medavakkam" href="/" onclick="event.preventDefault();">
                                                Deluxe Twin Room
                                            </a>
                                        </h2>

                                        <!-- <div title="Address" class="booking-slider-item__address">
                                            <span class="booking-slider-item__address-icon">
                                                <img src="https://bato-web-agency.github.io/bato-shared/img/slider-2/icon-address.svg"
                                                    alt="Address" />
                                            </span>
                                            29 Terrace Rd, BH2 5EL
                                        </div> -->

                                        <div class="booking-slider-item__text">
                                            Enjoy the perfect blend of comfort and convenience in our twin room, with
                                            two comfortable beds and amenities to refresh and revitalise.
                                        </div>

                                        <div class="py-4">
                                            <img src="../assets/black-line.png" alt="black-line-vector" />
                                        </div>

                                        <div class="booking-slider-item__footer">
                                            <div class="booking-slider-item__footer-inner">
                                                <div class="booking-slider-item__amenities grid grid-cols-2">
                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/twin-bedroom.png" alt="twin-bedroom" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Twin Beds 150
                                                            Sq.ft</div>
                                                    </div>

                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/digitalsafe.png" alt="digitalsafe" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Digital Safe
                                                        </div>
                                                    </div>

                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/hotwater.png" alt="hotwater" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">24x7 hot water
                                                        </div>
                                                    </div>
                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/airconditioner.png"
                                                                alt="airconditioner" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Air conditioner
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="py-4">
                                                    <img src="../assets/black-line.png" alt="black-line-vector" />
                                                </div>
                                                <div class="flex  items-center justify-center">
                                                    <div>
                                                        <a class="booking-slider-item__btn" href="#calendar"
                                                            onclick="event.preventDefault(); document.querySelector('#calendar').scrollIntoView({ behavior: 'smooth' });">
                                                            <span class="booking-slider-item__btn-text">Book Now</span>
                                                            <span class="booking-slider-item__btn-icon"></span>
                                                        </a>
                                                    </div>
                                                    <!-- <div>
                                                        <p class="text-[#004875] font-bold text-xl">₹2,850/ Night</p>

                                                    </div> -->
                                                </div>

                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>

                            <!-- Slider: Slide 4 -->
                            <div class="booking-slider__slide swiper-slide">
                                <div class="booking-slider__item booking-slider-item">
                                    <!-- <div title="The most popular option" class="booking-slider-item__badge">
                                        Popular
                                    </div> -->

                                    <a title="Luxury Detached Home in Bournemouth" href="/"
                                        class="booking-slider-item__image" onclick="event.preventDefault();">
                                        <img src="../assets/ashok-nagar-room-2.jpeg" alt="Hotels in Ashok Nagar - Rohaan Hotels" />
                                    </a>

                                    <div class="booking-slider-item__content">
                                        <!-- <div class="booking-slider-item__price">
                                            £3,500<small>/month</small>
                                        </div> -->

                                        <h2 class="booking-slider-item__title">
                                            <a title="Hotels in Medavakkam" href="/" onclick="event.preventDefault();">
                                                Deluxe Twin Room With breakfast
                                            </a>
                                        </h2>

                                        <!-- <div title="Address" class="booking-slider-item__address">
                                            <span class="booking-slider-item__address-icon">
                                                <img src="https://bato-web-agency.github.io/bato-shared/img/slider-2/icon-address.svg"
                                                    alt="Address" />
                                            </span>
                                            29 Terrace Rd, BH2 5EL
                                        </div> -->

                                        <div class="booking-slider-item__text">
                                            Enjoy the perfect blend of comfort and convenience in our twin room, with
                                            two comfortable beds and amenities to refresh and revitalise.
                                        </div>

                                        <div class="py-4">
                                            <img src="../assets/black-line.png" alt="black-line-vector" />
                                        </div>

                                        <div class="booking-slider-item__footer">
                                            <div class="booking-slider-item__footer-inner">
                                                <div class="booking-slider-item__amenities grid grid-cols-2">
                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/twin-bedroom.png" alt="queensizebed" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Twin Beds 150
                                                            Sq.ft</div>
                                                    </div>

                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/digitalsafe.png" alt="digitalsafe" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Digital Safe
                                                        </div>
                                                    </div>

                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/hotwater.png" alt="hotwater" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">24x7 hot water
                                                        </div>
                                                    </div>
                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/airconditioner.png"
                                                                alt="airconditioner" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Air conditioner
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="py-4">
                                                    <img src="../assets/black-line.png" alt="black-line-vector" />
                                                </div>
                                                <div class="flex  items-center justify-center">
                                                    <div>
                                                        <a class="booking-slider-item__btn" href="#calendar"
                                                            onclick="event.preventDefault(); document.querySelector('#calendar').scrollIntoView({ behavior: 'smooth' });">
                                                            <span class="booking-slider-item__btn-text">Book Now</span>
                                                            <span class="booking-slider-item__btn-icon"></span>
                                                        </a>
                                                    </div>
                                                    <!-- <div>
                                                        <p class="text-[#004875] font-bold text-xl">₹3,000/ Night</p>

                                                    </div> -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Slider Pagination -->

                    <div class="booking-slider__pagination slider-pagination"></div>
                </div>
                <div class="max-w-6xl px-2 md:px-0  mx-auto text-center mt-8 mb-8 relative -z-10">
                    <p>For guests searching for budget hotels in Ashok Nagar, Rohaan offers premium amenities at
                        competitive rates. Clean rooms, attentive service, and access to popular city landmarks like
                        Ashok Pillar and Udayam Theatre make this hotel a reliable option for both leisure and corporate
                        stays.
                    </p>
                    <div
                        class="max-w-sm mx-auto flex flex-col md:flex-row space-y-5 md:space-y-0 items-center justify-between mt-8">

                        <button
                            class="bg-[#009CFF] text-white px-8 py-2 uppercase text-base font-semibold outline-none animated-button victoria-one">Read
                            more</button>
                        <!-- <a href="https://www.google.com/maps/place/Rohaan+Inns+by+UPAR+Hotels+Ashok+Nagar/@13.0361683,80.2124265,17z/data=!4m9!3m8!1s0x3a526724905210bd:0x69bb5095803bc911!5m2!4m1!1i2!8m2!3d13.0361683!4d80.2150014!16s%2Fg%2F11r7621m9s?entry=ttu&g_ep=EgoyMDI1MDgxMy4wIKXMDSoASAFQAw%3D%3D"
                            target="_blank">
                            <button
                                class="border border-[#009CFF] text-[#009CFF] px-8 py-2 uppercase text-base font-semibold outline-none">Get
                                directions
                            </button> 
                        </a> -->
                        <button onclick="openForm()"
                            class="project-brochure-button border border-[#009CFF] text-[#009CFF]  rounded-md font-medium w-[100px] md:w-[165px] text-[#004875]  text-sm md:text-base py-2 px-2 md:px-4 md:mt-5 focus:outline-none focus:ring-0 outline-none outline-0 outline-offset-0 animated-button victoria-two ">
                            BOOK NOW
                        </button>

                    </div>
                </div>

                <div class="px-8">
                    <img src="../assets/divider.png" alt="divider" class="mx-auto mt-8 mb-8" />
                </div>
            </div>
        </div>
    </section>

    <!--Perumbakkam location slider  -->
    <section class="max-w-7xl mx-auto pb-8">
        <div
            class="w-[350px] md:w-[1200px] mx-auto flex flex-col md:flex-row space-y-2 justify-center md:space-x-[100px] items-center mt-4 mobile-text-center">
            <div class="w-[200px] md:w-[400px] md:text-right relative -z-10">
                <span class=" hidden md:block "><img src="../assets/vector-line-3.png"
                        class="absolute right-[46%] top-[-26%] w-[30px] h-[30px]" alt="vectors"></span>
                <h3 class="text-xl md:text-3xl font-bold font-lora">Perumbakkam</h3>
                <p class="mobile-text-center md:text-right w-[150px] md:w-[300px] mx-auto">(Business Suite)</p>
                <span class=" hidden md:block "><img src="../assets/vector-right-lines.png"
                        class="absolute right-[-4%] top-[46%] w-[30px] h-[30px" alt="vectors"></span>
            </div>

            <div class="w-[300px] md:w-[600px] text-left">
                <p class="mobile-text-center md:text-left">Rohaan Hotels in Perumbakkam is a quiet and professionally
                    managed stay option located near key IT
                    parks, hospitals, and residential neighborhoods. If you're searching for a business class hotel in
                    Perumbakkam or a convenient stay near Sholinganallur or Medavakkam, this hotel offers the right mix
                    of affordability and quality.
                </p>
            </div>
        </div>
    </section>
    <section class="max-w-[1400px] mx-auto base-template">
        <div class="base-template__wrapper wrapper">
            <div class="base-template__content">
                <div class="booking-slider">
                    <!-- Slider Navigation -->
                    <div class="booking-slider__nav slider-nav">
                        <div title="Newest offers" tabindex="0" class="slider-nav__item slider-nav__item_prev">
                            <svg width="16" height="28" viewBox="0 0 16 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 26L2 14L14 2" stroke="white" stroke-width="4" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div title="Oldest offers" tabindex="0" class="slider-nav__item slider-nav__item_next">
                            <svg width="16" height="28" viewBox="0 0 16 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 26L14 14L2 2" stroke="white" stroke-width="4" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <!-- Slider Content -->

                    <div class="booking-slider__slider swiper">
                        <div class="booking-slider__wrapper swiper-wrapper">

                            <!-- Slider: Slide 1 -->

                            <div class="booking-slider__slide swiper-slide">
                                <div class="booking-slider__item booking-slider-item">
                                    <!-- <div title="The most popular option" class="booking-slider-item__badge">
                                        Popular
                                    </div> -->

                                    <a title="Luxury Detached Home in Bournemouth" href="/"
                                        class="booking-slider-item__image" onclick="event.preventDefault();">
                                        <img src="../assets/bedroom-rohaan.png" alt="Hotels in Medavakkam - Rohaan Hotels" />
                                    </a>

                                    <div class="booking-slider-item__content">
                                        <!-- <div class="booking-slider-item__price">
                                            £3,500<small>/month</small>
                                        </div> -->

                                        <h2 class="booking-slider-item__title">
                                            <a title="Hotels in Medavakkam" href="/" onclick="event.preventDefault();">
                                                Deluxe Double Room
                                            </a>
                                        </h2>

                                        <!-- <div title="Address" class="booking-slider-item__address">
                                            <span class="booking-slider-item__address-icon">
                                                <img src="https://bato-web-agency.github.io/bato-shared/img/slider-2/icon-address.svg"
                                                    alt="Address" />
                                            </span>
                                            29 Terrace Rd, BH2 5EL
                                        </div> -->

                                        <div class="booking-slider-item__text">
                                            Enjoy a refined stay in our Deluxe Double Room with air-conditioned rooms,
                                            featuring an array of amenities designed to ensure maximum comfort and ease
                                            throughout your visit.
                                        </div>

                                        <div class="py-4">
                                            <img src="../assets/black-line.png" alt="black-line-vector" />
                                        </div>

                                        <div class="booking-slider-item__footer">
                                            <div class="booking-slider-item__footer-inner">
                                                <div class="booking-slider-item__amenities grid grid-cols-2">
                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/queensizebed.png" alt="queensizebed" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Queen Size 170
                                                            Sq.ft</div>
                                                    </div>

                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/digitalsafe.png" alt="digitalsafe" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Digital Safe
                                                        </div>
                                                    </div>

                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/hotwater.png" alt="hotwater" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">24x7 hot water
                                                        </div>
                                                    </div>
                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/airconditioner.png"
                                                                alt="airconditioner" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Air conditioner
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="py-4">
                                                    <img src="../assets/black-line.png" alt="black-line-vector" />
                                                </div>
                                                <div class="flex  items-center justify-center">
                                                    <div>
                                                        <a class="booking-slider-item__btn" href="#calendar"
                                                            onclick="event.preventDefault(); document.querySelector('#calendar').scrollIntoView({ behavior: 'smooth' });">
                                                            <span class="booking-slider-item__btn-text">Book Now</span>
                                                            <span class="booking-slider-item__btn-icon"></span>
                                                        </a>
                                                    </div>
                                                    <!-- <div>
                                                        <p class="text-[#004875] font-bold text-xl">₹2,500 / Night</p>

                                                    </div> -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slider: Slide 2 -->

                            <div class="booking-slider__slide swiper-slide">
                                <div class="booking-slider__item booking-slider-item">
                                    <!-- <div title="The most popular option" class="booking-slider-item__badge">
                                        Popular
                                    </div> -->

                                    <a title="Luxury Detached Home in Bournemouth" href="/"
                                        class="booking-slider-item__image" onclick="event.preventDefault();">
                                        <img src="../assets/double-bedroom-with-breakfast.png"
                                            alt="Hotels in Medavakkam" />
                                    </a>

                                    <div class="booking-slider-item__content">
                                        <!-- <div class="booking-slider-item__price">
                                            £3,500<small>/month</small>
                                        </div> -->

                                        <h2 class="booking-slider-item__title">
                                            <a title="Hotels in Medavakkam" href="/" onclick="event.preventDefault();">
                                                Deluxe Double Room with breakfast
                                            </a>
                                        </h2>

                                        <!-- <div title="Address" class="booking-slider-item__address">
                                            <span class="booking-slider-item__address-icon">
                                                <img src="https://bato-web-agency.github.io/bato-shared/img/slider-2/icon-address.svg"
                                                    alt="Address" />
                                            </span>
                                            29 Terrace Rd, BH2 5EL
                                        </div> -->

                                        <div class="booking-slider-item__text">
                                            Start your day right in our Deluxe Double room with a delicious breakfast
                                            and an array of amenities thoughtfully designed for your perfect stay.
                                        </div>

                                        <div class="py-4">
                                            <img src="../assets/black-line.png" alt="black-line-vector" />
                                        </div>

                                        <div class="booking-slider-item__footer">
                                            <div class="booking-slider-item__footer-inner">
                                                <div class="booking-slider-item__amenities grid grid-cols-2">
                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/queensizebed.png" alt="queensizebed" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Queen Size 170
                                                            Sq.ft</div>
                                                    </div>

                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/digitalsafe.png" alt="digitalsafe" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Digital Safe
                                                        </div>
                                                    </div>

                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/hotwater.png" alt="hotwater" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">24x7 hot water
                                                        </div>
                                                    </div>
                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/airconditioner.png"
                                                                alt="airconditioner" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Air conditioner
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="py-4">
                                                    <img src="../assets/black-line.png" alt="black-line-vector" />
                                                </div>
                                                <div class="flex  items-center justify-center">
                                                    <div>
                                                        <a class="booking-slider-item__btn" href="#calendar"
                                                            onclick="event.preventDefault(); document.querySelector('#calendar').scrollIntoView({ behavior: 'smooth' });">
                                                            <span class="booking-slider-item__btn-text">Book Now</span>
                                                            <span class="booking-slider-item__btn-icon"></span>
                                                        </a>
                                                    </div>
                                                    <!-- <div>
                                                        <p class="text-[#004875] font-bold text-xl">₹2,700 / Night</p>

                                                    </div> -->
                                                </div>

                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>

                            <!-- Slider: Slide 3 -->

                            <div class="booking-slider__slide swiper-slide">
                                <div class="booking-slider__item booking-slider-item">
                                    <!-- <div title="The most popular option" class="booking-slider-item__badge">
                                        Popular
                                    </div> -->

                                    <a title="Luxury Detached Home in Bournemouth" href="/"
                                        class="booking-slider-item__image" onclick="event.preventDefault();">
                                        <img src="../assets/twin-room.png" alt="Hotels in Medavakkam" />
                                    </a>

                                    <div class="booking-slider-item__content">
                                        <!-- <div class="booking-slider-item__price">
                                            £3,500<small>/month</small>
                                        </div> -->

                                        <h2 class="booking-slider-item__title">
                                            <a title="Hotels in Medavakkam" href="/" onclick="event.preventDefault();">
                                                Deluxe Twin Room
                                            </a>
                                        </h2>

                                        <!-- <div title="Address" class="booking-slider-item__address">
                                            <span class="booking-slider-item__address-icon">
                                                <img src="https://bato-web-agency.github.io/bato-shared/img/slider-2/icon-address.svg"
                                                    alt="Address" />
                                            </span>
                                            29 Terrace Rd, BH2 5EL
                                        </div> -->

                                        <div class="booking-slider-item__text">
                                            Enjoy the perfect blend of comfort and convenience in our twin room, with
                                            two comfortable beds and amenities to refresh and revitalise.
                                        </div>

                                        <div class="py-4">
                                            <img src="../assets/black-line.png" alt="black-line-vector" />
                                        </div>

                                        <div class="booking-slider-item__footer">
                                            <div class="booking-slider-item__footer-inner">
                                                <div class="booking-slider-item__amenities grid grid-cols-2">
                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/twin-bedroom.png" alt="twin-bedroom" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Twin Beds 150
                                                            Sq.ft</div>
                                                    </div>

                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/digitalsafe.png" alt="digitalsafe" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Digital Safe
                                                        </div>
                                                    </div>

                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/hotwater.png" alt="hotwater" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">24x7 hot water
                                                        </div>
                                                    </div>
                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/airconditioner.png"
                                                                alt="airconditioner" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Air conditioner
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="py-4">
                                                    <img src="../assets/black-line.png" alt="black-line-vector" />
                                                </div>
                                                <div class="flex  items-center justify-center">
                                                    <div>
                                                        <a class="booking-slider-item__btn" href="#calendar"
                                                            onclick="event.preventDefault(); document.querySelector('#calendar').scrollIntoView({ behavior: 'smooth' });">
                                                            <span class="booking-slider-item__btn-text">Book Now</span>
                                                            <span class="booking-slider-item__btn-icon"></span>
                                                        </a>
                                                    </div>
                                                    <!-- <div>
                                                        <p class="text-[#004875] font-bold text-xl">₹2,850/ Night</p>

                                                    </div> -->
                                                </div>

                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>

                            <!-- Slider: Slide 4 -->
                            <div class="booking-slider__slide swiper-slide">
                                <div class="booking-slider__item booking-slider-item">
                                    <!-- <div title="The most popular option" class="booking-slider-item__badge">
                                        Popular
                                    </div> -->

                                    <a title="Luxury Detached Home in Bournemouth" href="/"
                                        class="booking-slider-item__image" onclick="event.preventDefault();">
                                        <img src="../assets/twin-bedroom-with-breakfast.png"
                                            alt="Hotels in Medavakkam" />
                                    </a>

                                    <div class="booking-slider-item__content">
                                        <!-- <div class="booking-slider-item__price">
                                            £3,500<small>/month</small>
                                        </div> -->

                                        <h2 class="booking-slider-item__title">
                                            <a title="Hotels in Medavakkam" href="/" onclick="event.preventDefault();">
                                                Deluxe Twin Room With breakfast
                                            </a>
                                        </h2>

                                        <!-- <div title="Address" class="booking-slider-item__address">
                                            <span class="booking-slider-item__address-icon">
                                                <img src="https://bato-web-agency.github.io/bato-shared/img/slider-2/icon-address.svg"
                                                    alt="Address" />
                                            </span>
                                            29 Terrace Rd, BH2 5EL
                                        </div> -->

                                        <div class="booking-slider-item__text">
                                            Enjoy the perfect blend of comfort and convenience in our twin room, with
                                            two comfortable beds and amenities to refresh and revitalise.
                                        </div>

                                        <div class="py-4">
                                            <img src="../assets/black-line.png" alt="black-line-vector" />
                                        </div>

                                        <div class="booking-slider-item__footer">
                                            <div class="booking-slider-item__footer-inner">
                                                <div class="booking-slider-item__amenities grid grid-cols-2">
                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/twin-bedroom.png" alt="queensizebed" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Twin Beds 150
                                                            Sq.ft</div>
                                                    </div>

                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/digitalsafe.png" alt="digitalsafe" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Digital Safe
                                                        </div>
                                                    </div>

                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/hotwater.png" alt="hotwater" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">24x7 hot water
                                                        </div>
                                                    </div>
                                                    <div class="booking-slider-item__amenity">
                                                        <div class="booking-slider-item__amenity-icon">
                                                            <img src="../assets/airconditioner.png"
                                                                alt="airconditioner" />
                                                        </div>
                                                        <div class="booking-slider-item__amenity-text">Air conditioner
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="py-4">
                                                    <img src="../assets/black-line.png" alt="black-line-vector" />
                                                </div>
                                                <div class="flex  items-center justify-center">
                                                    <div>
                                                        <a class="booking-slider-item__btn" href="#calendar"
                                                            onclick="event.preventDefault(); document.querySelector('#calendar').scrollIntoView({ behavior: 'smooth' });">
                                                            <span class="booking-slider-item__btn-text">Book Now</span>
                                                            <span class="booking-slider-item__btn-icon"></span>
                                                        </a>
                                                    </div>
                                                    <!-- <div>
                                                        <p class="text-[#004875] font-bold text-xl">₹3,000/ Night</p>

                                                    </div> -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Slider Pagination -->

                    <div class="booking-slider__pagination slider-pagination"></div>
                </div>
                <div class="max-w-6xl px-2 md:px-0  mx-auto text-center mt-8 mb-8">
                    <p>Rohaan Hotels is frequently chosen by guests looking for budget hotels in Perumbakkam, especially
                        those visiting Global Hospital, Elcot SEZ, or OMR. With well appointed rooms, excellent service,
                        and a calm atmosphere, it’s one of the most dependable budget hotels in Chennai for both
                        business and personal travel.</p>
                    <div
                        class="max-w-sm mx-auto flex flex-col md:flex-row space-y-5 md:space-y-0 items-center justify-between mt-8 relative -z-10">
                        <button
                            class="bg-[#009CFF] text-white px-8 py-2 uppercase text-base font-semibold outline-none animated-button victoria-one">Read
                            more
                        </button>


                        <a href="https://maps.app.goo.gl/V1Ub8nzsAEkmiBXj7"
                            target="_blank">
                            <button
                                class="border border-[#009CFF] text-[#009CFF] px-8 py-2 uppercase text-base font-semibold outline-none">Get
                                directions
                            </button>
                        </a>


                        <!-- <a href="https://www.google.com/maps/place/Rohaan+Hotels+Medavakkam+by+UPAR/@12.9093978,80.1942302,17z/data=!4m9!3m8!1s0x3a525dddafbf6983:0x313f72403e08ee91!5m2!4m1!1i2!8m2!3d12.9093978!4d80.1968051!16s%2Fg%2F11wfy1hclj?hl=en&entry=ttu&g_ep=EgoyMDI1MDgxMy4wIKXMDSoASAFQAw%3D%3D"
                            target="_blank">
                            <button
                                class="border border-[#009CFF] text-[#009CFF] px-8 py-2 uppercase text-base font-semibold outline-none focus-none">Get
                                directions</button> </a> -->

                    </div>
                </div>

                <div class="px-8">
                    <img src="../assets/divider.png" alt="divider" class="mx-auto mt-4 mb-4" />
                </div>
            </div>
        </div>
    </section>



    <!-- why choose us section  -->
    <section class="w-full max-w-[1600px] bg-[url('../assets/why-choose-bg.png')] bg-cover bg-center mx-auto p-8">
        <h3 class="font-lora text-xl md:text-3xl text-center text-[#004875]">Why Choose Rohaan Hotels for Business Class
            Hotels in
            Chennai?</h3>
        <div
            class="flex justify-center max-w-5xl mx-auto mt-8 flex-col space-y-4 md:space-y-0 md:flex-row items-center">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 max-w-4xl mx-auto">
                <div
                    class="bg-[#E3E3E3] bg-[url('../assets/bg1.png')]   w-80 p-4 rounded-md flex flex-col p-6 items-center md:items-start">
                    <img src="../assets/setting.png" class="w-8 h-8 mb-2" alt="icon">
                    <p class="mobile-text-center md:text-start">Elegant, spacious rooms in every business class hotel in
                        Chennai</p>
                </div>
                <div
                    class="bg-[#E3E3E3] bg-[url('../assets/bg2.png')]  w-80 p-4 rounded-md flex flex-col p-6 items-center md:items-start">
                    <img src="../assets/hand-icon.png" class="w-8 h-8 mb-2" alt="icon">
                    <p class="mobile-text-center md:text-start">Trusted name among budget hotels in Ashok Nagar and
                        Medavakkam</p>
                </div>
                <div
                    class="bg-[#E3E3E3] bg-[url('../assets/bg3.png')]  w-80 p-4 rounded-md flex flex-col p-6 items-center md:items-start">
                    <img src="../assets/time-icon.png" class="w-8 h-8 mb-2" alt="icon">
                    <p class="mobile-text-center md:text-start">24/7 front desk, concierge, and support services</p>
                </div>
                <div
                    class="bg-[#E3E3E3] bg-[url('../assets/bg4.png')]  w-80 p-4 rounded-md flex flex-col p-6 items-center md:items-start">
                    <img src="../assets/map.png" class="w-8 h-8 mb-2" alt="icon">
                    <p class="mobile-text-center md:text-start">Easy access to restaurants, malls, and city transport
                    </p>
                </div>
            </div>
            <div
                class="bg-[#E3E3E3] bg-[url('../assets/bg5.png')] w-80 p-4 rounded-md flex flex-col p-6  h-[165px] md:h-[280px] md:mt-0 items-center md:items-start">
                <img src="../assets/badge.png" class="w-8 h-8 mb-2" alt="icon">
                <p class="mobile-text-center md:text-start">Excellent locations near IT corridors like OMR,
                    Sholinganallur & Perumbakkam</p>
            </div>
        </div>
        <p class="text-center text-base mt-8 italic">“Whether you're a business traveler or a tourist, Rohaan Hotels is
            your go-to option for both business class and budget hotels in Chennai.”</p>
    </section>

    <!-- Amenities  -->
    <section class="max-w-[1550px] mx-auto mb-8 pt-8 relative -z-10 bg-[url(../assets/medavakkam-bg-1.png)] bg-cover">
        <!-- <img src="../assets/medavakkam-bg-1.png" class="absolute top-0 right-0 w-[500px] h-[600px] object-contain" alt="medavakkam-bg-1">v   -->
        <div class="flex items-center justify-center max-w-sm md:max-w-2xl mx-auto ">
            <span><img src="../assets/line1.png" alt="line-vector"></span>
            <h2 class="px-4 font-lora text-2xl  md:text-3xl text-center text-[#004875]">Amenities</h2>
            <span><img src="../assets/Line2.png" alt="line-vector"></span>
        </div>
        <h4 class="text-center text-xl mt-5">General Amenities</h4>
        <div class="grid grid-cols-1 md:grid-cols-3 max-w-sm   md:max-w-6xl gap-4 mt-8  mx-auto">
            <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
                <div class="border border-[#009CFF] max-w-72 p-2">
                    <img src="../assets/receptionist.png" class="w-[300px]" alt="24-hour reception & concierge">
                </div>
                <div class="bg-[#009CFF] text-white px-2 py-2 w-[200px] absolute bottom-0 animated-button victoria-one">
                    <button class="border border-[white] p-2 text-sm"> 24-hour reception & concierge</button>
                </div>
            </div>
            <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
                <div class="border border-[#009CFF] max-w-72 p-2">
                    <img src="../assets/wifi.png" class="w-[300px]" alt="Free Wi-Fi throughout the property">
                </div>
                <div
                    class="bg-[#009CFF] text-white px-2 py-2  w-[200px] absolute bottom-0 animated-button victoria-one">
                    <button class="border border-[white] p-2 text-sm "> Free Wi-Fi throughout the property</button>
                </div>
            </div>
            <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
                <div class="border border-[#009CFF] max-w-72 p-2">
                    <img src="../assets/parking.png" class="w-[300px]" alt="Public parking">
                </div>
                <div
                    class="bg-[#009CFF] text-white px-2 py-2  w-[200px] absolute bottom-0 animated-button victoria-one">
                    <button class="border border-[white] p-3 text-sm text-center w-[185px]"> Public
                        parking</button>
                </div>
            </div>
        </div>
        <div class="grid  grid-cols-1 md:grid-cols-2 gap-4 mt-8 max-w-sm md:max-w-3xl mx-auto">
            <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
                <div class="border border-[#009CFF] max-w-72 p-2">
                    <img src="../assets/ac-rooms.png" class="w-[300px]" alt="Air-conditioned rooms & public areas">
                </div>
                <div class="bg-[#009CFF] text-white px-2 py-2 w-[200px] absolute bottom-0 animated-button victoria-one">
                    <button class="border border-[white] p-2 text-sm"> Air-conditioned rooms & public areas</button>
                </div>
            </div>
            <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
                <div class="border border-[#009CFF] max-w-72 p-2">
                    <img src="../assets/luggage.png" class="w-[300px]" alt="Hassle-free luggage support">
                </div>
                <div
                    class="bg-[#009CFF] text-white px-2 py-2  w-[200px] absolute bottom-0 animated-button victoria-one">
                    <button class="border border-[white] p-2 text-sm"> Hassle-free luggage support</button>
                </div>
            </div>

        </div>
    </section>

    <!-- Room Comforts -->
    <section class="max-w-[1550px] mx-auto mb-8 mt-8 relative -z-10 md:bg-[url(../assets/roomcomforts-bg.png)] bg-cover">
        <h4 class="text-center text-2xl mt-5">Room Comforts</h4>
        <div class="grid grid-cols-1 md:grid-cols-3 max-w-sm   md:max-w-6xl gap-4 mt-8  mx-auto">
            <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
                <div class="border border-[#009CFF] max-w-72 p-2">
                    <img src="../assets/tv.png" class="w-[300px]" alt="Flat-screen TV with satellite channels">
                </div>
                <div class="bg-[#009CFF] text-white px-2 py-2 w-[200px] absolute bottom-0 animated-button victoria-one">
                    <button class="border border-[white] p-2 text-sm"> Flat-screen TV with satellite channels</button>
                </div>
            </div>
            <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
                <div class="border border-[#009CFF] max-w-72 p-2">
                    <img src="../assets/complementery.png" class="w-[300px]" alt="Complimentary toiletries">
                </div>
                <div
                    class="bg-[#009CFF] text-white px-2 py-2  w-[200px] absolute bottom-0 animated-button victoria-one">
                    <button class="border border-[white] px-2 py-1  w-[200px]text-sm"> Complimentary toiletries</button>
                </div>
            </div>
            <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
                <div class="border border-[#009CFF] max-w-72 p-2">
                    <img src="../assets/facilitieshotel.png" class="w-[300px]"
                        alt="Geyser, hairdryer, and ironing facilities">
                </div>
                <div
                    class="bg-[#009CFF] text-white px-2 py-2  w-[200px] absolute bottom-0 animated-button victoria-one">
                    <button class="border border-[white] p-2 text-sm text-center w-[185px] "> Geyser, hairdryer, and
                        ironing facilities</button>
                </div>
            </div>
        </div>
        <div class="grid  grid-cols-1 md:grid-cols-2 gap-4 mt-8 max-w-sm md:max-w-3xl mx-auto">
            <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
                <div class="border border-[#009CFF] max-w-72 p-2">
                    <img src="../assets/wakeupservice.png" class="w-[300px]" alt="Wake-up call service">
                </div>
                <div class="bg-[#009CFF] text-white px-2 py-2 w-[200px] absolute bottom-0 animated-button victoria-one">
                    <button class="border border-[white] p-3 text-sm text-center w-[185px]"> Wake-up call
                        service</button>
                </div>
            </div>
            <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
                <div class="border border-[#009CFF] max-w-72 p-2">
                    <img src="../assets/soundproof.png" class="w-[300px]" alt="Soundproof windows">
                </div>
                <div
                    class="bg-[#009CFF] text-white px-2 py-2  w-[200px] absolute bottom-0 animated-button victoria-one">
                    <button class="border border-[white] p-3 text-sm text-center w-[185px]">Soundproof windows</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Safety & Security-->
    <section class="max-w-[1550px] mx-auto mb-8 mt-8 relative -z-10 bg-[url(../assets/safety-security-bg.png)] bg-cover">
        <h4 class="text-center text-2xl mt-5">Safety & Security</h4>
        <div class="grid grid-cols-1 md:grid-cols-3 max-w-sm   md:max-w-6xl gap-4 mt-8  mx-auto">
            <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
                <div class="border border-[#009CFF] max-w-72 p-2">
                    <img src="../assets/cctv.png" class="w-[300px]" alt="24/7 CCTV surveillance">
                </div>
                <div class="bg-[#009CFF] text-white px-2 py-2 w-[200px] absolute bottom-0 animated-button victoria-one">
                    <button class="border border-[white] p-3 text-sm text-center w-[185px]">24/7 CCTV
                        surveillance</button>
                </div>
            </div>
            <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
                <div class="border border-[#009CFF] max-w-72 p-2">
                    <img src="../assets/smoke.png" class="w-[300px]" alt="Smoke detectors & fire extinguishers">
                </div>
                <div
                    class="bg-[#009CFF] text-white px-2 py-2  w-[200px] absolute bottom-0 animated-button victoria-one">
                    <button class="border border-[white] px-2 py-1  w-[200px]text-sm"> Smoke detectors & fire
                        extinguishers</button>
                </div>
            </div>
            <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
                <div class="border border-[#009CFF] max-w-72 p-2">
                    <img src="../assets/first-aid.png" class="w-[300px]" alt="First-aid services on call">
                </div>
                <div
                    class="bg-[#009CFF] text-white px-2 py-2  w-[200px] absolute bottom-0 animated-button victoria-one">
                    <button class="border border-[white] p-3 text-sm text-center w-[185px]">First-aid services on
                        call</button>
                </div>
            </div>
        </div>
    </section>

    <!-- gallery section  -->
    <section id="rooms" class="bg-[#F8F8F8] bg-[url('../assets/gallery-bg.png')] relative -z-10  w-full  mx-auto mt-8">
        <div class="container w-[350px] md:w-[1200px] mx-auto py-8">
            <h3 class="font-lora text-2xl text-[#004875]">Gallery</h3>
            <div class="row space-y-4 md:space-y-0">
                <a href="../assets/bedroom-view.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                    <img src="../assets/bedroom-view.png" class="img-fluid rounded w-[300px] mx-auto md:w-[353px]  h-[236px] object-cover">
                </a>
                <a href="../assets/bedroom-view-2.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                    <img src="../assets/bedroom-view-2.png" class="img-fluid rounded w-[300px] mx-auto md:w-[353px] h-[236px] object-cover">
                </a>
                <a href="../assets/restroom.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                    <img src="../assets/restroom.png" class="img-fluid rounded w-[300px] mx-auto md:w-[353px] h-[236px] object-cover">
                </a>
            </div>
            <div class="row space-y-4 md:space-y-0">
                <a href="../assets/lift-view.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                    <img src="../assets/lift-view.png" class="img-fluid rounded w-[300px] mx-auto md:w-[353px] h-[236px] object-cover">
                </a>
                <a href="../assets/rohaan-ashok-nagar.jpeg" data-toggle="lightbox" data-gallery="gallery"
                    class="col-md-4">
                    <img src="../assets/rohaan-ashok-nagar.jpeg" class="img-fluid rounded w-[300px] mx-auto md:w-[353px] h-[236px] object-cover">
                </a>
                <a href="../assets/ashok-nagar-room1.jpeg" data-toggle="lightbox" data-gallery="gallery"
                    class="col-md-4">
                    <img src="../assets/ashok-nagar-room1.jpeg" class="img-fluid rounded w-[300px] mx-auto md:w-[353px] h-[236px] object-cover">
                </a>
            </div>
        </div>
    </section>



    <!-- Contact us starts -->
    <section
        class="contact-us grid grid-cols-1 md:grid-cols-2 gap-[50px] md:gap-[100px] relative  max-w-xl md:max-w-6xl mx-auto  py-8 md:mx-8 md:my-8"
        id="contactus">
        <div class="contact-us-form title  p-4  md:p-8 rounded-2xl" id="contactform">

            <h4 class="text-white text-2xl font-bold">Contact Us</h4>
            <?php
            if (isset($_GET['msg']) && $_GET['msg'] == 'success') {
                echo '<p class="success-msg">Thank you for contacting us! We will get back to you soon.</p>';
            } elseif (isset($_GET['msg']) && $_GET['msg'] == 'failed') {
                echo '<p class="error-msg">There was an error submitting your form. Please try again.</p>';
            }
            ?>
            <form method="post" action="action.php" class="flex flex-col gap-2 mt-0">
                <input type="hidden" name="source" value="index">
                <!-- Name -->
                <div class="flex flex-col form__group field">
                    <input type="text" class="form__field" placeholder="Enter Your Name" name="name" id="nameform2"
                        required />
                    <label for="name" class="form__label">Name</label>
                </div>

                <!-- Email -->
                <div class="flex flex-col form__group field">
                    <input type="email" class="form__field" placeholder="Enter Your Email" name="email" id="emailform2"
                        required />
                    <label for="email" class="form__label">Email</label>
                </div>

                <!-- Phone Number -->
                <div class="flex flex-col form__group field">
                    <input type="tel" class="form__field" placeholder="Enter Your Phone Number" name="phone"
                        id="phoneform2" required />
                    <label for="phone" class="form__label">Phone Number</label>
                </div>

                <!-- Location (Dropdown) -->
                <div class="flex flex-col form__group field">
                    <select class="form__field" name="location" id="locationform2" required>
                        <option value="" disabled selected hidden class="text-black text-[12px]">Select Your Location
                        </option>
                        <option value="Medavakkam" class="text-blue-500 text-base">Medavakkam</option>
                        <option value="Rohaan Elite Stay (Medavakkam)" class="text-blue-500 text-base">Rohaan Elite Stay <br>(Medavakkam)</option>
                        <option value="Ashok Nagar" class="text-blue-500 text-base">Ashok Nagar</option>
                    </select>
                </div>

                <input type="submit" value="Submit "
                    class="contact-submit bg-white text-black font-semibold mt-3 px-4 py-2 rounded hover:bg-gray-200 transition-all" />
            </form>
        </div>


        <div class="content mx-auto ">
            <!-- Content title -->
            <div class="flex justify-center md:justify-start  items-center">
                <img src="../assets/location-icon.png" class="w-[20px] h-[20px] mt-[6px] md:mt-0" alt="map-icon">
                <h2 class="content__title text-2xl text-left underline"> Location</h2>
            </div>

            <!-- Content inner -->
            <div class="content__inner shadow-none">
                <!-- Tabs -->
                <div class="tabs">

                    <!-- temporary map -->
                    <div class="tabs__panel-card">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3888.9687907084726!2d80.19447656308647!3d12.909727425805537!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525d3bbb7241d3%3A0xf0aab49f8cdeb982!2sBusiness%20Class%20Hotels%20in%20Medavakkam%20%7C%20Perumbakkam%20%7C%20Ashok%20Nagar%20%7C%20Rohaan%20Hotels!5e0!3m2!1sen!2sin!4v1756710501173!5m2!1sen!2sin" width="600" height="450" style="border:0;"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- teamporary map ends -->

                    <!-- Tabs panels -->
                    <div class="tabs__panels">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact us ends -->



    <!-- banner section  -->
    <section class="max-w-[1550px] mx-auto">
        <img class="w-[350px] md:w-[1550px] mx-auto" src="../assets/hotel-banner.jpg" alt="rohaan hotels">
    </section>


    <?php include("inc/footer.php") ?>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#testimonial-slider").owlCarousel({
                items: 4,
                itemsDesktop: [1000, 3],
                itemsDesktopSmall: [980, 2],
                itemsTablet: [768, 2],
                itemsMobile: [650, 1],
                pagination: false, // ❌ Hide dots
                navigation: true, // ✅ Show arrows
                navigationText: ["‹", "›"], // Left & Right symbols
                slideSpeed: 1000,
                autoPlay: true,
                stopOnHover: true,
                loop: true // 🔄 Enable looping
            });
        });
    </script>
</body>

</html>