<?php 
  $arguements = array(
    'post_type' => 'vision-banner',
    'posts_per_page' => -1
  );
  $loop = new WP_Query($arguements);
?>

<?php if ($loop->have_posts()): ?>
  <!-- Banner Row -->
  <section class="flex justify-center items-center lg:min-h-[500px] sm:min-h-[300px] min-h-[200px] mx-auto px-8 py-8 md:py-10">
    <div class="flex flex-col md:flex-row gap-6 md:gap-8 lg:gap-8 mt-8 w-full md:divide-x md:divide-solid divide-[#1C001D]">
      <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <?php
          $bannerText = get_field("banner_text");
          $bannerIcon = get_field("banner_icon");
          $bannerTitle = get_field("banner_title");
        ?>
        <!-- Vision Column -->
        <div class="w-full md:w-1/3 px-3 md:px-6 flex flex-col items-center justify-between">
          <p class="p-4 mb-5">
            <?php echo esc_html($bannerText) ?>         
          </p>
          <div class="flex justify-center items-end h-20 md:h-30 mb-2">
            <img src="<?php echo esc_url($bannerIcon["url"]) ?>" alt="<?php echo esc_attr($bannerIcon["alt"]) ?>" class="max-h-full w-auto p-2"/>
          </div>
          <h3 class="uppercase text-center p-2 text-[#2EA836]"><?php echo esc_html($bannerTitle) ?></h3>
        </div>
      <?php endwhile; ?>
    </div>
  </section>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>