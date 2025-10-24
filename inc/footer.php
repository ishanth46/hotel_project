<!-- footer section  -->
<section class="bg-[#F3FAFB] w-full mx-auto ">
    <div class="max-w-7xl mx-auto p-8 flex flex-col md:flex-row space-y-8  justify-between">
        <div class="w-80 flex flex-col gap-8">
            <img src="../assets/rohanlogo.png" class="w-[160px] h-[65px] mt-2" alt="Rohaan-Hotels">
            <p>Experience business-class comfort at Rohaan Hotels, Chennai – Medavakkam & Ashok Nagar. Modern rooms,
                seamless service & exclusive corporate deals. Book now for a smart, professional stay!</p>
            <ul class="flex  justify-between w-[150px]">
                <li><a href="https://www.facebook.com/rohaanhotels/" target="_blank"><img src="../assets/facebook.png" alt="facebook"></a></li>
                <!-- <li><img src="../assets/twitter-x.png" alt="twitter"></li> -->
                <li><a href="https://www.instagram.com/rohaanhotels/" target="_blank"><img src="../assets/instagram.png"
                            alt="instagram"></a></li>
                <li><a href="https://www.linkedin.com/in/rohaan-hotels" target="_blank"><img
                            src="../assets/linkedin.png" alt="linkedin"></a></li>

                <li><a href="https://www.youtube.com/@RohaanHotels" target="_blank">
                        <i class="fa-brands fa-youtube" style="color: #2e2e2e;"></i></a></li>
            </ul>
        </div>
        <div>
            <h3 class="font-bold text-xl mb-2">Quick Links</h3>
            <ul class="flex flex-col justify-between space-y-2 text-left m-0">
                <li><a href="#" class="no-underline hover:no-underline">Home</a></li>
                <li><a href="#about" class="no-underline hover:no-underline">About us</a></li>
                <li><a href="#locations" class="no-underline hover:no-underline">Locations</a></li>
                <li><a href="#rooms" class="no-underline hover:no-underline">Gallery</a></li>
                <li><a href="#contactus" class="no-underline hover:no-underline">Contact us</a></li>
            </ul>
        </div>
        <div>
            <h3 class="font-bold text-xl mb-2">Our Locations</h3>
            <ul class="flex flex-col justify-between space-y-2 text-left m-0">
                <li><a href="hotels-in-medavakkam-business-class-hotel-in-medavakkam-chennai.php" target="_blank"
                        class="no-underline hover:no-underline">Medavakkam</a></li>
                <li><a href="hotels-in-ashok-nagar-business-class-hotel-in-chennai.php" target="_blank"
                        class="no-underline hover:no-underline">Ashok Nagar</a></li>
                <li><a href="rohaan-elite-stays-medavakkam-perumbakkam.php" target="_blank"
                        class="no-underline hover:no-underline">Rohaan Elite Stay(Medavakkam)</a></li>

            </ul>
        </div>
        <div class="w-80">
            <h3 class="font-bold text-xl">Contact us</h3>
            <h3 class="font-semibold text-md mt-2">Chennai</h3>
            <div class="flex flex-row md:flex-col space-x-2 mt-3 ">
                <a href="https://maps.app.goo.gl/RPvyeZZB6sSaKvuGA" target="_blank"
                    class="no-underline hover:no-underline">
                    <div class="w-[20px]">
                        <img src="../assets/location-icon.png" class="w-[20px] h-[20px] mt-2" alt="location">
                    </div>
                    <div>
                        <p>Plot No.4, Radha Nagar 4th Main Rd, Radha Nagar, Medavakkam, Chennai, Tamil Nadu 600100</p>
                </a>
            </div>

        </div>
        <div class="flex flex-row md:flex-col space-x-2 mt-3 items-center">
            <img src="../assets/phone-icon.png" class="w-[18px] h-[18px]" alt="phone-icon">
            <!-- <p>+91 95970 88298</p> -->
            <p><a href="tel:+919677712089" class="no-underline hover:no-underline">+91 96777 12089</a></p>
        </div>
        <div class="flex flex-row md:flex-col space-x-2 mt-3  ">
            <img src="../assets/mail-icon.png" class="w-[18px] h-[18px] mt-2" alt="mail-icon">
            <p>
                <a href="mailto:rohaanhotels@gmail.com" class="no-underline hover:no-underline">
                    rohaanhotels@gmail.com
                </a>
            </p>
        </div>
    </div>
    </div>
    <div class="border-t border-gray-300 ">
        <p class="text-center font-lora text-base pt-4 pb-4">Copyright 2025 Rohaan Hotels, All Rights Reserved</p>
    </div>
</section>

<!-- Back to Top Button -->
<button id="backToTop"
    class="hidden fixed bottom-6 right-6 bg-[#009CFF] text-white p-3 rounded-full shadow-lg hover:bg-[#004875] transition-all duration-300 ease-in-out transform hover:scale-110 z-50">
    <!-- Heroicon Arrow Up -->
    <svg xmlns="http://www.w3.org/2000/svg"
        fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
        class="w-4 h-4">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
    </svg>
</button>



