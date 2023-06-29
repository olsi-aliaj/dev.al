<?php
/**
 * Template part for displaying the hero section.
 *
 * @package dev.al-theme
 */

?>

<?php
// Retrieve the ACF field values

$header = get_field( 'hero_header' );
$paragraph = get_field( 'hero_paragraph' );
$button_text = get_field( 'hero_button' );
$background_image = get_field( 'hero_background' );

ob_start();
?>

<!-- Output the ACF field values -->
<section class="hero-section" style="background-image: url('<?php echo esc_url( $background_image['url'] ); ?>');">
    <div class="hero-content container">
      <?php if ( $header ) : ?>
        <h1 class="hero-header"><?php echo esc_html( $header ); ?></h1>
      <?php endif; ?>
      <?php if ( $paragraph ) : ?>
        <p class="hero-paragraph"><?php echo esc_html( $paragraph ); ?></p>
      <?php endif; ?>
      <?php if ( $button_text ) : ?>
        <a href="#" class="hero-button"><?php echo esc_html( $button_text ); ?></a>
      <?php endif; ?>
    </div>
     

  <?php  get_template_part( 'template-parts/content', 'calendar' );?>
  </section>

  <?php
  echo ob_get_clean();