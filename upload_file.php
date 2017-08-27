 <?php

  if ($_FILES["upload_file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["upload_file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["upload_file"]["name"] . "<br />";
    echo "Type: " . $_FILES["upload_file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["upload_file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["upload_file"]["tmp_name"] . "<br />";

    if (file_exists("upload/" . $_FILES["upload_file"]["name"]))
      {
      echo $_FILES["upload_file"]["name"] . " already exists. ";
      }
    else
      {
        move_uploaded_file($_FILES["upload_file"]["tmp_name"], "upload/" . $_FILES["upload_file"]["name"]);
        echo "Stored in: " . "upload/" . $_FILES["upload_file"]["name"] . "<br/>";

        $filename = "upload/" . $_FILES["upload_file"]["name"];
        $imgbinary = fread(fopen($filename, "r"), filesize($filename));
        echo base64_encode($imgbinary);
      }
    }
?>
