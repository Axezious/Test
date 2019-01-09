<?php

	include('db/dbconn.php');
	if (isset($_POST['signup']))
{
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$username=$_POST['username'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$query = $conn->query("SELECT * FROM `costumer` WHERE `email` = '$email'");
	$check = $query->num_rows;
		if($check == 1)
			{
				echo "<script>alert('EMAIL ALREADY EXIST')</script>";	 
			}
			
			else
				{
					$conn->query ("INSERT INTO costumer (firstname, lastname, username, address, city, phone, email, password)
					VALUES ('$firstname','$lastname','$username','$address','$city','$phone','$email', '$password')") 
					or die(mysqli_error());	
				}				
					
}
?>