<!-- header section  -->
<?php
$metaData = [
    "title" => "Hotels in Ashok Nagar | Budget & Business Class Stay in Chennai",
    "description" => "Rohaan Hotels in Ashok Nagar, Chennai offers budget and Business Class stays — combining convenience, quality, and affordability."
];

include("inc/header.php")

?>


<!-- hero section  -->
<section
    class="max-w-[1600px] mx-auto bg-[url(../assets/ashoka-mobile-banner.png)] h-[305px] md:h-[512px] md:bg-[url(../assets/ashok-nagar-desktop-banner.png)]  bg-cover bg-center px-8 md:px-12 py-[5px] md:py-[120px] ">
    <div class="max-w-3xl text-left text-white  md:pl-8 flex flex-col pt-8 md:pt-0">
        <h1 class="font-medium uppercase mb-4 font-lora text-xl md:text-[40px] leading-[1.5] md:leading-[1.3]">
            Hotels in Ashok Nagar | Business Class Hotel in Chennai

        </h1>
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

<!-- section 2 -->
<div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
    <!-- Left Section: Image + Text -->
    <div class="space-y-6">
        <img src="assets\ashok-nagar-room-3.jpeg" alt="Rohaan Hotels" class="w-full rounded-lg shadow-md" />

        <p class="mobile-text-center text-md text-gray-600 leading-6">
            For guests looking for affordable hotel rooms in Ashok Nagar without compromising on essential services,
            Rohaan Hotel is a top rated option.
            Designed to support the diverse needs of both working professionals and personal travellers, Rohaan blends
            the key features of a business class hotel in Ashok Nagar with the practicality of a budget friendly hotel.
            Whether you're here for meetings, medical appointments, or leisure travel, Rohaan is your smart and
            affordable base in the city.
        </p>
        <ul class="list-inside space-y-2 text-gray-700 w-[200px] mx-auto md:w-[500px] md:mx-0">
            <li class="flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" class="bi bi-briefcase"
                    viewBox="0 0 16 16">
                    <path
                        d="M15.8531 8.63909L13.8086 8.05484C12.8879 7.79527 12.0492 7.30377 11.3728 6.62736C10.6964 5.95095 10.2049 5.11228 9.94536 4.19159L9.36111 2.14709C9.33172 2.07556 9.28174 2.01438 9.2175 1.97132C9.15327 1.92826 9.07769 1.90527 9.00036 1.90527C8.92303 1.90527 8.84744 1.92826 8.78321 1.97132C8.71897 2.01438 8.66899 2.07556 8.63961 2.14709L8.05536 4.19159C7.79579 5.11228 7.30429 5.95095 6.62788 6.62736C5.95147 7.30377 5.1128 7.79527 4.19211 8.05484L2.14761 8.63909C2.0691 8.66137 2.00001 8.70865 1.95082 8.77375C1.90162 8.83886 1.875 8.91823 1.875 8.99984C1.875 9.08144 1.90162 9.16082 1.95082 9.22592C2.00001 9.29103 2.0691 9.3383 2.14761 9.36059L4.19211 9.94484C5.1128 10.2044 5.95147 10.6959 6.62788 11.3723C7.30429 12.0487 7.79579 12.8874 8.05536 13.8081L8.63961 15.8526C8.66189 15.9311 8.70917 16.0002 8.77427 16.0494C8.83938 16.0986 8.91875 16.1252 9.00036 16.1252C9.08196 16.1252 9.16133 16.0986 9.22644 16.0494C9.29154 16.0002 9.33882 15.9311 9.36111 15.8526L9.94536 13.8081C10.2049 12.8874 10.6964 12.0487 11.3728 11.3723C12.0492 10.6959 12.8879 10.2044 13.8086 9.94484L15.8531 9.36059C15.9316 9.3383 16.0007 9.29103 16.0499 9.22592C16.0991 9.16082 16.1257 9.08144 16.1257 8.99984C16.1257 8.91823 16.0991 8.83886 16.0499 8.77375C16.0007 8.70865 15.9316 8.66137 15.8531 8.63909Z"
                        fill="#0D76B8" />
                </svg>
                Budget Business Comfort
            </li>
            <li class="flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" class="bi bi-briefcase"
                    viewBox="0 0 16 16">
                    <path
                        d="M15.8531 8.63909L13.8086 8.05484C12.8879 7.79527 12.0492 7.30377 11.3728 6.62736C10.6964 5.95095 10.2049 5.11228 9.94536 4.19159L9.36111 2.14709C9.33172 2.07556 9.28174 2.01438 9.2175 1.97132C9.15327 1.92826 9.07769 1.90527 9.00036 1.90527C8.92303 1.90527 8.84744 1.92826 8.78321 1.97132C8.71897 2.01438 8.66899 2.07556 8.63961 2.14709L8.05536 4.19159C7.79579 5.11228 7.30429 5.95095 6.62788 6.62736C5.95147 7.30377 5.1128 7.79527 4.19211 8.05484L2.14761 8.63909C2.0691 8.66137 2.00001 8.70865 1.95082 8.77375C1.90162 8.83886 1.875 8.91823 1.875 8.99984C1.875 9.08144 1.90162 9.16082 1.95082 9.22592C2.00001 9.29103 2.0691 9.3383 2.14761 9.36059L4.19211 9.94484C5.1128 10.2044 5.95147 10.6959 6.62788 11.3723C7.30429 12.0487 7.79579 12.8874 8.05536 13.8081L8.63961 15.8526C8.66189 15.9311 8.70917 16.0002 8.77427 16.0494C8.83938 16.0986 8.91875 16.1252 9.00036 16.1252C9.08196 16.1252 9.16133 16.0986 9.22644 16.0494C9.29154 16.0002 9.33882 15.9311 9.36111 15.8526L9.94536 13.8081C10.2049 12.8874 10.6964 12.0487 11.3728 11.3723C12.0492 10.6959 12.8879 10.2044 13.8086 9.94484L15.8531 9.36059C15.9316 9.3383 16.0007 9.29103 16.0499 9.22592C16.0991 9.16082 16.1257 9.08144 16.1257 8.99984C16.1257 8.91823 16.0991 8.83886 16.0499 8.77375C16.0007 8.70865 15.9316 8.66137 15.8531 8.63909Z"
                        fill="#0D76B8" />
                </svg>Prime Metro Access
            </li>
            <li class="flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" class="bi bi-briefcase"
                    viewBox="0 0 16 16">
                    <path
                        d="M15.8531 8.63909L13.8086 8.05484C12.8879 7.79527 12.0492 7.30377 11.3728 6.62736C10.6964 5.95095 10.2049 5.11228 9.94536 4.19159L9.36111 2.14709C9.33172 2.07556 9.28174 2.01438 9.2175 1.97132C9.15327 1.92826 9.07769 1.90527 9.00036 1.90527C8.92303 1.90527 8.84744 1.92826 8.78321 1.97132C8.71897 2.01438 8.66899 2.07556 8.63961 2.14709L8.05536 4.19159C7.79579 5.11228 7.30429 5.95095 6.62788 6.62736C5.95147 7.30377 5.1128 7.79527 4.19211 8.05484L2.14761 8.63909C2.0691 8.66137 2.00001 8.70865 1.95082 8.77375C1.90162 8.83886 1.875 8.91823 1.875 8.99984C1.875 9.08144 1.90162 9.16082 1.95082 9.22592C2.00001 9.29103 2.0691 9.3383 2.14761 9.36059L4.19211 9.94484C5.1128 10.2044 5.95147 10.6959 6.62788 11.3723C7.30429 12.0487 7.79579 12.8874 8.05536 13.8081L8.63961 15.8526C8.66189 15.9311 8.70917 16.0002 8.77427 16.0494C8.83938 16.0986 8.91875 16.1252 9.00036 16.1252C9.08196 16.1252 9.16133 16.0986 9.22644 16.0494C9.29154 16.0002 9.33882 15.9311 9.36111 15.8526L9.94536 13.8081C10.2049 12.8874 10.6964 12.0487 11.3728 11.3723C12.0492 10.6959 12.8879 10.2044 13.8086 9.94484L15.8531 9.36059C15.9316 9.3383 16.0007 9.29103 16.0499 9.22592C16.0991 9.16082 16.1257 9.08144 16.1257 8.99984C16.1257 8.91823 16.0991 8.83886 16.0499 8.77375C16.0007 8.70865 15.9316 8.66137 15.8531 8.63909Z"
                        fill="#0D76B8" />
                </svg>
                Top Rated Stay
            </li>

        </ul>
    </div>

    <!-- Right Section: About Us -->
    <div id="about" class="space-y-6">
        <div>
            <!-- <h4 class="mobile-text-center text-sm uppercase font-semibold text-gray-600  tracking-widest mb-2 ">About Us</h4> -->
            <h2 class="mobile-text-center text-3xl text-[#0D76B8]  font-lora leading-snug mb-4">
                Budget Friendly Business Class Stays in Ashok Nagar
            </h2>
            <p class="mobile-text-center mb-4">
                Rohaan Hotel in Ashok Nagar, Chennai, is a professionally maintained budget business class hotel in
                Ashok Nagar, offering a dependable stay for business travellers in Ashok Nagar, families, and short term
                visitors alike. Conveniently located near Ashok Pillar, the Metro station, and key retail hubs, Rohaan
                stands out among hotels in Ashok Nagar for delivering both corporate convenience and personal comfort.

            </p>
        </div>
        <img src="assets\ashoka-dinning.jpeg" alt="Rohaan Hotels" class="w-full rounded-lg shadow-md" />
    </div>

