<main class="l-main">
    <div class="l-fv">
        <video class="p-fv__video" src="<?php echo get_theme_file_uri(); ?>/assets/video/portfolio_video.mp4" autoplay muted loop playsinline></video>
        <div class="p-fv__overlay"></div>
        <div class="l-fv__contents">
            <?php if (is_front_page()) : ?>
                <h2 id="reverse" class="l-fv__heading ">
                    <p class="p-fv__heading-main u-mb-1 js-text-span">ビジネスを支える<br>Web制作</p>
                    <p class="p-fv__heading-sub animate__animated animate__fadeInSlideLeft">
                        ネットで集客したい、ビジネスにネットを活用したい<br>
                        Web周りの「困った」に寄り添いながら、確実な技術力で<br class="u-hidden-sp">
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


</main>