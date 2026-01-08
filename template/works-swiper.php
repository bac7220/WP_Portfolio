<section class="l-section p-works">
  <div class="l-inner">
    <h2 class="l-section__head">
      <span class="c-title u-white-color ">Works</span>
      <span class="c-title__sub u-white-color">実績一覧</span>
    </h2>
    <!-- Slider main container -->


    <div class="swiper p-swiperMain">
      <!-- Additional required wrapper -->
      <!-- Slides -->

      <ul class="swiper-wrapper p-swiper-wrapper">
        <?php
        $card_query = new WP_Query(
          array(
            'post_type' => 'post',
            'posts_per_page' => -1,
          )
        ); ?>
        <?php if ($card_query->have_posts()): ?>

          <?php while ($card_query->have_posts()): $card_query->the_post(); ?>

            <li class="c-card-swiper swiper-slide">
              <?php
              $siteurl = get_the_permalink();
              $works_subdirectory_link = get_field('work_subdirectory_link');

              // デフォルトのリンクを'#'に設定
              $link_url = '#';

              // siteurlまたはworks_subdirectory_linkが設定されている場合はそのURLを使う
              if ($siteurl) {
                $link_url = esc_url($siteurl);
              } elseif ($works_subdirectory_link) {
                $link_url = esc_url(get_template_directory_uri() . '/' . ltrim($works_subdirectory_link, '/'));
              }
              ?>
              <a target="_blank" href="<?php echo $link_url; ?>">
                <div class="p-swiper-img u-mb-1">
                  <!-- スワイパーの画像 -->
                  <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else: ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/img/noimg.webp" alt="イメージがありません" />
                  <?php endif; ?>
                </div>
                <h3 class="c-card__title u-mb-1"><?php the_title(); ?></h3>
                <div class="c-card__text"><?php the_content(); ?></div>
              </a>
            </li>

          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </ul>

      <div class="swiper-pagination"></div>

      <div class="p-swiper__buttons">
        <div class="p-works-swiper-button-prev"></div>
        <div class="p-works-swiper-button-next"></div>
      </div>



      <!-- If we need scrollbar -->
      <!-- <div class="swiper-scrollbar"></div> -->
    </div>
    <div class="swiper p-swiperThumbnail">
      <!-- Additional required wrapper -->

      <div class="swiper-wrapper">
        <?php
        // 再度ループを使って画像一覧を表示
        if ($card_query->have_posts()): ?>
          <?php while ($card_query->have_posts()): $card_query->the_post(); ?>
            <div class="swiper-slide p-swiper-slide-thumb">
              <div class="p-works__img">
                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail(); ?>
                <?php else: ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/img/noimg.webp" alt="イメージがありません" />
                <?php endif; ?>
              </div>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <!-- 他のスライドを追加 -->
    </div>
  </div>
</section>