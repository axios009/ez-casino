<?php
@session_start();
include 'modal-register.php';
include 'modal-login.php';
include 'modal-affiliate.php';
?>



<header class="header navbar align-items-center d-flex">
    <div class="navbar-inner">
        <div class="container-fluid">
            <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
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
    <div style="height: 10px;"></div>
    <section class="banner position-relative">
        <div class="swiper slide-banner">
            <div class="swiper-wrapper banner-slide">
                <?php
                $original_json = file_get_contents('./Config/' . AGENT . '/config.json');
                $config = json_decode($original_json);
                $slide = $config->slide->image->page_main;
                foreach ($slide as $k => $v) {
                    ?>
                    <div class="swiper-slide text-center">
                        <img src="./Config/<?= AGENT ?>/slide/<?= $v ?>" class="w-banner-slide" alt="Banner 1" style="width: 100%">
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-pagination py-1 py-md-2 py-lg-3 py-xl-4 py-xxl-5"></div>
        </div>
    </section>
    <!-- access -->
    <br/>
    <section class="container position-relative z-3">
        <div class="row justify-content-between">
            <div class="col-lg-5 col-6 text-end">
                <button type="button" class="btn btn-register" data-bs-toggle="modal" data-bs-target="#affiliateModal"><span
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
                            <img  class="img-fluid ls- lazyload "
                                  src="./images/misc/default-img-game.webp"  
                                  data-src="assets/images/games/<?= $v ?>_<?= $_SESSION["lang"] ?>.webp"
                                  >
                        </a>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="py-4 text-center bg-black bg-opacity-75 text-white banner-login">
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
    <!-- PARTNERSHIPS -->
    <section class="container d-flex justify-content-center">
        <div class="py-2 py-md-5 text-center text-white col-12 col-md-10 max-auto">
            <h2 class="fs-6 fs-md-4 mb-2 mb-md-5"><?= L::lb_partnerships ?></h2>
            <div class="d-flex flex-column gap-3 overflow-hidden">
                <div class="d-flex gap-3 transform-to-l">
                    <div class="ratio partnerships-box">
                        <img  class="object-fit-contain p-3 lazyload "
                              src="./images/misc/default-img-game.webp"  
                              data-src="assets/images/partnerships/1.png"
                              alt="PARTNERS"
                              >
                    </div>
                    <div class="ratio partnerships-box">
                        <img  class="object-fit-contain p-3 lazyload "
                              src="./images/misc/default-img-game.webp"  
                              data-src="assets/images/partnerships/2.png"
                              alt="PARTNERS"
                              >

                    </div>
                    <div class="ratio partnerships-box">
                        <img  class="object-fit-contain p-3 lazyload "
                              src="./images/misc/default-img-game.webp"  
                              data-src="assets/images/partnerships/3.png"
                              alt="PARTNERS"
                              >

                    </div>
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/4.png"
                    
                                                 src="../images/misc/default-img-game.webp"                             class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                                           
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/5.png"
                    
                                                 src="../images/misc/default-img-game.webp"                             class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <div class="ratio partnerships-box">
                        <img  class="object-fit-contain p-3 lazyload "
                              src="./images/misc/default-img-game.webp"  
                              data-src="assets/images/partnerships/6.png"
                              alt="PARTNERS"
                              >

                    </div>
                    <div class="ratio partnerships-box">
                        <img  class="object-fit-contain p-3 lazyload "
                              src="./images/misc/default-img-game.webp"  
                              data-src="assets/images/partnerships/7.png"
                              alt="PARTNERS"
                              >
                    </div>
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/8.png"
                    
                                                 src="../images/misc/default-img-game.webp"                             class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <div class="ratio partnerships-box">
                        <img  class="object-fit-contain p-3 lazyload "
                              src="./images/misc/default-img-game.webp"  
                              data-src="assets/images/partnerships/9.png"
                              alt="PARTNERS"
                              >

                    </div>
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/10.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/11.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/12.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/13.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/14.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <div class="ratio partnerships-box">
                        <img  class="object-fit-contain p-3 lazyload "
                              src="./images/misc/default-img-game.webp"  
                              data-src="assets/images/partnerships/15.png"
                              alt="PARTNERS"
                              >

                    </div>
                    <div class="ratio partnerships-box">
                        <img  class="object-fit-contain p-3 lazyload "
                              src="./images/misc/default-img-game.webp"  
                              data-src="assets/images/partnerships/16.png"
                              alt="PARTNERS"
                              >

                    </div>
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/17.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <div class="ratio partnerships-box">
                        <img  class="object-fit-contain p-3 lazyload "
                              src="./images/misc/default-img-game.webp"  
                              data-src="assets/images/partnerships/18.png"
                              alt="PARTNERS"
                              >

                    </div>
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/19.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/20.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/21.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/22.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/23.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                </div>
                <div class="d-flex gap-3 transform-to-r">
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/24.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/25.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/26.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/27.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/28.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/29.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/30.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <div class="ratio partnerships-box">
                        <img  class="object-fit-contain p-3 lazyload "
                              src="./images/misc/default-img-game.webp"  
                              data-src="assets/images/partnerships/31.png"
                              alt="PARTNERS"
                              >

                    </div>
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/32.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/33.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/34.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                    
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/35.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/36.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/37.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/38.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                                        </div>-->
                    <div class="ratio partnerships-box">
                        <img  class="object-fit-contain p-3 lazyload "
                              src="./images/misc/default-img-game.webp"  
                              data-src="assets/images/partnerships/39.png"
                              alt="PARTNERS"
                              >
                    </div>
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/40.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                                        </div>-->
                    <div class="ratio partnerships-box">
                        <img  class="object-fit-contain p-3 lazyload "
                              src="./images/misc/default-img-game.webp"  
                              data-src="assets/images/partnerships/41.png"
                              alt="PARTNERS"
                              >
                    </div>
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/42.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/43.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/44.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                                        </div>-->
                    <!--                    <div class="ratio partnerships-box">
                                            <img data-src="assets/images/partnerships/45.png"
                                                 src="../images/misc/default-img-game.webp"
                                                 class="object-fit-contain p-3 b-lazy" alt="PARTNERS">
                                        </div>-->
                    <div class="ratio partnerships-box">
                        <img  class="object-fit-contain p-3 lazyload "
                              src="./images/misc/default-img-game.webp"  
                              data-src="assets/images/partnerships/46.png"
                              alt="PARTNERS"
                              >
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container d-flex justify-content-center">
        <div class="py-2 py-md-5 text-center text-white col-12 col-md-10 max-auto">
            <h2 class="fs-6 fs-md-4 mb-2 mb-md-5"><?= L::lb_paymentAccep ?></h2>
            <div class="row g-2 g-md-3 g-lg-4 row-cols-5">
                <div class="col">
                    <img  class="img-fluid lazyload " src="./images/misc/default-img-game.webp"  data-src="assets/images/bank/1.png" alt="Bank">
                </div>
                <div class="col">
                    <img  class="img-fluid lazyload " src="./images/misc/default-img-game.webp"  data-src="assets/images/bank/2.png" alt="Bank">
                </div>
                <div class="col">
                    <img  class="img-fluid lazyload " src="./images/misc/default-img-game.webp"  data-src="assets/images/bank/3.png" alt="Bank">
                </div>
                <div class="col">
                    <img  class="img-fluid lazyload " src="./images/misc/default-img-game.webp"  data-src="assets/images/bank/4.png" alt="Bank">
                </div>
                <div class="col">
                    <img  class="img-fluid lazyload " src="./images/misc/default-img-game.webp"  data-src="assets/images/bank/5.png" alt="Bank">
                </div>
                <div class="col">
                    <img  class="img-fluid lazyload " src="./images/misc/default-img-game.webp"  data-src="assets/images/bank/6.png" alt="Bank">
                </div>
                <div class="col">
                    <img  class="img-fluid lazyload " src="./images/misc/default-img-game.webp"  data-src="assets/images/bank/7.png" alt="Bank">
                </div>
                <div class="col">
                    <img  class="img-fluid lazyload " src="./images/misc/default-img-game.webp"  data-src="assets/images/bank/8.png" alt="Bank">
                </div>
                <div class="col">
                    <img  class="img-fluid lazyload " src="./images/misc/default-img-game.webp"  data-src="assets/images/bank/9.png" alt="Bank">
                </div>
                <div class="col">
                    <img  class="img-fluid lazyload " src="./images/misc/default-img-game.webp"  data-src="assets/images/bank/10.png" alt="Bank">
                </div>
                <div class="col">
                    <img  class="img-fluid lazyload " src="./images/misc/default-img-game.webp"  data-src="assets/images/bank/11.png" alt="Bank">
                </div>
                <div class="col">
                    <img  class="img-fluid lazyload " src="./images/misc/default-img-game.webp"  data-src="assets/images/bank/12.png" alt="Bank">
                </div>
                <div class="col">
                    <img  class="img-fluid lazyload " src="./images/misc/default-img-game.webp"  data-src="assets/images/bank/13.png" alt="Bank">
                </div>
                <div class="col">
                    <img  class="img-fluid lazyload " src="./images/misc/default-img-game.webp"  data-src="assets/images/bank/14.png" alt="Bank">
                </div>
                <div class="col">
                    <img  class="img-fluid lazyload " src="./images/misc/default-img-game.webp"  data-src="assets/images/bank/15.png" alt="Bank">
                </div>
                <div class="col">
                    <img  class="img-fluid lazyload " src="./images/misc/default-img-game.webp"  data-src="assets/images/bank/16.png" alt="Bank">
                </div>
                <div class="col">
                    <img  class="img-fluid lazyload " src="./images/misc/default-img-game.webp"  data-src="assets/images/bank/17.png" alt="Bank">
                </div>
                <div class="col">
                    <img  class="img-fluid lazyload " src="./images/misc/default-img-game.webp"  data-src="assets/images/bank/18.png" alt="Bank">
                </div>
                <div class="col">
                    <img  class="img-fluid lazyload " src="./images/misc/default-img-game.webp"  data-src="assets/images/bank/19.png" alt="Bank">
                </div>
                <div class="col">
                    <img  class="img-fluid lazyload " src="./images/misc/default-img-game.webp"  data-src="assets/images/bank/20.png" alt="Bank">
                </div>
            </div>
        </div>
    </section>
    <section class="container py-3">
        <div class="py-3 text-center text-white bg-black rounded-4 banner-login">
            <h2 class="fs-6 fs-md-4"><?= L::lb_createWebBy ?></h2>
            <img src="assets/images/media/tx-tech.png" class="img-fluid" style="max-width: 23rem;" alt="TX-Tech">
        </div>
    </section>
    <footer class="container py-3 py--md-4">
        <div class="py-4 text-center bg-black text-white rounded-4">
            <h1 class="fs-6 text-warning"><?= L::remark_TermAndConditions ?></h1>
            <p class="mb-0"><?= L::remark_copyright ?></p>
        </div>
    </footer>

</main>

<script>
    var action = '<?= $action ?>';
</script> 
<script src="./js/slide<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>
<script src="./js/authen/authen<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>
<script src="./js/authen/register<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>