<?php

$a = $_POST;
print_r($a);

$d = file_get_contents('votingPrecinctTest2.geojson');

$d = json_decode($d, true);
////
$d = json_encode($d, JSON_NUMERIC_CHECK); 
////
$d = json_decode($d, true);
//// 

print_r($d["features"][13]["properties"]);
//print_r["features"];
echo json_last_error_msg()."<br/>";


//print_r($d);


//header( 'location:../index.html' );


?>