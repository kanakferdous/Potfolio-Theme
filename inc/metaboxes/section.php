<?php 

function bizpage_section_type_metabox($metaboxes){
    $metaboxes = array();
    $metaboxes[] = array(
        'id' => 'bizpage-section-type',
        'title' => __('section type', 'bizpaze'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
         'sections' => array(
             array(
                 'name' => 'section-meta',
                 'fields' => array(
                     array(
                         'id' => 'section',
                         'type' => 'select',
                         'title' => __("Select Section",'bizpage'),
                          'options' => array(
                            'slider' => __('Slider', 'bizpage'),
                            'feature-services' => __('Feature Services', 'bizpage'),
                            'about' => __('About', 'bizpage'),
                            'services' => __('Services', 'bizpage'),
                            'call-to-action' => __('Call to Action', 'bizpage'),
                            'skills' => __('Skills', 'bizpage'),
                            'facts' => __('Facts', 'bizpage'),
                            'portfolio' => __('Portfolio', 'bizpage'),
                            'clients' => __('Clients', 'bizpage'),
                            'testimonials' => __('Testimonials', 'bizpage'),
                            'team' => __('Team', 'bizpage'),
                            'contact' => __('Contact', 'bizpage'),
                        )
                     )
                 )
             ),
         )
    );
    return $metaboxes;
}
add_filter('cs_metabox_options', 'bizpage_section_type_metabox');

