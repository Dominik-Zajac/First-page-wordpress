<?php 
/****************************************/
## Blog post header content.
/***************************************/

$date_format = 'j F Y';
?>

	<div class="entry-footer">
		<?php if(!is_single()):  ?>
		<!-- <div class="entry-footer-top">
			<a href="<?php echo get_the_permalink()?>" title="<?php the_title_attribute() ?>" class="entry-button"><?php echo __('Czytaj dalej', 'writee'); ?></a>
		</div> -->
		<?php endif; ?>
		<div class="entry-footer-bottom">
		<div class="entry-meta">
		<span class="fa fa-calendar"></span>
			<span class="entry-date"><?php the_time($date_format); ?></span>
		</div>
			<div class="entry-comments">
				<a href="<?php comments_link(); ?>"><span class="fa fa-comment"></span>
					<span class="comments-counting">Liczba komentarzy <?php comments_number('0','1','%'); ?></span>
				</a>
			</div>
		</div>
	</div>