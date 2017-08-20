<?php
set_time_limit(10);
require_once '../src/whatsprot.class.php';
require_once '../src/vCard.php';

$username = "380676188068";                      // Telephone number including the country code without '+' or '00'.
$password = "ADBWpJ7j91cyNLTyApY97UfNWLA=";     // A server generated Password you received from WhatsApp. This can NOT be manually created
$identity = "%17%9fkd4ll%c5%c3ti%df%7cd%8b%a9%a9%fd%1du"; // Obtained during registration with this API or using MissVenom (https://github.com/shirioko/MissVenom) to sniff from your phone.
$nickname = "";                          // This is the username (or nickname) displayed by WhatsApp clients.
$target = "380999760371";                   // Destination telephone number including the country code without '+' or '00'.
$debug = true;  



$w = new WhatsProt($username, $identity, $nickname, $debug);
$w->connect();

// Now loginWithPassword function sends Nickname and (Available) Presence
$w->loginWithPassword($password);

$w->sendMessage($target, "textrexfex");

$data = array(
                    "display_name"          => "GH KJdddL",
                    "first_name"            => "",
                    "last_name"             => "",
                    "additional_name"       => "",
                    "name_prefix"           => "",  
                    "name_suffix"           => "", 
                    "nickname"              => "",
                    "title"                 => "",
                    "role"                  => "",
                    "department"            => "",
                    "company"               => "",
                    "work_po_box"           => "", 
                    "work_extended_address" => "", 
                    "work_address"          => "", 
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
                    "office_tel"            => "33", 
                    "cell_tel"              => "444", 
                    "fax_tel"               => "", 
                    "pager_tel"             => "", 
                    "email1"                => "", 
                    "email2"                => "", 
                    "url"                   => "", 
                    "photo"                 => "", 
                    "birthday"              => "ssdf", 
                    "timezone"              => "dddff", 
                    "sort_string"           => "", 
                    "note"                  => "" 
                );

            $vcard = new vCard();                                                       
            $vcard->set("data", $data);                                                 
            $vcard->build();                                                            
            //$vcard->download();                                                       

            $w->sendVcard($target, $name="Contact", $vcard->show());  