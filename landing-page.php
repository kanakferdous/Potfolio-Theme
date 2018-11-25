<?php
/**
 * Template Name: Landing Page
 * 
 */
get_header();
?>
  
<?php 

   $page_sections = get_post_meta( get_the_ID(), 'bizpage-page-sections', true );
   if(isset($page_sections) && is_array($page_sections)){
        foreach ($page_sections['sections'] as $page_section) {
           $section_meta = get_post_meta($page_section['section'], 'bizpage-section-type', true );
           $single_section = isset($section_meta['section']) ? $section_meta['section']: '';
           get_template_part("/section-templates/{$single_section}");
        }
   }

  

?>

<?php get_footer(); ?>