
<div class="container mb-10 mt-10">
	<div>
		<h2 class="text-center mb-10 font-bold text-3xl ">
			نتایج جستجو برای :
			<?php the_search_query(); ?>
		</h2>
		<div class="grid grid-cols-1 md:grid-cols-12  gap-4">


			<div class="md:col-span-8 py-3  ">

				<div  class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4  md:px-5  rounded-lg  ">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<a href="<?php the_permalink(); ?>" class="item-slider-custom  py-3 mb-5  px-4 border border-lightBorder rounded-lg  ">
							<?php
							if (has_post_thumbnail()){
								the_post_thumbnail('',array(
									'class' => 'rounded-xl archive-img object-cover w-full ',
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
							<h3 class="font-bold text-sm my-2  ">
								<?php echo get_the_title(); ?>
							</h3>
							<p class="font-normal text-xs text-lightMain mb-2">
								<?php echo  get_the_excerpt(); ?>
							</p>
							<span class="font-light text-lightMain text-xs flex items-center gap-2 ">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                          </svg>

                          <?php echo get_the_date('j F Y'); ?>
                          </span>
						</a>
					<?php
					endwhile;
					endif;
					wp_reset_postdata();

					?>


				</div>

				<div class="text-center mt-10 pagination ">
					<?php echo  paginate_links( array(
						'prev_text'          => __( '&laquo; Previous' ),
						'next_text'          => __( 'Next &raquo;' ),
					)); ?>
				</div>



			</div>

			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
