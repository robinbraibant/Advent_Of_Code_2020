<?php

$handle = fopen("puzzleInput.txt", "r");
$input = [];
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $input[] = trim($line);
    }
    fclose($handle);
} else {
    var_dump('fout');
}

//Part 1
var_dump("PART 1");
$valid = 0;
foreach ($input as $password) {
    if(calculate($password)) {
        $valid++;
    }
}
var_dump("Valid passwords: " . $valid);

//Part 2
var_dump("PART 2");
$valid = 0;
foreach ($input as $password) {
    if(calculate_two($password)) {
        $valid++;
    }
}
var_dump("Valid passwords: " . $valid);

function calculate($input)
{
    $result = explode(" ", $input);
    $occurences = getOccurences($result);
    $letter = getLetter($result);
    $count = substr_count($result[2], $letter);
    return $count >= (int)$occurences[0] and $count <= (int)$occurences[1];
}

function calculate_two($input)
{
    $result = explode(" ", $input);
    $occurences = getOccurences($result);
    $letter = getLetter($result);
    $firstLetter = $result[2][((int)$occurences[0] - 1)];
    $secondLetter = $result[2][((int)$occurences[1] - 1)];
    if ($firstLetter === $letter && $secondLetter === $letter) {
        return false;
    }
    if ($firstLetter === $letter || $secondLetter === $letter) {
        return true;
    }
    return null;
}

function getOccurences($result) {
    return explode("-", $result[0]);
}

function getLetter($result) {
    return $result[1][0];
}