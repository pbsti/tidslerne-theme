<?php 
  $arguements = array(
    'post_type' => 'treatment-frontpage',
    'posts_per_page' => -1
  );
  $loop = new WP_Query($arguements);
?> 

<?php if ($loop->have_posts()): ?>
  <!-- Output some HTML with the data -->
  <section class="flex flex-col items-center lg:min-h-[600px] sm:min-h-[400px] min-h-[300px] mx-auto px-4 py-6 md:py-8">
    <!-- Heading -->
    <div class="w-full text-center py-2 my-8 md:my-12">
      <h2>Cancer Treatments</h2>
    </div>
    <!-- Cards div -->
    <div class="grid gap-10 w-full grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mb-8 sm:px-10">
      <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <?php
          $TFimage = get_field("tf_image");
          $TFtagone = get_field("tf_tag_one");
          $TFtagtwo = get_field("tf_tag_two");
          $TFtagthree = get_field("tf_tag_three");
          $TFtitle = get_field("tf_title");
          $TFdescription = get_field("tf_description");
          $TFbutton = get_field("tf_button");
        ?>
        <!-- Card -->
        <div class="flex flex-col md:flex-col md:flex-wrap justify-center h-auto overflow-hidden rounded-md bg-[#DB85F2]/20 w-full">
          <!-- Image -->
          <div class="flex items-center justify-center w-full h-[220px] sm:h-[230px] md:h-[250px] lg:h-[280px] p-4">
            <img src="<?php echo esc_url($TFimage["url"]) ?>" alt="<?php echo esc_attr($TFimage["alt"]) ?>" class="h-full w-full object-cover" />
          </div>
          <!-- Content -->
          <div class="flex flex-col flex-grow items-center w-full p-4 md:p-6">
            <div>
              <!-- Tags -->
              <div class="tags mb-2 flex flex-wrap gap-2 md:gap-4">
                <?php if (!empty($TFtagone)): ?>
                  <span class="rounded bg-[#580259] px-4 py-2 text-[#ededed] uppercase"><?php echo esc_html($TFtagone) ?></span>
                <?php endif; ?>
                <?php if (!empty($TFtagtwo)): ?>
                  <span class="rounded bg-[#580259] px-4 py-2 text-[#ededed] uppercase"><?php echo esc_html($TFtagtwo) ?></span>
                <?php endif; ?>
                <?php if (!empty($TFtagthree)): ?>
                  <span class="rounded bg-[#580259] px-4 py-2 text-[#ededed] uppercase"><?php echo esc_html($TFtagthree) ?></span>
                <?php endif; ?>
              </div>
              <!-- Text -->
              <h3 class="mb-2"><?php echo esc_html($TFtitle) ?></h3>
              <p class="mb-4 line-clamp-3 sm:line-clamp-4 lg:line-clamp-5"><?php echo esc_html($TFdescription) ?></p>
            </div>
          </div> 
          <!-- Button -->
          <div class="flex flex-col items-center justify-center w-auto p-4">
            <a href="https://www.figma.com/proto/8EByKxI5wCzNOpGLRc40yb/Prototypes-for-Tidslerne?page-id=0%3A1&node-id=786-1205&viewport=-5825%2C-7503%2C0.24&t=15USawACebTR77B0-1&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=125%3A329" class="cta-btn bg-[#580259] text-[#ededed] rounded-3xl w-auto px-6 py-3 uppercase text-center text-nowrap">
              <?php echo esc_html($TFbutton) ?>
            </a>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
    <!-- CTA Button -->
    <div class="flex justify-center w-full md:mt-8">
      <a href="<?php echo get_permalink(get_page_by_path('treatments')->ID); ?>" 
        class="cta-btn bg-[#580259] text-[#ededed] rounded-3xl w-auto py-4 px-8 uppercase text-center text-nowrap" aria-label="Read more treatment options">
        READ MORE TREATMENT OPIONS
      </a>
    </div>
  </section> 
  <?php wp_reset_postdata() ?>
<?php endif ?>