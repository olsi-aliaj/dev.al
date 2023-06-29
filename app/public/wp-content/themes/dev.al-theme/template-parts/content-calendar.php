<?php
// Query all custom post types
$args = array(
  'post_type' => 'calendar_event', // Replace 'events' with your custom post type
  'posts_per_page' => -1,
);
$events_query = new WP_Query($args);


if ($events_query->have_posts()) :
?>
    <div class="event-section container">

            <div class="swiper">
            <div class="swiper-wrapper">
            <?php while ($events_query->have_posts()) : $events_query->the_post(); ?>
                <?php
                // Retrieve the ACF field values
                $event_date = get_field('event_date');
                $event_title = get_field('event_title');
                $event_description = get_field('event_description');
                ?>

                <div class="swiper-slide each-event">
                    <h1 class="calendar-date"><?php echo $event_date; ?></h1>
                    <h1 class="calendar-event-title"><?php echo $event_title; ?></h1>
                    <p class="calendar-event-paragraph"><?php echo $event_description; ?></p>
                </div>
            <?php endwhile; ?>
            </div>
            <!-- If we need navigation buttons -->
                <div class="swiper-button-prev calendar-prev"></div>
                <div class="swiper-button-next calendar-next"></div>
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