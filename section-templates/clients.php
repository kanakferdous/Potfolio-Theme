<?php 
global $page_section;
$bizpage_section_meta = get_post_meta($page_section['section'], 'bizpage-clients-section', true );
?>
<!--==========================
    Clients Section
============================-->
<?php if ($bizpage_section_meta) :?>
<section id="<?php echo get_post_field('post_name', $page_section['section']) ?>" class="wow fadeInUp">
    <div class="container">
        <header class="section-header">
            <h3><?php echo esc_html($bizpage_section_meta['clients_section_title']); ?></h3>
        </header>
        <div class="owl-carousel clients-carousel">
            <?php 
                if ($bizpage_section_meta) :
                $count = 0;
                foreach ($bizpage_section_meta['clients_section'] as $single_clients) :
                $single_clients_id = $single_clients['client_part_image'];
                $slider_clients = wp_get_attachment_image_src($single_clients_id, 'full');
            ?>
                <img src="<?php echo esc_url($slider_clients[0]); ?>" alt="<?php echo esc_attr($bizpage_section_meta['clients_section_title']); ?>">
            <?php $count++;
            endforeach;
            endif; ?>
        </div>
    </div>
</section><!-- #clients -->
<?php endif; ?>