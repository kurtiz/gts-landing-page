<?= $this->extend("layouts/base"); ?>
<!-- NOTE This keeps this page in the "content" placeholder in the layouts/base.php file  -->
<?= $this->section("content"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>GT Solutions</title>
    <meta property="og:image" content="<?= base_url(); ?>/public/images/preview.png"/>
    <meta name="description"
          content="At GTS, we are more than just a technology company. We are a catalyst for growth and innovation,
          empowering businesses to thrive in the digital era.">
    <meta name="keywords"
          content="Technology solutions web development mobile app development graphic design software development UI/UX
           design digital marketing social media management branding IT services e-commerce solutions SEO optimization
           content marketing cross-platform app development game development web hosting domain registration logo
           design user experience technology training innovation responsive websites cloud computing data analytics
           artificial intelligence cybersecurity custom software solutions social media marketing print marketing
           online presence mobile-friendly design creative solutions user interface design digital advertising market
           research data-driven strategies CRM systems business automation technology consulting API integration
           website maintenance digital transformation startup support technology empowerment augmented reality virtual
           reality data visualization innovation-driven growth tech-enabled solutions cutting-edge technology"/>
    <link rel="icon" href="<?= base_url() ?>/public/favicon.ico">
    <link href="<?= base_url() ?>/public/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>/public/vendor/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/public/vendor/dist/assets/owl.theme.default.min.css" rel="stylesheet">
</head>
<body
    x-data="{
        'page': 'home',
        'darkMode': true,
        'stickyMenu': false,
        'navigationOpen': false,
        'scrollTop': false
    }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))
    "
    :class="{'b eh': darkMode === true}"
>
<!-- ===== Header Start ===== -->
<?= $this->include("components/header") ?>

<!-- ===== Header End ===== -->
<main>
    <!-- ===== Hero Start ===== -->
    <?= $this->include("components/hero") ?>
    <!-- ===== Hero End ===== -->

    <!-- ===== About Us Start ===== -->
    <?= $this->include("components/features") ?>
    <!-- ===== About Us End ===== -->

    <!-- ===== About Start ===== -->
    <?= $this->include("components/about") ?>
    <!-- ===== About End ===== -->

    <!-- ===== Team Start ===== -->
<!--    --><?php //= $this->include("components/team") ?>
    <!-- ===== Team End ===== -->

    <!-- ===== Services Start ===== -->
    <?= $this->include("components/services") ?>
    <!-- ===== Services End ===== -->

    <!-- ===== Pricing Table Start ===== -->
    <!--    --><?php //= $this->include("components/pricing")?>
    <!-- ===== Pricing Table End ===== -->

    <!-- ===== Projects Start ===== -->
    <?= $this->include("components/portfolio") ?>
    <!-- ===== Projects End ===== -->

    <!-- ===== Testimonials Start ===== -->
    <?= $this->include("components/brands") ?>
    <!-- ===== Testimonials End ===== -->

    <!-- ===== Testimonials Start ===== -->
    <?= $this->include("components/testimonials") ?>
    <!-- ===== Testimonials End ===== -->

    <!-- ===== Counter Start ===== -->
    <!--    --><?php //= $this->include("components/counter")?>
    <!-- ===== Counter End ===== -->

    <!-- ===== Clients Start ===== -->
    <!--    --><?php //= $this->include("components/clients")?>
    <!-- ===== Clients End ===== -->

    <!-- ===== Blog Start ===== -->
    <!--    --><?php //= $this->include("components/blog")?>
    <!-- ===== Blog End ===== -->

    <!-- ===== Contact Start ===== -->
    <?= $this->include("components/contact") ?>
    <!-- ===== Contact End ===== -->

    <!-- ===== CTA Start ===== -->
    <?= $this->include("components/cta-banner") ?>
    <!-- ===== CTA End ===== -->
</main>
<!-- ===== Footer Start ===== -->
<?= $this->include("components/footer") ?>
<!-- ===== Footer End ===== -->

<!-- ====== Back To Top Start ===== -->
<button
    class="xc wf xf ie ld vg sr gh tr g sa ta _a"
    @click="window.scrollTo({top: 0, behavior: 'smooth'})"
    @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false"
    :class="{ 'uc' : scrollTop }"
>
    <svg class="uh se qd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path
            d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z"/>
    </svg>
</button>

<!-- ====== Back To Top End ===== -->
<script defer src="<?= base_url() ?>/public/bundle.js"></script>
<script src="<?= base_url() ?>/public/min.js"></script>
<script src="<?= base_url() ?>/public/jquery-3.7.0.min.js"></script>
<script src="<?= base_url() ?>/public/vendor/dist/owl.carousel.min.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
</script>
</body>
</html>
<?= $this->endSection(); ?>
