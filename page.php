<?php get_header(); ?>

<?php
if (have_posts()) :
while (have_posts()) : the_post();
?>
    <!-- start header for single page -->
    <section class="mt-40 container flex flex-col   ">

        <div class=" flex  flex-col gap-7 ">

            <!--        title  -->
            <header>
                <h1 class="w-full text-title dark:text-white font-semibold text-xl lg:text-3xl   " >
                    <?php the_title(); ?>
                </h1>
            </header>


        </div>

        <div class=" w-full  mt-5 ">
            <figure   class=" max-w-full single_thumbnail rounded-lg overflow-hidden ">
                <!--            <img   class=" max-w-full rounded-lg overflow-hidden " src="../assets/img/oneplus-new-products-910x600.jpg" alt="">-->
                <?php the_post_thumbnail(); ?>
            </figure>
        </div>
    </section>

<section class="container mt-10">
    <div class="flex sidebar-main-page  flex-col md:flex-row gap-1 justify-between ">
        <!-- main content single page -->
        <div class="w-full single-main-content   mb-10 ">
            <article>

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


    </div>
</section>


<?php get_footer(); ?>
