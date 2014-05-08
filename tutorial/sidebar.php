
<div class="sidebar">
	<ul>
	<?php 
		if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : 
	?>

		<li id="search">
			<?php include(TEMPLATEPATH . '/searchform.php'); ?>
		</li>

		<?php wp_list_pages('depth=1&title_li=<h2>Page</h2>');?>
		
		<li>
			<h2><?php _e('Category');?></h2>
			<ul>
				<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
				<!-- sort_column=name – 把分类按字符顺序排列
				optioncount=1 – 显示每个分类含有的日志数
				hierarchial=0 – 不按照层式结构显示子分类，这就解释了为什么子分类链接是列在列表中第一级。 -->
			</ul>
		</li>

		<li>
			<h2><?php _e('Archives');?></h2>
			<ul>
				<?php wp_get_archives('type=monthly');?>
			</ul>
		</li>
		<?php get_links_list();//blogroll missed ????> 

		<li>
			<h2><?php _e('Meta'); ?></h2>
			<ul>
				<?php wp_register(); ?>
				<li>
					<?php wp_loginout(); ?>
				</li>
				<?php wp_meta(); ?>
			</ul>
		</li>

		<li id="calendar"><h2><?php _e('Calendar'); ?></h2>
			<?php get_calendar(); ?>
		</li>

	<?php 
		endif; 
	?>
	</ul>
</div>