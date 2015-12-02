<?php

// First half
$input = file_get_contents("input.lisp");
$countOpen = substr_count($input, "(");
$countClose = substr_count($input, ")");

$floor = $countOpen - $countClose;
echo "<p>Santa needs to go to floor $floor.</p>";

// Second half
$inputArray = str_split($input, 1);

function getBasementInstructionId($instructions)
{
    $floor = 0;
    foreach($instructions as $key => $destination) {
        // Is this dirty? It is dirty. How to clean though?
        if ($destination === "(") {
            $floor++;
        } elseif ($destination === ")") {
            $floor--;
        }

        // +1 because array index starts at 0.
        if ($floor === -1) return $key + 1;
    }
}

echo "<p>" . getBasementInstructionId($inputArray) . "</p>";
