  <section id="voice" class="l-section">
    <div class="l-inner">
      <div class="about__container">
        <div class="about__text-contents">
          <h2 class="l-section__head">
            <span class="c-title">Voice</span>
            <span class="c-title__sub">お客様の声</span>
            <span>これまでご対応させて頂いたお客様の声を掲載しています。</span>
          </h2>

          <div class="p-voice__container">
            <div class="p-voice__container-inner">
              <div class="p-voice__items u-mb-1">
                <?php
                $voice_group = SCF::get('voice_group', 272);
                if ($voice_group):
                  $count = 0;
                  foreach ($voice_group as $voice_item):
                    if ($count >= 3) break; // Limit to 3 items
                    $img = $voice_item['voice_img'];
                    $img_url = wp_get_attachment_image_url($img, 'full');
                    $text = $voice_item['voice_text'];
                    $voice_name = $voice_item['voice_name']; ?>
                    <div class="p-voice__item js-fade-in">
                      <div class="p-voice__meta">
                        <div class="p-voice__img">
                          <img src="<?php echo esc_url($img_url); ?>" alt="">
                        </div>
                        <p class="p-voice__name"><?php echo esc_html($voice_name); ?></p>
                      </div>
                      <div class="p-voice__text-box">
                        <p class="p-voice__text">
                          <?php echo nl2br(esc_html($text)) ?>
                        </p>
                      </div>
                    </div>
                  <?php $count++;
                  endforeach; ?>
                <?php endif; ?>
              </div>
              <div class="l-button">
                <a href="<?php echo esc_url(home_url('voice')); ?>" class="c-button">
                  お客様の声一覧へ
                  <svg class="c-button__icon" width="24" height="24" role="img" aria-label="right-arrow">
                    <use href="#right-svg"></use>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>