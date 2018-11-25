<?php 

function bizpage_calltoaction_section_metabox($metaboxes){
    $section_id = 0;
    if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
        $section_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
    $section_meta = get_post_meta( $section_id, 'bizpage-section-type', true );
    if($section_meta){
        $section_type = $section_meta['section'];
        if ('call-to-action' != $section_type) {
            return $metaboxes;
        }
    }
    
    $metaboxes[] = array(
        'id' => 'bizpage-calltoaction-section',
        'title' => __('Call To Action Settings', 'bizpage'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'calltoaction-section',
                'fields' => array(
                    array(
                        'id' => 'calltoaction_title',
                        'type' => 'text',
                        'title' => __("Call To Action Title", 'bizpage'),
                    ),
                    array(
                        'id' => 'calltoaction_content',
                        'type' => 'textarea',
                        'title' => __("Call To Action Content", 'bizpage'),
                    ),
                    array(
                        'id' => 'calltoaction_button_title',
                        'type' => 'text',
                        'title' => __("Call To Action Button Title", 'bizpage'),
                    ),
                    array(
                        'id' => 'calltoaction_button',
                        'type' => 'text',
                        'title' => __("Call To Action Button Target", 'bizpage'),
                    ),
                )
            ),
        )
    );
    return $metaboxes;
}
add_filter( 'cs_metabox_options', 'bizpage_calltoaction_section_metabox' );