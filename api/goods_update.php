<?php
    date_default_timezone_set("Asia/Shanghai");
    require_once ('util/db.php');

    $id = $_POST['id'];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $detail = $_POST["detail"];
    $classify = $_POST["classify"];

    // $now = date("Y-m-d h:i:s");

    $data = Array (
    	"id" => $id,
        "name" => $name,
        "price" => $price,
        "detail" => $detail,
        "classify" => $classify
    );

    $db->where ('id', $id);

    sleep(2);

    if ($db->update ('goods', $data)) {
        echo json_encode(array("success" => true, "message" => "修改成功"));
    } else {
        echo json_encode(array("success" => false, "message" => "修改失败"));
    }
    
?>