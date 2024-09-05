<?php
if (have_posts()) :
while (have_posts()) : the_post();
	PostVeiw::dwt_set_post_view(get_the_ID());
	ReadEstimateTime::dwt_read_estimate_time(get_the_ID());
?>

<div class="md:col-span-8 flex flex-col gap-8 ">
	<article class=" py-7 px-3 md:px-6 border border-lightBorder rounded-lg  ">
		<div class=" ">
            <ul class="flex gap-1 flex-wrap breadcrumb-custom items-center">
	            <?php Breadcrumb::get_breadcrumb(); ?>
            </ul>
			<h1 class="px-3 py-2 font-semibold text-xl md:text-2xl mb-3 "> <?php echo  get_the_title(); ?> </h1>
			<?php get_template_part('partialas/single/post-meta','post-meta');  ?>
			<figure class=" mb-2 ">
				<?php
				if (has_post_thumbnail()){
					the_post_thumbnail('',array(
						'class' => 'w-full object-cover rounded-lg overflow-hidden',
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
			<p class="text-sm overflow-hidden md:text-lg ">

				<?php the_content(); ?>

			</p>


		</div>
	</article>


	<!--  the author section	-->

	<?php get_template_part('partialas/single/author' , 'author') ?>

	<!--  the related posts section	-->
	<?php get_template_part('partialas/single/related-posts' , 'related-posts') ?>

	<!--  the comments section	-->

	<?php get_template_part('partialas/single/comments' , 'comments') ?>

</div>


<?php
endwhile;
endif;
wp_reset_postdata();
?>