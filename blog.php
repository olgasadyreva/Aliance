<?php
	$body_class = 'blog-page';
	$page_title = 'Блог';
	$header_style = 'header-single';
	$header_title_style = 'header-title-light';
	$blog_style = 'blog-slider-footer-none';
	$breadcrumbs_style = 'breadcrumbs-light';
	include_once('header-page.php');
	$block_title = "";
	include('./template-parts/blog-list.php');
	include('./template-parts/pagination-block.php');
?>
<?php include_once('footer.php'); ?>
