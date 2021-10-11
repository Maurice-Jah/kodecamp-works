
<?php
session_start();

$username = " ";
 $password = " ";
 $email = " ";
 

if($_SERVER['REQUEST_METHOD']==='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // set Session
    $_SESSION['name'] = $username;



    if(!empty($username && $password && $email)){

        if(file_exists('users.json')){
            $current_data = file_get_contents('users.json');
            $array_data= json_decode($current_data, true);
            $extra  = array(
                'username' => $username,
                'password' => $password,
                'email' => $email
            );

            $array_data["users"][] = $extra;
            $finalData = json_encode($array_data);
            if (file_put_contents('users.json', $finalData)) {
                header('Location:login.php');
            } else{
                echo "error";
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

<h1 class="text-center">Sign up</h1>
<form action="#" method="post" class="w-50 mx-auto" style="padding: 50px;">
    <div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" class="form-control pt-3 ">
    </div>

    <div class="form-group">
    <label for="password" class="mt-3">Password</label>
    <input type="password" name="password" id="password" class="form-control  pt-3">
    <div class="form-group">

    <div class="form-group">
    <label for="email"  class = "mt-3">Email </label>
    <input type="email" name="email" id="email" class="form-control  pt-3">
    </div>
    <br>

    <input type="submit" value="Submit" name="submit" class="btn btn-lg btn-primary">
</form>
    
</body>
</html>