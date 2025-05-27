<?php 
 $tabs = get_posts(array(
    'post_type' => 'treatment-selector',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC'
));

?> 

<section class="content-section">
  <!-- Content panels for each category -->
  <div class="bg-[#D9D9D9]/40 w-full">
    <div class="panels container mx-auto">
      <?php 
      $panel_counter = 1;
      foreach($tabs as $tab): 
        $tab_slug = sanitize_title($tab->post_title);
        $args = array(
          'post_type' => 'treatment-frontpage',
          'posts_per_page' => 4,
          'meta_query' => array(
            array(
              'key' => 'treatment_category', // ACF relationship field
              'value' => $tab->ID,
              'compare' => '='
            )
          )
        );
        $loop = new WP_Query($args);
      ?>
      
      <!-- COMPLEMENTARY -->
      <div class="panel <?php echo $panel_counter === 1 ? '' : 'hidden'; ?>" key="<?php echo $panel_counter; ?>"> 
        <div class="flex flex-col items-center lg:min-h-[600px] sm:min-h-[400px] min-h-[300px] mx-auto px-4 py-6 md:py-8">
          <!-- Cards grid -->
          <div class="grid gap-10 w-full grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 mb-8 sm:px-10">
            <?php if ($loop->have_posts()): while ($loop->have_posts()) : $loop->the_post(); ?>
              <?php
                $TFimage = get_field("tf_image");
                $TFtagone = get_field("tf_tag_one");
                $TFtagtwo = get_field("tf_tag_two");
                $TFtagthree = get_field("tf_tag_three");
                $TFtitle = get_field("tf_title");
                $TFdate = get_field("tf_date");
                $TFauthor = get_field("tf_author");
                $TFdescription = get_field("tf_description");
                $TFbutton = get_field("tf_button");
              ?>
              <!-- Card -->
              <div class="flex flex-col md:flex-col md:flex-wrap lg:flex-row lg:flex-nowrap justify-center h-auto overflow-hidden rounded-md bg-[#DB85F2]/20 w-full">
                <!-- Image -->
                <div class="flex items-center justify-center w-full h-[220px] sm:h-[230px] md:h-[250px] lg:h-[280px] lg:h-full p-4">
                  <?php if (!empty($TFimage["url"])): ?>
                    <img src="<?php echo esc_url($TFimage["url"]) ?>" alt="fill" class="h-full w-full object-cover" />
                  <?php endif; ?>
                </div>
                <!-- Content -->
                <div class="flex flex-col flex-grow items-center justify-center w-full p-4 md:p-6">
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
                    <p class="author mb-2"><?php echo esc_html($TFauthor) ?></p>
                    <p class="mb-2"><?php echo esc_html($TFdate) ?></p>
                    <h3 class="mb-2"><?php echo esc_html($TFtitle) ?></h3>
                    <p class="mb-4 line-clamp-3 sm:line-clamp-4 lg:line-clamp-5"><?php echo esc_html($TFdescription) ?></p>
                  </div>
                </div> 
                <!-- Button -->
                <div class="flex flex-col items-center justify-center w-auto p-4">
                  <a href="#" class="cta-btn bg-[#580259] text-[#ededed] rounded-3xl w-auto px-6 py-3 uppercase text-center text-nowrap">
                    <?php echo esc_html($TFbutton) ?>
                  </a>
                </div>
              </div>
            <?php endwhile;endif; ?>
          </div>
          <!-- CTA Button -->
          <div class="flex justify-center w-full md:mt-10 mb-12">
            <a href="#"
              class="cta-btn bg-[#580259] text-[#ededed] rounded-3xl w-auto py-4 px-8 uppercase text-center text-nowrap">
              ALL <?php echo strtoupper($tab->post_title); ?> TREATMENTS 
            </a>
          </div>
        </div>
      </div>
      <?php 
        $panel_counter++;
        wp_reset_postdata();
      endforeach; 
      ?>
    </div>
  </div>
</section>
