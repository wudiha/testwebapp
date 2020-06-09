<?php

 $serverName = "testdb04195201.database.windows.net";        
  $connectionOptions = array(                             
    "Database" => "testdb04195201",                            
    "Uid" => "wudiha",                            
    "PWD" => "lingjiayee98!");                       
//Establishes the connection       
$conn = sqlsrv_connect($serverName, $connectionOptions);         
if (!$conn) {            
  die("Error connection: ".sqlsrv_errors());        
}        
echo "DB SERVER:CONNECTED !" ;

 $sql = "INSERT INTO restaurant (restaurant_name, restaurant_address, restaurant_phone) VALUES (?,?,?);
  $params = arrray ("Burger King","BB","01-921213");
  
  $stmt = sqlsrv_query($conn,$sql,$params);
    if($stmt ===false){
    die (print_r(sqlsrv_errors(),true));
    }


?>
