<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post" enctype="multipart/form-data">
   <input type="file" name="image"> <br><br>
   <input type="submit">

  </form>
</body>
</html>

<?php 
if(isset($_FILES['image']) ){
  echo"<pre>";
  print_r($_FILES);
  echo"<pre>";
 
  if($_FILES["image"]["size"] > 100000){
   echo "File too large to upload";
  }else{
    $file_name = $_FILES["image"]["name"];
    $file_temp = $_FILES["image"]["tmp_name"];
  
  
    if(move_uploaded_file($file_temp,"upload/".$file_name)){
      echo "file uploaded successfuly ";
      echo " <br><br><img src='upload/$file_name' width='400' height='400' />";
  }else{
    echo "file not uploaded";
  }
  }



}
?>