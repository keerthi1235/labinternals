<?php 
include "connect.php";
session_start();
if(isset($_SESSION['email'])) 
    header('location:index.php');

    if(isset($_POST['sub'])) {
        $name=$_POST['name'];
        $password=$_POST['pass'];
        $qry = "SELECT * FROM `registers` WHERE  `user_name`='$Name' AND `password`='$pass';";
        $sql = mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        if(mysqli_num_rows($sql)>0) {
            $row=mysqli_fetch_assoc($sql);
            $_SESSION["user_id"]=$row['user_id'];
            $_SESSION["user_name"] = $row['user_name'];
            $_SESSION["email"] = $row['user_email'];
            header('location:index.php');
        } else {
            $warning = "Invalid login";
        }
    
    }
?>
<html>
<head><title>Login Page</title>
</head>
<link rel="stylsheet" href="txt.css">
<body>
<h3> Login Page</h3>
<form>
name
<br><input type="text" name="user" size="20" value="" /><br>
Password
<br><input type="password" name="pwd" size="20" value="" /><br>
<br><input type="submit" value="Sign in" /><br>
</form>

</body>
</html>
