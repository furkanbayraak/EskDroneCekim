<?php
/* Template Name: Hakkımızda Sayfası */
get_header();
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 no-bosluk">
            <div style="background-image: url(<?php the_field('hk-hero'); ?>);" class="sayfa-hero d-flex align-items-center justify-content-center">
                <h1 class="text-center text-white position-relative z-1">Hakkımızda</h1>
            </div>
        </div>
    </div>
</div>

<div class="container bosluk">
    <div class="row">
        <div class="col-md-6 mt-3">
            <h2 class="display-4 fw-bold mb-4">Hakkımızda</h2>
                    <p class="lead mb-4">Biz gökyüzünden dünyayı farklı bir gözle göstermeyi seven bir ekibiz. Drone teknolojisiyle birlikte, sıradan bir kareyi bile bambaşka bir açıdan yakalayıp hikâye haline getiriyoruz. Amacımız, ister kurumsal bir tanıtım olsun ister özel gün çekimleri, her projede izleyenlere “vay be!” dedirtecek görüntüler sunmak.</p>
                    <p class="mb-4">Her işimizi özenle, profesyonel ekipman ve yaratıcı bakış açısıyla yapıyoruz. Detaylara önem veren yaklaşımımız sayesinde, sadece güzel kareler değil, aynı zamanda duyguyu da yansıtan işler ortaya çıkarıyoruz. Kısacası biz, gökyüzünden gelen bu eşsiz perspektifi herkesle paylaşmak için buradayız.</p>
                    <a href="/portfolyo" class="btn btn-modern">Projelerimizi İncele</a>
        </div>
        <div class="col-md-6 mt-3"><img src="<?php the_field('hk-1'); ?>" alt="Hakkımızda" class="img-fluid rounded shadow"></div>
        <div class="col-md-6 mt-5 pt-5"><img src="<?php the_field('hk-2'); ?>" alt="Hakkımızda" class="img-fluid rounded shadow"></div>
        <div class="col-md-6 mt-5 pt-5">
            <p class="lead mb-4">Biz gökyüzünden dünyayı farklı bir gözle göstermeyi seven bir ekibiz. Drone teknolojisiyle birlikte, sıradan bir kareyi bile bambaşka bir açıdan yakalayıp hikâye haline getiriyoruz. Amacımız, ister kurumsal bir tanıtım olsun ister özel gün çekimleri, her projede izleyenlere “vay be!” dedirtecek görüntüler sunmak.</p>
                    <p class="mb-4">Her işimizi özenle, profesyonel ekipman ve yaratıcı bakış açısıyla yapıyoruz. Detaylara önem veren yaklaşımımız sayesinde, sadece güzel kareler değil, aynı zamanda duyguyu da yansıtan işler ortaya çıkarıyoruz. Kısacası biz, gökyüzünden gelen bu eşsiz perspektifi herkesle paylaşmak için buradayız.</p>
                    <a href="/iletisim" class="btn btn-modern">Bize Ulaşın</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>