<?php get_header(); ?>
<main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
	<div class="text-center">
		<p class="text-base font-semibold text-indigo-600">404</p>
		<h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl"> صفحه موردنظر پیدا نشد! </h1>
		<div class="mt-10 flex items-center justify-center gap-x-6">
<!--			<img src="--><?php //echo  get_template_directory_uri().'/assets/img/33.jpg'?><!--" alt="">-->
			<a href="<?php echo home_url(); ?>" class="px-5 py-4 text-xl  custom-class2 "> برگشت به صفحه اصلی </a>
		</div>

	</div>
</main>
<?php get_footer(); ?>
