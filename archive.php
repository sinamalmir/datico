<?php get_header(); ?>

<!-- start breadcrumbs -->
<!--<div class="container mt-28   text-gray-600 font-semibold" aria-label="Breadcrumb">-->
<!--    <ol class="list-none p-0 inline-flex">-->
<!---->
<!--        <li class="flex items-center">-->
<!--            <a href="#" class="text-lightMain text-xs md:text-sm hover:text-hoverBreadCrumb transition duration-300 "> خانه </a>-->
<!--            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="fill-current  fill-white w-3 h-3 mx-2">-->
<!--                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />-->
<!--            </svg>-->
<!--        </li>-->
<!---->
<!--        <li class="flex items-center">-->
<!--            <a href="#" class="text-lightMain text-xs md:text-sm hover:text-hoverBreadCrumb transition duration-300 "> دسته بندی </a>-->
<!--            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="fill-current fill-white w-3 h-3 mx-2">-->
<!--                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />-->
<!--            </svg>-->
<!--        </li>-->
<!--        <li class="flex items-center">-->
<!--            <a href="#" class="text-lightMain text-xs md:text-sm hover:text-hoverBreadCrumb transition duration-300 "> فرانسه </a>-->
<!--            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="fill-current fill-white w-3 h-3 mx-2">-->
<!--                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />-->
<!--            </svg>-->
<!--        </li>-->
<!--        <li class="flex items-center">-->
<!--            <span class="text-hoverBreadCrumb  text-xs md:text-sm"> ترجمه مقالات </span>-->
<!--        </li>-->
<!--    </ol>-->
<!--</div>-->


<!-- category head -->
<section >
    <div class=" container mt-10 mb-10 flex flex-col-reverse md:flex-row items-center justify-between gap-1">

        <div class="flex single_head_right  flex-col gap-7  " >
            <span class="text-xs text-lightMain font-bold ">  دسته بندی </span>
            <h2 class="text-3xl md:text-5xl mt-3 text-title dark:text-white font-semibold "> <?php
               echo get_the_archive_title(); ?> </h2>

        </div>
<!--        <div class=" w-full single_head_left ">-->
<!--            <img class="max-w-full mx-auto overflow-hidden " src="--><?php //echo get_template_directory_uri()
//                .'/assets/img/bg2-home7-4.jpg' ?><!--"-->
<!--                 alt="">-->
<!--        </div>-->
    </div>
</section>


<!-- main category content -->

<section>
    <div class=" dark:bg-darkMain  ">
        <div class=" pb-20  sidebar-main-page container  flex flex-col md:flex-row  gap-3   ">

            <div class="main-content   px-2  py-2 md:p-7  w-full  ">
                <div>
                    <h2 class="text-title  font-semibold text-lg items-center px-3 border-r-8 border-r-[#F05827]"> پیشنهادهای سردبیر </h2>
                </div>
                <div class="mt-6 ">
                    <ul class="flex list-item-content flex-col">

                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <li class="flex main-content-items justify-between  text-xs gap-1
                    md:gap-5
                    py-5  md:py-10
                    border-b
                    border-b-lightBorder dark:border-b-darkBorder  ">
                                <div class="flex items-center gap-4  ">

                                    <div class="flex flex-col justify-between p-excerpt  ">
                                        <a href="<?php the_permalink(); ?>" class="text-[10px] md:text-lg md:font-bold font-medium
                            text-lightTitle
                            dark:text-white  " >
                                            <?php the_title(); ?>
                                        </a>
                                        <p class="hidden md:block text-white mt-3 font-light  dark:text-darkTextMain ">
                                            <?php the_excerpt(); ?>
                                        </p>
                                        <div class="flex items-center justify-normal mt-3 dark:text-darkTag   " >
                                            <img class="hidden md:block h-7 w-7 rounded-full ml-1 md:ml-3 " src="<?php echo get_template_directory_uri() .'/assets/img/user-profile.jpg'?>" alt="">

                                            <span class=" hidden md:block font-thin md:font-light " > نوشته شده توسط   </span>
                                            <span class="text-[8px] md:text-xs font-thin md:font-light mr-1"><?php the_author
                                                (); ?>
                                    </span>
                                            <span  class="md:hidden text-[8px] font-thin md:font-light mr-1"> | </span>
                                            <span  class="md:text-xs text-[8px] font-thin md:font-light mr-1 ">
                                        <?php the_time(' j F Y'); ?>
                                    </span>
                                        </div>
                                    </div>
                                </div>



                                <div class="main-content-items-img rounded-sm text-center  ml-auto mr-auto
                         overflow-hidden">
                                    <figure class=" duration-300 rounded-sm  w-full h-full ">
                                        <!--                                <img class=" h-[70px] w-fit lg:w-[260px] lg:h-full rounded-sm overflow-hidden  main-content-items-img " src="--><?php //echo get_template_directory_uri() .'/assets/img/bl1.webp'?><!--" alt="">-->
                                        <?php
                                        if (has_post_thumbnail() ){
                                            the_post_thumbnail('main-content-img');
                                        }
                                        else{
                                            ?>
                                            <img src="<?php echo get_template_directory_uri() .'/assets/img/pexels-thepaintedsquare-583848.jpg'  ?>" alt="">
                                            <?php
                                        }
                                        ?>
                                    </figure>
                                </div>
                            </li>

                        <?php
                        endwhile;
                        endif;
                        wp_reset_postdata();

                        ?>



                    </ul>
                    <div class="flex justify-center pagination-archive ">

                    </div>
                </div>
            </div>
            <!-- sidebar -->
            <aside class=" sidebar flex flex-col justify-start  flex-1   px-2  py-2 md:p-7 w-full">

                <?php $bolg = danati_get_option('pishro_blog_options');
                $side_blog = $bolg[0]['pishro_blog_sidebar_option'];

                if ($side_blog != 'full-width'){
                    if ( is_active_sidebar( 'danati-sidebar' ) ) {
                        dynamic_sidebar('danati-sidebar');
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
                        .sidebar {
                            display: none !important;
                        }
                    </style>
                    <?php
                }
                ?>




            </aside>

        </div>

        <div class="pagination">

         <?php  echo 'sadfgh '?>
        </div>
    </div>
</section>

<?php get_footer(); ?>