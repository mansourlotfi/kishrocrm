<?php  //Start the Session
session_start();
require('php_assets/connection.php');
include('php_assets/function.php');





?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  
  <title> داشبورد مدیریت تماس </title>
  
  <!-- chosen material -->


<link href="chz/style.css" rel="stylesheet" />
<link href="chz/chosen.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.js"></script>
<script src="chz/chosen.jquery.js"></script>

<script type="text/javascript">
 $(document).ready(function () {
  $('.chosen-select').chosen();
  });
</script>


<!-- chosen material -->	

  
</head>


<body>


  <?php include "php_assets/menu.php"; ?>



  <header>
    <ul class="dropdown-content" id="user_dropdown">
      <li><a class="indigo-text" href="#!">پروفایل</a></li>
      <li><a class="indigo-text" href="#!">خروج</a></li>
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

<div class="wrapper">
 <div> <h1>ثبت کارآموز جدید</h1>
  </div>
  <br>
  <br>
  
  <form class="form" method="post" action="php_assets/submit_register.php">
    <input type="text" name="name" class="name" placeholder="نام">
   	<input type="text" name="familly" class="familly" placeholder="نام خانوادگی"><br>
 	<input type="text" name="father_name" class="father_name" placeholder="نام پدر">
    <input type="text" name="cod_meli" class="cod_meli" placeholder="کد ملی"><br>
	<input type="text" name="mobile" class="mobile" placeholder="تلفن همراه">
	<input type="text" name="phone" class="phone" placeholder="تلفن ثابت"><br>
	<input type="text" name="birthday" class="birthdate" placeholder="تاریخ تولد">
	<select name="seatime" class="seatime" placeholder="سابقه دریایی">
	<option value="0">سابقه دریایی ندارد</option>
	<option value="1">سابقه دریایی دارد</option>
	</select>
<br>
	<input type="text" name="address" class="adress" placeholder="آدرس" style=width:550px;height:50px;><br>

نام دوره	<select name="course_name[]"  data-placeholder="نام دوره" class="chosen-select" multiple tabindex="6">

		<?php
		$sql = "SELECT * FROM `tbl_courses`";
		$result = mysqli_query($con,$sql);
		if ($con->query($sql) == TRUE)
		{
			while($row = mysqli_fetch_array($result))
			{
				echo "<option> ".$row['course_names']." </option>";
				
			}
		}

		?>

	</select>
<br>
<br>
    <input type="submit" class="submit" value="ثبت کار آموز" >
  </form>
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
  </main>

  <footer class="indigo page-footer">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h5 class="white-text">نسخه آزمایشی</h5>
          <ul id='credits'>
            <li>
              تمامی حقوق این سایت متعلق به شرکت <a style='color:white;' href="http://kishroabi.com/fa" title="کیش رو آبی">کیش رو آبی</a> می باشد </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer-copyright">
      <div class="container">
         <span>ساخته شده توسط <a style='font-weight: bold;color:black;' href="http://kishroit.ir" target="_blank">کیش رو آیتی</a> بهبود یافته برای مرورگرهای فایرفاکس و کروم</span>
      </div>
    </div>
  </footer>

</body>

</html>


    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel='stylesheet' href='css/register-user/materialize.css'>
	<link rel="stylesheet" href="css/register-user/style.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/font/material-design-icons/Material-Design-Icons.woff'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- plus icon material -->
<!--	<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script> <!-- for main menu and the plus icon this is my problem with chosen-->	


	<script  src="js/register-user/materialize.js"></script>
	<script  src="js/register-user/index.js"></script>





</body>

</html>
