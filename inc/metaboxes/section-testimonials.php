<?php 

function bizpage_testimonial_section_metabox($metaboxes)
{
    $section_id = 0;
    if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
        $section_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
    $section_meta = get_post_meta($section_id, 'bizpage-section-type', true);
    if ($section_meta) {
        $section_type = $section_meta['section'];
        if ('testimonials' != $section_type) {
            return $metaboxes;
        }
    }
    $metaboxes[] = array(
        'id' => 'bizpage-testimonials-section',
        'title' => __('Testimonials Settings', 'bizpage'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'testimonials-section',
                'fields' => array(
                    array(
                        'id' => 'testimonials_section_title',
                        'type' => 'text',
                        'title' => __('testimonials Section Title', 'bizpage'),
                    ),
                    array(
                        'id' => 'testimonial_section',
                        'type' => 'group',
                        'button_title' => 'Add Testimonials',
                        'accordion_title' => 'Add New Testimonial',
                        'title' => __('Testimonial Group', 'bizpage'),
                        'fields' => array(
                            array(
                                'id' => 'testimonial_part_name',
                                'type' => 'text',
                                'title' => __("Testimonial Part Name", 'bizpage'),
                            ),
                            array(
                                'id' => 'testimonial_part_designation',
                                'type' => 'text',
                                'title' => __("Testimonial Part Designation", 'bizpage'),
                            ),
                            array(
                                'id' => 'testimonial_part_comments',
                                'type' => 'textarea',
                                'title' => __("Testimonial Part Comments", 'bizpage'),
                            ),
                            array(
                                'id' => 'testimonial_part_image',
                                'type' => 'image',
                                'title' => __("Testimonial Part Image", 'bizpage'),
                            )
                        )
                    )
                )
            ),
        )
    );
    return $metaboxes;
}
add_filter('cs_metabox_options', 'bizpage_testimonial_section_metabox');