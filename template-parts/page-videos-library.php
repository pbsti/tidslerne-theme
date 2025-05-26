<?php
$args = array(
    "post_type" => "video",
    "posts_per_page" => -1
);
$loop = new WP_Query($args);
?>

<?php if ($loop->have_posts()): ?>
    <!-- Video cards section - moved outside the loop -->
    <section class="bg-[#D9D9D9]/40 px-4 md:px-10 py-8 md:py-12">
        <div class="mx-auto max-w-[80vw]">
            <!-- Grid container - moved outside the loop -->
            <div class="grid gap-6 w-full grid-cols-1 sm:grid-cols-2">
                <?php while ($loop->have_posts()): $loop->the_post(); ?>
                    <?php
                        $videoLink = get_field("video_link");
                        $videoTitle = get_field("video_title");
                    ?>
                    <!-- Individual video card -->
                    <div class="bg-[#2B682C]/20 p-4 flex flex-col items-center w-full">
                        <div class="relative w-full aspect-video rounded-md overflow-hidden mb-4">
                            <iframe
                                src="<?php echo esc_url($videoLink["url"]); ?>"
                                title="YouTube video player"
                                allowfullscreen
                                class="absolute top-0 left-0 w-full h-full"
                            ></iframe>
                        </div>
                        <h3 class="text-center text-[#2B682C] p-8"><?php echo esc_html($videoTitle) ?></h3>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php wp_reset_postdata(); ?>
<?php endif ?>