<?php
$args = array(
    "post_type" => "treatment-selector",
    "posts_per_page" => -1,
    "orderby" => "menu_order", 
    "order" => "ASC"
);
$loop = new WP_Query($args);
?>

<?php if($loop->have_posts()): ?>
  <div class="w-full bg-[#D9D9D9]/40 py-8 px-4">
    <div class="w-full text-center mt-5 mb-10">
      <h2>Cancer Treatments</h2>
    </div>
    <h3 class="text-center text-[#2B682C] mb-6 md:mb-8 lg:mb-10">Choose a category</h3>
    <div class="tab-container flex flex-wrap justify-center gap-4 w-full">
      <?php $counter = 1; ?>
      <?php while($loop->have_posts()): $loop->the_post(); ?>
        <?php $treatmentTab = get_field("treatment_tab"); ?>
        <button class="<?php echo $counter === 1 ? 'bg-[#580259]' : 'bg-[#2B682C]'; ?> text-[#ededed] rounded-xl px-6 py-3 uppercase text-center cursor-pointer" 
                key="<?php echo $counter; ?>">
          <?php echo esc_html($treatmentTab) ?>
        </button>
        <?php $counter++; ?>
      <?php endwhile; ?>
    </div>
  </div>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>