</div>

<!-- Medavakkam location slider  -->
<section id="locations" class="max-w-8xl mx-auto p-8 mt-0 md:mt-[80px] md:mt-0">
    <div class="flex items-center justify-center ">
        <span><img src="../assets/line1.png" alt="line-vector"></span>
        <h2 class="px-4 font-lora text-xl  md:text-3xl text-center text-[#004875]">Available Suites</h2>
        <span><img src="../assets/Line2.png" alt="line-vector"></span>
    </div>
</section>

<!-- Deluxe Double Room  -->
<section
    class="w-[400px] md:w-[1200px] mx-auto flex flex-col md:flex-row justify-between items-center border-[1px] border-[#009CFF]">
    <div class="w-[400px] md:w-[400px] h-[340px] bg-[url(../assets/rohaan-ashok-nagar.jpeg)] bg-cover bg-center">
    </div>
    <div class="w-[350px] md:w-[750px] mx-auto py-4 md:py-0 pr-0 md:pr-8">
        <div>
            <h3 class="text-[#004875] text-base  md:text-xl font-bold font-lora leading-[1.5] py-2 uppercase">Deluxe Double Room
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
            <div class="mt-[15px]">
                <a class="booking-slider-item__btn" href="#calendar"
                    onclick="event.preventDefault(); document.querySelector('#calendar').scrollIntoView({ behavior: 'smooth' });">
                    <span class="booking-slider-item__btn-text">Book Now</span>
                    <span class="booking-slider-item__btn-icon"></span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Deluxe Double Room with breakfast -->
