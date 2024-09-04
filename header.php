<!DOCTYPE html>
<html <?php language_attributes(); ?>  >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php wp_head(); ?>

    <link rel="icon" type="image/png" href="">
</head>

<body class="bg-white  dark:bg-darkMain">

<div class="bg-lightBorder">
    <nav class="container  relative px-4 py-4 flex justify-between items-center ">
        <a class="text-3xl font-bold leading-none max-w-[160px]" href="#">
            <img src="<?php echo get_template_directory_uri().'/assets/img/logo11.png'?>" alt="">
        </a>
        <div class="lg:hidden">
            <button class="navbar-burger flex items-center text-blue-600 p-3">
                <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>

        <!-- ul li list of nav links -->

        <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:mx-auto lg:flex
        lg:items-center lg:w-auto lg:space-x-6">
            <li><a class="text-sm text-gray-400 hover:text-gray-500 ml-2 bg-orange "  href="#">Home</a></li>

            <li><a class="text-sm text-blue-400 hover:text-gray-500" href="#">About Us</a></li>

            <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Services</a></li>

            <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Pricing</a></li>

            <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Contact</a></li>
        </ul>
    </nav>
</div>
<!-- mobile responsive menu  -->

<div class="navbar-menu relative z-50 hidden">
    <div class="navbar-backdrop fixed inset-0  opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-bold leading-none" href="#">
                <img src="<?php echo get_template_directory_uri().'/assets/img/logo11.png'?>" alt="">
            </a>
            <button class="navbar-close">
                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div>

            <!-- ul list nav links for mobile -->

            <ul>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Home</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">About Us</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Services</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Pricing</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Contact</a>
                </li>
            </ul>
        </div>

    </nav>
</div>

