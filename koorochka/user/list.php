<?
use Matrix\Main\UserTable;
require_once $_SERVER["DOCUMENT_ROOT"] . "/matrix/header.php";

$arResult = [];


$users = UserTable::getList([
    "select" => [
        "LOGIN",
        "EXTERNAL_AUTH_ID"
    ]
]);
while ($user = $users->fetch())
{

    $arResult[] = $user;
}


d($arResult);