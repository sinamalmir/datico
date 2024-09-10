

<div class=" py-7 px-3 md:px-6 border border-lightBorder rounded-lg ">
	<div class=" ">
		<h2 class="px-3 py-2 border-b-2 border-b-tag mb-3 ">مقالات مرتبط   </h2>
	</div>
	<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3   gap-4">
		<?php
		$related = get_posts( array(
			'category__in' => wp_get_post_categories($post->ID),
			'numberposts' => 3,
			'post__not_in' => array($post->ID) ) );
		if( $related ) foreach( $related as $post ) {
		setup_postdata($post);
		?>
		<a href="#" class="item-slider-custom">
			<?php
			if (has_post_thumbnail()){
				the_post_thumbnail('',array(
					'class' => ' rounded-xl object-cover w-full related-img ',
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
				<?php echo get_the_title();  ?>
			</h3>
			<span class="font-light text-lightMain text-xs flex items-center gap-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>

                     <?php echo get_the_date('j F Y'); ?>
                    </span>
		</a>

		<?php }
		wp_reset_postdata();
		?>

	</div>
</div>
