<?
/**
 * @var CMain $APPLICATION
 */
require_once($_SERVER["DOCUMENT_ROOT"]."/matrix/header.php");
$APPLICATION->SetTitle("Zeon");
?>
<div class="page-header">
    <div class="container">
        <h1>Hello Neo <small>Wellcome to zeon</small></h1>
        <?$APPLICATION->IncludeComponent("matrix:breadcrumb", "", array())?>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-xs-12">
        <?
        //\Matrix\Main\Config\Option::set("main", "optimize_css_files");
        // echo \Matrix\Main\Config\Option::get("main", "optimize_css_files");

        //echo COption::GetOptionString("main", "optimize_css_files");
        d(COption::GetOptionString("main", "CAPTCHA_arBGColor_1"));
        d("Test");
        ?>
        </div>
    </div>
</div>

<?require_once($_SERVER["DOCUMENT_ROOT"]."/matrix/footer.php");?>