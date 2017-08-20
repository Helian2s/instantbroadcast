<?php

require_once("config_class.php");
require_once("database_class.php");
require_once("log.php");
               
$mysqli = db::getDBO();


 if (isset($_POST['send_csv'])) {
      if ($_FILES['send']['error']==0){
            
            $blacklist = array(".php", ".phtml", ".php3", ".php4", ".html", ".htm");
            foreach ($blacklist as $item) {
                
                if (preg_match("/$item\$/i", $_FILES['send']['name']))  exit("Hack attac");
                       
            }
          
           $upload_path=dirname(__FILE__).'/numbers/'.$_FILES['send']['name'];
           if (file_exists($upload_path)) {
                    exit("File with this name already exist");
                } else {
                echo "File success copied"; 
           }
          move_uploaded_file($_FILES['send']['tmp_name'],$upload_path);
          
          if (file_exists($upload_path)){
            $row = 1;
            $handle = fopen($upload_path, "r");
            while (($data = fgetcsv($handle)) !== FALSE) {
                $num = count($data);
               // echo "<p> $num полей в строке $row: <br /></p>\n";
                $row++;
                for ($c=0; $c < $num; $c++) {
                   // echo $data[1] . "<br />\n";
                    $mysqli->query("INSERT INTO mobile_number (mobile_number) VALUES ('".$data[1]."')");
                     $mes="Uploaded ".$_FILES['send']['name']."  file ";
                     
                }
            }
            fclose($handle);

            
          
        }
      } 
          
     else {
            echo "Error in file";
            $mes="Error with uploading file ";
            
      }
 }
logdoc($mes);
header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");


 ?>