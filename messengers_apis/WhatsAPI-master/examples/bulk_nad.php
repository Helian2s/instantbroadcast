<?php

    require_once("bulk.php");
    $username = "380996782477";
  
    $password = "Izz5TBbfjaGMhNKVJB0b9P+9Hpo=";
 
    $contacts = array("380663632926", "380661044157", "380995298664"); // or read them from a file
   
    $wbs = new WaBulkSender($username, $password);
    $wbs->Login();
    $wbs->SyncContacts($contacts);
    $wbs->SendBulk($contacts, "From Seva");
    $wbs->SendBroadcast($contacts, "Broadcast Message");
?>