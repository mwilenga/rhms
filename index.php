<?php
  require_once('login.php');

?>
<html>
<head>
<link href="css/mystyle.css" rel="stylesheet">
<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="login-page">
<center><h3>RHMS | Please, login </h3></center>
  <div class="form">
  <center>
  <?php if(isset($error_sms)){echo $error_sms; }?>
  </center>
    <form class="register-form" >
      <input type="text" placeholder="name" required/>
      <input type="password" name = "password" required/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" action="" method="POST">
      <input type="text" name = "username" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button name = "submit" type="submit">login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript">
  $(function(){
    $('.flush').delay(5000).fadeOut();
  });
</script>
</body>
</html>