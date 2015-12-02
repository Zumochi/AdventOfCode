<?php
/**
 * 2 * L * W +
 * 2 * W * H +
 * 2 * H * L
 */

$input = file("input.txt");

$paper = 0;
$extra = 0;
foreach($input as $box) {
    // Split dimensions into arrays.
    $dimensions = explode("x", $box);
    // Convert strings returned by explode() into integers.
    foreach($dimensions as $key => $value) {
        $dimensions[$key] = intval($value);
    }

}