<script>
    //  popup form 
    function openForm() {
        document.getElementById("popupForm").style.display = "block";
        document.body.classList.add('overlay-active');

    }

    function closeForm() {
        document.getElementById("popupForm").style.display = "none";
        document.body.classList.remove('overlay-active');

    }

    function validateNumber() {
        const number = document.getElementById("number").value;

        if (number.length !== 10) {
            alert("Please enter a valid 10-digit number.");
            return false; // form won't submit
        }

        return true; // form will submit
    }


    // responsive js 
    function toggleMenu() {
        const menu = document.getElementById("mobileMenu");
        const barsIcon = document.getElementById("bars");
        const closeIcon = document.getElementById("close");

        menu.classList.toggle("hidden");
        barsIcon.classList.toggle("hidden");
        closeIcon.classList.toggle("hidden");
    }


    // <!-- slider js  -->
    document.addEventListener("DOMContentLoaded", () => {
        const sliders = document.querySelectorAll(".booking-slider");

        if (!sliders.length) return;

        const list = [];

        sliders.forEach((element) => {
            const [slider, prevEl, nextEl, pagination] = [
                element.querySelector(".swiper"),
                element.querySelector(".slider-nav__item_prev"),
                element.querySelector(".slider-nav__item_next"),
                element.querySelector(".slider-pagination")
            ];

            list.push(
                new Swiper(slider, {
                    initialSlide: 1,
                    slidesPerView: 1.15,
                    centeredSlides: true,
                    spaceBetween: 20,
                    slidesOffsetBefore: 20,
                    slidesOffsetAfter: 20,
                    speed: 600,
                    // loop: true,
                    observer: true,
                    watchOverflow: true,
                    watchSlidesProgress: true,
                    navigation: {
                        nextEl,
                        prevEl,
                        disabledClass: "disabled"
                    },
                    pagination: {
                        el: pagination,
                        type: "bullets",
                        modifierClass: "slider-pagination",
                        bulletClass: "slider-pagination__item",
                        bulletActiveClass: "active",
                        clickable: true
                    },
                    breakpoints: {
                        575: {
                            slidesPerView: 1.5
                        },
                        992: {
                            slidesPerView: 2,
                            slidesOffsetBefore: 0,
                            slidesOffsetAfter: 0
                        },
                        1366: {
                            slidesPerView: 3,
                            spaceBetween: 40,
                            slidesOffsetBefore: 0,
                            slidesOffsetAfter: 0
                        }
                    }
                })
            );
        });
    });


    // gallery section js 
    $(document).on("click", '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });

    // tabs js 

    $(document).ready(function() {



        var numItems = $('li.fancyTab').length;


        if (numItems == 12) {
            $("li.fancyTab").width('8.3%');
        }
        if (numItems == 11) {
            $("li.fancyTab").width('9%');
        }
        if (numItems == 10) {
            $("li.fancyTab").width('10%');
        }
        if (numItems == 9) {
            $("li.fancyTab").width('11.1%');
        }
        if (numItems == 8) {
            $("li.fancyTab").width('12.5%');
        }
        if (numItems == 7) {
            $("li.fancyTab").width('14.2%');
        }
        if (numItems == 6) {
            $("li.fancyTab").width('16.666666666666667%');
        }
        if (numItems == 5) {
            $("li.fancyTab").width('20%');
        }
        if (numItems == 4) {
            $("li.fancyTab").width('25%');
        }
        if (numItems == 3) {
            $("li.fancyTab").width('33.3%');
        }
        if (numItems == 2) {
            $("li.fancyTab").width('50%');
        }




    });

    $(window).load(function() {

        $('.fancyTabs').each(function() {

            var highestBox = 0;
            $('.fancyTab a', this).each(function() {

                if ($(this).height() > highestBox)
                    highestBox = $(this).height();
            });

            $('.fancyTab a', this).height(highestBox);

        });
    });
</script>

<!-- map -->
<script>
    const DOM = {
        tabsNav: document.querySelector('.tabs__nav'),
        tabsNavItems: document.querySelectorAll('.tabs__nav-item'),
        panels: document.querySelectorAll('.tabs__panel')
    };

    //set active nav element
    const setActiveItem = elem => {

        DOM.tabsNavItems.forEach(el => {

            el.classList.remove('js-active');

        });

        elem.classList.add('js-active');

    };

    //find active nav element
    const findActiveItem = () => {

        let activeIndex = 0;

        for (let i = 0; i < DOM.tabsNavItems.length; i++) {

            if (DOM.tabsNavItems[i].classList.contains('js-active')) {
                activeIndex = i;
                break;
            };

        };

        return activeIndex;

    };

    //find active nav elements parameters: left coord, width
    const findActiveItemParams = (activeItemIndex) => {

        const activeTab = DOM.tabsNavItems[activeItemIndex];

        //width of elem
        const activeItemWidth = activeTab.offsetWidth - 1;

        //left coord in the tab navigation
        const activeItemOffset_left = activeTab.offsetLeft;

        return [activeItemWidth, activeItemOffset_left];

    };

    //appending decoration block to an active nav element
    const appendDecorationNav = () => {

        //creating decoration element
        let decorationElem = document.createElement('div');

        decorationElem.classList.add('tabs__nav-decoration');
        decorationElem.classList.add('js-decoration');

        //appending decoration element to navigation
        DOM.tabsNav.append(decorationElem);

        //appending styles to decoration element
        return decorationElem;
    };

    //appending styles to decoration nav element
    const styleDecorElem = (elem, decorWidth, decorOffset) => {
        elem.style.width = `${decorWidth}px`;
        elem.style.transform = `translateX(${decorOffset}px)`;
    };

    //find active panel
    const findActivePanel = index => {

        return DOM.panels[index];

    };

    //set active panel class
    const setActivePanel = index => {

        DOM.panels.forEach(el => {

            el.classList.remove('js-active');

        });

        DOM.panels[index].classList.add('js-active');

    };

    //onload function
    window.addEventListener('load', () => {

        //find active nav item
        const activeItemIndex = findActiveItem();

        //find active nav item params
        const [decorWidth, decorOffset] = findActiveItemParams(activeItemIndex);

        //appending decoration element to an active elem
        const decorElem = appendDecorationNav();

        //setting styles to the decoration elem
        styleDecorElem(decorElem, decorWidth, decorOffset);

        //find active panel
        findActivePanel(activeItemIndex);

        //set active panel
        setActivePanel(activeItemIndex);
    });

    //click nav item function
    DOM.tabsNav.addEventListener('click', e => {

        const navElemClass = 'tabs__nav-item';

        //check if we click on a nav item
        if (e.target.classList.contains(navElemClass)) {

            const clickedTab = e.target;

            const activeItemIndex = Array.from(DOM.tabsNavItems).indexOf(clickedTab);

            //set active nav item
            setActiveItem(clickedTab);

            //find active nav item
            const activeItem = findActiveItem();

            //find active nav item params
            const [decorWidth, decorOffset] = findActiveItemParams(activeItem);

            //setting styles to the decoration elem
            const decorElem = document.querySelector('.js-decoration');

            styleDecorElem(decorElem, decorWidth, decorOffset);

            //find active panel
            findActivePanel(activeItemIndex);

            //set active panel
            setActivePanel(activeItemIndex);

        }
    });
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WKGZHPNENQ"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-WKGZHPNENQ');
</script>

<script>
    const backToTop = document.getElementById("backToTop");

    // Show button when scrolling down
    //   window.addEventListener("scroll", () => {
    //     if (window.scrollY > 300) {
    //       backToTop.classList.remove("hidden");
    //     } else {
    //       backToTop.classList.add("hidden");
    //     }
    //   });

    // Scroll to top smoothly
    //   backToTop.addEventListener("click", () => {
    //     window.scrollTo({ top: 0, behavior: "smooth" });
    //   });
</script>


<script>
    // new form input js 
    document.addEventListener('DOMContentLoaded', () => {
        const summaryBar = document.querySelector('.guest-summary');
        const dropdown = document.querySelector('.guest-details-dropdown');
        const controlButtons = document.querySelectorAll('.control-btn');

        // State object to hold current values
        const counts = {
            children: 0,
            adults: 2,
        };

        // Function to update the displayed numbers AND the hidden inputs
        function updateDOM(target) {
            // 1. Update the counter in the dropdown (Span)
            document.getElementById(`${target}-count`).textContent = counts[target];

            // 2. Update the summary text (Span)
            if (target === 'adults') {
                document.getElementById('adults-count-summary').textContent = counts.adults;
            } else if (target === 'children') {
                // Assuming your summary shows children count with id room-count-summary
                document.getElementById('room-count-summary').textContent = counts.children;
            }

            // 3. 🌟 CRITICAL: Update the value of the hidden input 🌟
            // This assumes you have hidden inputs like <input type="hidden" id="hidden-adults" name="adults">
            const hiddenInput = document.getElementById(`hidden-${target}`);
            if (hiddenInput) {
                hiddenInput.value = counts[target];
            }
        }

        // --- Toggling the Dropdown ---
        summaryBar.addEventListener('click', () => {
            // Simple toggle for demonstration
            const isVisible = dropdown.style.display === 'block';
            dropdown.style.display = isVisible ? 'none' : 'block';
        });

        // --- Counter Logic ---
        controlButtons.forEach(button => {
            button.addEventListener('click', (event) => {
                // Use currentTarget to ensure we get the button's data-target, not a child element's
                const target = event.currentTarget.dataset.target;
                const action = event.currentTarget.classList.contains('plus') ? 1 : -1;

                if (counts[target] + action >= 0) {
                    // Apply specific minimums
                    // NOTE: The 'children' minimum check looks incorrect here:
                    // if (target === 'children' && counts.room + action < 1) return;
                    // I've fixed it below to check if 'target' is 'adults' (min 1 adult)

                    if (target === 'adults' && counts.adults + action < 1) return;

                    counts[target] += action;
                    updateDOM(target);
                }
            });
        });

        // Initial update to ensure summary matches initial counts (and sets hidden input values)
        updateDOM('adults');
        updateDOM('children');
    });
</script>