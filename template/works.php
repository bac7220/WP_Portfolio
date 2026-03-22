 <section id="works" class="l-section  p-works">
   <div class="l-inner">
     <h2 class="l-section__head">
       <p class="c-title">Works</p>
       <p class="c-title__sub">実績紹介</p>
     </h2>
     <p class="section__lead-text">
       これまで制作したWebサイトです。また、当サイトも自ら制作していますので実績の一つとして御覧ください。<br>


     </p>
     <div class="section__contents">
       <ul class="l-grid">
         <?php
          $card_query = new WP_Query(
            array(
              'post_type' => 'works',
              'posts_per_page' => 4,
            )
          );
          ?>
         <?php if ($card_query->have_posts()):
            while ($card_query->have_posts()):
              $card_query->the_post();

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
             <li class="c-card l-subgrid u-mb-1">
               <a href="<?php echo $link_url; ?>" class=" c-card__link">
                 <h3 class="c-card__title u-mb-1"><?php the_title(); ?></h3>

                 <div class="c-card__img u-mb-1">
                   <?php if (has_post_thumbnail()): ?>
                     <?php the_post_thumbnail(); ?>
                   <?php else: ?>
                     <img src="<?php echo get_theme_file_uri(); ?>/img/noimg.webp" alt="イメージがありません" />
                   <?php endif; ?>
                 </div>

                 <?php
                  $content = wp_trim_words(get_the_content(), 100, '...');
                  echo '<p class="c-card__text">' . $content . '</p>';
                  ?>
               </a>

               <!-- <?php if (get_field('user_name') || get_field('portfolio_url')): ?>
                 <div class="c-card__footer">
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
               <?php endif; ?> -->
             </li>

             <?php wp_reset_postdata(); ?>
           <?php endwhile; ?>
         <?php endif; ?>
       </ul>
       <div class="l-button">
         <a href="<?php echo esc_url(home_url('works')); ?>" class="c-button">
           実績一覧へ
           <svg class="c-button__icon" width="24" height="24" role="img" aria-label="right-arrow">
             <use href="#right-svg"></use>
           </svg>
         </a>

       </div>
     </div>
   </div>
 </section>