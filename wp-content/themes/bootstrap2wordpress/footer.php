<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootstrap_to_wordpress
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bootstrap2wordpress' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'bootstrap2wordpress' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'bootstrap2wordpress' ), 'bootstrap2wordpress', '<a href="https://automattic.com/" rel="designer">Parvathy Vazhoor</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

			
			<!-- 			Sign up section -->
			<section id="signup" data-type="background" data-speed="4">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3">
							<h2>Are you ready to take your coding skill to <strong>next level</strong>?</h2>
							<p><a href="#" class="btn btn-lg btn-block btn-success">Yes Sign me In!</a></p>
						</div>
					</div>
				</div>
			</section>
<!-- 			Footer -->
			<footer>
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
						<p><a href="/"><img src="assets/img/logo.png" alt="Bootstrap to WordPress"></a></p>
						</div>
						<div class="col-sm-6">
						<nav>
						<ul class="list-unstyled list-inline">
							<li><a href="">Home</a></li>
							<li><a href="">Blog</a></li>
							<li><a href="">Resources</a></li>
							<li><a href="">Contact</a></li>
							<li class="sign-up-link"><a href="">Sign me up</a></li>							
						</ul>	
						</nav>
						</div>
						<div class="col-sm-3">
							<p class="pull-right">&copy; 2014 Parvathy Dileepkumar</p>
						</div>
					</div>
				</div>
			</footer>
				<!-- MODAL
	================================================== -->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
			
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing List</h4>
				</div><!-- modal-header -->
				
				<div class="modal-body">
					<p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free!</em></p>
					
					<form class="form-inline" role="form">
						<div class="form-group">
							<label class="sr-only" for="subscribe-name">Your first name</label>
							<input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
						</div>
						<div class="form-group">
							<label class="sr-only" for="subscribe-email">and your email</label>
							<input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
						</div>
						<input type="submit" class="btn btn-danger" value="Subscribe!">
					</form>
					
					<hr>
					
					<p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>
				</div><!-- modal-body -->
				
			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->


<!-- 			Bootstrap core javasript- add at the bottom to load up the page fast -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/npm.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
