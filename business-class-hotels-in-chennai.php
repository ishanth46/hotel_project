<!-- header section  -->
<?php
$metaData = [
    "title" => "Business Class Hotels in Chennai | Rohaan Hotels",
    "description" => "Rohaan Hotels offers Affordable & Executive Business Class Hotels in Chennai, with professional stay options at Medavakkam and Ashok Nagar."
];

include("inc/header.php")

?>
<style>
    .animated-button.victoria-one {
        z-index: -1;
    }
</style>

<!-- hero section  -->
<section
    class="max-w-[1600px] mx-auto bg-[url(../assets/about-banner-mobile.png)] h-[305px] md:h-[512px] md:bg-[url(../assets/about-banner-desktop.png)]  bg-cover bg-center px-8 md:px-12 py-[5px] md:py-[120px] ">
    <div class="max-w-3xl text-left text-white  md:pl-8 flex flex-col pt-8 md:pt-0">
        <h1 class="font-medium uppercase mb-4 font-lora text-xl md:text-[40px] leading-[1.5] md:leading-[1.3]">
            Business Class Hotels in Chennai – Rohaan Hotels
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


<?php include("inc/calenderform.php") ?>


<section class="max-w-[1600px] mx-auto px-6  flex flex-col items-center text-center">
    <div>
        <h2 class="font-lora text-[#0D76B8] text-3xl pt-4 pb-4 ">Book Hotels Online in Medavakkam & Ashok Nagar</h2>
        <p class="max-w-[1000px] mx-auto  md:mt-0">Rohaan Hotels redefines professional stays with our Business Class Hotels in
            Chennai. Designed for executives and corporate travelers, we deliver comfort, value, and reliable service. Whether you prefer a
            Budget Business Class Hotel in Medavakkam or a Business Class Hotel in Ashok Nagar, every stay is crafted to support work and
            relaxation. Counted among the Best Business Class Hotels in Chennai, Rohaan Hotels is also known as an Affordable Business Class
            Hotel trusted by professionals.
        </p>

    </div>
</section>

<!-- section 2 -->
<div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
    <!-- Left Section: Image + Text -->
    <div class="space-y-6">
        <img src="assets\bedroom-view.png" alt="Rohaan Hotels" class="w-full rounded-lg shadow-md" />

        <h2 class="mobile-text-center text-3xl text-[#0D76B8]  font-lora leading-snug mb-4">
            Budget Friendly Business Class Hotels in Ashok Nagar
        </h2>
        <p class="mobile-text-center text-md text-gray-600 leading-6">
            Rohaan Hotels is a leading Business Class Hotel in Ashok Nagar, combining comfort with accessibility. Known as a Budget Business
            Class Hotel in Ashok Nagar, we are also recognized as an Executive Business Class Hotel in Chennai, serving corporate and professional
            guests.
        </p>
        <button onclick="openForm()"
            class="bg-[#009CFF] text-white px-8 py-2 uppercase text-base font-semibold outline-none animated-button victoria-one relative -z-10">
            BOOK NOW
        </button>
    </div>

    <!-- Right Section: About Us -->
    <div class="space-y-6">
        <h2 class="mobile-text-center text-3xl text-[#0D76B8]  font-lora leading-snug mb-4">
            Affordable Business Class Hotels in Medavakkam
        </h2>
        <p class="mobile-text-center ">
            Our Business Class Hotel in Medavakkam offers executives affordable stays with Wi-Fi, workspaces, and quick access
            to IT hubs. As a Budget Business Class Hotel in Medavakkam, we are a preferred choice for business travelers and a trusted
            Professional Stay Hotel in Chennai.
        </p>
        <button onclick="openForm()"
            class="bg-[#009CFF] text-white px-8 py-2  uppercase text-base font-semibold outline-none animated-button victoria-one">
            BOOK NOW
        </button>
        <img src="assets\ashok-nagar-room-3.jpeg" alt="Rohaan Hotels" class="w-full rounded-lg shadow-md" />
    </div>


</div>

<!-- banner section -->
<section class="max-w-[1550px] mx-auto ">
    <div class="w-[400px] md:w-[1300px] mx-auto ">
        <img class="w-[400px] md:w-[1300px] h-[47px] md:h-[150px] object-cover mx-auto md:my-[30px] rounded-[10px] md:rounded-[30px] " src="../assets/ban.jpg" alt="rohaan hotels">
    </div>
