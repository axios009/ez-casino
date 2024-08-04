<?php
@session_start();

$basePath = ''; //$basePath . ($_SERVER['SERVER_NAME'] == 'localhost' ? '/Slim4' : '');
$jsonStringLang = file_get_contents('./lang/lang_' . $_SESSION["lang"] . '.json');

if ($_SESSION["PROFILE"]->info->login->s_reset_pass === "N") {
    header("Location: " . $_SESSION['BasePath'] . "/Lobby");
    exit();
}
?>
<script>
    var contextPath = '<?= $_SESSION['BasePath'] ?>';
    var cVersion = '<?= $_SESSION['cVersion'] ?>';
    var contextPathApi = contextPath + cVersion;
    var L = <?= $jsonStringLang ?>;
</script>
<?php @session_start(); ?>
<html lang="en" data-bs-theme="light">
<!--begin::Head-->

<head>
    <base href="<?= $_SESSION['BasePath'] ?>/" />
    <title><?= L::lb_resetPwd ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/overlayscrollbars.min.css" />
    <link rel="stylesheet" href="./assets/css/themes.min.css">
    <link rel="stylesheet" href="./assets/css/toast/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/toast/toastr.min.css">

    <link rel="shortcut icon" href="./assets/media/logos/favicon.ico">
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700">
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="./assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/style.bundle.css" rel="stylesheet" type="text/css">
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat" style="background-image: url('images/error/error_bg.png');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;">
    <!--begin::Theme mode setup on page load-->

    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page bg image-->
        <!--end::Page bg image-->
        <!--begin::Authentication - Signup Welcome Message -->
        <div class=" container">
            <!--begin::Content-->

            <div class="row text-center justify-content-center">
                <!--<img src="images/logo/logo.png" style="width: 25vh;">-->
                <img src="./images/betboy/betboy-888-2.png" style="width: 25vh;margin-top: 76px; ">
            </div>
            <br>


            <!--<div class="modal modal-popup fade " id="resetPassword"  aria-labelledby="changePasswordLabel" data-bs-keyboard="false">-->
            <div class="modal modal-popup fade show" id="resetPassword" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="profileModalLabel" aria-modal="true"
                role="dialog" style="display: block;">

                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="position-relative w-100 inner">
                                <h5 class="modal-title text-center fs-5" id="resetPasswordLabel"><?= L::lb_resetPwd ?></h5>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form id="form-action-resetPassword" class="change-password py-4 d-flex flex-column gap-4">
                                <input type="password" class="form-control" id="password_new" name="password_new" placeholder="<?= L::lb_passwordNew ?>" required>
                                <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="<?= L::lb_passwordNewConfirm ?>" required>
                                <button class="btn btn-pink border-white fw-bold" type="button" onclick="save()"><?= L::btn_confirm ?></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!--end::Wrapper-->
            <!--end::Content-->
        </div>
        <!--end::Authentication - Signup Welcome Message-->
    </div>
</body>
<script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="./assets/vendor/jquery/jquery-3.7.0.min.js"></script>
<script src="./assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="./assets/js/overlayscrollbars.browser.es6.min.js"></script>
<script src="./assets/js/funtions.js"></script>
<script src="./assets/js/toast/toastr.js"></script>
<script src="./js/common<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>
<script src="./js/authen/resetPassword<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>

</html>