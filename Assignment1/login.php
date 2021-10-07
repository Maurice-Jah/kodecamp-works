
<?php
session_start();

$username = " ";
 $password = " ";



 $jsonData = file_get_contents("users.json");
$json = json_decode($jsonData,true);



 

if($_SERVER['REQUEST_METHOD']==='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];


    // set Session
    $_SESSION['name'] = $username;



    if(!empty($username && $password)){
        foreach ($json['users'] as $user){
            $jsonUsername= $user['username'] ;
            $jsonPass = $user['password'] ;
    
            if($jsonUsername === $_POST['username'] &&  $jsonPass === $_POST['password'] ){
                echo "Welcome";
                 header('Location:upload.php');
            } else{
                echo "unmatched records";
            }
        }

       
    }else{
    echo "fill all fields";
    }
    
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

<h1 class="text-center">Login</h1>
<form action="#" method="post" class="w-50 mx-auto" style="padding: 50px;">
    <div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" class="form-control pt-3 ">
    </div>

    <div class="form-group">
    <label for="password" class="mt-3">Password</label>
    <input type="password" name="password" id="password" class="form-control  pt-3">
    <div class="form-group">

    <br>

    <input type="submit" value="Submit" name="submit" class="btn btn-lg btn-primary">
</form>
    
</body>
</html>