</section>

<section class="max-w-[1600px] mx-auto px-6  flex flex-col items-center text-center">
    <div>
        <h2 class="font-lora text-[#0D76B8] text-3xl pt-4 pb-4 ">Business Meeting Hotel Booking in Chennai</h2>
        <p class="max-w-[1000px] mx-auto mt-[10px] md:mt-0">For executives visiting Chennai for meetings or business trips, Rohaan Hotels
            offers the perfect stay. With Business Class Hotels in Medavakkam and Ashok Nagar, we provide comfortable rooms, easy connectivity,
            and business friendly amenities. Make your business meeting hotel booking in Chennai simple, convenient, and value driven with Rohaan
            Hotels.
        </p>
    </div>
</section>


<!-- gallery section  -->
<section id="rooms" class="bg-[#F8F8F8] bg-[url('../assets/gallery-bg.png')]  w-full  mx-auto mt-8 relative -z-10">
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
            <a href="../assets/rohaan-ashok-nagar.jpeg" data-toggle="lightbox" data-gallery="gallery"
                class="col-md-4">
                <img src="../assets/rohaan-ashok-nagar.jpeg" class="img-fluid rounded w-[353px] h-[236px] object-cover">
            </a>
            <a href="../assets/ashok-nagar-room1.jpeg" data-toggle="lightbox" data-gallery="gallery"
                class="col-md-4">
                <img src="../assets/ashok-nagar-room1.jpeg" class="img-fluid rounded w-[353px] h-[236px] object-cover">
            </a>
        </div>
    </div>
</section>

<!-- form heading -->
<div>
    <h2 class="font-lora text-[#0D76B8] text-2xl mt-[30px] text-center mx-auto max-w-[1600px] ">Book Your Room</h2>
</div>
<!-- form -->
<section class="max-w-7xl mx-auto shadow-md md:mb-[30px]   bg-white p-4 " id="calendar">
    <div class="border border-[#009DFE]  px-12 py-6">
        <div>
            <form action="action.php" method="post" id="calendar-form"
                class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end relative calender-form">
                <input type="hidden" name="source" value="calendar">
                <!-- Name -->
                <div class="flex flex-col">
                    <label for="cname" class=" text-sm font-medium">Name</label>
                    <input type="text" name="cname" name="name" required
                        class="bg-transparent border-b border-gray-500 text-black text-sm focus:outline-none focus:border-lime-400 py-2 px-1 placeholder-grey-100"
                        placeholder=" Enter your name">
                </div>


                <!-- Phone -->
                <div class="flex flex-col">
                    <label for="cphone" class=" text-sm font-medium">Phone</label>
                    <input type="tel" id="cphone" name="phone" required
                        class="bg-transparent border-b border-gray-500 text-black text-sm focus:outline-none focus:border-lime-400 py-2 px-1 placeholder-grey-100"
                        placeholder=" Enter your phone number">
                </div>

                <!-- Email -->
                <div class="flex flex-col">
                    <label for="cemail" class=" text-sm font-medium">Email</label>
                    <input type="email" id="cemail" name="email"
                        class="bg-transparent border-b border-gray-500 text-black text-sm focus:outline-none focus:border-lime-400 py-2 px-1 placeholder-grey-100"
                        placeholder=" Enter your email address">
                </div>

                <!-- Location -->
                <div class="flex flex-col">
                    <label for="clocation" class="mb-1 text-sm font-medium">Location</label>
                    <select id="clocation" name="location"
                        class="bg-transparent border-b border-gray-500 text-black text-sm focus:outline-none focus:border-lime-400 py-2 px-1 appearance-none">
                        <option value="Medavakkam" selected>Medavakkam</option>
                        <option value="Ashok nagar">Ashok Nagar</option>
                        <option value="Rohaan Elite Stay (Medavakkam)">Rohaan Elite Stay <br>(Medavakkam)</option>
                    </select>
                </div>
                <br>

                <div
                    class="bg-[#0D76B8] hover:bg-[#004875]  transition-all duration-200 py-2 px-2 md:absolute md:b-0 md:left-[40%] w-[200px]">
                    <button type="submit"
                        class="w-full  border border-white  text-white font-semibold py-2 px-2 focus:outline-none focus:ring-0 outline-none outline-0 outline-offset-0  project-brochure-button">
                        SUBMIT
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>



<?php include("inc/footer.php") ?>