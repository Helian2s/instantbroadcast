<?php
    header('Content-Type: text/html; charset=utf-8');
    session_start();
    set_time_limit(0);
    
    require_once("config_class.php");
    require_once("database_class.php");
    require_once("WhatsAPI-master/src/whatsprot.class.php");
    require_once("WhatsAPI-master/examples/bulk.php");
    require_once("sent_message.php");
    require_once("log.php");
    
    $mysqli = db::getDBO();
    
    $counter = $mysqli->query("SELECT COUNT(*) AS id FROM mobile_number");
    $num = $counter->fetch_assoc();
    $count = $num["id"];

  if(isset($_POST['send'])) {
        if (!empty($_POST['text'])) {
            $text = $_POST['text'];
            $c_number = $_POST['col'];
            $sel_num=$_POST['sel_num'];

            $new2 = $mysqli->query("SELECT * FROM sender WHERE number='$sel_num' LIMIT 1");
            $rows2 = $new2->fetch_assoc();
            $timeout=$rows2['pause'];
           
            $number=$rows2['number'];
            $id=$rows2['identity'];
            $password=$rows2['password'];
            
            $new = $mysqli->query("SELECT * FROM mobile_number LIMIT ".$c_number."");
    	    $rows = $new->fetch_assoc();
	    $contacts = array();
	
	    do {
	        $contacts[] = $rows["mobile_number"];
	    } 
	    while($rows = $new->fetch_assoc());
            
            $x=$rows2['plus'];
            $y=$rows2['min'];
                
            $w = new WhatsProt($number, $id, $nickname = "WhatsApp", $debug = true);
            $w->connect();
            $w->loginWithPassword($password);
            for($i = 0; $i < count($contacts); $i++) {
                echo "-------------------------".$i."--------------------------------------<br>";
                
                $y = count($contacts) - $i;
                $mysqli->query("UPDATE sender SET min='$y' WHERE number='".$rows2['number']."' ");
                $w->sendMessage($contacts[$i], $text);
                $x=$x+1;
                $new4 = $mysqli->query("UPDATE sender SET plus='$x', min='".($y-1)."' WHERE number='".$rows2['number']."' ");
                    
                $mes="Sent  message to ".$contacts[$i]."  from ".$rows2['number'];
                logdoc($mes);
                //$w->sendGetRequestLastSeen($contacts[$i]);
                sleep($timeout);
            }
            //$w->sendGetRequestLastSeen($target);
        }  
    }

?>