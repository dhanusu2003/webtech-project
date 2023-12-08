<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <style>
      label {
      padding: 20px;
      display: inline-block;
    }
    input {
      padding: 5px;
    }
    #form {
      background:lavender;
       margin-top: 100px;
      width: 340px;
      height: 300px;
      /* border-radius: 1rem; */
      box-shadow: 0rem 0rem 1rem 1rem lightgray;
      padding: 30px;
      border-radius: 20px;
      border: 2px solid black;
    }
    #but {
      border-radius: 15px;
      border: 1px solid #09e783;
      padding: 7px;
      margin-left: 3px;
      background-color: white;
      font-size: 15px;

    }
    #but:hover {
      background-color: forestgreen;
      color: white;
    }
   #head {
      text-transform: capitalize;
      color: darkblue;
      margin-top: 10px;
    }
    body {
      background-image: url("images/background_template.jpg");
     
    }
    #create{
      margin-top:100%;
    }
  </style>
</head>
<body>
  <br>
<h2><marquee style="color:darkred ">This Page is Only For Staff's Use</marquee></h2>
  <center>


    <form id='form' method="post" enctype="multipart/form-data">
      <h1 id='head'>Login</h1>
      <label id='l1'>UserName</label>
      <input type="text" name="user" required><br><br>
      <label>Password</label>
      <input type="password" name="code" required><br><br>
      <button id='but' name="submit" autocomplete="off">submit</button><br><br>
      <a href="http://localhost/project/createnew.php" style="text-decoration: none;" id='create'>Create Account</a>

    </form>


  </center>


  <?php

  if (isset($_POST['submit'])) {

    $username = $_POST['user'];
    $password = $_POST['code'];

    $con = mysqli_connect("localhost:3306", "root", "", "schoolsite");
    $sql = "select username,password from users where username='$username' and password='$password'";

    $result = mysqli_query($con, $sql);
    $c = mysqli_num_rows($result);

    if ($c > 0) {

      echo "<h5 style=text-align:center> Login Successful </h5>";
        session_start();
        $_SESSION['user'] = $username;
        echo "<script>
            window.location.assign('index1.php');
            alert('Login Successfull');
            </script>";
    } else {
      echo "<h5 style=text-align:center> Login Not Successful </h5>
        <script>alert('check the entered details')</script>";
    }
  }
  ?>
</body>
</html>