 <!-- ====== Script Section Start -->
 <script src="../Js/wow.min.js"></script>
 <script>
     new WOW().init();
 </script>
 <script>
     window.addEventListener('load', function() {
         var loader = document.getElementById('loader');
         loader.style.display = 'none';
     });
 </script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
 <script>
     function footerComponent() {
         return {
             footerNavs: [{
                     href: "index.php#about",
                     name: "About",
                 },
                 {
                     href: "index.php#services",
                     name: "Services",
                 },
                 {
                     href: "index.php#contact",
                     name: "Contact",
                 },
             ],
         };
     }
 </script>
 <script>
     /* Top button*/
     // Get the 'to top' button element by ID
     var toTopButton = document.getElementById("to-top-button");

     // Check if the button exists
     if (toTopButton) {

         // On scroll event, toggle button visibility based on scroll position
         window.onscroll = function() {
             if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
                 toTopButton.classList.remove("hidden");
             } else {
                 toTopButton.classList.add("hidden");
             }
         };

         // Function to scroll to the top of the page smoothly
         window.goToTop = function() {
             window.scrollTo({
                 top: 0,
                 behavior: 'smooth'
             });
         };
     }
     /* End Top button*/
 </script>
 <!-- ====== Script Section Ends-->