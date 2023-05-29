<?php
 function OpenConnection()
 {   $serverName = "";
     $connectionOptions = array("Database"=>"SPA",
         "Uid"=>"dh", "PWD"=>"horn@379");
     $conn = sqlsrv_connect($serverName, $connectionOptions);
     if($conn == false)
         die(FormatErrors(sqlsrv_errors()));

     return $conn;}

?>