<?php
// Query all custom post types
$args = array(
    'post_type' => 'testimonials',
    'posts_per_page' => 1,
    'order' => 'DESC',
);

$testimonials_query = new WP_Query($args);

if ($testimonials_query->have_posts()) :
    while ($testimonials_query->have_posts()) : $testimonials_query->the_post();
        // Retrieve the ACF field values
        $star_rating = get_field('star_rating');
        $testimonial_text = get_field('testimonial_text');
        $testimonials_image = get_field('testimonials_image');
?>
        <div class="testimonial-section">
            <div class="testimonial container">
                <div class="left-column-testimonial">
                    <h1 class="testimonial-header">What our happy client</h1>
                    <p class="testimonial-paragraph"><?php echo esc_html( $testimonial_text ); ?></p>
                    <div class="testimonial-rating">       
                        <div class="number-rating">
                            <?php
                            // Loop through 5 stars and fill them based on the rating
                            for ($i = 1; $i <= 5; $i++) {
                                if ($i <= $star_rating) {
                                    echo '<span class="filled-star"></span>';
                                } else {
                                    echo '<span class="empty-star"></span>';
                                }
                            }
                            ?>
                        </div>
                        <p class="star-rating"><?php echo $star_rating; ?>/5</p>
                    </div>
                    <div class="testimonial-images">
                        <p class="testimonial-circle-images"></p>
                        <p class="circle-image-names"></p>
                    </div>
                </div>
                <div class="right-testimonials-column">
                <img class="destination-background" src="<?php echo $testimonials_image['url']; ?>" alt="<?php echo $testimonials_image['alt']; ?>">
                </div>
            </div>
        </div>
<?php
    endwhile;
    // Reset the query
    wp_reset_postdata();
endif;
?>
