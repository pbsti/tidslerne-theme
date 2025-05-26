<?php
$args = array(
    "post_type" => "practical-resource",
    "posts_per_page" => -1
);
$loop = new WP_Query($args);
?>

<?php if($loop->have_posts()): ?>
	<?php while($loop->have_posts()): $loop->the_post() ?>
 <?php
        $booksHeader = get_field("books_header");
        $booksIcon = get_field("books_icon");
        $booksDownload = get_field("books_download");
        $linksHeader = get_field("links_header");
        $linksIcon = get_field("links_icon");
        $linksDownload = get_field("links_download");
 ?>



 <div class="w-full flex flex-col lg:flex-row justify-center items-center mt-6 md:mt-10 mb-6 md:mb-10 sm:gap-8 md:gap-15">
    <!-- Book recommendations Section -->
    <div class="flex flex-col items-center w-full gap-4 max-w-sm mb-8 sm:mb-10 md:mb-0">
      <h3 class="text-[#356902] text-center"><?php echo esc_html($booksHeader) ?></h3>
      <div class="mb-2 md:mb-8 h-10 w-15 sm:h-20 sm:w-25 md:w-[200px] md:h-[120px] flex justify-center items-center">
        <img src="<?php echo esc_url($booksIcon["url"]) ?>" alt="Book Icon" class="max-h-full max-w-full object-contain">
      </div>
      <div class="flex justify-center w-full">
        <button class="flex items-center justify-center gap-2 bg-[#2B682C] text-[#ededed] py-3 px-6 rounded-md cursor-pointer">
          <img src="/wp-content/themes/tidslerne-theme/img/download-icon.png" alt="Download PDF" class="w-5 h-5">
          <span><?php echo esc_html($booksDownload) ?></span>
        </button>
      </div>
    </div>

    <!-- Informative links Section -->
    <div class="flex flex-col items-center w-full gap-4 max-w-sm">
      <h3 class="text-[#356902] text-center"><?php echo esc_html($linksHeader) ?></h3>
      <div class="mb-2 md:mb-8 h-10 w-15 sm:h-20 sm:w-25 md:w-[200px] md:h-[120px] flex justify-center items-center">
        <img src="<?php echo esc_url($linksIcon["url"]) ?>" alt="Hyperlink Icon" class="max-h-full max-w-full object-contain">
      </div>
      <div class="flex justify-center w-full">
        <button class="flex items-center justify-center gap-2 bg-[#2B682C] text-[#ededed] py-3 px-6 rounded-md cursor-pointer">
          <img src="/wp-content/themes/tidslerne-theme/img/download-icon.png" alt="Download PDF" class="w-5 h-5">
          <span><?php echo esc_html($linksDownload) ?></span>
        </button>
      </div>
    </div>
  </div>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>