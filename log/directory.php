<?php

// This script reads a directory of files.  After reading the directory specified it outputs the directory files.  
// Upon output, supplied functions manipulate each filename and format it to make the output filename look better. 
// e.g.: instead of output being 'my-good-looking-file.txt' it would look like 'My Good Looking File'.

// In order for the output to look better, you must put a hyphen (-) or an underscore (_) between each
// word that you want to be separated.

// function to strip off the file extension
function strip_ext($name) {
	$ext = strrchr($name, '.');
	if($ext !== false) {
		$name = substr($name, 0, -strlen($ext));
	}
	return $name;
}
// function to remove the hyphen or underscore from filename.
function removeHyphen($filename) {
	$target = $filename;
	$patterns[0] = '/-/';
	$patterns[1] = '/_/';
	$replacements[0] = ' ';
	$replacements[1] = ' ';
	$filename = preg_replace($patterns, $replacements, $target);
	return $filename;
}
// function to capatalize the first character of each word.  Must be called after
// the removal of the hyphen or underscore
function capFirstWord($word) {
	$cap = $word;
	$cap = explode(' ', $cap);
		foreach($cap as $key => $value) {
			$cap[$key] = ucfirst($cap[$key]); 
		}
	$word = implode(' ', $cap);
	return $word;
}
// Formats the file.  This is the main function that calls all functions explained above.
function formatFile($name) {
//    $name = strip_ext($name);
//    $name = removeHyphen($name);
//    $name = capFirstWord($name);
    return $name;
}

function buildLinks($directory) {
    $dir = $directory;
    $max = 10;
    $cwd = getcwd();
    $files = scandir($dir, 1);
    $filecount = 0;
	echo "<ul>";
    foreach ($files as $file) {
      if ($file != ".." && $file != ".") {
        if ($filecount < $max) {
          $filesize = filesize($cwd."/".$dir."/".$file);
          $translatedSize = round($filesize / 1024000);
          echo "<li><a href='$dir/$file' title='Download $file'>".formatFile($file)."</a> (".$translatedSize." MB)</li>";
          $filecount = $filecount + 1;
        }
      }
    }
	echo "</ul>";
}
?>


