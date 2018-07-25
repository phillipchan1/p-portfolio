<!DOCTYPE html>
<html lang="en" class="no-js">
<?php include 'partials/head.php';?>


<body id="home">
    <?php include 'partials/header.php';?>

    <div class="site-intro">
        <h2>Developer Extraordinaire</h2>
        <p>
            Multi-talented developer passionate about generating digital business
        </p>

        <div class="spacing"></div>
        <p>
            <a href="/about" class="button boxed black">Know more</a>
        </p>
    </div>

    <div class="action-hint">Scroll or drag to explore.</div>
    <div class="action-hint-for-touch">Swipe to explore more works.</div>
    <!-- Swiper -->
    <div class="swiper-container" id="main">
        <?php include 'components/portfolio-slider.php';?>
    </div>

    <?php include 'partials/cta.php';?>
    <!-- Swiper JS -->
<?php include 'partials/footer.php';?>
</body>

</html>