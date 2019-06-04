<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/wp-load.php';
include 'wpObj.php';
$icon = new stdClass();
$icon->src = $wpObj->bloginfo->stylesheet_directory . "/png/icon.png";
$icon->sizes = "96x96 128x128 144x144 180x180";
$icon->type = "image/png";
$manifest = [
    "name" => $wpObj->bloginfo->name,
    "short_name" => $wpObj->bloginfo->name,
    "description" => $wpObj->bloginfo->description,
    "start_url" => "/index.php",
    "display" => "standalone",
    "orientation" => "portrait",
    "background_color" => $wpObj->colour_background,
    "theme_color" => $wpObj->colour_theme,
    "icons" => [$icon],
];
header('Content-Type: application/json');
echo json_encode($manifest);
