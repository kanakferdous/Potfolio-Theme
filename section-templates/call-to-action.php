<?php 
global $page_section;
$bizpage_section_meta = get_post_meta($page_section['section'], 'bizpage-calltoaction-section', true );
?>
<!--==========================
    Call To Action Section
============================-->
<?php if ($bizpage_section_meta) : ?>
<section id="call-to-action" class="wow fadeIn">
    <div class="container text-center">
    <h3><?php echo esc_html($bizpage_section_meta['calltoaction_title']); ?></h3>
    <p><?php echo esc_html($bizpage_section_meta['calltoaction_content']); ?></p>
    <a class="cta-btn" href="<?php echo esc_url($bizpage_section_meta['calltoaction_button']); ?>"><?php echo esc_html($bizpage_section_meta['calltoaction_button_title']); ?></a>
    </div>
</section><!-- #call-to-action -->
<?php endif; ?>
