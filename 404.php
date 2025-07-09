<?php $head_title = "Error || Zefxa || Zefxa PHP Template" ?>
<?php require_once('parts/layout/top-layout.php'); ?>
<?php require_once('parts/header/header2.php'); ?>
<?php
$page_title = "404 Error";
require_once('parts/page-title.php');
?>

<!--Error Page Start-->
<section class="error-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="error-page__inner">
                    <div class="error-page__title-box">
                        <h2 class="error-page__title">404</h2>
                    </div>
                    <h3 class="error-page__tagline">Sorry we can't find that page!</h3>
                    <p class="error-page__text">The page you are looking for was never existed.</p>
                    <form class="error-page__form">
                        <div class="error-page__form-input">
                            <input type="search" placeholder="Search here">
                            <button type="submit"><i class="icon-magnifying-glass"></i></button>
                        </div>
                    </form>
                    <a href="index.php" class="thm-btn error-page__btn">Back to home</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Error Page End-->


<!--CTA One Start-->
<section class="cta-one">
    <div class="cta-one__bg" style="background-image: url(assets/images/backgrounds/cta-one-bg.jpg);"></div>
    <div class="container">
        <div class="row">
            <div class="cta-one__inner">
                <h3 class="cta-one__title">Let's discuss about how we can help
                    <br> make your business better
                </h3>
                <div class="cta-one__btn-box">
                    <a href="#" class="cta-one__btn thm-btn">Let's Start</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--CTA One End-->

<?php require_once('parts/footer/footer.php'); ?>
<?php require_once('parts/layout/bottom-layout.php'); ?>