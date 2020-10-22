<?php get_header(); ?>

<div class="row">
	
	<div class="col-xs-12 col-sm-8">
		
		<div class="row">

		<?php if( have_posts() ): ?>
			
			<?php while( have_posts() ): the_post(); ?>
				
				<?php get_template_part('temp/content', 'archive'); ?>
			
			<?php endwhile; ?>
			
			<?php endif; ?>
			
		</div>
	
	</div>
</div>

<?php get_footer(); ?>