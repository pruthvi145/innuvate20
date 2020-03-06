<?php 
    include_once("./header.php"); 
    $PAGE_TITLE = "Tug of War";
    include_once("./includes/page_title.php"); 
     $cats = get_parent_categories();  
  
?>
<?php get_current_page(); ?>

<?php include_once("./footer.php"); ?>