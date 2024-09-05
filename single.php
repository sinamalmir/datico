<?php get_header(); ?>
<div class="container mb-10 mt-10">
	<div>
		<div class="grid grid-cols-1 md:grid-cols-12  gap-4">


			<?php get_template_part('partialas/single/article','article') ;?>

			<?php get_sidebar(); ?>


		</div>
	</div>
</div>

<?php get_footer(); ?>


