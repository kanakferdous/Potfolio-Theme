<?php 
global $page_section;
$bizpage_section_meta = get_post_meta($page_section['section'], 'bizpage-slider-section', true );

?>
<section id="intro">
<div class="intro-container">
    <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators"></ol>
    <div class="carousel-inner" role="listbox">
    <?php 
        if($bizpage_section_meta):
            $count = 0;
            foreach($bizpage_section_meta['slkiders'] as $single_section) :
                $slider_image_id = $single_section['slider_image'];
                $slider_image = wp_get_attachment_image_src($slider_image_id, 'full');
    ?>
        <div class="carousel-item <?php if('0' == $count){echo "active";}?>">
            <div class="carousel-background"><img src="<?php echo esc_url($slider_image[0]);?>" alt="<?php echo esc_attr($single_section['slider_title']);?>"></div>
            <div class="carousel-container">
                <div class="carousel-content">
                    <h2><?php echo esc_html($single_section['slider_title'])?></h2>
                    <p><?php echo esc_html($single_section['slider_content']); ?></p>
                    <a href="<?php echo esc_url($single_section['slider_button']);?>" class="btn-get-started scrollto"><?php echo esc_html($single_section['slider_button_title']);?></a>
                </div>
            </div>
        </div>
    <?php $count++;
    endforeach; endif; ?>
    </div>
    <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</div>
</section><!-- #intro -->