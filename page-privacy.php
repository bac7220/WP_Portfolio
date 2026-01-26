 <?php get_header() ?>

 <div class="p-privacy">
     <div class="p-privacy-inner">
         <?php if (have_posts()):
                while (have_posts()) : the_post() ?>
                 <h1 class="p-privacy__title">
                     <?php the_title(); ?>
                 </h1>
                 <div class="p-privacy__contents">
                     <?php the_content(); ?>
                 </div>
             <?php endwhile; ?>
         <?php endif; ?>
     </div>
 </div>
 <?php get_footer(); ?>