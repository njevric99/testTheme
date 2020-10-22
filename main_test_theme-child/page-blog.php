<?php get_header(); ?>

    <div class="row" id="main-part" >	
	    <?php        
            if( have_posts() ):
		        while( have_posts() ): the_post(); ?>
			        <h1><?php the_title(); ?></h1>
			        <p><?php the_content(); ?></p>
		<?php endwhile; endif;?>
    </div>

<section class="main">
    <div class="container"> 
        <div class="row">	
            <div class="col-lg-7 col-sm-12">
                <?php 
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                    'post_type'=>'news', 
                    'posts_per_page' => 2,
                    'paged' => $paged,
                );
                $loop = new WP_Query( $args );
                if ( $loop->have_posts() ) {
                    while ( $loop->have_posts() ) : $loop->the_post();?>
                    <?php get_template_part('temp/content', 'archive'); ?>
                <?php endwhile;
                    $total_pages = $loop->max_num_pages;
                        if ($total_pages > 1){
                            $current_page = max(1, get_query_var('paged'));
                        }    
                }
    wp_reset_postdata();?>
            </div>
        
                <div class="col-lg-4 offset-lg-1 col-xs-12">
                    <?php get_sidebar(); ?>
                </div>  
                </div>
    </div>
                
            <div class="container">
                    <div class="paginate">   
                        <div class="row "> 
                            <?php 
                                echo paginate_links(array(
                                'base' => get_pagenum_link(1) . '%_%',
                                'format' => '/page/%#%',
                                'current' => $current_page,
                                'total' => $total_pages,
                                'prev_text'    => __(' prev'),
                                'next_text'    => __('next '),
                            ));
                            ?>
                        </div>
                </div>
            </div>
</section>
<?php get_footer(); ?>