<section class="md:col-span-8 col-span-12 homepage py-6 px-6 border border-lightBorder rounded-lg ">
	<div class="relative swiper-btn-test ">
		<h2 class="px-3 py-2 border-b-2 border-b-tag mb-3 "> اخبار و مقالات </h2>
		<div class="swiper-button-next2 swiper-button-next"></div>
		<div class="swiper-button-prev2 swiper-button-prev"></div>
	</div>
	<div class="swiper mySwiper2">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<div class="grid sm:grid-cols-2 gap-4 gap-y-6 ">
					<?php
					$args = [
						'post_type' => ['post'],
						'showposts'=> 6
					];
					$the_query = new WP_Query($args);
					if ($the_query->have_posts());
					while ($the_query->have_posts()) : $the_query->the_post();
						?>

						<a href="<?php the_permalink(); ?>"  >

							<?php
							if (has_post_thumbnail()){
								the_post_thumbnail('',array(
									'class' => 'rounded-lg  main-content-height w-full',
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

							<div class="flex items-center gap-3 justify-between mt-3 px-3 ">
								<div class="flex items-center gap-3  ">
											<span class="text-xs font-light text-lightMain"> <?php the_author(); ?>
											</span>
									<span class="text-xs font-light text-lightMain flex items-center gap-1">
												<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24
												24" stroke-width="1.5" stroke="currentColor" class="size-3">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
</svg>
												<?php echo  get_the_date('j F Y');?>
											</span>
								</div>
								<div>
                                                <span class="flex items-center gap-1 text-xs font-light text-lightMain">
	                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0
	                                                24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
  <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
</svg>
                                                    <?php
                                                     echo get_comments_number();
                                                    ?>
                                                </span>
								</div>
							</div>
							<h3 class="font-bold text-lg md:text-2xl mb-2"> <?php echo  get_the_title(); ?>
							</h3>
							<p class="font-light text-xs text-lightMain">
								<?php echo  get_the_excerpt(); ?>
							</p>


						</a>

					<?php
					endwhile;
					wp_reset_postdata();

					?>
				</div>
			</div>
			<div class="swiper-slide">
                <div class="grid sm:grid-cols-2 gap-4 gap-y-6 ">
					<?php
					$args = [
						'post_type' => ['post'],
						'showposts'=> 6,
						'offset'=> 6
					];
					$the_query = new WP_Query($args);
					if ($the_query->have_posts());
					while ($the_query->have_posts()) : $the_query->the_post();
						?>

                        <a href="<?php the_permalink(); ?>"  >

							<?php
							if (has_post_thumbnail()){
								the_post_thumbnail('',array(
									'class' => 'rounded-lg  main-content-height w-full',
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

                            <div class="flex items-center gap-3 justify-between mt-3 px-3 ">
                                <div class="flex items-center gap-3  ">
											<span class="text-xs font-light text-lightMain"> <?php the_author(); ?>
											</span>
                                    <span class="text-xs font-light text-lightMain flex items-center gap-1">
												<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24
												24" stroke-width="1.5" stroke="currentColor" class="size-3">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
</svg>
												<?php echo  get_the_date('j F Y');?>
											</span>
                                </div>
                                <div>
                                                <span class="flex items-center gap-1 text-xs font-light text-lightMain">
	                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0
	                                                24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
  <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
</svg>
                                                    <?php
                                                    echo get_comments_number();
                                                    ?>
                                                </span>
                                </div>
                            </div>
                            <h3 class="font-bold text-lg md:text-2xl mb-2"> <?php echo  get_the_title(); ?>
                            </h3>
                            <p class="font-light text-xs text-lightMain">
								<?php echo  get_the_excerpt(); ?>
                            </p>


                        </a>

					<?php
					endwhile;
					wp_reset_postdata();

					?>
                </div>
			</div>
		</div>
	</div>
</section>