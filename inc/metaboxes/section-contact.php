<?php 

function bizpage_contact_section_metabox($metaboxes)
{
    $section_id = 0;
    if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
        $section_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
    $section_meta = get_post_meta($section_id, 'bizpage-section-type', true);
    if ($section_meta) {
        $section_type = $section_meta['section'];
        if ('contact' != $section_type) {
            return $metaboxes;
        }
    }
    $metaboxes[] = array(
        'id' => 'bizpage-contact-section',
        'title' => __('Contacts Settings', 'bizpage'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'contacts-section',
                'fields' => array(
                    array(
                        'id' => 'contacts_section_title',
                        'type' => 'text',
                        'title' => __('Contact Section Title', 'bizpage'),
                    ),
                    array(
                        'id' => 'contacts_section_description',
                        'type' => 'textarea',
                        'title' => __('Contact Section Description', 'bizpage'),
                    ),
                    array(
                        'id' => 'contacts_section_shortcode',
                        'type' => 'text',
                        'title' => __('Contact Form Shortcode', 'bizpage'),
                        'help' => __('This shortcode comes form contact form 7', 'bizpage'),
                    ),
                    array(
                        'id' => 'contact_section',
                        'type' => 'group',
                        'button_title' => 'Add Contacts',
                        'accordion_title' => 'Add New Contact',
                        'title' => __('Contact Group', 'bizpage'),
                        'fields' => array(
                            array(
                                'id' => 'contact_part_name',
                                'type' => 'text',
                                'title' => __("Contact Part Name", 'bizpage'),
                            ),
                            array(
                                'id' => 'Contact_part_description',
                                'type' => 'textarea',
                                'title' => __("Contact Part Description", 'bizpage'),
                            ),
                            array(
                                'id' => 'team_part_icon',
                                'type' => 'icon',
                                'title' => __("Contact Part Icon", 'bizpage'),
                            ),
                        )
                    )
                )
            ),
        )
    );
    return $metaboxes;
}
add_filter('cs_metabox_options', 'bizpage_contact_section_metabox');