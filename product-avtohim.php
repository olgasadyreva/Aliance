<?php
$body_class = 'product';
$page_title = 'Автомобильная химия';
$header_style = 'header-single-image';
$header_title_style = 'header-title-light';
$slider_style = 'header-features-slider-light';
$breadcrumbs_style = 'breadcrumbs-light';
$slider_style = 'header-features-slider-light';
$blog_style = 'blog-slider-footer';
include_once('header-page.php');

include_once('./template-parts/article-avtohim-block.php');
include_once('./template-parts/features-slider-block.php');
include_once('./template-parts/article-made-avtohim-block.php');
include_once('./template-parts/article-type-avtohim-block.php');
include_once('./template-parts/article-research-block.php');

$block_title = "схема работы";
include_once('./template-parts/scheme-block.php');
include_once('./template-parts/clients-block.php');?>
<?php include_once('footer.php');?>
