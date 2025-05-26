<?php get_header(); ?>

<?php
  // Get the page object by slug
  $membership = get_page_by_path('membership');

  if ($membership):
    $page_id = $membership->ID;

    $membershipHeroImage = get_field("membership_hero_image", $page_id);
    $membershipHeroText = get_field("membership_hero_text", $page_id);
    $benefitsInfoLeft = get_field("benefits_info_left", $page_id);
    $benefitsInfoRight = get_field("benefits_info_right", $page_id);
    $chargeInfo = get_field("charge_info", $page_id);
    $chargeIcon = get_field("charge_icon", $page_id);
    $membershipURL = get_the_permalink($page_id);
  
?>


  <!-- Hero Section -->

<section class="flex flex-col items-center mt-12 sm:mt-13 md:mt-14 lg:mt-15">
  <div class="flex flex-col-reverse md:flex-row w-full">
    <div class="w-full md:w-1/2 px-12 py-16 flex flex-col items-center justify-center">
      <h1 class="text-center mb-8 md:mb-15 lg:mb-17 py-3">Why becoming a Tidslerne member matters</h1>
      <p class="text-left mb-6"><?php echo esc_html($membershipHeroText); ?></p>
    </div>
    <div class="w-full md:w-1/2 aspect-[4/3] md:aspect-auto">
      <img src="<?php echo esc_url($membershipHeroImage["url"]) ?>" alt="fill" class="h-full w-full mb-4 md:mb-0 object-cover">
    </div>
  </div>
</section>



<!--Info section -->

<section class="min-h-[230px] flex flex-col justify-center items-center bg-[#D9D9D9]/40 p-6 md:p-12 lg:p-14">

  <div class="w-full text-center mt-2 md:mt-4">
    <h2>Why should you sign up? </h2>
  </div>
  
  <!-- Text Content -->
  <div class="flex flex-col md:flex-row mt-4 md:mt-8">
    <div class="w-full md:w-1/2 p-4 md:p-8 lg:px-12">
      <p>
        <?php echo esc_html($benefitsInfoLeft); ?>
      </p>
    </div>
    <div class="w-full md:w-1/2 p-4 md:p-8 lg:px-12">
      <p>
      <?php echo esc_html($benefitsInfoRight); ?>   
    </p>
    </div>
  </div>
  
</section>

<!-- Fees - payment section -->

<section class="flex flex-col md:flex-row items-center justify-center gap-8 md:gap-10 lg:min-h-[320px] sm:min-h-[260px] min-h-[230px] mx-auto px-4 py-8 md:py-10">
  <div class="flex flex-col items-center justify-center md:w-2/3 w-full p-2 md:p-10">
    <div class="w-full text-center">
      <h2 class="p-4 md:p-8">Membership fees – What does it cost to join Tidslerne?</h2>
      <p class="text-left" >
        <?php echo esc_html($chargeInfo); ?>    
      </p>
    </div>
  </div>

  <div class="flex flex-col items-center justify-center md:w-1/3 w-full p-2 md:p-10">
    <div class="mb-6 md:mb-10 h-15 w-20 sm:h-20 sm:w-25 md:w-[200px] md:h-[120px] flex justify-center items-center">
      <img src="<?php echo esc_url($chargeIcon["url"]) ?>" alt="Payment Card" class="max-h-full max-w-full object-contain">
    </div>
    <div class="flex justify-center w-full">
      <a href="#"
        class="cta-btn bg-[#580259] text-[#ededed] rounded-3xl w-auto py-4 px-8 uppercase text-center text-nowrap">
        SIGN UP FOR MEMBERSHIP
      </a>
    </div>
  </div>
  
</section>


<?php endif; ?>

<?php get_footer(); ?>
