<?php
/**
* Template Name: Archives - Category Index
*/
get_header();
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<header>
			<h1><?php the_title(); ?></h1>
		</header>
		
		<div class="entry-content">
			<?php the_content(); ?>
			<?php edit_post_link( __( 'Edit'), '<p>', '</p>' ); ?>
			
	
			<?php 
				$cats = get_categories();
				foreach ( $cats as $cat ){
					echo "<h4>" . $cat->name . " (". $cat->count .")</h4>";
					$category_description = category_description( $cat->term_id );
		                if ( ! empty( $category_description ) ) {
		                    printf("%s", $category_description); 
					}
					echo "<ul>";
					$myposts = get_posts( array( 'cat' => $cat->term_id, 'posts_per_page' => -1 ) );
					foreach( $myposts as $post ) { ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>					
					<?php } // end foreach
					echo "</ul><br />";
				}
				
			?>					
			
		</div><!--//entry-content-->
		
	
<?php endwhile;

get_footer();
