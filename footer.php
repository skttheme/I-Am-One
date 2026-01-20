<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT I Am One
 */
?>

 <div id="footer">
        		<div class="footer-inner middle-align">
                			<h1><a href="#"><?php bloginfo('name'); ?></a></h1>
                            <p><?php esc_html_e('Copyright','i-am-one'); ?> <?php echo date('Y'); ?></p><br />
                            <p>
          <?php esc_html_e('Theme By','i-am-one'); ?>  <a href="<?php echo esc_url('https://www.sktthemes.org/shop/iamone/');?>" target="_blank">
        <?php esc_html_e('I Am One','i-am-one'); ?>
        </a></p>
                </div><!-- footer-inner -->
        </div><!-- footer -->
        </div><!-- main-container -->
  
<?php wp_footer(); ?>
</body>
</html>