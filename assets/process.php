<?php

$a = $_POST;

$d = file_get_contents( 'data.json' );

//the data comes in as a js object, so convert the data to a php array so it can me edited
$d = json_decode( $d, true );

//add the assoc array $a to our data, here we add it to the beginning of the array using unshift, but we can also use push to add to the end
array_unshift( $d, $a );

//after editing the data, convert it back to a js object
$d = json_encode( $d );

//save the edited data back into the json file
file_put_contents( 'data.json', $d );








/////

//$d = file_get_contents('votingPrecinctTest2.geojson');
//$d = json_encode($d, JSON_NUMERIC_CHECK); 
//$d = json_decode($d, true);
// 
//print_r($d);


header( 'location:../index.html' );

////since this page doen't contain any html, redirect the user to a new page
//header( 'location:../admin.php' );
?>