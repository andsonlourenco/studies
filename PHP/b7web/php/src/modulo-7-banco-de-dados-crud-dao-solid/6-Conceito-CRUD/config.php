<?php

$dbhost = '172.20.0.2';
$dbname = 'test';
$dbuser = 'root';
$dbpass = 'root';

$pdo = new PDO("mysql:dbname=$dbname;host=$dbhost", $dbuser, $dbpass);
