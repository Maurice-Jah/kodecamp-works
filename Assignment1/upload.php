





<?php

if(isset($_POST['submit'])){
   $img_name = $_FILES['img_upload'] ['name'];
   $img_tmp = $_FILES['img_upload'] ['tmp_name'];
   $folder = 'uploads/';

   move_uploaded_file($img_tmp, $folder.$img_name);

   header('Location:dashboard.php');

}

?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Bootstrap -->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data" class="w-50 mx-auto" style="padding: 50px;">
    <h2 class="mb-3">Select Image to Upload</h2>
    <input type="file" name="img_upload" class="mb-3"> <br>
    <input type="submit btn btn-primary" value="Upload" name="submit">

    </form>
    
</body>
</html>