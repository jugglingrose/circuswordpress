<?php get_header(); ?>
<section id="heroImg">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/fivehoopcrop.jpg" alt="hula hooper">
  </section>

  <section id="menu">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 text-center">
          <h1 id="title">  <?php the_field('main_header'); ?></h1>
          <h2 class="redTXT"><?php the_field('seconday_header'); ?></h2>
        </div>
      </div>

      <div class="row menuItem">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
          <h2><?php the_field('service_1_title'); ?></h2>
          <p><?php the_field('service_1_description'); ?></p>
        </div>
      </div>

      <div class="row menuItem">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
          <h2><?php the_field('service_2_title'); ?></h2>
          <p><?php the_field('service_2_desc'); ?></p>
        </div>
      </div>

      <div class="row menuItem">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
          <h2><?php the_field('service_3_title'); ?></h2>
          <p><?php the_field('service_3_description'); ?></p>
        </div>
      </div>
      <div class="row menuItem">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
          <h2><?php the_field('service_4_title'); ?></h2>
          <p><?php the_field('service_4_description'); ?></p>
        </div>
      </div>
      <div class="row menuItem">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
          <h2><?php the_field('service_5_title'); ?></h2>
          <p><?php the_field('service_5_description'); ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 text-center">
            <button onclick="location.href='http://localhost/circuscg/home#contact';" type="button" class="btn btn-default">CONTACT</button>
          </div>
        </div>
      </div>
    </section>
    <?php get_footer(); ?>
