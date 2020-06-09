<?php        
  $serverName = "testdb04195201.database.windows.net";         
  $connectionOptions = array(                             
    "Database" => "testdb04195201",                             
    "Uid" => "wudiha",                             
    "PWD" => "lingjiayee98!");                          
  //Establishes the connection        
  $conn = sqlsrv_connect($serverName, $connectionOptions);         
  if (!$conn) 
  {            
  die("Error connection: ".sqlsrv_errors());       
  }
  echo "DB Server: Connected!";
}   
?>
