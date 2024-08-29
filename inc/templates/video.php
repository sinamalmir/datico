<!--video section -->

<section class="dark:bg-darkMain ">
    <div class="container pt-10 pl-5 pb-10 flex justify-between items-center ">
        <h2 class="text-title dark:text-darkTitle  font-semibold text-lg items-center px-3 border-r-8 border-r-[#F05827]"> پیشنهادهای سردبیر </h2>
        <a href="<?php echo get_post_type_archive_link('tv'); ?>" class="text-xs font-normal md:text-sm py-1 px-2
        rounded
        border-orange border-2
        hover:text-white
        hover:bg-orange
        transition duration-300">
            ویدیوهای بیشتر
        </a>
    </div>
    <section class=" mb-40   container flex flex-col-reverse md:flex-row gap-1 ">

        <div class="right-video flex flex-wrap flex-1 gap-2    w-full">

            <?php $f_tv = new WP_Query(array(
                'post_type' => 'tv',
                'posts_per_page'=> 4,
                'offset'=> 1
            ));

            if ($f_tv->have_posts() ){
            while ($f_tv->have_posts()) : $f_tv->the_post(); ?>

            <div class="flex tv-right flex-row-reverse justify-between md:justify-normal gap-1 mb-4 px-2 md:px-0
            md:flex-col
            md:gap-7 w-full md:w-[45%] ">
                <a href="<?php the_permalink(); ?>" class="relative " >

                    <div class="hidden md:inline-block absolute top-[40%] left-[45%] text-white font-bold  bg-[#0175E6]  rounded-full p-2 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                        </svg>
                    </div>

                    <figure  class="rounded-lg h-[70px] w-fit md:h-full md:w-full  relative ">
<!--                        <img class="rounded-lg h-[70px] w-fit md:h-full md:w-full   " src="--><?php //echo get_template_directory_uri() .'/assets/img/video1.webp'?><!--" alt="">-->
                        <?php
                        if (has_post_thumbnail() ){
                            the_post_thumbnail();
                        }
                        else{
                            ?>
                            <img src="<?php echo get_template_directory_uri() .'/assets/img/pexels-thepaintedsquare-583848.jpg'  ?>" alt="">
                            <?php
                        }
                        ?>
                        <?php
                        $time =  get_post_meta(get_the_ID() , 'danati_video_tv_time' , true );
                        if (!empty( $time)) {
                            ?> <span  class="absolute text-white top-0 left-0 p-2 text-xs  "> <?php echo $time ;?>
                            </span> <?php
                        } ?>
                    </figure>


                    <div class="flex flex-col   gap-2 ">
                        <a href="<?php the_permalink(); ?>" class=" text-[10px] md:text-sm  text-title dark:text-white font-bold ">
                           <?php the_title(); ?>
                        </a>
                        <span class="text-[8px] dark:text-darkTag md:text-xs"> ۳ ساعت قبل </span>
                    </div>

                </a>
            </div>
            <?php
            endwhile;
            }
            wp_reset_postdata();
            ?>

        </div>

        <div class="left-video flex-1 px-2  py-2   w-full ">

            <?php $f_tv = new WP_Query(array(
                    'post_type' => 'tv',
                    'posts_per_page'=> 1,
            ));

            if ($f_tv->have_posts() ){
                while ($f_tv->have_posts()) : $f_tv->the_post(); ?>

                    <div class="flex tv-left w-full flex-col gap-3 relative">

                        <a href="<?php the_permalink(); ?>" >
                            <div class="absolute top-[40%] left-[45%] text-white font-bold  bg-tag rounded-full p-2 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                                </svg>
                                <p>
                                    <?php  echo get_post_meta(get_the_ID() , 'video_metabox_time' , true )  ?>
                                </p>
                            </div>
                            <figure class="rounded-lg w-fit relative" >
<!--                                <img class="rounded-lg w-fit " src="--><?php //echo get_template_directory_uri() .'/assets/img/viedo0.webp'?><!--" alt="">-->

                                <?php
                                if (has_post_thumbnail() ){
                                    the_post_thumbnail('video_left_img');
                                }
                                else{
                                    ?>
                                    <img src="<?php echo get_template_directory_uri() .'/assets/img/pexels-thepaintedsquare-583848.jpg'  ?>" alt="">
                                <?php
                                }
                                ?>

                                <?php
                                $time =  get_post_meta(get_the_ID() , 'danati_video_tv_time' , true );
                                if (!empty( $time)) {
                                    ?> <span class="absolute text-white top-0 left-0 p-2 text-sm hover:scale-x-50  ">
                                        <?php
                                        echo
                                        $time
                                        ;?>
                                    </span>
                                    <?php
                                } ?>
                            </figure>

                            <a href="<?php the_permalink(); ?>" class="absolute  bottom-16 md:bottom-28 right-2  text-xs
                            md:text-xl  text-white z-20 font-bold ">
                                <?php  the_title(); ?>
                            </a>
                            <span class="absolute  bottom-16 md:bottom-10 z-20 text-white  right-2  text-[8px] md:text-sm "> ۳ ساعت قبل </span>
                            <div class="w-full overflow-hidden bg-card-custome h-full absolute inset-0 bg-red-200  "></div>

                        </a>

                    </div>

            <?php
                endwhile;
            }
            wp_reset_postdata();
            ?>


        </div>
    </section>
</section>
