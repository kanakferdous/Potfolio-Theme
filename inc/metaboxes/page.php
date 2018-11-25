<?php 

function bizpage_section_picker_metabox($metaboxes){

    $page_id = 0;
    if(isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])){
        $page_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
    $current_page_template = get_post_meta( $page_id, '_wp_page_template', true );
    if(! in_array($current_page_template, array('landing-page.php'))){
        return $metaboxes;
    }
    $metaboxes[] = array(
        'id' => 'bizpage-page-sections',
        'title' => __('Sections', 'bizpaze'),
        'post_type' => 'page',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'section-meta',
                'fields' => array(
                    array(
                        'id' => 'sections',
                        'type' => 'group',
                        'title' => __("Select Sections", 'bizpage'),
                        'button_title' => __('New Section', 'bizpage'),
                        'accordion_title' => __('Add New Field', 'bizpage'),
                        'fields' => array(
                            array(
                                'id' => 'section',
                                'title' => __('Select Sections', 'bizpage'),
                                'type' => 'select',
                                'options' => 'post',
                                'query_args' => array(
                                    'post_type' => 'section',
                                    'posts_per_page' => -1,
                                )
                            )
                        )
                    )
                )
            ),
        )
    );
    return $metaboxes;
}
add_filter( 'cs_metabox_options', 'bizpage_section_picker_metabox' );