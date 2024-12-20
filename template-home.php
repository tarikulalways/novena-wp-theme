<?php 
	// Template Name: Home Page
	get_header();
?>
	
<?php $config = get_option('novena_options'); ?>

<!-- Slider Start -->
<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
					<div class="divider mb-3"></div>
					<span class="text-uppercase text-sm letter-spacing "><?php echo esc_html__($config['hero_sub_title'], 'novena'); ?></span>
					<h1 class="mb-3 mt-3"><?php echo esc_html__($config['hero_title'], 'novena')?></h1>
					
					<p class="mb-4 pr-5"><?php echo esc_html__($config['hero_description'], 'novena'); ?></p>
					<div class="btn-container ">
						<a href="<?php echo esc_url($config['hero_btn_link']); ?>" target="_blank" class="btn btn-main-2 btn-icon btn-round-full"><?php echo esc_html__($config['hero_btn_title'], 'novena'); ?> <i class="icofont-simple-right ml-2  "></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-surgeon-alt"></i>
						</div>
						<span><?php echo esc_html__($config['merket_sub_title'], 'novena'); ?></span>
						<h4 class="mb-3"><?php echo esc_html__($config['merket_title'], 'novena'); ?></h4>
						<p class="mb-4"><?php echo esc_html__($config['merket_description'], 'novena'); ?></p>
						<a href="<?php echo esc_url($config['merket_btn_link']); ?>" class="btn btn-main btn-round-full"><?php echo esc_html__($config['merket_btn_text'], 'novena'); ?></a>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-ui-clock"></i>
						</div>
						<span><?php echo esc_html__($config['work_sub_title'], 'novena'); ?></span>
						<h4 class="mb-3"><?php echo esc_html__($config['work_title'], 'novena')?></h4>
						<ul class="w-hours list-unstyled">
							<?php 
								if(!empty($config['work_scheduls'])):
									foreach($config['work_scheduls'] as $item):
							?>
		                    <li class="d-flex justify-content-between"><?php echo esc_html__($item['schedul_week_name'], 'novena'); ?> <span><?php echo esc_html__($item['schedul_time'], 'novena'); ?></span></li>
							<?php 
									endforeach; 
								endif; 
							?>
		                </ul>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-support"></i>
						</div>
						<span><?php echo esc_html__($config['emergency_sub_title'], 'novena')?></span>
						<h4 class="mb-3"><?php echo esc_html__($config['emergency_number'], 'novena')?></h4>
						<p><?php echo esc_html__($config['emergency_des'], 'novena')?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section about">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4 col-sm-6">
				<div class="about-img">
					<img src="<?php echo get_template_directory_uri(); ?>/images/about/img-1.jpg" alt="" class="img-fluid">
					<img src="<?php echo get_template_directory_uri(); ?>/images/about/img-2.jpg" alt="" class="img-fluid mt-4">
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="about-img mt-4 mt-lg-0">
					<img src="<?php echo get_template_directory_uri(); ?>/images/about/img-3.jpg" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-4">
				<div class="about-content pl-4 mt-4 mt-lg-0">
					<h2 class="title-color">Personal care <br>& healthy living</h2>
					<p class="mt-4 mb-5">We provide best leading medicle service Nulla perferendis veniam deleniti ipsum officia dolores repellat laudantium obcaecati neque.</p>

					<a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">Services<i class="icofont-simple-right ml-3"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="cta-section ">
	<div class="container">
		<div class="cta position-relative">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-doctor"></i>
						<span class="h3">58</span>k
						<p>Happy People</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-flag"></i>
						<span class="h3">700</span>+
						<p>Surgery Comepleted</p>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-badge"></i>
						<span class="h3">40</span>+
						<p>Expert Doctors</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-globe"></i>
						<span class="h3">20</span>
						<p>Worldwide Branch</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section service gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<h2><?php echo $config['award_title']; ?></h2>
					<div class="divider mx-auto my-4"></div>
					<p><?php echo $config['award_des']; ?></p>
				</div>
			</div>
		</div>

		<div class="row">

			<?php 
				$args = array(
					'post_type' => 'awards',
					'posts_per_page' => 6
				);
				$query = new WP_Query($args);
				if($query->have_posts()): 
					while($query->have_posts()): $query->the_post();
			?>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center text-lg">
						<!-- <i class="icofont-laboratory text-lg"></i> -->
						 <?php the_field('icon_class'); ?>
						<h4 class="mt-3 mb-3"><?php the_title(); ?></h4>
					</div>

					<div class="content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
			<?php 
				endwhile;
				wp_reset_postdata();
			endif;
			?>
		</div>
	</div>
</section>
<section class="section appoinment">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 ">
				<div class="appoinment-content">
					<img src="<?php echo $config['book_app_thumb']; ?>" alt="" class="img-fluid">
					<div class="emergency">
						<h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i><?php echo $config['book_quick_num']; ?></h2>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-10 ">
				<div class="appoinment-wrap mt-5 mt-lg-0">
					<h2 class="mb-2 title-color"><?php echo $config['book_app_title']; ?></h2>
					<p class="mb-4"><?php echo $config['book_app_des']; ?></p>
					<form id="#" class="appoinment-form" method="post" action="#">
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>Choose Department</option>
                                  <option>Software Design</option>
                                  <option>Development cycle</option>
                                  <option>Software Development</option>
                                  <option>Maintenance</option>
                                  <option>Process Query</option>
                                  <option>Cost and Duration</option>
                                  <option>Modal Delivery</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect2">
                                  <option>Select Doctors</option>
                                  <option>Software Design</option>
                                  <option>Development cycle</option>
                                  <option>Software Development</option>
                                  <option>Maintenance</option>
                                  <option>Process Query</option>
                                  <option>Cost and Duration</option>
                                  <option>Modal Delivery</option>
                                </select>
                            </div>
                        </div>

                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="time" id="time" type="text" class="form-control" placeholder="Time">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Full Name">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" id="phone" type="Number" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                    </div>

                    <a class="btn btn-main btn-round-full" href="appoinment.html" >Make Appoinment <i class="icofont-simple-right ml-2  "></i></a>
                </form>
            </div>
			</div>
		</div>
	</div>
</section>
<section class="section testimonial-2 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2><?php echo $config['testimonial_title']; ?></h2>
					<div class="divider mx-auto my-4"></div>
					<p><?php echo $config['testimonial_des']; ?></p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 testimonial-wrap-2">
				<?php 
					$args = array(
						'post_type' => 'testimonials',
						'posts_per_page' => -1
					);
					$query = new WP_Query($args);
					if($query->have_posts()):
						while($query->have_posts()): $query->the_post();
				?>
				<div class="testimonial-block style-2  gray-bg">
					<i class="icofont-quote-right"></i>

					<div class="testimonial-thumb">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
					</div>

					<div class="client-info ">
						<h4><?php the_title(); ?></h4>
						<span><?php the_field('designation'); ?></span>
						<?php the_content(); ?>
					</div>
				</div>
				<?php 
					endwhile;
					wp_reset_postdata();
				endif;
				?>
			</div>
		</div>
	</div>
</section>
<section class="section clients">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2><?php echo $config['partners_title']; ?></h2>
					<div class="divider mx-auto my-4"></div>
					<p><?php echo $config['partners_des']; ?></p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row clients-logo">
			<?php 
				foreach($config['partners_groups'] as $company):
			?>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="<?php echo $company['company_logo']; ?>" alt="" class="img-fluid">
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!-- footer Start -->
<?php get_footer(); ?>