<section
    class="w-[400px] md:w-[1200px] mt-8 mx-auto flex flex-col md:flex-row justify-between items-center border-[1px] border-[#009CFF]">
    <div class="w-[400px] md:w-[400px] h-[340px] bg-[url(../assets/ashok-nagar-room-2.jpeg)] bg-cover bg-center">
    </div>
    <div class="w-[350px] md:w-[750px] mx-auto py-4 md:py-0 pr-0 md:pr-8">
        <div>
            <h3 class="text-[#004875] text-base  md:text-xl font-bold font-lora leading-[1.5] py-2 uppercase">Deluxe Double Room
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
            <div class="mt-[15px]">
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
    class="w-[400px] md:w-[1200px] mt-8 mx-auto flex flex-col md:flex-row items-center border-[1px] border-[#009CFF]">
    <div class="w-[400px] md:w-[400px] h-[340px] bg-[url(../assets/ashok-nagar-room-3.jpeg)] bg-cover bg-center">
    </div>
    <div class="w-[350px] md:w-[750px] py-4 md:py-0 pr-0 md:pr-8 mx-auto">
        <div>
            <h3 class="text-[#004875] text-base  md:text-xl font-bold font-lora leading-[1.5] py-2 uppercase">Deluxe Twin Room
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
            <div class="mt-[15px]">
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
    class="w-[400px] md:w-[1200px] mt-8 mx-auto flex flex-col md:flex-row justify-between items-center border-[1px] border-[#009CFF]">
    <div class="w-[400px] md:w-[400px] h-[340px] bg-[url(../assets/ashok-nagar-room1.jpeg)] bg-cover bg-center">
    </div>
    <div class="w-[350px] md:w-[750px] py-4 md:py-0 pr-0 md:pr-8 mx-auto">
        <div>
            <h3 class="text-[#004875] text-base  md:text-xl font-bold font-lora leading-[1.5] py-2 uppercase">Deluxe Twin Room
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

            <div class="mt-[15px]">
                <a class="booking-slider-item__btn" href="#calendar"
                    onclick="event.preventDefault(); document.querySelector('#calendar').scrollIntoView({ behavior: 'smooth' });">
                    <span class="booking-slider-item__btn-text">Book Now</span>
                    <span class="booking-slider-item__btn-icon"></span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- section 3 -->
