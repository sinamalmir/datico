<div class=" py-7 author-section px-3 md:px-6 border border-lightBorder rounded-lg  flex flex-col items-center  gap-3">
<!--	<img src="../assets/img/user-profile.jpg" alt="" class="w-32 rounded-full  ">-->
	<?php echo get_avatar(get_the_author_meta('ID'),90) ?>

	<div>
		<span class="font-bold text-lg mb-2 "> <?php the_author(); ?> </span>
	</div>
</div>
