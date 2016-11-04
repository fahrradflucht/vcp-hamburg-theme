<!DOCTYPE html>
<html lang="de">
<?php get_header(); ?>
<main class="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="news">
            <h1 class="news-heading"><?php the_title(); ?>:</h1>
            <div class="news-posts">
                <div class="news-post">
                    <div class="news-post-container">
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
