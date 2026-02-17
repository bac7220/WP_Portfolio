<?php get_header(); ?>

<div class="l-section">
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
                $voice_group = SCF::get('voice_group', get_the_ID());
              if ($voice_group):
                foreach ($voice_group as $voice_item):
                  // Check if fields exist to avoid errors if empty rows
                  if (empty($voice_item['voice_img']) && empty($voice_item['voice_text'])) continue;

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
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('template/footer-item'); ?>
<?php get_template_part('template/svg'); ?>
<?php get_footer(); ?>