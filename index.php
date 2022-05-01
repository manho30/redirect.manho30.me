<?php

if (!$_GET['r']) {
    http_response_code(400);
    header("Content-type: application/json");
    echo json_encode(array("error" => "No query string provided"));
} else {
    header("location: ".$_GET['r']);
}
?>