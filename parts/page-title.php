
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="page-header__shape-bg"
                style="background-image: url(assets/images/shapes/page-header-shape-bg.png);"></div>
            <div class="page-header__shape-1 float-bob-y">
                <img src="assets/images/shapes/page-header-shape-1.png" alt="">
            </div>
            <div class="page-header__shape-2 img-bounce">
                <img src="assets/images/shapes/page-header-shape-2.png" alt="">
            </div>
            <div class="page-header__shape-3 float-bob-x">
                <img src="assets/images/shapes/page-header-shape-3.png" alt="">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <div class="thm-breadcrumb__box">
                        <div class="thm-breadcrumb__icon">
                            <img src="assets/images/shapes/section-title-tagline-shape.png" alt="">
                        </div>
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.php">Home</a></li>
                            <li><span>-</span></li>
                            <li><?php if(isset($page_title)&&!empty($page_title)) { echo $page_title; } ?></li>
                        </ul>
                    </div>
                    <h2><?php if(isset($page_title)&&!empty($page_title)) { echo $page_title; } ?></h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->