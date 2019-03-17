 <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname     = "crmdb";
 
 
 
  // Create connection
  $con = mysqli_connect($servername, $username, $password);
 
 
 
	mysqli_query($con,"SET NAMES 'utf8'");
	mysqli_query($con,"SET CHARACTER SET 'utf8'");
	mysqli_query($con,"SET character_set_connection = 'utf8'");
	mysqli_select_db($con,"crmdb");
	
	
	
  // Check connection
  if (!$con) {
     die("Connection failed: " . mysqli_connect_error());
   }
 // echo "Connected successfully";
?>