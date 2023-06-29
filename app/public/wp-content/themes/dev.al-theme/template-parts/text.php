<!-- $event_date = get_field('$event_date');
$event_title = get_field('$event_title');
$event_description = get_field('$event_description');

<div class="calendar-section">
  <div class="calendar-events container">
    <h1 class="calendar-date">$event_date</h1>
    <h1 class="calendar-event-titile">$event_title</h1>
    <p class="calendar-event-paragraph">$event_title</p>
  </div>
</div> -->


<?php
// Query the posts with the necessary ACF fields
$args = array(
    'post_type' => 'calendar_event', // Replace 'events' with your custom post type
    'posts_per_page' => -1,
);
$events_query = new WP_Query($args);
?>

<div class="calendar-section">
    <div class="container swiper-container">
        <div class="swiper-wrapper calendar-events">
            <?php while ($events_query->have_posts()) : $events_query->the_post(); ?>
                <?php
                // Retrieve the ACF field values
                $event_date = get_field('event_date');
                $event_title = get_field('event_title');
                $event_description = get_field('event_description');
                ?>

                <div class="swiper-slide">
                    <h1 class="calendar-date"><?php echo $event_date; ?></h1>
                    <h1 class="calendar-event-title"><?php echo $event_title; ?></h1>
                    <p class="calendar-event-paragraph"><?php echo $event_description; ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>


<?php wp_reset_postdata(); ?>


<script>
jQuery(document).ready(function ($) {
    var swiper = new Swiper('.swiper-container', {
        loop: true,
        // Add any additional Swiper options as needed
    });
});
</script>
