<?php
    header('Content-Type: text/html; charset=utf-8');

    set_time_limit(0);
       
    require_once("config_class.php");
    require_once("database_class.php");
    require_once("src/whatsprot.class.php");
    require_once("src/protocol.class.php");
    require_once("src/vCard.php");
    
    $mysqli = db::getDBO();
    $new = $mysqli->query("SELECT * FROM sender WHERE is_active='1'");
    $rows = $new->fetch_assoc();
    $sender = array();

    do {
        $sender[] = $rows;
    } 
    while($rows = $new->fetch_assoc());
    
    $new1 = $mysqli->query("SELECT * FROM recipient");
    $rows1 = $new1->fetch_assoc();
    $contacts = array();

    do {
        $contacts[] = $rows1;
    } 
    while($rows1 = $new1->fetch_assoc());
    
    $new2 = $mysqli->query("SELECT * FROM result WHERE is_active='1' LIMIT 1");
    $rows2 = $new2->fetch_assoc();
    $message_id = $rows2['vcard_message'];
    
    $new3 = $mysqli->query("SELECT * FROM vcard_message WHERE id='".$message_id."'");
    $rows3 = $new3->fetch_assoc();
    
    if(count($sender) && count($message_id)) {
        $k = 0;
        $total = $rows2['is_sent'];
        for($j = 0; $j < count($sender); $j++) {
            $w = new WhatsProt($sender[$j]['phone_number'], $sender[$j]['identity'], "WhatsApp", true);
            $w->connect();
            $w->loginWithPassword($sender[$j]['password']);
            $id = $sender[$j]['id'];
            $mysqli->query("UPDATE sender SET is_logged_in='1' WHERE id='".$id."'");
            if($rows2['is_active']) {
                $contacts_part = array_slice($contacts, $k, Config::NUMBERS);
                if (count($contacts_part) > 0) {
                    for($i = 0; $i < count($contacts_part); $i++) {
                        $data = array(
                                "display_name"          => $rows3['display_name'],
                                "first_name"            => $rows3['first_name'],
                                "last_name"             => $rows3['last_name'],
                                "additional_name"       => $rows3['additional_name'],
                                "name_prefix"           => $rows3['name_prefix'],  
                                "name_suffix"           => $rows3['name_suffix'], 
                                "nickname"              => $rows3['nickname'],
                                "title"                 => $rows3['title'],
                                "role"                  => $rows3['role'],
                                "department"            => $rows3['department'],
                                "company"               => $rows3['company'],
                                "work_po_box"           => $rows3['work_po_box'], 
                                "work_extended_address" => $rows3['work_extended_address'], 
                                "work_address"          => $rows3['work_address'], 
                                "work_city"             => $rows3['work_city'], 
                                "work_state"            => $rows3['work_state'], 
                                "work_postal_code"      => $rows3['work_postal_code'], 
                                "work_country"          => $rows3['work_country'], 
                                "home_po_box"           => $rows3['home_po_box'], 
                                "home_extended_address" => $rows3['home_extended_address'], 
                                "home_address"          => $rows3['home_address'], 
                                "home_city"             => $rows3['home_city'], 
                                "home_state"            => $rows3['home_state'], 
                                "home_postal_code"      => $rows3['home_postal_code'], 
                                "home_country"          => $rows3['home_country'], 
                                "office_tel"            => $rows3['office_tel'], 
                                "cell_tel"              => $rows3['cell_tel'], 
                                "fax_tel"               => $rows3['fax_tell'], 
                                "pager_tel"             => $rows3['pager_tell'], 
                                "email1"                => $rows3['email1'], 
                                "email2"                => $rows3['email2'], 
                                "url"                   => $rows3['url'], 
                                "photo"                 => $rows3['photo'], 
                                "birthday"              => $rows3['birthday'], 
                                "timezone"              => $rows3['timezone'], 
                                "sort_string"           => $rows3['sort_string'], 
                                "note"                  => $rows3['note']
                            );

                        $vcard = new vCard();                                                       
                        $vcard->set("data", $data);                                                 
                        $vcard->build();                                                            
                        $w->pollMessage();                                                       
                        $w->sendVcard($contacts_part[$i]['phone_number'], $name="Earny", $vcard->show());  
                        $recipient = $contacts_part[$i]['phone_number'];
                        $mysqli->query("INSERT INTO message_queue(message_type,vcard_message,phone_number,is_sent,is_received_by_server) VALUES('vcard','".$message_id."','".$recipient."','1','1')");
                        sleep(10);
                        $total=$total+1;
                    }
                    $count_message = $sender[$j]['count_of_messages'] + count($contacts_part);
                    $mysqli->query("UPDATE sender SET count_of_messages='".$count_message."' WHERE id='".$id."'");
                    
                }
            }
            $w->disconnect();
            $mysqli->query("UPDATE sender SET is_logged_in='0' WHERE id='".$id."'");
            $k = $k + Config::NUMBERS;
            sleep(10);
        }
        $mysqli->query("UPDATE result SET is_sent='".$total."',is_received_by_server='".$total."' WHERE vcard_message='".$message_id."'");
    }
    else echo "Поле is_active переведите в значение true для записей в таблицах Sender и Message_queue";

?>