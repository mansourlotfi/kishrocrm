 <?php 
 session_start();
 include 'connection.php';
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
  $seatime = $_POST['seatime'];
  $address = $_POST['address'];
  $cnames = implode("|", $_POST['course_name']);
  $branch = $_SESSION['branch'];
  list($gy,$gm,$gd)=explode('-',date('Y-n-d'));
  $j_date_string=gregorian_to_jalali($gy,$gm,$gd,'/'); //خروجی رشته

/*
    $stmt=$connect->prepare("INSERT INTO course (Cname)
                        VALUES (:Cnames)");

    $stmt->bindParam(':Cnames', $cnames);
    $stmt->execute();
    

*/

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
$sql = "INSERT INTO `tbl_karamoozteh` (`id`, `name`, `familly`, `father_name`, `cod_meli`, `mobile`, `phone`, `birthday`, `seatime`, `address`, `course_name`, `branch`, `record_date`) VALUES (NULL, '$_POST[name]', '$_POST[familly]', '$_POST[father_name]', '$_POST[cod_meli]', '$_POST[mobile]', '$_POST[phone]', '$_POST[birthday]', '$_POST[seatime]', '$_POST[address]', '$cnames', '$branch', '$j_date_string');";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
	header("Location: ../view-user.php");

} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close();






















function gregorian_to_jalali($gy,$gm,$gd,$mod=''){
 $g_d_m=array(0,31,59,90,120,151,181,212,243,273,304,334);
 if($gy>1600){
  $jy=979;
  $gy-=1600;
 }else{
  $jy=0;
  $gy-=621;
 }
 $gy2=($gm>2)?($gy+1):$gy;
 $days=(365*$gy) +((int)(($gy2+3)/4)) -((int)(($gy2+99)/100)) +((int)(($gy2+399)/400)) -80 +$gd +$g_d_m[$gm-1];
 $jy+=33*((int)($days/12053)); 
 $days%=12053;
 $jy+=4*((int)($days/1461));
 $days%=1461;
 if($days > 365){
  $jy+=(int)(($days-1)/365);
  $days=($days-1)%365;
 }
 $jm=($days < 186)?1+(int)($days/31):7+(int)(($days-186)/30);
 $jd=1+(($days < 186)?($days%31):(($days-186)%30));
 return($mod=='')?array($jy,$jm,$jd):$jy.$mod.$jm.$mod.$jd;
}

?>