<div class="max-w-[1600px] mx-auto mt-[50px]  flex flex-col lg:flex-row items-center justify-center py-[30px]">
    <!-- Left: Hotel Room Image -->
    <div class="w-full lg:w-1/2 bg-[#F7F3EE] p-8 lg:p-16">
        <!-- <h4 class="text-sm uppercase tracking-widest text-gray-500 mb-2">Hoteler Facility</h4> -->
        <h2 class="mobile-text-center text-xl md:text-3xl text-[#0D76B8] mb-6 leading-tight font-lora">
            Budget Friendly Corporate Stays in Ashok Nagar
        </h2>
        <p class="mobile-text-center text-gray-600 mb-6">
            Rohaan Hotel is increasingly chosen for corporate stays in Ashok Nagar by companies, entrepreneurs, and
            professionals on short term assignments. Our property is optimized for comfort, quiet productivity, and
            smooth service everything a business hotel in Ashok Nagar should offer. We provide flexible
            check-in/check-out, complimentary breakfast, and efficient housekeeping, all tailored for business
            travellers in Ashok Nagar.
        </p>

        <p class="mobile-text-center text-gray-600 mb-6">
            At the same time, we remain a go to for families needing budget hotel stays in Ashok Nagar for weddings,
            hospital visits, or social gatherings, offering easy access to nearby facilities and transport.
        </p>
        <!-- Read More Button -->
        <!-- <button class="bg-[#0D76B8] text-white px-6 py-3 rounded hover:bg-blue-700 transition">
            READ MORE
        </button> -->
    </div>

    <!-- Right: Promotional Text -->


    <div class="w-[400px] h-[430px] md:w-[500px] md:h-[530px]">
        <img src="assets\rohaan-ashok-nagar.jpeg" alt="Hotel Room - Rohaan Hotels"
            class="w-full h-full object-center-right object-cover" />
    </div>
</div>

