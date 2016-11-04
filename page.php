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
                            foreach (page_menu_items(get_the_ID()) as $child) {
                                if(is_current_uri($child->guid)) {
                                    echo '<a class="page-nav-item page-nav-item_current" href="'.$child->guid.'">'.$child->post_title.'</a>';
                                } else {
                                    echo '<a class="page-nav-item" href="'.$child->guid.'">'.$child->post_title.'</a>';
                                }
                            }
                            ?>
                            <?php has_parent(get_the_ID()); ?>
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
