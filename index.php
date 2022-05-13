<?php
if (!$_GET['r']) {
    http_response_code(400);
    header("Content-type: application/json");
    echo json_encode(array("error" => "No query string provided"));
} else {
    // check is the query string include http and make a redirect
    if (strpos($_GET['r'], "http") === false) {
        $url = "http://" . $_GET['r'];
        header("Location: " . $url);
    } else {
        $url = $_GET['r'];
        header("Location: " . $url);
    }
    
    header();
}
?>