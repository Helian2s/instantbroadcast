<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
include_once('index_work.php');

if (isset($_POST['login'])) {
	$name = htmlspecialchars(addslashes(trim($_POST['user_name'])));
    	$password = htmlspecialchars(addslashes(trim($_POST['user_password'])));
    	if (!empty($name) && !empty($password)) {
    		if (($name == Config::LOGIN) && ($password == Config::PASSWORD)) {
    			$_SESSION['user'] = $name;
                        header("Location: http://localhost/web/Wapp/index.php");
                        exit();
    		} else echo "<p class='err'>Вы ввели некоректные данные!<p>";
    	} else echo "<p class='err'>Заполните все поля!<p>";
}
?>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>WhatsUp-Messendger</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo dirname($_SERVER['PHP_SELF']);?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }      
    </style>
    <link href="<?php echo dirname($_SERVER['PHP_SELF']);?>/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo dirname($_SERVER['PHP_SELF']);?>/assets/css/main.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <!--<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">-->
  </head>

  <body>

    <div class="container">
      <div class="row">
      	<div class="span4"> </div>
        <div class="span4">
          <div class="for_form_enter">
          <form action="" method="post" class="form-signin1">
            <p>Введите логин:</p>
            <input type="text" name="user_name" id=""><br><br>
            <p>Введите пароль:</p>  
            <input type="password" name="user_password" id=""><br><br>
                
            <input type="submit" class="btn btn-large btn-primary" name="login" id="" value="Log In">             
          </form>
          </div>
        </div>
	<div class="span4"> </div>
      </div>     
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo dirname($_SERVER['PHP_SELF']);?>/assets/js/jquery.js"></script>   

  </body>
</html>