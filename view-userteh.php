<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  
  <title> داشبورد مدیریت تماس </title>
  <style>
table {
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: right;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #208676;
}
</style>
  
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
  
  

<?php
include 'php_assets/connection.php';
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM `tbl_karamoozteh` WHERE `branch` = 'tehran'");

echo "<table border='1' >
<tr>
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

while($row = mysqli_fetch_array($result))
{
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

mysqli_close($con);
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


    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel='stylesheet' href='css/register-user/materialize.css'>
	<link rel="stylesheet" href="css/register-user/style.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/font/material-design-icons/Material-Design-Icons.woff'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.css">

	<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script> 
	<script  src="js/register-user/materialize.js"></script>
	<script  src="js/register-user/index.js"></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.js"></script>	 
	<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
	





</html>
