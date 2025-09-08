<?php
/* Template Name: İletişim Sayfası */
get_header();
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 no-bosluk">
            <div style="background-image: url(<?php the_field('it-hero'); ?>);" class="sayfa-hero d-flex align-items-center justify-content-center">
                <h1 class="text-center text-white position-relative z-1">İletişim</h1>
            </div>
        </div>
    </div>
</div>

<div class="container bosluk">
    <div class="row">
        <div class="col-md-6 mt-3">
            <img src="<?php the_field('it-1'); ?>" alt="Hakkımızda" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6 mt-3">
            <div class="it-box">
                <i class="bi bi-telephone"></i>
                <a href="tel:08503030326">0850 303 03 26</a>
            </div>
            <div class="it-box">
                <i class="bi bi-telephone"></i>
                <a href="tel:08503030326">0850 303 03 26</a>
            </div>
            <div class="it-box">
                <i class="bi bi-envelope"></i>
                <a href="mailto:bilgi@revadijital.com">bilgi@revadijital.com</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 no-bosluk">
            <div style="background-image: url(<?php the_field('bar'); ?>);" class="bar">
                <div class="bar-overlay">
                    <h4>Drone Çekim Merkezi</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="contact" class="py-5 bg-light">
        <div class="container bosluk">
            <h2 class="display-4 fw-bold text-center mb-5">İletişime Geçin</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <?php echo do_shortcode('[contact-form-7 id="d1fc10a" title="İletişim Formu"]'); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>