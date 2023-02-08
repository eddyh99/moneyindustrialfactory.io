</main>
<!-- End #main -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
</div>
<!-- End Wrapper -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div id="credit">
        <p><strong><span>Money Industrial Factory</span></strong></p>
        <p>
            <strong>
                Jl. Bypass Ngurah Rai No. 21A, Benoa, square Bld 2nd floor, Kedongan, Jimbaran, Kuta-Bali
            </strong>
        </p>
        <p>
            (Head Holding PBS Online LLC 16192 Coastal Highway, Lewes Delaware 19958-9776)
        </p>
    </div>
</footer>
<!-- End Footer -->
</body>
<!--   Core JS Files   -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-27VLNYR010"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'G-27VLNYR010');
</script>

<script src="<?=base_url()?>assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/js/jquery-ui.min.js" type="text/javascript"></script>

<!-- Vendor JS Files -->
<script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="<?=base_url()?>assets/vendor/aos/aos.js"></script>
<script src="<?=base_url()?>assets/vendor/php-email-form/validate.js"></script>
<script src="<?=base_url()?>assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?=base_url()?>assets/vendor/purecounter/purecounter.js"></script>
<script src="<?=base_url()?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?=base_url()?>assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>



<!-- Template Main JS File -->
<script src="<?=base_url()?>assets/js/main.js"></script>

<script>
$(document).ready(function() {
    // menu click event
    $('.menuBtn').click(function() {
        $(this).toggleClass('act');
        if ($(this).hasClass('act')) {
            $('.mainMenu').addClass('act');
        } else {
            $('.mainMenu').removeClass('act');
        }
    });

    $('.selectpicker').selectpicker();

});

$('.selectpicker').on("change", function(e) {
    e.preventDefault();
    window.location = $(this).val();
})


$(".scrollto").on("click", function() {
    $(".menuBtn").toggleClass('act');
    if ($(".menuBtn").hasClass('act')) {
        $('.mainMenu').addClass('act');
    } else {
        $('.mainMenu').removeClass('act');
    }
})
</script>
<?php 
if (isset($extra)){
	$this->load->view($extra);
}
?>

</html>