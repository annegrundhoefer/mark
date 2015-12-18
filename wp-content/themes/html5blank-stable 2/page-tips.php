?php
/*
Template Name: Tips
*/
get_header(); ?>


<section id="mastHead"> 
	<div class="container">
		<div class="row">
			<div class="back">
		<a href="http://markgrundhoefer.com">
			<i class="fa fa-arrow-left"></i>
			<h2>Go Back</h2>
		</a>

			</div>
		</div>

		<div class="logo text-center">
			<img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg">
			<h3> Your lesson has been booked!</h3>
				<?php echo gravity_form( $id = 2, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = false, $tabindex ); ?>
		</div>
	</div>
</section>





</body>
</html>
