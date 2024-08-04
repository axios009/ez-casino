<?php @session_start(); ?>
<?php
if ($_SESSION["PROFILE"] != NULL) {
    $url = '../../Lobby';
} else {
    $url = DOMAIN_PAGE;
}
header("location: " . $url);
exit(0);
?>
<html lang="en" data-bs-theme="light">
    <!--begin::Head--><head>
        <base href="<?= $_SESSION['BasePath'] ?>/"/>
        <title>Error 404</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./assets/vendor/swiper/swiper-bundle.min.css">
        <link rel="stylesheet" href="./assets/css/bootstrap-icons.css">
        <link rel="stylesheet" href="./assets/css/overlayscrollbars.min.css" />
        <link rel="stylesheet" href="./assets/css/themes.min.css">
        <link rel="stylesheet" href="./assets/css/toast/font-awesome.min.css">
        <link rel="stylesheet" href="./assets/css/toast/toastr.min.css">

        <link rel="shortcut icon" href="assets/media/logos/favicon.ico">
        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700">
        <!--end::Fonts-->
        <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
        <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css">
        <!--end::Global Stylesheets Bundle-->
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat" 
          style="background-image: url('images/error/error_bg.png');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;"
          >
        <!--begin::Theme mode setup on page load-->

        <!--end::Theme mode setup on page load-->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root" >
            <!--begin::Page bg image-->
            <!--end::Page bg image-->
            <!--begin::Authentication - Signup Welcome Message -->
            <div class=" container">
                <!--begin::Content-->
                <div style=" transform: translateY(60%);" >
                    <!--begin::Wrapper-->
                    <div class="row text-center justify-content-center">
                        <img src="images/logo/logo.png" style="width: 30vh;">
                    </div>
                    <br>
                    <div class="row text-center justify-content-center">
                        <img src="images/error/error_404.png" style="width: 50vh;">
                    </div>
                    <div class="row text-center justify-content-center mt-3 ">
                        <a href="./" type="button" class=" btn btn-register " style="width: 27vh;">
                            <span class="pb-2"><?= L::btn_back ?></span>
                        </a>

                    </div>

                    <!--end::Wrapper-->
                </div>
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
    <script src="./js/common.js"></script>
</html>
