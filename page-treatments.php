<?php get_header(); ?>

<?php
  // Get the page object by slug
  $treatments = get_page_by_path('treatments');

  if ($treatments):
    $page_id = $treatments->ID;

    $treatmentsHeroImage = get_field("treatments_hero_image", $page_id);
    $treatmentsHeroText = get_field("treatments_hero_text", $page_id);    
    $treatmentsURL = get_the_permalink($page_id);
    
  
?>

  <!-- Hero Section -->
<section class="flex flex-col items-center mt-12 sm:mt-13 md:mt-14 lg:mt-15">
  <div class="flex flex-col-reverse md:flex-row w-full">
    <div class="w-full md:w-1/2 px-12 py-16 flex flex-col items-center justify-center">
      <h1 class="text-center mb-8 md:mb-15 lg:mb-17 py-3">Comprehensive cancer treatment options and support</h1>
      <p class="text-left mb-6"><?php echo esc_html($treatmentsHeroText) ?></p>
    </div>
    <div class="w-full md:w-1/2 aspect-[4/3] md:aspect-auto">
      <img src="<?php echo esc_url($treatmentsHeroImage["url"]) ?>" alt="<?php echo esc_attr($treatmentsHeroImage["alt"]) ?>" class="h-full w-full mb-4 md:mb-0 object-cover">
    </div>
  </div>
</section>



<?php get_template_part("template-parts/page-treatments", "selector"); ?>

<!-- ================= DEBUGGING CODE ================= -->
<?php
// Debug Treatment Selector Tabs
$tabs = get_posts(['post_type' => 'treatment-selector', 'posts_per_page' => -1]);
echo '<pre style="background: #fff; padding: 20px; color: #000; border: 2px solid red; margin: 20px;">';
echo "<strong>DEBUG: Treatment Tabs Found</strong>\n";
foreach ($tabs as $tab) {
    $tab_name = get_field('treatment_tab', $tab->ID);
    echo "Tab ID: {$tab->ID} | Title: {$tab->post_title} | ACF 'treatment_tab' Value: " . ($tab_name ? $tab_name : 'NOT SET') . "\n";
}

// Debug Treatment Cards
$cards = get_posts(['post_type' => 'treatment-card', 'posts_per_page' => -1]);
echo "\n<strong>DEBUG: Treatment Cards Found</strong>\n";
foreach ($cards as $card) {
    $linked_tab_id = get_field('treatment_category', $card->ID);
    echo "Card ID: {$card->ID} | Title: {$card->post_title} | Linked to Tab ID: " . ($linked_tab_id ? $linked_tab_id : 'NOT SET') . "\n";
}
echo '</pre>';
?>
<!-- ================= END DEBUGGING ================= -->


<?php get_template_part("template-parts/page-treatments", "cards"); ?>




<?php endif; ?>

<?php get_footer(); ?>
