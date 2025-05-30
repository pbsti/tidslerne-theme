<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover holistic cancer support, alternative treatments, and volunteer opportunities at Tidslerne. A trusted Danish association guiding patients and families.">
    <meta name="keywords" content="treatment abroad, cancer association, alternative cancer treatment, volunteer association, cancer, patient, support">
    <meta name="title" content="Cancer Support & Alternative Treatments | Tidslerne Patient Association">
    <meta name="author" content="Tidslerne">
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
      <a href="<?php echo get_permalink(get_page_by_path('frontpage')->ID); ?>" class="flex items-center">
        <img src="/wp-content/themes/tidslerne-theme/img/Logo_white.png" alt="Tidslerne Logo" class="h-8 md:h-10 lg:h-12 w-auto" />
      </a>
    </div>
    <!-- Menu Center -->
    <div class="flex justify-center">
      <ul class="desktop-menu hidden lg:flex items-center gap-10 p-2 uppercase">
        <li><a href="<?php echo get_permalink(get_page_by_path('stories')->ID); ?>"><h4>Stories and Guides</h4></a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('treatments')->ID); ?>"><h4>Treatments</h4></a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('events')->ID); ?>"><h4>Events</h4></a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('membership')->ID); ?>"><h4>Membership</h4></a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('videos')->ID); ?>"><h4>Videos</h4></a></li>
        <li class="relative group">
          <a href="#" class="flex items-center"><h4>More <i class="fas fa-chevron-down ml-1 text-xs"></i></h4></a>
          <!-- Dropdown Menu -->
          <div class="absolute left-0 mt-2 w-56 bg-[#2B682C] border border-[#3a7a3b] rounded-md shadow-lg z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
            <div class="py-1">
              <a href="https://www.figma.com/proto/8EByKxI5wCzNOpGLRc40yb/low-fi-prototypes-for-tidslerne?page-id=0%3A1&node-id=678-4191&viewport=-6173%2C-12898%2C0.28&t=eqQHzDFKKCOCjzoT-1&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=125%3A329" target="_blank" class="block px-4 py-2 text-sm hover:bg-[#3a7a3b]">Board</a>
              <a href="https://www.figma.com/proto/8EByKxI5wCzNOpGLRc40yb/low-fi-prototypes-for-tidslerne?page-id=0%3A1&node-id=678-4422&viewport=-7501%2C-14722%2C0.32&t=1zWw0O89X32rGg4a-1&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=125%3A329" target="_blank" class="block px-4 py-2 text-sm hover:bg-[#3a7a3b]">Districts</a>
              <a href="https://www.figma.com/proto/8EByKxI5wCzNOpGLRc40yb/low-fi-prototypes-for-tidslerne?page-id=0%3A1&node-id=678-4653&viewport=-8222%2C-14716%2C0.32&t=qofrtXBBPpzzPAQK-1&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=125%3A329" target="_blank" class="block px-4 py-2 text-sm hover:bg-[#3a7a3b]">Call line</a>
              <a href="https://www.figma.com/proto/8EByKxI5wCzNOpGLRc40yb/low-fi-prototypes-for-tidslerne?page-id=0%3A1&node-id=678-4884&viewport=-8612%2C-14716%2C0.32&t=exQRBWhKkr3WCzlN-1&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=125%3A329" target="_blank" class="block px-4 py-2 text-sm hover:bg-[#3a7a3b]">Association Rules</a>
              <a href="https://www.figma.com/proto/8EByKxI5wCzNOpGLRc40yb/low-fi-prototypes-for-tidslerne?page-id=0%3A1&node-id=678-5115&viewport=-9340%2C-14716%2C0.32&t=vQKDiLvOVOOZu82F-1&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=125%3A329" target="_blank" class="block px-4 py-2 text-sm hover:bg-[#3a7a3b]">Support and Donate</a>
              <a href="https://www.figma.com/proto/8EByKxI5wCzNOpGLRc40yb/low-fi-prototypes-for-tidslerne?page-id=0%3A1&node-id=678-5346&viewport=-9758%2C-14716%2C0.32&t=O35qQKwB6yEyohPx-1&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=125%3A329" target="_blank" class="block px-4 py-2 text-sm hover:bg-[#3a7a3b]">Apply for grants</a>
              <a href="https://www.figma.com/proto/8EByKxI5wCzNOpGLRc40yb/low-fi-prototypes-for-tidslerne?page-id=0%3A1&node-id=678-5577&viewport=-10312%2C-14716%2C0.32&t=1dEkO4AAtOxsdfjx-1&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=125%3A329" target="_blank" class="block px-4 py-2 text-sm hover:bg-[#3a7a3b]">Privacy and policy</a>
            </div>
          </div>
        </li>
        <?php if (!is_front_page()): ?>
          <li><a id="frontpage-link" href="<?php echo get_permalink(get_page_by_path('frontpage')->ID); ?>"><h4>Frontpage</h4></a></li>
        <?php endif; ?>
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
  <!-- Mobile/Tablet Menu -->
  <div id="mobileNavMenu" class="hidden fixed top-0 h-screen w-full z-50 bg-[#2B682C]/95 flex flex-col items-center p-4 overflow-y-auto">
    <button id="closeMobileMenu" class="absolute top-6 right-6 text-[#ededed] text-2xl" aria-label="Close menu">
      <i class="fas fa-times"></i>
    </button>
    <ul class="m-t-menu flex flex-col items-center gap-6 p-2 uppercase w-full">
      <li class="w-full text-center"><a href="<?php echo get_permalink(get_page_by_path('stories')->ID); ?>"><h4>Stories and Guides</h4></a></li>
      <li class="w-full text-center"><a href="<?php echo get_permalink(get_page_by_path('treatments')->ID); ?>"><h4>Treatments</h4></a></li>
      <li class="w-full text-center"><a href="<?php echo get_permalink(get_page_by_path('events')->ID); ?>"><h4>Events</h4></a></li>
      <li class="w-full text-center"><a href="<?php echo get_permalink(get_page_by_path('membership')->ID); ?>"><h4>Membership</h4></a></li>
      <li class="w-full text-center"><a href="<?php echo get_permalink(get_page_by_path('videos')->ID); ?>"><h4>Videos</h4></a></li>
      <li class="relative w-full text-center">
        <a href="#" class="flex items-center justify-center" id="mobileMoreBtn"><h4>More <i class="fas fa-chevron-down ml-1 text-xs"></i></h4></a>
        <!-- Mobile Dropdown Menu -->
        <div id="mobileMoreDropdown" class="hidden absolute left-0 right-0 mt-2 mx-auto w-4/5 bg-[#3a7a3b] rounded-md shadow-lg z-50">
          <div class="py-1">
            <a href="https://www.figma.com/proto/8EByKxI5wCzNOpGLRc40yb/low-fi-prototypes-for-tidslerne?page-id=0%3A1&node-id=678-4191&viewport=-6173%2C-12898%2C0.28&t=eqQHzDFKKCOCjzoT-1&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=125%3A329" target="_blank" class="block px-4 py-2 text-sm hover:bg-[#2B682C]">Board</a>
            <a href="https://www.figma.com/proto/8EByKxI5wCzNOpGLRc40yb/low-fi-prototypes-for-tidslerne?page-id=0%3A1&node-id=678-4422&viewport=-7501%2C-14722%2C0.32&t=1zWw0O89X32rGg4a-1&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=125%3A329" target="_blank" class="block px-4 py-2 text-sm hover:bg-[#2B682C]">Districts</a>
            <a href="https://www.figma.com/proto/8EByKxI5wCzNOpGLRc40yb/low-fi-prototypes-for-tidslerne?page-id=0%3A1&node-id=678-4653&viewport=-8222%2C-14716%2C0.32&t=qofrtXBBPpzzPAQK-1&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=125%3A329" target="_blank" class="block px-4 py-2 text-sm hover:bg-[#2B682C]">Call line</a>
            <a href="https://www.figma.com/proto/8EByKxI5wCzNOpGLRc40yb/low-fi-prototypes-for-tidslerne?page-id=0%3A1&node-id=678-4884&viewport=-8612%2C-14716%2C0.32&t=exQRBWhKkr3WCzlN-1&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=125%3A329" target="_blank" class="block px-4 py-2 text-sm hover:bg-[#2B682C]">Association Rules</a>
            <a href="https://www.figma.com/proto/8EByKxI5wCzNOpGLRc40yb/low-fi-prototypes-for-tidslerne?page-id=0%3A1&node-id=678-5115&viewport=-9340%2C-14716%2C0.32&t=vQKDiLvOVOOZu82F-1&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=125%3A329" target="_blank" class="block px-4 py-2 text-sm hover:bg-[#2B682C]">Support and Donate</a>
            <a href="https://www.figma.com/proto/8EByKxI5wCzNOpGLRc40yb/low-fi-prototypes-for-tidslerne?page-id=0%3A1&node-id=678-5346&viewport=-9758%2C-14716%2C0.32&t=O35qQKwB6yEyohPx-1&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=125%3A329" target="_blank" class="block px-4 py-2 text-sm hover:bg-[#2B682C]">Apply for grants</a>
            <a href="https://www.figma.com/proto/8EByKxI5wCzNOpGLRc40yb/low-fi-prototypes-for-tidslerne?page-id=0%3A1&node-id=678-5577&viewport=-10312%2C-14716%2C0.32&t=1dEkO4AAtOxsdfjx-1&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=125%3A329" target="_blank" class="block px-4 py-2 text-sm hover:bg-[#2B682C]">Privacy and policy</a>
          </div>
        </div>
      </li>
      <?php if (!is_front_page()): ?>
        <li class="w-full text-center"><a id="frontpage-link-mobile" href="<?php echo get_permalink(get_page_by_path('frontpage')->ID); ?>"><h4>Frontpage</h4></a></li>
      <?php endif; ?>
    </ul>
    <div class="m-t-login flex mt-4 cursor-pointer gap-2 border border-[#ededed] rounded-md py-2 px-4 w-auto items-center">
      <i class="fas fa-sign-in-alt"></i>
      <span class="uppercase"><h4>LOG IN</h4></span>
    </div>
  </div>
</nav>
  