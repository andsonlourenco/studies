<?php
$directory = "./";
$files = scandir($directory);

foreach($files as $file) {
  if ($file == '.' || $file == '..') continue;

  $clean_directory = rtrim($directory, '/');
  $clean_file = ltrim($file, '/');
  
  echo "<a href='$clean_directory/$clean_file'>$file</a><br>";
}