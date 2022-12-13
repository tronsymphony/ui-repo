<!-- Schedule Form -->
<?php 
        if(!is_page("request-appointment")): 
            get_template_part( 'forms/schedule' ); 
        endif; 
        ?>




<!-- FOOTER CONTENT -->

<footer id="main">

    <div class="container">

        <div class="logoblock">
            <div class="logo-block">
                <a href="<?= get_site_url(); ?>" class="logo">
                    <img src="<?= IMG; ?>/" alt="" class="logo">
                </a>
            </div>
        </div>

        <div class="footer-block">
            <div class="item">
                <a href="<?= TELLINKPHONE ?>" class="link"><?= PHONE ?></a>
            </div>
            <div class="mapblock">
                <a href="" class="l">
                    <img src="<?= IMG; ?>/map@2x.png" alt="">
                </a>
            </div>
            <div class="block">
                <h2 class="sec-title">Sign up for our Newsletter</h2>
                <div class="signupform">
                    <form class="login-form">
                        <label id="signupinputlabel" for="signupinput">First Name</label>
                        <input type="text" id="signupinput" aria-labelledby="signupinputlabel"
                            placeholder="Enter Your Email" />
                        <div class="btn-container">
                            <button type="submit" class="ui-btn ui-submit">
                                Sign Up
                                <div class="btn-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30.728" height="14.444"
                                        viewBox="0 0 30.728 14.444">
                                        <g id="arrow" transform="translate(-1295.5 -4635.043)">
                                            <path id="Icon_metro-chevron-thin-right"
                                                data-name="Icon metro-chevron-thin-right"
                                                d="M17.422,10.422l-5.581-5.8a.544.544,0,0,1,0-.765.532.532,0,0,1,.757,0l6.12,6.181a.544.544,0,0,1,0,.765L12.6,16.985a.531.531,0,0,1-.757,0,.544.544,0,0,1,0-.765l5.581-5.8Z"
                                                transform="translate(1306.791 4631.844)" fill="#fff" stroke="#fff"
                                                stroke-width="1" />
                                            <line id="Line_7" data-name="Line 7" x1="29"
                                                transform="translate(1295.5 4642.5)" fill="none" stroke="#fff"
                                                stroke-width="1" />
                                        </g>
                                    </svg>


                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>




        </div>



    </div>

    <!-- quick links -->
    <div class="quick-links">

        <?php
                            wp_nav_menu( array(
                                'menu'           => 'Quick Links', 
                                'fallback_cb'    => false,
                                'items_wrap' => '<ul id="%1$s" class="%2$s links-bar">%3$s</ul>', 
                                'theme_location' => 'sidebar_right_menu', 
                                'walker' => new SH_Nav_Menu_Walker,
                                'container'       => false, 

                            ) );
                        ?>

    </div>

</footer>

