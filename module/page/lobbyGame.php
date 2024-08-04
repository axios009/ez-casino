<?php
@session_start();

include 'modal-cashback.php';
include 'modal-changePassword.php';
//include 'modal-checkin.php';
include 'modal-coupon.php';
//include 'modal-creditFree.php';
include 'modal-deposit.php';
//include 'modal-diamondFree.php';
include 'modal-history.php';
include 'modal-makeMoney.php';
include 'modal-profile.php';
include 'modal-promotion.php';
//include 'modal-randomBox.php';
//include 'modal-receiveLoss.php';
//include 'modal-roadMap.php';
//include 'modal-tournament.php';
include 'modal-wallet.php';
//include 'modal-wheel.php';
include 'modal-withdraw.php';
//include 'modal-share.php';
include 'modal-confirmlogout.php';
//include 'modal-affiliateMember.php';
//include 'modal-news.php';
include 'modal-luckyWheel.php';
?>


<section class="banner position-relative">
    <div class="swiper slide-banner">
        <div class="swiper-wrapper banner-slide">
            <?php
            $slide = $_SESSION["PROFILE"]->info->slide;
            if (is_array($slide)) {
                $numberSlide = count($slide);
            }
            if ($slide != NULL) {
                foreach ($slide as $k => $v) {
                    if ($v->s_position == 'page_main') {
                        ?>
                        <div class="swiper-slide text-center">
                            <img src="data:image/webp;base64,<?= $v->s_image ?>" class="w-banner-slide" alt="Banner 1" style="width: 100%">
                        </div>
                        <?php
                    }
                }
            }
            ?>
        </div>
        <div class="swiper-pagination py-1 py-md-2 py-lg-3 py-xl-4 py-xxl-5"></div>
    </div>
</section>

<section class="container-fluid d-flex  mt-10-px justify-content-center position-relative  elm-mobile">
    <div class="py-2 py-md-5 text-center text-white col-12 col-md-10 max-auto">
        <div class="row gap-7vw  d-flex">
            <div class="col cursor-pointer game-seletor-menu" onclick="selectGameBar('slot')">
                <img src="./assets/icons/slot.png" class="icon-game" width="60px" alt="<?= L::game_slot ?>" onclick="selectorGame(this, 'SLOT')">
                <p>
                    <?= L::game_slot ?>
                </p>
            </div>
            <div class="col cursor-pointer game-seletor-menu" onclick="selectGameBar('casino')">
                <img src="./assets/icons/casino.png" class="icon-game" width="60px" alt="<?= L::game_fishing ?>" onclick="selectorGame(this, 'FISHING')">
                <p>
                    <?= L::game_casino ?>
                </p>
            </div>
            <div class="col cursor-pointer game-seletor-menu" onclick="selectGameBar('fishing')">
                <img src="./assets/icons/fishing.png" class="icon-game" width="60px" alt="<?= L::game_fishing ?>" onclick="selectorGame(this, 'FISHING')">
                <p>
                    <?= L::game_fishing ?>
                </p>
            </div>
            <div class="col cursor-pointer game-seletor-menu" onclick="selectGameBar('pokdeng')">
                <img src="./assets/icons/pokdeng.png" class="icon-game" width="60px" alt="<?= L::game_pokdeng ?>" onclick="selectorGame(this, 'POKDENG')">
                <p>
                    <?= L::game_pokdeng ?>
                </p>
            </div>
            <div class="col cursor-pointer game-seletor-menu" onclick="selectGameBar('sport')">
                <img src="./assets/icons/sport.png" class="icon-game" width="60px" alt="<?= L::game_sport ?>" onclick="selectorGame(this, 'SPORT')">
                <p>
                    <?= L::game_sport ?>
                </p>
            </div>
        </div>
    </div>
</section>

<div style="height: 15px;"></div>
<div class="marquee-container">
    <marquee class="description">
        เว็บตรง ไม่ผ่านเอเย่นต์ อันดับ 1 ฝาก-ถอน ไม่มีขั้นต่ำ ถอนสูงสุดวันละ 100 ล้าน สล็อต บาคาร่า หวย กีฬา มีครบจบที่เดียว
    </marquee>
