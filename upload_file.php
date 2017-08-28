<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
set_error_handler('displayErrorHandler');
$errMessages = '';

function displayErrorHandler($error, $error_string, $filename, $line, $symbols) {
  $error_no_arr = array(
    1 => 'ERROR',
    2 => 'WARNING',
    4 => 'PARSE',
    8 => 'NOTICE',
    16 => 'CORE_ERROR',
    32 => 'CORE_WARNING',
    64 => 'COMPILE_ERROR',
    128 => 'COMPILE_WARNING',
    256 => 'USER_ERROR',
    512 => 'USER_WARNING',
    1024 => 'USER_NOTICE',
    2047 => 'ALL',
    2048 => 'STRICT'
  );
  $msg = sprintf("%s: %s at file %s(%s)", $error_no_arr[$error], $error_string, $filename, $line);
  if (in_array($error, array(1, 2, 4))) {
    $errMessages .= $msg . "\n";
  }
}

if ($_FILES["upload_file"]["error"] > 0) {
  echo "Return Code: " . $_FILES["upload_file"]["error"] . "<br />";
} else {
  echo "Upload: " . $_FILES["upload_file"]["name"] . "<br />";
  echo "Type: " . $_FILES["upload_file"]["type"] . "<br />";
  echo "Size: " . ($_FILES["upload_file"]["size"] / 1024) . " Kb<br />";
  echo "Temp file: " . $_FILES["upload_file"]["tmp_name"] . "<br />";

  if (file_exists("upload/" . $_FILES["upload_file"]["name"])) {
    echo $_FILES["upload_file"]["name"] . " already exists. ";
  } else {
    move_uploaded_file($_FILES["upload_file"]["tmp_name"], "upload/" . $_FILES["upload_file"]["name"]);
    echo "Stored in: " . "upload/" . $_FILES["upload_file"]["name"] . "<br/>";

    // If file size less than 1MB, display base64 content.
    $filename = "upload/" . $_FILES["upload_file"]["name"];
    if ($_FILES["upload_file"]["size"] / 1024 <= 1024) {
      $imgbinary = fread(fopen($filename, "r"), filesize($filename));
      echo base64_encode($imgbinary);
    }
  }
}

?>
<br><br><br>
<a href="upload.php">Continue Upload</a>
