<?php get_header(); ?>

<?php
  // Get the page object by slug
  $frontpage = get_page_by_path('frontpage');

  // If the page exists
  if ($frontpage):
    $page_id = $frontpage->ID;

    // ACF fields from "frontpage"
    $logo = get_field("logo", $page_id);
    $heroDescription = get_field("hero_description", $page_id);
    $heroImage = get_field("hero_image", $page_id);
    $videoLink = get_field("video_link", $page_id);
    $thistleTextLeft = get_field("thistle_text_left", $page_id);
    $thistleTextRight = get_field("thistle_text_right", $page_id);
    $communityText = get_field("community_text", $page_id);
    $newsletterText = get_field("newsletter_text", $page_id);
    $newsletterIcon = get_field("newsletter_icon", $page_id);
    $storiesText = get_field("stories_text", $page_id);
    $storiesImage = get_field("stories_image", $page_id);
?>

<!-- START PAGE CONTENT -->

<section class="lg:min-h-[400px] sm:min-h-[300px] min-h-[200px] mt-16">
  <div class="flex flex-col-reverse md:flex-row items-center md:justify-between lg:justify-center px-8 py-2 md:py-4">
    <!-- Left content -->
    <div class="w-full md:w-1/2 flex flex-col items-center justify-between gap-2 lg:gap-4 p-2 md:p-6">
      <?php if ($logo): ?>
        <img src="<?php echo esc_url($logo["url"]); ?>" alt="<?php echo esc_attr($logo["alt"]) ?>" class="max-w-xs md:max-w-2xs lg:max-w-sm w-full h-auto mx-auto md:mx-0 p-4">
      <?php endif; ?>
      <h1 class="md:mb-12 text-center p-4"><?php echo esc_html($heroDescription); ?></h1>
      <div class="relative w-full max-w-sm mb-4">
        <input 
          type="text"
          placeholder="Search"
          class="w-full h-12 rounded-lg bg-gray-300 py-2 px-4 pr-10 focus:outline-none focus:ring-2 focus:ring-[#580259]/50"/>
        <div class="absolute right-4 top-1/2 transform -translate-y-1/2">
          <i class="fas fa-search"></i>
        </div>
      </div>
    </div>

    <!-- Right image -->
    <div class="w-full md:w-1/2 flex justify-center items-center p-2 md:p-6 rounded-md">
      <?php if ($heroImage): ?>
        <img src="<?php echo esc_url($heroImage["url"]); ?>" alt="<?php echo esc_attr($heroImage["alt"]) ?>" class="w-full h-auto rounded-md">
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- About us section -->
<section class="flex flex-col items-center lg:min-h-[600px] sm:min-h-[400px] min-h-[300px] bg-[#D9D9D9]/40 mx-auto px-8 py-6 md:py-8">
  <div class="w-full text-center py-4 my-4 md:mb-8">
    <h2>Who are the Thistles?</h2>
  </div>
  <div class="relative w-full md:max-w-lg lg:max-w-3xl mx-auto aspect-video rounded-md overflow-hidden shadow-md mb-4">
    <iframe
      src="<?php echo esc_url($videoLink ?: 'https://www.youtube.com/embed/rjm7kX3w57k?si=s0A4wy0xaHYy3XwR'); ?>"
      title="Who are the Thistles - YouTube video"
      allowfullscreen
      class="absolute top-0 left-0 w-full h-full"
    ></iframe>
  </div>
  <div class="w-full p-6 md:p-8 lg:px-15 lg:py-8">
    <div class="flex flex-col md:flex-row mb-8 md:mb-12">
      <div class="w-full md:w-1/2 p-4 md:p-8 lg:px-12">
        <p><?php echo esc_html($thistleTextLeft); ?></p>
      </div>
      <div class="w-full md:w-1/2 p-4 md:p-8 lg:px-12">
        <p><?php echo esc_html($thistleTextRight); ?></p>
      </div>
    </div>
    <div class="flex justify-center w-full">
      <a href="#" class="cta-btn bg-[#580259] text-[#ededed] text-xl rounded-3xl w-auto py-4 px-8 uppercase text-center">
        Support our mission
      </a>
    </div>
  </div>
</section>

<?php get_template_part("template-parts/index", "banner"); ?>

