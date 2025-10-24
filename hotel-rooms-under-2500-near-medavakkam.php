<!-- header section  -->
<?php
$metaData = [
    "title" => " Hotel Rooms Under 2500 near Medavakkam,Chennai",
    "description" => "Book budget-friendly hotel rooms under 2500 near Medavakkam at Rohaan Elite Stay. Clean, comfortable rooms with modern amenities near IT hubs & offices."
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
            Hotel Rooms Under 2500 near Medavakkam - Rohaan Elite Stay
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
    <!-- Left: Promotional Text -->
    <div class="w-full lg:w-1/2 bg-[#f7f7f7] p-8 lg:p-16">
        <h1 class="mobile-text-center text-xl md:text-3xl text-[#735030] mb-6 leading-tight font-lora">
            Relax in Our Comfortable Hotel Rooms
        </h1>
        <p class="mobile-text-center text-gray-600 mb-6">
            Experience the perfect blend of comfort, convenience, and affordability with our hotel rooms under 2500 in Medavakkam. Whether you are a business traveler, tourist,
            or short stay guest, our rooms offer a cozy and well-equipped retreat that fits your budget without compromising quality. Guests looking for hotels near Medavakkam 2500 will find Rohaan Elite Stay an ideal choice.
        </p>
    </div>

    <!-- Right:  Hotel Room Image -->
    <div class="w-[400px] h-[330px] md:w-[500px] md:h-[400px]">
        <img src="assets\elite-1.JPG" alt="Hotel Room - Rohaan Elite Stay"
            class="w-full h-full object-center-right object-cover" />
    </div>
</div>

<!-- section 4 -->
<div class="max-w-[1600px] mx-auto flex flex-col-reverse md:flex-col lg:flex-row items-center justify-center py-[30px]">
    <!-- Left: Hotel Room Image -->
    <div class="w-[400px] h-[430px] md:w-[500px] md:h-[420px]">
        <img src="assets\elite-bedroom.JPG" alt="Hotel Room - Rohaan Elite Stay"
            class="w-full h-full object-center-right object-cover" />
    </div>

    <!-- Right: Promotional Text -->
    <div class="w-full lg:w-1/2 bg-[#F7F3EE] p-8 lg:p-16">
        <!-- <h4 class="text-sm uppercase tracking-widest text-gray-500 mb-2">Hoteler Facility</h4> -->
        <h2 class="mobile-text-center text-xl md:text-3xl text-[#735030] mb-6 leading-tight font-lora">
            Why Our Rooms Are Ideal for Business Travelers
        </h2>
        <p class="mobile-text-center text-gray-600 mb-6">
            Our rooms are designed to meet the needs of modern professionals. Each comes with clean interiors, modern amenities, and attentive service, providing both functionality and relaxation. Enjoy a productive stay while staying within budget.
            Business travelers searching for business hotels in Medavakkam 2500 will find convenience and comfort at our property.
        </p>
    </div>
</div>

<!-- why choose us section  -->
<section class="w-full max-w-[1600px] bg-[url('../assets/why-choose-bg.png')] bg-cover bg-center mx-auto p-8">
    <h3 class="mobile-text-center text-center text-xl md:text-3xl text-[#735030] mb-6 leading-tight font-lora">Strategically Located Hotel Rooms Under 2500 in Medavakkam</h3>
    <p class="max-w-3xl mx-auto text-center my-4">Medavakkam is strategically located with excellent connectivity to IT hubs, business centers, and major transportation routes. Guests prefer our location because of:</p>
    <!-- <p class="max-w-4xl mx-auto text-center my-4">Here’s what you get with our hotel rooms under 2500:</p> -->
    <div
        class="flex justify-center max-w-5xl mx-auto mt-8 flex-col space-y-4 md:space-y-0 md:flex-row items-center">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4 max-w-5xl mx-auto">
            <div
                class="bg-[#E3E3E3] bg-[url('../assets/bg1.png')]   w-80 p-4 rounded-md flex flex-col p-6 items-center md:items-start">
                <img src="../assets/setting.png" class="w-8 h-8 mb-2" alt="icon">
                <p class="mobile-text-center md:text-start">Proximity to offices, IT parks, and commercial hubs</p>
            </div>
            <div
                class="bg-[#E3E3E3] bg-[url('../assets/bg2.png')]  w-80 p-4 rounded-md flex flex-col p-6 items-center md:items-start">
                <img src="../assets/hand-icon.png" class="w-8 h-8 mb-2" alt="icon">
                <p class="mobile-text-center md:text-start">Safe and accessible neighborhoods</p>
            </div>
            <div
                class="bg-[#E3E3E3] bg-[url('../assets/bg3.png')]  w-80 p-4 rounded-md flex flex-col p-6 items-center md:items-start">
                <img src="../assets/time-icon.png" class="w-8 h-8 mb-2" alt="icon">
                <p class="mobile-text-center md:text-start">Peaceful and private spaces ideal for work and rest</p>
            </div>
        </div>
    </div>
    <p class="text-center text-base mt-8 italic">“For those searching for 3 star hotels in Medavakkam 2500, our hotel offers an unbeatable
        combination of location, affordability, and comfort.”</p>
</section>

<!-- section 2 -->
<div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
    <!-- Left Section: Image + Text -->
    <div class="space-y-6">
        <img src="assets\elite-hll.JPG" alt="Rohaan Hotels" class="w-full rounded-lg shadow-md" />
        <h2 class="mobile-text-center text-2xl text-[#735030]  font-lora leading-snug mb-4">
            Reserve Your Room Today for Just 2500
        </h2>
        <p class="mobile-text-center text-md text-gray-600 leading-6">
            Whether for business or leisure, book your hotel rooms under 2500 in Medavakkam today and enjoy comfort, privacy, and flexibility all within budget. For those looking for Medavakkam budget rooms below 2500, Rohaan Elite Stay offers the ideal solution.
        </p>
    </div>

    <!-- Right Section: About Us -->
    <div id="about" class="space-y-6">
        <div>
            <!-- <h4 class="mobile-text-center text-sm uppercase font-semibold text-gray-600  tracking-widest mb-2 ">About Us</h4> -->
            <h2 class="mobile-text-center text-2xl text-[#735030]  font-lora leading-snug mb-4">
                Best Value Stays in Medavakkam
            </h2>
            <p class="mobile-text-center mb-4">
                We offer affordable yet premium quality stays, ensuring you get the best value for your money. Our hotel rooms in Medavakkam below 2500 combine modern amenities, comfort, and convenience, making your stay enjoyable and hassle free.
                Travelers searching for the best hotels in Medavakkam below 2500 will find our property the perfect choice.
            </p>
        </div>
        <img src="assets\elite-bedrrom-large-view.JPG" alt="Rohaan Hotels" class="w-full rounded-lg shadow-md" />
    </div>
</div>

<!-- Amenities  -->
<section class="max-w-[1550px] mx-auto mb-8 pt-8 relative -z-10 bg-[url(../assets/medavakkam-bg-1.png)] bg-cover">
    <!-- <img src="../assets/medavakkam-bg-1.png" class="absolute top-0 right-0 w-[500px] h-[600px] object-contain" alt="medavakkam-bg-1">v   -->
    <div class="flex items-center justify-center max-w-sm md:max-w-2xl mx-auto ">
        <span><img class="w-[130px]" src="assets/Line 150.png" alt="line-vector"></span>
        <h2 class="px-4 font-lora text-2xl  md:text-3xl text-center text-[#735030]">Amenities</h2>
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
        <h3 class="text-2xl font-lora font-bold mb-4">Book with Confidence</h3>
        <p class="max-w-[1200px] mx-auto">Your comfort and privacy are our top priorities. With clear booking policies, secure reservations, and dedicated staff, staying in our hotel rooms under 2500 in Medavakkam is always reliable and stress free.
            Guests looking for hotels near Medavakkam below 2500 can book confidently at Rohaan Elite Stay.</p>

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
            item.querySelector('.heading').classList.add('text-blue-600');
            const img = item.querySelector('.hover-image');
            if (img) {
                img.classList.remove('opacity-0', '-translate-y-2');
                img.classList.add('opacity-100', 'translate-y-0');
            }
        });
    });
</script>