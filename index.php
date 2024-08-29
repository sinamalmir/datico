<?php get_header(); ?>
<!-- main banner -->

<section class=" relative  flex flex-col  items-center ">

    <div class="hidden w-full lg:grid grid-cols-5   h-[583px] ">
        <div class="col-span-1  bg-black "></div>
        <div class=" h-[583px] col-span-2 relative">
            <figure>
                <img class="max-w-full w-full  mx-auto block  overflow-hidden   h-[583px] " src="<?php echo
                get_template_directory_uri() .'/assets/img/main-b.webp'?>" alt="">
            </figure>
            <div class="absolute w-full bg-main-banner z-20 inset-0 "></div>
        </div>
        <div class=" bg-black  col-span-2 text-white flex flex-col justify-center ">
            <a href="" class="text-3xl mb-3">
                زارع‌پور در وزارت ارتباطات چه کرد؟‌ عیسی سخن نگفت </a>
            <p class=" text-c1 mb-6">
                وزیر ارتباطات دولت سیزدهم چه کرد و چه میتوانست بکند؟
            </p>
            <div class=" text-xs font-thin md:font-light border-r-4 px-2 border-r-[#F05827] gap-2">
                <span> نوشته شده توسط   </span>
                <span> سینا مالمیر </span>
                <span> | </span>
                <span> ۴ ساعت قبل </span>
            </div>
        </div>
    </div>

    <!-- hot news -->


    <div class="container  hidden lg:block   h-[200px] py-5 pb-2    border-[f0f4fc] absolute bottom-[-100px] bg-[#f7f9fd] dark:bg-[#43464A] rounded-2xl z-30 ">


        <div>
            <h2 class="text-title  dark:text-darkTitle  font-semibold text-lg items-center px-3 border-r-8
            border-r-[#F05827]">مقالات محبوب </h2>
        </div>


        <div class="flex items-center  mt-4    ">
            <ul  class="flex items-center py-3 px-4  "  >
                <?php $f_tv = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page'=> 4,
                    'category'=> 'fav_article'
                ));

                if ($f_tv->have_posts() ){
                while ($f_tv->have_posts()) : $f_tv->the_post(); ?>

                <li class="flex w-[24%] items-center gap-3 fav-article">
                    <a href="<?php the_permalink(); ?>" class="flex  p-2 ">
                        <div class="p-2">
                            <h2 class="text-title text-sm  dark:text-white font-semibold mb-2 " ><?php the_title();
                            ?></h2>
                            <span class="font-light text-c1  text-xs "> <span>  <?php the_time('j F Y'); ?>   </span>
                        </div>
                        <figure>
<!--                            <img src="--><?php //echo get_template_directory_uri() .'/assets/img/hamster.webp'?><!--" alt="">-->
                            <?php the_post_thumbnail(); ?>
                        </figure>

                    </a>
                </li>

                <?php
                endwhile;
                }
                wp_reset_postdata();
                ?>
            </ul>
        </div>

    </div>


</section>

<!--  carousels -->
<section class="bg-[#F0F4FC] dark:bg-darkMain   ">
    <div class=" container wrapper-main-content  pt-20 md:pt-40">
        <div>
            <h2 class="text-title  font-semibold text-lg items-center px-3 border-r-8 border-r-[#F05827]"> پیشنهادهای سردبیر </h2>
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

                    <a href="<?php the_permalink(); ?>" class=" block rounded-md  overflow-hidden  relative w-[378px] h-full ">
                        <figure>
<!--                            <img src="--><?php //echo get_template_directory_uri() .'/assets/img/img1.jpg'?><!--"-->
<!--                                 class="img-slide-hover z-10  h-full "-->
<!--                                 alt="">-->
                            <?php the_post_thumbnail(); ?>
                        </figure>
                        <div class="z-10 tag text-xs bg-blue-950 text-white px-2 py-1 inline-block rounded-md
                        absolute bottom-32 right-5 " >

                        </div>
                        <div class="z-10 text-sm font-bold absolute bottom-20 text-white right-5   ">
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

<!-- main content -->
<section class="bg-[#FAFAFA] dark:bg-darkMain  ">

    <div class=" pb-20  sidebar-main-page container  flex flex-col md:flex-row  gap-3   ">
        <div class="main-content   px-2  py-2 md:p-7  w-full  ">
            <div>
                <h2 class="text-title  font-semibold text-lg items-center px-3 border-r-8 border-r-[#F05827]"> پیشنهادهای سردبیر </h2>
            </div>
            <div class="mt-6 ">
                <ul class="flex list-item-content flex-col">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <li class="flex main-content-items justify-between w-[70%] md:w-full text-xs gap-1
                    md:gap-5
                    py-5  md:py-10
                    border-b
                    border-b-lightBorder dark:border-b-darkBorder  ">
                        <div class="flex items-center gap-4 main-item-width ">

                            <div class="flex flex-col justify-between p-excerpt  ">
                                <a href="<?php the_permalink(); ?>" class="text-[14px] md:text-lg md:font-bold
                                font-medium
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

</section>

<!--  videos section -->
<?php include_once 'inc/templates/video.php'?>



<?php get_footer(); ?>