<?php 
    include_once("./header.php"); 
    $PAGE_TITLE = "Technical Events";
    include_once("./includes/page_title.php"); 
 ?>

<!-- Blog Page Section -->
<section class="blog-page-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <!-- <div class="title">Lorem ipsum dolor sit amet.</div> -->
            <h2>Electrical Engineering</h2>
            <div class="separator"></div>
        </div>
        <div class="row clearfix">
            <?php for($i=0; $i<8 ;$i++): ?>
            <!-- News Block -->
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <a href="#"><img src="images/resource/news-2.jpg" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <ul class="post-meta">
                            <li><span class="icon flaticon-profile"></span>Electrical</li>
                            <li><span class="icon flaticon-timetable"></span>19-20 March, 2020</li>
                        </ul>
                        <h3><a href="#">Title of event</a></h3>
                        <div class="text">Eabore etsu dolore magn aliqua enim veniam quis nostrud exercitas.</div>
                        <a class="read-more" href="#">see more <span class="icon flaticon-right-arrow-1"></span></a>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
<!-- End Events Section -->

<?php include_once("./footer.php"); ?>