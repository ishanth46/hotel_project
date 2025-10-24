<!-- header section  -->
<?php
$metaData = [
    "title" => "Rohaan Elite Stays in Medavakkam & Perumbakkam",
    "description" => "Stay at Rohaan Elite Stays in Medavakkam & Perumbakkam, Chennai with modern amenities, comfort, and professional hospitality."
];

include("inc/header.php")
?>



<style>
    .content-roll {
        animation: roll 10s infinite linear;
        width: 135px;
        height: 135px;
        object-fit: cover;
    }

    .accomdation-content-roll {
        position: absolute;
        top: 0;
        right: 0;
        overflow: hidden;
    }

    @keyframes roll {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(-360deg);
        }
    }

    .booking-slider-item__btn {
        background: #AA8453;
    }

    .booking-slider-item__btn:hover {
        background: #42250d;
    }

    .contact-us-form {
        background: linear-gradient(to right, #735030, #a67a49);
    }

    .contact-submit {
        background: #AA8453;
    }

    @media screen and (max-width: 574.9px) {
        .content__inner {
            width: 360px;
            height: 240px;
        }
    }
</style>
<!-- hero section  -->
<section
    class="max-w-[1600px] mx-auto bg-[url(assets/mobile-elite-stay.png)] h-[305px] md:h-[512px] md:bg-[url(assets/elite-banner-new.png)]  bg-cover bg-center px-8 md:px-12 py-[5px] md:py-[120px] ">
    <div class="max-w-3xl text-left text-white  md:pl-8 flex flex-col pt-8 md:pt-0">
        <h2 class="font-medium uppercase mb-4 font-lora text-xl md:text-[40px] leading-[1.5] md:leading-[1.3]">
            Rohaan Elite Stays in Medavakkam & Perumbakkam

        </h2>
        <button onclick="openForm()"
            class="project-brochure-button bg-[#5e5e5e]  rounded-md font-medium w-[100px] md:w-[165px] text-[#004875]  text-sm md:text-base py-2 px-2 md:px-4 md:mt-5 focus:outline-none focus:ring-0 outline-none outline-0 outline-offset-0 animated-button victoria-three  ">
            BOOK NOW
        </button>
    </div>
</section>

<!-- Popup Form -->
<div id="popupForm" class="form-popup">
    <form class="form-container" method="post" action="action.php">
        <button type="button" class="btn cancel" onclick="closeForm()"><span class="close-x">X</span></button>
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

<!-- about -->
<div class="max-w-[1600px] mx-auto flex flex-col lg:flex-row items-center justify-center">
    <!-- Left: Hotel Room Image -->
    <div class="w-full lg:w-1/2 bg-[#f7f7f7] p-8 lg:p-16">
        <!-- <h4 class="text-sm uppercase tracking-widest text-gray-500 mb-2">Hoteler Facility</h4> -->
        <h1 class="mobile-text-center text-xl md:text-3xl text-[#735030] mb-6 leading-tight font-lora">
            Rohaan Elite Stays in Medavakkam
        </h1>
        <p class="mobile-text-center text-gray-600 mb-6">
            Welcome to Rohaan Elite Stays, a trusted name in premium accommodations in Chennai. Designed for corporate travelers, executives, and discerning leisure guests, Rohaan Elite Stays offers modern amenities, comfortable rooms, and a professional environment. Strategically located in Perumbakkam and Medavakkam, Rohaan Elite Stays combines convenience, accessibility, and exceptional hospitality, making it a preferred choice among 3 star hotels in Chennai.
        </p>
        <!-- Read More Button -->
        <!-- <button class="bg-[#0D76B8] text-white px-6 py-3 rounded hover:bg-blue-700 transition">
            READ MORE
        </button> -->
    </div>

    <!-- Right: Promotional Text -->


    <div class="w-[400px] h-[330px] md:w-[500px] md:h-[430px]">
        <img src="assets\elite-1.JPG" alt="Hotel Room - Rohaan Elite Stay"
            class="w-full h-full object-center-right object-cover" />
    </div>
</div>

<!-- Elite stay suites -->
<section id="locations" class="max-w-8xl mx-auto p-8 mt-0 md:mt-[80px] md:mt-0">
    <div class="flex items-center justify-center ">
        <span><img class="w-[130px]" src="assets/Line 150.png" alt="line-vector"></span>
        <h2 class="px-4 font-lora text-xl  md:text-3xl text-center text-[#42250d]">Available Suites</h2>
        <span><img class="w-[130px]" src="assets\Line 151.png" alt="line-vector"></span>
    </div>
</section>

<!-- Deluxe Double Room  -->
<section
    class="w-[400px] md:w-[1200px] mx-auto flex flex-col md:flex-row justify-between items-center border-[1px] border-[#b89146]">
    <div class="w-[400px] md:w-[400px] h-[340px] bg-[url(assets/elite-bedrrom-large-view.JPG)] bg-cover bg-center">
    </div>
    <div class="w-[350px] md:w-[750px] mx-auto py-4 md:py-0 pr-0 md:pr-8">
        <div>
            <h3 class="text-[#735030] text-base  md:text-xl font-bold font-lora leading-[1.5] py-2 uppercase">Deluxe Double Room
            </h3>
            <p>Enjoy a refined stay in our Deluxe Double Room with air-conditioned rooms, featuring an array of
                amenities
                designed to ensure maximum comfort and ease throughout your visit.</p>
        </div>

        <div class="mb-[9px] mt-[20px] ">
            <img src="../assets/black-line-long.png" alt="black-line-vector" />
        </div>
        <div class="max-w-[720px] booking-slider-item__amenities flex items-center justify-evenly pt-[8px]">
            <div class="booking-slider-item__amenity flex flex-col">
                <div class="booking-slider-item__amenity-icon">
                    <img src="../assets/queensizebed.png" alt="queensizebed" />
                </div>
                <div class="booking-slider-item__amenity-text">Queen Size 170
                    Sq.ft</div>
            </div>

            <div class="booking-slider-item__amenity flex flex-col">
                <div class="booking-slider-item__amenity-icon">
                    <img src="../assets/digitalsafe.png" alt="digitalsafe" />
                </div>
                <div class="booking-slider-item__amenity-text">Digital Safe
                </div>
            </div>

            <div class="booking-slider-item__amenity flex flex-col">
                <div class="booking-slider-item__amenity-icon">
                    <img src="../assets/hotwater.png" alt="hotwater" />
                </div>
                <div class="booking-slider-item__amenity-text">24x7 hot water
                </div>
            </div>
            <div class="booking-slider-item__amenity flex flex-col">
                <div class="booking-slider-item__amenity-icon">
                    <img src="../assets/airconditioner.png" alt="airconditioner" />
                </div>
                <div class="booking-slider-item__amenity-text">Air conditioner
                </div>
            </div>
        </div>


        <div class="mb-[9px] mt-[20px]">
            <img src="../assets/black-line-long.png" alt="black-line-vector" />
        </div>
        <div class="flex  items-center justify-between">
            <!-- <div>
                <p class="text-[#004875] font-bold font-lora text-xl">₹2,500 / Night</p>
            </div> -->
            <div>
                <a class="booking-slider-item__btn" href="#calendar"
                    onclick="event.preventDefault(); document.querySelector('#calendar').scrollIntoView({ behavior: 'smooth' });">
                    <span class="booking-slider-item__btn-text ">Book Now</span>
                    <span class="booking-slider-item__btn-icon"></span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Deluxe Double Room with breakfast -->
<section
    class="w-[400px] md:w-[1200px] mt-8 mx-auto flex flex-col md:flex-row items-center border-[1px] border-[#b89146]">
    <div class="w-[400px] md:w-[400px] h-[340px] bg-[url(assets/elite-breakfast.JPG)] bg-cover bg-center">
    </div>
    <div class="w-[350px] md:w-[750px] mx-auto py-4 md:py-0 pr-0 md:pr-8">
        <div>
            <h3 class="text-[#735030] text-base  md:text-xl font-bold font-lora leading-[1.5] py-2 uppercase">Deluxe Double Room
                with breakfast </h3>
            <p>Start your day right in our Deluxe Double room with a delicious breakfast and an array of amenities
                thoughtfully designed for your perfect stay.</p>
        </div>

        <div class="mb-[9px] mt-[20px]">
            <img src="../assets/black-line-long.png" alt="black-line-vector" />
        </div>
        <div class="max-w-[720px] booking-slider-item__amenities flex items-center justify-evenly pt-[8px]">
            <div class="booking-slider-item__amenity flex flex-col">
                <div class="booking-slider-item__amenity-icon">
                    <img src="../assets/queensizebed.png" alt="queensizebed" />
                </div>
                <div class="booking-slider-item__amenity-text">Queen Size 170
                    Sq.ft</div>
            </div>

            <div class="booking-slider-item__amenity flex flex-col">
                <div class="booking-slider-item__amenity-icon">
                    <img src="../assets/digitalsafe.png" alt="digitalsafe" />
                </div>
                <div class="booking-slider-item__amenity-text">Digital Safe
                </div>
            </div>

            <div class="booking-slider-item__amenity flex flex-col">
                <div class="booking-slider-item__amenity-icon">
                    <img src="../assets/hotwater.png" alt="hotwater" />
                </div>
                <div class="booking-slider-item__amenity-text">24x7 hot water
                </div>
            </div>
            <div class="booking-slider-item__amenity flex flex-col">
                <div class="booking-slider-item__amenity-icon">
                    <img src="../assets/airconditioner.png" alt="airconditioner" />
                </div>
                <div class="booking-slider-item__amenity-text">Air conditioner
                </div>
            </div>
        </div>
        <div class="mb-[9px] mt-[20px]">
            <img src="../assets/black-line-long.png" alt="black-line-vector" />
        </div>
        <div class="flex  items-center justify-between">
            <!-- <div>
                <p class="text-[#004875] font-lora font-bold text-xl">₹2,700 / Night</p>
            </div> -->
            <div>
                <a class="booking-slider-item__btn" href="#calendar"
                    onclick="event.preventDefault(); document.querySelector('#calendar').scrollIntoView({ behavior: 'smooth' });">
                    <span class="booking-slider-item__btn-text">Book Now</span>
                    <span class="booking-slider-item__btn-icon"></span>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- Deluxe Twin Room  -->
<section
    class="w-[400px] md:w-[1200px] mt-8 mx-auto flex flex-col md:flex-row items-center border-[1px] border-[#b89146]">
    <div class="w-[400px] md:w-[400px] h-[340px] bg-[url(assets/elite-bedroom.JPG)] bg-cover bg-center">
    </div>
    <div class="w-[350px] md:w-[750px] py-4 md:py-0 pr-0 md:pr-8 mx-auto">
        <div>
            <h3 class="text-[#735030] text-base  md:text-xl font-bold font-lora leading-[1.5] py-2 uppercase">Deluxe Twin Room
            </h3>
            <p>Enjoy the perfect blend of comfort and convenience in our twin room, with two comfortable beds and
                amenities to refresh and revitalise.</p>
        </div>

        <div class="mb-[9px] mt-[20px]">
            <img src="../assets/black-line-long.png" alt="black-line-vector" />
        </div>
        <div class="max-w-[720px] booking-slider-item__amenities flex items-center justify-evenly">
            <div class="booking-slider-item__amenity flex flex-col ">
                <div class="booking-slider-item__amenity-icon">
                    <img src="../assets/twin-bedroom.png" alt="twin-bedroom" />
                </div>
                <div class="booking-slider-item__amenity-text">Twin Beds 150 Sq.ft</div>
            </div>

            <div class="booking-slider-item__amenity flex flex-col">
                <div class="booking-slider-item__amenity-icon">
                    <img src="../assets/digitalsafe.png" alt="digitalsafe" />
                </div>
                <div class="booking-slider-item__amenity-text">Digital Safe
                </div>
            </div>

            <div class="booking-slider-item__amenity flex flex-col">
                <div class="booking-slider-item__amenity-icon">
                    <img src="../assets/hotwater.png" alt="hotwater" />
                </div>
                <div class="booking-slider-item__amenity-text">24x7 hot water
                </div>
            </div>
            <div class="booking-slider-item__amenity flex flex-col">
                <div class="booking-slider-item__amenity-icon">
                    <img src="../assets/airconditioner.png" alt="airconditioner" />
                </div>
                <div class="booking-slider-item__amenity-text">Air conditioner
                </div>
            </div>
        </div>
        <div class="mb-[9px] mt-[20px]">
            <img src="../assets/black-line-long.png" alt="black-line-vector" />
        </div>
        <div class="flex  items-center justify-between">
            <!-- <div>
                <p class="text-[#004875] font-lora font-bold text-xl">₹2,850 / Night</p>
            </div> -->
            <div>
                <a class="booking-slider-item__btn" href="#calendar"
                    onclick="event.preventDefault(); document.querySelector('#calendar').scrollIntoView({ behavior: 'smooth' });">
                    <span class="booking-slider-item__btn-text">Book Now</span>
                    <span class="booking-slider-item__btn-icon"></span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Deluxe Twin Room With breakfast   -->
<section
    class="w-[400px] md:w-[1200px] mt-8 mx-auto flex flex-col md:flex-row justify-between items-center border-[1px] border-[#b89146]">
    <div
        class="w-[400px] md:w-[400px] h-[340px] bg-[url(assets/elite-1.JPG)] bg-cover bg-center">
    </div>
    <div class="w-[350px] md:w-[750px] py-4 md:py-0 pr-0 md:pr-8 mx-auto">
        <div>
            <h3 class="text-[#735030] text-base  md:text-xl font-bold font-lora leading-[1.5] py-2 uppercase">Deluxe Twin Room
                With breakfast
            </h3>
            <p>Enjoy the perfect blend of comfort and convenience in our twin room, with two comfortable beds and
                amenities to refresh and revitalise.</p>
        </div>

        <div class="mb-[9px] mt-[20px]">
            <img src="../assets/black-line-long.png" alt="black-line-vector" />
        </div>
        <div class="max-w-[720px] booking-slider-item__amenities flex items-center justify-evenly">
            <div class="booking-slider-item__amenity flex flex-col">
                <div class="booking-slider-item__amenity-icon">
                    <img src="../assets/twin-bedroom.png" alt="twin-bedroom" />
                </div>
                <div class="booking-slider-item__amenity-text">Twin Beds 150 Sq.ft</div>
            </div>

            <div class="booking-slider-item__amenity flex flex-col">
                <div class="booking-slider-item__amenity-icon">
                    <img src="../assets/digitalsafe.png" alt="digitalsafe" />
                </div>
                <div class="booking-slider-item__amenity-text">Digital Safe
                </div>
            </div>

            <div class="booking-slider-item__amenity flex flex-col">
                <div class="booking-slider-item__amenity-icon">
                    <img src="../assets/hotwater.png" alt="hotwater" />
                </div>
                <div class="booking-slider-item__amenity-text">24x7 hot water
                </div>
            </div>
            <div class="booking-slider-item__amenity flex flex-col">
                <div class="booking-slider-item__amenity-icon">
                    <img src="../assets/airconditioner.png" alt="airconditioner" />
                </div>
                <div class="booking-slider-item__amenity-text">Air conditioner
                </div>
            </div>
        </div>
        <div class="mb-[9px] mt-[20px]">
            <img src="../assets/black-line-long.png" alt="black-line-vector" />
        </div>
        <div class="flex  items-center justify-between">
            <!-- <div>
                <p class="text-[#004875] font-lora font-bold text-xl">₹3,000 / Night</p>
            </div> -->

            <div>
                <a class="booking-slider-item__btn" href="#calendar"
                    onclick="event.preventDefault(); document.querySelector('#calendar').scrollIntoView({ behavior: 'smooth' });">
                    <span class="booking-slider-item__btn-text">Book Now</span>
                    <span class="booking-slider-item__btn-icon"></span>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- why should stay  -->
<section class="w-[400px] md:w-[1480px] mx-auto mt-8 flex flex-col md:flex-row justify-between h-auto md:h-[600px] py-[50px] md:py-[80px] bg-[#f7f7f7] px-[20px] md:px-[50px] relative -z-10">
    <div class="w-[300px] h-[500px] md:w-[300px] h-[350px] pt-[100px] relative">
        <img class="w-[300px] h-[250px] ml-[30px] md:ml-0 md:w-[300px] h-[350px] object-cover" src="assets\elite-hall.JPG" alt="rohaan elite stay">
        <div class="accomdation-content-roll">
            <img class="content-roll" src="assets\content-circle.png" alt="content-circle">
        </div>
    </div>
    <div class="w-[350px] md:w-[550px]">
        <h3 class="mobile-text-center text-xl md:text-3xl text-[#b89146] mb-6 leading-tight font-lora">
            Who Should Stay at Rohaan Elite Stays
        </h3>
        <p class="mobile-text-center"><b>Rohaan Elite Stays</b> caters to a variety of guests:</p>
        <ul class="mt-8 gap-6">
            <li class="mb-3 md:mb-2">
                <!-- <div class="w-[50px] h-[50px] border border-[#B89146] rounded-lg"><img class="w-[30px] h-[30px]" src="assets\chevron-right.png" alt="right-icon"></div> -->
                <p class="mobile-text-center"><span class="pr-[10px]"><i class="fa-solid fa-angles-right fa-xs" style="color: #b99132;"></i></span><b>Corporate Travelers & Executives:</b> Professionals visiting IT parks, offices, <br>
                    and business districts in Perumbakkam, Medavakkam, and nearby areas</p>
            </li>
            <li class="mb-3 md:mb-2">
                <!-- <div class="w-[50px] h-[50px] border border-[#B89146] rounded-lg"><img class="w-[30px] h-[30px]" src="assets\chevron-right.png" alt="right-icon"></div> -->
                <p class="mobile-text-center"><span class="pr-[10px]"><i class="fa-solid fa-angles-right fa-xs" style="color: #b99132;"></i></span><b>Business Meeting Attendees:</b> Guests attending conferences, client meetings,<br> or corporate events at Rohaan Elite Stays</p>
            </li>
            <li class="mb-3 md:mb-2">
                <!-- <div class="w-[50px] h-[50px] border border-[#B89146] rounded-lg"><img class="w-[30px] h-[30px]" src="assets\chevron-right.png" alt="right-icon"></div> -->
                <p class="mobile-text-center"><span class="pr-[10px]"><i class="fa-solid fa-angles-right fa-xs" style="color: #b99132;"></i></span><b>Leisure Travelers:</b> Families or solo visitors exploring South Chennai who<br> value comfort and convenience</p>
            </li>
            <li class="mb-3 md:mb-2">
                <!-- <div class="w-[50px] h-[50px] border border-[#B89146] rounded-lg"><img class="w-[30px] h-[30px]" src="assets\chevron-right.png" alt="right-icon"></div> -->
                <p class="mobile-text-center"><span class="pr-[10px]"><i class="fa-solid fa-angles-right fa-xs" style="color: #b99132;"></i></span><b>Long Stay Guests:</b> Modern amenities and tranquil surroundings make Rohaan Elite<br> Stays perfect for extended stays</p>
            </li>
            <li class="mb-3 md:mb-2">
                <!-- <div class="w-[50px] h-[50px] border border-[#B89146] rounded-lg"><img class="w-[30px] h-[30px]" src="assets\chevron-right.png" alt="right-icon"></div> -->
                <p class="mobile-text-center"><span class="pr-[10px]"><i class="fa-solid fa-angles-right fa-xs" style="color: #b99132;"></i></span><b>Out of Town Visitors: </b> connectivity to Chennai International Airport and city<br> attractions ensures a hassle free stay at Rohaan Elite Stays</p>
            </li>
        </ul>
    </div>
    <div class="w-[415px] hidden md:block">
        <img class="w-[416px] h-[350px] object-cover" src="assets\elite-bedroom.JPG" alt="">
    </div>
</section>

<!-- Hotel Facilities -->
<section class="max-w-7xl mx-auto px-6 py-8 md:py-16 grid mt-8 grid-cols-1 lg:grid-cols-2 gap-12 items-start">

    <!-- Left: Heading and Button -->
    <div class="space-y-4">
        <h4 class="mobile-text-center text-sm uppercase tracking-widest text-gray-500 ">Hotel Facilities</h4>
        <h2 class="mobile-text-center text-xl md:text-3xl  text-[#b89146]  leading-tight font-lora">
            Our Location Highlights – Nearby Places in Medavakkam
        </h2>
        <p class="mobile-text-center text-gray-600">
            Rohaan Elite Stays is situated in vibrant business and residential hubs, offering seamless access to IT parks, corporate offices, commercial centers, and cultural attractions.
        </p>
        <p class="mobile-text-center text-gray-600">
            Guests enjoy a productive and comfortable stay, whether traveling for business or leisure.</p>
        <p class="mobile-text-center text-gray-600">
            These strategic locations make Rohaan Elite Stays the ideal choice for professionals seeking business hotels in South Chennai.</p>

        <!-- <button class="bg-orange-700 text-white px-6 py-3 rounded hover:bg-orange-800 transition">
            ROOM & SUITES
        </button> -->
    </div>

    <div id="accordion" class="space-y-8 relative -z-10">
        <!-- Item 1 -->
        <div class="group relative flex items-start space-x-4 border-b pb-6 cursor-pointer item active">
            <div
                class="number text-3xl tracking-widest font-lora font-semibold text-black transition-colors duration-300">
                01
            </div>
            <div>
                <h3 class="mobile-text-center heading text-lg font-semibold text-[#87542a] transition-colors duration-300">
                    Close proximity to major IT corridors,<br> OMR, and Sholinganallur business districts
                </h3>
            </div>
            <img src="assets\IT-park.jpeg" alt="IT corridors"
                class="hidden md:block hover-image absolute right-[-30px] top-[-20px] mt-2 w-48 rounded shadow-lg opacity-100 transform translate-y-0 z-10 transition-opacity duration-300" />
        </div>

        <!-- Item 2 -->
        <div class="group relative flex items-start space-x-4 border-b pb-6 cursor-pointer item">
            <div
                class="number text-3xl tracking-widest font-lora font-semibold text-gray-300 transition-colors duration-300">
                02
            </div>
            <div>
                <h3 class="mobile-text-center heading text-lg font-semibold text-black transition-colors duration-300">
                    Only 12 km from Chennai<br> International Airport
                </h3>
            </div>
            <img src="assets\chennai-airport.jpg" alt="chennai-airport"
                class="hidden md:block hover-image absolute right-[0px] top-[-20px] mt-2 w-48 rounded shadow-lg opacity-0 transform -translate-y-2 z-10 transition-opacity duration-300" />
        </div>

        <!-- Item 3 -->
        <div class="group relative flex items-start space-x-4 cursor-pointer item">
            <div
                class="number text-3xl tracking-widest font-lora font-semibold text-gray-300 transition-colors duration-300">
                03
            </div>
            <div>
                <h3 class="mobile-text-center heading text-lg font-semibold text-black transition-colors duration-300">
                    Easy access to dining, shopping,<br> and entertainment options
                </h3>
            </div>
            <img src="assets/restaurant.jpeg" alt="Achievement"
                class="hidden md:block hover-image absolute right-[-20px] top-[-20px] mt-2 w-48 rounded shadow-lg opacity-0 transform -translate-y-2 z-10 transition-opacity duration-300" />
        </div>

        <!-- Item 4 -->
        <div class="group relative flex items-start space-x-4 cursor-pointer item">
            <div
                class="number text-3xl tracking-widest font-lora font-semibold text-gray-300 transition-colors duration-300">
                04
            </div>
            <div>
                <h3 class="mobile-text-center heading text-lg font-semibold text-black transition-colors duration-300">
                    Peaceful surroundings ideal for <br> work, meetings, or relaxation
                </h3>
            </div>
            <img src="assets\co-working-space.jpeg" alt="co-working-space"
                class="hidden md:block hover-image absolute right-[-20px] top-[-20px] mt-2 w-48 rounded shadow-lg opacity-0 transform -translate-y-2 z-10 transition-opacity duration-300" />
        </div>
    </div>
</section>

<!-- modern amenities  -->
<section class="w-[400px] md:w-[1400px] mx-auto relative -z-10 flex flex-col md:flex-row  items-center justify-between mt-[40px] mb-[40px] md:mt-[80px] md:mb-[80px]">
    <div class="relative">
        <div class="flex flex-col md:flex-row">
            <div class="w-[250px] h-[150px] bg-[#AA8453] absolute top-[-20px] left-[-20px] z-[-1]"></div>
            <div><img class="w-[300px] h-[290px] object-cover" src="assets\elite-double-bed.JPG" alt="rohaan-elite-stay"></div>
            <!-- <div class="w-[250px] h-[150px] bg-[#AA8453] absolute bottom-[-20px] left-[200px] z-[-1]"></div>
            <div class="mt-[60px] ml-[-30px]  z-1"><img class="w-[250px] h-[290px] object-cover " src="assets\elite-hall.JPG" alt="rohaan-elite-stay"></div> -->
            <div class="w-[280px] h-[150px] bg-[#AA8453] absolute top-[160px] left-[380px] z-[-1] hidden md:block"></div>
            <div class="ml-[60px] hidden md:block"><img class="w-[280px] h-[290px] object-cover" src="assets\elite-bedroom.JPG" alt="rohaan-elite-stay"></div>
        </div>
    </div>
    <div class="w-[350px] md:w-[650px] pt-5 md:pt-0">
        <h3 class="mobile-text-center text-xl md:text-3xl text-[#b89146] mb-6 leading-tight font-lora">Modern Amenities for a Comfortable Stay</h3>
        <p class="mobile-text-center">Every room at Rohaan Elite Stays in Perumbakkam and Medavakkam is designed for comfort, productivity, and convenience:</p>
        <ul class="mt-8 gap-6 w-[300px] md:w-auto  mx-auto">
            <li class="mb-3 md:mb-2">

                <p> <span class="pr-[10px]"><i class="fa-solid fa-circle-chevron-right" style="color: #b89146;"></i></span>Air conditioned rooms with city views</p>
            </li>
            <li class="mb-3 md:mb-2">

                <p><span class="pr-[10px]"><i class="fa-solid fa-circle-chevron-right" style="color: #b89146;"></i></span>Private bathrooms with modern fittings and complimentary toiletries</p>
            </li>
            <li class="mb-3 md:mb-2">

                <p><span class="pr-[10px]"><i class="fa-solid fa-circle-chevron-right" style="color: #b89146;"></i></span>Flat screen TVs, wardrobes, and electric kettles</p>
            </li>
            <li class="mb-3 md:mb-2">

                <p><span class="pr-[10px]"><i class="fa-solid fa-circle-chevron-right" style="color: #b89146;"></i></span>Free high speed Wi-Fi for business or personal use</p>
            </li>
            <li class="mb-3 md:mb-2">

                <p><span class="pr-[10px]"><i class="fa-solid fa-circle-chevron-right" style="color: #b89146;"></i></span>Secure parking and 24/7 multilingual reception</p>
            </li>
        </ul>
        <p class="mobile-text-center mt-8">Whether visiting for business, corporate meetings, or leisure, Rohaan Elite Stays ensures a professional and seamless experience.</p>
    </div>
</section>

<!-- why choose us section  -->
<section class="w-full max-w-[1600px] bg-cover bg-center mx-auto p-8">
    <h3 class="font-lora text-xl md:text-3xl text-center text-[#b89146]">Why Choose Rohaan Elite Stays</h3>

    <div class="flex justify-center max-w-5xl mx-auto mt-8 flex-col space-y-4 md:space-y-0 md:flex-row items-center">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <div
                class="bg-[#E3E3E3] bg-[url('../assets/bg1.png')]   w-80 p-4 rounded-md flex flex-col p-6 items-center md:items-start">
                <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path fill="#2d2d2e" d="M64 80C64 71.2 71.2 64 80 64L560 64C568.8 64 576 71.2 576 80C576 88.8 568.8 96 560 96L544 96L544 544L560 544C568.8 544 576 551.2 576 560C576 568.8 568.8 576 560 576L80 576C71.2 576 64 568.8 64 560C64 551.2 71.2 544 80 544L96 544L96 96L80 96C71.2 96 64 88.8 64 80zM128 96L128 544L256 544L256 464L248 464C234.7 464 223.7 453.1 227 440.2C237.6 398.7 275.2 368 320 368C364.8 368 402.5 398.7 413 440.2C416.3 453 405.2 464 392 464L384 464L384 544L512 544L512 96L128 96zM288 464L288 544L352 544L352 464L288 464zM320 400C296.3 400 275.6 412.9 264.6 432L375.5 432C364.4 412.9 343.7 400 320.1 400zM296 184C296 175.2 303.2 168 312 168L328 168C336.8 168 344 175.2 344 184L344 200C344 208.8 336.8 216 328 216L312 216C303.2 216 296 208.8 296 200L296 184zM312 264L328 264C336.8 264 344 271.2 344 280L344 296C344 304.8 336.8 312 328 312L312 312C303.2 312 296 304.8 296 296L296 280C296 271.2 303.2 264 312 264zM200 184C200 175.2 207.2 168 216 168L232 168C240.8 168 248 175.2 248 184L248 200C248 208.8 240.8 216 232 216L216 216C207.2 216 200 208.8 200 200L200 184zM216 264L232 264C240.8 264 248 271.2 248 280L248 296C248 304.8 240.8 312 232 312L216 312C207.2 312 200 304.8 200 296L200 280C200 271.2 207.2 264 216 264zM392 184C392 175.2 399.2 168 408 168L424 168C432.8 168 440 175.2 440 184L440 200C440 208.8 432.8 216 424 216L408 216C399.2 216 392 208.8 392 200L392 184zM408 264L424 264C432.8 264 440 271.2 440 280L440 296C440 304.8 432.8 312 424 312L408 312C399.2 312 392 304.8 392 296L392 280C392 271.2 399.2 264 408 264z" />
                </svg>
                <p class="mobile-text-center md:text-start">Strategically located business class hotels in Perumbakkam and Medavakkam</p>
            </div>
            <div
                class="bg-[#E3E3E3] bg-[url('../assets/bg2.png')]  w-80 p-4 rounded-md flex flex-col p-6 items-center md:items-start">
                <img src="../assets/junction.png" class="w-8 h-8 mb-2" alt="icon">
                <p class="mobile-text-center md:text-start">Modern, fully equipped rooms for corporate and leisure travelers at Rohaan Elite Stays</p>
            </div>
            <div
                class="bg-[#E3E3E3] bg-[url('../assets/bg3.png')]  w-80 p-4 rounded-md flex flex-col p-6 items-center md:items-start">
                <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path fill="#2b2b2b" d="M160 128C142.3 128 128 142.3 128 160L128 480C128 497.7 142.3 512 160 512L480 512C497.7 512 512 497.7 512 480L512 160C512 142.3 497.7 128 480 128L160 128zM96 160C96 124.7 124.7 96 160 96L480 96C515.3 96 544 124.7 544 160L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 160zM256 352L336 352C371.3 352 400 323.3 400 288C400 252.7 371.3 224 336 224L256 224L256 352zM336 384L256 384L256 432C256 440.8 248.8 448 240 448C231.2 448 224 440.8 224 432L224 216C224 202.7 234.7 192 248 192L336 192C389 192 432 235 432 288C432 341 389 384 336 384z" />
                </svg>
                <p class="mobile-text-center md:text-start">Free parking, round the clock reception, and professional guest support</p>
            </div>
            <div
                class="bg-[#E3E3E3] bg-[url('../assets/bg4.png')]  w-80 p-4 rounded-md flex flex-col p-6 items-center md:items-start">
                <img src="../assets/map.png" class="w-8 h-8 mb-2" alt="icon">
                <p class="mobile-text-center md:text-start">Easy access to IT corridors, airports, and major city attractions
                </p>
            </div>
            <div
                class="bg-[#E3E3E3] bg-[url('../assets/bg4.png')]  w-80 p-4 rounded-md flex flex-col p-6 items-center md:items-start">
                <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path fill="#252627" d="M320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576zM320 96C196.3 96 96 196.3 96 320C96 443.7 196.3 544 320 544C443.7 544 544 443.7 544 320C544 196.3 443.7 96 320 96zM403.1 230.6C408.3 223.5 418.3 221.9 425.4 227.1C432.5 232.3 434.1 242.3 428.9 249.4L300.9 425.4C298.1 429.2 293.9 431.6 289.2 431.9C284.5 432.2 279.9 430.6 276.6 427.3L212.6 363.3C206.4 357.1 206.4 346.9 212.6 340.7C218.8 334.5 229 334.5 235.2 340.7L285.9 391.4L402.9 230.6z" />
                </svg>
                <p class="mobile-text-center md:text-start">Trusted for delivering reliable, comfortable, and professional stays in Chennai
                </p>
            </div>
        </div>
    </div>

</section>

<!-- Amenities  -->
<section class="max-w-[1550px] mx-auto mb-8 pt-8 relative -z-10 bg-[url(../assets/medavakkam-bg-1.png)] bg-cover">
    <!-- <img src="../assets/medavakkam-bg-1.png" class="absolute top-0 right-0 w-[500px] h-[600px] object-contain" alt="medavakkam-bg-1">v   -->
    <div class="flex items-center justify-center max-w-sm md:max-w-2xl mx-auto ">
        <span><img class="w-[130px]" src="assets/Line 150.png" alt="line-vector"></span>
        <h2 class="px-4 font-lora text-2xl  md:text-3xl text-center text-[#004875]">Amenities</h2>
        <span><img class="w-[130px]" src="assets/Line 151.png" alt="line-vector"></span>
    </div>
    <h4 class="text-center text-xl mt-5">General Amenities</h4>
    <div class="grid grid-cols-1 md:grid-cols-3 max-w-sm   md:max-w-6xl gap-4 mt-8  mx-auto">
        <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
            <div class="border border-[#009CFF] max-w-72 p-2">
                <img src="../assets/receptionist.png" class="w-[300px]" alt="24-hour reception & concierge">
            </div>
            <div class="bg-[#AA8453] text-white px-2 py-2 w-[200px] absolute bottom-0 ">
                <button class="border border-[white] p-2 text-sm"> 24-hour reception & concierge</button>
            </div>
        </div>
        <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
            <div class="border border-[#009CFF] max-w-72 p-2">
                <img src="../assets/wifi.png" class="w-[300px]" alt="Free Wi-Fi throughout the property">
            </div>
            <div class="bg-[#AA8453] text-white px-2 py-2  w-[200px] absolute bottom-0 ">
                <button class="border border-[white] p-2 text-sm "> Free Wi-Fi throughout the property</button>
            </div>
        </div>
        <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
            <div class="border border-[#009CFF] max-w-72 p-2">
                <img src="../assets/parking.png" class="w-[300px]" alt="Public parking">
            </div>
            <div class="bg-[#AA8453] text-white px-2 py-2  w-[200px] absolute bottom-0 ">
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
            <div class="bg-[#AA8453] text-white px-2 py-2 w-[200px] absolute bottom-0 ">
                <button class="border border-[white] p-2 text-sm"> Air-conditioned rooms & public areas</button>
            </div>
        </div>
        <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
            <div class="border border-[#009CFF] max-w-72 p-2">
                <img src="../assets/luggage.png" class="w-[300px]" alt="Hassle-free luggage support">
            </div>
            <div class="bg-[#AA8453] text-white px-2 py-2  w-[200px] absolute bottom-0 ">
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
            <div class="bg-[#AA8453] text-white px-2 py-2 w-[200px] absolute bottom-0 ">
                <button class="border border-[white] p-2 text-sm"> Flat-screen TV with satellite channels</button>
            </div>
        </div>
        <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
            <div class="border border-[#009CFF] max-w-72 p-2">
                <img src="../assets/complementery.png" class="w-[300px]" alt="Complimentary toiletries">
            </div>
            <div class="bg-[#AA8453] text-white px-2 py-2  w-[200px] absolute bottom-0">
                <button class="border border-[white] px-2 py-1  w-[200px]text-sm"> Complimentary toiletries</button>
            </div>
        </div>
        <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
            <div class="border border-[#009CFF] max-w-72 p-2">
                <img src="../assets/facilitieshotel.png" class="w-[300px]"
                    alt="Geyser, hairdryer, and ironing facilities">
            </div>
            <div class="bg-[#AA8453] text-white px-2 py-2  w-[200px] absolute bottom-0 ">
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
            <div class="bg-[#AA8453] text-white px-2 py-2 w-[200px] absolute bottom-0 ">
                <button class="border border-[white] p-3 text-sm text-center w-[185px]"> Wake-up call
                    service</button>
            </div>
        </div>
        <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
            <div class="border border-[#009CFF] max-w-72 p-2">
                <img src="../assets/soundproof.png" class="w-[300px]" alt="Soundproof windows">
            </div>
            <div class="bg-[#AA8453] text-white px-2 py-2  w-[200px] absolute bottom-0 ">
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
            <div class="bg-[#AA8453] text-white px-2 py-2 w-[200px] absolute bottom-0 ">
                <button class="border border-[white] p-3 text-sm text-center w-[185px]">24/7 CCTV
                    surveillance</button>
            </div>
        </div>
        <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
            <div class="border border-[#009CFF] max-w-72 p-2">
                <img src="../assets/smoke.png" class="w-[300px]" alt="Smoke detectors & fire extinguishers">
            </div>
            <div class="bg-[#AA8453] text-white px-2 py-2  w-[200px] absolute bottom-0 ">
                <button class="border border-[white] px-2 py-1  w-[200px]text-sm"> Smoke detectors & fire
                    extinguishers</button>
            </div>
        </div>
        <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
            <div class="border border-[#009CFF] max-w-72 p-2">
                <img src="../assets/first-aid.png" class="w-[300px]" alt="First-aid services on call">
            </div>
            <div class="bg-[#AA8453] text-white px-2 py-2  w-[200px] absolute bottom-0 ">
                <button class="border border-[white] p-3 text-sm text-center w-[185px]">First-aid services on
                    call</button>
            </div>
        </div>
    </div>
</section>

<!-- gallery section  -->
<section id="rooms" class=" bg-[url('../assets/gallery-bg.png')] relative -z-10  w-full  mx-auto mt-8">
    <div class="container max-w-xl md:max-w-6xl mx-auto py-8">
        <h3 class="mobile-text-center font-lora text-2xl text-[#87542a]">Gallery</h3>
        <div class="row space-y-4 md:space-y-0 mx-auto">
            <a href="assets\elite-1.JPG" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="assets\elite-1.JPG" class="img-fluid rounded w-[353px] h-[236px] object-cover">
            </a>
            <a href="assets\elite-double-bed.JPG" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="assets\elite-double-bed.JPG" class="img-fluid rounded w-[353px] h-[236px] object-cover">
            </a>
            <a href="assets\elite-hall-new.JPG" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="assets\elite-hall-new.JPG" class="img-fluid rounded w-[353px] h-[236px] object-cover">
            </a>
        </div>
        <div class="row space-y-4 md:space-y-0 mx-auto">
            <a href="assets\reception.JPG" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="assets\reception.JPG" class="img-fluid rounded w-[353px] h-[236px] object-cover">
            </a>
            <a href="assets\portugue.JPG" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="assets\portugue.JPG" class="img-fluid rounded w-[353px] h-[236px] object-cover">
            </a>
            <a href="assets\restroom.JPG" data-toggle="lightbox" data-gallery="gallery"
                class="col-md-4">
                <img src="assets\restroom.JPG"
                    class="img-fluid rounded w-[353px] h-[236px] object-cover">
            </a>
        </div>
    </div>
</section>

<!-- section 6 -->
<section class="max-w-[1600px] mx-auto px-6 py-16 bg-[#F7F3EE] flex flex-col items-center text-center space-y-8">
    <div>
        <img src="assets\brown-quote.png" alt="right-quote">
    </div>
    <div>
        <h3 class="text-2xl font-lora font-bold mb-4">Book Your Stay at Rohaan Elite Stays</h3>
        <p class="max-w-[1000px] mx-auto">Experience unmatched comfort, convenience, and professionalism at Rohaan Elite Stays. Our hotels in Perumbakkam and Medavakkam provide a premium business class hotel experience in Chennai, ideal for corporate travelers, leisure guests, and long stay visitors seeking quality, reliability, and exceptional hospitality.</p>
    </div>
</section>

<!-- Contact us starts -->
<section
    class="contact-us grid grid-cols-1 md:grid-cols-2 gap-[50px] md:gap-[100px] max-w-xl md:max-w-6xl mx-auto relative py-8 md:mx-8 md:my-8"
    id="contactus">
    <div class="contact-us-form title  p-4  md:p-8 rounded-2xl" id="contactform">
        <!-- <div class="contact-us-form title  bg-gradient-to-r from-cyan-700 to-cyan-400  p-8 rounded-2xl" id="contactform"> -->

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
                <input type="tel" class="form__field" placeholder="Enter Your Phone Number" name="phone" id="phoneform2"
                    required />
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
        <div class="content__inner shadow-none mt-4">
            <div class="relative">
                <img src="assets\elite-double-bed.JPG" alt="Rohaan Hotels">
                <div class="w-[250px] h-[150px] hidden md:block md:w-[250px] bg-[#AA8453] absolute top-[-20px] left-[270px] z-[-1]"></div>
                <div class="w-[250px] h-[150px] md:w-[250px] bg-[#AA8453] absolute bottom-[-20px] left-[-20px] z-[-1]"></div>
            </div>
        </div>
    </div>

</section>
<!-- Contact us ends -->


<!-- footer section  -->
<?php include("inc/footer.php") ?>

<!-- JavaScript -->
<script>
    const items = document.querySelectorAll('#accordion .item');

    items.forEach(item => {
        item.addEventListener('click', () => {
            items.forEach(i => {
                i.classList.remove('active');
                i.querySelector('.number').classList.remove('text-black');
                i.querySelector('.number').classList.add('text-gray-300');
                i.querySelector('.heading').classList.remove('text-blue-600');
                i.querySelector('.heading').classList.add('text-black');
                const img = i.querySelector('.hover-image');
                if (img) {
                    img.classList.add('opacity-0', '-translate-y-2');
                    img.classList.remove('opacity-100', 'translate-y-0');
                }
            });

            item.classList.add('active');
            item.querySelector('.number').classList.remove('text-gray-300');
            item.querySelector('.number').classList.add('text-black');
            item.querySelector('.heading').classList.remove('text-black');
            item.querySelector('.heading').classList.add('text-[#87542a]');
            const img = item.querySelector('.hover-image');
            if (img) {
                img.classList.remove('opacity-0', '-translate-y-2');
                img.classList.add('opacity-100', 'translate-y-0');
            }
        });
    });
</script>