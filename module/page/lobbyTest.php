<?php
@session_start();

include 'modal-cashback.php';
include 'modal-changePassword.php';
include 'modal-checkin.php';
include 'modal-coupon.php';
include 'modal-creditFree.php';
include 'modal-deposit.php';
include 'modal-diamondFree.php';
include 'modal-history.php';
include 'modal-makeMoney.php';
include 'modal-profile.php';
include 'modal-promotion.php';
include 'modal-randomBox.php';
include 'modal-receiveLoss.php';
include 'modal-roadMap.php';
include 'modal-tournament.php';
include 'modal-wallet.php';
include 'modal-wheel.php';
include 'modal-withdraw.php';
include 'modal-share.php';
include 'modal-affiliate.php';
?>







<main>
    <!-- Banner -->
    <section class="banner position-relative">
        <div class="bg-banner position-absolute top-0 start-0 end-0 -z-1">
            <div class="bg-banner-inner">
                <img src="assets/images/media/bg-banner.webp" class="img-fluid" alt="BG Banner">
            </div>
        </div>
        <div class="swiper slide-banner">
            <div class="swiper-wrapper">
                <div class="swiper-slide text-center">
                    <img src="assets/images/banner/1.png" class="w-banner-slide" alt="Banner 1">
                </div>
                <div class="swiper-slide text-center">
                    <img src="assets/images/banner/1.png" class="w-banner-slide" alt="Banner 2">
                </div>
                <div class="swiper-slide text-center">
                    <img src="assets/images/banner/1.png" class="w-banner-slide" alt="Banner 3">
                </div>
            </div>
            <div class="swiper-pagination position-relative py-1 py-md-2 py-lg-3 py-xl-4 py-xxl-5"></div>
        </div>
    </section>
    <!-- category -->
    <section class="container position-relative z-3">
        <div class="row g-2 g-md-3 g-xl-4 row-cols-2 mb-3 mb-xl-4">
            <div class="col">
                <div class="card category-red category-unactve btn-select-game" onclick="selectorGame(this, 'HIT')">
                    <a href="./Hothit" class="inner">
                        <img src="assets/images/games-category/hot.png" alt="<?= L::lb_topGame ?>">
                        <h3 class="text-nowrap m-0 btn-font-responsive-<?= $_SESSION["lang"] ?>"><?= L::lb_topGame ?></h3>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card category-red category-unactve btn-select-game" onclick="selectorGame(this, 'FAVORITE')">
                    <a href="./Favorite" class="inner">
                        <img src="assets/images/games-category/favorite.png" alt="<?= L::lb_favoriteGame ?>">
                        <h3 class="text-nowrap m-0 btn-font-responsive-<?= $_SESSION["lang"] ?>"><?= L::lb_favoriteGame ?></h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="row g-2 g-md-3 g-xl-4 row-cols-4">
            <div class="col">
                <div class="card category-purple btn-select-game <?= ($gameBtn == 'SLOT' ? 'active' : '') ?>" onclick="selectorGame(this)">
                    <a href="./Slot" class="inner">
                        <img src="assets/images/games-category/slot.png" alt="สล็อต">
                        <h3 class="text-nowrap m-0 btn-font-responsive-<?= $_SESSION["lang"] ?>"><?= L::game_slot ?></h3>
                    </a>

                </div>
            </div>
            <div class="col">
                <div class="card category-purple btn-select-game <?= ($gameBtn == 'FISHING' ? 'active' : '') ?>" onclick="selectorGame(this)">
                    <a href="./Fishing" class="inner">
                        <img src="assets/images/games-category/shooting-fish.png" alt="<?= L::game_fishing ?>">
                        <h3 class="text-nowrap m-0 btn-sub-font-responsive-<?= $_SESSION["lang"] ?>"><?= L::game_fishing ?></h3>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card category-purple btn-select-game <?= ($gameBtn == 'CASIMO' ? 'active' : '') ?>" onclick="selectorGame(this)">
                    <a href="./Casino" class="inner">
                        <img src="assets/images/games-category/casino.png" alt="คาสิโน">
                        <h3 class="text-nowrap m-0 btn-sub-font-responsive-<?= $_SESSION["lang"] ?>"><?= L::game_casino ?></h3>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card category-purple btn-select-game <?= ($gameBtn == 'SPORT' ? 'active' : '') ?> " onclick="selectorGame(this)">
                    <a href="./Sport" class="inner">
                        <img src="assets/images/games-category/sport.png" alt="<?= L::game_sport ?>">
                        <h3 class="text-nowrap m-0 btn-sub-font-responsive-<?= $_SESSION["lang"] ?>"><?= L::game_sport ?></h3>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Games -->
    <section class="container py-4 py-md-5">
        <div class="p-2 p-md-3 p-lg-4 p-xl-5 bg-black bg-opacity-50 rounded-5">
            <div class="mb-3 mb-lg-4">
                <a href="Slot" class="btn btn-goback"><?= L::btn_back ?></a>
            </div>
            <div class="input-group input-group-lg mb-3 mb-lg-4">
                <span class="input-group-text rounded-start-pill border-end-0 pe-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <g clip-path="url(#clip0_1330_9938)">
                    <path
                        d="M23.6719 20.7516L18.9984 16.0781C18.7875 15.8672 18.5016 15.75 18.2016 15.75H17.4375C18.7313 14.0953 19.5 12.0141 19.5 9.75C19.5 4.36406 15.1359 0 9.75 0C4.36406 0 0 4.36406 0 9.75C0 15.1359 4.36406 19.5 9.75 19.5C12.0141 19.5 14.0953 18.7313 15.75 17.4375V18.2016C15.75 18.5016 15.8672 18.7875 16.0781 18.9984L20.7516 23.6719C21.1922 24.1125 21.9047 24.1125 22.3406 23.6719L23.6672 22.3453C24.1078 21.9047 24.1078 21.1922 23.6719 20.7516ZM9.75 15.75C6.43594 15.75 3.75 13.0688 3.75 9.75C3.75 6.43594 6.43125 3.75 9.75 3.75C13.0641 3.75 15.75 6.43125 15.75 9.75C15.75 13.0641 13.0688 15.75 9.75 15.75Z"
                        fill="#949494" />
                    </g>
                    <defs>
                    <clipPath id="clip0_1330_9938">
                        <rect width="24" height="24" fill="white" />
                    </clipPath>
                    </defs>
                    </svg>
                </span>
                <input type='hidden' id="s_brand_code" name="s_brand_code" value="<?= $BrandCode ?>">
                <input class="form-control rounded-end-pill border-start-0" type="search" name="search" id="search" onkeyup="searchGame(event)" placeholder="<?= L::btn_search ?>">
            </div>
        </div>
        <div class="row g-2 g-md-3 row-cols-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-6" id="game-elem">
            <?php if ($ListGame == NULL) { ?>
                <div class="col m-auto">
                    <p class="text-white"><?= L::lb_noData ?></p>
                </div>
            <?php } ?>
            <?php foreach ($ListGame as $k => $v) { ?>
                <div class="col ">
                    <div class='container position-relative'>
                        <div class="bar-favorite">
                            <a href="javascript:favoriteSelect('<?= $v->s_brand_code ?>','<?= $v->s_game_code ?>','<?= $v->id_favorite ?>');" >
                                <img src="./images/icon/favorite<?= $v->s_flg_favorite == 'Y' ? '-active' : '' ?>.png" 
                                     class="favorite-icon" id="fav_<?= $v->s_brand_code . $v->s_game_code ?>" alt="<?= $v->s_game_name ?>">
                            </a>
                        </div>
                        <?php if ($v->s_status == 'A') { ?>
                            <a href="AccessGamePage/<?= $BrandCode ?>/<?= $v->s_game_code ?>" target="_blank" >
                                <img  class="img-fluid ls- b-lazy"
                                      src="./images/misc/default-img-game.webp"  
                                      data-src="<?= $v->s_img ?>"
                                      data-src-small="<?= $v->s_img ?>"
                                      >
                            </a>
                        <?php } else { ?> 
                            <img   class="img-fluid  b-lazy game-ma" 
                                   src="./images/misc/default-img-game.webp"  
                                   data-src="<?= $v->s_img ?>"
                                   data-src-small="<?= $v->s_img ?>"
                                   >
                               <?php } ?>


                    </div>
                    <div class="row justify-content-center">
                        <div class="progress-bar-percen">
                            <div class="col-12 content">
                                <div id="processbar_<?= $v->s_game_code ?>"class="row" style="width:<?= $v->f_percen ?>%">
                                  
                                </div>
                               



                            </div>
                        </div>

                    </div>
                    <p class="text-center text-white">
                        <?= $v->s_game_name ?>
                    </p>
                </div>
            <?php } ?>
        </div>
    </section>
    <div class="py-5"></div>
</main>







<script src="./js/lobby/lobby<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>
<script src="./js/page/deposit<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>
<script src="./js/page/withdraw<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>
<script src="./js/page/history<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>
<script src="./js/page/wallet<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>
<script src="./js/page/coupon<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>
<script src="./js/page/share<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>
<script src="./js/page/promotion<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>

