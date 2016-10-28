<!DOCTYPE html>
<html lang="de">
<?php get_header(); ?>
<main class="main">
    <div class="news">
        <h1 class="news-heading">Aktuelles:</h1>
        <div class="news-posts">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="news-post">
                    <div class="news-post-container">
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                        <div class="news-post-linkRow">
                            <a href="<?php the_permalink(); ?>"><?php the_time('d.m.Y'); ?></a>
                            <a href="<?php the_permalink(); ?>">mehr&hellip;</a>
                        </div>
                    </div>
                    <span class="news-post-icon icon vcpwlz-wlz-einzeln-48"></span>
                </div>
            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

            <div class="news-timeRow">
                <a class="news-timeRow-link" href="<?php previous_posts_link(); ?>">
                    <!--Remove the text not the link if no items are newer-->
                    <?php if( get_previous_posts_link() ) : ?>
                        <span class="icon vcpwlz-wlz-einzeln-13"></span> neuer
                    <?php endif; ?>
                </a>
                <a class="news-timeRow-link" href="<?php next_posts_link(); ?>">
                    <?php if( get_next_posts_link() ) : ?>
                        <span class="icon vcpwlz-wlz-einzeln-14"></span> älter
                    <?php endif; ?>
                </a>
            </div>
            
        </div>
    </div>
</main>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>
