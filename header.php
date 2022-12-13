<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php wp_title(); ?></title>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=no" /> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="<?php wp_title(); ?>">
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="shortcut icon" type="image/ico" href="<?php echo IMG; ?>/favicon.ico">
  
  <!-- WPHEAD -->
  <?php wp_head(); ?>
  <!-- WPHEAD -->
  
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/public/frontend.css">

<?php $client = new Urge\Urge(); ?>
<?php 
// get_template_part( 'data/analytics' ) ?>
<?php 
get_template_part( 'data/schema/schema' ) ?>
<?php //get_template_part( 'data/tag-manager' ) ?>
<?php //get_template_part( 'data/fb-pixel' ) ?>
</head>

<body <?php if(!is_front_page()){$sub = "subpage";} ?>  <?php body_class($sub); ?> id="top" itemscope itemtype="http://schema.org/WebPage">


    <!-- HEADER -->
    <header id="header-container">

        <section class="bar-top">
            <div class="container">
                <div class="content">
                    <div class="socialblock">
                        <a href="https://www.facebook.com/" target="_blank" class="ui-social" tabindex="0" aria-label="facebook">
                            <svg id="fb" xmlns="http://www.w3.org/2000/svg" width="25.828" height="25.828"
                                viewBox="0 0 25.828 25.828">
                                <path id="Path_135" data-name="Path 135"
                                    d="M12.914,0A12.914,12.914,0,1,1,0,12.914,12.914,12.914,0,0,1,12.914,0Z"
                                    fill="transparent" />
                                <path id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f"
                                    d="M8.174,7.378,8.539,5H6.261V3.464A1.187,1.187,0,0,1,7.6,2.181H8.635V.16A12.628,12.628,0,0,0,6.8,0a2.9,2.9,0,0,0-3.1,3.2V5H1.609V7.378H3.695v5.739H6.261V7.378Z"
                                    transform="translate(7.752 6.355)" fill="#7A7C89" />
                            </svg>

                        </a>
                        <!-- <a href="#" class="ui-social" tabindex="0" aria-label="instagram">
                            <svg id="ig" xmlns="http://www.w3.org/2000/svg" width="25.828" height="25.828"
                                viewBox="0 0 25.828 25.828">
                                <path id="Path_134" data-name="Path 134"
                                    d="M12.914,0A12.914,12.914,0,1,1,0,12.914,12.914,12.914,0,0,1,12.914,0Z"
                                    transform="translate(0)" fill="transparent" />
                                <path id="Icon_awesome-instagram" data-name="Icon awesome-instagram"
                                    d="M6.556,5.433A3.363,3.363,0,1,0,9.919,8.8,3.358,3.358,0,0,0,6.556,5.433Zm0,5.55A2.186,2.186,0,1,1,8.743,8.8,2.19,2.19,0,0,1,6.556,10.983ZM10.841,5.3a.784.784,0,1,1-.784-.784A.783.783,0,0,1,10.841,5.3Zm2.227.8a3.882,3.882,0,0,0-1.06-2.748,3.907,3.907,0,0,0-2.748-1.06c-1.083-.061-4.329-.061-5.412,0A3.9,3.9,0,0,0,1.1,3.34,3.9,3.9,0,0,0,.041,6.089c-.061,1.083-.061,4.329,0,5.412A3.882,3.882,0,0,0,1.1,14.249a3.912,3.912,0,0,0,2.748,1.06c1.083.061,4.329.061,5.412,0a3.882,3.882,0,0,0,2.748-1.06,3.907,3.907,0,0,0,1.06-2.748c.061-1.083.061-4.326,0-5.409Zm-1.4,6.571a2.214,2.214,0,0,1-1.247,1.247,14.456,14.456,0,0,1-3.867.263A14.569,14.569,0,0,1,2.69,13.91a2.214,2.214,0,0,1-1.247-1.247A14.456,14.456,0,0,1,1.179,8.8,14.569,14.569,0,0,1,1.443,4.93,2.214,2.214,0,0,1,2.69,3.683a14.456,14.456,0,0,1,3.867-.263,14.569,14.569,0,0,1,3.867.263A2.214,2.214,0,0,1,11.67,4.93,14.456,14.456,0,0,1,11.933,8.8,14.448,14.448,0,0,1,11.67,12.663Z"
                                    transform="translate(6.156 4.118)" fill="#7A7C89" />
                            </svg>
                        </a> -->
                    </div>
                    <div class="links">
                        <a href="<?= get_site_url(); ?>/promotions/" tabindex="0" class="ui-link">PROMOTIONS</a>
                        <a href="<?= get_site_url(); ?>/contact-us/" tabindex="0" class="ui-link">Contact Us</a>
                        
                        <a href="<?= TELLINKPHONE ?>" tabindex="0" class="ui-link"><?= PHONE ?></a>
                        
                    </div>
                  
                </div>
            </div>
        </section>

        <section class="nav-container">

            <div class="logonav">
                <a href="<?= get_site_url(); ?>" class="nav-logo">
                Starter Theme
                    <!-- <img src="<?= IMG; ?>/logo.svg" alt="" height="135px" width="222px" class="logo-image"> -->
                </a>
            </div>

            <a class="skip-link screen-reader-text" tabindex="0" href="#content">Skip to content</a>


            <nav class="navdiv" aria-label="main navigation" role="navigation">

                <span class="closebutton menu-button" >
                    <div class="bars" aria-label="menu" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-label="Open Menu">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                </span>

                <div class="navbaritems ">
                <?php
                            wp_nav_menu( array(
                                'menu'           => 'Main Menu', 
                                'fallback_cb'    => false,
                                'items_wrap' => '<ul id="%1$s" class="%2$s items">%3$s</ul>', 
                                'theme_location' => 'sidebar_right_menu', 
                                'walker' => new SH_Nav_Menu_Walker,
                                'container'       => false, 

                            ) );
                        ?>
                </div>

            </nav>

        </section>
    </header>
    <!-- HEADER -->

 
