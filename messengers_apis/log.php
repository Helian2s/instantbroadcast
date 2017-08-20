<?php
                

function logdoc($message) {
               
                $data = array();
	            $nlt = "\t";
                $nlt = "\n";
		
                $data[] = date('Y-m-d H:i:s');

                $data[] = $_SERVER['REMOTE_ADDR'];

                $data[] = $message;
                $logLine = $nlt.implode("\t",$data);
                file_put_contents(dirname(__FILE__)."/doclog.php", $logLine, FILE_APPEND);
    
}

?>