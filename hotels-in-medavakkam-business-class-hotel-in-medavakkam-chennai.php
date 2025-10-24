<!-- header section  -->
<?php
$metaData = [
    "title" => "Hotels in Medavakkam | Business Class Hotel in Medavakkam",
    "description" => "Rohaan Hotels offers business & budget hotel stays in Medavakkam & Ashok Nagar, Chennai. Perfect for corporate guests & family travelers. Book now!"
];

include("inc/header.php")

?>



<!-- hero section  -->
<section
    class="max-w-[1600px] mx-auto bg-[url(../assets/about-banner-mobile.png)] h-[305px] md:h-[512px] md:bg-[url(../assets/about-banner-desktop.png)]  bg-cover bg-center px-8 md:px-12 py-[5px] md:py-[120px] ">
    <div class="max-w-3xl text-left text-white  md:pl-8 flex flex-col pt-8 md:pt-0">
        <h1 class="font-medium uppercase mb-4 font-lora text-xl md:text-[40px] leading-[1.5] md:leading-[1.3]">
            Hotels in Medavakkam | Business Class Hotel in Medavakkam - Rohaan Hotels
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


<!-- about us section -->
<section id="about"
    class="max-w-[1540px] pt-[50px] md:pt-0 bg-[url(../assets/about-bg.png)] bg-cover bg-center  mx-auto mt-[-3%] flex flex-col  justify-between md:flex-row gap-8  bg-white p-[5%] mobile-text-center">
    <div class="max-w-xl mx-auto pt-[30px]  ">
        <h2 class="text-[#004875] text-xl  md:text-3xl  font-lora leading-[1.5]">Business Class Hotel in Medavakkam
        </h2>

        <h3 class="mt-2 text-sm leading-[1.5rem]  md:text-base">Stay Smart. Stay Comfortable at Rohaan A Business Hotel
            in Medavakkam
            for
            Business & Leisure Travellers </h3>
        <p class="py-4 text-sm  leading-[1.5rem] md:text-base">Rohaan Hotel is a professionally run business class hotel
            in Medavakkam,
            Chennai, offering the perfect stay for both business travellers in Medavakkam and personal visitors.
            Conveniently located near Perumbakkam and OMR, we are a trusted name among premium hotels in Medavakkam,
            delivering comfort, safety, and connectivity for every guest. As one of the most dependable business class
            hotels in Medavakkam, our property is designed to suit the dynamic needs of both short- and long stay
            guests. We are also a preferred choice for those searching for Budget Hotels near Sholinganallur without
            compromising on quality and location.</p>
    </div>
    <div class="max-w-xl mx-auto relative">
        <img src="../assets/bedroom-view-3.png" alt="Rohaan Hotels">
        <img src="../assets/bedroom-view.png" class="absolute left-[-4%] md:left-[-15%] top-[70%] w-[285px] h-[152px]"
            alt="Rohaan Hotels">
        <img src="../assets/line-rectangle.png" class="absolute right-[-3%] top-[91%]" alt="Rohaan Hotels">
    </div>
</section>

<div class="w-[350px] md:w-[1200px]  mx-auto text-center mt-5 mb-5 pt-[55px] md:pt-0">
    <h4 class="text-[#004875] text-xl  md:text-3xl  font-lora leading-[1.5]">
        Business Class Hotel in Medavakkam Built for the Modern Traveller in Chennai
    </h4>
    <p class="mt-3">Whether you're in town for a corporate assignment or a weekend getaway, Rohaan Hotel is engineered
        to meet the
        needs of both professional and personal stays. Our rooms offer high speed Wi-Fi, orthopedic bedding, smart TVs,
        and all standard features at leading business hotels in Medavakkam.
        Rohaan is known among business class hotels in Chennai for its guest-focused design, efficiency, and seamless
        experience. For travellers considering Budget Hotels near Sholinganallur, Rohaan presents an attractive
        alternative with added comfort and accessibility.</p>
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
    <div class="w-[400px] md:w-[400px] h-[340px] bg-[url(../assets/bedroom-view.png)] bg-cover bg-center">
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

<!-- Deluxe Double Room with breakfast -->
<section
    class="w-[400px] md:w-[1200px] mt-8 mx-auto flex flex-col md:flex-row items-center border-[1px] border-[#009CFF]">
    <div class="w-[400px] md:w-[400px] h-[340px] bg-[url(../assets/double-with-breakfast.png)] bg-cover bg-center">
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
    class="w-[400px] md:w-[1200px] mt-8 mx-auto flex flex-col md:flex-row items-center border-[1px] border-[#009CFF]">
    <div class="w-[400px] md:w-[400px] h-[340px] bg-[url(../assets/twin-room.png)] bg-cover bg-center">
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
    class="w-[400px] md:w-[1200px] mt-8 mx-auto flex flex-col md:flex-row justify-between items-center border-[1px] border-[#009CFF]">
    <div
        class="w-[400px] md:w-[400px] h-[340px] bg-[url(../assets/twin-bedroom-with-breakfast.png)] bg-cover bg-center">
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

