<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/keys.php';

$client = new Lyra\Client();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $postBody = file_get_contents("php://input");
    $request = json_decode($postBody, true);
    
    $store = array(
        "amount" =>  $request["amount"],
        "currency" =>  $request["currency"],
        "orderId"=>  $request["orderId"],
        "uuid" => $request["uuid"]
    );

    $data = $client->post("V4/Transaction/Duplicate", $store);

    $json = array(
        "status" => "success",
        "diagnostico" => "Acción no autorizada en test, no se probó en producción",
        "answer" => $data
    );
    header("Content-Type: application/json");
    http_response_code(200);

    echo json_encode($json);
}
