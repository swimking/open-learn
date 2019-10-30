<?php 

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$course = $_POST["course"];
$dob = $_POST["dob"];
$experience = $_POST["experience"];
$skills = $_POST["skills"];
$email = $_POST["email"];
$password = $_POST["password"];
$contact =$_POST["contact"];


$conn = mysqli_connect("localhost", "root","", "openlearn");
$query = "INSERT INTO mentors(fname, lname,  contact, dob, email, password,course, skills, experience) VALUES('$fname', '$lname', '$contact', '$dob', '$email', '$password', 
'$course', '$skills', '$experience' )";

$result = $conn-> query($query);
if(!$result){
	echo "there are some cute errors".mysqli_error($conn);
}
else
{
	header(
		'Location:../dashcov.php');
}
?>