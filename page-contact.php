    <?php get_header(); ?>
    <section class="l-section p-contact">

        <div class="l-inner">
            <h2 class="l-section__head p-contact__head">
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
    <?php get_template_part('template/footer-item'); ?>

    <!-- 背景画像の動的取得 -->
    <style>

    </style>

    <?php get_footer(); ?>