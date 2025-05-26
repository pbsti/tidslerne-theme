<?php
$args = array(
    "post_type" => "story-card",
    "posts_per_page" => -1
);
$loop = new WP_Query($args);
?>

<?php if($loop->have_posts()): ?>
<!-- Patient Stories -->
<section class="flex flex-col items-center lg:min-h-[600px] sm:min-h-[400px] min-h-[300px] bg-[#D9D9D9]/40 mx-auto px-4 py-6 md:py-8">
  <!-- Heading -->
  <div class="w-full text-center py-2 my-8 md:my-12">
    <h2>Inspiring Cancer Journeys and Experiences</h2>
  </div>
  <!-- Cards div -->
  <div class="grid gap-10 w-full grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 mb-8 sm:px-10">
    <?php while($loop->have_posts()): $loop->the_post(); ?>
      <?php
        $patientStoryImage = get_field("patient_story_image");
        $patientStoryDate = get_field("patient_story_date");
        $patientStoryAuthor = get_field("patient_story_author");
        $patientHeadline = get_field("patient_headline");
        $patientTagOne = get_field("patient_tag_1");
        $patientTagTwo = get_field("patient_tag_2");
        $patientTagThree = get_field("patient_tag_3");
        $patientText = get_field("patient_text");
        $patientButtonText = get_field("patient_button_text");
      ?>
      <!-- Card -->
      <div class="flex flex-col md:flex-col md:flex-wrap lg:flex-row lg:flex-nowrap justify-center h-auto overflow-hidden rounded-md bg-[#DB85F2]/20 w-full">
        <!-- Image -->
        <div class="flex items-center justify-center w-full h-[220px] sm:h-[230px] md:h-[250px] lg:h-[280px] lg:h-full p-4">
          <img src="<?php echo esc_url($patientStoryImage["url"]) ?>" alt="fill" class="h-full w-full object-cover" />
        </div>
        <!-- Content -->
        <div class="flex flex-col flex-grow items-center justify-center w-full p-4 md:p-6">
          <div>
            <!-- Tags -->
            <div class="tags mb-2 flex flex-wrap gap-2 md:gap-4">
              <span class="rounded bg-[#580259] px-4 py-2 text-[#ededed] uppercase"><?php echo esc_html($patientTagOne) ?></span>
              <span class="rounded bg-[#580259] px-4 py-2 text-[#ededed] uppercase"><?php echo esc_html($patientTagTwo) ?></span>
              <span class="rounded bg-[#580259] px-4 py-2 text-[#ededed] uppercase"><?php echo esc_html($patientTagThree) ?></span>  
            </div>
            <!-- Text -->
            <p class="author mb-2"><?php echo esc_html($patientStoryAuthor) ?></p>
            <p class="mb-2"><?php echo esc_html($patientStoryDate) ?></p>
            <h3 class="mb-2"><?php echo esc_html($patientHeadline) ?></h3>
            <p class="mb-4 line-clamp-3 sm:line-clamp-4 lg:line-clamp-5"><?php echo esc_html($patientText) ?></p>
          </div>
        </div> 
        <!-- Button -->
        <div class="flex flex-col items-center justify-center w-auto p-4">
          <a href="#" class="cta-btn bg-[#580259] text-[#ededed] rounded-3xl w-auto px-6 py-3 uppercase text-center text-nowrap">
            <?php echo esc_html($patientButtonText) ?>
          </a>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
  <!-- CTA Button (outside the loop) -->
  <div class="flex justify-center mt-10 w-full md:mt-8">
    <a href="#"
      class="cta-btn bg-[#580259] text-[#ededed] rounded-3xl w-auto py-4 px-8 uppercase text-center text-nowrap">
      ALL PATIENTS’ STORIES 
    </a>
  </div>
</section>
<?php wp_reset_postdata(); ?>
<?php endif; ?>