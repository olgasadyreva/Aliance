<?php
$body_class = 'about-page';
$page_title = 'О компании';
$header_style = 'header-single';
$header_title_style = 'header-title-light';
$breadcrumbs_style = 'breadcrumbs-light';
$slider_style = 'header-features-slider-light';
$blog_style = 'blog-slider-footer';
include_once('header-page.php');
$block_title = "";
include_once('./template-parts/article-about-block.php');
include_once('./template-parts/features-slider-block.php');
include_once('./template-parts/article-product-block.php');

include_once('./template-parts/founder-block.php');
include_once('./template-parts/article-research-block.php');
include_once('./template-parts/clients-block.php');?>
<?php include_once('footer.php');?>
