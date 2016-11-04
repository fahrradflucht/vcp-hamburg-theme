<!DOCTYPE html>
<html lang="de">
<?php get_header(); ?>
<main class="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="news">
            <h1 class="news-heading"><?php echo get_parent_title(get_the_ID()); ?>:</h1>
            <div class="news-posts">
                <div class="news-post">
                    <div class="news-post-container">
                        <div class="page-nav">
                            <?php
                            $the_ID = get_the_ID();
                            foreach (page_menu_items($the_ID) as $child) {
                                if($the_ID == $child->ID) {
                                    echo '<a class="page-nav-item page-nav-item_current" href="'.$child->guid.'">'.$child->post_title.'</a>';
                                } else {
                                    echo '<a class="page-nav-item" href="'.$child->guid.'">'.$child->post_title.'</a>';
                                }
                            }
                            ?>
                        </div>
                        <p class="entry"><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
</body>
</html>
