<?php include('header.php'); ?>

<section id="mastHead"> 
	<div class="container">
		<div class="row">
			<div class="text-right social">
					<ul>
						<li><a href="https://www.facebook.com/markgrundhoefer?fref=ts"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/markgrundhoefer"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://instagram.com/markgrundhoefer/"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="logo text-center">
			<img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg">
		</div>

		<!-- <div class="container">
			<div class="row">

				<div class="soon text-center">
					<h2>coming soon</h2>
					<p>Hey guys, I'm working on my website right now. Click below to contact me for bookings, lessons, etc.</p>
					<div class="btn btn-default"><a href="mailto:mark.grundhoefer@gmail.com">contact</a></div>
				</div>
			</div>
		</div> -->




	<div class="text-center menu">
		<ul>
			<li><a href="javascript://" onclick="goTo('mastHead')">Home</a></li>
			<li><a href="javascript://" onclick="goTo('videos')">Music</a></li>
			<li><a href="javascript://" onclick="goTo('insta')">Photos</a></li>
			<li><a href="javascript://" onclick="goTo('blog')">News</a></li>
			<li><a href="javascript://" onclick="goTo('dates')">Upcoming Shows</a></li>
			<li><a href="javascript://" onclick="goTo('contact')">Contact</a></li>
		</ul>
	</div>
</section>


<section id="videos">
<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 bio">
				<h2>LA-based Musician Mark Grundhoefer</h2>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet,  Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 playlist">
				<!-- <?php dynamic_sidebar('widget-area-2'); ?> -->
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 youtube">
				<iframe width="500" height="310" src="https://www.youtube.com/embed/dt0MXJjmVWM" frameborder="0" allowfullscreen></iframe>
				</iframe>
			</div>
			<div class="col-sm-12 col-md-6 youtube">
				<iframe width="500" height="310" src="https://www.youtube.com/embed/2kD7CN4exXY" frameborder="0" allowfullscreen></iframe>
				</iframe>
			</div>
			
		</div>
	</div>
</section>

<section id="insta">

<!-- SnapWidget -->
<iframe src="http://snapwidget.com/sc/?u=bWFya2dydW5kaG9lZmVyfGlufDUwMHw0fDR8fHllc3wyMHxmYWRlT3V0fG9uU3RhcnR8bm98eWVz&ve=010615" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; height:350px"></iframe>
<!--- End -->
</section>


<?php include('news.php'); ?>
<?php include('dates.php'); ?>


<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-4 twitter">
				<a class="twitter-timeline" 
				data-dnt="true" 
				href="https://twitter.com/markgrundhoefer" 
				data-widget-id="606200999426940928"
				data-tweet-limit="3"
				data-chrome="nofooter noborders transparent">
				Tweets by @markgrundhoefer
				</a> 
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

			</div>

			<div class="col-sm-12 col-md-offset-1 col-md-7 form">
				<h2>Contact</h2>
				<?php echo gravity_form( $id = 1, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = false, $tabindex ); ?>
			</div>
		</div>
	</div>
</div>

</section>


<?php include('footer.php'); ?>

