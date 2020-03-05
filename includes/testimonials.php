<?php include_once("data/testimonials.php"); ?>


<section class="testimonial-section">
    <!-- Section Icons -->
    <div class="section-icons parallax-scene-4">
        <!-- Icon One -->
        <div class="icon icon-one parallax-layer" data-depth="0.20"><img src="images/icons/icon-12.png" alt="" /></div>
        <!-- Icon Two -->
        <div class="icon icon-two parallax-layer" data-depth="-0.40"><img src="images/icons/icon-15.png" alt="" /></div>
    </div>
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">Lorem Ipsum Dolor Sit Amet Consectetur</div>
            <h2>Testimonials</h2>
            <div class="separator"></div>
        </div>
        <div class="testimonial-carousel owl-carousel owl-theme">
            <?php foreach($testomonials as $t): ?>
            <!-- Tesimonial Block -->
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="upper-content">
                        <div class="content">
                            <div class="text"><?php echo $t["content"]; ?></div>
                            <div class="quote-icon flaticon-right-quote"></div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <div class="author">
                            <div class="image">
                                <img src="images/resource/author-1.jpg" alt="" />
                            </div>
                            <h3><?php echo $t["user"]["name"]; ?></h3>
                            <div class="designation">Conf. Speaker</div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>