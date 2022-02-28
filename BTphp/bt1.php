<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $userName = $_POST["userName"];
    $password = $_POST["Password"];

    if ($username === "admin" && $password === "admin") {
        echo "<h3>Welcome <span style='color:red'>" .$username. "</span> to website</h3>";
    } else{
        echo "<h3><span style='color:red'>Login Error</span></h3>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .login{
            width:100px
            margin:0;
            padding:10px;
            border:1px #CCC solid;
        }
        h2 {
            text-align: center;
        }
        .login input {
            padding:4px; margin:4px
        }
     </style>   
</head>

<body>
 <form>
    <div class="login">
     <h3>LOGIN</h3>
<label action=""method="POST" enctype="multipart/form-data">
 UserName: <br>
<input type="text" name="userName"> <br>
</label>
<label> 
Password: <br>
<input type="password" name="password"> <br/>
</label>
<input type="submit" value="Sign in">
</form>
</div>
</body>

</html>