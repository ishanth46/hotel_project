<!-- header section  -->
<?php
$metaData = [
    "title" => "Single Room Stay Near Medavakkam",
    "description" => "Book a hotel single room near Medavakkam at Rohaan Hotels.
     Affordable single occupancy rooms under 1600 with Wi-Fi, comfort & 24/7 support."
];
include("inc/header.php")
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

<style>
    .animated-button.victoria-three:after {
        background: #004875;
        transform: translateX(-50%) translateY(-50%) rotate(25deg);

    }

    .animated-button.victoria-three {
        color: white;
    }

    .content__inner {
        height: auto;
        margin-bottom: 20px;
    }
</style>

<!-- hero section  -->
<section class="max-w-[1600px] mx-auto z-0 h-[300px] md:h-[600px] bg-[#f7f7f7]">
    <div class="w-full md:w-[1300px] h-[300px] md:h-auto mx-auto bg-brown-400 flex items-center justify-between pt-[0px] md:pt-[20px] px-8 md:px-0">
        <div class="max-w-3xl text-left text-black  md:pl-8 flex flex-col pt-8 md:pt-8">
            <h1 class="font-medium font-playfair  mb-4  text-xl text-[#004875] md:text-[60px] leading-[1.5] md:leading-[1.3]">
                Rohaan Hotels – Your Ideal Single Room Stay Near Medavakkam
            </h1>
            <button onclick="openForm()"
                class="project-brochure-button bg-[#5e5e5e]  rounded-md font-medium w-[100px] md:w-[165px] text-[#004875]  text-sm md:text-base py-2 px-2 md:px-4 md:mt-5 focus:outline-none focus:ring-0 outline-none outline-0 outline-offset-0 animated-button victoria-three  ">
                BOOK NOW
            </button>
        </div>
        <!-- <div class="relative">
            <img src="assets\rohaan-banner-hexagon.png" class="w-[465px] h-[500px] z-[10]" alt="Rohaan-Hotels">
   
        </div> -->
        <div class="relative w-[465px] h-[500px]">
            <!-- Rectangle background -->
            <div class="hexagon-bg-rectangle hidden md:block">
            </div>

            <!-- Hexagon front image -->
            <img src="assets/rohaan-banner-hexagon.png"
                alt="Rohaan-Hotels"
                class="absolute inset-0 z-10 w-full h-full object-contain">
        </div>
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
    <!-- Right:  Hotel Room Image -->
    <div class="w-[350px] h-[330px] md:w-[500px] md:h-[500px]">
        <img src="assets\twin-room.png" alt="Hotel Room - Rohaan Elite Stay"
            class="w-full h-full object-center-right object-cover" />
    </div>
    <!-- Left: Promotional Text -->
    <div class="w-full lg:w-1/2 bg-[#f7f7f7] p-8 lg:p-16">
        <h1 class="mobile-text-center text-xl md:text-3xl text-[#004875] mb-6 leading-tight font-lora">
            Single Room Stay Near Medavakkam - Rohaan Hotels
        </h1>
        <p class="mobile-text-center text-gray-600 mb-6">
            If you’re searching for a single room stay near Medavakkam that feels comfortable, safe, and easy on your budget, you’ve just found it.
            At Rohaan Hotels, we make sure every guest enjoys a relaxed and convenient stay without spending extra.
            <br>
            Whether you’re in Medavakkam for work, studies, or travel, our budget hotel with single rooms in Medavakkam offers everything you need from clean rooms to caring service.
            Each single occupancy room near Medavakkam is designed to give you your own private space that feels just right.
        </p>
    </div>


</div>

<section class="flex flex-col-reverse md:flex-row justify-between w-[320px] items-center md:w-[1300px] mx-auto mt-[40px] mb-[20px] md:mb-[200px]">
    <div class="relative w-[350px] md:w-[850px] mx-auto">
        <img src="assets\shape-line.png" class="w-[50px] h-[300px]  top-[-30px] absolute hidden md:block" alt="shape">
        <div class="pl-[0px] md:pl-[80px]">
            <h2 class="mobile-text-center text-xl md:text-3xl text-[#004875] mb-6 leading-tight font-lora pt-[50px] md:pt-0">A Smart Stay for Solo Travelers and Professionals</h2>
            <p>Finding a single room under 1600 near Medavakkam isn’t always easy. But at Rohaan Hotels, we keep things simple and affordable. Our single room hotels in Medavakkam Chennai
                offer just the right balance of modern comforts, great service, and value for money.</p>
            <br>
            <p>If you’re looking for rooms below 2000 near Medavakkam or a cheap hotel single room near Medavakkam, we’ve got several options that fit your lifestyle.
                Whether it’s a quick work trip or a longer stay, you’ll find comfort and privacy at a price that makes sense.</p>
        </div>
    </div>
    <div class="w-[350px]">
        <img src="assets\bedroom-rohaan.png" class="rounded-xl w-[400px] h-[400px] object-cover" alt="twin-room">
    </div>
</section>

