<?php 

function bizpage_about_section_metabox($metaboxes){
    $section_id = 0;
    if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
        $section_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
    $section_meta = get_post_meta( $section_id, 'bizpage-section-type', true );
    if($section_meta){
        $section_type = $section_meta['section'];
        if ('about' != $section_type) {
            return $metaboxes;
        }
    }
    
    $metaboxes[] = array(
        'id' => 'bizpage-about-section',
        'title' => __('About Settings', 'bizpage'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'about-section',
                'fields' => array(
                    array(
                        'id' => 'aboutus_section_title',
                        'type' => 'text',
                        'title' => __('About Section Title', 'bizpage'),
                    ),
                    array(
                        'id' => 'aboutus_section_content',
                        'type' => 'textarea',
                        'title' => __('About Section Content', 'bizpage'),
                    ),
                    array(
                        'id' => 'aboutus',
                        'type' => 'group',
                        'button_title' => 'Add About Part',
                        'accordion_title' => 'Add New About Part',
                        'title' => __('About Group','bizpage'),
                        'fields' => array(
                            array(
                                'id' => 'about_part_title',
                                'type' => 'text',
                                'title' => __("About Part Title", 'bizpage'),
                            ),
                            array(
                                'id' => 'about_part_content',
                                'type' => 'textarea',
                                'title' => __("About Part Content", 'bizpage'),
                            ),
                            array(
                                'id' => 'about_part_icon',
                                'type' => 'icon',
                                'title' => __("About Part Icon", 'bizpage'),
                            ),
                            array(
                                'id' => 'about_part_image',
                                'type' => 'image',
                                'title' => __("About Part Image", 'bizpage'),
                            ),
                        )
                    )
                )
            ),
        )
    );
    return $metaboxes;
}
add_filter( 'cs_metabox_options', 'bizpage_about_section_metabox' );