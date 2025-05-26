<?php get_header(); ?>

<?php
  // Get the page object by slug
  $stories = get_page_by_path('stories');

  if ($stories):
    $page_id = $stories->ID;

    // Fetch ACF fields using the correct page ID
    $storiesHeroImage = get_field("stories_hero_image", $page_id);
    $storiesHeroText = get_field("stories_hero_text", $page_id);
    $guidesDescription = get_field("guides_description", $page_id);
    $storiesURL = get_the_permalink($page_id);
  
?>

<section class="flex flex-col items-center sm:mt-13 md:mt-14 lg:mt-15">
  <div class="flex flex-col-reverse md:flex-row w-full">
    <div class="w-full md:w-1/2 px-12 py-16 flex flex-col items-center justify-center">
      <h1 class="text-center mb-8 md:mb-15 lg:mb-17 py-3">
        Real patient stories and expert cancer support guides
      </h1>
      <p class="text-left mb-6">
        <?php echo esc_html($storiesHeroText); ?>
      </p>
    </div>
    <div class="w-full md:w-1/2 aspect-[4/3] md:aspect-auto">
        <img src="<?php echo esc_url($storiesHeroImage["url"]); ?>" alt="Woman Smiling" class="h-full w-full mb-4 md:mb-0 object-cover">
    </div>
  </div>
</section>



  

<?php get_template_part("template-parts/page-stories", "patient"); ?>




    <div class="w-full text-center py-2 my-4 md:my-6">
    <h2>Updated Resources and Articles from Tidslerne</h2>
  </div>



<?php get_template_part("template-parts/page-stories", "resource"); ?>



    <!-- CTA Button -->
 <div class="flex justify-center w-full mb-10 md:mt-10">
    <a href="#"
      class="cta-btn bg-[#580259] text-[#ededed] rounded-3xl w-auto py-4 px-8 uppercase text-center text-nowrap">
      SEE ALL OUR MAGAZINES 
    </a>
  </div>



  

    
<?php get_template_part("template-parts/page-stories", "selector"); ?>

<?php get_template_part("template-parts/page-stories", "diet"); ?>
  


   <section class="flex flex-col items-center justify-center p-8 md:p-10 lg:p-12">
  <!-- Heading Section -->
  <div class="text-center mb-4 md:mb-6">
    <h2 class="mb-2">Practical Resources and Learning Guides for Cancer Support</h2>
  </div>

  <p class="p-4 max-w-[80vw]"><?php echo esc_html($guidesDescription) ?></p>

  <?php get_template_part("template-parts/page-stories", "practical"); ?>

 
</section>


<?php endif; ?>

<?php get_footer(); ?>