</div>


<!-- desktop game -->
<section class="card-container container-game desktop-game-slot">
    <div class="card-wrapper">
        <?php foreach ($ListGame as $k => $v) { ?>
            <?php if ($status == 'MA' || $statusAgent == 'MA') { ?>
                <img src="./images/icon/ma-<?= $_SESSION["lang"] ?>.png" class="ma-ribbon" >
            <?php } ?>
            <div class="game-card">
                <div class="btn-play-game-container">
                    <a href="AccessGamePage/<?= $BrandCode ?>/<?= $v->s_game_code ?>" <?php if ($status != 'MA' && $statusAgent != 'MA') { ?>
                           href="./Game/<?= $link ?>" target="_blank"
                       <?php } ?> >
                           <?php if ($brandCode == 'B009') { ?>
                            <!--<div class="icon-hot-banner"></div>-->
                        <?php } ?>
                        <button class="btn-play-game"><?= L::lb_playnow ?></button>


                    </a>
                </div>
                <img class="img-fluid  lazyload  <?= ($status == 'MA' || $statusAgent == 'MA' ? 'game-ma' : '') ?>" 
                     src="./images/misc/default-img-game.webp" 
                     data-src="./images/banner/<?= $v->s_brand_code ?>/<?= $v->s_game_code ?>.png" 
                     data-src-small="./images/banner/<?= $v->s_brand ?>/<?= $v->s_game_code ?>.png">
            </div>
        <?php } ?>
    </div>
</section>
<section class="card-container container-game d-none elm-desktop desktop-game-casino">
    <div class="card-wrapper">
        <?php
        foreach ($ListBrand->CASINO as $k => $v) {
            $name = $v->s_brand_name;
            $brandGame = "";
            $status = $v->s_status;
            $statusAgent = $v->s_status_agent;
            $newtap = TRUE;
            $brandCode = $v->s_brand_code;
            $link = $v->s_pbrand_code;
            $GmeType = $v->s_type;
            $srcImage = 'assets/images/Baner/desktop/' . $v->s_brand_code . '.webp?v=' . $_SESSION['version'];
            $brandGame = $v->s_pbrand_code;
            ?>
            <?php if ($status == 'MA' || $statusAgent == 'MA') { ?>
                <img src="./images/icon/ma-<?= $_SESSION["lang"] ?>.png" class="ma-ribbon" >
            <?php } ?>
            <div class="game-card">
                <div class="btn-play-game-container">
                    <a <?php if ($status != 'MA' && $statusAgent != 'MA') { ?>
                            href="./Game/<?= $link ?>" target="_blank"
                        <?php } ?> >
                            <?php if ($brandCode == 'B009') { ?>
                            <!--<div class="icon-hot-banner"></div>-->
                        <?php } ?>
                        <button class="btn-play-game">เล่นเลย</button>
                    </a>
                </div>
                <img src="./images/misc/default-img-game.webp" 
                     data-src="<?= $srcImage ?>"
                     data-src-small="<?= $srcImage ?>"
                     data-src-medium="<?= $srcImage ?>"
                     data-src-large="<?= $srcImage ?>"
                     class=" lazyload  <?= ($status == 'MA' || $statusAgent == 'MA' ? 'game-ma' : '') ?>" >
            </div>
        <?php } ?>
    </div>
</section>





<script> var NEWSMODAL = '<?= $NEWSMODAL ?>';</script>

<script src="./js/lobby/lobby<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>
<script src="./js/page/deposit<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>
<script src="./js/page/withdraw<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>
<script src="./js/page/history<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>
<script src="./js/page/wallet<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>
<script src="./js/page/coupon<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>
<script src="./js/page/share<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>
<script src="./js/page/affiliate<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>
<script src="./js/page/promotion<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>
<script src="./js/slide<?= $_SESSION['contextMin'] ?>.js?v=<?= $_SESSION['version'] ?>"></script>