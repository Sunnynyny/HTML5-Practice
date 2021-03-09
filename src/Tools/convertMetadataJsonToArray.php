<?php

if(PHP_SAPI != 'cli' || $argc < 1){
    exit('only console using');
}

if(
    $argc < 3 ||
    strlen($argv[1]) < 1 ||
    !is_file($argv[1]) ||
    strlen($argv[2]) < 1 ||
    !is_file($argv[2])
){
    exit(
        "\n" .
        'Usage: php convertMetadataArrayToJson.php <path_to_file> <path_to_custom_file> <output_folder_path>' . "\n" .
        'Where:' . "\n" .
        "    <path_to_file> is full path to metadata file\n" .
        "    <path_to_custom_file> is full path to custom file\n" .
        "    <output