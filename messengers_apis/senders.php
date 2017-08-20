<?php 

require_once("config_class.php");
require_once("database_class.php");
require_once("log.php");
$mysqli = db::getDBO();

if (isset($_POST['add'])) {
    $name=trim(htmlspecialchars($_POST['name']));
    $number=trim(htmlspecialchars($_POST['number']));
    $id=trim(htmlspecialchars($_POST['id']));
    $password=trim(htmlspecialchars($_POST['password']));
    $pause=trim(htmlspecialchars($_POST['pause']));
    
    if (!empty($name) && !empty($number) && !empty($id) && !empty($password) && !empty($pause)) {
        $mysqli->query("INSERT INTO sender (name, identity, password, number, pause) VALUES ('$name', '$id', '$password', '$number', '$pause')");
        $mes="Added next user data :  name = ".$name.";  number = ".$number.";  pause = ".$pause.".";
    }
} 

logdoc($mes);
header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");

?>