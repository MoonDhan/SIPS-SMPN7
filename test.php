<?php
require 'vendor/autoload.php';

$xlsx = \Shuchkin\SimpleXLSXGen::fromArray([['NIS', 'Name'], ['1', 'A']]);
$xlsx->addSheet([['NIS', 'Name'], ['2', 'B']]);
$xlsx->saveAs('test.xlsx');

$reader = \Shuchkin\SimpleXLSX::parse('test.xlsx');
foreach ($reader->sheetNames() as $sheetIndex => $sheetName) {
    echo "Sheet: $sheetName (Index: $sheetIndex)\n";
    $rows = $reader->rows($sheetIndex);
    print_r($rows);
}