<!-- section 4 -->
<div class="max-w-[1600px] mx-auto flex flex-col-reverse md:flex-col lg:flex-row items-center justify-center py-[30px]">
    <!-- Left: Hotel Room Image -->
    <div class="w-[400px] h-[430px] md:w-[500px] md:h-[530px]">
        <img src="assets\ashok-nagar-room1.jpeg" alt="Hotel Room - Rohaan Hotels"
            class="w-full h-full object-center-right object-cover" />
    </div>

    <!-- Right: Promotional Text -->
    <div class="w-full lg:w-1/2 bg-[#F7F3EE] p-8 lg:p-16">
        <!-- <h4 class="text-sm uppercase tracking-widest text-gray-500 mb-2">Hoteler Facility</h4> -->
        <h2 class="mobile-text-center text-xl md:text-3xl text-[#0D76B8] mb-6 leading-tight font-lora">
            Affordable Business Hotel in Ashok Nagar – Built for Today’s Traveller
        </h2>
        <p class="mobile-text-center text-gray-600 mb-6">
            At Rohaan Hotel, we understand that today's business travellers in Ashok Nagar expect more than just a basic
            room. As one of the most preferred budget business class hotels in Ashok Nagar, our rooms are thoughtfully
            designed with high speed Wi-Fi, smart TVs, orthopedic mattresses. These modern touches are what make us a
            leading business class hotel in Ashok Nagar trusted by executives and consultants alike.
        </p>

        <p class="mobile-text-center text-gray-600 mb-6">
            Guests consistently rate us among the top budget hotels in Ashok Nagar for our peaceful ambiance, hygiene
            standards, and helpful staff. Rohaan’s focus on essential comfort over luxury frills makes it the practical
            choice among business hotels in Ashok Nagar.
        </p>
        <!-- Read More Button -->
        <!-- <button class="bg-[#0D76B8] text-white px-6 py-3 rounded hover:bg-blue-700 transition">
            BOOK NOW
        </button> -->
    </div>
</div>

<!-- section 5 -->
<section class="max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 lg:grid-cols-2 gap-12 items-start relative -z-10">

    <!-- Left: Heading and Button -->
    <div class="space-y-6">
        <h4 class="mobile-text-center text-sm uppercase tracking-widest text-gray-500 ">Hotel Facilities</h4>
        <h2 class="mobile-text-centertext-xl md:text-3xl  text-[#0D76B8]  leading-tight font-lora">
            Hotels in Ashok Nagar Near Ashok Pillar, Metro & Key Business Zones
        </h2>
        <p class="mobile-text-center text-gray-600">
            Location is one of our biggest strengths. As a centrally positioned business class hotel in Ashok Nagar,
            Rohaan provides quick access to: </p>
        <p class="mobile-text-center text-gray-600">
            For guests seeking budget hotels in Ashok Nagar with strong connectivity to Chennai’s hotspots, Rohaan
            offers unmatched convenience.</p>
        <!-- <button class="bg-orange-700 text-white px-6 py-3 rounded hover:bg-orange-800 transition">
            ROOM & SUITES
        </button> -->
    </div>

    <!-- Right: Facility List with Hover Images -->


    <div id="accordion" class="space-y-8">
        <!-- Item 1 -->
        <div class="group relative flex items-start space-x-4 border-b pb-6 cursor-pointer item active">
            <div
                class="number text-3xl tracking-widest font-lora font-semibold text-black transition-colors duration-300">
                01
            </div>
            <div>
                <h3 class="mobile-text-center heading text-lg font-semibold text-blue-600 transition-colors duration-300">
                    Ashok Nagar Metro Station and <br> transport terminals
                </h3>
            </div>
            <img src="assets/cmrl.jpg" alt="CMRL"
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
                    Major hospitals, shopping malls, <br> and educational institutions
                </h3>
            </div>
            <img src="assets/forum-vijaya-mall.jpg" alt="Restaurant"
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
                    Restaurants, pharmacies, and <br> grocery stores
                </h3>
            </div>
            <img src="assets/restaurant.jpeg" alt="Achievement"
                class="hidden md:block hover-image absolute right-[-20px] top-[-20px] mt-2 w-48 rounded shadow-lg opacity-0 transform -translate-y-2 z-10 transition-opacity duration-300" />
        </div>
    </div>

