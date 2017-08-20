<?php

    header('Content-Type: text/html; charset=utf-8');

    set_time_limit(0);
       
    require_once("config_class.php");
    require_once("database_class.php");
    require_once("src/whatsprot.class.php");
    require_once("src/protocol.class.php");
    
    $mysqli = db::getDBO();
    
    $new = $mysqli->query("SELECT * FROM sender WHERE is_active='1'");
    $rows = $new->fetch_assoc();
    $sender = array();

    do {
        $sender[] = $rows;
    } 
    while($rows = $new->fetch_assoc());
    
    $new3 = $mysqli->query("SELECT * FROM message_queue");
    $rows3 = $new3->fetch_assoc();
    $recipient = array();

    do {
        $recipient[] = $rows3;
    } 
    while($rows3 = $new3->fetch_assoc());
    
    $new2 = $mysqli->query("SELECT * FROM result WHERE is_active='1' LIMIT 1");
    $rows2 = $new2->fetch_assoc();
    
    if (count($sender) > 0 && $rows2['is_active'] && $rows2['is_sent']) {
        for($j = 0; $j < count($sender); $j++) {
            if (!$sender[$j]['is_logged_in'] && !$sender[$j]['is_banned']) {
                $x = $rows2['is_received_by_receipient'];
                $y = $rows2['is_read_by_receipient'];
                $w = new WhatsProt($sender[$j]['phone_number'], $sender[$j]['identity'], "WhatsApp", true);
                $w->connect();
                $w->loginWithPassword($sender[$j]['password']);
                $id = $sender[$j]['id'];
                $mysqli->query("UPDATE sender SET is_logged_in='1' WHERE id='".$id."'");
                $id_msg = $w->createMsgId("message");
                $from = $w->waitForServer1($id_msg);
                foreach($from as $key => $value) {
                    if ($value == '') unset($from[$key]);
                }
                print_r($from);
                $from_new = array_count_values($from);
                print_r($from_new);
                foreach($from_new as $key => $value) {
                    if ($value == 1) {
                        $new4 = $mysqli->query("SELECT * FROM message_queue WHERE phone_number='".$key."'");
                        $rows4 = $new4->fetch_assoc();
                        if (!$rows4['is_received_by_receipient']) $x++;
                        $mysqli->query("UPDATE message_queue SET is_received_by_receipient='1' WHERE phone_number='".$key."'");
                        $mysqli->query("UPDATE result SET is_received_by_receipient='$x' WHERE is_active='1'");
                    }
                    if ($value > 1) {
                        $new4 = $mysqli->query("SELECT * FROM message_queue WHERE phone_number='".$key."'");
                        $rows4 = $new4->fetch_assoc();
                        if (!$rows4['is_received_by_receipient']) $x++;
                        if (!$rows4['is_read_by_receipient']) $y++;
                        $mysqli->query("UPDATE message_queue SET is_read_by_receipient='1',is_received_by_receipient='1' WHERE phone_number='".$key."'");
                        $mysqli->query("UPDATE result SET is_read_by_receipient='$y',is_received_by_receipient='$x' WHERE is_active='1'");
                    }
                }
                
                $w->disconnect();
                $mysqli->query("UPDATE sender SET is_logged_in='0' WHERE id='".$id."'");
            }
            sleep(5);
        }
    }
    else echo "Sender doesn't exists or messages didn't send"; 

?>