<!--Page Title-->
<?php $PAGE_TITLE = $PAGE_TITLE ??  "Please add '\$PAGE_TITLE' value" ?>
<section class="page-title style-two" style="background-image:url(images/background/10.jpg)">
    <div class="auto-container">
        <div class="content">
            <h1><?php echo $PAGE_TITLE; ?></h1>
            <ul class="page-breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><?php echo $PAGE_TITLE; ?></li>
            </ul>
        </div>
    </div>
</section>