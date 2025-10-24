<!-- header section  -->
<?php include("inc/header.php") ?>

<!-- banner section  -->
<section
    class="relative max-w-[1600px] mx-auto bg-[url('../assets/about-banner.jpg')] h-[305px] md:h-[412px] bg-cover bg-center px-8 md:px-12 py-[5px] md:py-[120px]">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-80"></div>
    <img src="assets/bottom-shape.png" class="absolute top-[73%] left-[0%] opacity-90" alt="bottom-shape">

    <!-- Content -->
    <div class="relative z-10 text-white">
        <h1 class="text-5xl text-center font-lora">About Us</h1>
        <ul class="flex items-center justify-center mt-4 gap-4 ">
            <a href="index.php" class="hover:no-underline hover:text-blue-600">
                <li> Home</li>
            </a>
            <li> > </li>
              <a href="about-new.php" class="hover:no-underline hover:text-blue-600">
                <li> About us</li>
            </a>
        </ul>
    </div>
</section>



<!-- footer section  -->
<?php include("inc/footer.php") ?>