    <?php get_header(); ?>
    <main >

    <!--<section id="menu">-->
    <section class="middle-area">
        <div class="container">
          <div class="row">
            <div class="blogs col-md-9">
              <?php
              //If posts
              if( have_posts() ):
                //while have_posts
                while( have_posts() ): the_post();

                get_template_part( 'template-parts/content', get_post_format());

           endwhile;
           else:
            ?>
            <p> There is nothing to be displayed yet</p>
          <?php endif; ?>

            </div>
              <aside class="sidebar col-md-3 h-100"><?php get_sidebar('blog'); ?></aside>
          </div>
        </div>
      </section>
    </main>
    <?php get_footer(); ?>
