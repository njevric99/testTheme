<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
	<header class="entry-header">
		<?php the_title( sprintf('<h3 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h3>' ); ?>
		<div class="author">
			<input class="butt" type="button" value=""/>
			<p><?php the_author(); ?></p>
		</div>
	</header>
		<div class="news-holder">
			<div class="row">
						<?php if( has_post_thumbnail() ): ?>
							<div class="col-xs-12 col-sm-7 info">
								<?php the_excerpt(); ?>
								<div class="btn"><a href='<?php echo get_permalink(); ?>'>Read more</a></div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<div class="thumbnail"><?php the_post_thumbnail( 'blog-thumb' );  ?></div>
							</div>
									
						<?php else: ?>	
							<div class="col-xs-12 col-sm-12 info">
								<?php the_excerpt(); ?>
								<div class="btn"><a href='<?php echo get_permalink(); ?>'>Read more</a></div>
							</div>
						<?php endif; ?>
			</div>
		</div>
		<hr>	
	</div>
</article>

