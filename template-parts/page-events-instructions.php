<?php
$args = array(
    "post_type" => "zoom-instruction",
    "posts_per_page" => -1
);
$loop = new WP_Query($args);
?>

<?php if ($loop->have_posts()): ?>
<!--Zoom instructions section -->
<section class="flex flex-col items-center justify-center bg-[#D9D9D9]/40 p-4 md:p-8 lg:p-10">
  <!-- Heading Section OUTSIDE LOOP -->
  <div class="text-center mb-4 md:mb-6">
    <h2 class="mb-2">Need help with Zoom events?</h2>
    <h3 class="text-[#2B682C]">Check our pdf Zoom instructions for iPad and PC users</h3>
  </div>

  <div class="w-full flex flex-col lg:flex-row justify-center items-center mt-6 md:mt-10 mb-6 md:mb-10 sm:gap-8 md:gap-15">
    <?php while ($loop->have_posts()): $loop->the_post(); ?>
      <?php
        $ipadHeader = get_field("ipad_header");
        $ipadIcon = get_field("ipad_icon");
        $ipadPDFDownload = get_field("ipad_pdf_download");
        $pcHeader = get_field("pc_header");
        $pcIcon = get_field("pc_icon");
        $pcPDFDownload = get_field("pc_pdf_download");
      ?>
      <!--iPad Section -->
      <div class="flex flex-col items-center w-full gap-4 max-w-sm mb-8 sm:mb-10 md:mb-0">
        <h3 class="text-[#356902] text-center"><?php echo esc_html($ipadHeader) ?></h3>
        <div class="mb-2 md:mb-8 h-15 w-20 sm:h-20 sm:w-25 md:w-[200px] md:h-[120px] flex justify-center items-center">
          <img src="<?php echo esc_url($ipadIcon["url"]) ?>" alt="<?php echo esc_attr($ipadIcon["alt"]) ?>" class="max-h-full max-w-full object-contain">
        </div>
        <div class="flex justify-center w-full">
          <button class="flex items-center justify-center gap-2 bg-[#2B682C] text-[#ededed] py-3 px-6 rounded-md cursor-pointer">
            <img src="/wp-content/themes/tidslerne-theme/img/download-icon.png" alt="<?php echo esc_attr($ipadPDFDownload["alt"]) ?>" class="w-5 h-5">
            <span><?php echo esc_html($ipadPDFDownload) ?></span>
          </button>
        </div>
      </div>

      <!-- PC Section -->
      <div class="flex flex-col items-center w-full gap-4 max-w-sm">
        <h3 class="text-[#356902] text-center"><?php echo esc_html($pcHeader) ?></h3>
        <div class="mb-2 md:mb-8 h-15 w-20 sm:h-20 sm:w-25 md:w-[200px] md:h-[120px] flex justify-center items-center">
          <img src="<?php echo esc_url($pcIcon["url"]) ?>" alt="Laptop Icon" class="max-h-full max-w-full object-contain">
        </div>
        <div class="flex justify-center w-full">
          <button class="flex items-center justify-center gap-2 bg-[#2B682C] text-[#ededed] py-3 px-6 rounded-md cursor-pointer">
            <img src="/wp-content/themes/tidslerne-theme/img/download-icon.png" alt="<?php echo esc_attr($pcPDFDownload["alt"]) ?>" class="w-5 h-5">
            <span><?php echo esc_html($pcPDFDownload) ?></span>
          </button>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</section>
<?php wp_reset_postdata(); ?>
<?php endif; ?>