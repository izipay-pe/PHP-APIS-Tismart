<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/keys.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $client = new Lyra\Client();

    $postBody = file_get_contents("php://input");
    $request = json_decode($postBody, true);

    $store = array(
        "value" => $request["value"]
    );

    $response = $client->post("V4/Charge/SDKTest", $store);

    $json = array(
        "status" => "success",
        "response" => $response
    );
    header("Content-Type: application/json");
    http_response_code(200);
    echo json_encode($json);
}