</section>

<!-- Amenities  -->
<section class="max-w-[1550px] mx-auto mb-8 pt-8 relative bg-[url(../assets/medavakkam-bg-1.png)] bg-cover relative -z-10">
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
            <div class="bg-[#009CFF] text-white px-2 py-2  w-[200px] absolute bottom-0 animated-button victoria-one">
                <button class="border border-[white] p-2 text-sm "> Free Wi-Fi throughout the property</button>
            </div>
        </div>
        <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
            <div class="border border-[#009CFF] max-w-72 p-2">
                <img src="../assets/parking.png" class="w-[300px]" alt="Public parking">
            </div>
            <div class="bg-[#009CFF] text-white px-2 py-2  w-[200px] absolute bottom-0 animated-button victoria-one">
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
            <div class="bg-[#009CFF] text-white px-2 py-2  w-[200px] absolute bottom-0 animated-button victoria-one">
                <button class="border border-[white] p-2 text-sm"> Hassle-free luggage support</button>
            </div>
        </div>

    </div>
</section>

<!-- Room Comforts -->
<section class="max-w-[1550px] mx-auto mb-8 mt-8 md:bg-[url(../assets/roomcomforts-bg.png)] bg-cover relative -z-10">
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
            <div class="bg-[#009CFF] text-white px-2 py-2  w-[200px] absolute bottom-0 animated-button victoria-one">
                <button class="border border-[white] px-2 py-1  w-[200px]text-sm"> Complimentary toiletries</button>
            </div>
        </div>
        <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
            <div class="border border-[#009CFF] max-w-72 p-2">
                <img src="../assets/facilitieshotel.png" class="w-[300px]"
                    alt="Geyser, hairdryer, and ironing facilities">
            </div>
            <div class="bg-[#009CFF] text-white px-2 py-2  w-[200px] absolute bottom-0 animated-button victoria-one">
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
            <div class="bg-[#009CFF] text-white px-2 py-2  w-[200px] absolute bottom-0 animated-button victoria-one">
                <button class="border border-[white] p-3 text-sm text-center w-[185px]">Soundproof windows</button>
            </div>
        </div>
    </div>
</section>

<!-- Safety & Security-->
<section class="max-w-[1550px] mx-auto mb-8 mt-8 bg-[url(../assets/safety-security-bg.png)] bg-cover relative -z-10">
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
            <div class="bg-[#009CFF] text-white px-2 py-2  w-[200px] absolute bottom-0 animated-button victoria-one">
                <button class="border border-[white] px-2 py-1  w-[200px]text-sm"> Smoke detectors & fire
                    extinguishers</button>
            </div>
        </div>
        <div class="w-80 md:max-w-2xl mx-auto p-4 relative">
            <div class="border border-[#009CFF] max-w-72 p-2">
                <img src="../assets/first-aid.png" class="w-[300px]" alt="First-aid services on call">
            </div>
            <div class="bg-[#009CFF] text-white px-2 py-2  w-[200px] absolute bottom-0 animated-button victoria-one">
                <button class="border border-[white] p-3 text-sm text-center w-[185px]">First-aid services on
                    call</button>
            </div>
        </div>
    </div>
</section>

