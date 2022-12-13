<?php
    /* Template name: Front Page */
    get_header();
?>

<!-- MAIN CONTENT -->
<main role="main" class="main" id="content">

    <section class="welcome">
        <div class="img">
            <picture>
                <source srcset="<?= IMG; ?>/EMPOWERYOURBEAUTY.jpg" type="image/jpeg">
                <source srcset="<?= IMG; ?>/EMPOWERYOURBEAUTY.webp" type="image/webp">
                <img src="img/EMPOWERYOURBEAUTY.jpg" alt="Empower Your Beauty" width="1500px" height="800px"
                    class="pic ">
            </picture>
        </div>
        <div class="container">
            <div class="content">
                <div class="rvl">
                    <h1 class="sec-title w">
                        Starter Theme
                    </h1>
                </div>
                <div class="rvl">
                    <p class="w">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quasi ad impedit laborum, itaque iure in temporibus, omnis, veniam doloremque placeat culpa vel laboriosam? Eaque numquam eius illum dolores quod?
                    </p>
                </div>
                <div class="rvl">
                    <div class="btn-container">
                        <a href="<?= get_site_url(); ?>/services/" class="ui-btn ui-w">
                            View Services
                            <span class="btn-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30.728" height="14.444"
                                    viewBox="0 0 30.728 14.444">
                                    <g id="arrow" transform="translate(-1295.5 -4635.043)">
                                        <path id="Icon_metro-chevron-thin-right"
                                            data-name="Icon metro-chevron-thin-right"
                                            d="M17.422,10.422l-5.581-5.8a.544.544,0,0,1,0-.765.532.532,0,0,1,.757,0l6.12,6.181a.544.544,0,0,1,0,.765L12.6,16.985a.531.531,0,0,1-.757,0,.544.544,0,0,1,0-.765l5.581-5.8Z"
                                            transform="translate(1306.791 4631.844)" fill="#df8797" stroke="#fff"
                                            stroke-width="1" />
                                        <line id="Line_7" data-name="Line 7" x1="29"
                                            transform="translate(1295.5 4642.5)" fill="none" stroke="#fff"
                                            stroke-width="1" />
                                    </g>
                                </svg>

                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>



<?php get_footer(); ?>