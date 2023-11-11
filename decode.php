<?php
require_once('vendor/autoload.php');
use \Firebase\JWT\JWT;
use Firebase\JWT\Key;

$token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOnsiYSI6InRoYSBuYW4gMTIyIiwidmFsdWUiOiJkZW1vIGVuY29kZSB0b2tlbiIsImlkIjoxfSwiZXhwIjoxNjk5NjkzMjc0LCJuYmYiOjE2OTk2OTMyMDQsImlhdCI6MTY5OTY5MzE3NH0._bivOs5D2aWfiAEi9vguE_KeLw53grPE9m63YHEpEDc';
$Secret_Key = 'thanh_nt';

try {
    $decode = JWT::decode($token, new Key($Secret_Key, 'HS256'));
    var_dump($decode);
} catch (\Throwable $th) {
    echo($th->getMessage());
}