<!-- room content -->
<section
    class="max-w-[1540px] bg-[url(../assets/about-bg.png)] bg-cover bg-center  mx-auto mt-8  bg-white p-[5%] mobile-text-center">
    <h3 class="text-[#004875] text-xl  md:text-3xl  font-lora leading-[1.5] text-center">Corporate Stays in
        Medavakkam with Family Friendly Hospitality</h3>
    <div class="flex flex-col md:flex-row justify-between items-center pt-3 md:pt-5 gap-8">
        <div class="w-[350px] md:w-[500px] mx-auto">
            <p>Rohaan is widely recognized for delivering professional and seamless corporate stays in Medavakkam. At
                the same time, we remain equally committed to hosting families, tourists, and long stay guests. Located
                near
                prominent Perumbakkam landmarks, hospitals, transit hubs, and shopping areas, Rohaan is a strong
                contender among business class hotels in Medavakkam and a reliable stay option for guests visiting
                Chennai or
                Perumbakkam for varied reasons</p>
        </div>
        <div>
            <img src="assets/bedroom-view.png" class="w-[400px] mx-auto rounded-md" alt="bedroom-view">
        </div>
        <div class="w-[350px] md:w-[500px] mx-auto">
            <p> Our loyal guests, especially business travellers in Medavakkam, appreciate our consistent standards and
                quiet, secure environment. Many also explore Budget Hotels near Sholinganallur, but choose Rohaan for
                its professionalism and modern amenities.
            </p>
        </div>
    </div>
</section>


<!-- why choose us section  -->
<section class="w-full max-w-[1600px] bg-[url('../assets/why-choose-bg.png')] bg-cover bg-center mx-auto p-8">
    <h3 class="font-lora text-xl md:text-3xl text-center text-[#004875]">Hotels in Medavakkam Near OMR, Perumbakkam &
        Chennai Airport</h3>
    <p class="w-[340px] md:w-[1000px]  mx-auto mt-3 text-center">Our location is one of Rohaan’s greatest advantages. As
        a centrally
        located business hotel in Medavakkam, we
        offer quick access to:</p>
    <div class="flex justify-center max-w-5xl mx-auto mt-8 flex-col space-y-4 md:space-y-0 md:flex-row items-center">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 max-w-4xl mx-auto">
            <div
                class="bg-[#E3E3E3] bg-[url('../assets/bg1.png')]   w-80 p-4 rounded-md flex flex-col p-6 items-center md:items-start">
                <img src="../assets/setting.png" class="w-8 h-8 mb-2" alt="icon">
                <p class="mobile-text-center md:text-start">OMR, Sholinganallur, and ELCOT SEZ</p>
            </div>
            <div
                class="bg-[#E3E3E3] bg-[url('../assets/bg2.png')]  w-80 p-4 rounded-md flex flex-col p-6 items-center md:items-start">
                <img src="../assets/junction.png" class="w-8 h-8 mb-2" alt="icon">
                <p class="mobile-text-center md:text-start">Medavakkam main road, Velachery, and major Perumbakkam
                    junctions</p>
            </div>
            <div
                class="bg-[#E3E3E3] bg-[url('../assets/bg3.png')]  w-80 p-4 rounded-md flex flex-col p-6 items-center md:items-start">
                <img src="../assets/airport-icon.png" class="w-8 h-8 mb-2" alt="icon">
                <p class="mobile-text-center md:text-start">Chennai International Airport</p>
            </div>
            <div
                class="bg-[#E3E3E3] bg-[url('../assets/bg4.png')]  w-80 p-4 rounded-md flex flex-col p-6 items-center md:items-start">
                <img src="../assets/map.png" class="w-8 h-8 mb-2" alt="icon">
                <p class="mobile-text-center md:text-start">Local dining, coworking spaces, pharmacies, and grocery
                    stores
                </p>
            </div>
        </div>
    </div>
    <p class="text-center text-base mt-8 italic w-[340px] md:w-[1240px] mx-auto">This strategic address enhances our
        value as one of
        the most accessible
        hotels in Medavakkam for both work and leisure, particularly for those needing direct access to Perumbakkam and
        the IT corridors of South Chennai. Guests looking for Budget Hotels near Sholinganallur often find Rohaan to be
        a more value-packed and convenient option.</p>
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
<section id="rooms" class="bg-[#F8F8F8] bg-[url('../assets/gallery-bg.png')] relative -z-10  w-full  mx-auto mt-8">
    <div class="container max-w-xl md:max-w-6xl mx-auto py-8">
        <h3 class="font-lora text-2xl text-[#004875]">Gallery</h3>
        <div class="row space-y-4 md:space-y-0">
            <a href="../assets/bedroom-view.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="../assets/bedroom-view.png" class="img-fluid rounded w-[353px] h-[236px] object-cover">
            </a>
            <a href="../assets/bedroom-view-2.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="../assets/bedroom-view-2.png" class="img-fluid rounded w-[353px] h-[236px] object-cover">
            </a>
            <a href="../assets/restroom.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="../assets/restroom.png" class="img-fluid rounded w-[353px] h-[236px] object-cover">
            </a>
        </div>
        <div class="row space-y-4 md:space-y-0">
            <a href="../assets/lift-view.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="../assets/lift-view.png" class="img-fluid rounded w-[353px] h-[236px] object-cover">
            </a>
            <a href="../assets/bedroom-view-3.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="../assets/bedroom-view-3.png" class="img-fluid rounded w-[353px] h-[236px] object-cover">
            </a>
            <a href="../assets/parking-hotel.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="../assets/parking-hotel.png" class="img-fluid rounded w-[353px] h-[236px] object-cover">
            </a>
        </div>
    </div>
