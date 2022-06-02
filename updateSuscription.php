<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/keys.php';

$client = new Lyra\Client();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $postBody = file_get_contents("php://input");
    $request = json_decode($postBody, true);

    $store = array(
        "amount"=>$request["amount"],
        "currency"=>$request["currency"],
        "effectDate"=>$request["effectDate"],
        "initialAmount"=>$request["initialAmount"],
        "initialAmountNumber"=>$request["initialAmountNumber"],
        "paymentMethodToken"=>$request["paymentMethodToken"],
        "rrule"=>$request["rrule"],
        "subscriptionId"=>$request["subscriptionId"]
    );

    $response = $client->post("V4/Subscription/Update", $store);

    $json = array(
        "status" => "success",
        "answer" => $response
    );
    // $json = $store;
    header("Content-Type: application/json");
    http_response_code(200);

    echo json_encode($json);
}
