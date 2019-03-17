<?php  //Start the Session
session_start();
 require('connection.php');

//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['username']) and isset($_POST['password']))
{
//3.1.1 Assigning posted values to variables.
 $username = $_POST['username'];
 $password = $_POST['password'];
 
 $sql = "SELECT * FROM `tbl_users` WHERE `user` = '$username' AND `password` = '$password'";
 
if($con->query($sql) == TRUE) 
	{
		$query = $con->query($sql);
		$count = mysqli_num_rows($query);
		if($count == 1)
		{
			$_SESSION['username'] = $username; 
			
			
			$result = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($result);
			$branch = $row['branch'];
			
			$_SESSION['branch'] = $branch;
			header("Location: ../dashboard.php");
		}
		else
		{
			echo "access denied";
		}

		
	}
else 
	{
		echo "Error: " . $sql . "<br>" . $con->error;
	}
$con->close();

}
?>