<?php require_once("data/menu.php"); ?>
<!-- Main Menu -->
<nav class="main-menu navbar-expand-md">
    <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <div class="navbar-collapse collapse scroll-nav clearfix" id="navbarSupportedContent">
        <!-- <ul class="navigation clearfix">
            <li class="current">
                <a href="index.php">Home</a>
            </li>
            <li class="dropdown">
                <a href="events.php">Events</a>
                <ul>
                    <?php $cats = get_parent_categories();  ?>
                    <?php foreach($cats as $cat): 
                       if(count(get_events($cat["id"])) > 0): ?>
                    <li class="<?php echo isset($cat["children"]) ? "dropdown" : "" ?>">

                        <a href="events.php?cat_id=<?php echo $cat["id"]; ?>">
                            <?php echo $cat["title"]; ?>
                        </a>

                        <?php if(isset($cat["children"])): $children =  $cat["children"]; ?>
                        <ul>
                            <?php foreach($children as $child_category): ?>
                            <li>
                                <a href="events.php?cat_id=<?php echo $child_category["id"]; ?>">
                                    <?php echo $child_category["title"]; ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </li>
                    <?php  endif; endforeach; $cat=null;?>

                </ul>
            </li>
            <li>
                <a href="about.php">About Us</a>
            </li>
            <li>
                <a href="team.php">Team</a>
            </li>
            <li>
                <a href="gallery.php">Gallery</a>

            </li>

            <li><a href="">Contact Us</a></li>
        </ul> -->
        <ul class="navigation clearfix">
            <?php foreach($menu_items as $menu_item => $menu_item_link):  ?>
            <li
                class="<?php echo $menu_item_link == get_current_page() ? "current" : "" ?> <?php echo $menu_item == "events" ? "dropdown" : "" ?>">
                <a href="<?php echo $menu_item_link; ?>"><?php echo $menu_item; ?></a>
                <?php if($menu_item == "events"): ?>
                <ul>
                    <?php $cats = get_parent_categories();  ?>
                    <?php foreach($cats as $cat): 
                       if(count(get_events($cat["id"])) > 0): ?>
                    <li class="<?php echo isset($cat["children"]) ? "dropdown" : "" ?>">

                        <a href="events.php?cat_id=<?php echo $cat["id"]; ?>">
                            <?php echo $cat["title"]; ?>
                        </a>

                        <?php if(isset($cat["children"])): $children =  $cat["children"]; ?>
                        <ul>
                            <?php foreach($children as $child_category): ?>
                            <li>
                                <a href="events.php?cat_id=<?php echo $child_category["id"]; ?>">
                                    <?php echo $child_category["title"]; ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </li>
                    <?php  endif; endforeach; $cat=null;?>

                </ul>
                <?php endif; ?>

            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>
<!-- Main Menu End-->