<?
/**
 * https://support.hc.sbercloud.ru/api/ces/en-us_topic_0171241941.html
 */
use Matrix\Main\Web\Json;
use Matrix\Main\Web\HttpClient;
require_once $_SERVER["DOCUMENT_ROOT"] . "/matrix/header.php";

$arParams = [
    "URL" => "https://iam.ru-moscow-1.hc.sbercloud.ru/v3/auth/tokens"
];


$arResult = [

    "BODY" => array (
        'auth' =>
            array (
                'identity' =>
                    array (
                        'methods' =>
                            array (
                                0 => 'password',
                            ),
                        'password' =>
                            array (
                                'user' =>
                                    array (
                                        'name' => 'hackathon103',
                                        'password' => 'BreakingCode',
                                        'domain' =>
                                            array (
                                                'name' => 'hackathon103',
                                            ),
                                    ),
                            ),
                    ),
                'scope' =>
                    array (
                        'project' =>
                            array (
                                'id' => '0b9655338780268d2f34c00a8a7a9aea',

                            ),
                    ),
            ),
    )
];


$arResult["BODY"] = Json::encode($arResult["BODY"]);


// опции по умолчанию:
$options = array(
    "redirect" => true, // true, если нужно выполнять редиректы
    "redirectMax" => 5, // Максимальное количество редиректов
    "waitResponse" => true, // true - ждать ответа, false - отключаться после запроса
    "socketTimeout" => 30, // Таймаут соединения, сек
    "streamTimeout" => 60, // Таймаут чтения ответа, сек, 0 - без таймаута
    "version" => HttpClient::HTTP_1_1, // версия HTTP (HttpClient::HTTP_1_0 или HttpClient::HTTP_1_1)
    "proxyHost" => "", // адрес
    "proxyPort" => "", // порт
    "proxyUser" => "", // имя
    "proxyPassword" => "", // пароль
    "compress" => false, // true - принимать gzip (Accept-Encoding: gzip)
    "charset" => "", // Кодировка тела для POST и PUT
    "disableSslVerification" => false, // true - отключить проверку ssl (с 15.5.9)
);


$HttpClient = new HttpClient($options);
$HttpClient->setHeader('Content-Type', 'application/json', true);

################
################ Get token
################

$HttpClient->query(HttpClient::HTTP_POST, $arParams["URL"], $arResult["BODY"]);

// Host
// $response = $HttpClient->getHeaders()->get("X-Project-Id");
// $response = $HttpClient->getHeaders()->get("content-length");
// $response = $HttpClient->getHeaders()->get("content-type");
$token = $HttpClient->getHeaders()->get("x-subject-token");

$response = $HttpClient->getResult();




$arParams["URL"] = "https://ces.ru-moscow-1.hc.sbercloud.ru/V1.0/0b9655338780268d2f34c00a8a7a9aea/alarms";
$HttpClient = new HttpClient($options);
$HttpClient->setHeader('X-Auth-Token', $token, true);
$HttpClient->query(HttpClient::HTTP_GET, $arParams["URL"], Json::encode([]));

d($HttpClient->getResult());