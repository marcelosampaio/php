<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
    $response = array();
    $response[0] = array(
        'id' => '1',
        'value1'=> 'first',
        'value2'=> 'primeiro'
    );
    $response[1] = array(
        'id' => '2',
        'value1'=> 'second',
        'value2'=> 'segundo'
    );

echo json_encode($response); 
?>