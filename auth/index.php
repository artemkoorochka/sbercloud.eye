<?php
use Matrix\Main\Web\Json;
use Matrix\Main\Web\HttpClient;
use Matrix\Main\Application;

require_once $_SERVER["DOCUMENT_ROOT"] . "/matrix/header.php";

AddMessage2Log($_POST, "AUTH CPU");
AddMessage2Log($_GET, "AUTH CPU");
AddMessage2Log($_REQUEST, "AUTH CPU");

$arResult = [
    "status" => "success",
    "message" => "ok"
];

unset($_COOKIE["BX_USER_ID"]);
d($_COOKIE["BX_USER_ID"]);
unset($_COOKIE["MATRIX_SM_SOUND_LOGIN_PLAYED"]);

echo

die;
if($USER->IsAuthorized())
{
    d("User " . $USER->GetID() . " is autorized");
}else{
    d("User is not Autorized");
}