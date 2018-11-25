<?php 
global $page_section;
$bizpage_section_meta = get_post_meta($page_section['section'], 'bizpage-skills-section', true );
?>
<!--==========================
    Skills Section
============================-->
<?php if ($bizpage_section_meta) : ?>
<section id="<?php echo get_post_field('post_name', $page_section['section']) ?>">
    <div class="container">
    <header class="section-header">
        <h3><?php echo esc_html($bizpage_section_meta['skills_section_title']); ?></h3>
        <p><?php echo esc_html($bizpage_section_meta['skills_section_content']); ?></p>
    </header>
    <div class="skills-content">
        <?php 
        foreach ($bizpage_section_meta['skills_section'] as $single_skills) :
        ?>
        <div class="progress">
            <div class="progress-bar <?php echo esc_attr($single_skills['skill_part_color']);?>" role="progressbar" aria-valuenow="<?php echo esc_html($single_skills['skill_part_area_value']); ?>" aria-valuemin="0" aria-valuemax="100">
                <span class="skill"><?php echo esc_html($single_skills['skill_part_name']); ?><i class="val"><?php echo esc_html($single_skills['skill_part_value']); ?></i></span>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    </div>
</section>
<?php endif; ?>