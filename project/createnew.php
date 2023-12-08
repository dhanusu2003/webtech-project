<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #form {
            background:lavenderblush;
            margin-top: 100px;
            width: 350px;
            height: 350px;
            border-radius: 1rem;
            box-shadow: 0rem 0rem 1rem 1rem lightgray;
            padding: 20px;
            border: 2px solid black;

        }
        #but {
            border-radius: 15px;
            border: 1px solid #09e783;
            padding: 15px;
            margin-left: 16px;
            background-color: white;
            font-size: 14px;
        }
        #but:hover {
            background-color: forestgreen;
            color: white;
        }
        #form label{
           display:flow-root;
           padding: 8px; 
        }
        #form input{
            padding: 5px;  
        }
        /* body {
            background-image: url("images/background_template.jpg");
        } */
    </style>
</head>
<body>
    <center>
        
        <form id="form" method="post">
        <h2 style="color:blue;padding-top: 10px;">Register Page </h2>
            <label id="l1">User Name</label>
            <input type="text" name="name" required><br><br>
            <label>Email</label>
            <input type="email" name="mail" required><br><br>
            <label>Create Password</label>
            <input type="password" name="newpass" required><br><br>
            <input type="submit" name='submit' id="but">
            <br>
        </form>
    </center>
</body>
</html>
<?php
 if (isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['mail'];
$pass=$_POST['newpass'];
$con=mysqli_connect("localhost:3306","root","","schoolsite");
$sql="insert into users(username,email,password) values('$name','$email','$pass')";
$result=mysqli_query($con,$sql);
// if($result)
// {
//     echo "Yes"; 
// }
// else
// {
//  echo "no";
// }
// echo"Successfully Registered";
 }
?>