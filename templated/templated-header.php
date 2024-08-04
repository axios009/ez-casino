<?php @session_start(); ?>
<?php
$basePath = ''; //$basePath . ($_SERVER['SERVER_NAME'] == 'localhost' ? '/Slim4' : '');
$jsonStringLang = file_get_contents('./lang/lang_' . $_SESSION["lang"] . '.json');
$mobile = new \Detection\MobileDetect();
$_SESSION['mobile'] = $mobile->isMobile();
?>
<!--begin::Head-->

<head>
    <base href="<?= $_SESSION['BasePath'] ?>/" />
    <title><?= TITLE ?></title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0" />
    <?php if ($_SESSION['PROFILE']->info->configLobby->s_logo == NULL) { ?>
        <link rel="stylesheet" href="./css/template_color.css?v=<?= $_SESSION['version'] ?>">
    <?php } else { ?>
        <link rel="stylesheet" href="./css/template_color_<?= $_SESSION['PROFILE']->info->configLobby->s_color ?>.css?v=<?= $_SESSION['version'] ?>">
    <?php } ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="./assets/css/toast/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/toast/toastr.min.css">
    <link rel="stylesheet" href="./css/flatpickr.css?v=<?= $_SESSION['version'] ?>">
    <link rel="stylesheet" href="./css/datepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css?v=<?= $_SESSION['version'] ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="icon" href="./images/betboy/betboy-888-1.png" type="image/icon type">
</head>
<!--end::Head-->
<script>
    var contextPath = '<?= $_SESSION['BasePath'] ?>';
    var cVersion = '<?= $_SESSION['cVersion'] ?>';
    var contextPathApi = contextPath + cVersion;
    var L = <?= $jsonStringLang ?>;
</script>