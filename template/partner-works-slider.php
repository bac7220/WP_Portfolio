<section class="p-partner-works" id="works">
  <div class="p-partner-works__container">
    <div class="p-partner-works__header">
      <h2 class="p-partner-works__title">
        <span>00.</span> 実績
      </h2>
      <div class="p-partner-works__nav">
        <div class="p-partner-works__button-prev">
          <span class="material-icons-round">arrow_back_ios</span>
        </div>
        <div class="p-partner-works__button-next">
          <span class="material-icons-round">arrow_forward_ios</span>
        </div>
      </div>
    </div>
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
                <h3 class="p-partner-works__card-title"><?php the_title(); ?></h3>
                <p class="p-partner-works__card-text"><?php echo wp_trim_words(get_the_content(), 40, '…'); ?></p>
              </div>
            </a>
          </li>
        <?php
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </ul>

      <div class="p-partner-works__pagination swiper-pagination"></div>
    </div>
  </div>

  <div class="p-partner-works__container">
    <div class="p-partner-works__footer">
      <a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>" class="p-partner-works__more-link">
        実績をすべて見る
        <span class="material-icons-round">arrow_forward</span>
      </a>
    </div>
  </div>
</section>
