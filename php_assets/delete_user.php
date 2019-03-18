 <?php include 'connection.php';
  
  echo $id = $_GET['act'];
  
  /*
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
$sql = "INSERT INTO `tbl_karamooz` (`id`, `name`, `familly`, `father_name`, `cod_meli`, `mobile`, `phone`, `birthday`, `seatime`, `address`, `course_cod`, `course_name`) VALUES (NULL, '$_POST[name]', '$_POST[familly]', '$_POST[father_name]', '$_POST[cod_meli]', '$_POST[mobile]', '$_POST[phone]', '$_POST[birthday]', '$_POST[seatime]', '$_POST[address]', '$_POST[course_cod]', '$_POST[course_name]');";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close();*/
?>