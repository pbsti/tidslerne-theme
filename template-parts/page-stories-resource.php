 <?php
$args = array(
	"post_type" => "download",
	"posts_per_page" => -1
);
$loop = new WP_Query($args);
?>

<?php if($loop->have_posts()): ?>
	<?php while($loop->have_posts()): $loop->the_post() ?>
        <?php
        $downloadHeaderLeft = get_field("download_header_left");
        $downloadImageLeft = get_field("download_image_left");
        $downloadButtonLeft = get_field("download_button_left");
        $downloadHeaderRight = get_field("download_header_right");
        $downloadImageRight = get_field("download_image_right");
        $downloadButtonRight = get_field("download_button_right");
        ?>





 <section class="flex flex-col items-center justify-center p-8 md:p-10 lg:p-12">

  <!-- Publications Section -->
  <div class="w-full flex flex-col lg:flex-row justify-center items-center p-10 mb-6 md:mb-10 md:gap-16 lg:gap-24">
    <!-- Leaflet Section -->
    <div class="flex flex-col items-center w-full max-w-sm mb-20 md:mb-0">
      <h3 class="text-[#356902] text-center"><?php echo esc_html($downloadHeaderLeft) ?></h3>
      <div class="mb-8 w-full max-w-xs flex justify-center">
        <img src="<?php echo esc_url($downloadImageLeft["url"]) ?>" alt="Leaflet Image" class="w-full h-auto max-h-[240px] object-contain mx-auto">
      </div>
      <div class="flex justify-center w-full">
        <button class="flex items-center justify-center gap-2 bg-[#2B682C] text-[#ededed] py-3 px-6 rounded-md cursor-pointer">
          <img src="/wp-content/themes/tidslerne-theme/img/download-icon.png" alt="Download PDF" class="w-5 h-5">
          <span><?php echo esc_html($downloadButtonLeft) ?></span>
        </button>
      </div>
    </div>

    <!-- Magazine Section -->
    <div class="flex flex-col items-center w-full max-w-sm">
      <h3 class="text-[#356902] text-center"><?php echo esc_html($downloadHeaderRight) ?></h3>
      <div class="mb-8 w-full max-w-xs flex justify-center">
        <img src="<?php echo esc_url($downloadImageRight["url"]) ?>" alt="Magazine Image" class="w-full h-auto max-h-[240px] object-contain mx-auto">
      </div>
      <div class="flex justify-center w-full">
        <button class="flex items-center justify-center gap-2 bg-[#2B682C] text-[#ededed] py-3 px-6 rounded-md cursor-pointer">
          <img src="/wp-content/themes/tidslerne-theme/img/download-icon.png" alt="Download PDF" class="w-5 h-5">
          <span><?php echo esc_html($downloadButtonRight) ?></span>
        </button>
      </div>
    </div>


    </section>

      <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>