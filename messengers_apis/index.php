<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
include_once('index_work.php');
if (!isset($_SESSION['user'])) {

	header("Location: http://localhost/web/Wapp/enter.php");
	exit();
}
//echo $_SESSION['user'];
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
        <div class="span5">
          <div class="load">
                <p>Загрузка номеров из CSV в базу данных</p>  
                 <form method="post" enctype="multipart/form-data" action="<?php echo ' http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/upload_csv.php';?>">
                      <input type="file" name="send" id="" multiple>
                      <input type="submit" name="send_csv" id="" value="Load">
                </form>
             </div>
             <div class="sender">
                <h4>Новый отправитель</h4>  
                 <form method="post" enctype="multipart/form-data" action="<?php echo ' http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/senders.php';?>">
                        <p>Имя</p>
                        <input type="text" name="name" id="">
                        <p>Номер</p>  
                        <input type="text" name="number" id="">
                        <p>Идентефикатор</p>
                        <input type="text" name="id" id="">
                        <p>Пароль</p>  
                        <input type="text" name="password" id="">
                        <p>Пауза между отсылкой</p>
                        <input type="text" name="pause" id=""><br><br>
                        <input type="submit" name="add" id="" value="Add" class="btn btn-middle btn-success">
                </form>
             </div>
        </div>

        <div class="span7">
            
          <form action="" method="post" class="form-signin">
          <h5>Выбрать номер отправителя</h5>
           <select name="sel_num" id="sel2">
               <?php
                    $new1 = $mysqli->query("SELECT * FROM sender");
                    $rows1 = $new1->fetch_assoc();
                    echo '<option  value="Choose2">Выбери номер</option>';
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
           <span class="pause">Пауза</span>
            <input type="text" name="pause" id="pause" readonly value="" style='text-align: Right'>
            <span>с.</span>
            <p>Введи сообщение</p>
            <textarea name="text" id="" class="input-xxlarge" cols="30" rows="10"></textarea>  
            <p>Количество номеров за одну отправку</p>  
            <input type="text" name="col" id=""><br><br>
                
            <input type="submit" class="btn btn-large btn-primary send_m" name="send" id="">             
          </form>
          <p>Количество номеров в базе</p>  
            <input type="text" name="" id="" readonly value="<?php echo $count ?>">   
            <br>
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
                var x = $("#sel2").val();
                console.log(x);
                $("#pause").hide;
                    $.ajax({
                        type: "POST",
                        url: "ajax2.php",
                        data: {
                            number: x
                        },
                        success: function(data) {
                            dat=JSON.parse(data);
                            $("#pause").attr('value', dat[0]);
                            
                            console.log(data);
                        }                    
                    });
               
            });
        });
    </script>
  </body>
</html>