<?php
if (have_posts()) :
	while (have_posts()) : the_post();
		?>
        <figure class=" mb-2 relative">
			<?php
			if (has_post_thumbnail()){
				the_post_thumbnail('',array(
					'class' => 'w-full object-cover page-img rounded-lg overflow-hidden',
					'alt'=> get_the_title(),
				));
			}else{
				?>
                <img class="page-img object-cover" src="<?php echo
					get_template_directory_uri().'/assets/img/33.jpg'
				?>" alt="">
				<?php
			}
			?>
            <ul class="flex absolute breadcrumb-page right-1/2 text-white gap-1 flex-wrap breadcrumb-custom
            items-center">
		        <?php Breadcrumb::get_breadcrumb(); ?>
            </ul>
        </figure>

		<div class=" container flex flex-col gap-8 ">
			<article class=" py-7 px-3 md:px-6   ">
				<div class=" ">

					<h1 class="px-3 py-2 font-semibold text-xl md:text-2xl mb-3 "> <?php echo  get_the_title(); ?> </h1>

					<p class="text-sm overflow-hidden md:text-lg article-content ">

						<?php the_content(); ?>

					</p>


				</div>
			</article>

		</div>


	<?php
	endwhile;
endif;
wp_reset_postdata();
?>