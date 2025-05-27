<?php
$args = array(
    "post_type" => "picture-gallery",
    "posts_per_page" => -1
);
$loop = new WP_Query($args);
?>

<?php if ($loop->have_posts()): ?>
<section class="bg-[#D9D9D9]/40 px-4 md:px-10 py-8 md:py-12">
    <div class="mx-auto max-w-[80vw]">
        <!-- Title OUTSIDE LOOP -->
        <h2 class="text-center text-3xl md:text-3xl font-medium text-[#121212] mb-8">Gallery</h2>
        
        <!-- Grid container -->
        <div class="grid gap-6 w-full grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            <?php while ($loop->have_posts()): $loop->the_post(); ?>
                <?php $galleryPicture = get_field("gallery_picture"); ?>
                <?php if (!empty($galleryPicture["url"])): ?>
                <div class="w-full aspect-[4/3] overflow-hidden">
                    <img
                        src="<?php echo esc_url($galleryPicture["url"]) ?>" alt="<?php echo esc_attr($galleryPicture["alt"]) ?>" class="w-full h-full object-cover"/>
                </div>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php wp_reset_postdata(); ?>
<?php endif; ?>