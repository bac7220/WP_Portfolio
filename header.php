<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

</head>


<body>
    <header id="js-header" class="p-header
     <?php if (!is_front_page()) {
            echo ' u-bg-header';
        } ?>">
        <div class=" p-header__container p-header__fz">
            <a href="<?php echo home_url(); ?>">
                
                <h1 class="p-header__logo">Masaki's<br />Portfolio</h1>
            </a>
            <ul class="p-header__menu ">

                <li class="p-header__menu-item u-white-color">
                    <a class="p-header__menu-link<?php echo is_home() ? ' current' : ''; ?>"
                        href="<?php echo esc_url(home_url('/works')); ?>">
                        Works
                    </a>
                </li>
                <li class="p-header__menu-item u-white-color">
                    <a class="p-header__menu-link
                    <?php
                    if (is_page() && get_post_field('post_name', get_post())  === 'about') {
                        echo ' current';
                    }; ?>" href="<?php echo esc_url(home_url('/about')); ?>">About
                    </a>
                </li>

                <li class="p-header__menu-item u-white-color">
                    <a class="p-header__menu-link
                    <?php
                    if (is_page() && get_post_field('post_name', get_post()) === 'contact') {
                        echo ' current';
                    } ?>" href="<?php echo esc_url(home_url('/contact')); ?>">Contact
                    </a>
                </li>
            </ul>
            <button id="js-drawer-icon" class="c-drawer-icon">
                <span class="c-drawer-icon__bar"></span>
                <span class="c-drawer-icon__bar"></span>
                <span class="c-drawer-icon__bar"></span>
            </button>
        </div>

        <div id="js-drawer-contents" class="p-drawer__contents">
            <nav class="p-header-nav">
                <ul class="p-header__nav-list">
                    <?php if (!is_front_page()): ?>
                        <li class="p-header__menu-item u-white-color">
                            <a href="<?php echo esc_url(home_url()); ?>">
                                Top Page
                            </a>
                        </li>
                    <?php endif; ?>
                    <li class="p-header__nav-item">
                        <svg width="24" height="24" role="img" aria-label="laptop-icon">
                            <use href="#laptop-svg"></use>
                        </svg>
                        <a href="<?php echo esc_url(home_url('/works')); ?>">Works
                        </a>
                    </li>
                    <li class="p-header__nav-item">
                        <svg width="24" height="24" role="img" aria-label="smile-icon">
                            <use href="#smile-svg"></use>
                        </svg>
                        <a href="<?php echo esc_url(home_url('/about')); ?>">About</a>
                    </li>


                    <li class="p-header__nav-item">
                        <svg width="24" height="24" role="img" aria-label="mail-icon">
                            <use href="#mail-svg"></use>
                        </svg>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a>
                    </li>
                    <li class="p-header__nav-item">

                    </li>
                </ul>
            </nav>
            <div class="p-drawer__footer u-white-color">
                <div class="p-drawer__footer-left ">
                    <a href="https://webworklog.com/" target="_blank" class="header__nav-link">
                        <svg width="24" height="24" role="img" aria-label="book-icon">
                            <use href="#book-svg"></use>
                        </svg>
                        <p class="u-mt-4">Blog</p>
                    </a>
                </div>
                <div class="p-drawer__footer-right">
                    <a href="https://x.com/kakamigaharabac" target="_blank">
                        <svg class="svg-color" width="24" height="24" role="img" aria-label="twitter-icon">
                            <use href="#twitter-svg"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <?php get_template_part('template/svg'); ?>
    </header>