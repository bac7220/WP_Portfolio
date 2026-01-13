<main class="l-main">
    <div class="l-fv">
        <div class="l-fv__contents">
            <?php if (is_front_page()) : ?>
                <h2 id="reverse" class="l-fv__heading ">
                    <p class="p-fv__heading-main u-mb-1 js-text-span">ビジネスに伴走する<br>Web制作</p>
                    <p class="p-fv__heading-sub animate__animated animate__fadeInSlideLeft">
                        ホームページを作りたい、WordPressで運用したい。<br>
                        Web周りの「困った」に寄り添いながら、確実な技術力で<br>
                        あなたのビジネスをサポートします。
                        
                    </p>

                <?php elseif (is_404()) : ?>
                    <div class="l-inner">
                        <div class="p-error-404">
                            <h2 class="p-error-404__title u-mb-1">お探しのページが見つかりませんでした</h2>
                            <p class="p-error-404__text u-mb-1">申し訳ございません。アクセスしようとしたページは存在しないか、移動された可能性があります。</p>
                            <div class="p-error-404__button">
                                <a href="<?php echo home_url(); ?>" class="c-button">トップへ戻る
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
        </div>
    </div>

    <style>
        .l-fv::before {
            background: linear-gradient(to top, rgba(70, 79, 67, 0), rgba(70, 79, 67, 0.3)),
                url('<?php echo get_theme_file_uri(); ?>/img/FV.webp') top/cover no-repeat;
        }
    </style>
</main>