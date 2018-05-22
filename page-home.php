
<!-- style="background: url(/assets/sixhulahoop.jpg); background-repeat: no-repeat; background-size: cover; -->
<?php get_header(); ?>
<div id="landing">
    <div class="container-fluid">
        <div class="row titleBox">
          <div class="col-xs-12 col-md-6 noPadding" id="titleA">
            <span><h1 id="title">CIRQUE ARTIST</h1></span>
          </div>
          <div class="col-xs-12 col-md-6 noPadding title" id="titleB">
            <span><h1 id="title">COREAN GONZALES</h1></span>
          </div>
        </div>
      </div>
    </div>

</div>

  <section id="about" class="abouthdr" onload="test()">
    <div class="container-fluid">
      <div class="row flexContain">
        <div  class="col-xs-12 col-md-6 noPadding box">
          <img class="aboutImageBlocks" src="<?php echo get_template_directory_uri(); ?>/assets/balljugglecrop.jpg" alt="juggling juggler" />
        </div>
        <div id="aboutme" class="col-xs-12 col-md-6 text-center nopPadding box">

          <h2>
            <?php the_field('home_title_a'); ?>
          </h2>
          <p>

            <?php
               //If posts
               if( have_posts() ):
                 //while have_posts
                 while( have_posts() ): the_post();
              ?>
              <article>
                <p><?php the_content(); ?></p>
              </article>
              <?php
            endwhile;
            else:
             ?>
             <p> There is nothing to be displayed yet</p>
           <?php endif; ?>

          </p>
          <button onclick="location.href='services';" type="button" class="btn btn-default">SERVICES</button>
        </div>
      </div>
      <div class="row flexContain">
        <div id="pastperformances" class = "col-xs-12 col-md-6 text-center noPadding box boxA">
          <h2>
            <?php the_field('home_title_b'); ?>
          </h2>
          <div id="text2">
            <!-- Text -->
            <?php the_field('home_content_b'); ?>
          </div>
          <button onclick="location.href='#contact';" type="button" class="btn btn-default">CONTACT</button>
        </div>
        <div class="col-xs-12 col-md-6 noPadding box boxB">
          <img class="aboutImageBlocks" src="<?php echo get_template_directory_uri(); ?>/assets/4hoopcrop.jpg" alt="circus hula hoop"/>
        </div>
      </div>
    </div>
  </section>

  <section id="review">
    <div id="review" class="container-fluid">
      <div class="row">
        <div id="reviews" class="col-xs-12 col-sm-8 col-sm-offset-2 text-center whiteTXT">
          <h2>REVIEWS</h2>
          <p><?php the_field('reviews'); ?></p>
            <p id="signature">~John, M.A.C Cosmetics</p>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container-fluid">
        <div  class='row'>
          <div class="col-xs-12 text-center">
            <h2><?php the_field('contact_title'); ?></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
            <form <form action="https://formspree.io/cirqueartist@coreangonzales.com"
              method="POST">
              <input class="L" type="text" name="name" placeholder="Name">
              <input type="email" name="email" placeholder="Email" name="_replyto" required>
              <input  class="L" type="text" name="date" placeholder="Event Date" required>
              <input type="text" name="location" placeholder="Event Location" required>
              <input  class="L" type="text" name="number of attendees" placeholder="Number Of Guests" required>
              <input type="text" name="event type" placeholder="Type Of Event" required>
              <textarea name="additional details:" rows="8" cols="25">Additional Info</textarea>
            </br>
              <button type="submit" value="Send" class="btn btn-default">SUBMIT</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <?php get_footer(); ?>
