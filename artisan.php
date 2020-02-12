<?php

require 'vendor/autoload.php';

$config = new database\Config;
$config->connect();

database\migrations\User_migration::generate_table();
