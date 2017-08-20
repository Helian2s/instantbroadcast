<?php
set_time_limit(0);
require_once 'WhatsAPI-master/src/whatsprot.class.php';
require_once 'WhatsAPI-master/src/vCard.php';

$username = "380679816558";                      // Telephone number including the country code without '+' or '00'.
$password = "hbuzKEkUrfKCGqXt8y2EMMAD5+4=";     // A server generated Password you received from WhatsApp. This can NOT be manually created
$identity = "%ff%85%3b%25j%1d%fc%2b%1cj%2c%feje%1e%a1%16%a7%2c%24"; // Obtained during registration with this API or using MissVenom (https://github.com/shirioko/MissVenom) to sniff from your phone.
$nickname = "";                          // This is the username (or nickname) displayed by WhatsApp clients.
$target = "380999760371";                   // Destination telephone number including the country code without '+' or '00'.
$debug = true;  



$w = new WhatsProt($username, $identity, $nickname, $debug);
$w->connect();

// Now loginWithPassword function sends Nickname and (Available) Presence
$w->loginWithPassword($password);



$w->sendMessage($target, "Send vCard");

$data = array(
                    "display_name"          => "iiiii",
                    "first_name"            => "",
                    "last_name"             => "",
                    "additional_name"       => "",
                    "name_prefix"           => "",  
                    "name_suffix"           => "", 
                    "nickname"              => "uuuuuu",
                    "title"                 => "",
                    "role"                  => "",
                    "department"            => "fsdfdfd",
                    "company"               => "",
                    "work_po_box"           => "", 
                    "work_extended_address" => "", 
                    "work_address"          => "dfffdfd", 
                    "work_city"             => "", 
                    "work_state"            => "", 
                    "work_postal_code"      => "", 
                    "work_country"          => "", 
                    "home_po_box"           => "", 
                    "home_extended_address" => "", 
                    "home_address"          => "", 
                    "home_city"             => "", 
                    "home_state"            => "", 
                    "home_postal_code"      => "", 
                    "home_country"          => "", 
                    "office_tel"            => "633 556 36", 
                    "cell_tel"              => "380973924271", 
                    "fax_tel"               => "", 
                    "pager_tel"             => "", 
                    "email1"                => "meta@meta.ua", 
                    "email2"                => "", 
                    "url"                   => "http://football.ua", 
                    "photo"                 => "", 
                    "birthday"              => "", 
                    "timezone"              => "3", 
                    "sort_string"           => "", 
                    "note"                  => "wwwfootballua" 
                );

            $vcard = new vCard();                                                       
            $vcard->set("data", $data);                                                 
            $vcard->build();                                                            
            //$vcard->download();                                                       

            $w->sendVcard($target, $name="Contact", $vcard->show());  
?>