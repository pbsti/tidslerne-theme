<?php get_header(); ?>

<?php
  // Get the page object by slug
  $videos = get_page_by_path('videos');

  if ($videos):
    $page_id = $videos->ID;

    $videosHeroImage = get_field("videos_hero_image", $page_id);
    $videosHeroText = get_field("videos_hero_text", $page_id);
    $contributeDescription = get_field("contribute_description", $page_id);
    $videosURL = get_the_permalink($page_id);
  
?>

  <!-- Hero Section -->

<section class="flex flex-col items-center mt-12 sm:mt-13 md:mt-14 lg:mt-15">
  <div class="flex flex-col-reverse md:flex-row w-full">
    <div class="w-full md:w-1/2 px-12 py-16 flex flex-col items-center justify-center">
      <h1 class="text-center mb-8 md:mb-15 lg:mb-17 py-3">Inspiring interviews from members and volunteers</h1>
      <p class="text-left mb-6"><?php echo esc_html($videosHeroText) ?></p>
    </div>
    <div class="w-full md:w-1/2 aspect-[4/3] md:aspect-auto">
      <img src="<?php echo esc_url($videosHeroImage["url"]) ?>" alt="Woman Smiling" class="h-full w-full mb-4 md:mb-0 object-cover">
    </div>
  </div>
</section>


<?php get_template_part("template-parts/page-videos", "library"); ?>





<?php endif; ?>

<?php get_footer(); ?>