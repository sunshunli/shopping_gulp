<?php

	date_default_timezone_set("Asia/Shanghai");

	require_once ('util/db.php');

    $username = $_POST["username"];
	$realname = $_POST["realname"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    // $now = date("Y-m-d h:i:s");

    $data = Array (
        "username" => $username,
        "realname" => $realname,
        "password" => $password,
        "email" => $email,
        "mobile" => $mobile
    );

    $id = $db->insert ('users', $data);

    sleep(2);

    if ($id > 0) {
        echo json_encode(array("success" => true, "message" => "注册成功"));
    } else {
        echo json_encode(array("success" => false, "message" => "注册失败"));
    }

?>