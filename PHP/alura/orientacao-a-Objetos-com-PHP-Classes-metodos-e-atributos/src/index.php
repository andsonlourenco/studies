<?php
function listFiles($directory, $parent = '') {
  $files = scandir($directory);
  
  foreach($files as $file) {
    if ($file == '.' || $file == '..') continue;

    $full_path = $directory . '/' . $file;
    
    if (is_dir($full_path)) {
      listFiles($full_path, $parent . '/' . $file);
    } else {
      $clean_directory = rtrim($parent, '/');
      $clean_file = ltrim($file, '/');
      
      echo "<a href='$clean_directory/$clean_file'>$parent/$file</a><br>";
    }
  }
}

$directory = "./";

listFiles($directory);