<?php 
global $page_section;
$bizpage_section_meta = get_post_meta($page_section['section'], 'bizpage-about-section', true );
?>
<!--==========================
    About Us Section
============================-->
<?php if($bizpage_section_meta): ?>
<section id="<?php echo get_post_field('post_name', $page_section['section']) ?>" class="">
    <div class="container">
        <header class="section-header">
            <h3><?php echo esc_html($bizpage_section_meta['aboutus_section_title']);  ?></h3>
            <p><?php echo esc_html($bizpage_section_meta['aboutus_section_content']); ?></p>
        </header>
        <div class="row about-cols">
        <?php 
            foreach($bizpage_section_meta['aboutus'] as $single_about) :
                $about_image_id = $single_about['about_part_image'];
                $about_image = wp_get_attachment_image_src($about_image_id, 'full');
        ?>
            <div class="col-md-4 wow fadeInUp">
                <div class="about-col">
                    <div class="img">
                    <img src="<?php echo esc_url($about_image[0]); ?>" alt="<?php echo esc_attr($single_about['about_part_title']); ?>" class="img-fluid">
                    <div class="icon"><i class="<?php echo esc_attr($single_about['about_part_icon']);?>"></i></div>
                    </div>
                    <h2 class="title"><?php echo esc_html($single_about['about_part_title']);?></h2>
                    <p><?php echo esc_html($single_about['about_part_content']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section><!-- #about -->
<?php endif; ?>