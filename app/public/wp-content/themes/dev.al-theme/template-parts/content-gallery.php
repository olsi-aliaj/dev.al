<?php
/**
 * Template part for displaying the gallery section.
 *
 * @package dev.al-theme
 */

?>

<?php
// Retrieve the ACF field values

$gallery_paragraph = get_field('gallery_paragraph');
$gallery_heading = get_field('gallery_heading');
// First small photo
$first_row_small_photo = get_field('first_row_small_photo');
$first_row_small_photo_city = get_field('first_row_small_photo_city');
$first_row_small_photo_people_visited = get_field('first_row_small_photo_people_visited');
// First larg photo
$first_row_large_photo = get_field('first_row_large_photo');
$first_row_large_photo_city = get_field('first_row_large_photo_city');
$first_row_large_photo_people_visited= get_field('first_row_large_photo_people_visited');
// Second row
//1st image
$second_row_1st_image = get_field('second_row_1st_image');
$second_row_1st_image_city = get_field('second_row_1st_image_city');
$second_row_1st_image_people_visited = get_field('second_row_1st_image_people_visited');
// 2nd image
$second_row_2nd_image = get_field('second_row_2nd_image');
$second_row_2nd_image_city = get_field('second_row_2nd_image_city');
$second_row_2nd_image_people_visited = get_field('second_row_2nd_image_people_visited');
// 3rd image
$second_row_3rd_image = get_field('second_row_3rd_image');
$second_row_3rd_image_city = get_field('second_row_3rd_image_city');
$second_row_3rd_image_people_visited = get_field('second_row_3rd_image_people_visited');

$gallery_button = get_field('gallery_button');

ob_start();
?>

<!-- Output the ACF field values -->
<div class="gallery-section">
  <div class="four-column container">
    <div class="gallery-heading">
      <?php if ($gallery_paragraph) : ?>
        <p class="gallery-paragraph"><?php echo esc_html($gallery_paragraph); ?></p>
      <?php endif; ?>
      <?php if ($gallery_heading) : ?>
        <h1 class="gallery-title"><?php echo esc_html($gallery_heading); ?></h1>
      <?php endif; ?>
    </div>
    <div class="gallery-first-row">
      <?php if ($first_row_small_photo) : ?> 
        <div class="gallery-small-photo gallery-image">
        <img class="gallery-photo st-small " src="<?php echo $first_row_small_photo['url']; ?>" alt="<?php echo $first_row_small_photo['alt']; ?>">
        <h2 class="gallery-photo-heading"><?php echo esc_html($first_row_small_photo_city); ?></h2>
        <p  class="gallery-photo-paragraph"><?php echo esc_html($first_row_small_photo_people_visited); ?></p>
        </div>
      <?php endif; ?>
      <?php if ($first_row_small_photo) : ?>
        <div class="gallery-small-photo gallery-image">
        <img class="gallery-photo nd-big" src="<?php echo $first_row_large_photo['url']; ?>" alt="<?php echo $first_row_small_photo['alt']; ?>">
        <h2 class="gallery-photo-heading"><?php echo esc_html($first_row_large_photo_city); ?></h2>
        <p  class="gallery-photo-paragraph"><?php echo esc_html($first_row_large_photo_people_visited); ?></p>
        </div>
      <?php endif; ?>
    </div>
    <div class="gallery-second-row">
      <?php if ($second_row_1st_image) : ?>
        <div class="gallery-image">
        <img class="gallery-photo" src="<?php echo $second_row_1st_image['url']; ?>" alt="<?php echo $second_row_1st_image['alt']; ?>">
        <h2 class="gallery-photo-heading"><?php echo esc_html($second_row_1st_image_city); ?></h2>
        <p  class="gallery-photo-paragraph"><?php echo esc_html($second_row_1st_image_people_visited); ?></p>
        </div>
      <?php endif; ?>
      <?php if ($second_row_2nd_image) : ?>
        <div class="gallery-image">
        <img class="gallery-photo" src="<?php echo $second_row_2nd_image['url']; ?>" alt="<?php echo $second_row_2nd_image['alt']; ?>">
        <h2 class="gallery-photo-heading"><?php echo esc_html($second_row_2nd_image_city); ?></h2>
        <p  class="gallery-photo-paragraph"><?php echo esc_html($second_row_2nd_image_people_visited); ?></p>
        </div>
      <?php endif; ?>
      <?php if ($second_row_3rd_image) : ?>
        <div class="gallery-image">
        <img class="gallery-photo" src="<?php echo $second_row_3rd_image['url']; ?>" alt="<?php echo $second_row_3rd_image['alt']; ?>">
        <h2 class="gallery-photo-heading"><?php echo esc_html($second_row_3rd_image_city); ?></h2>
        <p  class="gallery-photo-paragraph"><?php echo esc_html($second_row_3rd_image_people_visited); ?></p>
        </div>
      <?php endif; ?>
    </div>
    <div class="gallery-last-row">
      <?php if ($gallery_button) : ?>
        <a  href="#" class="hero-button gallery-button"><?php echo esc_html($gallery_button); ?></a>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php
echo ob_get_clean();