<!-- gallery section  -->
<section id="rooms" class="bg-[#F8F8F8] bg-[url('../assets/gallery-bg.png')]  w-full  mx-auto mt-8 relative -z-10">
    <div class="container max-w-xl md:max-w-6xl mx-auto py-8">
        <h3 class="mobile-text-center font-lora text-2xl text-[#004875]">Gallery</h3>
        <div class="row space-y-4 md:space-y-0 mx-auto">
            <a href="assets\ashok-nagar-room-2.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="assets\ashok-nagar-room-2.jpeg" class="img-fluid rounded w-[353px] h-[236px] object-cover">
            </a>
            <a href="assets\ashok-nagar-room-3.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="assets\ashok-nagar-room-3.jpeg" class="img-fluid rounded w-[353px] h-[236px] object-cover">
            </a>
            <a href="assets\ashok-nagar-room1.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="assets\ashok-nagar-room1.jpeg" class="img-fluid rounded w-[353px] h-[236px] object-cover">
            </a>
        </div>
        <div class="row space-y-4 md:space-y-0 mx-auto">
            <a href="assets\ashoka-dinning.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="assets\ashoka-dinning.jpeg" class="img-fluid rounded w-[353px] h-[236px] object-cover">
            </a>
            <a href="assets\ashok-nagar-inns-lift.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="assets\ashok-nagar-inns-lift.jpeg" class="img-fluid rounded w-[353px] h-[236px] object-cover">
            </a>
            <a href="assets\ashok-nagar-inns-restroom.jpeg" data-toggle="lightbox" data-gallery="gallery"
                class="col-md-4">
                <img src="assets\ashok-nagar-inns-restroom.jpeg"
                    class="img-fluid rounded w-[353px] h-[236px] object-cover">
            </a>
        </div>
    </div>
</section>

<!-- section 6 -->
<section class="max-w-[1600px] mx-auto px-6 py-16 bg-[#F7F3EE] flex flex-col items-center text-center space-y-8">
    <div>
        <img src="assets\right-quote.png" alt="right-quote">
    </div>
    <div>
        <h3 class="text-2xl font-lora font-bold mb-4">Book Your Budget Business Class Stay in Ashok Nagar Today</h3>
        <p class="max-w-[1000px] mx-auto">Whether you're a consultant on assignment, a solo traveller, or a family
            looking for budget friendly hotels
            in Ashok Nagar, Rohaan Hotel checks all the right boxes. As a leading business class hotel in Ashok Nagar,
            we bring together professional hospitality and a peaceful environment to ensure your Chennai visit is
            productive, safe, and stress free.</p>
    </div>
</section>


<!-- Contact us starts -->
<section
    class="contact-us grid grid-cols-1 md:grid-cols-2 gap-[50px] md:gap-[100px] max-w-xl md:max-w-6xl mx-auto  pt-8 md:mx-8 md:my-8 "
    id="contactus">
    <div class="contact-us-form title h-[470px]  p-4  md:p-8 rounded-2xl" id="contactform">
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

    <!-- temporary img -->
    <div>
        <img src="assets\ashok-nagar-room1.jpeg" alt="Rohaan Hotels">
    </div>

    <!-- temporary disable -->
    <div class="content mx-auto ">
        <!-- Content title -->
        <!-- <div class="flex justify-center md:justify-start  items-center">
            <img src="../assets/location-icon.png" class="w-[20px] h-[20px] mt-[6px] md:mt-0" alt="map-icon">
            <h2 class="content__title text-2xl text-left underline"> Locations</h2>
        </div> -->
        <!-- Content inner -->

        <!-- <div class="content__inner shadow-none mt-4">
            <div class="tabs__panel-card">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.9922000229753!2d80.21242647484252!3d13.036168287285246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526724905210bd%3A0x69bb5095803bc911!2sRohaan%20Inns%20by%20UPAR%20Hotels%20Ashok%20Nagar!5e0!3m2!1sen!2sin!4v1753793605353!5m2!1sen!2sin"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    class="w-[350px] h-[350px] md:w-[600px] md:h-[350px]"></iframe>
            </div>
        </div> -->
    </div>
    <!-- temporary disable ends -->



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
            item.querySelector('.heading').classList.add('text-blue-600');
            const img = item.querySelector('.hover-image');
            if (img) {
                img.classList.remove('opacity-0', '-translate-y-2');
                img.classList.add('opacity-100', 'translate-y-0');
            }
        });
    });
</script>