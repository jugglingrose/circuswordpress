<article <?php post_class()?>>
  <?php get_post_format(); ?>
  <div class="row">
    <div class="col-xs-12 text-center">
      <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
    </div>
  </div>
  <?php the_post_thumbnail(); ?>
 <p>
   <?php echo get_the_excerpt(); ?>
   <a href="<?php the_permalink(); ?>">Read More</a>
 </p>
</article>
