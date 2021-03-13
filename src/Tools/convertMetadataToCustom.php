<?php

if(PHP_SAPI != 'cli' || $argc < 1){
    exit('only console using');
}

if(
    $argc < 3 ||
    strlen($argv[1]) < 1 ||
    !is_file($argv[1]) ||
    strlen($argv[2]) < 1 ||
    !is_dir($argv[2])
){
    exit(
        "\n" .
        'Usage: php convertMetadataToCustom.php <path_to_metadata.json> <output_path_to_file> <base API URL>' . "\n" .
        'Where:' . "\n" .
       