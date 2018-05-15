<!DOCTYPE html>
  <html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116546517-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-116546517-1');
    </script>

    <title>Site of Circus Artist & Variety Artist Corean Gonzales. Corean provides
      circus entertainment and variety shows throughout Texas and beyond.
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site of Circus & Variety Artist Corean Gonzales.
    Corean specializes in hula hooping, juggling, LED shows, dance, and more. Available
    to perform circus acts and variety shows nationwide">
    <meta charset="utf-8">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> >

  </header>
    <nav id="navb" class="navbar navbar-inverse navbar-fixed-top redNav">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" id="brand" href="#">COREAN GONZALES</a>
        </div>
        <!--<div class="collapse navbar-collapse" id="myNavbar">-->

            <?php wp_nav_menu( array(
                'menu' => 'main',
                'theme_location' => 'my_main_menu',
                'depth'	=> 2, // 1 = no dropdowns, 2 = with dropdowns.
	              'container' => 'div',
	              'container_class'=> 'collapse navbar-collapse',
	              'container_id'=> 'bs-example-navbar-collapse-1',
	              'menu_class' => 'navbar-nav mr-auto',
	              'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
	              'walker' => new wp_bootstrap_navwalker()
            ));
            ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>
