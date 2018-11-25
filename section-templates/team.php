<?php 
global $page_section;
$bizpage_section_meta = get_post_meta($page_section['section'], 'bizpage-team-section', true );
?>
<!--==========================
    Team Section
============================-->
<?php if ($bizpage_section_meta) : ?>
<section id="<?php echo get_post_field('post_name', $page_section['section']) ?>">
    <div class="container">
    <div class="section-header wow fadeInUp">
        <h3><?php echo esc_html($bizpage_section_meta['teams_section_title']); ?></h3>
        <p><?php echo esc_html($bizpage_section_meta['teams_section_description']); ?></p>
    </div>
    <div class="row">
        <?php 
            if ($bizpage_section_meta) :
            foreach ($bizpage_section_meta['team_section'] as $single_teams) :
            $single_teams_id = $single_teams['team_part_image'];
            $image_teams = wp_get_attachment_image_src($single_teams_id, 'full');
        ?>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
                <img src="<?php echo esc_url($image_teams[0]); ?>" class="img-fluid" alt="">
                <div class="member-info">
                    <div class="member-info-content">
                        <h4><?php echo esc_html($single_teams['team_part_name']); ?></h4>
                        <span><?php echo esc_html($single_teams['team_part_designation']); ?></span>
                        <div class="social">
                        <?php if(isset($single_teams['facebook']) && !empty($single_teams['facebook'])) : ?>
                            <a href="<?php echo esc_url($single_teams['facebook']);?>"><i class="fa fa-facebook"></i></a>
                         <?php endif; ?>

                        <?php if (isset($single_teams['twotter']) && !empty($single_teams['twotter'])) : ?>
                            <a href="<?php echo esc_url($single_teams['twotter']); ?>"><i class="fa fa-twitter"></i></a>
                         <?php endif; ?>

                        <?php if (isset($single_teams['google-plud']) && !empty($single_teams['google-plud'])) : ?>
                            <a href="<?php echo esc_url($single_teams['google-plud']); ?>"><i class="fa fa-google-plus"></i></a>
                         <?php endif; ?>

                        <?php if (isset($single_teams['linkedine']) && !empty($single_teams['linkedine'])) : ?>
                            <a href="<?php echo esc_url($single_teams['linkedine']); ?>"><i class="fa fa-linkedin"></i></a>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        endforeach;
        endif; ?>
    </div>
    </div>
</section><!-- #team -->
<?php endif; ?>