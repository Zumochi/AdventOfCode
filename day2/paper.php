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

    // Sort every dimension by size.
    sort($dimensions);
    $paper += 2 * ($dimensions[0] * $dimensions[1]);
    $paper += 2 * ($dimensions[1] * $dimensions[2]);
    $paper += 2 * ($dimensions[2] * $dimensions[0]);

    // Add smallest side as extra paper.
    $extra += ($dimensions[0] * $dimensions[1]);
}

$total = $paper + $extra;
echo "The elves need $total square feet of packaging paper.";
