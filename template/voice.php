  <section id="voice" class="l-section">
    <div class="l-inner">
      <div class="about__container">
        <div class="about__text-contents">
          <h2 class="l-section__head">
            <span class="c-title">Voice</span>
            <span class="c-title__sub">お客様の声</span>
          </h2>

          <div class="p-voice__container">
            <div class="p-voice__container-inner">
              <div class="p-voice__items">
                <?php
                $voice_group = SCF::get('voice_group', 272);
                if ($voice_group):
                  foreach ($voice_group as $voice_item):
                    $img = $voice_item['voice_img'];
                    $img_url = wp_get_attachment_image_url($img, 'full');
                    $text = $voice_item['voice_text']; ?>
                    <div class="p-voice__item">
                      <div class="p-voice__img">
                        <img src="<?php echo esc_url($img_url); ?>" alt="">
                      </div>
                      <div class="p-voice__text-box">
                        <p class="p-voice__text">
                          <?php echo nl2br(esc_html($text)) ?>
                        </p>
                      </div>
                    </div>
                  <?php endforeach; ?>
                <?php endif; ?>
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
  </section>