<?php
$body_class = 'about-page';
$page_title = 'О компании';
$header_style = 'header-single';
$header_title_style = 'header-title-light';
$breadcrumbs_style = 'breadcrumbs-light';
$slider_style = 'header-features-slider-light';
include_once('header-page.php');
$block_title = "";
include_once('./template-parts/features-slider-block.php');
include_once('./template-parts/founder-block.php');
include_once('./template-parts/clients-block.php');?>
<?php include_once('footer.php');?>
