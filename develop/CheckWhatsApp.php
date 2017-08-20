<?php
header('Content-Type: text/html; charset=utf-8');

    set_time_limit(0);
       
    require_once("config_class.php");
    require_once("database_class.php");
    require_once("src/whatsprot.class.php");
    require_once("src/protocol.class.php");

$username = "380503228267";                      // Telephone number including the country code without '+' or '00'.
$password = "ocCbHF06A2EypEnJ50Rcl7tzW6Q=";     // A server generated Password you received from WhatsApp. This can NOT be manually created

    $mysqli = db::getDBO();
    $new = $mysqli->query("SELECT * FROM recipient");
    $rows = $new->fetch_assoc();
    $numbers = array();

    do {
        $numbers[] = $rows['phone_number'];
    } 
    while($rows = $new->fetch_assoc());

function onSyncResult($result)
{
    foreach($result->existing as $number)
    {
        $str=strpos($number, "@");
        $clear_number=substr($number, 0, $str); 
        $mysqli = db::getDBO();
        $mysqli->query("UPDATE recipient SET Whatsapp_install='1' WHERE phone_number='".$clear_number."'");
        echo "$clear_number exists<br />";
    }
    foreach($result->nonExisting as $number)
    {
        echo "$number does not exist<br />";
    }
    die();//to break out of the while(true) loop
}

$wa = new WhatsProt($username, "", "WhatsApp", false);

//bind event handler
$wa->eventManager()->bind('onGetSyncResult', 'onSyncResult');

$wa->connect();
$wa->loginWithPassword($password);

//send dataset to server

$contacts_part = array_slice($numbers, 0, 1000);
$wa->sendSync($contacts_part);

//wait for response
while(true)
{
    $wa->pollMessage();
}
