<?php 

function bizpage_client_section_metabox($metaboxes)
{
    $section_id = 0;
    if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
        $section_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
    $section_meta = get_post_meta($section_id, 'bizpage-section-type', true);
    if ($section_meta) {
        $section_type = $section_meta['section'];
        if ('clients' != $section_type) {
            return $metaboxes;
        }
    }
    $metaboxes[] = array(
        'id' => 'bizpage-clients-section',
        'title' => __('Clients Settings', 'bizpage'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'clients-section',
                'fields' => array(
                    array(
                        'id' => 'clients_section_title',
                        'type' => 'text',
                        'title' => __('Clients Section Title', 'bizpage'),
                    ),
                    array(
                        'id' => 'clients_section',
                        'type' => 'group',
                        'button_title' => 'Add Clients',
                        'accordion_title' => 'Add New Client',
                        'title' => __('Client Group', 'bizpage'),
                        'fields' => array(
                            array(
                                'id' => 'client_part_image',
                                'type' => 'image',
                                'title' => __("Client Part Image", 'bizpage'),
                            )
                        )
                    )
                )
            ),
        )
    );
    return $metaboxes;
}
add_filter('cs_metabox_options', 'bizpage_client_section_metabox');