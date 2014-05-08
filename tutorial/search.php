<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">



	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>



	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->



	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />

	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



	<?php wp_get_archives('type=monthly&format=link'); ?>

	<?php //comments_popup_script(); // off by default ?>

	<?php wp_head(); ?>

</head>

<body>
	<div id="wrapper">

		<?php get_header();?>

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
							<?php the_excerpt();?>

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
		

	</div>
</body>
</html>
<!-- 在做这步之前，查看你的侧边栏，点击其中的一个存档链接，结果的页面是不是和首页没有什么不同？

创建一个新文件：archive.php
把 index.php 中所有东西复制到 archive.php
保存 archive.php
在 archive.php 文件，把 the_content 改成 the_excerpt。
再次保存 archive.php 文件
通过创建一个 archive.php 文件并把它改成和 index.php 不一样，这就是定制化存档页面的外观。

现在如果你刷新你的存档页面，它将只显示摘要而不是全文的日志。

为什么你想这么做呢？ — 防止 Google 以为重复内容惩罚你的博客，如果一个存档页面和首页显示相同的内容，那就是重复的内容。

如果是私人的博客呢？那么就没有必要去区分首页和存档页面。但这并不是说摘要对私人博客没有用。

同样 — 默认你的类别页面将使用 archive.php 显示内容，如果你没有 archive.php 文件，类别页面将使用 index.php 显示内容。

如果你想类别页面和首页和存档页面看起来不一样，那么创佳一个 category.php 文件并定制化它。

 -->