<section class="w-[350px] md:w-[1500px] mx-auto h-[350px] md:h-[450px] bg-[#f7f7f7] flex flex-col md:flex-row justify-between items-center relative mt-[100px]">
    <!-- Left: Images -->
    <div class="flex w-[800px] relative top-[-50px] hidden md:flex">
        <div>
            <img src="assets/twin-room.png" class="w-[473px] h-[564px] object-cover " alt="">
        </div>
        <div class="flex flex-col gap-3 ml-3">
            <img src="assets/twin-bedroom-with-breakfast.png" class="w-[281px] h-[277px] object-cover" alt="twin-room">
            <img src="assets/ashoka-dinning.jpeg" class="w-[281px] h-[277px] object-cover" alt="ashoka-dinning">
        </div>
    </div>

    <!-- Right: Text -->
    <div class="w-[350px] md:w-[680px] mx-auto p-3 md:pr-8">
        <h2 class="mobile-text-center text-xl md:text-3xl text-[#004875] mb-6 leading-tight font-lora">Book Your Stay with Rohaan Hotels</h2>
        <p class="mb-3 mobile-text-center">
            Ready to check in? Book your single room stay near Medavakkam at Rohaan Hotels and experience comfort,
            cleanliness, and care all in one place.
        </p>
        <p class="mb-3 mobile-text-center">
            Looking for rooms below ₹2000 near Medavakkam? Contact our team to find the best deal for your stay.
        </p>
        <p>
            Rohaan Hotels — Affordable comfort, right here in the heart of Medavakkam.
        </p>
    </div>
</section>

<!-- accordian  -->
<div class="accordion">
    <h1>Frequently Asked Questions</h1>
    <div class="accordion-item">
        <input type="checkbox" id="accordion1" name="faq">
        <label for="accordion1" class="accordion-item-title font-semibold"><span class="icon"></span>Are there single room hotels near Medavakkam?</label>
        <div class="accordion-item-desc">Yes Rohaan Hotels offers comfortable and secure single rooms near Medavakkam, ideal for solo travelers.</div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion2" name="faq">
        <label for="accordion2" class="accordion-item-title font-semibold"><span class="icon"></span>Can I book a single room stay near Ashok Nagar?</label>
        <div class="accordion-item-desc">Absolutely, we provide clean and fully furnished single rooms conveniently located near Ashok Nagar.</div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion3" name="faq">
        <label for="accordion3" class="accordion-item-title font-semibold"><span class="icon"></span>What facilities are available in single rooms near Perumbakkam?</label>
        <div class="accordion-item-desc"> All rooms near Perumbakkam include Wi-Fi, attached bathrooms, daily housekeeping, and 24/7 security.</div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion4" name="faq">
        <label for="accordion4" class="accordion-item-title font-semibold"><span class="icon"></span>Are long term stays available at Rohaan Hotels in these areas?</label>
        <div class="accordion-item-desc"> Yes, flexible long term stay options are available near Medavakkam, Ashok Nagar, and Perumbakkam.</div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion5" name="faq" name="faq">
        <label for="accordion5" class="accordion-item-title font-semibold"><span class="icon"></span>How accessible are these hotels to workplaces and transport hubs?</label>
        <div class="accordion-item-desc">Rohaan Hotels in all three locations are close to IT corridors, hospitals, shopping areas, and major transport routes.</div>
    </div>
    <div class="accordion-item">
        <input type="checkbox" id="accordion5" name="faq" name="faq">
        <label for="accordion5" class="accordion-item-title font-semibold"><span class="icon"></span>How can I reserve a single room at Rohaan Hotels?</label>
        <div class="accordion-item-desc"> Guests can book online or contact the hotel directly to reserve single occupancy rooms near Medavakkam, Ashok Nagar, or Perumbakkam.</div>
    </div>
    <div class="accordion-item">
        <input type="checkbox" id="accordion5" name="faq" name="faq">
        <label for="accordion5" class="accordion-item-title font-semibold"><span class="icon"></span>Are these hotels suitable for business travelers and students?</label>
        <div class="accordion-item-desc"> Yes, our single rooms provide a quiet, safe, and convenient environment for both professionals and students.</div>
    </div>
    <div class="accordion-item">
        <input type="checkbox" id="accordion5" name="faq" name="faq">
        <label for="accordion5" class="accordion-item-title font-semibold"><span class="icon"></span> What safety measures are in place at Rohaan Hotels?</label>
        <div class="accordion-item-desc"> All hotels are equipped with 24/7 security, CCTV surveillance, and on-site staff support for guest safety.</div>
    </div>
</div>

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
                <img src="assets\ashoka-dinning.jpeg" alt="Rohaan Hotels">
                <div class="w-[250px] h-[150px] hidden md:block md:w-[250px] bg-[#009CFF] absolute top-[-20px] left-[270px] z-[-1]"></div>
                <div class="w-[250px] h-[150px] md:w-[250px] bg-[#009CFF] absolute bottom-[-20px] left-[-20px] z-[-1]"></div>
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