<!-- Footer Section -->
<div x-data="footerComponent()">
    <footer class="px-4 py-5 mx-auto text-white bg-gradient-to-r from-teal-500 to-gray-800 md:px-8">
        <div class="text-center">
            <!-- Footer Heading -->
            <h5 class="mb-2 text-3xl font-bold text-white">Find Properties Fast from Anywhere</h5>
            <!-- Footer Description -->
            <p class="mb-5 text-base text-gray-200 sm:text-lg">Stay up to date and manage your real estate needs with Agent Abu on iOS & Android. Download the app today.</p>
            <!-- App Download Links -->
            <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
                <!-- Mac App Store Link -->
                <a href="#" class="w-48 sm:w-auto bg-gray-800 hover:bg-gray-700 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5">
                    <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="apple" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path fill="currentColor" d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"></path>
                    </svg>
                    <div class="text-left rtl:text-right">
                        <div class="mb-1 text-xs">Download on the</div>
                        <div class="-mt-1 font-sans text-sm font-semibold">Mac App Store</div>
                    </div>
                </a>
                <!-- Google Play Store Link -->
                <a href="#" class="w-48 sm:w-auto bg-gray-800 hover:bg-gray-700 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5">
                    <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google-play" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z"></path>
                    </svg>
                    <div class="text-left rtl:text-right">
                        <div class="mb-1 text-xs">Get in on</div>
                        <div class="-mt-1 font-sans text-sm font-semibold">Google Play</div>
                    </div>
                </a>
            </div>
        </div>
        <!-- Footer Navigation Links -->
        <ul class="items-center justify-center mt-8 space-y-5 sm:flex sm:space-x-4 sm:space-y-0">
            <template x-for="(item, idx) in footerNavs" :key="idx">
                <li style="font-family: 'Roboto', serif; font-weight: 900; font-style: normal;" class="hover:text-rose-600">
                    <a :href="item.href" x-text="item.name"></a>
                </li>
            </template>
        </ul>
        <!-- Footer Bottom Section -->
        <div class="items-center border-t justify-between mt-8 sm:flex">
            <div class="mt-4 sm:mt-0">
                &copy; 2024 MELO All rights reserved.
            </div>
            <div class="mt-6 sm:mt-0">
                <ul class="flex items-center mt-2 space-x-4">
                    <li class="flex items-center justify-center w-10 h-10 wow animate__animated animate__zoomIn">
                        <a href="https://www.facebook.com/melvin.kanu.140?mibextid=LQQJ4d" class="group flex justify-center rounded-md drop-shadow-xl from-gray-800  text-white font-semibold hover:translate-y-3 hover:rounded-[50%] transition-all duration-500 hover:from-[#331029] hover:to-[#310413]">
                            <img src="./assets/icons8-facebook-48.png" alt="" class="w-10 h-10">
                            <span class="absolute opacity-0 group-hover:opacity-100 group-hover:text-gray-900 group-hover:text-xs group-hover:-translate-y-6 duration-700">
                                Facebook
                            </span>
                        </a>
                    </li>

                    <li class="flex items-center justify-center w-10 h-10 wow animate__animated animate__zoomIn">
                        <a href="https://github.com/Melo034" class="group flex justify-center rounded-md drop-shadow-xl from-gray-800  text-white font-semibold hover:translate-y-3 hover:rounded-[50%] transition-all duration-500 hover:from-[#331029] hover:to-[#310413]">
                            <img src="./assets/icons8-github-30.png" alt="" class="w-10 h-10">
                            <span class="absolute opacity-0 group-hover:opacity-100 group-hover:text-gray-900 group-hover:text-xs group-hover:-translate-y-6 duration-700">
                                GitHub
                            </span>
                        </a>
                    </li>

                    <li class="flex items-center justify-center w-10 h-10 wow animate__animated animate__zoomIn">
                        <a href="https://www.instagram.com/melvinllllll" class="group flex justify-center rounded-md drop-shadow-xl from-gray-800  text-white font-semibold hover:translate-y-3 hover:rounded-[50%] transition-all duration-500 hover:from-[#331029] hover:to-[#310413]">
                            <img src="./assets/icons8-instagram-48.png" alt="" class="w-10 h-10">
                            <span class="absolute opacity-0 group-hover:opacity-100 group-hover:text-gray-900 group-hover:text-xs group-hover:-translate-y-6 duration-700">
                                Instagram
                            </span>
                        </a>
                    </li>

                    <li class="flex items-center justify-center w-10 h-10 wow animate__animated animate__zoomIn">
                        <a href="https://x.com/melsougly" class="group flex justify-center rounded-md drop-shadow-xl from-gray-800  text-white font-semibold hover:translate-y-3 hover:rounded-[50%] transition-all duration-500 hover:from-[#331029] hover:to-[#310413]">
                            <img src="./assets/icons8-twitterx-50.png" alt="" class="w-10 h-10">
                            <span class="absolute opacity-0 group-hover:opacity-100 group-hover:text-gray-900 group-hover:text-xs group-hover:-translate-y-6 duration-700">
                                X
                            </span>
                        </a>
                    </li>
                    <li class="flex items-center justify-center w-10 h-10 wow animate__animated animate__zoomIn">
                        <a href="https://wa.me/23234024642" class="group flex justify-center rounded-md drop-shadow-xl from-gray-800  text-white font-semibold hover:translate-y-3 hover:rounded-[50%] transition-all duration-500 hover:from-[#331029] hover:to-[#310413]">
                            <img src="./assets/icons8-whatsapp-48.png" alt="" class="w-10 h-10">
                            <span class="absolute opacity-0 group-hover:opacity-100 group-hover:text-gray-900 group-hover:text-xs group-hover:-translate-y-6 duration-700">
                                Whatsapp
                            </span>
                        </a>
                    </li>
                    <li class="flex items-center justify-center w-10 h-10 wow animate__animated animate__zoomIn">
                        <a href="https://www.linkedin.com/in/joseph-melvin-kanu-997b84210" class="group flex justify-center rounded-md drop-shadow-xl from-gray-800  text-white font-semibold hover:translate-y-3 hover:rounded-[50%] transition-all duration-500 hover:from-[#331029] hover:to-[#310413]">
                            <img src="./assets/icons8-linkedin-48.png" alt="" class="w-10 h-10">
                            <span class="absolute opacity-0 group-hover:opacity-100 group-hover:text-gray-900 group-hover:text-xs group-hover:-translate-y-6 duration-700">
                                Linkedln
                            </span>
                        </a>
                    </li>
                    <li class="flex items-center justify-center w-10 h-10 wow animate__animated animate__zoomIn">
                        <a href="javascript:void()" class="group flex justify-center rounded-md drop-shadow-xl from-gray-800  text-white font-semibold hover:translate-y-3 hover:rounded-[50%] transition-all duration-500 hover:from-[#331029] hover:to-[#310413]">
                            <img src="./assets/icons8-discord-48.png" alt="" class="w-10 h-10">
                            <span class="absolute opacity-0 group-hover:opacity-100 group-hover:text-gray-900 group-hover:text-xs group-hover:-translate-y-6 duration-700">
                                Discord
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>
<!-- ====== Footer Section Ends -->