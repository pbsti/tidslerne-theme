<?php get_header(); ?>

<?php
  // Get the page object by slug
  $events = get_page_by_path('events');

  if ($events):
    $page_id = $events->ID;

    $eventsHeroImage = get_field("events_hero_image", $page_id);
    $eventsHeroText = get_field("events_hero_text", $page_id);
    $registerDescription = get_field("register_description", $page_id);
    $eventsURL = get_the_permalink($page_id);
  
?>

  <!-- Hero Section -->

<section class="flex flex-col items-center mt-12 sm:mt-13 md:mt-14 lg:mt-15">
  <div class="flex flex-col-reverse md:flex-row w-full">
    <div class="w-full md:w-1/2 px-12 py-16 flex flex-col items-center justify-center">
      <h1 class="text-center mb-8 md:mb-15 lg:mb-17 py-3">Join our upcoming cancer support events and workshops</h1>
      <p class="text-left mb-6"><?php echo esc_html($eventsHeroText); ?></p>
    </div>
    <div class="w-full md:w-1/2 aspect-[4/3] md:aspect-auto">
      <img src="<?php echo esc_url($eventsHeroImage["url"]) ?>" alt="fill" class="h-full w-full mb-4 md:mb-0 object-cover">
    </div>
  </div>
</section>



<?php endif; ?>

<?php get_footer(); ?>


