
<!--==========================
  Footer
============================-->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">  
        <div class="col-lg-3 col-md-6 footer-info">
          <?php if (is_active_sidebar('footer-sidebar-1')) : ?>
            <?php dynamic_sidebar('footer-sidebar-1' ) ?>
          <?php endif; ?>
        </div>
        <div class="col-lg-3 col-md-6 footer-links">
          <?php if (is_active_sidebar('footer-sidebar-2')) : ?>
            <?php dynamic_sidebar('footer-sidebar-2') ?>
          <?php endif; ?>
        </div>
        <div class="col-lg-3 col-md-6 footer-contact">
          <?php if (is_active_sidebar('footer-sidebar-3')) : ?>
            <?php dynamic_sidebar('footer-sidebar-3') ?>
          <?php endif; ?>
          <div class="social-links">
            <?php if (is_active_sidebar('footer-sidebar-4')) : ?>
              <?php dynamic_sidebar('footer-sidebar-4') ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 footer-newsletter">
          <?php if (is_active_sidebar('footer-sidebar-5')) : ?>
            <?php dynamic_sidebar('footer-sidebar-5') ?>
          <?php endif; ?>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit"  value="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="copyright">
      <?php if (is_active_sidebar('footer-copyright')) : ?>
        <?php dynamic_sidebar('footer-copyright') ?>
      <?php endif; ?>
    </div>
  </div>
</footer><!-- #footer -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>
<?php wp_footer(); ?>
</body>
</html>
