<article <?php post_class()?>>
  <?php get_post_format(); ?>
  <div class="row">
    <div class="col-xs-12 text-center">
      <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
    </div>
  </div>
 <!--Display Video-->
    <?php
     $content = apply_filters( 'the_content', get_the_content() );
     $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );

     if ( ! empty( $video ) ) {
				foreach ( $video as $video_html ) {
					echo '<div class="entry-video">';
						echo $video_html;
					echo '</div>';
				}
			};
      ?>
</article>
