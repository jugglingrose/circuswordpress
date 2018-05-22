<article <?php post_class()?>>
  <?php get_post_format(); ?>
  <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
  <?php the_post_thumbnail('medium'); ?>
  <div class="blog-meta-info">
    <p>Posted in <?php echo get_the_date(); ?></p>
    <p>Categories: <?php the_category(' '); ?></p>
 </div>
 <p><?php the_content(); ?></p>
</article>
