<?php get_header(); ?>


<div class="container">
    <div class="row">	
    <div class="col-lg-8" style="margin-top:40px;">
		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<?php the_title('<h1 class="entry-title">','</h1>' ); ?>
					
					<?php if( has_post_thumbnail() ): ?>
						
						<div class="pull-right"><?php the_post_thumbnail('thumbnail'); ?></div>
				
					<?php endif; ?>
										
					<?php the_content(); ?>
				
				</article>

			<?php endwhile;
			
		endif;
				
		?>
	
	</div>
	
	
</div>
</div>
<?php get_footer(); ?>