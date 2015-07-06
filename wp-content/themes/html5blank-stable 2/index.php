<?php include('header.php'); ?>

<section id="mastHead"> 
	<div class="container">
		<div class="row">
			<div class="text-right social">
					<ul>
						<li><a href="https://www.facebook.com/markgrundhoefer?fref=ts" target="blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/markgrundhoefer" target="blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://instagram.com/markgrundhoefer/" target="blank"><i class="fa fa-instagram"></i></a></li>
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

<div class="row">
	<div class="text-center menu">
	<h3 onclick="menuToggle()" class="menu-toggle"><i class="fa fa-bars"></i>Menu</h3>
		<ul class="sub-menu">
			<li><a data-toggle="collapse" href="javascript://" onclick="goTo('mastHead')">Home</a></li>
			<li><a href="javascript://" onclick="goTo('videos')">Music</a></li>
			<li><a href="javascript://" onclick="goTo('insta')">Photos</a></li>
			<li><a href="javascript://" onclick="goTo('blog')">News</a></li>
			<li><a href="javascript://" onclick="goTo('dates')">Upcoming Shows</a></li>
			<li><a href="javascript://" onclick="goTo('lessons')">Lessons</a></li>
			<li><a href="javascript://" onclick="goTo('contact')">Contact</a></li>
		</ul>
	</div>
	</div>
</section>


<section id="videos">
<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 bio">
				<h2>Atlanta-based Musician Mark Grundhoefer</h2>
				<p> For the last decade, Mark Grundhoefer has been a staple of the Los Angeles music scene playing in numerous bands, devoting countless hours of session work, and developing a full-time teaching studio.  He now resides in Atlanta, Georgia where he continues to perform, record, and educate.  He has a Bachelor of Arts in Classical Guitar from Florida State University and a vocational degree from Musicians Institute in Hollywood, California.  Mark's sound is a reflection of his southern roots and his classical and jazz studies.  He has been compared to many of his own inspirations, such as Pat Metheny and Steve Howe, among others.</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 playlist">

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

			<div class="col-sm-12 col-md-6 yt-mobile">
				<iframe width="300" height="150" src="https://www.youtube.com/embed/dt0MXJjmVWM" frameborder="0" allowfullscreen></iframe>
				</iframe>
			</div>
			<div class="col-sm-12 col-md-6 yt-mobile">
				<iframe width="300" height="150" src="https://www.youtube.com/embed/2kD7CN4exXY" frameborder="0" allowfullscreen></iframe>
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


<section id="lessons">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 appointements">
			<h3>If you want to book a lesson, check out my availability below.</h3>
				<?php echo do_shortcode( '[booked-calendar]' ); ?>
			</div>
		</div>
	</div>
</section>


<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-4 twitter">
				<a class="twitter-timeline" 
				data-dnt="true" 
				href="https://twitter.com/markgrundhoefer" 
				data-widget-id="606200999426940928"
				data-tweet-limit="4"
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

