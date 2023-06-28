<?php
// Query all custom post types
$args = array(
    'post_type' => 'destinations',
    'posts_per_page' => -1,
);

$destinations_query = new WP_Query($args);

if ($destinations_query->have_posts()) :
?>
    <div class="destination-section container">
        <div class="where-to-go">
            <p class="destination-main-p">Where to go</p>
            <h1 class="destination-main-title">Popular destinations</h1>
        </div>
            <div class="swiper">
            <div class="swiper-wrapper">
                <?php while ($destinations_query->have_posts()) : $destinations_query->the_post(); ?>
                    <?php
                    // Retrieve the ACF field values
                    $destination_background_photo = get_field('destination_background_image');
                    $destination_header = get_field('destination_header');
                    $destination_location = get_field('destination_location');
                    $destination_people_traveled = get_field('destination_people_traveled');
                    $destination_flag_icon = get_field('destination_flag_icon');
                    ?>

                    <div class="swiper-slide">
                        <!-- Output the content for each slide -->
                        <?php if ($destination_background_photo) : ?>
                            <div class="slide-image gallery-image">
                                <img class="destination-background" src="<?php echo $destination_background_photo['url']; ?>" alt="<?php echo $destination_background_photo['alt']; ?>">
                            </div>
                        <?php endif; ?>
                        <div class="slide-content">
                            <h2><?php echo $destination_header; ?></h2>
                            <div class="flag-text">
                                <?php if ($destination_flag_icon) : ?>
                                    <div class="slide-flag">
                                    <img class="flag" src="<?php echo $destination_flag_icon['url']; ?>" alt="<?php echo $destination_flag_icon['alt']; ?>">
                                    </div>
                                <?php endif; ?>
                                <p ><?php echo $destination_location; ?></p>
                            </div>             
                            <p class="people-traveled-p"><?php echo $destination_people_traveled; ?> People Traveled</p>         
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
        </div>
    </div>
    <?php
    // Reset the query
    wp_reset_postdata();
endif;
?>

<script>
var swiper = new Swiper('.swiper', {
  slidesPerView: 3, // Number of slides to show at a time
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});


</script>