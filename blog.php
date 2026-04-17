<?php
$body_class = 'blog';
$page_title = 'блог';
$header_style = 'header-single';
$header_title_style = 'header-title-light';
$blog_style = 'blog-slider-footer-none';
$breadcrumbs_style = 'breadcrumbs-light';
include_once('header-page.php');
$block_title = "";
include('./template-parts/blog-block.php');
include('./template-parts/blog-block.php');
include('./template-parts/blog-block.php');
?>
<?php include_once('footer.php');?>
