<?php get_header(); ?>
<div class="container middle-area">
  <div class="row">
    <div class="col-sm-12">
      <?php
      while( have_posts() ):
        the_post();
        get_template_part('template-parts/content', 'single');
      endwhile;
       ?>
     </div>
   </div>
 </div>
<?php get_footer(); ?>