<!-- footer copy -->
<div class="footercopy">
    <div class="container">
        <div class="row">
            <div class="flexcen">
                <div class="socialblock">
                    <a href="https://www.facebook.com/" aria-label="facebook">
                        <svg id="fb" xmlns="http://www.w3.org/2000/svg" width="25.828" height="25.828"
                            viewBox="0 0 25.828 25.828">
                            <path id="Path_135" data-name="Path 135"
                                d="M12.914,0A12.914,12.914,0,1,1,0,12.914,12.914,12.914,0,0,1,12.914,0Z"
                                fill="transparent" />
                            <path id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f"
                                d="M8.174,7.378,8.539,5H6.261V3.464A1.187,1.187,0,0,1,7.6,2.181H8.635V.16A12.628,12.628,0,0,0,6.8,0a2.9,2.9,0,0,0-3.1,3.2V5H1.609V7.378H3.695v5.739H6.261V7.378Z"
                                transform="translate(7.752 6.355)" fill="#7B7B7B" />
                        </svg>

                    </a>
                    <!-- <a href="#" class="ui-social" aria-label="instagram">
                        <svg id="ig" xmlns="http://www.w3.org/2000/svg" width="25.828" height="25.828"
                            viewBox="0 0 25.828 25.828">
                            <path id="Path_134" data-name="Path 134"
                                d="M12.914,0A12.914,12.914,0,1,1,0,12.914,12.914,12.914,0,0,1,12.914,0Z"
                                transform="translate(0)" fill="transparent" />
                            <path id="Icon_awesome-instagram" data-name="Icon awesome-instagram"
                                d="M6.556,5.433A3.363,3.363,0,1,0,9.919,8.8,3.358,3.358,0,0,0,6.556,5.433Zm0,5.55A2.186,2.186,0,1,1,8.743,8.8,2.19,2.19,0,0,1,6.556,10.983ZM10.841,5.3a.784.784,0,1,1-.784-.784A.783.783,0,0,1,10.841,5.3Zm2.227.8a3.882,3.882,0,0,0-1.06-2.748,3.907,3.907,0,0,0-2.748-1.06c-1.083-.061-4.329-.061-5.412,0A3.9,3.9,0,0,0,1.1,3.34,3.9,3.9,0,0,0,.041,6.089c-.061,1.083-.061,4.329,0,5.412A3.882,3.882,0,0,0,1.1,14.249a3.912,3.912,0,0,0,2.748,1.06c1.083.061,4.329.061,5.412,0a3.882,3.882,0,0,0,2.748-1.06,3.907,3.907,0,0,0,1.06-2.748c.061-1.083.061-4.326,0-5.409Zm-1.4,6.571a2.214,2.214,0,0,1-1.247,1.247,14.456,14.456,0,0,1-3.867.263A14.569,14.569,0,0,1,2.69,13.91a2.214,2.214,0,0,1-1.247-1.247A14.456,14.456,0,0,1,1.179,8.8,14.569,14.569,0,0,1,1.443,4.93,2.214,2.214,0,0,1,2.69,3.683a14.456,14.456,0,0,1,3.867-.263,14.569,14.569,0,0,1,3.867.263A2.214,2.214,0,0,1,11.67,4.93,14.456,14.456,0,0,1,11.933,8.8,14.448,14.448,0,0,1,11.67,12.663Z"
                                transform="translate(6.156 4.118)" fill="#7B7B7B" />
                        </svg>
                    </a> -->
                </div>
                <div class="copy__content">
                    <span class="main"><?= date('Y'); ?> © Site Title</span>
                    <span class="l">|</span>
                    <span class="main">
                        <a href="https://urgeinteractive.com/" target="_blank">
                            Website By Urge Interactive.</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer copy -->

<!-- Scroll Up -->
<a href="#" aria-label="go back up" id="scroll" class="scroll-top" style="display: none;">
    <span class="text">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
            x="0px" y="0px" viewBox="0 0 490.523 490.523" style="enable-background:new 0 0 490.523 490.523;"
            xml:space="preserve">
            <path style="fill:#FFC107;"
                d="M487.411,355.047L252.744,120.38c-4.165-4.164-10.917-4.164-15.083,0L2.994,355.047  c-4.093,4.237-3.976,10.99,0.262,15.083c4.134,3.993,10.687,3.993,14.821,0l227.115-227.115l227.115,227.136  c4.237,4.093,10.99,3.976,15.083-0.261c3.993-4.134,3.993-10.688,0-14.821L487.411,355.047z" />
            <path
                d="M479.859,373.266c-2.831,0.005-5.548-1.115-7.552-3.115L245.192,143.015L18.077,370.151  c-4.237,4.093-10.99,3.976-15.083-0.262c-3.993-4.134-3.993-10.687,0-14.821l234.667-234.667c4.165-4.164,10.917-4.164,15.083,0  l234.667,234.667c4.159,4.172,4.148,10.926-0.024,15.085C485.388,372.146,482.681,373.265,479.859,373.266z" />
        </svg>
    </span>
</a>


<script type="text/javascript" defer>
WebFontConfig = {
    google: {
        families: [
            "Yeseva+One",
            "Open+Sans:wght@300,400,600,700,800"
        ]
    }
};

(function() {
    var wf = document.createElement("script");
    wf.src = "https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js";
    wf.type = "text/javascript";
    wf.async = "true";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(wf, s);
})();
</script>






<?php wp_footer(); ?>


<?php 
        // get_template_part('widgets/search'); ?>

<!-- google tracking code for schedule form submit -->
<!-- <script type="text/javascript">
            // Document Ready
            jQuery(document).ready(function($){

                $('#contact .btn').on('click', function(e){
                    gtag('event','click', {
                        'event_category': 'Buttons', 'event_label': 'Schedule Form Button Click'
                    });
                })

                //track telephone link clicks
                $('a[href*="650-485-2663"]').on('click', function(e){
                    gtag('event','click', {
                        'event_category': 'Links', 'event_label': 'Telephone Number Link Click'
                    });
                })

            })
        </script> -->




</body>

</html>