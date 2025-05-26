<?php
$args = array(
    "post_type" => "previous-event",
    "posts_per_page" => -1
);
$loop = new WP_Query($args);
?>

<?php if ($loop->have_posts()): ?>
<!-- Previous events section -->
<section class="flex flex-col items-center lg:min-h-[600px] sm:min-h-[400px] min-h-[300px] mx-auto bg-[#D9D9D9]/40 px-8 py-6 md:py-8">

  <div class="w-full text-center py-2 my-8 md:my-10">
    <h2>Highlights from previous events</h2>
  </div>

  <!-- Cards grid -->
  <div class="grid gap-8 w-full grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 mb-8 px-8 sm:px-10">
    <?php while ($loop->have_posts()): $loop->the_post(); ?>
      <?php
        $pastEventImage = get_field("past_event_image");
        $pastEventTitle = get_field("past_event_title");
        $pastEventInfo = get_field("past_event_info");
        $pastEventButton = get_field("past_event_button");
      ?>
      <!-- Card -->
      <div class="flex flex-col md:flex-col md:flex-wrap lg:flex-row lg:flex-nowrap justify-center h-auto overflow-hidden rounded-md bg-[#2EA836]/20 w-full">
        <!-- Image -->
        <div class="flex items-center justify-center w-full h-[220px] sm:h-[230px] md:h-[250px] lg:h-[280px] lg:h-full p-4">
          <?php if (!empty($pastEventImage["url"])): ?>
            <img src="<?php echo esc_url($pastEventImage["url"]) ?>" alt="fill" class="h-full w-full object-cover" />
          <?php endif; ?>
        </div>
        <!-- Content -->
        <div class="flex flex-col flex-grow items-center justify-center w-full p-4 md:p-6">
          <div>
            <!-- Text -->
            <h3 class="mb-2"><?php echo esc_html($pastEventTitle) ?></h3>
            <p class="mb-4 line-clamp-3 sm:line-clamp-4 lg:line-clamp-5"><?php echo esc_html($pastEventInfo) ?></p>
          </div>
        </div> 
        <!-- Button -->
        <div class="flex flex-col items-center justify-center w-auto p-4">
          <a href="#" class="cta-btn bg-[#580259] text-[#ededed] rounded-3xl w-auto px-6 py-3 uppercase text-center text-nowrap">
            <?php echo esc_html($pastEventButton) ?>
          </a>
        </div>
      </div>
    <?php endwhile; ?>
  </div>


  <div class="flex justify-center w-full md:mt-8 md:mb-8">
    <a href="#"
      class="cta-btn bg-[#580259] text-[#ededed] rounded-3xl w-auto py-4 px-8 uppercase text-center text-nowrap">
      SEE ALL PREVIOUS EVENTS 
    </a>
  </div>
</section>
<?php wp_reset_postdata(); ?>
<?php endif; ?>