
<div class="container p-5 ">
	<div class=" py-7 px-3 border border-lightBorder rounded-lg ">
		<div class="relative  ">
			<h2 class="px-3 py-2 border-b-2 border-b-tag mb-3 "> اخبار و مقالات </h2>
			<div class=" swiper-button-next"></div>
			<div class=" swiper-button-prev"></div>
		</div>
		<div class="p-4  ">
			<div class="swiper mySwiper">
				<div class="swiper-wrapper">


					<div class="swiper-slide">
						<div class="grid grid-cols-1  md:grid-cols-2 lg:grid-cols-3  gap-7">
							<?php
							$args = [
								'post_type' => ['post'],
								'showposts'=> 6
							];
							$the_query = new WP_Query($args);
							if ($the_query->have_posts());
							while ($the_query->have_posts()) : $the_query->the_post();
							?>
							<a href="<?php the_permalink(); ?>" class="flex item-slider-custom justify-start flex-col gap-1">
								<span class="text-xs text-lightMain"> <?php echo  get_the_date('j F Y')?> </span>
								<h3 class="font-bold "> <?php echo get_the_title(); ?> </h3>
								<div class="flex gap-2 items-center">
                                    <?php
                                        if (has_post_thumbnail()){
                                            the_post_thumbnail('',array(
                                                    'class' => 'max-w-[110px] rounded-lg object-cover',
                                                    'alt'=> get_the_title(),
                                            ));
                                        }else{
                                            ?>
                                            <img class="max-w-[110px] rounded-lg object-cover" src="<?php echo
                                                get_template_directory_uri().'/assets/img/test11.webp'
                                            ?>" alt="">
                                    <?php
                                        }
                                    ?>
<!--									<p class="text-xs font-light text-lightMain"> تولید بلاک در شبکه تون بازهم به مشکل خورتولید بلاک در شبکه تون بازهم به مشکل خور </p>-->
                                    <p class="text-xs font-light text-lightMain"><?php echo  get_the_excerpt(); ?></p>
                                </div>
							</a>
                        <?php
                            endwhile;
                            wp_reset_postdata();

                        ?>
						</div>
					</div>


                    <div class="swiper-slide">
                        <div class="grid grid-cols-1  md:grid-cols-2 lg:grid-cols-3  gap-7">
							<?php
							$args = [
								'post_type' => ['post'],
								'showposts'=> 6
							];
							$the_query = new WP_Query($args);
							if ($the_query->have_posts());
							while ($the_query->have_posts()) : $the_query->the_post();
								?>
                                <a href="" class="flex item-slider-custom justify-start flex-col gap-1">
                                    <span class="text-xs text-lightMain"> <?php echo  get_the_date('j F Y')?> </span>
                                    <h3 class="font-bold "> <?php echo get_the_title(); ?> </h3>
                                    <div class="flex gap-2 items-center">
										<?php
										if (has_post_thumbnail()){
											the_post_thumbnail('',array(
												'class' => 'max-w-[110px] rounded-lg object-cover',
												'alt'=> get_the_title(),
											));
										}else{
											?>
                                            <img class="max-w-[110px] rounded-lg object-cover" src="<?php echo
												get_template_directory_uri().'/assets/img/test11.webp'
											?>" alt="">
											<?php
										}
										?>
                                        <!--									<p class="text-xs font-light text-lightMain"> تولید بلاک در شبکه تون بازهم به مشکل خورتولید بلاک در شبکه تون بازهم به مشکل خور </p>-->
                                        <p class="text-xs font-light text-lightMain"><?php echo  get_the_excerpt(); ?></p>
                                    </div>
                                </a>
							<?php
							endwhile;
							wp_reset_postdata();

							?>
                        </div>
                    </div>


				</div>

			</div>
		</div>
	</div>
</div>
