<?php 

function bizpage_team_section_metabox($metaboxes)
{
    $section_id = 0;
    if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
        $section_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
    $section_meta = get_post_meta($section_id, 'bizpage-section-type', true);
    if ($section_meta) {
        $section_type = $section_meta['section'];
        if ('team' != $section_type) {
            return $metaboxes;
        }
    }
    $metaboxes[] = array(
        'id' => 'bizpage-team-section',
        'title' => __('Teams Settings', 'bizpage'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'teams-section',
                'fields' => array(
                    array(
                        'id' => 'teams_section_title',
                        'type' => 'text',
                        'title' => __('Team Section Title', 'bizpage'),
                    ),
                    array(
                        'id' => 'teams_section_description',
                        'type' => 'textarea',
                        'title' => __('Team Section Description', 'bizpage'),
                    ),
                    array(
                        'id' => 'team_section',
                        'type' => 'group',
                        'button_title' => 'Add Teams',
                        'accordion_title' => 'Add New Team',
                        'title' => __('Team Group', 'bizpage'),
                        'fields' => array(
                            array(
                                'id' => 'team_part_name',
                                'type' => 'text',
                                'title' => __("Team Part Name", 'bizpage'),
                            ),
                            array(
                                'id' => 'team_part_designation',
                                'type' => 'text',
                                'title' => __("Team Part Designation", 'bizpage'),
                            ),
                            array(
                                'id' => 'team_part_image',
                                'type' => 'image',
                                'title' => __("Team Part Image", 'bizpage'),
                            ),
                            array(
                                'id' => 'facebook',
                                'type' => 'text',
                                'title' => __('Facebook link', 'bizpage')
                            ),
                            array(
                                'id' => 'twotter',
                                'type' => 'text',
                                'title' => __('twotter link', 'bizpage')
                            ),
                            array(
                                'id' => 'google-plud',
                                'type' => 'text',
                                'title' => __('Google Plus link', 'bizpage')
                            ),
                            array(
                                'id' => 'linkedine',
                                'type' => 'text',
                                'title' => __('linkedine link', 'bizpage')
                            ),
                        )
                    )
                )
            ),
        )
    );
    return $metaboxes;
}
add_filter('cs_metabox_options', 'bizpage_team_section_metabox');