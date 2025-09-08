<?php
/* Template Name: SSS Sayfası */
get_header();
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 no-bosluk">
            <div style="background-image: url(<?php the_field('sss_hero'); ?>);" class="sayfa-hero d-flex align-items-center justify-content-center">
                <h1 class="text-center text-white position-relative z-1">S.S.S</h1>
            </div>
        </div>
    </div>
</div>

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

<?php get_footer(); ?>