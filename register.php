<?php 
include "connect.php";
session_start();

if(isset($_POST['sub'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['pass'];
		$qry1="select * from registers where `user_name`='$name' or `user_email`='$email'";
		$sql=mysqli_query($conn,$qry1);
		if(mysqli_num_rows($sql)>0) {
			$warning = "You have already registered";
		}
		else{
        $qry = "INSERT INTO `registers` ( `user_name`, `user_email`,`phoneno` `password`) VALUES ('$name', '$email', '$phoneno' $pass')";
        mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        header('location:login.php');
		}
    }
?>
<!DOCTYPE html>
<html>
<body>
<form>
Name
<br><input type="text" name="name"><br>
E-mail
<br><input type="text" name="email"><br>
phone no
<br><input type="text" name="phone no"><br>
password
<br><input type="text" name="password"><br>
<input type="submit">
</form>
</body>
</html>
