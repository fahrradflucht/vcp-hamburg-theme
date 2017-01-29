<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('template_directory') ?>/img/favicons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_directory') ?>/img/favicons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_directory') ?>/img/favicons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_directory') ?>/img/favicons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php bloginfo('template_directory') ?>/img/favicons/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php bloginfo('template_directory') ?>/img/favicons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php bloginfo('template_directory') ?>/img/favicons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php bloginfo('template_directory') ?>/img/favicons/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory') ?>/img/favicons/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory') ?>/img/favicons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory') ?>/img/favicons/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory') ?>/img/favicons/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory') ?>/img/favicons/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="<?php bloginfo('name'); ?>"/>
    <meta name="msapplication-TileColor" content="#004287" />
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory') ?>/img/favicons/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="<?php bloginfo('template_directory') ?>/img/favicons/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="<?php bloginfo('template_directory') ?>/img/favicons/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="<?php bloginfo('template_directory') ?>/img/favicons/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="<?php bloginfo('template_directory') ?>/img/favicons/mstile-310x310.png" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/waldlaeuferzeichen-pfadfinden-V1.2-Web-Font/styles.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/wp-core.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Roboto:300,500,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <a href="<?php echo site_url(); ?>" class="logo" title="Gehe zur Homepage">
      <img
        class="logo__icon"
        src="<?php bloginfo('template_directory') ?>/img/header/VCP-Zeichen-Weiss-50.png"
        srcSet="<?php echo get_srcset('/img/header/VCP-Zeichen-Weiss.png', [50, 100, 150, 200]) ?>"
        sizes="50px"
        alt="VCP Logo">
    </a>
    <h1 class="header__brand" id="header__brand">VCP <br class="brand-break">Land Hamburg</h1>
    <div class="menu">
        <label for="menu__nav-toggler" class="menu__label"><i class="fa fa-bars" aria-hidden="true"></i></label>
        <input type="checkbox" id="menu__nav-toggler">
        <nav class="menu__nav">
            <div class="nav__header">
                <label for="menu__nav-toggler" class="menu__label"><i class="fa fa-bars" aria-hidden="true"></i></label>
            </div>
            <?php wp_nav_menu(array(
                'theme_location' => 'navigation',
                'container' => '',
                'menu_class' => 'menu-items'
                )); ?>
        </nav>
    </div>
</header>
<div class="masthead">
    <img
        src="<?php bloginfo('template_directory') ?>/img/masthead/Kothe-1200.jpeg"
        srcSet="<?php echo get_srcset('/img/masthead/Kothe.jpeg', [320, 420, 540, 700, 920, 1200, 1600, 2000, 2600, 3632]) ?>"
        alt="Kothe"
        class="masthead-image">
    <div class="masthead-overlay"></div>
</div>
