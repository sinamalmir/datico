<div class="container mt-10 mb-10">

	<div class="grid grid-cols-1 md:grid-cols-2  gap-2">

        <!--    one single column (Right)    -->

		<?php
		$args = [
			'post_type' => ['post'],
			'showposts'=> 1
		];
		$the_query = new WP_Query($args);
		if ($the_query->have_posts());
		while ($the_query->have_posts()) : $the_query->the_post();
		?>
		<a href="<?php the_permalink(); ?>" class="block relative item-card ">
			<figure>
				<?php
				if (has_post_thumbnail()){
					the_post_thumbnail('',array(
						'class' => 'rounded-xl w-full img-test object-cover ',
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
			</figure>
			<div class="absolute text-white bottom-5 px-2 z-10">
				<h3 class="text-lg md:text-3xl font-bold "><?php echo get_the_title(); ?> </h3>
				 <p class="hidden md:inline-block mt-3"><?php echo  get_the_excerpt(); ?></p>
			</div>

			<div class="w-full h-full transition duration-300 custom-color opacity-60 absolute inset-0 rounded-xl "></div>
		</a>
		<?php
		endwhile;
		wp_reset_postdata();

		?>

        <!--   4 columns (Left)     -->

		<div class="grid grid-cols-2 gap-2">
			<?php
			$args = [
				'post_type' => ['post'],
				'showposts'=> 4
			];
			$the_query = new WP_Query($args);
			if ($the_query->have_posts());
			while ($the_query->have_posts()) : $the_query->the_post();
			?>
			<a href="<?php the_permalink(); ?>" class=" relative item-card ">
				<figure>
					<?php
					if (has_post_thumbnail()){
						the_post_thumbnail('',array(
							'class' => 'rounded-xl w-full img-test object-cover',
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
				</figure>
				<div class=" text-white px-4 z-10">
					<h3 class="text-xs transition duration-300 custom-class1 z-10 absolute bottom-5 md:text-lg
					font-bold ">
                        <?php echo get_the_title(); ?></h3>
					<p class="hidden z-10  custom-class1 absolute text-xs  mt-3"> <?php echo get_the_excerpt
                        ();?> </p>
				</div>

				<div class="w-full h-full transition duration-300 custom-color opacity-60 absolute inset-0 rounded-xl "></div>
			</a>
			<?php
			endwhile;
			wp_reset_postdata();

			?>


		</div>

	</div>
</div>
