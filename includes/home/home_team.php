<?php require_once("data/team.php"); ?>
<!-- Speaker Section Five -->
<section class="speaker-section-five mb-5">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title light centered">
            <div class="title">Welcome to innuvate 2020</div>
            <h2>Meet Our Team</h2>
            <div class="separator"></div>
        </div>
        <div class="row clearfix">
            <?php foreach($team_members as $i=>$member): if($i<4): ?>
            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-3 col-sm-12 mb-5">
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
            <?php endif;endforeach; ?>

            <div class="btns-box text-center mt-5 m-auto">
                <a href="team.php" class="theme-btn btn-style-one">See More</a>
            </div>
        </div>
    </div>
</section>

<!-- End Speaker Section Five -->