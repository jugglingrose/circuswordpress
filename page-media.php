<?php get_header(); ?>
<main class="middle-area">
<section id="photos" >
  <div class="container">
    <div class="row">
          <?php
            /* The loop */
            while ( have_posts() ) : the_post();
                if ( get_post_gallery() ) :
                    $gallery = get_post_gallery( get_the_ID(), false );

                    /* Loop through all the image and output them one by one */
                    $slidenumber = 1;

                    foreach( $gallery['src'] as $src ) : ?>
                    <div class="col-md-4">
                      <div class="thumbnail">
                        <img src="<?php echo $src; ?>" class="my-custom-class" onclick="openModal();currentSlide(<?php echo $slidenumber; ?>)" alt="Gallery image" />
                      </div>
                    </div>
                        <?php
                        $slidenumber ++;
                    endforeach;
                endif;
            endwhile;
          ?>
      </div>
    </div>
  </section>

  <section id="myModal" class="modal">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <p class="close cursor" onclick="closeModal()">X</p>
        </div>
      </div>
      <div class="row modal-content">
        <div class="row">
            <?php
            while ( have_posts() ) : the_post();
                if ( get_post_gallery() ) :
                    $gallery = get_post_gallery( get_the_ID(), false );

                    /* Loop through all the image and output them one by one */
                    foreach( $gallery['src'] as $src ) : ?>
                    <div class="col-xs-12 mySlides">
                        <img src="<?php echo $src; ?>" class="my-custom-class" style="width:100%" alt="Gallery image" />
                    </div>
                        <?php
                    endforeach;
                endif;
            endwhile;
            ?>
        </div>
        <!-- Controls -->
        <a class="prev" onClick="plusSlides(-1)"> < </a>
        <a class="next" onclick="plusSlides(1)"> > </a>
      </div>
    </div>
  </section>


  <section>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div id="vidContain">
          <iframe src="https://www.youtube.com/embed/MyAkb7QfRu8" class="video">
          </iframe>
        </div>
        </div>
      </div>
    </div>
  </section>
</main>


  <?php get_footer(); ?>
