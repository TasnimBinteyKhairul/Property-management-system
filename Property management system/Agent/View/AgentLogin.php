<?php   include "..\Control\AgentLoginValidation.php" ; 

if(isset($_SESSION["Email"])){

    header("location: Agent.php");
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Login Form </title>

</head>
<body>


<form action="" method="post">
<tr>
<td>
<u><h1 align="Center">Agent Login</h1></u>
<fieldset>
<table>
<font color="red"> *Required

<tr>
<td><b> Usrename :  </td></b>
<td><input type="text" placeholder="Enter Username" name="user"> <?php echo $validateemail; ?>*</td>
</tr>

<tr>
<td><b>Password :  </td></b>
<td><input type="password" placeholder="Enter Password" name="password"><?php echo $validatepassword; ?>*</td>
</tr>
<td>
<br>
</td>
<tr>
<td> <input type="submit" name="Login"> 
<input type="reset" name="Reset">
</td>

</tr>

</table>
<h4 align="Center"> <a href="AgentRegistration.php">Registration</a></h4>
<h4 align='Center'><a href="MainPage.php">Home</a></h4>
</fieldset>
</form>
</body>
</html>