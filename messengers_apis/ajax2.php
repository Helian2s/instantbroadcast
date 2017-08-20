<?php
    
require_once("config_class.php");
require_once("database_class.php");
$mysqli = db::getDBO();

    $number = $_POST['number'];
    $mysqli = db::getDBO();
    $res = $mysqli->query("SELECT * FROM sender WHERE number='$number'");
    $row=$res->fetch_assoc();
    $data=array();
                                    
    if ($res->num_rows > 0) {
        $data[0]=$row['pause'];
        
        echo json_encode($data);
    } else {
        $data[0]="";
        
        echo json_encode($data);
    }
    
