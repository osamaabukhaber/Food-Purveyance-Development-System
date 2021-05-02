<?php 
include 'conect.php';
$stl = 'incloud/temp/';
$css = './layout/thems/default/css/';
$js = './layout/thems/default/js/';
$lan = 'incloud/lang/';
$func = './incloud/functions/';
// include yhe important files
include $func . 'function.php';
include $lan . 'en.php';
include $stl . 'header.php';
if (!isset($nonav)){
    include 'nav.php';
}
?>
