<?php   include "..\Control\LoginValidation.php" ; 



if(isset($_SESSION["Name"])){

    header("location: Admin.php");
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Login Form </title>

</head>
<body>

<h1 align="Right">Admin Login</h1>
<form action="" method="post">
<tr>
<td>
<fieldset>

<table>
<tr>
<td> Email :  </td>
<td><input type="text" placeholder="Enter Email" name="email"> <?php echo $validateemail; ?> *</td>
</tr>


<tr>
<td>Password :  </td>
<td><input type="password" placeholder="Enter Password" name="password"><?php echo $validatepassword; ?>*</td>
</tr>


<tr>
<td> <input type="submit" name="Login"> 
<input type="reset" name="Reset"></td>
<td>
<h3> <a href="Registration.php">Registration</a></h3>
<td><h3><a href="..\MainPage.php">Home</a></h3></td>
<?php echo $loginInfo; ?>
</td>
</tr>
</table>

</fieldset>

</form>




</body>
</html>