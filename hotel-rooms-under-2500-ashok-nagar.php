<!-- header section  -->
<?php
$metaData = [
    "title" => "Hotel Rooms Under 2500 in Ashok Nagar Chennai",
    "description" => "Book cozy and affordable hotel rooms under ₹2500 near Ashok Nagar. Enjoy clean, well-equipped rooms, modern amenities, and a prime Chennai location all within your budget."
];

include("inc/header.php")

?><!-- hero section  -->
<section
    class="max-w-[1600px] mx-auto bg-[url(../assets/ashoka-mobile-banner.png)] h-[305px] md:h-[512px] md:bg-[url(../assets/ashok-nagar-desktop-banner.png)]  bg-cover bg-center px-8 md:px-12 py-[5px] md:py-[120px] ">
    <div class="max-w-3xl text-left text-white  md:pl-8 flex flex-col pt-8 md:pt-0">
        <h1 class="font-medium uppercase mb-4 font-lora text-xl md:text-[40px] leading-[1.5] md:leading-[1.3]">
            Hotel Rooms Under 2500 in Ashok Nagar Chennai
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

<!-- about us section -->
<section id="about"
    class="max-w-[1540px] bg-[url(../assets/about-bg.png)] bg-cover bg-center  mx-auto flex flex-col items-center  justify-between md:flex-row gap-8  bg-white p-[5%] mobile-text-center">
    <div class="max-w-xl mx-auto  ">
        <h2 class="text-[#004875] text-xl  md:text-3xl  font-lora leading-8 md:leading-[45px] ">Hotel Rooms Under 2500 in Ashok Nagar
        </h2>

        <p class="py-4 text-sm  md:text-[17px] md:leading-7 ">Looking for hotel rooms under 2500 near Ashok Nagar? You’ve come to the right place! Our hotel offers clean, comfortable, and affordable accommodations for travelers, families, and business visitors. Enjoy modern amenities, cozy interiors, and a prime location all without breaking your budget. Discover why our property is one of the best hotels under 2500 in Ashok Nagar. </p>

    </div>
    <div class="max-w-xl mx-auto relative">
        <img src="../assets/about-1-img.png" class="w-[500px] h-[320px] object-cover" alt="Rohaan Hotels">
        <!-- <img src="../assets/about-2-img.png" class="absolute left-[-4%] md:left-[-15%] top-[70%] w-[273px]"
            alt="Rohaan Hotels"> -->
        <img src="../assets/line-rectangle.png" class="absolute right-[-3%] top-[91%]" alt="Rohaan Hotels">
    </div>
</section>

<!-- why choose us section  -->
<section class="w-full max-w-[1600px] bg-[url('../assets/why-choose-bg.png')] bg-cover bg-center mx-auto p-8">
    <h3 class="font-lora text-xl md:text-3xl text-center text-[#004875]">Why Choose Our Hotel Rooms Under 2500</h3>
    <p class="max-w-4xl mx-auto text-center my-4">Our hotel rooms under 2500 near Ashok Nagar are designed for a relaxing and convenient stay at an affordable price. Every room is thoughtfully equipped to ensure comfort and value.</p>
    <p class="max-w-4xl mx-auto text-center my-4">Here’s what you get with our hotel rooms under 2500:</p>
    <div
        class="flex justify-center max-w-5xl mx-auto mt-8 flex-col space-y-4 md:space-y-0 md:flex-row items-center">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4 max-w-5xl mx-auto">
            <div
                class="bg-[#E3E3E3] bg-[url('../assets/bg1.png')]   w-80 p-4 rounded-md flex flex-col p-6 items-center md:items-start">
                <img src="../assets/setting.png" class="w-8 h-8 mb-2" alt="icon">
                <p class="mobile-text-center md:text-start">Air-conditioned rooms with comfortable beds and modern furnishings</p>
            </div>
            <div
                class="bg-[#E3E3E3] bg-[url('../assets/bg2.png')]  w-80 p-4 rounded-md flex flex-col p-6 items-center md:items-start">
                <img src="../assets/hand-icon.png" class="w-8 h-8 mb-2" alt="icon">
                <p class="mobile-text-center md:text-start">Complimentary Wi-Fi and LED TV for entertainment</p>
            </div>
            <div
                class="bg-[#E3E3E3] bg-[url('../assets/bg3.png')]  w-80 p-4 rounded-md flex flex-col p-6 items-center md:items-start">
                <img src="../assets/time-icon.png" class="w-8 h-8 mb-2" alt="icon">
                <p class="mobile-text-center md:text-start">24-hour front desk with attentive staff</p>
            </div>
            <div
                class="bg-[#E3E3E3] bg-[url('../assets/bg4.png')]  w-80 p-4 rounded-md flex flex-col p-6 items-center md:items-start">
                <img src="../assets/map.png" class="w-8 h-8 mb-2" alt="icon">
                <p class="mobile-text-center md:text-start">Hygienic, safe, and well-maintained rooms
                </p>
            </div>
            <div
                class="bg-[#E3E3E3] bg-[url('../assets/bg4.png')]  w-80 p-4 rounded-md flex flex-col p-6 items-center md:items-start">
                <img src="../assets/map.png" class="w-8 h-8 mb-2" alt="icon">
                <p class="mobile-text-center md:text-start">Easy access to metro stations, shopping centers, and local eateries
                </p>
            </div>
        </div>
    </div>
    <p class="text-center text-base mt-8 italic">“If you’re searching for Ashok Nagar hotels rooms under 2500, our property stands out for its combination of affordability, comfort, and location..”</p>
