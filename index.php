<?php get_header(); ?>
<!-- Hero Slider -->
    <section id="home" class="hero-slider">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="hero-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/stok1.jpg');">
                        <div class="hero-content">
                            <h1 class="display-2 fw-bold text-white mb-4">Modern Drone Çekimi</h1>
                            <p class="lead text-white mb-5">Yenilikçi ve etkileyici video çözümleri</p>
                            <a href="/hakkimizda" class="btn btn-modern btn-lg">Keşfet</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="hero-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/stok2.jpg');">
                        <div class="hero-content">
                            <h1 class="display-2 fw-bold text-white mb-4">Yaratıcı Çözümler</h1>
                            <p class="lead text-white mb-5">Markanızı dijitalde öne çıkarın</p>
                            <a href="/portfolyo" class="btn btn-modern btn-lg">Portfolyo</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="hero-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/stok3.jpg');">
                        <div class="hero-content">
                            <h1 class="display-2 fw-bold text-white mb-4">Profesyonel Hizmet</h1>
                            <p class="lead text-white mb-5">Hayallerinizi gerçeğe dönüştürüyoruz</p>
                            <a href="/iletisim" class="btn btn-modern btn-lg">İletişime Geç</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="display-4 fw-bold mb-4">Hakkımızda</h2>
                    <p class="lead mb-4">Biz gökyüzünden dünyayı farklı bir gözle göstermeyi seven bir ekibiz. Drone teknolojisiyle birlikte, sıradan bir kareyi bile bambaşka bir açıdan yakalayıp hikâye haline getiriyoruz. Amacımız, ister kurumsal bir tanıtım olsun ister özel gün çekimleri, her projede izleyenlere “vay be!” dedirtecek görüntüler sunmak.</p>
                    <p class="mb-4">Her işimizi özenle, profesyonel ekipman ve yaratıcı bakış açısıyla yapıyoruz. Detaylara önem veren yaklaşımımız sayesinde, sadece güzel kareler değil, aynı zamanda duyguyu da yansıtan işler ortaya çıkarıyoruz. Kısacası biz, gökyüzünden gelen bu eşsiz perspektifi herkesle paylaşmak için buradayız.</p>
                    <a href="/hakkimizda" class="btn btn-modern">Bizi Tanı</a>
                </div>
                <div class="col-lg-6">
                    
                        <img src="<?php echo get_template_directory_uri(); ?>/img/stok2.jpg" alt="Hakkımızda" class="img-fluid rounded shadow">
                    
                </div>
            </div>
        </div>
        <hr class="modern-hr">
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-5 bg-light">
        <div class="container">
            <h2 class="display-4 fw-bold text-center mb-5">Portfolyo</h2>
            <div class="row g-4">
                <div class="row g-4">
                <?php
                $args = array(
                    'post_type'      => 'post', // normal yazılar
                    'posts_per_page' => 6,      // kaç tane yazı gözüksün
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
            <div style="text-align: center;" class="col-md-12 mt-3">
                <a href="/portolyo" class="btn btn-modern">Tümünü Gör</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-5">
        <div class="container">
            <h2 class="display-4 fw-bold text-center mb-5">Sıkça Sorulan Sorular</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion accordion-modern" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    <i class="fas fa-question-circle me-3"></i>
                                    Hizmetlerinizin kapsamı nedir?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Bizim hizmetlerimiz, sadece havadan çekim yapmakla sınırlı değil. Etkinlikler, tanıtım filmleri, emlak projeleri, fabrika ve tesis çekimleri, düğün ve özel gün videoları gibi birçok alanda profesyonel drone çekimleri sunuyoruz. Ayrıca çekimleri sadece ham görüntü olarak bırakmıyoruz; montaj, renk düzenleme ve kurgu süreçlerini de yaparak anahtar teslim bir içerik sağlıyoruz.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    <i class="fas fa-question-circle me-3"></i>
                                    Proje süreci nasıl işler?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Önce ihtiyacını dinliyoruz, sonra planlama yapıp çekimimizi gerçekleştiriyoruz. Ardından kurgu ve düzenleme aşamasını tamamlayıp projeyi hazır şekilde sana teslim ediyoruz.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    <i class="fas fa-question-circle me-3"></i>
                                    Fiyatlandırma nasıl yapılıyor?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Fiyatlandırma, çekimin yapılacağı yer, süresi, kullanılacak ekipman ve istenen ek hizmetlere göre belirleniyor. İhtiyacına göre net bir teklif sunuyoruz.

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    <i class="fas fa-question-circle me-3"></i>
                                    Teslim süresi ne kadar?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Genelde çekimden sonraki 3-5 gün içinde teslim ediyoruz. Daha acil işler için ise öncelik verip daha kısa sürede hazırlayabiliyoruz.

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                    <i class="fas fa-question-circle me-3"></i>
                                    Satış sonrası destek sağlıyor musunuz?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Evet, teslimden sonra da desteğimiz devam ediyor. Küçük revizyon taleplerini karşılıyor, gerektiğinde farklı formatlarda dosya hazırlayıp tekrar iletiyoruz.

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="modern-hr">
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <h2 class="display-4 fw-bold text-center mb-5">İletişime Geçin</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!--<form class="contact-form" id="contactForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-label fw-bold">Adınız Soyadınız</label>
                                    <input type="text" class="form-control form-control-modern" id="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="form-label fw-bold">E-posta Adresiniz</label>
                                    <input type="email" class="form-control form-control-modern" id="email" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="subject" class="form-label fw-bold">Konu</label>
                                    <input type="text" class="form-control form-control-modern" id="subject" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="message" class="form-label fw-bold">Mesajınız</label>
                                    <textarea class="form-control form-control-modern" id="message" rows="5" required></textarea>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-modern btn-lg px-5">
                                    <i class="fas fa-paper-plane me-2"></i> Teklif Al
                                </button>
                            </div>
                        </div>
                    </form> --->
                    <?php echo do_shortcode('[contact-form-7 id="d1fc10a" title="İletişim Formu"]'); ?>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>