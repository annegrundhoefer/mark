<section id="dates">
			<div class="col-lg-12 text-center nomargin">
				<div class="video-wrap">
					<video width="100%" src="<?php bloginfo('template_url'); ?>/assets/img/videos/back.mp4" preload="auto" loop autoplay muted></video>
						<div class="video-overlay">
							<table class="table">
								<tbody>
								<?php 

								/*********************************************/
								/*         
								Dates
								*/
								/*********************************************/

								$args = array(
								'post_type' => 'dates'
								);

								$dates = new WP_Query($args);


								if ($dates->have_posts()) {
								while ($dates->have_posts()) {
									$dates->the_post(); 
									$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
									$post_id = get_the_ID();
									?>
								  <tr class="this">
								    <td><?php echo get_field('date',$post_id); ?></td>
								    <td><?php echo get_the_title(); ?></td>
								    <td><?php echo get_field('time',$post_id); ?></td>
								    <td><?php echo get_field('venue_name',$post_id); ?></td>
								    <td class="color"><?php if( get_field('event_link') ): ?><a href="<?php echo get_field('event_link',$post_id); ?>" target="_blank">MORE INFO</a></td>
								    <?php endif; ?>
								  </tr>
								  	<?php }
									}

									?>
								</tbody>
							</table>
						</div>
					</div>
			</div>

</section>