</section>

<!-- section 3 -->
<div class="max-w-[1600px] mx-auto mt-[50px]  flex flex-col lg:flex-row items-center justify-center py-[30px]">
    <!-- Left: Hotel Room Image -->
    <div class="w-full lg:w-1/2 bg-[#F7F3EE] p-8 lg:p-16">

        <h2 class="mobile-text-center text-xl md:text-3xl text-[#0D76B8] mb-6 leading-tight font-lora">
            The Best Hotel Rooms Under 2500 in Ashok Nagar
        </h2>
        <p class="mobile-text-center text-gray-600 mb-6">
            Our hotel is recognized as one of the best hotel rooms under 2500 in Ashok Nagar for quality service and convenience. Guests frequently choose our 3-star hotels under 2500 in Ashok Nagar for a budget-friendly stay that doesn’t compromise on comfort.
        </p>

        <p class="mobile-text-center text-gray-600 mb-6">
            Whether visiting for business or leisure, our hotels under 2500 near Ashok Nagar offer everything you need clean rooms, reliable service, and a prime location. For those specifically searching for hotels under 2500 in Ashok Nagar Chennai, our property guarantees a peaceful and affordable stay.
        </p>

    </div>
    <!-- Right: Promotional Text -->
    <div class="w-[400px] h-[430px] md:w-[500px] md:h-[500px]">
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
            Affordable Comfort in Ashok Nagar
        </h2>
        <p class="mobile-text-center text-gray-600 mb-6">
            Our Ashok Nagar hotel rooms under 2500 provide the perfect base to explore Chennai. Located near shopping districts, eateries, and metro stations, our hotels under 2500 near Ashok Nagar let you enjoy the city without worrying about your budget
        </p>

        <p class="mobile-text-center text-gray-600 mb-6">
            Choose our best budget hotel rooms under 2500 in Ashok Nagar and experience a stay that combines comfort, convenience, and cost-efficiency. Guests who book our hotel rooms under 2500 often praise our prime location, friendly staff, and well-maintained rooms.
        </p>
    </div>
</div>

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
        <h3 class="text-2xl font-lora font-bold mb-4">Book Your Stay Today</h3>
        <p class="max-w-[1400px] mx-auto">Discover why travelers love our hotel rooms under 2500 in Ashok Nagar Chennai.
            With our hotel rooms under 2500, you get comfort, convenience, and privacy at unbeatable prices.</p>
        <p class="max-w-[1000px] mx-auto italic mt-2">Book your stay now and enjoy comfort, privacy, and flexibility all under 2500!</p>
    </div>
</section>

<!-- Contact us starts -->
<section
    class="contact-us grid grid-cols-1 md:grid-cols-2 gap-[50px] md:gap-[100px] max-w-xl md:max-w-6xl mx-auto md:h-[500px] pt-8 md:mx-8 md:my-8 "
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