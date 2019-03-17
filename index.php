<?php  //Start the Session
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="rtl" lang="ar">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>KISHROABI CRM</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

 <!-- <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Comfortaa:400,700'>-->

      <link rel="stylesheet" href="css/login/style.css">

  
</head>

<body>



<div class="container">
  <div id="login" class="login">
    <div class="login-icon-field">
	<img src="images/logo.png" alt="کیش رو آبی" class="center">
	
      
      </svg>
    </div>
	<form method="POST" action="php_assets/crm_login.php">
    <div class="login-form">
      <div class="username-row row">
        <label for="username_input">
        <svg version="1.1" class="user-icon" x="0px" y="0px"
        viewBox="-255 347 100 100" xml:space="preserve" height="36px" width="30px">
          <path class="user-path" d="
          M-203.7,350.3c-6.8,0-12.4,6.2-12.4,13.8c0,4.5,2.4,8.6,5.4,11.1c0,0,2.2,1.6,1.9,3.7c-0.2,1.3-1.7,2.8-2.4,2.8c-0.7,0-6.2,0-6.2,0
          c-6.8,0-12.3,5.6-12.3,12.3v2.9v14.6c0,0.8,0.7,1.5,1.5,1.5h10.5h1h13.1h13.1h1h10.6c0.8,0,1.5-0.7,1.5-1.5v-14.6v-2.9
          c0-6.8-5.6-12.3-12.3-12.3c0,0-5.5,0-6.2,0c-0.8,0-2.3-1.6-2.4-2.8c-0.4-2.1,1.9-3.7,1.9-3.7c2.9-2.5,5.4-6.5,5.4-11.1
          C-191.3,356.5-196.9,350.3-203.7,350.3L-203.7,350.3z"/>
        </svg>
        </label>
		
        <input name="username" type="text" id="username_input" class="username-input" placeholder="نام کاربری" required />
      </div>
      <div class="password-row row">
        <label for="password_input">
        <svg version="1.1" class="password-icon" x="0px" y="0px"
        viewBox="-255 347 100 100" height="36px" width="30px">
          <path class="key-path" d="M-191.5,347.8c-11.9,0-21.6,9.7-21.6,21.6c0,4,1.1,7.8,3.1,11.1l-26.5,26.2l-0.9,10h10.6l3.8-5.7l6.1-1.1
          l1.6-6.7l7.1-0.3l0.6-7.2l7.2-6.6c2.8,1.3,5.8,2,9.1,2c11.9,0,21.6-9.7,21.6-21.6C-169.9,357.4-179.6,347.8-191.5,347.8z"/>
        </svg>
        </label>
        <input name="password" type="password" id="password_input" class="password-input" class="input" placeholder="رمز عبور" required />
      </div>
    </div>
    <div class="call-to-action">
       
      <button id="login-button" type="submit">ورود</button>
	  
	  
     <p class="footerfont"><b> نسخه پیش نمایش نرم افزار تحت وب مدیریت ارتباط با مشتری شرکت کیش رو آبی</b><br> <b> <a>گروه شرکت های کیش رو آبی &#169 </a> </b></p>
	 <p> <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?> </p>
    </div>
	</form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/velocity/1.2.2/velocity.min.js'></script>
<script src='https://cdn.jsdelivr.net/velocity/1.2.2/velocity.ui.min.js'></script>

  

    <script  src="js/login/index.js"></script>




</body>

</html>