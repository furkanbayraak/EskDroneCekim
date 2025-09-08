<?php
/* Template Name: Portfolyo Sayfası */
get_header();
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 no-bosluk">
            <div style="background-image: url(<?php the_field('pf-hero'); ?>);" class="sayfa-hero d-flex align-items-center justify-content-center">
                <h1 class="text-center text-white position-relative z-1">Portfolyo</h1>
            </div>
        </div>
    </div>
</div>

<section id="portfolio" class="py-5 bg-light">
        <div class="container">
            <h2 class="display-4 fw-bold text-center mb-5">Portfolyo</h2>
            <div class="row g-4">
                <?php
                $args = array(
                    'post_type'      => 'post', // normal yazılar
                    //'posts_per_page' => 5,      // kaç tane yazı gözüksün
                    'orderby'        => 'date', // tarihe göre sırala
                    'order'          => 'DESC'  // en yeniler başta
                );

                $query = new WP_Query($args);
                ?>

                <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item">
                        <a href="<?php the_field('yt-post'); ?>" data-fancybox="portfolio" data-caption="<?php the_title(); ?>">
                            <div class="portfolio-overlay">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="Eskişehir Drone Çekim" class="img-fluid">
                                <?php endif; ?>
                                <div class="overlay-content">
                                    <i class="fas fa-play-circle fa-3x text-white"></i>
                                    <h4 class="text-white mt-3"><?php the_title(); ?></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p>İçerik bulunamadı.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>