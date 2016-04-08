<?php

if (strpos($_SERVER['REQUEST_URI'], 'index.php')) {
    $dir    = str_replace('index.php', '', $_SERVER['REQUEST_URI']);
	$path   = dirname("http://$_SERVER[HTTP_HOST]") . "$dir";
} else {
	$path   = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}

// Variables
$product_name = "Magento 2";
$product_desc = "documentation v4-1";
$doc_title = $product_name . " " . $product_desc;

$lang = 'en';
if (isset($_GET['lang'])) {
	$lang = $_GET['lang'];
}

$section_param = 'introduction';
if (isset($_GET['section'])) {
	$section_param = $_GET['section'];
}
if (isset($_GET['utm_campaign'])) {
 header('Location: index.php');
}