<?php 
ob_start(); 
require 'config.php';


$name = $_POST['name'];
$email = $_POST['email'];
$adress = $_POST['adress'];
$num = $_POST['num'];
$unv= $_POST['unv'];
$gender = $_POST['gender'];

$query = mysqli_query($con, "INSERT INTO `course`(`id`, `name`, `email`, `number`,`adress`,`unv`,`gender`) VALUES ('','$name','$email','$num','$adress','$unv','$gender')");
echo '<script>alert("Thank You..! Data has been registered successfully"); location.replace(document.referrer);</script>';



/*$query1 = "SELECT * FROM `staff` WHERE email = '$email' AND password = '$password'";
$result_query1 = mysqli_query($conn, $query1);
$count_query1 = mysqli_num_rows($result_query1);
/*if ($count_query1 != 0) 
	{
    header("Location: controller/staff.php");
	exit();
	} 
else {
		    $query2 = "SELECT * FROM `admin` WHERE email = '$email' AND password = '$password'";
			$result_query2 = mysqli_query($conn, $query2);
			$count_query2 = mysqli_num_rows($result_query2);
			$count_query2 = mysqli_num_rows($result_query2);
			if ($count_query2!=0) 
			{
		   		header("Location: controller/admin.php");
				exit();
		   	} 		
		   	else
		   	 {
		   	 	echo '<script>alert("Incorrect Credentials Entered"); location.replace(document.referrer);</script>';

			 }

	}

//echo $email;
//echo '</br>';
//echo $password;



ob_end_flush();*/
?>