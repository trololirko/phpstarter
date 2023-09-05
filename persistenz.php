<?php

include 'error_reporting.php';

const FILE = 'data.txt';

$content = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia tenetur illum optio commodi dolorum tempore?';
file_put_contents('data.txt', $content);

file_get_contents(FILE);

$in = file_get_contents(FILE);
echo $in;

$arr = [200, 'x' => 15, 'y' => 22, 100];
print_r($arr);
file_put_contents('data.txt', $arr); // Array Struktur geht verloren
file_put_contents('data.txt', serialize($arr)); // Array Struktur bleibt vorhanden

$in = unserialize(file_get_contents(FILE));
// echo $in; // Warning: Array to string conversion
print_r($in);

$arr = [[10,15], [22,30], [11,7]];

echo json_encode($arr);