<!-- header section  -->
<?php
$metaData = [
    "title" => "Online Hotel Booking Website - Rohaan Hotels",
    "description" => "Online Hotel Booking Website for budget hotels & business class hotels in Chennai. Stay at Rohaan Hotels Medavakkam & Ashok Nagar with comfort & best prices."
];

include("inc/header.php")

?>

<!-- hero section  -->
<section
    class="max-w-[1600px] mx-auto bg-[url(../assets/about-banner-mobile.png)] h-[305px] md:h-[512px] md:bg-[url(../assets/about-banner-desktop.png)]  bg-cover bg-center px-8 md:px-12 py-[5px] md:py-[120px] ">
    <div class="max-w-3xl text-left text-white  md:pl-8 flex flex-col pt-8 md:pt-0">
        <h1 class="font-medium uppercase mb-4 font-lora text-xl md:text-[40px] leading-[1.5] md:leading-[1.3]">
            Online Hotel Booking Website in Medavakkam and Ashok Nagar
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

<section class="max-w-[1600px] mx-auto px-6  flex flex-col items-center text-center">
    <div>
        <h2 class="font-lora text-[#0D76B8] text-2xl pt-4 pb-4 ">Best Hotels in Chennai for Business Travelers</h2>
        <p class="max-w-[1000px] mx-auto mt-[40px] md:mt-0">Book your stay directly through the official Rohaan Hotels website. Our online hotel booking makes it
            easy to book rooms online in Medavakkam and Ashok Nagar. With our trusted hotel website booking, you get the best online hotel booking experience at the
            best prices.
        </p>
    </div>
</section>


<!-- section 3 -->
<div class="max-w-[1600px] mx-auto mt-4 md:mt-[50px]   flex flex-col lg:flex-row items-center justify-center py-[30px]">
    <!-- Left: Hotel Room Image -->
    <div class="w-full lg:w-1/2 bg-[#F7F3EE] p-8 lg:p-16">
        <!-- <h4 class="text-sm uppercase tracking-widest text-gray-500 mb-2">Hoteler Facility</h4> -->
        <h2 class="mobile-text-center text-xl md:text-3xl text-[#0D76B8] mb-6 leading-tight font-lora">
            Online Hotel Booking in Medavakkam
        </h2>
        <p class="mobile-text-center text-gray-600 mb-6">
            If you are visiting Medavakkam, our online room booking system helps you confirm your stay in minutes. Guests who book rooms online enjoy comfortable stays, modern facilities, and quick
            access to nearby locations. With Rohaan Hotels’ hotel website booking, you always get secure reservations and great value.
        </p>
        <div class="flex flex-col md:flex-row justify-center md:justify-start gap-5 md:gap-0 items-center relative -z-10">
            <a href="hotels-in-medavakkam-business-class-hotel-in-medavakkam-chennai.php">
                <button
                    class="bg-[#009CFF] text-white px-8 py-2 uppercase text-base font-semibold outline-none animated-button victoria-one">Read more</button>
            </a>
            <button onclick="openForm()"
                class="project-brochure-button bg-[#ffff] font-medium w-[160px] md:w-[165px] text-[#004875]  text-sm md:text-base py-2 px-2 md:ml-[10px] focus:outline-none focus:ring-0 outline-none outline-0 outline-offset-0 animated-button victoria-two ">
                BOOK NOW
            </button>
        </div>
    </div>

    <!-- Right: Promotional Text -->


    <div class="w-[400px] h-[400px] md:w-[500px] md:h-[450px]">
        <img src="assets\bedroom-view-2.png" alt="Hotel Room - Rohaan Hotels"
            class="w-full h-full object-center-right object-cover" />
    </div>
</div>

