<?php 

function bizpage_service_section_metabox($metaboxes)
{
    $section_id = 0;
    if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
        $section_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
    $section_meta = get_post_meta($section_id, 'bizpage-section-type', true);
    if ($section_meta) {
        $section_type = $section_meta['section'];
        if ('services' != $section_type) {
            return $metaboxes;
        }
    }

    $metaboxes[] = array(
        'id' => 'bizpage-service-section',
        'title' => __('Service Settings', 'bizpage'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'service-section',
                'fields' => array(
                    array(
                        'id' => 'service_section_title',
                        'type' => 'text',
                        'title' => __('Service Section Title', 'bizpage'),
                    ),
                    array(
                        'id' => 'service_section_content',
                        'type' => 'textarea',
                        'title' => __('Service Section Content', 'bizpage'),
                    ),
                    array(
                        'id' => 'services_section',
                        'type' => 'group',
                        'button_title' => 'Add Service Part',
                        'accordion_title' => 'Add New Service Part',
                        'title' => __('Service Group', 'bizpage'),
                        'fields' => array(
                            array(
                                'id' => 'service_part_title',
                                'type' => 'text',
                                'title' => __("Service Part Title", 'bizpage'),
                            ),
                            array(
                                'id' => 'service_part_url',
                                'type' => 'text',
                                'title' => __("Service Part URL", 'bizpage'),
                            ),
                            array(
                                'id' => 'service_part_content',
                                'type' => 'textarea',
                                'title' => __("Service Part Content", 'bizpage'),
                            ),
                            array(
                                'id' => 'service_part_icon',
                                'type' => 'icon',
                                'title' => __("Service Part Icon", 'bizpage'),
                            )
                        )
                    )
                )
            ),
        )
    );
    return $metaboxes;
}
add_filter('cs_metabox_options', 'bizpage_service_section_metabox');