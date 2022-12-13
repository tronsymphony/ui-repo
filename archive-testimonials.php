<?php get_header(); ?>

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
            <?php if ( is_post_type_archive() ) { ?>
              <h1>
                <?php post_type_archive_title(); ?>
              </h1>
            <?php } else { ?>
              <h1>
                <?php single_cat_title();?>
              </h1>
            <?php } ?>
          </div>
        </div>
    </div>
  </section>

</section>

<div class="pagesection ">
  <div class="container">

    <div class="row">
        <?php
          if (have_posts()) {
            echo '<div class="card-columns">';
            while (have_posts()) {
              the_post();
              
              get_template_part( 'template-parts/content/excerpt-testimonial');
            }
            echo '</div>';
          } else {
            echo '<div class="col-lg-12">';
            get_template_part( 'template-parts/content/no-content' );
            echo '</div>';
          }
        ?>
    </div>

    <div class="row">
      <!-- Start Col -->
      <div class="col-12 text-center">
        <nav class="pagination">
          <?php
              global $wp_query;
              $big = 999999999;

              echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages
              ) );
            ?>
        </nav>
      </div>
      <!-- End Col -->

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
</div>

<?php get_footer(); ?>
