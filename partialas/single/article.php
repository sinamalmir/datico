<?php
if (have_posts()) :
while (have_posts()) : the_post();
	PostVeiw::dwt_set_post_view(get_the_ID());
?>

<div class="md:col-span-8 flex flex-col gap-8 ">
	<article class=" py-7 px-3 md:px-6 border border-lightBorder rounded-lg  ">
		<div class=" ">
            <ul class="flex gap-1 flex-wrap breadcrumb-custom items-center">
	            <?php Breadcrumb::get_breadcrumb(); ?>
            </ul>
			<h1 class="px-3 py-2 font-semibold text-xl md:text-2xl mb-3 "> <?php echo  get_the_title(); ?> </h1>
			<div class="flex items-center gap-4 flex-wrap mb-3 ">
<!--				<img src="../assets/img/user-profile.jpg" alt="" class=" w-8 object-cover rounded-full  " >-->
				<?php echo get_avatar(get_the_author_meta('ID'),32) ?>
				<span class="text-lightMain font-light text-xs "> <?php the_author(); ?> </span>
				<span class="text-lightMain font-light text-xs  "> <?php echo  get_the_time('j F Y'); ?> </span>
				<span class="text-lightMain font-light text-xs flex items-center gap-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                    </svg>
                        <?php echo get_comments_number(); ?>
                  </span>
                <span class="text-lightMain font-light text-xs flex items-center gap-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="size-3">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
</svg>
                    <?php echo PostVeiw::dwt_get_post_view(get_the_ID()); ?>
                </span>
				<span  class="text-lightMain font-light text-xs flex items-center gap-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                    </svg>

                      خواند این مطلب

                      ۹ دقیقه زمان میبرد
                  </span>
			</div>
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