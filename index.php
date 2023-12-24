<?php

include_once("../lib/loader.php");

if(!isset($_GET['id'])) {
    include_once('home.php');
}
else {
    $slug = htmlspecialchars(strip_tags($_GET['id']));
    array_key_exists($slug, $moshlings_json) ? include_once('view.php') : include_once('home.php');
}

?>
