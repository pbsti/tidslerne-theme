<?php 
// Get all treatment tabs
$tabs = get_posts(array(
    'post_type' => 'treatment-selector',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC'
));
?> 

<section class="content-section">
  <div class="bg-[#D9D9D9]/40 w-full">
    <div class="panels container mx-auto">
      <?php 
      $panel_counter = 1;
      foreach($tabs as $tab): 
        $args = array(
          'post_type' => 'treatment-card', 
          'posts_per_page' => -1,
          'meta_query' => array(
            array(
              'key' => 'treatment_category',
              'value' => serialize(strval($tab->ID)),
              'compare' => 'LIKE'
            )
          )
        );
        $loop = new WP_Query($args);
      ?>
      
      <div class="panel <?php echo $panel_counter === 1 ? '' : 'hidden'; ?>" key="<?php echo $panel_counter; ?>">
        <div class="flex flex-col items-center lg:min-h-[600px] sm:min-h-[400px] min-h-[300px] mx-auto px-4 py-6 md:py-8">
          <div class="grid gap-10 w-full grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 mb-8 sm:px-10">
            <?php if ($loop->have_posts()): while ($loop->have_posts()) : $loop->the_post(); ?>
              <?php
                $TCimage = get_field("tc_image");
                $TCtagone = get_field("tc_tag_one");
                $TCtagtwo = get_field("tc_tag_two");
                $TCtagthree = get_field("tc_tag_three");
                $TCtitle = get_field("tc_title");
                $TCdate = get_field("tc_date");
                $TCauthor = get_field("tc_author");
                $TCdescription = get_field("tc_description");
                $TCbutton = get_field("tc_button");
              ?>
              
              <div class="flex flex-col md:flex-col md:flex-wrap lg:flex-row lg:flex-nowrap justify-center h-auto overflow-hidden rounded-md bg-[#DB85F2]/20 w-full">
                <!-- Image -->
                <div class="flex items-center justify-center w-full h-[220px] sm:h-[230px] md:h-[250px] lg:h-[280px] lg:h-full p-4">
                  <?php if (!empty($TCimage["url"])): ?>
                    <img src="<?php echo esc_url($TCimage["url"]) ?>" alt="<?php echo esc_attr($TCimage["alt"]) ?>" class="h-full w-full object-cover" />
                  <?php endif; ?>
                </div>
                
                <!-- Content -->
                <div class="flex flex-col flex-grow items-center justify-center w-full p-4 md:p-6">
                  <div>
                    <!-- Tags -->
                    <div class="tags mb-2 flex flex-wrap gap-2 md:gap-4">
                      <?php if (!empty($TCtagone)): ?>
                        <span class="rounded bg-[#580259] px-4 py-2 text-[#ededed] uppercase"><?php echo esc_html($TCtagone) ?></span>
                      <?php endif; ?>
                      <?php if (!empty($TCtagtwo)): ?>
                        <span class="rounded bg-[#580259] px-4 py-2 text-[#ededed] uppercase"><?php echo esc_html($TCtagtwo) ?></span>  
                      <?php endif; ?>
                      <?php if (!empty($TCtagthree)): ?>
                        <span class="rounded bg-[#580259] px-4 py-2 text-[#ededed] uppercase"><?php echo esc_html($TCtagthree) ?></span>
                      <?php endif; ?>
                    </div>
                    <!-- Text -->
                    <p class="author mb-2"><?php echo esc_html($TCauthor) ?></p>
                    <p class="mb-2"><?php echo esc_html($TCdate) ?></p>
                    <h3 class="mb-2"><?php echo esc_html($TCtitle) ?></h3>
                    <p class="mb-4 line-clamp-3 sm:line-clamp-4 lg:line-clamp-5"><?php echo esc_html($TCdescription) ?></p>
                  </div>
                </div> 
                
                <!-- Button -->
                <div class="flex flex-col items-center justify-center w-auto p-4">
                  <a href="#" class="cta-btn bg-[#580259] text-[#ededed] rounded-3xl w-auto px-6 py-3 uppercase text-center text-nowrap">
                    <?php echo esc_html($TCbutton) ?>
                  </a>
                </div>
              </div>
              
            <?php endwhile; endif; ?>
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