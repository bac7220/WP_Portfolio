<?php get_header(); ?>

<main class="l-main">
  <article <?php post_class('p-single-blog'); ?>>
    <div class="p-single-blog__inner">
      <!-- Breadcrumb -->
      <div class="p-single-blog__breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a> &gt; 
        <?php
        $category = get_the_category();
        if ($category) {
            echo '<a href="' . esc_url(get_category_link($category[0]->term_id)) . '">' . esc_html($category[0]->name) . '</a> &gt; ';
        }
        ?>
        <span><?php the_title(); ?></span>
      </div>

      <!-- Header (Title, Meta) -->
      <header class="p-single-blog__header">
        <div class="p-single-blog__meta">
          <?php if ($category) : ?>
            <span class="p-single-blog__category"><?php echo esc_html($category[0]->name); ?></span>
          <?php endif; ?>
          <time class="p-single-blog__date" datetime="<?php echo get_the_modified_date('c'); ?>">
            更新日: <?php echo get_the_modified_date('Y.m.d'); ?>
          </time>
        </div>
        <h1 class="p-single-blog__title"><?php the_title(); ?></h1>
      </header>

      <!-- Thumbnail -->
      <?php if (has_post_thumbnail()) : ?>
        <figure class="p-single-blog__thumbnail">
          <?php the_post_thumbnail('large'); ?>
        </figure>
      <?php endif; ?>

      <!-- Content -->
      <div class="p-single-blog__content">
        <?php the_content(); ?>
      </div>
    </div>
  </article>

  <!-- Related/Latest Posts -->
  <section class="p-single-blog__related">
    <div class="p-single-blog__inner">
      <h2 class="p-single-blog__related-title">最新の記事</h2>
      <ul class="p-blog__posts-list">
        <?php
        $latest_args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'post__not_in' => array(get_the_ID()),
            'ignore_sticky_posts' => 1
        );
        $latest_query = new WP_Query($latest_args);
        if ($latest_query->have_posts()) :
            while ($latest_query->have_posts()) : $latest_query->the_post();
        ?>
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
                <p class="p-blog__posts-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 40, '...'); ?></p>
              </div>
            </a>
          </li>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
        ?>
          <li style="grid-column: 1 / -1;"><p>記事がありません。</p></li>
        <?php endif; ?>
      </ul>
    </div>
  </section>
</main>
 <?php get_template_part('template/footer-item'); ?>

<?php get_footer(); ?>