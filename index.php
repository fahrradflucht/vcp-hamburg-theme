<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/waldlaeuferzeichen-pfadfinden-V1.2-Web-Font/styles.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Roboto:300,500,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <a href="/" class="logo" title="Gehe zur Homepage">
      <img class="logo__icon" src="<?php bloginfo('template_directory') ?>/img/header/VCP-Zeichen_Weiss_CMYK.svg" alt="VCP Logo">
    </a>
    <h1 class="header__brand">VCP <br class="brand-break">Land Hamburg</h1>
    <div class="menu">
        <label for="menu__nav-toggler" class="menu__label"><i class="fa fa-bars" aria-hidden="true"></i></label>
        <input type="checkbox" id="menu__nav-toggler">
        <nav class="menu__nav">
            <div class="nav__header">
                <label for="menu__nav-toggler" class="menu__label"><i class="fa fa-bars" aria-hidden="true"></i></label>
            </div>
            <ul class="nav-items">
                <li class="nav-item_current">
                    <a class="nav-item-link"><span class="icon vcpwlz-wlz-einzeln-13"></span> Aktuelles</a>
                </li>
                <li>
                    <a class="nav-item-link"><span class="icon vcpwlz-wlz-einzeln-34"></span> Wer wir sind</a>
                </li>
                <li>
                    <a class="nav-item-link"><span class="icon vcpwlz-wlz-einzeln-39"></span> Was wir tun</a>
                </li>
                <li>
                    <a class="nav-item-link"><span class="icon vcpwlz-wlz-einzeln-23"></span> Service</a>
                </li>
                <li>
                    <a class="nav-item-link"><span class="icon vcpwlz-wlz-einzeln-27"></span> Kontakt</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<div class="masthead">
    <img src="<?php bloginfo('template_directory') ?>/img/masthead/Kothe.jpeg" alt="Kothe" class="masthead-image">
    <div class="masthead-overlay"></div>
</div>
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
                </div>
            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            <div class="news-post">
                <div class="news-post-container">
                    <h2>Grundkurs Vorwochenend-Termin verschoben</h2>
                    <p>Das Vor-Wochenende des Grundkurses 2016 musste auf eine Woche nach hinten verschoben werden. Statt vom 05.-07.02.2016 findet die Grundkursvorbereitung vom 12.-14.02. statt.</p>
                    <div class="news-post-linkRow">
                        <a href="#post-id">08.01.2016</a>
                        <a href="#post-id">mehr&hellip;</a>
                    </div>
                </div>
                <span class="news-post-icon icon vcpwlz-wlz-einzeln-48"></span>
            </div>
            <div class="news-post">
                <div class="news-post-container">
                    <h2>Nordlager 2016</h2>
                    <p>Das Vor-Wochenende des Grundkurses 2016 musste auf eine Woche nach hinten verschoben werden. Statt vom 05.-07.02.2016 findet die Grundkursvorbereitung vom 12.-14.02. statt.</p>
                    <div class="news-post-linkRow">
                        <a href="#post-id">08.01.2016</a>
                        <a href="#post-id">mehr&hellip;</a>
                    </div>
                </div>
                <span class="news-post-icon icon vcpwlz-wlz-einzeln-27"></span>
            </div>
            <div class="news-post">
                <div class="news-post-container">
                    <h2>Grundkurs Vorwochenend-Termin verschoben</h2>
                    <p>Das Vor-Wochenende des Grundkurses 2016 musste auf eine Woche nach hinten verschoben werden. Statt vom 05.-07.02.2016 findet die Grundkursvorbereitung vom 12.-14.02. statt.</p>
                    <div class="news-post-linkRow">
                        <a href="#post-id">08.01.2016</a>
                        <a href="#post-id">mehr&hellip;</a>
                    </div>
                </div>
                <span class="news-post-icon icon vcpwlz-wlz-einzeln-51"></span>
            </div>
            <div class="news-post">
                <div class="news-post-container">
                    <h2>Nordlager 2016</h2>
                    <p>Das Vor-Wochenende des Grundkurses 2016 musste auf eine Woche nach hinten verschoben werden. Statt vom 05.-07.02.2016 findet die Grundkursvorbereitung vom 12.-14.02. statt.</p>
                    <div class="news-post-linkRow">
                        <a href="#post-id">08.01.2016</a>
                        <a href="#post-id">mehr&hellip;</a>
                    </div>
                </div>
                <span class="news-post-icon icon vcpwlz-wlz-einzeln-41"></span>
            </div>
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
<section class="footer">
    <div class="footer-content">
        <a href="/#impressum" class="footer-content-link">Impressum</a>
        &middot
        <a href="/" class="footer-content-link">VCP Hamburg</a>
        &middot
        <a href="/#kontakt" class="footer-content-link">Kontakt</a>
    </div>
</section>
<?php wp_footer(); ?>
</body>
</html>
