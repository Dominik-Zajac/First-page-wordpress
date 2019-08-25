<?php 

global $post;

// $date_format = 'j F Y';
?>
<article id="entry-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if(is_single()): ?>
	<div class="entry-row_publish">
		<div class="entry-full-center" style="text-align:center;">
			<?php 
				get_template_part('inc/theme/views/content-post-header');
				writee_featured_image(get_the_ID(), 'WRT-post-image');
			?>
			
			<div class="entry-content">
				
				<?php the_content();?>
				
			</div>
			<div class="entry-paginated-link"><?php wp_link_pages(); ?></div>
				
				<!-- <div class="entry-meta">
					<span class="fa fa-calendar"></span>
					<span class="entry-date"><?php the_time($date_format); ?></span>
				</div> -->
			
		</div>
	</div>
	
	<?php 
		$prevPost = get_previous_post(false);
		$nextPost = get_next_post(false);
		if($prevPost || $nextPost):
	?>
	<div class="entry-navigation">
		<?php if($prevPost): ?>
		<div class="entry-previous">
			<?php
				previous_post_link( '%link', ' '. __( 'Poprzedni Post', 'writee' ).'',false );
			?>
		</div> 
		<?php endif; if($nextPost): ?>
		<div class="entry-next">
			<?php 
				next_post_link( '%link', ''. __( 'Następny Post', 'writee' ).'',false ); 
			?>
		</div>
		<?php endif; ?>
	</div><!-- .post-navigation -->
	<?php endif; 
	endif;
	?>
    
</article>