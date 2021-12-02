<?php
header("Access-Control-Allow-Origin: *"); //who can.
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // type: methods
header("Content-Type: application/json"); // type: application
# array in json
echo json_encode($array);
exit;