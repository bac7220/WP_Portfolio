<?php get_header(); ?>


<section class="l-section p-works-detail">
    <div class="l-inner">
        <h2 class="l-section__head">
            <span class="c-title">works</span>
        </h2>
        <div class="p-works__detail">
            <div class="p-works__detail-wrapper">
                <?php
                $card_query = new WP_Query(
                    array(
                        'post_type' => 'works',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                    )
                );
                ?>
                <?php if ($card_query->have_posts()): ?>
                    <?php while ($card_query->have_posts()): $card_query->the_post(); ?>
                        <div class="p-works__detail-card">
                            <a href="<?php echo get_the_permalink(); ?>" class="p-works__detail-image">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else: ?>
                                    <img src="<?php echo get_theme_file_uri(); ?>/img/noimg.webp" alt="イメージがありません" />
                                <?php endif; ?>
                            </a>
                            <div class="p-works__detail-contents">
                                <div class="p-works__detail-title">
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <div class="p-works__detail-content">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('template/footer-item'); ?>

<?php get_template_part('template/svg'); ?>

<?php get_footer(); ?>