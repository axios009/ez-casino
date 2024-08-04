<!-- Menubar -->
<style>
    .menubar{
        --menubar-home-bg: url(../images/shape/home-<?= $_SESSION["lang"] ?>.png) !important;
    }
</style>
<div class="menubar menubar-authen">
    <div class="menubar-inner">
        <div class="row g-0 row-cols-5">
            <div class="col">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#affiliateModal">
                    <img src="./assets/images/icons/deposit.png" /><?= L::menu_deposit ?></a>
            </div>
            <div class="col">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#affiliateModal" >
                    <img src="./assets/images/icons/withdraw.png" /><?= L::menu_withdraw ?></a>
            </div>
            <div class="col">
                <a class="nav-link menu-home" href="#" data-bs-toggle="modal" data-bs-target="#affiliateModal"></a>
            </div>
            <div class="col">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#affiliateModal">
                    <img src="./assets/images/icons/money-back.png" /><?= L::menu_receiveCashBack ?></a>
            </div>
            <div class="col">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#affiliateModal">
                    <img src="./assets/images/icons/bag.png" /><?= L::menu_wallet ?></a>
            </div>
        </div>
    </div>
</div>