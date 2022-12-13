
    <!-- Request an Appointment -->
    <section class="form">
        <div class="container">
         
            <div class="formcontent">
                <div class="content">
                    <div class="rvl">
                        <?php if(is_page('request-appointment')): ?>
                            <h1 class="sec-title">Request an Appointment</h1>
                        <?php else: ?>
                            <h2 class="sec-title">Request an Appointment</h2>
                        <?php endif;?>
                        <p class="">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur est dolores eaque culpa ea facere mollitia possimus, vero recusandae, eos necessitatibus accusamus architecto, rerum fugit nisi officia. Nostrum, tempora minus?
                        </p>
                    </div>
                </div>
                <form id="schedule" name="scheduleform" class="img-shadow appointment-wrapper">
                    <div class="formpwrap">
                        <!-- First -->
                        <div class="input rvl">
                            <label id="inputfirstnamelabel" for="inputfirstname">First Name</label>
                            <input type="text" id="inputfirstname" aria-labelledby="inputfirstnamelabel" name="firstname" placeholder="First Name" class="form-control" required />
                        </div>

                        <!-- Last -->
                        <div class="input rvl">
                            <label id="inputlastnamelabel" for="inputlastname">Last Name</label>
                            <input type="text" id="inputlastname" aria-labelledby="inputlastnamelabel" name="lastname" placeholder="Last Name" class="form-control" required />
                        </div>

                        <!-- Email -->
                        <div class="input rvl">
                            <label id="emaillabel" for="email">Email</label>
                            <input type="text" id="email" aria-labelledby="emaillabel" placeholder="Email" name="email" class="form-control" />
                        </div>

                        <!-- Phone -->
                        <div class="input rvl">
                            <label id="phonenumberlabel" for="phone">Phone Number</label>
                            <input type="text" id="phone" aria-labelledby="phonenumberlabel" placeholder="Phone Number" name="phone" class="form-control" />
                        </div>

                        <!-- Preferred Time -->
                        
                        <div class="input rvl">
                            <label id="treatmentlabel" for="treatmentid">Treatment (Optional)</label>
                            <select name="preferred_time" id="treatmentid" aria-labelledby="treatmentlabel" class="form-control" required>
                                <option value="" disabled selected>Treatment (Optional)</option>
                                <?php
                                                            $loop = new WP_Query( 
                                                                array( 
                                                                    'post_type' => 'treatments', 
                                                                    'posts_per_page'=> -1, 
                                                                    'orderby'=> 'name',
                                                                    'order'=>'ASC',

                                                                )
                                                            );
                                                            if ( $loop->have_posts() ) :
                                                                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                                                
                                                                            
                                                                            <option value="<?php the_title(); ?>"><?php the_title(); ?></option>
                                                                <?php endwhile;
                                                                if (  $loop->max_num_pages > 1 ) : ?>
                                                                
                                                                <?php endif;
                                                            endif;
                                                            wp_reset_postdata();
                                                        ?>
                            </select>
                        </div>

                        <!-- Preferred Day -->
                        <div class="input rvl">
                            <label id="datelabel" for="dateid">Date/Time (Optional)</label>
                            <select name="preferred_day" id="dateid" aria-labelledby="datelabel" class="form-control" required>
                                <option value="" disabled selected>Date/Time (Optional)</option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <div class="submitbutton rvl">
                            <div class="btn-container">
                                <button type="submit" class="ui-btn ui-w">
                                    Request Appointment
                                    <span class="btn-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30.728" height="14.444" viewBox="0 0 30.728 14.444">
                                            <g id="arrow" transform="translate(-1295.5 -4635.043)">
                                              <path id="Icon_metro-chevron-thin-right" data-name="Icon metro-chevron-thin-right" d="M17.422,10.422l-5.581-5.8a.544.544,0,0,1,0-.765.532.532,0,0,1,.757,0l6.12,6.181a.544.544,0,0,1,0,.765L12.6,16.985a.531.531,0,0,1-.757,0,.544.544,0,0,1,0-.765l5.581-5.8Z" transform="translate(1306.791 4631.844)" fill="#dd8898" stroke="#dd8898" stroke-width="1"/>
                                              <line id="Line_7" data-name="Line 7" x1="29" transform="translate(1295.5 4642.5)" fill="none" stroke="#dd8898" stroke-width="1"/>
                                            </g>
                                          </svg>
                                          
                                          
                                    </span>
                                </button>
                            </div>
                        </div>

                    </div>
                </form>

                <div id="form-results"></div>
            </div>

        </div>
    </section>

                               
                             