<?php
if (isset($_POST['submit'])) {
  extract($_POST);
  $servername = "localhost ";
  $username   = "root";
  $password   = "";
  $dbname     = "crmdb";
 
  $firstName = $_POST['name'];
  $familly = $_POST['familly'];
  $father_name = $_POST['father_name'];
  $cod_meli = $_POST['cod_meli'];
  $mobile = $_POST['mobile'];
  $phone = $_POST['phone'];
  $birthday = $_POST['birthday'];
  $course_cod = $_POST['course_cod'];
  $course_name = $_POST['course_name'];
}
$con = mysqli_connect("localhost","root","","crmdb");
// Check connection
if (mysqli_connect_errno())
{
   echo "به دلیل مشکل زیر، اتصال برقرار نشد : <br />" . mysqli_connect_error();
}

mysqli_query($con,"SET NAMES 'utf8'");
mysqli_query($con,"SET CHARACTER SET 'utf8'");
mysqli_query($con,"SET character_set_connection = 'utf8'");

mysqli_select_db($con,"crmdb");

$sql="INSERT INTO `tbl_karamoozteh` (`id`, `name`, `familly`, `father_name`, `cod_meli`, `mobile`, `phone`, `birthday`, `seatime`, `address`, `course_cod`, `course_name`) VALUES (NULL, '$_POST[name]', '$_POST[familly]', '$_POST[father_name]', '$_POST[cod_meli]', '$_POST[mobile]', '$_POST[phone]', '$_POST[birthday]', '$_POST[seatime]', '$_POST[address]', '$_POST[course_cod]', '$_POST[course_name]')";

if (!mysqli_query($con,$sql))
   {
   die('Error: ' . mysqli_error($con));
   }
 echo '<script>  alert("کارآموز با موفقیت ثبت گردید "); window.location.href="register-user.php"; </script>';
 
 mysqli_close($con);

 ?>
 
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crmdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM tbl_karamoozteh";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>