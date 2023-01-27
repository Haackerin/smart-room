<?php


$json = json_decode(file_get_contents('db.json'), true);
$lamp = $json['lamp'];
$door = $json['door'];


if (isset($_GET['lamp']) && $_GET['lamp'] == 1) {
    $lamp = !$lamp;
} elseif(isset($_GET['door']) && $_GET['door'] == 1){
    $door = !$door;
}

