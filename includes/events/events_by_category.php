<!-- Blog Page Section -->
<section class="blog-page-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <?php foreach($children_cats as $child_cat): ?>
        <div class="sec-title centered">
            <h2><?php echo $child_cat['title']; ?></h2>
            <div class="separator"></div>
        </div>
        <div class="row clearfix">
            <?php $events = get_events($child_cat['id']); ?>
            <?php foreach($events as $event): ?>
            <!-- News Block -->
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <a href="#"><img src="images/resource/news-2.jpg" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <ul class="post-meta">
                            <li><span class="icon flaticon-profile"></span><?php $child_cat['title'] ?></li>
                            <li><span class="icon flaticon-timetable"></span>19-20 March, 2020</li>
                        </ul>
                        <h3><a href="event_details.php?e_id=<?php echo $event["id"] ?>"><?php echo $event["name"] ?></a>
                        </h3>
                        <div class="text">Eabore etsu dolore magn aliqua enim veniam quis nostrud exercitas.</div>
                        <a class="read-more" href="event_details.php?e_id=<?php echo $event["id"] ?>">see more <span
                                class="icon flaticon-right-arrow-1"></span></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endforeach; ?>

    </div>
</section>
<!-- End Events Section -->