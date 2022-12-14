<?php 
// Template Name: Contact Us
get_header(); ?>

<section class="foldimage">
  <?php get_template_part('template-parts/banner/full-width') ?>

  <?php 
    if ( function_exists('yoast_breadcrumb') ) { 
      yoast_breadcrumb("<div class=\"breadcrumbs\"><div class=\"crumbscontainer\">","</div></div>" ); 
    } 
  ?>

  <section class="main-title">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1><?php the_title(); ?></h1>
          <p>
            <?php 
              if(has_excerpt()){ 
                echo get_the_excerpt();
              } 
            ?>
          </p>
        </div>
      </div>
    </div>
  </section>

</section>
 

<div class="pagesection">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <section class="entry-content">
          <?php
              if (have_posts()) {
                while (have_posts()) {
                  the_post();
                    get_template_part( 'template-parts/content/content' );
                }
              } else {
                get_template_part( 'template-parts/content/no-content' );
              }
            ?>
        </section>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <hr />
        <!-- <p>* Individual results may vary; not a guarantee.</p> -->
        <?php get_template_part( 'widgets/share' ); ?>
        <?php get_template_part( 'widgets/edit' ); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer()?>
