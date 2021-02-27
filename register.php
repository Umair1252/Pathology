<?php
include_once 'database.php';
if(isset($_POST['submit']))
{	 
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
     $gender = $_POST['gender'];
     $dob = $_POST['dob'];
     $phone = $_POST['phone'];
     $address = $_POST['address'];
     $username = $_POST['username'];
     $email = $_POST['email'];
     $password = $_POST['password'];
    
    
	 $sql = "INSERT INTO info (first_name,last_name,gender,address,username,email,password,phone,dob) VALUES ('$first_name','$last_name','$gender','$address','$username','$email','$password','$phone','$dob')";
     
     if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
		header("Location:login.html");
	 }
	  else {
		echo "Error: " . $sql . "
     " . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>