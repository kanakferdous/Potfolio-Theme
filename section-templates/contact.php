<?php 
global $page_section;
$bizpage_section_meta = get_post_meta($page_section['section'], 'bizpage-contact-section', true );
?>
<!--==========================
    Contact Section
============================-->
<section id="<?php echo get_post_field('post_name', $page_section['section']) ?>" class="section-bg wow fadeInUp">
    <div class="container">
    <div class="section-header">
        <h3><?php echo esc_html($bizpage_section_meta['contacts_section_title']); ?></h3>
        <p><?php echo esc_html($bizpage_section_meta['contacts_section_description']); ?></p>
    </div>
    <div class="row contact-info">
        <?php 
        if ($bizpage_section_meta) :
            foreach ($bizpage_section_meta['contact_section'] as $single_contacts) :
        ?>
        <div class="col-md-4">
            <div class="contact-address">
                <i class="<?php echo esc_attr($single_contacts['team_part_icon']); ?>"></i>
                <h3><?php echo esc_html($single_contacts['contact_part_name']); ?></h3>
                <address><?php echo esc_html($single_contacts['Contact_part_description']); ?></address>
            </div>
        </div>
        <?php
        endforeach;
        endif; ?>
    </div>
    <div class="form">
        <?php echo do_shortcode($bizpage_section_meta['contacts_section_shortcode']); ?>
    </div>

    </div>
</section><!-- #contact -->