<?php get_header(); ?>

<div class="l-wrapper">
    <section class="l-section p-single">
        <div class="l-inner">
            <h2 class="l-section__head">
                <p class="c-title">Works</p>
                <p class="c-title__sub">実績紹介</p>
            </h2>
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <div class="p-single__container">
                        <div class="p-single__left">
                            <div class="p-single__info-thumbnail">
                                <?php if (has_post_thumbnail()): ?>
                                    <div class="p-single__image">
                                        <?php the_post_thumbnail('large', ['alt' => get_the_title()]); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="p-single__info-section">
                                <div class="p-single__info-heading">
                                    <h2>制作サイト名</h2>
                                </div>
                                <div class="p-single__info-text">
                                    <p><?php the_title(); ?></p>
                                </div>
                            </div>
                            <div class="p-single__info-section">
                                <div class="p-single__info-heading">
                                    <h2>クライアント様</h2>
                                </div>
                                <div class="p-single__info-text">
                                    <?php if (get_field('user_name')): ?>
                                        <div class="c-card__user-name">
                                            <p class="c-card__footer-text">
                                                <?php the_field('user_name'); ?>
                                            </p>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (get_field('portfolio_url')): ?>
                                        <div class="c-card__pass">
                                            <a href="<?php the_field('portfolio_url'); ?>" class="c-card__footer-text">
                                                <?php the_field('portfolio_url'); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <?php if (get_field('period')): ?>
                                <div class="p-single__info-section">
                                    <div class="p-single__info-heading">
                                        <h2>制作期間</h2>
                                    </div>
                                    <div class="p-single__info-text">
                                        <p><?php echo nl2br(get_field('period')); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if (get_field('price')): ?>
                                <div class="p-single__info-section">
                                    <div class="p-single__info-heading">
                                        <h2>案件規模</h2>
                                    </div>
                                    <div class="p-single__info-list">
                                        <?php echo nl2br(get_field('price')); ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if (get_field('work')): ?>
                                <div class="p-single__info-section">
                                    <div class="p-single__info-heading">
                                        <h2>担当範囲</h2>
                                    </div>
                                    <div class="p-single__info-list">
                                        <?php echo nl2br(get_field('work')); ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if (get_field('skill')): ?>
                                <div class="p-single__info-section">
                                    <div class="p-single__info-heading">
                                        <h2>使用スキル</h2>
                                    </div>
                                    <div class="p-single__info-list">
                                        <p><?php echo  nl2br(get_field('skill')); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if (get_field('point')): ?>
                                <div class="p-single__info-section">
                                    <div class="p-single__info-heading">
                                        <h2>実装のポイント</h2>
                                    </div>
                                    <div class="p-single__info-list">
                                        <p><?php echo  nl2br(get_field('point')); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="p-single__button-wrapper">
                                <a href="<?php echo get_field('siteurl'); ?>" target="_blank" class="p-single__button">
                                    <span class="p-single__button-text">サイトを見る</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="p-single__right">
                            <div class="p-single__image">
                                <?php if (get_field('screenshot')): ?>
                                    <img src="<?php the_field('screenshot'); ?>" alt="">
                                <?php elseif (is_single('b_after')): ?>
                                    <img src="<?php echo esc_html(get_theme_file_uri()) ?>/img/B_AFTER.webp" alt="b-after">
                                <?php else: ?>
                                    <img src="<?php echo get_theme_file_uri(); ?>/img/noimg.webp" alt="イメージがありません" />
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

    <?php get_template_part('template/footer-item'); ?>
</div>

<?php get_footer(); ?>