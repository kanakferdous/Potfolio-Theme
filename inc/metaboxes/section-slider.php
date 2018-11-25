<?php 

function bizpage_slider_section_metabox($metaboxes){
    $section_id = 0;
    if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
        $section_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
    $section_meta = get_post_meta( $section_id, 'bizpage-section-type', true );
    if($section_meta){
        $section_type = $section_meta['section'];
        if ('slider' != $section_type) {
            return $metaboxes;
        }
    }
    
    $metaboxes[] = array(
        'id' => 'bizpage-slider-section',
        'title' => __('Slider Settings', 'bizpage'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'slider-section',
                'fields' => array(
                    array(
                        'id' => 'slkiders',
                        'type' => 'group',
                        'button_title' => 'Add Slider',
                        'accordion_title' => 'Add New Slider',
                        'title' => __('Slider Group','bizpage'),
                        'fields' => array(
                            array(
                                'id' => 'slider_title',
                                'type' => 'text',
                                'title' => __("Slider Title", 'bizpage'),
                            ),
                            array(
                                'id' => 'slider_content',
                                'type' => 'textarea',
                                'title' => __("Slider Content", 'bizpage'),
                            ),
                            array(
                                'id' => 'slider_button_title',
                                'type' => 'text',
                                'title' => __("Slider Button Title", 'bizpage'),
                            ),
                            array(
                                'id' => 'slider_button',
                                'type' => 'text',
                                'title' => __("Slider Button Target", 'bizpage'),
                            ),
                            array(
                                'id' => 'slider_image',
                                'type' => 'image',
                                'title' => __("Slider Image", 'bizpage'),
                            ),
                        )
                    )
                )
            ),
        )
    );
    return $metaboxes;
}
add_filter( 'cs_metabox_options', 'bizpage_slider_section_metabox' );