<?php
/* Template Name: İletişim Sayfası */
get_header();
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 no-bosluk">
            <div style="background-image: url(<?php echo get_template_directory_uri() ?>/img/stok2.jpg);" class="sayfa-hero d-flex align-items-center justify-content-center">
                <h1 class="text-center text-white position-relative z-1">Sayfa Bulunamadı</h1>
            </div>
        </div>
    </div>
</div>

<div class="container bosluk">
    <div class="row">
        <div class="col-md-12">
            <div class="sayfa-bulunamadi text-center">
                <span>4</span>
                <img src="<?php echo get_template_directory_uri(); ?>/img/drone.png" alt="">
                <span>4</span>
                <p class="text-center">Aradığınız sayfa bulunamadı. Lütfen ana sayfaya dönün veya iletişim kurun.</p>
                <div class="text-center">
                    <a href="<?php echo home_url(); ?>" class="btn btn-primary">Ana Sayfaya Dön</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>