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
    <div class="row">
      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">


          <div class="row">
           
		   
		    <div class="right card-title">
              <b>تعداد تماس شعبه ها در ماه جاری</b>
            </div>
          </div>
          <div class="row">
            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">assignment</i>
                <span class="indigo-text text-lighten-1"><h5>تهران : <?php echo $count4; ?></h5></span>
              </div>
            </a>

            <div class="col s1">&nbsp;</div>

            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">assignment</i>
                <span class="indigo-text text-lighten-1"><h5>بندرعباس : <?php echo $count5; ?> </h5></span>
              </div>
            </a>
			
			<div class="col s1">&nbsp;</div>

            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">assignment</i>
                <span class="indigo-text text-lighten-1"><h5>خرمشهر : <?php echo $count6; ?> </h5></span>
              </div>
            </a>
		   
		   		   
		   
		   
		   
			
			
          </div>
        </div>
      </div>

      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="right card-title">
              <b>تعداد تماس شعبه ها در روز جاری</b>
            </div>
          </div>
          <div class="row">
		     <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">assignment</i>
                <span class="indigo-text text-lighten-1"><h5>تهران : <?php echo $count; ?></h5></span>
              </div>
            </a>
		
            <div class="col s1">&nbsp;</div>

            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">assignment</i>
                <span class="indigo-text text-lighten-1"><h5>بندرعباس : <?php echo $count2; ?></h5></span>
              </div>
            </a>
			
			<div class="col s1">&nbsp;</div>

            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">assignment</i>
                <span class="indigo-text text-lighten-1"><h5>خرمشهر : <?php echo $count3; ?></h5></span>
              </div>
            </a>
			
			
          </div>
        </div>
      </div>
    </div>



	
	

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


				<div class="container" >
		<h1>نمودار مقایسه تعداد رکورد ثبت شده شعب در ماه جاری</h1>
		<div class="graph">
			<div class="labels">
				<span class="label">تهران </span><br>
				<span class="label">بندرعباس</span><br>
				<span class="label">خرمشهر</span>

			</div>
			<div class="bars">
				<span class="bar red" style="width:<?php echo $count4; ?>%;"></span>
				<span class="bar blue" style="width:<?php echo $count5; ?>%;"></span>
				<span class="bar green" style="width:<?php echo $count6; ?>%;"></span>

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






