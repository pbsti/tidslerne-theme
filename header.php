<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name")?></title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/@heroicons/vue@2"></script>
    <script src="js/main.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class()?>>
     <!-- Navigation Bar -->
<nav class="w-full bg-[#2B682C] text-[#ededed] fixed top-0 z-50 shadow-md">
    <div class="flex items-center justify-between h-auto mx-auto px-8 py-2">
      <!-- Logo Left -->
      <div class="flex items-center">
        <a href="<?php echo get_permalink( get_page_by_path( 'frontpage' ) ); ?>" class="flex items-center">
          <img src="/wp-content/themes/tidslerne-theme/img/Logo_white.png" alt="Tidslerne Logo" class="h-8 md:h-10 lg:h-12 w-auto" />
        </a>
      </div>
      <!-- Menu Center -->
      <div class="flex justify-center">
        <ul class="desktop-menu hidden lg:flex items-center gap-10 p-2 uppercase">
          <li><a href="<?php echo get_permalink(get_page_by_path("stories")->ID);?>"><h4>Stories and Guides</h4></a></li>        
          <li><a href="<?php echo get_permalink(get_page_by_path("treatments")->ID);?>"><h4>Treatments</h4></a></li>
          <li><a href="<?php echo get_permalink(get_page_by_path("events")->ID);?>"><h4>Events</h4></a></li>
          <li><a href="<?php echo get_permalink(get_page_by_path("membership")->ID);?>"><h4>Membership</h4></a></li>
          <li><a href="<?php echo get_permalink(get_page_by_path("videos")->ID);?>"><h4>Videos</h4></a></li>
          <li><a href="#"><h4>More</h4></a></li>
          <li><a id="frontpage-link" href="<?php echo get_permalink( get_page_by_path( 'frontpage' ) ); ?>"><h4>Frontpage</h4></a></li>
        </ul>
      </div>
      <!-- Login Right -->
      <div class="flex justify-end items-center cursor-pointer">
        <div class="desktop-login hidden lg:flex items-center border border-[#ededed] rounded-md py-2 px-4 w-auto gap-2 hover:bg-[#ededed] hover:text-[#2B682C] transition duration-300">
          <i class="fas fa-sign-in-alt"></i>
          <span class="uppercase"><h4>LOG IN</h4></span>
        </div>
        <!-- Mobile Menu Button -->
        <button id="mobileMenuBtn" class="lg:hidden text-[#ededed] text-2xl ml-4" aria-label="Open menu">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </div>
    <!-- Mobile/Tablet Menu (hidden by default) -->
    <div id="mobileNavMenu" class="hidden fixed top-0 h-3/6 w-full z-50 bg-[#2B682C]/95 flex flex-col items-center justify-center p-4">
      <button id="closeMobileMenu" class="absolute top-6 right-6 text-[#ededed] text-2xl" aria-label="Close menu">
        <i class="fas fa-times"></i>
      </button>
      <ul class="m-t-menu flex flex-col items-center gap-6 p-2 uppercase">
         <li><a href="<?php echo get_permalink(get_page_by_path("stories")->ID);?>"><h4>Stories and Guides</h4></a></li>        
          <li><a href="<?php echo get_permalink(get_page_by_path("treatments")->ID);?>"><h4>Treatments</h4></a></li>
          <li><a href="<?php echo get_permalink(get_page_by_path("events")->ID);?>"><h4>Events</h4></a></li>
          <li><a href="<?php echo get_permalink(get_page_by_path("membership")->ID);?>"><h4>Membership</h4></a></li>
          <li><a href="<?php echo get_permalink(get_page_by_path("videos")->ID);?>"><h4>Videos</h4></a></li>
          <li><a href="#"><h4>More</h4></a></li>
          <li><a id="frontpage-link" href="<?php echo get_permalink( get_page_by_path( 'frontpage' ) ); ?>"><h4>Frontpage</h4></a></li>
      </ul>
      <div class="m-t-login flex mt-4 cursor-pointer gap-2 border border-[#ededed] rounded-md py-2 px-4 w-auto items-center">
        <i class="fas fa-sign-in-alt"></i>
        <span class="uppercase"><h4>LOG IN</h4></span>
      </div>
    </div>
</nav>
  