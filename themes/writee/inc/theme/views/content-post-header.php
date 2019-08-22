<?php 
/****************************************/
## Blog post header content.
/***************************************/

global $post;


?>
	<div class="entry-header">
		<?php 
		if (! is_single()) :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );

		 else: 
			the_title( '<h1 class="entry-title">', '</h1>' );

		endif; 
		
	   ?>

	</div>