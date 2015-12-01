<?php

$input = file_get_contents("input.lisp");
$countOpen = substr_count($input, "(");
$countClose = substr_count($input, ")");

$floor = $countOpen - $countClose;
echo "Santa needs to go to floor $floor.";
