<?php 
global $page_section;
$bizpage_section_meta = get_post_meta($page_section['section'], 'bizpage-portfolio-section', true );
$bizpage_portfolios = $bizpage_section_meta['portfolios'];
$bizpage_filter = array();
foreach($bizpage_portfolios as $single_filter){
  $bizpge_temp_filters = explode(",",$single_filter['filters']);
  foreach($bizpge_temp_filters as $bizpge_temp_filter){
    $bizpage_filter[trim($bizpge_temp_filter)] = $bizpge_temp_filter;
  }
}
?>
    <!--==========================
      Portfolio Section
    ============================-->
    <section id="<?php echo get_post_field('post_name', $page_section['section']) ?>"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <?php 
                foreach ($bizpage_filter as $bizpage_filte):
              ?>
              <li data-filter=".<?php echo strtolower(trim($bizpage_filte)); ?>"><?php echo $bizpage_filte ;?></li>
                <?php endforeach; ?>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

        <?php 
          foreach($bizpage_portfolios as $single_portfolio) :
            $portflio_image_id = $single_portfolio['image'];
            $portflio_image = wp_get_attachment_image_src($portflio_image_id, 'full');
            $portfolio_filter = $single_portfolio['filters'];
            
        ?>
          <div class="col-lg-4 col-md-6 portfolio-item <?php echo esc_attr(str_replace(","," ",$portfolio_filter));?> wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo esc_url($portflio_image[0]);?>" class="img-fluid" alt="">
                <a href="<?php echo esc_url($portflio_image[0]); ?>" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#"><?php echo esc_html($single_portfolio['title']); ?></a></h4>
                <p><?php echo $single_portfolio['filters']; ?></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

        </div>

      </div>
    </section><!-- #portfolio -->