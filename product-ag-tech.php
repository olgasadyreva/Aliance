<?php
$body_class = 'product';
$page_title = 'Автохимия AG-Tech';
$header_style = 'header-single-image';
$header_title_style = 'header-title-light';
$slider_style = 'header-features-slider-light';
$breadcrumbs_style = 'breadcrumbs-light';
include_once('header-page.php');
$block_title = "";
include_once('./template-parts/features-slider-block.php');

$block_title = "схема работы";
include_once('./template-parts/scheme-block.php');
include_once('./template-parts/clients-block.php');?>
<?php include_once('footer.php');?>
