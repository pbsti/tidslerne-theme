<?php
$args = array(
    "post_type" => "testimonial",
    "posts_per_page" => -1
);
$loop = new WP_Query($args);
?>

<?php if($loop->have_posts()): ?>
<section class="px-4 py-8 md:px-10 py-8 md:py-10">
  <div class="flex flex-col items-center mx-auto max-w-[80vw]">

    <div class="text-center mb-6 md:mb-8 p-10">
      <h2>Testimonials</h2>
    </div>

    <!-- grid container -->
    <div class="grid gap-[4rem] w-full grid-cols-1 md:grid-cols-3 py-10">
      <?php while($loop->have_posts()): $loop->the_post(); ?>
        <?php
            $profilePicture = get_field("profile_picture");
            $testimonialText = get_field("testimonial_text");
            $username = get_field("username");
        ?>
        <div class="bg-[#2EA836]/20 relative flex flex-col items-center pt-16 px-4 pb-8 rounded-lg h-full min-h-[260px]">
          <div class="absolute -top-12">
            <?php if (!empty($profilePicture["url"])): ?>
              <img src="<?php echo esc_url($profilePicture["url"]); ?>" alt="<?php echo esc_attr($profilePicture["alt"]) ?>" class="w-24 h-24 rounded-full object-cover">
            <?php endif; ?>
          </div>
          <p class="text-center mt-5"><?php echo esc_html($testimonialText) ?></p>
          <h3 class="mt-6 text-[#2B682C]"><?php echo esc_html($username) ?></h3>
        </div>
      <?php endwhile; ?>
    </div>

  </div>
</section>
<?php wp_reset_postdata(); ?>
<?php endif; ?>