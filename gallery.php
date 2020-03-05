<?php 
    include_once("./header.php"); 
    $PAGE_TITLE = "Gallery";
    include_once("./includes/page_title.php"); 
 ?>

<!-- Gallery Section Three -->
<section class="gallery-section-three">
    <div class="auto-container">

        <!-itUp Galery-->
            <div class="gallery">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <div class="title">Lorem ipsum dolor sit amet.</div>
                    <h2>Memories we created</h2>
                    <div class="separator"></div>
                </div>
                <div class="row clearfix">
                    <?php 
					$files = glob(getcwd()."/images/gallery/"."*" ); 
					$filecount =  $files ? count($files) : 0; 
                    for($i=0; $i<$filecount; $i++):
                    ?>
                    <!-- Gallery Block -->
                    <div class="gallery-block all videos workshop col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/gallery/<?php echo $i+1; ?>.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <a class="plus" href="images/gallery/<?php echo $i+1; ?>.jpg"
                                                data-fancybox="gallery-2" data-caption=""><span
                                                    class="flaticon-add-1"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
    </div>
</section>
<!-- End Sponsors Section Two -->


<?php include_once("./footer.php"); ?>