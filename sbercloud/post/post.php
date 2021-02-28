<?
/**
 * ПХП по умолчанию не парсит запросы кроме application/x-www-form-urlencoded multipart/form-data. Т.е. тельце надо парсить самому.
 * Можно проверить что бы $_SERVER["CONTENT_TYPE"] ==  'application/json' до и что значение json_decode не NULL после.
 *
 * Банальный $_REQUEST будет работать без file_get_contents.
 */
use Matrix\Main\Web\Json;
require_once $_SERVER["DOCUMENT_ROOT"] . "/matrix/header.php";

$postData = file_get_contents('php://input');
$data = Json::decode($postData);
$data = Json::encode($data);
echo $data;