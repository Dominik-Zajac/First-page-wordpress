<?php 
/*********************************************/
## page detail
/*********************************************/
	global $post;
?>
<article id="entry-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-row">
	<div class="entry-header">
				<?php 
				if (! is_single()) :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
					
				 else: 
					the_title( '<h2 class="entry-title">', '</h2>' );
					
				endif; ?>
				<div class='linear-border'></div>
			</div>
		<div class="entry-full-center">


			<?php writee_featured_image(get_the_ID(), 'WRT-post-image'); ?>
			
			<div class="entry-content">
				
				<?php the_content();?>
				
			</div>
			<div class="entry-paginated-link"><?php wp_link_pages(); ?></div>
		</div>
	</div>
</article>