<!-- Membership CTA -->
<section class="flex flex-col-reverse md:flex-row items-center justify-center gap-10 md:gap-12 lg:min-h-[320px] sm:min-h-[260px] min-h-[230px] bg-[#D9D9D9]/40 mx-auto px-15 py-10 md:py-6">
  <div class="flex flex-col items-center justify-center px-8 lg:px-20">
    <div class="w-full text-center py-4 mb-4 md:mb-6">
      <h2>Find Connection and Support</h2>
    </div>
    <div class="flex justify-center w-full">
      <a href="#" class="cta-btn bg-[#580259] text-[#ededed] rounded-3xl w-auto py-4 px-8 uppercase text-center text-nowrap">
        SIGN UP FOR MEMBERSHIP
      </a>
    </div>
  </div>
  <div class="flex items-center justify-center max-w-[800px] px-8 lg:px-20">
    <p><?php echo esc_html($communityText); ?></p>
  </div>
</section>

<?php get_template_part("template-parts/index", "treatments"); ?>

<!-- Newsletter -->
<section class="flex flex-col md:flex-row items-center justify-center gap-8 md:gap-10 lg:min-h-[320px] sm:min-h-[260px] min-h-[230px] bg-[#D9D9D9]/40 mx-auto sm:px-15 py-10 md:py-6 overflow-x-hidden">
  <div class="flex flex-col items-center justify-center px-8 lg:px-20 h-20 md:h-30">
    <div class="w-full text-center text-nowrap py-2">
      <h2>Updates, Insights & Inspiration from Tidslerne</h2>
    </div>
    <?php if ($newsletterIcon): ?>
      <img src="<?php echo esc_url($newsletterIcon["url"]); ?>" alt="<?php echo esc_attr($newsletterIcon["alt"]) ?>" class="max-h-full w-auto p-2">
    <?php endif; ?>
  </div>
  <div class="flex !flex-col items-center justify-center text-center  px-8 lg:px-20">
    <p><?php echo esc_html($newsletterText); ?></p>
    <div class="flex max-w-md space-x-6">
      <div class="newsletter">
        <div class="tnp tnp-subscription ">
          <form method="post" action="http://exam.paulinastiuj.dk/wp-admin/admin-ajax.php?action=tnp&na=s">
            <input type="hidden" name="nlang" value="">
            <div class="tnp-field tnp-field-email"><label for="tnp-1">Email</label>
            <input class="!flex-grow !h-[45px] !px-4 !py-2 !rounded-md !bg-[#2EA836]/20 !cursor-pointer" type="email" name="ne" id="tnp-1" value="" placeholder="" required></div>
            <div class="tnp-field tnp-privacy-field"><label><input type="checkbox" name="ny" required class="tnp-privacy"> I accept the privacy policy</label></div>
            <div class="!bg-[#2B682C] !text-[#ededed] !px-4 !py-2 !rounded-md !cursor-pointer" style="text-align: centre"><input class="tnp-submit" type="submit" value="Subscribe" class="!cursor-pointer bg-none text-[#ededed]"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Patient stories -->
<section class="flex flex-col items-center">
  <div class="flex flex-col-reverse md:flex-row w-full">
    <div class="md:w-1/2 w-full aspect-[4/3] md:aspect-auto">
      <?php if ($storiesImage): ?>
        <img src="<?php echo esc_url($storiesImage["url"]); ?>" alt="<?php echo esc_attr($storiesImage["alt"]) ?>" class="w-full h-full object-cover"/>
      <?php endif; ?>
    </div>
    <div class="md:w-1/2 w-full flex flex-col justify-center items-center p-6 md:p-10">
      <h2 class="mb-3 md:mb-10 lg:mb-12 py-3">Shared Experiences</h2>
      <p class="md:max-w-[40vw] max-w-[75vw]"><?php echo esc_html($storiesText); ?></p>
      <div class="flex justify-center w-full mt-4 md:mt-10">
        <a href="#" class="cta-btn bg-[#580259] text-[#ededed] rounded-3xl w-auto py-4 px-8 uppercase text-center text-nowrap">
          Our patient stories
        </a>
      </div>
    </div>
  </div>
</section>

<?php endif; ?>

<?php get_footer(); ?>