<!-- section 4 -->
<div class="max-w-[1600px] mx-auto flex flex-col-reverse md:flex-col lg:flex-row items-center justify-center py-[30px]">
    <!-- Left: Hotel Room Image -->
    <div class="w-[400px] h-[430px] md:w-[500px] md:h-[550px]">
        <img src="assets\ashok-nagar-room1.jpeg" alt="Hotel Room - Rohaan Hotels"
            class="w-full h-full object-center-right object-cover" />
    </div>

    <!-- Right: Promotional Text -->
    <div class="w-full lg:w-1/2 bg-[#F7F3EE] p-8 lg:p-16">
        <!-- <h4 class="text-sm uppercase tracking-widest text-gray-500 mb-2">Hoteler Facility</h4> -->
        <h2 class="mobile-text-center text-xl md:text-3xl text-[#0D76B8] mb-6 leading-tight font-lora">
            Online Hotel Booking in Ashok Nagar
        </h2>
        <p class="mobile-text-center text-gray-600 mb-6">
            For travelers heading to Ashok Nagar, Rohaan Hotels offers a simple and reliable way to book directly. Our online hotel booking gives you instant
            confirmation, no hidden charges, and the best online hotel booking prices. By choosing our online room booking, you enjoy a smooth process and trusted
            hospitality.
        </p>
        <div class="flex flex-col md:flex-row justify-center md:justify-start gap-5 md:gap-0 items-center relative -z-10">

            <a href="hotels-in-ashok-nagar-business-class-hotel-in-chennai.php">
                <button
                    class="bg-[#009CFF] text-white px-8 py-2 uppercase text-base font-semibold outline-none animated-button victoria-one">Read more</button>
            </a>
            <button onclick="openForm()"
                class="project-brochure-button bg-[#ffff] font-medium w-[160px] md:w-[165px] text-[#004875]  text-sm md:text-base py-2 px-2  md:ml-[10px] focus:outline-none focus:ring-0 outline-none outline-0 outline-offset-0 animated-button victoria-two ">
                BOOK NOW
            </button>
        </div>
    </div>
</div>

<section class="max-w-[1600px] mx-auto px-6 py-16 flex flex-col items-center text-center space-y-8">
    <div>
        <img src="assets\right-quote.png" alt="right-quote">
    </div>
    <div>
        <h3 class="text-2xl font-lora font-bold mb-4"> Book Rooms Online at Best Prices</h3>
        <p class="max-w-[1240px] mx-auto">Whether in Medavakkam or Ashok Nagar, Rohaan Hotels makes it easy to book rooms online at the best rates. Our
            hotel website booking is secure, fast, and designed to give you the best online hotel booking every time. Visit the official Rohaan Hotels website
            today and reserve your stay with confidence.
        </p>
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
                <!-- Tabs navigation -->
                <!-- <div class="tabs__nav w-[350px] md:w-[400px] mx-auto">
                        <ul class="tabs__nav-list items-center ">
                            <li class="tabs__nav-item js-active ">Medavakkam</li>
                            <img src="../assets/Line 146.png" class="h-[25px]" alt="line vector">
                            <li class="tabs__nav-item">Perumbakkam</li>
                            <img src="../assets/Line 146.png" class="h-[25px]" alt="line vector">
                            <li class="tabs__nav-item">Ashok Nagar</li>
                        </ul>
                    </div> -->

                <!-- temporary map -->
                <div class="tabs__panel-card">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3888.9687907084726!2d80.19447656308647!3d12.909727425805537!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525d3bbb7241d3%3A0xf0aab49f8cdeb982!2sBusiness%20Class%20Hotels%20in%20Medavakkam%20%7C%20Perumbakkam%20%7C%20Ashok%20Nagar%20%7C%20Rohaan%20Hotels!5e0!3m2!1sen!2sin!4v1756710501173!5m2!1sen!2sin" width="600" height="450" style="border:0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- teamporary map ends -->

                <!-- Tabs panels -->
                <div class="tabs__panels">
                    <!-- Panel 1 -->
                    <!-- <div class="tabs__panel">
                            <div class="tabs__panel-card">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.9739188469334!2d80.19680509999999!3d12.9093978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525dddafbf6983%3A0x313f72403e08ee91!2sRohaan%20Hotels%20Medavakkam%20by%20UPAR!5e0!3m2!1sen!2sin!4v1753792343975!5m2!1sen!2sin"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"
                                    class="w-[350px] h-[430px] md:w-[600px] md:h-[430px]"></iframe>
                            </div>
                        </div>


                        <div class="tabs__panel">
                            <div class="tabs__panel-card">
                                <a
                                    href="https://www.google.com/maps/place/Rohaan+Hotels+Medavakkam+by+UPAR/@12.9093978,80.1942302,17z/data=!4m9!3m8!1s0x3a525dddafbf6983:0x313f72403e08ee91!5m2!4m1!1i2!8m2!3d12.9093978!4d80.1968051!16s%2Fg%2F11wfy1hclj?hl=en&entry=ttu&g_ep=EgoyMDI1MDgxMy4wIKXMDSoASAFQAw%3D%3D">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.9739188469334!2d80.19680509999999!3d12.9093978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525dddafbf6983%3A0x313f72403e08ee91!2sRohaan%20Hotels%20Medavakkam%20by%20UPAR!5e0!3m2!1sen!2sin!4v1753792343975!5m2!1sen!2sin"
                                        style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"
                                        class="w-[350px] h-[350px] md:w-[600px] md:h-[350px]"></iframe>
                                </a>
                            </div>
                        </div>

                        <div class="tabs__panel">
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

<?php include("inc/footer.php") ?>