<?php @session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <?= $this->fetch('templated-header.php'); ?>
    <?= $this->fetch('templated-common-script.php'); ?>

    <body class="lobby">
        <?= $this->fetch('templated-lobby-header-menu.php'); ?>
        <?= $this->fetch('templated-lobby-left-menu.php'); ?>
        <main >
            <?= $content ?>
            <?= $this->fetch('templated-lobby-footer-menu.php'); ?>
        </main>
    </body>
    <!--<script src="./assets/js/overlayscrollbars.browser.es6.min.js"></script>-->
    <script src="./js/slide.js"></script>
</html>
