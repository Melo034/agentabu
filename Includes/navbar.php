<!----Navbar--->
<nav x-data="{ isOpen: false }" class="container max-w-screen-xl p-6 mx-auto lg:flex lg:justify-between lg:items-center">
    <div class="flex items-center justify-between">
        <div class="flex-1 flex justify-between items-center">
            <!-- Logo and Brand Name -->
            <a href="#" class="flex items-center">
                <img class="h-16 w-16 rounded-full border-2 border-teal-800" src="./assets/logo.png" alt="Agent Abu Logo">
                <span style="font-family: 'Elsie Swash Caps', serif; font-weight: 900; font-style: normal;" class="self-center text-3xl font-bold whitespace-nowrap text-[white] ml-2">AGENT ABU</span>
            </a>
        </div>

        <!-- Mobile menu button -->
        <div class="flex lg:hidden">
            <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                <!-- Menu Icon when closed -->
                <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                </svg>
                <!-- Menu Icon when open -->
                <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
    <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-teal-900 shadow-md lg:bg-transparent lg:shadow-none lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center">
        <div class="flex flex-col space-y-4 lg:mt-0 lg:flex-row lg:-px-8 lg:space-y-0">
            <!-- Navigation Links -->
            <a class="text-white transition-colors duration-300 transform lg:mx-8 hover:text-rose-600" href="#">Home</a>
            <a class="text-white transition-colors duration-300 transform lg:mx-8 hover:text-rose-600" href="#about">About</a>
            <a class="text-white transition-colors duration-300 transform lg:mx-8 hover:text-rose-600" href="#services">Services</a>
            <a class="text-white transition-colors duration-300 transform lg:mx-8 hover:text-rose-600" href="#contact">Contact</a>
        </div>

        <!-- Call to Action Button -->
        <a class="block px-5 py-2 mt-4 text-sm text-center text-white capitalize bg-rose-600 rounded-lg lg:mt-0 hover:bg-rose-600 lg:w-auto" href="#">
            Get the App
        </a>
    </div>
</nav>

<!--End of Navbar-->