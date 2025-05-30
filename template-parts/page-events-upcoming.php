<?php
$args = array(
    "post_type" => "upcoming-event",
    "posts_per_page" => -1
);
$loop = new WP_Query($args);
?>

<?php if ($loop->have_posts()): ?>
<section class="flex flex-col items-center lg:min-h-[600px] sm:min-h-[400px] min-h-[300px] mx-auto bg-[#D9D9D9]/40 px-8 py-6 md:py-8">
  <!-- Heading -->
  <div class="w-full text-center py-2 my-8 md:my-10">
    <h2>Tidslerne event calendar</h2>
  </div>
  
  <!-- Cards div -->
  <div class="grid gap-8 w-full grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 mb-8 px-8 sm:px-10">
    <?php while ($loop->have_posts()): $loop->the_post(); ?>
      <?php
        $futureEventImage = get_field("future_event_image");
        $futureEventTitle = get_field("future_event_title");
        $eventTagOne = get_field("event_tag_1");
        $eventTagTwo = get_field("event_tag_2");
        $eventDate = get_field("event_date");
        $futureEventInfo = get_field("future_event_info");
        $eventPrice = get_field("event_price");
        $futureEventButton = get_field("future_event_button");
      ?>
      <!-- Card -->
      <div class="flex flex-col md:flex-col md:flex-wrap lg:flex-row lg:flex-nowrap justify-center h-auto overflow-hidden rounded-md bg-[#DB85F2]/20 w-full">
        <!-- Image -->
        <div class="flex items-center justify-center w-full h-[220px] sm:h-[230px] md:h-[250px] lg:h-[280px] lg:h-full p-4">
          <?php if (!empty($futureEventImage["url"])): ?>
            <img src="<?php echo esc_url($futureEventImage["url"]) ?>" alt="<?php echo esc_attr($futureEventImage["alt"]) ?>" class="h-full w-full object-cover" />
          <?php endif; ?>
        </div>
        <!-- Content -->
        <div class="flex flex-col flex-grow items-center justify-center w-full p-4 md:p-6">
          <div>
            <!-- Tags -->
            <div class="tags mb-2 flex flex-wrap gap-2 md:gap-4">
              <?php if (!empty($eventTagOne)): ?>
                <span class="rounded bg-[#580259] px-4 py-2 text-[#ededed] uppercase"><?php echo esc_html($eventTagOne) ?></span>
              <?php endif; ?>
              <?php if (!empty($eventTagTwo)): ?>
                <span class="rounded bg-[#580259] px-4 py-2 text-[#ededed] uppercase"><?php echo esc_html($eventTagTwo) ?></span>
              <?php endif; ?>
            </div>
            <!-- Text -->
            <p class="date mb-2"><?php echo esc_html($eventDate) ?></p>
            <h3 class="mb-2"><?php echo esc_html($futureEventTitle) ?></h3>
            <p class="mb-4 line-clamp-3 sm:line-clamp-4 lg:line-clamp-5"><?php echo esc_html($futureEventInfo) ?></p>
            <div class="inline-block rounded bg-[#DB85F2] px-4 py-2">
              <p class="font-medium uppercase"><?php echo esc_html($eventPrice) ?></p>
            </div>
          </div>
        </div> 
        <!-- Button -->
        <div class="flex flex-col items-center justify-center w-auto p-4">
          <a href="#" class="cta-btn bg-[#580259] text-[#ededed] rounded-3xl w-auto px-6 py-3 uppercase text-center text-nowrap">
            <?php echo esc_html($futureEventButton) ?>
          </a>
        </div>
      </div>
    <?php endwhile; ?>
  </div>

  <!-- CTA Button OUTSIDE LOOP -->
  <div class="flex justify-center w-full md:mt-8 md:mb-8">
    <a href="https://www.figma.com/proto/8EByKxI5wCzNOpGLRc40yb/Prototypes-for-Tidslerne?page-id=0%3A1&node-id=678-1349&viewport=-1953%2C-2016%2C0.1&t=JOSgSGHT907tSEsC-1&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=125%3A329"
      class="cta-btn bg-[#580259] text-[#ededed] rounded-3xl w-auto py-4 px-8 uppercase text-center text-nowrap" aria-label="See all upcoming events">
      See all upcoming events 
    </a>
  </div>
</section>
<?php wp_reset_postdata(); ?>
<?php endif; ?>