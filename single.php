<!DOCTYPE html>
<html lang="de">
<?php get_header(); ?>
<main class="main">
    <div class="news">
        <h1 class="news-heading">Aktuelles:</h1>
        <div class="news-posts">
                <div class="news-post">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="news-post-container">
                            <h2><?php the_title(); ?></h2>
                            <p class="entry"><?php the_content(); ?></p>
                            <div class="news-post-linkRow">
                                <a href="<?php the_permalink(); ?>"><?php the_time('d.m.Y'); ?></a>
                                <a href="<?php echo home_url(); ?>">Zurück</a>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
</body>
</html>
