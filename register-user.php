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
  <br>
  <br>
  
  <div class="search-div"> 
<form method="POST" action="?act=search">
  <input type="text" placeholder="شماره ملی را وارد کنید" name="keyword">
  <input type="submit" value="جستجو" />
</form>
</div>





   <?php
 
 if(isset($_GET['act']))
 {
	 $action = $_GET['act'];
	 if($action == "search")
	 {
		$keyword = $_POST['keyword'];
		$sql= "SELECT * FROM `tbl_karamooz` WHERE `cod_meli` = '$keyword'";
		$query = mysqli_query($con,$sql);
		if (mysqli_num_rows($query) < 1)
			{
				echo "<script> alert('رکوردی یافت نشد'); </script>";
			}
			else
				{
					echo "<div class='centertext'>";
					while ($row = mysqli_fetch_array($query))
					{
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
					echo "</div>";
					

				}
 }
 }


?>
<br> 

<div>
 <div> <h1>ثبت کارآموز جدید</h1>
  </div>

  
<div>
  <form class="form" method="post" action="php_assets/submit_register.php">
    <input type="text" name="name" class="name" placeholder="نام">
   	<input type="text" name="familly" class="familly" placeholder="نام خانوادگی"><br>
 	<input type="text" name="father_name" class="father_name" placeholder="نام پدر">
    <input type="text" name="cod_meli" class="cod_meli" placeholder="کد ملی"><br>
	<input type="text" name="mobile" class="mobile" placeholder="تلفن همراه">
	<input type="text" name="phone" class="phone" placeholder="تلفن ثابت"><br>
	<input type="text" name="birthday" class="birthdate" placeholder="تاریخ تولد">
	<select name="seatime" class="seatime" placeholder="سابقه دریایی">
	<option value="0" selected disabled >سابقه دریایی </option>
	<option value="3">3 ماه</option>
	<option value="6">6 ماه</option>
	<option value="12">12 ماه</option>
	<option value="18">18 ماه</option>
	<option value="24">24 ماه</option>
	<option value="36">36 ماه</option>
	<option value="36">ندارد</option>
	

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
<div>
    <input type="submit" class="submit" value="ثبت کار آموز" >
</div>
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
