<?php get_header();?>


<!-- test branck 1 3 1 -->


<div id="container">
	
 	<?php if(have_posts()) : ?>

 		<?php while(have_posts()) : the_post(); ?>
 			<div class="post" id="post-<?php the_ID();?>">
				<h2>
					<a href="<?php the_permalink();?>" title="<?php the_title();?>">
						<?php the_title();?>
					</a>
				</h2>
				<div class="entry">
					<?php the_content();?>

					<p class="postmetadata">
						<?php _e('Filed under:'); ?>
						<?php the_category(',') ?>
						<?php _e('by'); ?>
						<?php the_author(); ?>
						<?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
						<?php edit_post_link('Edit', ' | ', ''); ?>
					</p>

				</div>
			</div>
		<?php endwhile; ?>
		<div class="navigation">
			<?php posts_nav_link(); ?>
		</div>
	<?php else : ?>

		<div class="post">
			<h2><?php _e('Not Found'); ?></h2>
		</div>

	<?php endif; ?> 

</div>


<?php get_sidebar();?>

<?php get_footer();?>
