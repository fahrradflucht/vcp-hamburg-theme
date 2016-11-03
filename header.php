<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/waldlaeuferzeichen-pfadfinden-V1.2-Web-Font/styles.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Roboto:300,500,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <a href="<?php echo site_url(); ?>" class="logo" title="Gehe zur Homepage">
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
            <?php wp_nav_menu(array(
                'theme_location' => 'navigation',
                'container' => '',
                'menu_class' => 'menu-items'
                )); ?>
        </nav>
    </div>
</header>
<div class="masthead">
    <img src="<?php bloginfo('template_directory') ?>/img/masthead/Kothe.jpeg" alt="Kothe" class="masthead-image">
    <div class="masthead-overlay"></div>
</div>
