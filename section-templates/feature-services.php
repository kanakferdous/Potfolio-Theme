<?php 
global $page_section;
$bizpage_section_meta = get_post_meta($page_section['section'], 'bizpage-feature-section', true );
?>
<!--==========================
    Featured Services Section
============================-->
<section id="featured-services">
    <div class="container">
        <div class="row">
        <?php 
        if ($bizpage_section_meta) :
        $count = 0;
        foreach ($bizpage_section_meta['feature-service'] as $single_section) :
        ?>
        <div class="col-lg-4 box <?php if('1' == $count){echo "box-bg";}?>">
            <i class="<?php echo esc_attr($single_section['feature_icon']); ?>"></i>
            <h4 class="title"><a href="<?php echo esc_url($single_section['feature_url']); ?>"><?php echo esc_html($single_section['feature_title']); ?></a></h4>
            <p class="description"><?php echo esc_html($single_section['fiature_content']); ?></p>
        </div>
        <?php
        $count++;
        endforeach;
        endif;
        ?>
        </div>
    </div>
</section><!-- #featured-services -->