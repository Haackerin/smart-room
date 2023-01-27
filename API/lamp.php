<?php
$lamp = false;
$door = false;

if (isset($_GET['lamp']) && $_GET['lamp'] == 1) {
    $lamp = !$lamp;
} elseif(isset($_GET['door']) && $_GET['door'] == 1){
    $door = !$door;
}