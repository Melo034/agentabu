<!-- ====== Script Section Start ====== -->
<!-- WOW.js for Reveal Animations -->
<script src="../Js/wow.min.js"></script>
<!-- jQuery for DOM Manipulation -->
<script>
     new WOW().init();
 </script>
 <!--end--->
<!-- Loader Script -->
<script>
    window.addEventListener('load', function() {
        var loader = document.getElementById('loader');
        loader.style.display = 'none';
    });
</script>

<!-- jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Flowbite Library for UI Components -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

<!-- Footer Component Script -->
<script>
    function footerComponent() {
        return {
            footerNavs: [
                {
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

<!-- Scroll to Top Button Script -->
<script>
    // Get the 'to top' button element by ID
    var toTopButton = document.getElementById("to-top-button");

    // Check if the button exists
    if (toTopButton) {
        // Add more functionality here if needed
    }
</script>

<!-- ====== Script Section End ====== -->
