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
    <header id="js-partner-header" class="p-partner-header">
        <div class="p-partner-header__container">

            <!-- ロゴ -->
            <a href="<?php echo esc_url(home_url()); ?>" class="p-partner-header__logo">
                <span class="p-partner-header__logo-img">
                    <img src="<?php echo get_theme_file_uri(); ?>/img/BacIcon.webp" alt="Web制作 おくだ屋">
                </span>
                <span class="p-partner-header__logo-text">WEB制作 おくだ屋</span>
            </a>

            <!-- PCメニュー -->
            <nav class="p-partner-header__nav">
                <a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>" class="p-partner-header__nav-link">Works</a>
                <a href="<?php echo esc_url(home_url('/about')); ?>" class="p-partner-header__nav-link">About</a>

                <!-- 制作会社様向け（白ボタン） -->
                <a href="<?php echo esc_url(home_url('/partner')); ?>" class="p-partner-header__btn p-partner-header__btn--resource">
                    <span class="p-partner-header__btn-text">リソースにお困りの制作会社様へ</span>
                    <svg class="p-partner-header__btn-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" fill="currentColor" />
                    </svg>
                </a>

                <!-- Contact（オレンジボタン） -->
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-partner-header__btn p-partner-header__btn--contact">
                    <span class="p-partner-header__btn-text">Contact</span>
                    <svg class="p-partner-header__btn-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" fill="currentColor" />
                    </svg>
                </a>
            </nav>

            <!-- SPドロワーアイコン -->
            <button id="js-drawer-icon" class="c-drawer-icon c-drawer-icon--partner u-hidden-pc" aria-label="メニューを開く">
                <span class="c-drawer-icon__bar"></span>
                <span class="c-drawer-icon__bar"></span>
                <span class="c-drawer-icon__bar"></span>
            </button>
        </div>

        <!-- SPドロワー -->
        <div id="js-drawer-contents" class="p-drawer__contents">
            <nav class="p-header-nav">
                <ul class="p-header__nav-list">
                    <li class="p-header__menu-item u-white-color">
                        <a href="<?php echo esc_url(home_url()); ?>">Top Page</a>
                    </li>
                    <li class="p-header__nav-item">
                        <svg width="24" height="24" role="img" aria-label="laptop-icon">
                            <use href="#laptop-svg"></use>
                        </svg>
                        <a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>">Works</a>
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
                </ul>
            </nav>
            <div class="p-drawer__footer u-white-color">
                <div class="p-drawer__footer-left">
                    <a href="<?php echo esc_url(home_url('/blog')); ?>" target="_blank" rel="noopener noreferrer" class="header__nav-link">
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
