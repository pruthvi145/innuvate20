<?php 
    include_once("header.php"); 
    $PAGE_TITLE = "Team";
    include_once("includes/page_title.php"); 
    require_once("data/team.php"); 
 ?>

<!-- Speaker Section Five -->
<section class="speaker-section-five">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">Welcome to innuvate 2020</div>
            <h2>Meet Our Team</h2>
            <div class="separator"></div>
        </div>
        <div class="row clearfix">
            <?php foreach($team_members as $member): ?>
            <!-- Speaker Block -->
            <div class="speaker-block-four col-lg-4 col-md-6 col-sm-12 mb-5">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/team/<?php echo $member->avatar; ?>" alt="" />

                    </div>
                    <div class="lower-content">
                        <h3><a href=""><?php echo $member->name; ?></a></h3>
                        <div class="designation"><?php echo $member->role; ?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
<!-- End Speaker Section Five -->

<?php include_once("./footer.php"); ?>