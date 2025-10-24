<!-- header section  -->
<?php
$metaData = [
    "title" => "Corporate Hotels Booking in Chennai | Medavakkam | Ashok Nagar",
    "description" => "Rohaan Hotels offers corporate hotels booking in Chennai, Medavakkam & Ashok Nagar with flexible packages. Submit your corporate enquiry today."
];

include("inc/header.php")

?>
<!-- hero section  -->
<section
    class="max-w-[1600px] mx-auto bg-[url(../assets/about-banner-mobile.png)] h-[305px] md:h-[512px] md:bg-[url(../assets/ashok-nagar-desktop-banner.png)]  bg-cover bg-center px-8 md:px-12 py-[5px] md:py-[120px] ">
    <div class="max-w-3xl text-left text-white  md:pl-8 flex flex-col pt-8 md:pt-0">
        <h1 class="font-medium uppercase mb-4 font-lora text-xl md:text-[40px] leading-[1.5] md:leading-[1.3]">
            Corporate Hotels Booking in Chennai | Medavakkam | Ashok Nagar

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
        <h2 class="text-[#004875] text-xl  md:text-3xl  font-lora leading-8 md:leading-[45px] ">Corporate Accommodation in Medavakkam & Ashok Nagar
        </h2>

        <p class="py-4 text-sm  md:text-[17px] md:leading-7 ">Rohaan Hotels offers corporate hotels booking in Chennai, with prime locations in Medavakkam, Ashok Nagar, and Perumbakkam. Whether your need is for short term executive stays, long term project team accommodation, or ongoing corporate tie-ups, our hotels provide
            the ideal blend of comfort, convenience, and professional value. Businesses of all sizes trust us for reliable and seamless stays. </p>

    </div>
    <div class="max-w-xl mx-auto relative">
        <img src="../assets/about-1-img.png" class="w-[500px] h-[320px] object-cover" alt="Rohaan Hotels">
        <!-- <img src="../assets/about-2-img.png" class="absolute left-[-4%] md:left-[-15%] top-[70%] w-[273px]"
            alt="Rohaan Hotels"> -->
        <img src="../assets/line-rectangle.png" class="absolute right-[-3%] top-[91%]" alt="Rohaan Hotels">
    </div>
</section>

<!-- why choose us section  -->
<section class="w-full max-w-[1600px] mx-auto p-0 md:p-8">
    <h3 class="font-lora text-[20px] px-8 md:px-0 md:text-[30px] mt-[30px] md:mt-8 text-center text-[#004875]">Why Choose Rohaan Hotels for Corporate Stays?</h3>
    <div
        class="flex justify-center max-w-7xl mx-auto mt-8 flex-col space-y-4 md:space-y-0 md:flex-row items-center">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 max-w-4xl mx-auto">
            <div
                class="bg-[#009cff] text-white bg-[url('../assets/bg1.png')] w-80 md:w-[400px] mx-auto p-4  flex flex-col p-6 items-center md:items-start">
                <!-- <img src="../assets/setting.png" class="w-8 h-8 mb-2" alt="icon"> -->
                <h3 class="font-semibold font-lora  text-[20px] pb-2">Prime Business Locations</h3>
                <p class="mobile-text-center md:text-start">Our hotels are strategically located near IT corridors, business hubs, and transit routes, making corporate hotels booking in Medavakkam and Ashok Nagar highly convenient for your executives and teams.</p>
            </div>
            <div
                class="bg-[#009cff] text-white bg-[url('../assets/bg2.png')]  w-80 md:w-[400px] mx-auto p-4 rounded-md flex flex-col p-6 items-center md:items-start">
                <h3 class="font-semibold font-lora  text-[20px] pb-2">Business-Class Comfort</h3>
                <p class="mobile-text-center md:text-start">Designed for today’s corporate traveler, our rooms include high speed Wi-Fi, ergonomic work desks, and 24/7 support, making corporate hotels booking in Chennai a smooth experience.</p>
            </div>
            <div
                class="bg-[#009cff] text-white bg-[url('../assets/bg5.png')] w-80 md:w-[400px] mx-auto p-4 rounded-md flex flex-col p-6  md:mt-0 items-center md:items-start">
                <h3 class="font-semibold font-lora  text-[20px] pb-2">Convenient Experience</h3>
                <p class="mobile-text-center md:text-start"> With priority check-ins, dedicated corporate support, and centralized billing, Rohaan Hotels ensures every corporate hotel booking in Chennai is efficient and stress-free.</p>
            </div>
            <div
                class="bg-[#009cff] text-white bg-[url('../assets/bg4.png')]  w-80 md:w-[400px] mx-auto p-4 rounded-md flex flex-col p-6 items-center md:items-start">
                <h3 class="font-semibold font-lora  text-[20px] pb-2 mobile-text-center md:text-start">Professional Value & Reliability</h3>
                <p class="mobile-text-center md:text-start">Backed by competitive rates, professional service, and secure accommodations, our hotels deliver dependable stays for every business need.
                </p>
            </div>
        </div>
        <div
            class="bg-[#009cff] text-white bg-[url('../assets/bg3.png')] w-80 md:w-[400px] mx-auto p-4 rounded-md flex flex-col p-6 items-center md:items-start justify-center h-[300px] md:h-[390px]">
            <h3 class="font-semibold font-lora  text-[20px] pb-2">Flexible Corporate Packages</h3>
            <p class="mobile-text-center md:text-start">Enjoy customized solutions such as special pricing for bulk bookings, extended stays, and repeat reservations. Whether its corporate hotels booking in Medavakkam for long term teams or corporate hotels booking in Ashok Nagar for executives, we provide tailored plans.
            </p>
        </div>
    </div>

