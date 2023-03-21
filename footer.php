<!-- recognized_img_div -->
<section class=" container section_mt">
    <div class="section_title_div">
        <h3>Recognized<span> by</span></h3>
    </div>
    <div class="recognized_img_div">
        <img src="img/r1.png" alt="icon">
        <img src="img/r2.png" alt="icon">
        <img src="img/r3.png" alt="icon">
        <img src="img/r4.png" alt="icon">
        <img src="img/r5.png" alt="icon">
    </div>
</section>
<!-- recognized_img_div -->
<!-- recognized_img_div -->
<section class=" container section_mt">
    <div class="section_title_div">
        <h3>In Synergy with <span> Government Initiatives</span></h3>
    </div>
    <div class="recognized_img_div2">
        <img src="img/g1.png" alt="icon">
        <img src="img/g2.png" alt="icon">
        <img src="img/g3.png" alt="icon">
        <img src="img/g4.png" alt="icon">
    </div>
</section>
<!-- recognized_img_div -->
<!-- footer -->
<footer class="footer">
    <div class="row g-4">
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12">
            <img class="footer_logo"
                src="https://demo.vehica.com/wp-content/uploads/2021/09/vehica-logo-white-retina-165x29.png" alt="logo">
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="footer_link">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="footer_link_inner">
                            <a href="#">about us </a>
                        </div>
                        <div class="footer_link_inner">
                            <a href="#">contact us </a>
                        </div>
                        <div class="footer_link_inner">
                            <a href="#"> EV-Chargers</a>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="footer_link_inner">
                            <a href="#">EV-Charger-Franchise</a>
                        </div>
                        <div class="footer_link_inner">
                            <a href="#"> Smart IOT & Telematics </a>
                        </div>
                        <div class="footer_link_inner">
                            <a href="#">Privacy policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="footer_text_div">
                <p>
                    Award-winning, family owned dealership of new and pre-owned vehicles with several
                    locations across the city. Lowest prices and the best customer service guaranteed.</p>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
            <div class="footer_contact_div">
                <a class="number" href="tel:+4733378901"> <span>+91</span> 1234567890</a>
                <div>
                    <a class="email" href="mailto:support@vehica.com">
                        support@vehica.com </a>
                </div>
                <p>West 12th Street
                    <br>
                    New York, NY, USA
                </p>
            </div>
        </div>
        <div class="col-12 footer_copy_top">
            <hr>
            <div class="footer_copy">
                <p>Copyright © 2023. All rights reserved</p>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->
<a href="https://wa.me/919013030173" class="float" target="_blank">
    <i class="fab fa-whatsapp my-float"></i>
</a>
<a id="button"></a>
<!-- script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        once: true,
        disable: false,
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
<script src="my.js"></script>
<script src="tilt.js"></script>
<script>
    // Get the button
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<!-- script end -->
</body>

</html>