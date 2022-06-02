<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/keys.php';

$client = new Lyra\Client();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $postBody = file_get_contents("php://input");
    $request = json_decode($postBody, true);

    $store = array(
        "uuid" =>$request["uuid"]
    );

    $data = $client->post("V4/Transaction/Get", $store);

    $json = array(
        "status" => "success",
        "answer" => $data
    );
    header("Content-Type: application/json");
    http_response_code(200);

    echo json_encode($json);
}