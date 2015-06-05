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
                <?php the_post_thumbnail('large'); // Fullsize image for the single post ?>
                </a>
                <?php endif; ?>

			<h2><?php the_title(); ?></h2>
			<h5><?php the_date(); ?></h5>
			<p><?php the_excerpt(); ?></p>
			<div class="btn btn-default"><a href="<?php the_permalink(); ?>">more info</a></div>
		</div>
		<?php endwhile; ?>

        <?php else: ?>

        <?php endif; ?>
	</div>
</section>
