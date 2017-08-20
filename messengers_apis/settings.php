<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
include_once('index_work.php');
if (!isset($_SESSION['user'])) {
	header("Location: http://localhost/web/Wapp/enter.php");
}
?>
  <?php 
   
        if (isset($_POST['change'])){
            if(!empty($_POST['pause'])) {
                $sel_num=$_POST['sel_num'];
                $pause=trim(htmlspecialchars($_POST['pause']));
                $new3 = $mysqli->query("UPDATE sender SET pause='$pause' WHERE number='$sel_num'");
                
                require_once("log.php");
                $mes="Pause  for number ".$sel_num."  updated  to ".$pause;
                logdoc($mes);
            }
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

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Messenger</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="<?php echo ' http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);?>">Home</a></li>
              <li class="active"><a href="<?php echo ' http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/settings.php';?>">Настройки Отправителя</a></li>
              <li class="active"><a href="<?php echo ' http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/logout.php';?>">Выход</a></li>
              <!--<li><a href="#contact">Contact</a></li>-->
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="span4">
          <form method="post" class="form-signin">
              <h5>Выбрать номер отправителя</h5>
               <select name="sel_num" id="sel">
                  
                   <?php
                        $new1 = $mysqli->query("SELECT * FROM sender");
                        $rows1 = $new1->fetch_assoc();
                        echo '<option  value="Choose">Выбери номер</option>';
                        do {
                                $contacts1[] = $rows1["number"];
                            } 
                        while($rows1 = $new1->fetch_assoc());
                        foreach ($contacts1 as $items) 
                            {
                                echo '<option  value="'.$items.'">'.$items.'</option>';
                            }
                    ?>
               </select>
               <p>Изменить паузу между отсылкой</p>
                        <input type="text" name="pause" id=""><br><br>
                        <input type="submit" name="change" id="" value="change" class="btn btn-middle btn-success">
           </form>
        </div>

        <div class="span8">
            <h3>Статистика отправленных номеров</h3>
            <p>Количество успешных:      <input type="text" name="" id="plus" readonly value="" class="inp_st"></p>  
            <p>Количество неотправленных: <input type="text" name="" id="min" readonly value=""></p> 
        </div>

       
      </div>     
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo dirname($_SERVER['PHP_SELF']);?>/assets/js/jquery.js"></script>   
    <script type="text/javascript">
        $(document).ready(function() {
            
            $("select").click(function() {
                var x = $("#sel").val();
                console.log(x);
                
                    $.ajax({
                        type: "POST",
                        url: "ajax1.php",
                        data: {
                            number: x
                        },
                        success: function(data) {
                            dat=JSON.parse(data);
                            $("#plus").attr('value', dat[0]);
                            $("#min").attr('value', dat[1]);
                            console.log(data);
                        }                    
                    });
               
            });
        });
    </script>

  </body>

</html>