</section>

<!-- why rohaan -->
<section class="w-[350px] md:w-[1400px] mx-auto mb-5">
    <h3 class="font-lora text-2xl text-[#004875] text-center">Why Rohaan is Among the Top Business Class Hotels in
        Medavakkam</h3>
    <p class="pt-2 text-center">Rohaan Hotel has built a solid reputation as one of the best business class hotels in
        Medavakkam and is often
        recommended by business travellers in Medavakkam who need consistency, flexibility, and value. We offer clean,
        secure, and productivity-focused rooms without unnecessary distractions.
        Our corporate guests enjoy flexible booking and professionally trained support staff. As a standout among
        business class hotels in Chennai, we also cater to the comfort needs of personal guests visiting from
        Perumbakkam and across the city. Rohaan is also considered by guests exploring Budget Hotels near Sholinganallur
        for its balance of affordability and premium hospitality.</p>
</section>

<section class="w-[350px] md:w-[1400px] mx-auto mb-5">
    <h3 class="font-lora text-2xl text-[#004875] text-center">Book Your Corporate Stay or Vacation at Rohaan – A Trusted
        Business Hotel in Medavakkam</h3>
    <p class="pt-2 text-center">If you're looking for a reliable, affordable, and guest focused business hotel in
        Medavakkam, Rohaan Hotel is your go-to choice. Whether you're planning corporate stays in Medavakkam, a personal
        trip to Perumbakkam, or extended travel to Chennai, we offer a stay experience that’s efficient, relaxing, and
        always dependable.</p>
    <p class="pt-2 text-center"> Among business class hotels in Medavakkam, Rohaan stands out for its ability to serve
        business travellers in Medavakkam as well as individual, family, and long-stay guests with equal dedication. As
        an alternative to standard Budget Hotels near Sholinganallur, Rohaan brings you more value with top-tier service
        and facilities.</p>
</section>


<!-- Contact us starts -->
<section
    class="contact-us relative grid grid-cols-1 md:grid-cols-2 gap-[50px] md:gap-[100px] max-w-xl md:max-w-6xl mx-auto  py-8 md:mx-8 md:my-8"
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
    <!-- <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1759.6599278830145!2d80.19516513598836!3d12.909326063907132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525dddafbf6983%3A0x313f72403e08ee91!2sRohaan%20Hotels%20Medavakkam%20by%20UPAR!5e1!3m2!1sen!2sin!4v1753774756101!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div> -->

    <div class="content mx-auto ">
        <!-- Content title -->
        <!-- <div class="flex justify-center md:justify-start  items-center">
            <img src="../assets/location-icon.png" class="w-[20px] h-[20px] mt-[6px] md:mt-0" alt="map-icon">
            <h2 class="content__title text-2xl text-left underline"> Locations</h2>
        </div> -->


        <!-- Content inner -->

        <div class="content__inner shadow-none mt-4">
            <!-- <div class="tabs__panel-card">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.9739188469334!2d80.19680509999999!3d12.9093978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525dddafbf6983%3A0x313f72403e08ee91!2sRohaan%20Hotels%20Medavakkam%20by%20UPAR!5e0!3m2!1sen!2sin!4v1753792343975!5m2!1sen!2sin"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    class="w-[350px] h-[430px] md:w-[600px] md:h-[430px]"></iframe>
            </div> -->

            <div>
                <img src="../assets/bedroom-view.png" alt="Rohaan Hotels">
            </div>


            <!-- <div class="tabs__panel">
                        <div class="tabs__panel-card">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.9739188469334!2d80.19680509999999!3d12.9093978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525dddafbf6983%3A0x313f72403e08ee91!2sRohaan%20Hotels%20Medavakkam%20by%20UPAR!5e0!3m2!1sen!2sin!4v1753792343975!5m2!1sen!2sin"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                class="w-[350px] h-[350px] md:w-[600px] md:h-[350px]"></iframe>
                        </div>
                    </div> -->

            <!-- <div class="tabs__panel">
                        <div class="tabs__panel-card">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.9922000229753!2d80.21242647484252!3d13.036168287285246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526724905210bd%3A0x69bb5095803bc911!2sRohaan%20Inns%20by%20UPAR%20Hotels%20Ashok%20Nagar!5e0!3m2!1sen!2sin!4v1753793605353!5m2!1sen!2sin"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                class="w-[350px] h-[350px] md:w-[600px] md:h-[350px]"></iframe>
                        </div>
                    </div> -->
        </div>
    </div>
    </div>
    </div>
</section>
<!-- Contact us ends -->

<!-- footer section  -->
<?php include("inc/footer.php") ?>