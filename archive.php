<?php /* archive.php */ get_header(); ?>

<main class="p-blog">

  <!-- カテゴリ一覧 -->
  <section class="p-blog__categories">
    <h2 class="p-blog__categories-title">カテゴリ</h2>
    <ul class="p-blog__categories-list">
      <li class="p-blog__categories-item">
        <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>">すべて</a>
      </li>
      <?php
      $categories = get_categories();
      $current_cat_id = get_queried_object_id();
      foreach ($categories as $cat) : 
        $is_active = ($cat->term_id === $current_cat_id) ? 'is-active' : '';
      ?>
        <li class="p-blog__categories-item <?php echo $is_active; ?>">
          <a href="<?php echo get_category_link($cat->term_id); ?>">
            <?php echo esc_html($cat->name); ?>
            <span>(<?php echo $cat->count; ?>)</span>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <!-- 記事一覧 -->
  <section class="p-blog__posts">
    <h2 class="p-blog__posts-title"><?php single_term_title(''); ?></h2>
    <?php if (have_posts()) : ?>
      <ul class="p-blog__posts-list">
        <?php while (have_posts()) : the_post(); ?>
          <li class="p-blog__posts-item">
            <a href="<?php the_permalink(); ?>" class="p-blog__posts-link">
              <div class="p-blog__posts-img">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('medium'); ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/no-image.png" alt="No image">
                <?php endif; ?>
              </div>
              <div class="p-blog__posts-content">
                <time class="p-blog__posts-date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
                <h3 class="p-blog__posts-title-text"><?php the_title(); ?></h3>
                <p class="p-blog__posts-excerpt"><?php bac_the_excerpt_trimmed(80); ?></p>
              </div>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>

      <!-- ページネーション -->
      <?php the_posts_pagination(); ?>

    <?php else : ?>
      <p>記事がまだありません。</p>
    <?php endif; ?>
  </section>

</main>

<?php get_footer(); ?>
