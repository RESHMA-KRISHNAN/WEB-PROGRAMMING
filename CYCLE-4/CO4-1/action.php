<html>
<head>
<title>Registration Form</title>
</head>
<body>
<center>
<br><br>
<?php
foreach($_POST as $key=>$value) {
	if(empty($_POST[$key])) {
		$message = ucwords($key) . " field is required";
		break;
	}
}
echo isset($gender),isset($terms);
if(isset($message)){
	print( "<script>alert('".$message."');window.location.href='RegistrationForm.php';</script>");
}
/* Password Matching Validation */
else if($_POST['password'] != $_POST['confirm_password']){
$message = 'Passwords should be same<br>';
print( "<script>alert('".$message."');window.location.href='RegistrationForm.php';</script>");
}
/* Email Validation */
else if(!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
	$message = "Invalid UserEmail";
	print( "<script>alert('".$message."');window.location.href='RegistrationForm.php';</script>");
}
/* Validation to check if gender is selected */
else if(!isset($_POST['gender'])) {
	$message = " Gender field is required";
	print( "<script>alert('".$message."');window.location.href='RegistrationForm.php';</script>");
}
/* Validation to check if Terms and Conditions are accepted */
else if(!isset($_POST["terms"])) {
$message = "Accept Terms and conditions before submit";
print( "<script>alert('".$message."');window.location.href='RegistrationForm.php';</script>");
}
else{
print("<table width='700'><tr><th colspan=2>Registration Details</th></tr>");
print("<tr><td align='right'>User Name : </td><td>". $_POST["userName"] ."</td></tr>");
print("<tr><td align='right'>First Name : </td><td>". $_POST["firstName"] ."</td></tr>");
print("<tr><td align='right'>Last Name : </td><td>". $_POST["lastName"] ."</td></tr>");
print("<tr><td align='right'>Email : </td><td>". $_POST["userEmail"] ."</td></tr>");
print("<tr><td align='right'>Gender : </td><td>". $_POST["gender"] ."</td></tr>");
print("<tr><th colspan=2> </th></tr></table></body></html>");
}
?>

