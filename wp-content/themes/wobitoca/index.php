    <?php get_header(); ?>

		<?php if(have_posts()) : ?>
		   <?php while(have_posts()) : the_post(); ?>
		
			<?php the_content(); ?>
		
		   <?php endwhile; ?>
		
		<?php else : ?>
		
		<div class="alert alert-info">
		  <strong>No content in this loop</strong>
		</div>
		
		<?php endif; ?>

<?php get_footer(); ?>