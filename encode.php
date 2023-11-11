<?php

require_once('vendor/autoload.php');

use \Firebase\JWT\JWT;
use Firebase\JWT\Key;

$Secret_Key = 'thanh_nt';
$iat = time();
$nbf = $iat + 30;
$exp = $iat + 100;

$data = null;
$data = ['a' => "tha nan 122", 'value' => 'demo encode token', 'id' => 1];

$payload = array(
    'iss' => $data, // data cần mã hóa lưu trữ.
    'iat' => $iat,  // thời gian bắt đầu token.
    'nbf' => $nbf,  // thời gian token bắt đầu có thể decode(có hiệu lực so với iat).
    'exp' => $exp,  // thời gian token hết hạn.
    // 'uId' => $UiD
);

try {
    $jwt = JWT::encode($payload, $Secret_Key, 'HS256');
    $res = array("status" => true, "Token" => $jwt);
} catch (UnexpectedValueException $e) {
    $res = array("status" => false, "Error" => $e->getMessage());
}
var_dump($res);

echo("\n");

$decode = JWT::decode($res['Token'], new Key($Secret_Key, 'HS256'));
var_dump($decode);
