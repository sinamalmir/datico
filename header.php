<!DOCTYPE html>
<html <?php language_attributes(); ?>  >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php wp_head(); ?>
     <?php $general = danati_get_option('sina_theme_general_options') ;
            $bolg = danati_get_option('pishro_blog_options');
     ?>
    <link rel="icon" type="image/png" href="<?php echo $general[0]['sina_theme_faveIcon_option'] ; ?>">
</head>

<body class="bg-white  dark:bg-darkMain">


<!-- header -->
<header class=" bg-white dark:bg-darkMain   z-50  ">
    <nav class="bg-white dark:bg-darkMain  fixed top-0 left-0 right-0  z-50 w-full   md:absolute navmenu ">
        <div class="container menu-position m-auto px-2 md:px-12 lg:px-7">
            <div class="flex flex-wrap items-center justify-between py-3 gap-6 md:py-4 md:gap-0">
                <input type="checkbox" name="toggle_nav" id="toggle_nav" class="peer hidden">
                <div class="w-full px-6 flex justify-between lg:w-max md:px-0 z-30">
                    <a href="<?php home_url();  ?>" aria-label="logo" class="flex space-x-2 items-center">



                        <?php $logo = $general[0]['sina_theme_logo_option'];
                                if (isset($logo)){
                                    ?>   <img src="<?php echo $logo ?>" class="w-full"
                                              alt="tailus logo" width="144" height="133">
                                <?php } else{
                                    ?> <img src="<?php echo get_template_directory_uri() .'/assets/img/logo.png'?>" class="w-full"
                                            alt="tailus logo" width="144" height="133">
                        <?php
                                }
                        ?>

                    </a>

                    <div class="flex items-center lg:hidden max-h-10">
                        <label role="button" for="toggle_nav" aria-label="humburger" id="hamburger" class="relative w-10 h-auto p-2">
                            <div id="line"
                                 class="m-auto h-0.5 w-6 rounded bg-black dark:bg-white transition duration-300"></div>
                            <div id="line2"
                                 class="m-auto mt-2 h-0.5 w-6 rounded bg-black dark:bg-white transition duration-300">
                            </div>
                        </label>
                    </div>
                </div>


                <div class="hidden peer-checked:flex w-full flex-col-reverse lg:flex lg:flex-row justify-end z-30 items-center gap-y-6 p-6 rounded-xl bg-white dark:bg-darkMain dark:text-darkTextMain lg:gap-y-0 lg:p-0 md:flex-nowrap lg:bg-transparent lg:w-7/12">

                    <div class="main-menu-content text-gray-600 lg:pr-4 w-full">
                        <?php   wp_nav_menu( array( 'theme_location' => 'header-menu' ,
                            'container' => '' ,
                             'menu_class' => 'tracking-wide font-medium  text-sm  flex flex-col gap-x-2 gap-y-6 lg:gap-y-0 lg:flex-row w-full' ,
                              'menu-item_class' => 'menu-item ml-4' ) ); ?>
<!--                        --><?php
//                        $test = danati_get_option('sina_theme_general_options');
//                           echo $test[0]['sina_theme_logo_option']
//                        ?>
                    </div>

                    <div class="w-full min-w-max space-y-2 flex items-center gap-3
                        lg:space-y-0 sm:w-max">

                        <div class=" search-svg ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6
                                         ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </div>
                        <div class="search-icon relative w-max mx-auto  ">

                           <div class="search-input">
                               <form method="get" action="<?php home_url('/'); ?>">
                                   <input type="text"  placeholder="جستجو کنید..." name="s" value="<?php the_search_query
                                   (); ?>" id="">

                                   <button>
                                       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6  w-7 h-7 text-lightMain  ">
                                           <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                       </svg>
                                   </button>

                               </form>
                           </div>

                        </div>
                        <div class="moon-light-mode">

                            <div class="w-11  light-dark-mode  ">


                                <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10 z-0 sun theme-switcher block px-2 dark:stroke-white  hover:-rotate-90 duration-300 transition  "  data-theme="dark" >
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                                </svg>



                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10  moon theme-switcher block px-2  dark:stroke-white   hover:rotate-180 hover:fill-yellow duration-300 transition  "  data-theme="light" >
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                                </svg>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</header>

