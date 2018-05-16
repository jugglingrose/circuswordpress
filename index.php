    <?php get_header(); ?>
    <main>
      <section id="heroImg">
      <img src="../assets/fivehoopcrop.jpg" alt="hula hooper">
    </section>

    <!--<section id="menu">-->
    <section class="blog-area">
        <div class="container">
          <div class="row">
            <div class="blogs col-md-9">
              <?php
              //If posts
              if( have_posts() ):
                //while have_posts
                while( have_posts() ): the_post();
             ?>
             <article>
               <h2><?php the_title(); ?></h2>
               <p>Posted in <?php echo get_the_date(); ?></p>
               <p>Categories: <?php the_category(' '); ?></p>
               <p><?php the_content(); ?></p>
             </article>
             <?php
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
