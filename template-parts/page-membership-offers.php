<?php
$args = array(
    "post_type" => "member-offer",
    "posts_per_page" => -1
);
$loop = new WP_Query($args);
?>

<?php if ($loop->have_posts()): ?>
<section class="min-h-[320px] bg-[#D9D9D9]/40 px-4 py-6 md:py-8">
  <div class="w-full text-center mb-4 mt-2 md:mt-4">
    <h2>Member benefits as a Thistle</h2>
  </div>
  <div class="flex flex-col md:flex-row items-center justify-center gap-4 md:gap-8 my-6">
    <?php while ($loop->have_posts()): $loop->the_post(); ?>
      <?php
        $offerImage = get_field("offer_image");
        $offerTitle = get_field("offer_title");
      ?>
      <div class="bg-[#2EA836]/20 w-full md:w-1/3 max-w-sm p-4 mb-4 md:mb-0 flex flex-col items-center cursor-pointer">
        <?php if (!empty($offerImage["url"])): ?>
          <img src="<?php echo esc_url($offerImage["url"]); ?>" alt="<?php echo esc_attr($offerImage["alt"]) ?>" class="mb-4 h-full w-full object-cover" />
        <?php endif; ?>
        <h3 class="text-center text-[#2B682C] p-8"><?php echo esc_html($offerTitle); ?></h3>
      </div>
    <?php endwhile; ?>
  </div>
</section>
<?php wp_reset_postdata(); ?>
<?php endif; ?>