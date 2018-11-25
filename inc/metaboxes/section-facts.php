<?php 

function bizpage_facts_section_metabox($metaboxes)
{
    $section_id = 0;
    if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
        $section_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
    $section_meta = get_post_meta($section_id, 'bizpage-section-type', true);
    if ($section_meta) {
        $section_type = $section_meta['section'];
        if ('facts' != $section_type) {
            return $metaboxes;
        }
    }
    $metaboxes[] = array(
        'id' => 'bizpage-fats-section',
        'title' => __('Facts Settings', 'bizpage'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'fact-section',
                'fields' => array(
                    array(
                        'id' => 'facts_section_title',
                        'type' => 'text',
                        'title' => __('Fact Section Title', 'bizpage'),
                    ),
                    array(
                        'id' => 'facts_section_content',
                        'type' => 'textarea',
                        'title' => __('Fact Section Content', 'bizpage'),
                    ),
                    array(
                        'id' => 'facts_section_image',
                        'type' => 'image',
                        'title' => __('Fact Section Image', 'bizpage'),
                    ),
                    array(
                        'id' => 'facts',
                        'type' => 'group',
                        'button_title' => 'Add Fact Part',
                        'accordion_title' => 'Add New Fact Part',
                        'title' => __('Facts Group', 'bizpage'),
                        'fields' => array(
                            array(
                                'id' => 'fact_part_title',
                                'type' => 'text',
                                'title' => __("Fact Part Title", 'bizpage'),
                            ),
                            array(
                                'id' => 'fact_part_value',
                                'type' => 'number',
                                'title' => __("Fact Part Value", 'bizpage'),
                            ),
                        )
                    )
                )
            ),
        )
    );
    return $metaboxes;
}
add_filter('cs_metabox_options', 'bizpage_facts_section_metabox');