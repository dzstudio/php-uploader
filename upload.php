<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Upload File</title>
  </head>
  <body>
  <h1>Upload File</h1>
  <form action="upload_file.php" method="post" enctype="multipart/form-data">
    <label for="file">Filename:</label>
    <input type="file" name="upload_file" id="file" /><br/><br/>
    <input type="submit" name="submit" value="Submit" />
  </form>
  </body>
</html>
