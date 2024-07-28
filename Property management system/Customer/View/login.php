<?php include "..\control\customerloginvalidation.php"  ?>
<!DOCTYPE html>
<html>
<head>

<title>Login Form </title>

</head>
<body>

<h1 align="Center">Customer Login</h1>
<form action="" method="post">
<tr>
<td>

<table>

<tr>

<h3> <a href="Registration.php">Registration</a></h3>
<h3><a href="..\..\admin\MainPage.php">Home</a></h3>
<br>
<td> Email :  </td>
<td><input type="text"  name="email"><?php echo  $Val_Email;?> </td>
</tr>


<tr>
<td>Password :  </td>
<td><input type="password"  name="password"><?php echo $Val_Password;  ?></td>
</tr>


<tr>
<td> <input type="submit" name="Login"> 
<input type="reset" name="Reset"></td>
<td>


</td>
</tr>
</table>

</form>




</body>
</html>