<?php
/**
 * Template part for displaying the Booking section.
 *
 * @package dev.al-theme
 */

// Retrieve the ACF field values

$booking_left_h1 = get_field('booking_left_h1');
$booking_left_paragraph = get_field('booking_left_paragraph');
$booking_image = get_field('booking_image');

$booking_car_titile = get_field('booking_car_titile');
$booking_car_paragraph= get_field('booking_car_paragraph');
$booking_car_link = get_field('booking_car_link');

$booking_hotel_titile = get_field('booking_hotel_titile');
$booking_hotel_paragraph = get_field('booking_hotel_paragraph');
$booking_hotel_link = get_field('booking_hotel_link');

ob_start();
?>

<!-- Output the ACF field values -->
<div class="booking-section">
  <div class="three-columns container">
    <div class="first-column">
      <?php if ( $booking_left_h1 ) : ?>
        <h1 class="booking-header"><?php echo esc_html( $booking_left_h1 ); ?></h1>
      <?php endif; ?>
      <?php if ( $booking_left_paragraph ) : ?>
        <p class="booking-paragraph"><?php echo esc_html( $booking_left_paragraph ); ?></p>
      <?php endif; ?>
    </div>
    <div class="second-column">
      <?php if ( $booking_image ) : ?>
        <img class="booking-image" src="<?php echo esc_url( $booking_image['url'] ); ?>" alt="<?php echo esc_attr( $booking_image['alt'] ); ?>" />
      <?php endif; ?>
    </div>
    <div class="third-column">
      <div class="car-booking">
        <?php if ( $booking_car_titile ) : ?>
          <h1 class="booking-car-title"><?php echo esc_html( $booking_car_titile ); ?></h1>
        <?php endif; ?>
        <?php if ( $booking_car_paragraph ) : ?>
          <p class="booking-car-paragraph"><?php echo esc_html( $booking_car_paragraph ); ?></p>
        <?php endif; ?>
        <?php if ( $booking_car_link ) : ?>
          <a href="<?php echo esc_url( $booking_car_link ); ?>" class="booking-hotel-link">Book Now</a>
        <?php endif; ?>
      </div>
      <div class="hotel-booking">
        <?php if ( $booking_hotel_titile ) : ?>
          <h1 class="booking-hotel-title"><?php echo esc_html( $booking_hotel_titile ); ?></h1>
        <?php endif; ?>
        <?php if ( $booking_hotel_paragraph ) : ?>
          <p class="booking-hotel-paragraph"><?php echo esc_html( $booking_hotel_paragraph ); ?></p>
        <?php endif; ?>
        <?php if ( $booking_hotel_link ) : ?>
          <a href="<?php echo esc_url( $booking_hotel_link ); ?>" class="booking-hotel-link">Book Now</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<?php
echo ob_get_clean();
