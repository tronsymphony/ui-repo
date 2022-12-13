<?php
  if ( has_post_thumbnail( $post->ID ) ){
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
    $image = $image[0];
  } else { 
    $image = IMG . '/placeholder.jpg'; 
  }
?>
<section class="interior-fold fold-landing <?php if ( has_post_thumbnail( $post->ID )  ) { echo "postthumb-contains"; } ?>">
  <div class="fold-background"></div>
  <div class="fold-content-main">
	<div class=" banner-bg">
		<img src="<?php echo $image ?>" alt="<?php if (is_post_type_archive()){ post_type_archive_title(); } else { the_title(); } ?>" class="bannerim">
	</div>
</section>



