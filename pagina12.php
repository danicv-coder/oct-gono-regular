<?php
header('Content-Type: text/html; charset=utf-8');
$area = (8 * $_REQUEST['numero'] * $_REQUEST['numero2'])/2;
echo $area;
?>