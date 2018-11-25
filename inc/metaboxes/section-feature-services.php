<?php 

function bizpage_feature_section_metabox($metaboxes){
    $section_id = 0;
    if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
        $section_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
    $section_meta = get_post_meta( $section_id, 'bizpage-section-type', true );
    if($section_meta){
        $section_type = $section_meta['section'];
        if ('feature-services' != $section_type) {
            return $metaboxes;
        }
    }
    
    $metaboxes[] = array(
        'id' => 'bizpage-feature-section',
        'title' => __('Featured Settings', 'bizpage'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'featured-section',
                'fields' => array(
                    array(
                        'id' => 'feature-service',
                        'type' => 'group',
                        'button_title' => 'Add Features',
                        'accordion_title' => 'Add New Feature',
                        'title' => __('Feature Group','bizpage'),
                        'fields' => array(
                            array(
                                'id' => 'feature_title',
                                'type' => 'text',
                                'title' => __("Feature Title", 'bizpage'),
                            ),
                            array(
                                'id' => 'feature_url',
                                'type' => 'text',
                                'title' => __("Feature URL", 'bizpage'),
                            ),
                            array(
                                'id' => 'fiature_content',
                                'type' => 'textarea',
                                'title' => __("Flider Content", 'bizpage'),
                            ),
                            array(
                                'id' => 'feature_icon',
                                'type' => 'icon',
                                'title' => __("Flider Icon", 'bizpage'),
                            )
                        )
                    )
                )
            ),
        )
    );
    return $metaboxes;
}
add_filter( 'cs_metabox_options', 'bizpage_feature_section_metabox' );