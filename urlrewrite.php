<?
$arUrlRewrite = array(
    array(
        "CONDITION" => "#^/personal/blog/#",
        "RULE" => "",
        "ID" => "matrix.complex:blog",
        "PATH" => "/personal/blog/index.php",
    ),
	array(
		"CONDITION" => "#^/personal/#",
		"RULE" => "",
		"ID" => "matrix:personal",
		"PATH" => "/personal/index.php",
	),

);

?>