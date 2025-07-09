<?php $head_title="Contact || Zefxa || Zefxa PHP Template"?>
<?php require_once('parts/layout/top-layout.php'); ?>
<?php require_once('parts/header/header2.php'); ?>
<?php
    $page_title = "Contact Us";
    require_once('parts/page-title.php');
?>

        <!--Contact Two Start-->
        <section class="contact-two">
            <div class="contact-two__img-1 wow fadeInLeft" data-wow-delay="300ms">
                <img src="assets/images/resources/contact-two-img-1.png" alt="" class="float-bob-x">
            </div>
            <div class="contact-two__bg-shape"></div>
            <div class="contact-two__bg-shape-2"></div>
            <div class="contact-two__google-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                    class="contact-two__map" allowfullscreen></iframe>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="contact-two__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape">
                                        <img src="assets/images/shapes/section-title-tagline-shape.png" alt="">
                                    </div>
                                    <span class="section-title__tagline">Contact Now</span>
                                </div>
                                <h2 class="section-title__title">Request for Our Free
                                    <br> Consultation</h2>
                            </div>
                            <form class="contact-form-validated contact-two__form" action="assets/inc/sendemail.php"
                                method="post" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-two__input-box">
                                            <input type="text" name="name" placeholder="Your Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-two__input-box">
                                            <input type="email" name="email" placeholder="Email Address" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-two__input-box">
                                            <input type="text" name="Phone" placeholder="Phone Number" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6">
                                        <div class="contact-two__input-box">
                                            <div class="contact-two__input-box-icon">
                                                <span class="icon-calender"></span>
                                            </div>
                                            <input type="text" name="date" placeholder="Select Date" id="datepicker">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6">
                                        <div class="contact-two__input-box">
                                            <div class="select-box">
                                                <select class="selectmenu wide">
                                                    <option selected="selected">Select Age</option>
                                                    <option>20</option>
                                                    <option>30</option>
                                                    <option>40</option>
                                                    <option>50</option>
                                                    <option>60</option>
                                                    <option>70</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-two__input-box">
                                            <div class="select-box">
                                                <select class="selectmenu wide">
                                                    <option selected="selected">Select Subject</option>
                                                    <option>Type Of Service 01</option>
                                                    <option>Type Of Service 02</option>
                                                    <option>Type Of Service 03</option>
                                                    <option>Type Of Service 04</option>
                                                    <option>Type Of Service 05</option>
                                                    <option>Type Of Service 06</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <div class="contact-two__btn-box">
                                            <button type="submit" class="thm-btn contact-two__btn">Submit
                                                Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                            <p class="contact-two__left-text">* After sending request. We’ll contact you for more
                                details about charter.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Two End-->

        <!--CTA One Start-->
        <section class="cta-one">
            <div class="cta-one__bg" style="background-image: url(assets/images/backgrounds/cta-one-bg.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="cta-one__inner">
                        <h3 class="cta-one__title">Let's discuss about how we can help
                            <br> make your business better</h3>
                        <div class="cta-one__btn-box">
                            <a href="about.php" class="cta-one__btn thm-btn">Let's Start</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA One End-->

        <?php require_once('parts/footer/footer.php'); ?>
        <?php require_once('parts/layout/bottom-layout.php'); ?>