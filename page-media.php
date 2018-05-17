<?php get_header(); ?>
<section id="photos">
    <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/fivehoopkick.jpg"
            onclick="openModal();currentSlide(1)" alt="broadway hula hoop" style="width:100%">
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/five.jpg" onclick="openModal();currentSlide(2)"  alt="circus hula hoop" style="width:100%">
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/balljuggle.jpg" onclick="openModal();currentSlide(3)" alt="juggler" style="width:100%">
        </div>
      </div>
     </div>
    <div class="row">
     <div class="col-md-4">
       <div class="thumbnail">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/sixhoop.jpg" onclick="openModal();currentSlide(4)" alt="cirque hula hoop" style="width:100%">
       </div>
     </div>
     <div class="col-md-4">
       <div class="thumbnail">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/jugglehoop.jpg" onclick="openModal();currentSlide(5)" alt="hula hoop juggling" style="width:100%">
       </div>
     </div>
     <div class="col-md-4">
       <div class="thumbnail">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/abdc.jpg" onclick="openModal();currentSlide(6)" alt="LED hula hooping" style="width:100%">
       </div>
     </div>
   </div>
    <div class="row">
     <div class="col-md-4">
       <div class="thumbnail">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/clubs.jpg" onclick="openModal();currentSlide(7)" alt="club juggling" style="width:100%">
       </div>
     </div>
     <div class="col-md-4">
       <div class="thumbnail">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/graduationevent.png" onclick="openModal();currentSlide(8)" alt="hula hoop show" style="width:100%">
       </div>
     </div>
     <div class="col-md-4">
       <div class="thumbnail">

           <img src="<?php echo get_template_directory_uri(); ?>/assets/sixflags.jpg" onclick="openModal();currentSlide(9)" alt="event entertainment" style="width:100%">

       </div>
     </div>
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
          <div class="col-xs-12 mySlides">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/fivehoopkick.jpg" style="width:100%">
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 mySlides">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/five.jpg" style="width:100%">
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 mySlides">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/balljuggle.jpg" style="width:100%">
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 mySlides">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/sixhoop.jpg"  style="width:100%">
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 mySlides">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/jugglehoop.jpg"  style="width:100%">
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 mySlides">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/abdc.jpg" style="width:100%">
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 mySlides">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/clubs.jpg" style="width:100%">
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 mySlides">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/graduationevent.png" style="width:100%">
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 mySlides">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/sixflags.jpg"  style="width:100%">
          </div>
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
  <?php get_footer(); ?>
