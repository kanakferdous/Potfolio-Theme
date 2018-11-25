<?php 
global $page_section;
$bizpage_section_meta = get_post_meta($page_section['section'], 'bizpage-testimonials-section', true );
?>
<!--==========================
  Clients Section
============================-->
<?php if ($bizpage_section_meta) : ?>
<section id="<?php echo get_post_field('post_name', $page_section['section']) ?>" class="section-bg wow fadeInUp">
  <div class="container">
    <header class="section-header">
      <h3><?php echo esc_html($bizpage_section_meta['testimonials_section_title']); ?></h3>
    </header>
    <div class="owl-carousel testimonials-carousel">
      <?php 
      if ($bizpage_section_meta) :
        $count = 0;
      foreach ($bizpage_section_meta['testimonial_section'] as $single_testimonial) :
        $single_testimonial_id = $single_testimonial['testimonial_part_image'];
        $slider_testimonial = wp_get_attachment_image_src($single_testimonial_id, 'full');
      ?>
      <div class="testimonial-item">
        <img src="<?php echo esc_url($slider_testimonial[0]); ?>" class="testimonial-img" alt="<?php echo esc_attr($single_testimonial['testimonial_part_name']); ?>">
        <h3><?php echo esc_html($single_testimonial['testimonial_part_name']); ?></h3>
        <h4><?php echo esc_html($single_testimonial['testimonial_part_designation']); ?></h4>
        <p>
          <img src="<?php echo get_template_directory_uri(); ?>/img/quote-sign-left.png" class="quote-sign-left" alt="">
          <?php echo esc_html($single_testimonial['testimonial_part_comments']); ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/quote-sign-right.png" class="quote-sign-right" alt="">
        </p>
      </div>
      <?php $count++;
      endforeach;
      endif; ?>
    </div>
  </div>
</section><!-- #testimonials -->
<?php endif; ?>