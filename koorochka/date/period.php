<?
/**
Array
(
[NOW] => 27.02.2021 13:55:07
[TOMOROW] => 28.02.2021 13:55:07
[FIVE_MINUTES] => 27.02.2021 14:00:07
[TIME_STUMP_NOW] => 1614423307
[TIME_STUMP_TIME] => 1614423307
[TIME_STUMP_FIVE_MINUTES] => 1614423607
)
 *
 * 1056625600000
 */
require_once $_SERVER["DOCUMENT_ROOT"] . "/matrix/header.php";

$arParams = [
    "NOW" => date("d.m.Y H:i:s", mktime(date("H"), date("i"), date("s"), date("m")  , date("d"), date("Y"))),
    "TOMOROW" => date("d.m.Y H:i:s", mktime(date("H"), date("i"), date("s"), date("m")  , date("d")+1, date("Y"))),
    "FIVE_MINUTES" => date("d.m.Y H:i:s", mktime(date("H"), date("i")+5, date("s"), date("m")  , date("d"), date("Y"))),

    "TIME_STUMP_NOW" => mktime(date("H"), date("i"), date("s"), date("m")  , date("d"), date("Y")),
    "TIME_STUMP_TIME" => time(),
    "TIME_STUMP_FIVE_MINUTES" => mktime(date("H"), date("i")+5, date("s"), date("m")  , date("d"), date("Y")),

    "TIME_STUMP_FROM" => mktime("13", "35", date("s"), date("m")  , date("d"), date("Y")),
    "TIME_STUMP_TO" => mktime("13", "40", date("s"), date("m")  , date("d"), date("Y")),

    "MIN" => date("i")-3,
    "HOW" => date("H"),

    "MICROTIME_START" => microtime(),
    "MICROTIME_END" => microtime(),
    "MICROTIME_PERIOD" => microtime(),

];

// Спим некоторое время
usleep(100);
$arParams["MICROTIME_END"] = microtime();
$arParams["MICROTIME_PERIOD"] = $arParams["MICROTIME_START"] - $arParams["MICROTIME_END"];

d($arParams);

$now = DateTime::createFromFormat('U.u', microtime(true));
echo $now->format("m-d-Y H:i:s.u");

// 1614423825422
// 1450320943422
// 1614430405.3938
// from=1614422355422&to=1614424155422



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Timer</title>
</head>
<body>

</body>
</html>
