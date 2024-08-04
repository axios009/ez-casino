<?php
@session_start();

include 'modal-login.php';
include 'modal-register.php';
?>




<header class="header navbar align-items-center d-flex">
    <div class="navbar-inner">
        <div class="container-fluid">
            <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="./assets/images/brand/logo.png" class="navbar-brand-item" alt="<?= L::systemName ?>">
            </a>
        </div>
    </div>
</header>
<main>
    <!-- Banner -->
    <section class="banner position-relative">
        <div class="bg-banner position-absolute top-0 start-0 end-0 -z-1">
            <div class="bg-banner-inner">
                <img src="assets/images/media/bg-banner.webp" class="img-fluid" alt="BG Banner">
            </div>
        </div>
        <div class="swiper slide-banner">
            <div class="swiper-wrapper banner-slide">
                <div class="swiper-slide text-center">
                    <img src="./assets/images/banner/banner1.webp" class="w-banner-slide" alt="Banner 1">
                </div>
                <div class="swiper-slide text-center">
                    <img src="./assets/images/banner/banner2.webp" class="w-banner-slide" alt="Banner 2">
                </div>
                <div class="swiper-slide text-center">
                    <img src="./assets/images/banner/banner4.webp" class="w-banner-slide" alt="Banner 3">
                </div>
                <div class="swiper-slide text-center">
                    <img src="./assets/images/banner/banner5.webp" class="w-banner-slide" alt="Banner 3">
                </div>
                <div class="swiper-slide text-center">
                    <img src="./assets/images/banner/banner6.webp" class="w-banner-slide" alt="Banner 3">
                </div>
            </div>
            <div class="swiper-pagination position-relative py-1 py-md-2 py-lg-3 py-xl-4 py-xxl-5"></div>
        </div>
    </section>
    <!-- access -->
    <br/>
    <section class="container position-relative z-3">
        <div class="row justify-content-between">
            <div class="col-lg-5 col-6 text-end">
                <button type="button" class="btn btn-register" data-bs-toggle="modal" data-bs-target="#registerModal"><span
                        class="pb-2"><?= L::btn_register ?></span></button>
            </div>
            <div class="col-lg-5 col-6 text-start">
                <button type="button" class="btn btn-login" data-bs-toggle="modal" data-bs-target="#loginModal"><span
                        class="pb-2"><?= L::btn_login ?></span></button>
            </div>
        </div>
    </section>
    <!-- Games -->
    <section class="container col-xl-8 col-xxl-7">
        <div class="p-4-nonetop bg-black bg-opacity-50 rounded-5 ">
            <div id="gamesButton" class="row gx-0 row-cols-1 row-cols-md-2 justify-content-center">
                <?php
                $brand = array("B006", "B001", "B003", "B005", "B008", "B009", "B010", "B011", "B012", "B015", "B016", "B017", "B019", "B020", "B022", "B024", "B032");

                foreach ($brand as $k => $v) {
                    ?>
                    <div class="<?= ($v == 'B006' ? 'col-12 text-center w-100' : 'col-6 text-center') ?>">
                        <a href="#" class="d-block">
                            <img src="./images/misc/default-img-game.webp" 
                                 data-src="assets/images/games/<?= $v ?>_<?= $_SESSION["lang"] ?>.webp"
                                 src="./images/misc/default-img-game.webp"
                                 data-src-small="assets/images/games/<?= $v ?>_<?= $_SESSION["lang"] ?>.webp"
                                 data-src-medium="assets/images/games/<?= $v ?>_<?= $_SESSION["lang"] ?>.webp"
                                 data-src-large="assets/images/games/<?= $v ?>_<?= $_SESSION["lang"] ?>.webp"
                                 class="img-fluid b-lazy <?= ($v == 'B006' ? 'w-75' : 'w-100') ?>" >
                        </a>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="py-4 text-center bg-black bg-opacity-75 text-white">
            <img src="assets/images/media/tx-tech.png" class="img-fluid" style="max-width: 24rem;" alt="TX-Tech">
            <h1 class=" fs-lg-4 fs-6 text-warning mt-3"><?= L::remark_login1 ?></h1>
            <p class="fs-lg-4 mb-0"><?= L::remark_login2 ?></p>
        </div>
    </section>
    <!-- TAG -->
    <section class="container">
        <div class="py-4 text-center text-white">
            <h2 class="fs-6 fs-md-4 mb-2"><?= L::lb_tag ?></h2>
            <div class="d-flex gap-2 gap-md-4 py-2 py-md-4 flex-wrap justify-content-center">
                <span class="d-block fs-7 fs-md-2 fw-semibold px-2 px-md-4 py-1 bg-black rounded-4"><?= L::remark_login3 ?></span>
                <span class="d-block fs-7 fs-md-2 fw-semibold px-2 px-md-4 py-1 bg-black rounded-4"><?= L::game_casino ?></span>
                <span class="d-block fs-7 fs-md-2 fw-semibold px-2 px-md-4 py-1 bg-black rounded-4"><?= L::remark_login3 ?></span>
                <span class="d-block fs-7 fs-md-2 fw-semibold px-2 px-md-4 py-1 bg-black rounded-4"><?= L::remark_login4 ?></span>
                <span class="d-block fs-7 fs-md-2 fw-semibold px-2 px-md-4 py-1 bg-black rounded-4"><?= L::game_casino ?></span>
                <span class="d-block fs-7 fs-md-2 fw-semibold px-2 px-md-4 py-1 bg-black rounded-4"><?= L::remark_login5 ?></span>
                <span class="d-block fs-7 fs-md-2 fw-semibold px-2 px-md-4 py-1 bg-black rounded-4"><?= L::remark_login6 ?></span>
                <span class="d-block fs-7 fs-md-2 fw-semibold px-2 px-md-4 py-1 bg-black rounded-4"><?= L::remark_login6 ?></span>
                <span class="d-block fs-7 fs-md-2 fw-semibold px-2 px-md-4 py-1 bg-black rounded-4"><?= L::remark_login7 ?></span>
                <span class="d-block fs-7 fs-md-2 fw-semibold px-2 px-md-4 py-1 bg-black rounded-4"><?= L::remark_login8 ?></span>
                <span class="d-block fs-7 fs-md-2 fw-semibold px-2 px-md-4 py-1 bg-black rounded-4"><?= L::remark_login9 ?></span>
            </div>
        </div>
    </section>
    <section class="container d-flex justify-content-center">
        <div class="py-2 py-md-5 text-center text-white col-12 col-md-10 max-auto">
            <h2 class="fs-6 fs-md-4 mb-2 mb-md-5"><?= L::lb_partnerships ?></h2>
            <div class="d-flex flex-column gap-3 overflow-hidden">
                <div class="d-flex gap-3 transform-to-l">
                    <div class="ratio partnerships-box">
                        <img data-src="assets/images/partnerships/1.png"

                             src="./images/misc/default-img-game.webp"                             class="object-fit-contain p-3 b-lazy" alt="PARTNERS">

                    </div>
                    <div class="ratio partnerships-box">
                        <img data-src="assets/images/partnerships/2.png"

                             src="./images/misc/default-img-game.webp"                             class="object-fit-contain p-3 b-lazy" alt="PARTNERS">

                    </div>
                    <div class="ratio partnerships-box">
                        <img data-src="assets/images/partnerships/3.png"

                             src="./images/misc/default-img-game.webp"                             class="object-fit-contain p-3 b-lazy" alt="PARTNERS">

                    </div>
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/4.png"
                    
                                                 src="./images/misc/default-img-game.webp"                             class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                                           
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/5.png"
                    
                                                 src="./images/misc/default-img-game.webp"                             class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <div class="ratio partnerships-box">
                        <img data-src="assets/images/partnerships/6.png"

                             src="./images/misc/default-img-game.webp"                             class="object-fit-contain p-3 b-lazy" alt="PARTNERS">

                    </div>
                    <div class="ratio partnerships-box">
                        <img data-src="assets/images/partnerships/7.png"

                             src="./images/misc/default-img-game.webp"                             class="object-fit-contain p-3 b-lazy" alt="PARTNERS">

                    </div>
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/8.png"
                    
                                                 src="./images/misc/default-img-game.webp"                             class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <div class="ratio partnerships-box">
                        <img data-src="assets/images/partnerships/9.png"

                             src="./images/misc/default-img-game.webp"                             class="object-fit-contain p-3 b-lazy" alt="PARTNERS">

                    </div>
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/10.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/11.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/12.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/13.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/14.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <div class="ratio partnerships-box">
                        <img data-src="assets/images/partnerships/15.png"
                             src="./images/misc/default-img-game.webp"
                             class="object-fit-contain p-3 b-lazy" alt="PARTNERS">

                    </div>
                    <div class="ratio partnerships-box">
                        <img data-src="assets/images/partnerships/16.png"
                             src="./images/misc/default-img-game.webp"
                             class="object-fit-contain p-3 b-lazy" alt="PARTNERS">

                    </div>
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/17.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <div class="ratio partnerships-box">
                        <img data-src="assets/images/partnerships/18.png"
                             src="./images/misc/default-img-game.webp"
                             class="object-fit-contain p-3 b-lazy" alt="PARTNERS">

                    </div>
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/19.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/20.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/21.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/22.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/23.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                </div>
                <div class="d-flex gap-3 transform-to-r">
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/24.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/25.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/26.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/27.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/28.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/29.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/30.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <div class="ratio partnerships-box">
                        <img data-src="assets/images/partnerships/31.png"
                             src="./images/misc/default-img-game.webp"
                             class="object-fit-contain p-3 b-lazy" alt="PARTNERS">

                    </div>
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/32.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/33.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/34.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/35.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/36.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/37.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/38.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                                        </div>-->
                    <div class="ratio partnerships-box">
                        <img data-src="assets/images/partnerships/39.png"
                             src="./images/misc/default-img-game.webp"
                             class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    </div>
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/40.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                                        </div>-->
                    <div class="ratio partnerships-box">
                        <img data-src="assets/images/partnerships/41.png"
                             src="./images/misc/default-img-game.webp"
                             class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    </div>
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/42.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/43.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/44.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/45.png"
                                                 src="./images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                                        </div>-->
                    <div class="ratio partnerships-box">
                        <img data-src="assets/images/partnerships/46.png"
                             src="./images/misc/default-img-game.webp"
                             class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container d-flex justify-content-center">
        <div class="py-2 py-md-5 text-center text-white col-12 col-md-10 max-auto">
            <h2 class="fs-6 fs-md-4 mb-2 mb-md-5"><?= L::lb_paymentAccep ?></h2>
            <div class="row g-2 g-md-3 g-lg-4 row-cols-5">
                <div class="col"><img src="assets/images/bank/1.png" class="img-fluid" alt="Bank"></div>
                <div class="col"><img src="assets/images/bank/2.png" class="img-fluid" alt="Bank"></div>
                <div class="col"><img src="assets/images/bank/3.png" class="img-fluid" alt="Bank"></div>
                <div class="col"><img src="assets/images/bank/4.png" class="img-fluid" alt="Bank"></div>
                <div class="col"><img src="assets/images/bank/5.png" class="img-fluid" alt="Bank"></div>
                <div class="col"><img src="assets/images/bank/6.png" class="img-fluid" alt="Bank"></div>
                <div class="col"><img src="assets/images/bank/7.png" class="img-fluid" alt="Bank"></div>
                <div class="col"><img src="assets/images/bank/8.png" class="img-fluid" alt="Bank"></div>
                <div class="col"><img src="assets/images/bank/9.png" class="img-fluid" alt="Bank"></div>
                <div class="col"><img src="assets/images/bank/10.png" class="img-fluid" alt="Bank"></div>
                <div class="col"><img src="assets/images/bank/11.png" class="img-fluid" alt="Bank"></div>
                <div class="col"><img src="assets/images/bank/12.png" class="img-fluid" alt="Bank"></div>
                <div class="col"><img src="assets/images/bank/13.png" class="img-fluid" alt="Bank"></div>
                <div class="col"><img src="assets/images/bank/14.png" class="img-fluid" alt="Bank"></div>
                <div class="col"><img src="assets/images/bank/15.png" class="img-fluid" alt="Bank"></div>
                <div class="col"><img src="assets/images/bank/16.png" class="img-fluid" alt="Bank"></div>
                <div class="col"><img src="assets/images/bank/17.png" class="img-fluid" alt="Bank"></div>
                <div class="col"><img src="assets/images/bank/18.png" class="img-fluid" alt="Bank"></div>
                <div class="col"><img src="assets/images/bank/19.png" class="img-fluid" alt="Bank"></div>
                <div class="col"><img src="assets/images/bank/20.png" class="img-fluid" alt="Bank"></div>
            </div>
        </div>
    </section>
    <section class="container py-3">
        <div class="py-3 text-center text-white bg-black rounded-4">
            <h2 class="fs-6 fs-md-4"><?= L::lb_createWebBy ?></h2>
            <img src="assets/images/media/tx-tech.png" class="img-fluid" style="max-width: 24rem;" alt="TX-Tech">
        </div>
    </section>
    <footer class="container py-3 py--md-4">
        <div class="py-4 text-center bg-black text-white rounded-4">
            <h1 class="fs-6 text-warning"><?= L::remark_TermAndConditions ?></h1>
            <p class="mb-0"><?= L::remark_copyright ?></p>
        </div>
    </footer>
    <div class="menubar">
        <div class="menubar-inner">
            <div class="row g-0 row-cols-5">
                <div class="col">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#depositWithdraw">
                        <img src="./assets/images/icons/deposit.png">ฝาก</a>
                </div>
                <div class="col">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#withdraw">
                        <img src="./assets/images/icons/withdraw.png">ถอน</a>
                </div>
                <div class="col">
                    <a class="nav-link menu-home" href="./Lobby">
                        <img src="./assets/images/icons/home.png">หน้าหลัก</a>
                </div>
                <div class="col">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#receiveLossModal">
                        <img src="./assets/images/icons/money-back.png">รับยอดเสีย</a>
                </div>
                <div class="col">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#bagModal">
                        <img src="./assets/images/icons/bag.png">กระเป๋า</a>
                </div>
            </div>
        </div>
    </div>
</main>




<script src="./js/authen/authen<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>
<script src="./js/authen/register<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>