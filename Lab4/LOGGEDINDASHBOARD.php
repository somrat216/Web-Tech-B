<!DOCTYPE HTML>  
<html>
<head>
  <title>NDC Company</title>
  <h1 ><img src="companylogo1.jpg" alt="company" width="200" height="200"></h1>
</head>
<body> 
	<table align="center">
	<tr>
    <td> Logged in <a href="VIEW PROFILE.php"> bob </a></td>
    <td><a href="LOGOUT.php"> Logout </a></td>
    </tr>
</table>


<?php
echo "Welcome Bob";
?>
<table align="center">
<tr>
<td><a href="LOGGED IN DASHBOARD.php"> Dashboard </a></td><br><br>
<td><a href="VIEW PROFILE.php"> View Profile </a></td><br><br>
<td><a href="EDIT PROFILE.php"> Edit Profile </a></td><br><br>
<td><a href="CHANGE PROFILE PICTURE.php"> Change Profile Picture </a></td><br><br>
<td><a href="CHANGE PASSWORD.php"> Change Password </a></td><br><br>
<td><a href="LOGOUT.php"> Logout </a></td><br><br>
</tr>
</table>
<?php include 'footer.php';?>
 </body>
</html>
