<?php

if(PHP_SAPI != 'cli' || $argc < 1){
    exit('only console using');
}

if(
    $argc < 2 ||
    strlen($argv[1]) < 1 ||
    !is_file($argv[1])
){
    exit(
        "\n" .
        'Usage: php convertMetadataArrayToJson.php <path_to_file> <output_folder_path>' . "\n" .
        'Where:' . "\n" .
        "    <path_to_file> is full path to metadata file\n" .
        "    <output_folder_path> not required,