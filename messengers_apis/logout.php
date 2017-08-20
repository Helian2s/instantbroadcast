<?php
include_once('index_work.php');
//var_dump($_SESSION);
if (isset($_SESSION['user'])) {
	//echo "IN";
        unset($_SESSION['user']);
        header("Location: http://localhost/web/Wapp/enter.php");
	exit;
}
else {
	//echo "No";
        header("Location: http://localhost/web/Wapp/enter.php");
        exit;
}

?>