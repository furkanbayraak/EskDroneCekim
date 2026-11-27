# Eskişehir Drone Çekimi – WordPress Teması

Eskişehir'de drone çekimi hizmetini tanıtan web sitesi için özel geliştirilmiş WordPress teması.

## Sayfalar

| Şablon | Sayfa |
|---|---|
| `index.php` | Ana sayfa (hero slider, hakkımızda özeti, hizmetler) |
| `page-hakkimizda.php` | Hakkımızda |
| `page-portfolyo.php` | Portfolyo (Fancybox galeri) |
| `page-sss.php` | Sıkça sorulan sorular |
| `page-iletisim.php` | İletişim |
| `404.php` | Bulunamadı sayfası |

## Teknolojiler

WordPress 5.0+ · PHP 7.0+ · Bootstrap 5.3 · Bootstrap Icons · Font Awesome 6 · Fancybox 5

Menü, Bootstrap uyumlu `class-wp-bootstrap-navwalker.php` ile oluşturulur. CSS/JS kütüphaneleri CDN üzerinden `functions.php` içinde yüklenir.

## Kurulum

1. Bu repoyu zip olarak indirin (GitHub → **Code → Download ZIP**) veya klonlayın.
2. Klasörü WordPress'te `wp-content/themes/eskdrone` altına koyun.
3. **Görünüm → Temalar** bölümünden temayı etkinleştirin.
4. Hakkımızda, Portfolyo, SSS ve İletişim sayfalarını oluşturun. `page-<slug>.php` şablonları sayfa kısa adına (slug) göre otomatik eşleşir: `hakkimizda`, `portfolyo`, `sss`, `iletisim`.
5. **Görünüm → Menüler** bölümünden ana menüyü atayın.

## Görseller

`img/` klasöründeki stok görseller web için küçültülmüştür (1920 px genişlik). Tam çözünürlüklü orijinaller repoda tutulmaz.
