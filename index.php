    <?php get_header(); ?>
    <main class="blog-page">

    <!--<section id="menu">-->
    <section class="middle-area">
        <div class="container">
          <div class="row">
            <div class="blogs col-md-6 col-md-offset-2">
              <?php
              //If posts
              if( have_posts() ):
                //while have_posts
                while( have_posts() ): the_post();

                get_template_part( 'template-parts/content', get_post_format());

           endwhile;
           ?>
           <div class="row">
             <div class="pagination col-xs-6 text-left">
                <?php previous_posts_link('<< Previous'); ?>

             </div>
             <div class="pagination col-xs-6 text-right">
               <?php next_posts_link('Next >>'); ?>

             </div>
           </div>

           <?php
           else:
            ?>
            <p> There is nothing to be displayed yet</p>
          <?php endif; ?>

            </div>
              <aside class="sidebar col-md-2 h-100"><?php get_sidebar('blog'); ?></aside>
          </div>
        </div>
      </section>
    </main>
    <?php get_footer(); ?>
