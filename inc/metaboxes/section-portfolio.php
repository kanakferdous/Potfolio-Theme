<?php 

function bizpage_portfolio_section_metabox($metaboxes){
    $section_id = 0;
    if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
        $section_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
    $section_meta = get_post_meta( $section_id, 'bizpage-section-type', true );
    if($section_meta){
        $section_type = $section_meta['section'];
        if ('portfolio' != $section_type) {
            return $metaboxes;
        }
    }
    
    $metaboxes[] = array(
        'id' => 'bizpage-portfolio-section',
        'title' => __('Portfolio Settings', 'bizpage'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'slider-section',
                'fields' => array(
                    array(
                        'id' => 'portfolios',
                        'type' => 'group',
                        'button_title' => 'Add Slider',
                        'accordion_title' => 'Add New Slider',
                        'title' => __('Slider Group','bizpage'),
                        'fields' => array(
                            array(
                                'id' => 'title',
                                'type' => 'text',
                                'title' => __(" Title", 'bizpage'),
                            ),
                            array(
                                'id' => 'filters',
                                'type' => 'text',
                                'title' => __("Filters", 'bizpage'),
                            ),
                            array(
                                'id' => 'image',
                                'type' => 'image',
                                'title' => __("Image", 'bizpage'),
                            ),
                        )
                    )
                )
            ),
        )
    );
    return $metaboxes;
}
add_filter( 'cs_metabox_options', 'bizpage_portfolio_section_metabox' );