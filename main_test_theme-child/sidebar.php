<div id="sidebar" class="widgets-area">
	
		<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-primary' ) ) : ?>
				<aside id="recommended-post" class="widget">
					<h3 class="widget-title"><?php _e( 'Recommended post', 'shape' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 3 ) ); ?>
					</ul>
				</aside>
				<aside id="tags" class="widget">
				<h3 class="widget-title"><?php _e( 'Tags', 'shape' ); ?></h3>
						
						<?php
							$tags=get_tags();
							foreach($tags as $tag):
								$tag_link = get_tag_link($tag->term_id);
								$count++;  
						?>
							<div class="btn btn-primary"><a href='<?php echo $tag_link;?>'><?php echo $tag->name;?></a></div>
						<?php   if( $count == 3 ) break;
							endforeach; ?>
						
				</aside>
		<?php endif; ?>	

</div>
