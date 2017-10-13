<?php

session_start();

require_once ('util/db.php');

$u = $_GET['username'];
$p = $_GET['password'];

$sql = "select * from users where username='$u' and password = '$p'";

$user = $db -> rawQuery($sql);

if ($user) {
	foreach( $user[0] as $k=>$v) {
	    if('password' == $k) unset($user[0][$k]);
	}
	$_SESSION['user'] = $user;
	echo json_encode(Array("success" => true, "data" => $user, "message" => "请求成功"));
} else {
	echo json_encode(Array("success" => false, "data" => null, "message" => "请求失败"));
}

?>