</section>



<!-- section 3 -->
<div class="max-w-[1600px] mx-auto mt-[50px]  flex flex-col lg:flex-row items-center justify-center py-[30px]">

    <!-- Left: Hotel Room Image -->
    <div class="w-full lg:w-1/2 bg-[#f7f7f7] p-8 lg:p-16 ">
        <!-- <h4 class="text-sm uppercase tracking-widest text-gray-500 mb-2">Hoteler Facility</h4> -->
        <h2 class="mobile-text-center text-[#004875] text-xl  md:text-3xl mb-6 leading-tight font-lora">
            Who We Serve
        </h2>
        <p class="mobile-text-center text-gray-600 mb-6 md:text-[17px]">
            We support a wide range of corporate requirements, including:
        </p>

        <ul class="mobile-text-center text-gray-600 mb-6 ml-8 list-disc md:text-[17px]">
            <li class="py-1 md:py-2">Corporates managing employee travel & relocation</li>
            <li class="py-1 md:py-2">IT & Tech firms with project-based teams in Chennai</li>
            <li class="py-1 md:py-2">Training programs & group bookings</li>
            <li class="py-1 md:py-2">Frequent business travelers & executives looking for corporate hotels booking in Chennai, Medavakkam, and Ashok Nagar</li>
        </ul>
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
<div class=" max-w-[1600px] mx-auto flex flex-col-reverse md:flex-col lg:flex-row items-center justify-center py-[30px] mt-0" id="contactus">
    <!-- Left: Hotel Room Image -->
    <div class="w-[350px] h-[480px] md:w-[500px] md:h-[530px]">
        <div class="contact-us-form title h-[470px]  p-4  md:p-8 rounded-2xl" id="contactform">
            <!-- <div class="contact-us-form title  bg-gradient-to-r from-cyan-700 to-cyan-400  p-8 rounded-2xl" id="contactform"> -->

            <h4 class="text-white text-2xl font-bold">Corporate Enquiry Form</h4>
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
    </div>

    <!-- Right: Promotional Text -->
    <div class="w-full lg:w-1/2 bg-[#f7f7f7] p-8 lg:p-16 mt-[-55px] md:text-[17px]">
        <!-- <h4 class="text-sm uppercase tracking-widest text-gray-500 mb-2">Hoteler Facility</h4> -->
        <h2 class="mobile-text-center  text-[#004875] text-xl  md:text-3xl mb-6 leading-tight font-lora">
            Submit a Corporate Enquiry
        </h2>
        <p class="mobile-text-center text-gray-600 mb-6">
            Looking for corporate hotels booking in Chennai to manage your company’s travel and accommodation? Need corporate hotels booking in Medavakkam for long-term project teams or corporate hotels booking in Ashok Nagar for executives?
        </p>

        <p class="mobile-text-center text-gray-600 mb-6">
            Our corporate sales team will provide a customized proposal within 24 hours based on your company’s requirements, ensuring a convenient booking experience from start to finish.
        </p>

    </div>
</div>


<!-- footer section  -->
<?php include("inc/footer.php") ?>