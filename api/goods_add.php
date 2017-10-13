<?php

    header("ACCESS-CONTROL-ALLOW-ORIGIN:*");

	date_default_timezone_set("Asia/Shanghai");

	require_once ('util/db.php');

	$name = $_GET["name"];
    $price = $_GET["price"];
    $detail = $_GET["detail"];
    $classify = $_GET["classify"];
	// $now = date("Y-m-d h:i:s");

	$data = Array (
        "name" => $name,
        "price" => $price,
        "classify" => $classify,
        "detail" => $detail
    );

    $id = $db->insert('goods', $data);

    sleep(2);

    if ($id > 0) {
        echo json_encode(array("success" => true, "message" => "保存成功"));
    } else {
        echo json_encode(array("success" => false, "message" => "保存失败"));
    }

?>