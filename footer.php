<div class="section footer">
	<div class="section-inner footer clearfix">
		
		<div class="footer-main">
		
			
<?php /*
			<div class="footer-menu">
				<?php 
				wp_nav_menu( array('menu' => 'Footer Menu','container' => 'div','container_class' => 'nav footer-menu','depth' => 1 ));
				?>
			</div> <!-- .footer-menu -->

*/ ?>			

			<?php /*
			<div class="social-wrapper">
							
							<ul class="social-icons footer clearfix">
								<li>
									<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a class="instagram" href="#"><i class="fa fa-instagram"></i></a>
								</li>
							</ul> <!-- .social-icons .footer -->
							
						</div> <!-- .logo-social-wrapper -->
			*/ ?>
			
		</div> <!-- .footer-main -->
		
		<div class="footer-sub">
			<div class="copyright-notice" href="#">&#0169; <?php echo date("Y") ?> StyleGravy. All Rights Reserved</div>
			<ul>
				
				<li><a class="privacy-policy" href="<?php echo get_permalink(37); ?>">Privacy Policy</a></li>
				<li><a class="contact" href="<?php echo get_permalink(17); ?>">Contact</a></li>
			</ul>
		</div> <!-- .footer-sub -->
		
	</div> <!-- .section-inner .footer -->

</div> <!-- .section .footer -->

<?php wp_footer(); ?>
</body>
</html>