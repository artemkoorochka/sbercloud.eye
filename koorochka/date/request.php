<?

require_once $_SERVER["DOCUMENT_ROOT"] . "/matrix/header.php";


echo \Matrix\Main\Web\Json::encode([
    "responce" => "Hello"
]);

AddMessage2Log($_REQUEST, "date_request");
AddMessage2Log($_GET, "date_request");
AddMessage2Log($_POST, "date_request");
