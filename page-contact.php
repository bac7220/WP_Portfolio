    <?php get_header(); ?>
    <section class="l-section p-contact">

        <div class="l-inner">
            <h2 class="l-section__head">
                <span class="c-title ">Contact</span>
                <span class="c-title__sub">お問い合わせページ</span>
            </h2>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div><?php the_content(); ?></div>
                <?php endwhile; ?>
            <?php else : ?>
                <p>No posts found.</p>
            <?php endif; ?>
        </div>
    </section>

    <!-- 背景画像の動的取得 -->
    <style>
        .p-contact {
            background: linear-gradient(to top, rgba(70, 79, 67, 0), rgba(70, 79, 67, 0.3)),
                url('<?php echo get_theme_file_uri(); ?>/img/contact-background.webp') center/cover no-repeat;
        }

    </style>

    <?php get_footer(); ?>