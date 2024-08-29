<?php get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        ?>
        <!-- start header for single page -->
        <section class="mt-40 container flex flex-col-reverse sm:items-center md:flex-row justify-between  ">

            <div class=" flex single_head_right  flex-col gap-7 ">

                <!-- header single page -->
                <!--            views section -->
                <div class="flex items-center gap-1 text-lightMain  font-semibold text-sm mt-2 ">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="size-6 h-3 w-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    <span >
                <?php if(function_exists('the_views')) { the_views(); } ?>
            </span>

                </div>

                <!--        category section -->
                <div class="flex items-center gap-1 text-tag font-semibold text-sm mt-2 ">
                    <a href="" >
                        <?php the_category(' , '); ?>
                    </a>
                </div>
                <!--        title  -->
                <h1 class="hidden md:block text-title dark:text-white font-semibold text-xl lg:text-3xl   " >
                    <?php the_title(); ?>
                </h1>

                <div class="hidden sm:flex  justify-start text-lightMain dark:text-darkTextMain ">
                    <img class="hidden md:block h-7 w-7 rounded-full ml-1 md:ml-3 " src="../assets/img/user-profile.jpg" alt="">
                    <div class=" text-xs font-thin md:font-light  gap-2">
                <span>
                    نوشته شده توسط
                <span class="  " >
                     <?php the_author(); ?>
                </span></span>

                        <span> | </span>
                        <span>
                    <?php the_time(' F Y'); ?>
                </span>
                    </div>
                </div>

                <!-- social media icons -->
                <div class="flex  items-center">
                    <span class="ml-3 text-sm font-semibold dark:text-white "> اشتراک گذاری : </span>

                    <div class="text-lightMain dark:text-darkTextMain share-icons ">
                        <div class="flex space-x-4">
                            <!-- Telegram -->
                            <a href="https://t.me/share/url?url=<URL>&text=<TEXT>" target="_blank" class=" ">

                            </a>
                            <!-- LinkedIn -->
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<URL>&title=<TITLE>&summary=<SUMMARY>&source=<SOURCE>" target="_blank" class="text-blue-700 hover:text-blue-900">

                            </a>
                            <!-- WhatsApp -->
                            <a href="https://api.whatsapp.com/send?text=<TEXT>%20<URL>" target="_blank" class="text-green-500 hover:text-green-700">

                            </a>
                            <!-- Instagram -->
                            <a href="https://www.instagram.com/?url=<URL>" target="_blank" class="text-pink-500 hover:text-pink-700">

                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class=" w-full single_head_left  ">
                <figure   class=" max-w-full single_thumbnail rounded-lg overflow-hidden ">
                    <!--            <img   class=" max-w-full rounded-lg overflow-hidden " src="../assets/img/oneplus-new-products-910x600.jpg" alt="">-->
                    <?php the_post_thumbnail(); ?>
                </figure>
            </div>
        </section>

        <section class="container mt-10">
        <div class="flex sidebar-main-page  flex-col md:flex-row gap-1 justify-between ">
        <!-- main content single page -->
        <div class="w-full single-main-content   md:w-[70%]  mb-10 ">
        <article>
            <header>
                <h1 class="text-title md:hidden dark:text-white font-semibold text-xl lg:text-3xl mb-5 ">
                    <?php the_title(); ?>
                </h1>
            </header>
            <div class="content-single text-title dark:text-darkTextMain  font-light text-md md:text-xl  p-2
                align-baseline overflow-hidden " >
                <?php the_content(); ?>
            </div>

        </article>

    <?php
    endwhile;
endif;
wp_reset_postdata();
?>

    </div>

    <!-- sidebar for single page -->
    <div class=" single-sidebar w-full  md:block sm:hidden  md:w-[26%] mb-6  flex flex-col gap-3 ">

        <?php $blog = danati_get_option('pishro_blog_options');
        $side_blog = $blog[0]['pishro_blog_sidebar_option'];

        if ($side_blog != 'full-width'){
            if ( is_active_sidebar( 'danati-sidebar-single' ) ) {
                dynamic_sidebar('danati-sidebar-single');
            }
            if ($side_blog == 'side-right'){
                ?>
                <style>
                    .sidebar-main-page {
                        display: flex ;
                        flex-direction: row-reverse !important;
                    }
                </style>
                <?php
            }
        }
        else{
            ?>
            <style>
                .single-sidebar {
                    display: none !important;
                }
                .single-main-content{
                    width: 100% !important;
                }
            </style>
            <?php
        }
        ?>






    </div>
    </div>
    </section>
    <!--    related post -->

<?php
$related_post = $blog[0]['sina_theme_related_post_option'];
if ($related_post == 'on'){
    ?>

    <!--  carousels -->
    <section class="relative">
        <div class=" container pb-20 pt-20 md:pt-40">
            <div class="">
                <h2 class="text-title  font-semibold text-lg items-center px-3 border-r-8 border-r-[#F05827]"> مقالات
                    و مطالب مرتبط
                </h2>

            </div>
            <div class="swiper mySwiper  mt-5">
                <div class="swiper-wrapper">

                    <?php $f_tv = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page'=> 6,
                        'category' => 'fav_article',
                    ));

                    if ($f_tv->have_posts() ){
                        while ($f_tv->have_posts()) : $f_tv->the_post(); ?>

                            <div class="swiper-slide ">

                                <a href="<?php the_permalink(); ?>" class=" block rounded-md relative overflow-hidden
                                w-[378px] h-full ">
                                    <figure>
                                        <!--                            <img src="--><?php //echo get_template_directory_uri() .'/assets/img/img1.jpg'?><!--"-->
                                        <!--                                 class="img-slide-hover z-10  h-full "-->
                                        <!--                                 alt="">-->
                                        <?php the_post_thumbnail(); ?>
                                    </figure>
                                    <div class="z-10 tag text-xs bg-blue-950 text-white px-2 py-1 inline-block rounded-md
                        absolute bottom-32 right-5 " >

                                    </div>
                                    <div class="z-10 text-sm  font-bold absolute bottom-20 right-5 text-white   ">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="z-10 flex justify-normal items-center text-[10px] md:text-xs  gap-1 absolute bottom-10 right-5 text-white ">
                                        <span class="   "> نوشته شده توسط <span> سینا مالمیر </span> </span>
                                        <span> | </span>
                                        <span> <span> ۴ </span> روز قبل </span>
                                    </div>
                                    <div class="w-full overflow-hidden bg-card-custome h-full absolute inset-0 bg-red-200  "></div>

                                </a>

                            </div>

                        <?php
                        endwhile;
                    }
                    wp_reset_postdata();
                    ?>

                </div>
            </div>


        </div>
    </section>

    <?php
}
?>

<?php
if(comments_open() || get_comments_number()){
    ?>
    <section class="relative">
        <div class=" container pb-20 pt-20 md:pt-40">
            <div class="">
                <h2 class="text-title  font-semibold text-lg items-center px-3 border-r-8 border-r-[#F05827]">
                    نظرات کاربران
                </h2>
            </div>

            <?php
            comments_template();
            ?>
        </div>
    </section>
    <?php
}
?>



<?php get_footer(); ?>