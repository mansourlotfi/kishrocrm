<?php  //Start the Session
session_start();
require('php_assets/connection.php');
include('php_assets/function.php');
if(isset($_SESSION['username']))
{	
$today = gdate();
$thismonth = gmonth();

$sql = "SELECT * FROM `tbl_karamooz` WHERE `branch` = 'tehran' AND `record_date` = '$today'";
$sql2 = "SELECT * FROM `tbl_karamooz` WHERE `branch` = 'bandarabbas' AND `record_date` = '$today'";
$sql3 = "SELECT * FROM `tbl_karamooz` WHERE `branch` = 'khoramshahr' AND `record_date` = '$today'";
$sql4 = "SELECT * FROM `tbl_karamooz` WHERE `branch` = 'tehran' AND `record_date` = '$thismonth'";
$sql5 = "SELECT * FROM `tbl_karamooz` WHERE `branch` = 'bandarabbas' AND `record_date` = '$thismonth'";
$sql6 = "SELECT * FROM `tbl_karamooz` WHERE `branch` = 'khoramshahr' AND `record_date` = '$thismonth'";

 //this day tehran
if($con->query($sql) == TRUE) 
	{
		$query = $con->query($sql);
		$count = mysqli_num_rows($query);
	}
	//this day bandarabbas
	if($con->query($sql2) == TRUE) 
	{
		$query2 = $con->query($sql2);
		$count2 = mysqli_num_rows($query2);
	}
	//this day khoramshahr
	if($con->query($sql3) == TRUE) 
	{
		$query3 = $con->query($sql3);
		$count3 = mysqli_num_rows($query3);
	}
	//this month tehran 
	if($con->query($sql4) == TRUE) 
	{
		$query4 = $con->query($sql4);
		$count4 = mysqli_num_rows($query4);
	}
	//this month bandarabbas
	if($con->query($sql5) == TRUE) 
	{
		$query5 = $con->query($sql5);
		$count5 = mysqli_num_rows($query5);
	}
	//this month khoramshahr
	if($con->query($sql6) == TRUE) 
	{
		$query6 = $con->query($sql6);
		$count6 = mysqli_num_rows($query6);
	}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  
  <title> داشبورد مدیریت تماس </title>
  
  
  <link rel='stylesheet' href='css/dashboard/materialize.css'>
   <link rel="stylesheet" href="css/dashboard/style.css">
   
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/font/material-design-icons/Material-Design-Icons.woff'>

     

  
</head>

<body>

  <head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

  <?php include "php_assets/menu.php"; ?>

  <header>
    <ul class="dropdown-content" id="user_dropdown">
      <li><a class="indigo-text" href="#!">...</a></li>
      <li><a class="indigo-text" href="php_assets/crm_logout.php">خروج</a></li>
    </ul>

    <nav class="indigo" role="navigation">
      <div class="nav-wrapper">
        <ul class="right hide-on-med-and-down">
          <li>
            <a class='right dropdown-button' href='' data-activates='user_dropdown'>
				<img class="user-images" src="images/users/boss.jpg" />
				
			</a>
          </li>
        </ul>

        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      </div>
    </nav>

  </header>

  <main>
   
   
   <form class="searchform cf"  method="post" action="">
  <input type="text" placeholder="شماره ملی را وارد کنید" name="keyword">
  <button type="submit" name="btnsearch">Search</button>
</form>



<span>
  <button class="addbutton" type="submit"> <b> </b> </button>
  <input class="addbutton" type="button" onclick="location.href='register-user.php';" value="Add Contact" />
</span>

   <?php
   /*
     if ($con) {
echo "conected";
	 }
 */
   if (!$con) {
     die("Connection failed: " . mysqli_connect_error());
   }
	if (isset($_post['btnsearch']))
	{
		$keyword = $_post['keyword'];
		$sql= "SELECT * FROM `tbl_karamooz` WHERE `cod_meli` = '$keyword'";
		$query = mysqli_query($con,$sql);
	if (mysqli_num_rows($query) < 1)
	{
		echo "رکوردی یافت نشد";
	}
	else
	{
		while ($row = mysqli_fetch_array($query)){
  $firstName = $row['name'];
  $familly = $row['familly'];
  $father_name = $row['father_name'];
  $cod_meli = $row['cod_meli'];
  $mobile = $row['mobile'];
  $phone = $row['phone'];
  $birthday = $row['birthday'];
  $seatime = $row['seatime'];
  $address = $row['address'];
  $cnames = $row['course_name'];
  $branch = $row['branch'];
			
			
	echo "<table border='1' >
<tr >
<th>نام</th>
<th>نام خانوادگی</th>
<th>نام پدر</th>
<th>کد ملی</th>
<th>همراه</th>
<th>تلفن</th>
<th>تاریخ تولد</th>
<th>سابقه دریایی</th>
<th>آدرس</th>
<th>نام دوره</th>
<th>delete</th>

</tr>";
		
		echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['familly'] . "</td>";
echo "<td>" . $row['father_name'] . "</td>";
echo "<td>" . $row['cod_meli'] . "</td>";
echo "<td>" . $row['mobile'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['birthday'] . "</td>";
echo "<td>" . $row['seatime'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['course_name'] . "</td>";
echo "<td> <a href='php_assets/delete_user.php?act=".$row['id']."'> delete </a> </td>";


echo "</tr>";
}
echo "</table>";
		}
	}
?>
   
   
   


	
	

    <div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
      <a class="btn-floating btn-large pink waves-effect waves-light">
        <i class="large material-icons">add</i>
      </a>

      <ul>
        <li>
          <a class="btn-floating red"><i class="material-icons">note_add</i></a>
          <a href="" class="btn-floating fab-tip">Add a note</a>
        </li>

        <li>
          <a class="btn-floating yellow darken-1"><i class="material-icons">add_a_photo</i></a>
          <a href="" class="btn-floating fab-tip">Add a photo</a>
        </li>

        <li>
          <a class="btn-floating green"><i class="material-icons">alarm_add</i></a>
          <a href="" class="btn-floating fab-tip">Add an alarm</a>
        </li>

        <li>
          <a class="btn-floating blue"><i class="material-icons">vpn_key</i></a>
          <a href="" class="btn-floating fab-tip">Add a master password</a>
        </li>
      </ul>
    </div>
	
<br>
<br>
<br>
	<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
	
				<div class="container" >
		<h1>نمودار مقایسه تعداد رکورد ثبت شده شعب در روز جاری</h1>
		<div class="graph">
			<div class="labels">
				<span class="label">تهران </span><br>
				<span class="label">بندرعباس</span><br>
				<span class="label">خرمشهر</span>

			</div>
			<div class="bars">
				<span class="bar red" style="width:<?php echo $count; ?>%;"></span>
				<span class="bar blue" style="width:<?php echo $count2; ?>%;"></span>
				<span class="bar green" style="width:<?php echo $count3; ?>%;"></span>

				<div class="lines">
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
				</div>
			</div>
			<div class="numbers">
				<span class="number">0</span>
				<span class="number">20</span>
				<span class="number">40</span>
				<span class="number">60</span>
				<span class="number">80</span>
				<span class="number">100</span>
			</div>
		</div>
	</div>
	
	
	
<br>
<br>
<br>



	
	
  </main>

  <footer class="indigo page-footer">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h5 class="white-text">نسخه آزمایشی</h5>
          <ul id='credits'>
            <li>
              تمامی حقوق این سایت متعلق به شرکت <a href="http://kishroabi.com/fa" title="کیش رو آبی">کیش رو آبی</a> می باشد </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
         <span>Made By <a style='font-weight: bold;' href="http://kishroit.ir" target="_blank">KishroIT</a></span>
      </div>
    </div>
  </footer>
</body>

</html>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script  src="js/dashboard/materialize.js"></script>

    <script  src="js/dashboard/index.js"></script>
	 




</body>

</html>
<?php
}
else 
{
	echo "Access Denied. user or password is incorrect";
}
?>






