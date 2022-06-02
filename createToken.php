<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/keys.php';

$client = new Lyra\Client();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $postBody = file_get_contents("php://input");
    $request = json_decode($postBody, true);

    $store = array(
        "currency"=> $request["currency"],
        "customer"=> array(
            "email"=> $request["email"],
            "reference"=> $request["reference"]
        ),
        "orderId"=> $request["orderId"]
    );

    $response = $client->post("V4/Charge/CreateToken", $store);

    $json = array(
        "status" => "success",
        "answer" => $response
    );
    // $json = $store;
    header("Content-Type: application/json");
    http_response_code(200);
    echo json_encode($json);
}
