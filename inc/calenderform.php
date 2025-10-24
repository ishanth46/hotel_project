<!-- calender  -->
<section class="max-w-6xl mx-auto shadow-md  relative top-0 md:top-[-80px] bg-white p-4 mt-8 z-10" id="calendar">
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
                        <option value="Medavakkam" class="text-blue-500 text-base">Medavakkam</option>
                        <option value="Rohaan Elite Stay (Medavakkam)" class="text-blue-500 text-base">Rohaan Elite Stay <br>(Medavakkam)</option>
                        <option value="Ashok Nagar" class="text-blue-500 text-base">Ashok Nagar</option>
                    </select>
                </div>


                <!-- Check In -->
                <div class="flex flex-col">
                    <label for="checkin" class="mb-1 text-sm font-medium">Check In</label>
                    <input type="date" id="checkin" name="checkin"
                        class="bg-transparent border-b border-gray-500 text-black text-sm focus:outline-none focus:border-lime-400 py-2 px-1 placeholder-white"
                        placeholder="mm/dd/yyyy">
                </div>
                <!-- Check Out -->

                <div class="flex flex-col">
                    <label for="checkout" class="mb-1 text-sm font-medium">Check Out</label>
                    <input type="date" id="checkout" name="checkout"
                        class="bg-transparent border-b border-gray-500 text-black text-sm focus:outline-none focus:border-lime-400 py-2 px-1 placeholder-white"
                        placeholder="mm/dd/yyyy">
                </div>

                <!-- new column in form  -->
                <div class="guest-selector ">
                    <p class="mb-1 text-sm font-medium"> Adults & Children</p>
                    <div class="guest-summary">
                        <span class="summary-text flex justify-between">
                            <div>
                                <span id="adults-count-summary">2</span> adults<br>
                            </div>
                            <div>
                                <span>
                                    <p class="text-sm">|</p>
                                </span>
                            </div>
                            <div>
                                <span id="room-count-summary">0</span> Children
                        </span>
                    </div>
                    <span class="arrow-icon">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                            <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                        </svg>
                    </span>
                    <input type="hidden" id="hidden-adults" name="adults" value="2">
                    <input type="hidden" id="hidden-children" name="children" value="0">
                </div>

                <div class="guest-details-dropdown">
                    <div class="counter-row">
                        <div class="label">Adults</div>
                        <!-- <div class="subtext">Ages 18 or above</div> -->
                        <div class="controls">
                            <button type="button" class="control-btn minus" data-target="adults">-</button>
                            <span class="count-value" id="adults-count">2</span>
                            <button type="button" class="control-btn plus" data-target="adults">+</button>
                        </div>
                    </div>

                    <div class="counter-row">
                        <div class="label">Children</div>
                        <!-- <div class="subtext">Ages 0-17</div> -->
                        <div class="controls">
                            <button type="button" class="control-btn minus" data-target="children">-</button>
                            <span class="count-value" id="children-count">0</span>
                            <button type="button" class="control-btn plus" data-target="children">+</button>
                        </div>
                    </div>
                </div>


        </div>
        <!-- new column in form ends  -->
        <!-- <div class="flex flex-col">
            <label for="rooms" class="mb-1 text-sm font-medium">Enter No. of Rooms</label>
            <input type="number" value="01" id="rooms" name="rooms"
                class="bg-transparent border-b border-gray-500 text-black text-sm focus:outline-none focus:border-lime-400 py-2 px-1 placeholder-white"
                placeholder="No. of child">
        </div> -->
        <div class="flex flex-col">
            <label for="rooms" class="mb-1 text-sm font-medium">Enter No. of Rooms</label>

            <div class="relative">
                <select id="rooms" name="rooms"
                    class="bg-transparent border-b border-gray-500 text-black text-sm focus:outline-none focus:border-lime-400 py-2 px-1 appearance-none w-full pr-8">
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="10">More</option>
                </select>

                <span class="absolute right-0 top-1/2 transform -translate-y-1/2 pr-1 pointer-events-none">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor" class="text-gray-500">
                        <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                    </svg>
                </span>
            </div>
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
<!-- calender ends -->