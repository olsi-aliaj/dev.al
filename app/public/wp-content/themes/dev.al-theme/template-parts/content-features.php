<?php
/**
 * Template part for displaying the features section.
 *
 * @package dev.al-theme
 */

?>

<?php
// Retrieve the ACF field values

$featureIcon = get_field('features_icon');
$FeatureHeading = get_field('features_heading');
$FeatureParagraph = get_field('features_paragraph');

$featureIcon1 = get_field('features_icon_1');
$FeatureHeading1 = get_field('features_heading_1');
$FeatureParagraph1 = get_field('features_paragraph_1');

$featureIcon2 = get_field('features_icon_2');
$FeatureHeading2 = get_field('features_heading_2');
$FeatureParagraph2 = get_field('features_paragraph_2');

ob_start();
?>

<!-- Output the ACF field values -->

<div class="features-block">
  <div class="main-features container">
  <div class="first-block">
  <div class="features-icon">
    <?php if ($featureIcon) : ?>
      <img class="icon-image" src="<?php echo esc_url($featureIcon['url']); ?>" alt="<?php echo esc_attr($FeatureHeading); ?>">
    <?php endif; ?>
  </div>
  <div class="features-content">
    <?php if ($FeatureHeading) : ?>
      <h3 class="features-heading"><?php echo esc_html($FeatureHeading); ?></h3>
    <?php endif; ?>
    <?php if ($FeatureParagraph) : ?>
      <p class="features-paragraph"><?php echo esc_html($FeatureParagraph); ?></p>
    <?php endif; ?>
  </div>
  </div>
  <div class="second-block">
  <div class="features-icon">
    <?php if ($featureIcon1) : ?>
      <img class="icon-image" src="<?php echo esc_url($featureIcon1['url']); ?>" alt="<?php echo esc_attr($FeatureHeading1); ?>">
    <?php endif; ?>
  </div>
  <div class="features-content">
    <?php if ($FeatureHeading1) : ?>
      <h3 class="features-heading"><?php echo esc_html($FeatureHeading1); ?></h3>
    <?php endif; ?>
    <?php if ($FeatureParagraph1) : ?>
      <p class="features-paragraph"><?php echo esc_html($FeatureParagraph1); ?></p>
    <?php endif; ?>
  </div>
  </div>
  <div class="third-block">
  <div class="features-icon">
    <?php if ($featureIcon2) : ?>
      <img class="icon-image" src="<?php echo esc_url($featureIcon2['url']); ?>" alt="<?php echo esc_attr($FeatureHeading2); ?>">
    <?php endif; ?>
  </div>
  <div class="features-content">
    <?php if ($FeatureHeading2) : ?>
      <h3 class="features-heading"><?php echo esc_html($FeatureHeading2); ?></h3>
    <?php endif; ?>
    <?php if ($FeatureParagraph2) : ?>
      <p class="features-paragraph"><?php echo esc_html($FeatureParagraph2); ?></p>
    <?php endif; ?>
  </div>
  </div>
  </div>
</div>


  <?php
  echo ob_get_clean();

