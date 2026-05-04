<!-- ============================
    Section 6: WORKS（実績紹介）
============================ -->
<section class="p-partner-works" id="works">

    <!-- 装飾（左上の黄色円弧） -->
    <img src="<?php echo esc_url(get_theme_file_uri('assets/img/partner/works-deco.svg')); ?>" alt="" class="p-partner-works__deco" aria-hidden="true">

    <div class="p-partner-works__inner">
        <h2 class="p-partner-works__title">WORKS</h2>
        <p class="p-partner-works__lead">
            これまでの制作実績・<br class="u-hidden-pc">担当領域の一部をご紹介します。
        </p>
    </div>

    <div class="p-partner-works__slider-wrap">

        <div class="swiper p-partner-works__swiper">
            <ul class="swiper-wrapper">
                <?php
                $works_query = new WP_Query(array(
                    'post_type'      => 'works',
                    'posts_per_page' => -1,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                ));
                if ($works_query->have_posts()):
                    while ($works_query->have_posts()):
                        $works_query->the_post();

                        $link_url = esc_url(get_the_permalink());
                        if (!$link_url) {
                            $works_subdirectory_link = get_field('work_subdirectory_link');
                            $link_url = $works_subdirectory_link
                                ? esc_url(get_template_directory_uri() . '/' . ltrim($works_subdirectory_link, '/'))
                                : '#';
                        }

                        // ACFカテゴリラベル（無ければデフォルト）
                        $work_category = get_field('work_category');
                        if (!$work_category) {
                            $work_category = 'WordPress構築';
                        }
                ?>
                    <li class="swiper-slide p-partner-works__card">
                        <a href="<?php echo $link_url; ?>" target="_blank" rel="noopener noreferrer" class="p-partner-works__card-link">
                            <div class="p-partner-works__card-image">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('large', array('alt' => esc_attr(get_the_title()))); ?>
                                <?php else: ?>
                                    <img src="<?php echo esc_url(get_theme_file_uri() . '/img/noimg.webp'); ?>" alt="イメージがありません" />
                                <?php endif; ?>
                            </div>
                            <div class="p-partner-works__card-body">
                                <span class="p-partner-works__card-category"><?php echo esc_html($work_category); ?></span>
                                <h3 class="p-partner-works__card-title"><?php the_title(); ?></h3>
                                <p class="p-partner-works__card-text"><?php echo wp_trim_words(get_the_content(), 60, '...'); ?></p>
                                <span class="p-partner-works__card-more">詳細を見る</span>
                            </div>
                        </a>
                    </li>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </ul>
        </div>

        <!-- ナビ矢印（オレンジ円） -->
        <button type="button" class="p-partner-works__nav p-partner-works__nav--prev" aria-label="前へ">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" fill="currentColor"/>
            </svg>
        </button>
        <button type="button" class="p-partner-works__nav p-partner-works__nav--next" aria-label="次へ">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="currentColor"/>
            </svg>
        </button>
    </div>

    <div class="p-partner-works__inner">
        <div class="p-partner-works__footer">
            <a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>" class="p-partner-works__more-link">
                もっと見る
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
                    <path d="M4.5 3.5L11.5 3.5V10.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M11 4L4 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </a>
        </div>
    </div>
</section>
