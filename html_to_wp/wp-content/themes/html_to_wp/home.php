<?php get_header(); ?>	
    <!-- Slider
		============================= -->
	<div id="slider" class="theme-default">
        <div class="inner">
        
        	<div class="nivo-slider nivoSlider">
                <a href=""><img src="<?php bloginfo('template_url') ?>/assets/images/slides/singolo-slide1.jpg" alt="#" /></a>
                <img src="<?php bloginfo('template_url') ?>/assets/images/slides/singolo-slide2.jpg" alt="#" />
            </div>
                
        </div><!-- .inner -->
	</div><!-- #slider -->
	<!-- End Slider -->
    
    
	<!-- Services
		============================= -->
	<div id="services">
        <div class="inner">
        
        	<h2>Our Services</h2>
            <h3>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</h3>
            
            <ul>
            	<li>
                	<span class="li_pen"></span>
                    <h4>Custom Design</h4>
                    <p>Curabitur vestibulum eget mauris quis laoreet. Phasellus in quam laoreet, viverra lacus ut, ultrices velit.</p>
                </li>
                
                
                <li>
                	<span class="li_bulb"></span>
                    <h4>Inovative Ideas</h4>
                    <p>Quisque luctus, quam eget molestie commodo, lacus purus cursus purus, nec rutrum tellus dolor id lorem.</p>
                </li>
                
                
                <li>
                	<span class="li_heart"></span>
                    <h4>Love Is The Answer</h4>
                    <p>Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis. Quisque condimentum.</p>
                </li>
                
                
                <li>
                	<span class="li_phone"></span>
                    <h4>Responsive Layout</h4>
                    <p>Sed porttitor placerat rhoncus. In at nunc tellus. Maecenas blandit nunc ligula. Praesent elit leo.</p>
                </li>
                
                
                <li>
                	<span class="li_bubble"></span>
                    <h4>24 / 7 Support</h4>
                    <p>Vivamus vel quam lacinia, tincidunt dui non, vehicula nisi. Nulla a sem erat. Pellentesque egestas venenatis lorem .</p>
                </li>
                
                
                <li>
                	<span class="li_star"></span>
                    <h4>Feel Like A Star</h4>
                    <p>Quisque hendrerit purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus.</p>
                </li>
            </ul>
            
        </div><!-- .inner -->
	</div><!-- #services -->
	<!-- End Services -->
    
    
	<!-- Portfolio
		============================= -->
	<div id="portfolio">
        <div class="inner">
        
        	<h2>Portfolio</h2>
            <h3>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</h3>
            
            <!-- Portfolio Menu -->
            <ul class="portfolio-menu filter">
            	<li class="current all"><a href="#">All</a></li>
                <li class="webdesign"><a href="#">Web Design</a></li>
                <li class="graphicdesign"><a href="#">Graphic Design</a></li>
                <li class="artwork"><a href="#">Artwork</a></li>
            </ul><!-- .portfolio-menu -->
            
            <!-- Portfolio -->
            <ul class="portfolio">

                <?php 
                    $portfolio_params = array(
                        'post_type'         => 'portfolio',
                        'posts_per_page'    => 12
                    );

                    $get_portfolio = new WP_Query( $portfolio_params );
                    $dataid = 1;

                    while ( $get_portfolio->have_posts() ) {
                        $get_portfolio->the_post();
                    ?>

            	<li data-id="id-<?php echo $dataid; ?>" data-type="<?php the_field('datatype') ?>">
                    <a href="<?php the_field('url') ?>" rel="prettyPhoto[portfolio]">
                        <?php the_post_thumbnail('portfolio'); ?>
                    </a>
                </li>

                <?php $dataid++; } wp_reset_postdata(); ?>

            </ul><!-- .portfolio -->
            
        </div><!-- .inner -->
	</div><!-- #portfolio -->
	<!-- End Portfolio -->
    
    
	<!-- About
		============================= -->
	<div id="about">
        <div class="inner">
        
        	<!-- Title -->
        	<h2>About Us</h2>
            
            <!-- Short Description -->
            <h3>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</h3>
            
            <!-- Profile -->
            <ul>
            	<li>
                	<img src="<?php bloginfo('template_url') ?>/assets/images/profile/profile1.jpg" width="300" height="300" alt="#" />
                    <h4>Adam Jensen</h4>
                    <p>Quisque luctus, quam eget molestie commodo, lacus purus cursus purus, nec rutrum tellus dolor id lorem.</p>
                    <a href=""><span class="icon-facebook"></span></a>
                    <a href=""><span class="icon-gplus"></span></a>
                    <a href=""><span class="icon-twitter"></span></a>
                    <a href=""><span class="icon-linkedin"></span></a>
                </li>
                
            	<li>
                	<img src="<?php bloginfo('template_url') ?>/assets/images/profile/profile2.jpg" width="300" height="300" alt="#" />
                    <h4>Desmond Miles</h4>
                    <p>Curabitur vestibulum eget mauris quis laoreet. Phasellus in quam laoreet, viverra lacus ut, ultrices velit.</p>
                    <a href=""><span class="icon-facebook"></span></a>
                    <a href=""><span class="icon-gplus"></span></a>
                    <a href=""><span class="icon-twitter"></span></a>
                    <a href=""><span class="icon-linkedin"></span></a>
                </li>
                
            	<li>
                	<img src="<?php bloginfo('template_url') ?>/assets/images/profile/profile3.jpg" width="300" height="300" alt="#" />
                    <h4>Scolara Visari</h4>
                    <p>Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis. Quisque condimentum.</p>
                    <a href=""><span class="icon-facebook"></span></a>
                    <a href=""><span class="icon-gplus"></span></a>
                    <a href=""><span class="icon-twitter"></span></a>
                    <a href=""><span class="icon-linkedin"></span></a>
                </li>
                
            </ul><!-- .portfolio-menu -->
            
        </div><!-- .inner -->
	</div><!-- #about -->
	<!-- End About -->
    
    
	<!-- Contact
		============================= -->
	<div id="contact">
        <div class="inner">
        
        	<!-- Title -->
        	<h2>Get a Quote</h2>
            
            <!-- Short Description -->
            <h3>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</h3>
            
            <ul>
            	<li>
                	<form action="" method="get">
                    	
                        <input name="Name" class="" type="text" value="Name (Required)" onfocus="if(this.value == 'Name (Required)') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Name (Required)'; }" />
                        
                        <input name="Email" class="" type="text" value="Email (Required)" onfocus="if(this.value == 'Email (Required)') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Email (Required)'; }" />
                        
                        <input name="Subject" class="" type="text" value="Subject" onfocus="if(this.value == 'Subject') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Subject'; }" />
                        
                        <textarea name="Detail" cols="" rows="" onfocus="if(this.value == 'Describe your project in detail...') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Describe your project in detail...'; }">Describe your project in detail...</textarea>
                        
                        <input type="submit" value="submit" name="subscribe" class="submitbtn" />
                        
                    </form>
                </li>
                
                <li>
                	<h4>Contact Information</h4>
                    <p>Quisque hendrerit purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus. Proin sit amet volutpat libero. Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis.</p>
                    
                    <span><i class="li_location"></i>Elm St. 14/05 Lost City </span>
                    <span><i class="icon-phone"></i>03528 331 86 35 </span>
                    <span><i class="icon-mail"></i>info@singolo.com</span>
                </li>
            </ul>
            
            
        </div><!-- .inner -->
	</div><!-- #contact -->
	<!-- End Contact -->
<?php get_footer(); ?>