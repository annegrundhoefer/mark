<section id="blog">

  <?php 

        $args = array( 'posts_per_page' => -1 );

        $wp_query = new WP_Query($args);

        ?>
        
        <?php if ($wp_query->have_posts()): while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


<div id="container">
		<div class="card">
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>

			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> by <?php the_author_meta('first_name'); ?>">
                </a>
                <?php the_post_thumbnail('large'); // Fullsize image for the single post ?>
                <?php endif; ?>

			<h2><?php the_title(); ?></h2>
			<h5><?php the_date(); ?></h5>
			<p><?php the_excerpt(); ?></p>
			<?php if( strlen(get_field('cta')) > 0 ) { ?>
				<div class="btn btn-default">
					<a href="<?php echo get_field('link',$post_id); ?>" target="_blank"><?php echo get_field('cta',$post_id); ?></a>
				</div>
			<?php } ?>
		</div>

		<?php endwhile; ?>

        <?php endif; ?>
	</div>
</section>
