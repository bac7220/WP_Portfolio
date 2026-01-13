 <?php get_header() ?>

 <?php get_template_part('template/fv') ?>
 <div class="u-bg-white-opacity-80">

     <?php get_template_part('template/service'); ?>

     <section id="works" class="l-section  works">
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
                                'post_type' => 'post',
                                'posts_per_page' => 6,
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

                                 <?php if (get_field('user_name') || get_field('portfolio_url')): ?>
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
                                 <?php endif; ?>
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
     <section id="about" class="l-section u-bg-white-opacity-80">
         <div class="l-inner">
             <div class="about__container">
                 <div class="about__text-contents">
                     <h2 class="l-section__head">
                         <span class="c-title">About</span>
                         <span class="c-title__sub">私について</span>
                     </h2>
                     <div class="p-about__contents u-mb-1">
                         <div class="p-about-img">
                             <img src="https://bac-portfolio.site/wp-content/uploads/2025/12/okuda-coder.png" alt="アイコン画像" class="c-img__top">
                         </div>


                         <h3 class="p-about-title p-about-skill u-mb-1">SKILL</h3>
                         <div class="p-about-web">
                             <div class="c-text__category">
                                 <div class="c-text__category-coding u-mb-1">
                                     <h4 class="c-text__category-name "><strong>Web開発</strong></h4>
                                     <ul class="c-text__category-items l-grid-row">

                                         <li class="c-text__category-item">
                                             <p class="c-text ">LP、HP制作</p>
                                         </li>
                                         <li class="c-text__category-item">
                                             <p class="c-text ">LP、HP保守、修正、改修</p>
                                         </li>


                                         <li class="c-text__category-item">
                                             <p class="c-text c-text--wordpress">WordPress<br class="u-hidden-cq550">オリジナルテーマ制作</p>
                                         </li>


                                         <li class="c-text__category-item">
                                             <p class="c-text c-text--wordpress">WordPress<br class="u-hidden-cq550">既存テーマの修正、保守</p>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                         <div class="p-about-writing">
                             <div class="c-text__category">
                                 <div class="c-text__category-writing">
                                     <h4 class="c-text__category-name"><strong>その他実務経験</strong></h4>
                                     <ul class="c-text__category-items l-grid-row">
                                         <li class="c-text__category-item">
                                             <p class="c-text c-text--writing">ドメイン移管</p>
                                         </li>
                                         <li class="c-text__category-item">
                                             <p class="c-text c-text--writing">WordPressテーマ<br>BuddyBossを利用した会員制サイトの調整</p>
                                         </li>
                                         <li class="c-text__category-item">
                                             <p class="c-text c-text--writing">Gtagの設置(イベント計測)</p>
                                         </li>
                                         <li class="c-text__category-item">
                                             <p class="c-text c-text--writing">Git/Github</p>
                                         </li>
                                     </ul>
                                 </div>

                             </div>

                         </div>
                         <div class="p-about-time">
                             <div class="c-text__category">
                                 <div class="c-text__category-time u-mb-1">
                                     <p class="c-text__category-name ">作業時間</p>
                                     <div class="p-about__top-text">
                                         <p class="c-text">平日</p>
                                         <div>
                                             <p class="c-text"><time>5:00</time> ~ <time>20:00</time></p>
                                         </div>
                                     </div>
                                     <div class="p-about__top-text ">
                                         <div></div>
                                     </div>
                                     <div class="p-about__top-text">
                                         <p class="c-text">土日</p>
                                         <p class="c-text"><time>5:00</time> ~ <time>20:00</time></p>
                                     </div>

                                 </div>
                             </div>
                         </div>
                         <div class="p-about-text">
                             <div class="c-text__category">
                                 <div class="c-text__category-contact">
                                     <h4 class="c-text__category-name">連絡方法</h4>
                                     <p class="c-text">DM,LINE,Zoom,Skype他、XのDMやChatworkなど柔軟に対応します。</p>
                                     <p class="c-text">活動時間外でもご連絡いただければ即レスを心がけます。</p>
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>
                 <div class="l-button ">
                     <a href="<?php echo esc_url(home_url('/about')); ?>" class="c-button ">
                         もっと見る <svg class="c-button__icon" width="24" height="24" role="img" aria-label="right-arrow">
                             <use href="#right-svg"></use>
                         </svg>
                     </a>
                 </div>
             </div>
         </div>
 </div>
 </section>


 <?php get_template_part('template/footer-item'); ?>

 <?php get_template_part('template/svg'); ?>

 <?php get_footer(); ?>