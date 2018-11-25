<?php 
global $page_section;
$bizpage_section_meta = get_post_meta($page_section['section'], 'bizpage-fats-section', true );
?>
<!--==========================
    Facts Section
============================-->
<?php if ($bizpage_section_meta) :
$facts_image_id = $bizpage_section_meta['facts_section_image'];
$facts_image = wp_get_attachment_image_src($facts_image_id, 'full');    
?>
<section id="<?php echo get_post_field('post_name', $page_section['section']) ?>"  class="wow fadeIn">
    <div class="container">
    <header class="section-header">
        <h3><?php echo esc_html($bizpage_section_meta['facts_section_title']); ?></h3>
        <p><?php echo esc_html($bizpage_section_meta['facts_section_content']); ?></p>
    </header>
    <div class="row counters">
        <?php 
        foreach ($bizpage_section_meta['facts'] as $single_facts) :
        ?>
        <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo esc_html($single_facts['fact_part_value']); ?></span>
            <p><?php echo esc_html($single_facts['fact_part_title']); ?></p>
        </div>
        <?php endforeach; ?>
    <div class="facts-img">
        <img src="<?php echo esc_url($facts_image[0]); ?>" alt="<?php echo esc_attr($bizpage_section_meta['facts_section_title']); ?>" class="img-fluid">
    </div>
    </div>
</section><!-- #facts -->
<?php endif; ?>