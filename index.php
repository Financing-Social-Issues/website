
<?php

error_reporting(E_ALL);

$name = "Financing Social";

$copyright = "$name © 2021 - " . date("Y");

$url = 'https://socialissues.finance';
$url_buy = 'https://socialissues.finance';

$social = array(
    'email' => 'contact@socialissues.finance',
    'telegram' => 'https://t.me/SOIS_Official',
    'twitter' => 'https://twitter.com/FinanceSocial',
    'facebook' => 'https://www.facebook.com/FinancingSocial',
    'instagram' => 'https://www.instagram.com/financing_social/',
    'linkedin' => 'https://www.linkedin.com/company/social-issues-finance',
    'github' => 'https://github.com/Financing-Social-Issues',

);

$coin = array(
    'name' => 'Financing Social Issues',
    'slug' => 'SOCIAL',
    'decimal' => '18',
    'contract_url' => 'https://bscscan.com/address/0x42bf6be831d69f8e7b04e2e57fe7d12040ec792d',
    'contract' => '0x42bf6be831d69f8e7b04e2e57fe7d12040ec792d',
);

$maxAge = time() + (60 * 60 * 24 * 7);
header("strict-transport-security: max-age={$maxAge};");
header("x-frame-options: SAMEORIGIN");
header("X-XSS-Protection: 1; mode=block");
header("X-Content-Type-Options: nosniff");
header("Referrer-Policy: strict-origin");
header("Content-Security-Policy: object-src 'self'");

$available_langs = array("es-es", "fr-fr", "en-us", "it-it", "in-id", "pt-br","zh-cn","ja-jp","ko-kr", "de-de");
$availablelangs = json_encode($available_langs);
$selected_lang = 'pt-br';

if (isset($_POST['lang']) && in_array($_POST['lang'], $available_langs)) {
    $selected_lang = $_POST['lang'];
}

$lang_file = 'languages/' . $selected_lang . '/lang.' . $selected_lang . '.php';
if (file_exists($lang_file)) {
    include($lang_file);
} else {
    include('languages/pt-br/lang.pt-br.php');
}

function translate($key) {
    global $lang;
    return $lang[$key] ?? $key;
}

require "classes/Url.php";

?>

<!DOCTYPE html>
<html lang="en">
<?php require "inc/head.php" ?>
<body>
<div class="preloader"></div>
<div class="wrapper">
    <?php require "inc/header.php" ?>
    <?php require "inc/menu.php" ?>
    <?php
    $modulo = Url::getURL( 0 );
    if( $modulo == null )
        $modulo = "Home";
    if( file_exists( "modulos/" . $modulo . ".php" ) )
        require "modulos/" . $modulo . ".php";
    else
        require "modulos/Home.php";
    ?>

    <?php require "inc/footer.php" ?>
</div>
<script src="assets/js/lazysizes.min.js" async></script>
<?php require "inc/script.php" ?>
</body>
</html>