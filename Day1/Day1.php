<?php
$handle = fopen("puzzleInput.txt", "r");
$input = [];
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $input[] = (int)$line;
    }
    fclose($handle);
} else {
    var_dump('fout');
}

$length = count($input);

//Part 1
//var_dump("PART 1");
//for ($i = 0; $i < $length; $i++) {
//    for ($j = 0; $j < $length; $j++) {
//        if ($input[$i] + $input[$j] === 2020) {
//            var_dump("First number: " . $input[$i]);
//            var_dump("Second number: " . $input[$j]);
//            var_dump("Product: " . $input[$i] * $input[$j]);
//            exit;
//        }
//    }
//}

//Part 2
var_dump("PART 2");
for ($i = 0; $i < $length; $i++)
{
    for ($j = 0; $j < $length; $j++)
    {
        for ($k = 0; $k < $length; $k++)
        {
            if ($input[$i] + $input[$j] + $input[$k]  === 2020){
                var_dump("First number: " . $input[$i]);
                var_dump("Second number: " . $input[$j]);
                var_dump("Third number: " . $input[$j]);
                var_dump("Product: " . $input[$i] * $input[$j] * $input[$k]);
                exit;
            }
        }
    }
}