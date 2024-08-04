<!-- Wallet -->


<!--<div class="modal fade modal-lobby" id="bagModal" tabindex="-1" aria-labelledby="bagModalLabel" aria-hidden="true" >-->
<div class="modal fade modal-lobby" id="bagModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog">
    <div class="modal-border">
        <div class="modal-content modal-dialog ">
            <div class="modal-content">
                <div class="modal-header-container">
                    <div class="modal-header">
                        <p class="modal-title"><?= L::lb_wallet ?></p>
                        <img src="./assets/icons/icon-close-modal.svg" class="modal-icon-close" data-bs-dismiss="modal" aria-label="Close" alt="">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="bag-modal-content">
                        <div class="bag-modal-slide-container">
                            <img loading="lazy" src="./images/betboy/bn4.png" alt="">
                        </div>

                        <div class="bag-modal-menu">
                            <div class="bag-modal-menu-item" id="promotion-modal-btn" data-bs-toggle="modal" data-bs-target="#promotionModal" data-bs-dismiss="modal">
                                <div class="bag-menu-img-container">
                                    <img class="bag-menu-icon" src="./assets/icons/icon-promotion.svg" alt="">
                                </div>
                                <p class="bag-modal-menu-title"><?= L::menu_promotion ?></p>
                            </div>
                            <div class="bag-modal-menu-item" data-bs-toggle="modal" data-bs-target="#depositWithdraw" data-bs-dismiss="modal">
                                <div class="bag-menu-img-container">
                                    <img class="bag-menu-icon" src="./assets/icons/icon-withdraw.svg" alt="">
                                </div>
                                <p class="bag-modal-menu-title"><?= L::menu_deposit2withdraw ?></p>
                            </div>
                            <div class="bag-modal-menu-item" data-bs-toggle="modal" data-bs-target="#makeMoneyModal" data-bs-dismiss="modal">
                                <div class="bag-menu-img-container">
                                    <img class="bag-menu-icon" src="./assets/icons/icon-earn-money.svg" alt="">
                                </div>
                                <p class="bag-modal-menu-title"><?= L::menu_makeMoney ?></p>
                            </div>
                            <div class="bag-modal-menu-item" id="code-modal-btn" data-bs-toggle="modal" data-bs-target="#codeModal" data-bs-dismiss="modal">
                                <div class="bag-menu-img-container">
                                    <img class="bag-menu-icon" src="./assets/icons/icon-ticket.svg" alt="">
                                </div>
                                <p class="bag-modal-menu-title"><?= L::menu_coupon ?></p>
                            </div>
                            <div class="bag-modal-menu-item" onclick="openModal('spinnerModal')">
                                <div class="bag-menu-img-container">
                                    <img class="bag-menu-icon" src="./assets/icons/icon-spinner.svg" alt="">
                                </div>
                                <p class="bag-modal-menu-title"><?= L::menu_wheel ?></p>
                            </div>
                            <!--                            <div class="bag-modal-menu-item" data-bs-toggle="modal" data-bs-target="#creditModal" data-bs-dismiss="modal">
                                                            <div class="bag-menu-img-container">
                                                                <img class="bag-menu-icon" src="./assets/icons/icon-teasure.svg" alt="">
                                                            </div>
                                                            <p class="bag-modal-menu-title"><?= L::menu_creditFree ?></p>
                                                        </div>-->
                            <div class="bag-modal-menu-item" data-bs-toggle="modal" data-bs-target="#cashbackDetail" data-bs-dismiss="modal">
                                <div class="bag-menu-img-container">
                                    <img class="bag-menu-icon" src="./assets/icons/icon-back-cash.svg" alt="">
                                </div>
                                <p class="bag-modal-menu-title"><?= L::menu_cashback ?></p>
                            </div>
                            <!--                            <div class="bag-modal-menu-item" data-bs-toggle="modal" data-bs-target="#diamondModal" data-bs-dismiss="modal">
                                                            <div class="bag-menu-img-container">
                                                                <img class="bag-menu-icon" src="./assets/icons/icon-diamond.svg" alt="">
                                                            </div>
                                                            <p class="bag-modal-menu-title"><?= L::menu_exchangeDiamon ?></p>
                                                        </div>-->
                            <!--                            <div class="bag-modal-menu-item" data-bs-toggle="modal" data-bs-target="#tournamentModal" data-bs-dismiss="modal">
                                                            <div class="bag-menu-img-container">
                                                                <img class="bag-menu-icon" src="./assets/icons/icon-trophy.svg" alt="">
                                                            </div>
                                                            <p class="bag-modal-menu-title"><?= L::menu_tournament ?></p>
                                                        </div>-->
                            <!--                            <div class="bag-modal-menu-item">
                                                            <div class="bag-menu-img-container">
                                                                <img class="bag-menu-icon" src="./assets/icons/icon-road-map.svg" alt="">
                                                            </div>
                                                            <p class="bag-modal-menu-title"><?= L::menu_roadmap ?></p>
                                                        </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script id="config" defer="">
    // var _dynamicParams = {
    //     "config":
    //     {
    //         "wheelUX": "3",
    //         "totalSlices": "12",
    //         "distanceDeg": 45,
    //         "defaultStartDeg": 270,
    //         "borderSlice": 5,
    //         "sliceWidth": 30,
    //         "graphicOption": 1,
    //         "brandLogo": "assets/images/gold-02.png",
    //         "backgroundColor": "#337ab7",
    //         "allowSound": true,
    //         "anims": {
    //             "fallingSnow": false,
    //             "flame": false
    //         }
    //     },
    //     "jsonData": [],
    //     "anims": { "fallingSnow": false }
    // }
</script>
<script src="./js/luckyWheel/js/svg.min.js" defer></script>
<script src="./js/luckyWheel/js/layout.js" defer></script>
<script src="./js/luckyWheel/js/swiper.min.js" data-type="admin" id="swiper-js"></script>
<script src="./js/luckyWheel/js/spectrum.min.js" data-type="admin" defer></script>
<script src="./js/luckyWheel/js/jszip.min.js" data-type="admin" defer></script>
<script src="./js/luckyWheel/js/jszip-utils.min.js" data-type="admin" defer></script>
<script src="./js/luckyWheel/js/filesaver.js" data-type="admin" defer></script>
<script src="./js/luckyWheel/js/params.js" data-type="admin" defer></script>
<!-- <script src="js/luckyWheel/js/svg.min.js"></script>
<script src="js/luckyWheel/js/layout.js"></script>
<script src="js/luckyWheel/js/params.js"></script> -->
