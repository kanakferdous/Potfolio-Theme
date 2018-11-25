<?php 

function bizpage_skills_section_metabox($metaboxes)
{
    $section_id = 0;
    if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
        $section_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
    $section_meta = get_post_meta($section_id, 'bizpage-section-type', true);
    if ($section_meta) {
        $section_type = $section_meta['section'];
        if ('skills' != $section_type) {
            return $metaboxes;
        }
    }

    $metaboxes[] = array(
        'id' => 'bizpage-skills-section',
        'title' => __('Skills Settings', 'bizpage'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'skill-section',
                'fields' => array(
                    array(
                        'id' => 'skills_section_title',
                        'type' => 'text',
                        'title' => __('Skill Section Title', 'bizpage'),
                    ),
                    array(
                        'id' => 'skills_section_content',
                        'type' => 'textarea',
                        'title' => __('Skill Section Content', 'bizpage'),
                    ),
                    array(
                        'id' => 'skills_section',
                        'type' => 'group',
                        'button_title' => 'Add Skills',
                        'accordion_title' => 'Add New Skill',
                        'title' => __('Skill Group', 'bizpage'),
                        'fields' => array(
                            array(
                                'id' => 'skill_part_name',
                                'type' => 'text',
                                'title' => __("Skill Part Name", 'bizpage'),
                            ),
                            array(
                                'id' => 'skill_part_area_value',
                                'type' => 'number',
                                'title' => __("Skill Area Value", 'bizpage'),
                            ),
                            array(
                                'id' => 'skill_part_value',
                                'type' => 'text',
                                'title' => __("Skill Part Value", 'bizpage'),
                            ),
                            array(
                                'id' => 'skill_part_color',
                                'type' => 'select',
                                'title' => __("Skill Part Color", 'bizpage'),
                                'options' => array(
                                    'bg-primary' => __('Primary', 'bizpage'),
                                    'bg-secondary' => __('Secondary', 'bizpage'),
                                    'bg-success' => __('Success', 'bizpage'),
                                    'bg-danger' => __('Danger', 'bizpage'),
                                    'bg-warning' => __('Warning', 'bizpage'),
                                    'bg-info' => __('Info', 'bizpage'),
                                    'bg-dark' => __('Dark', 'bizpage'),
                                    'bg-white' => __('White', 'bizpage'),
                                ),
                                'help' => __('This bg color from bootstrap','bizpage'),
                            )
                        )
                    )
                )
            ),
        )
    );
    return $metaboxes;
}
add_filter('cs_metabox_options', 'bizpage_skills_section_metabox');