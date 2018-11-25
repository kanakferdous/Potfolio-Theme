<?php 
global $page_section;
$bizpage_section_meta = get_post_meta($page_section['section'], 'bizpage-service-section', true );
?>
<!--==========================
    Services Section
============================-->
<?php if ($bizpage_section_meta) : ?>
<section id="<?php echo get_post_field('post_name', $page_section['section']) ?>">
    <div class="container">
        <header class="section-header wow fadeInUp">
            <h3><?php echo esc_html($bizpage_section_meta['service_section_title']); ?></h3>
            <p><?php echo esc_html($bizpage_section_meta['service_section_content']); ?></p>
        </header>
        <div class="row">
            <?php
            foreach ($bizpage_section_meta['services_section'] as $single_service) :
            ?>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                <div class="icon"><i class="<?php echo esc_attr($single_service['service_part_icon']); ?>"></i></div>
                <h4 class="title"><a href="<?php echo esc_url($single_service['service_part_url']); ?>"><?php echo esc_html($single_service['service_part_title']); ?></a></h4>
                <p class="description"><?php echo esc_html($single_service['service_part_content']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section><!-- #services -->
<?php endif; ?>