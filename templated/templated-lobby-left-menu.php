<!-- Side Bar -->
<div class="sidebar-container">
    <aside class="sidebar">
        <div class="icon-turn-back">
            <a href="javascript:closeSideMenu()">
                <img src="./assets/images/turn-back 1.png" alt="" />
            </a>
        </div>
        <img src="./images/betboy/betboy-888-2.png" alt="logo" />
        <div class="flexBetween font-14">
            <p><?= L::lb_username ?> : </p>
            <p><?= $_SESSION['PROFILE']->info->profile->s_username ?></p>
        </div>
        <div class="flexBetween font-14">
            <p><?= L::lb_phonNo ?> :</p>
            <p><?= $_SESSION['PROFILE']->info->profile->s_phone ?></p>
        </div>
        <div class="balance">
            <small><?= L::lb_balance ?></small>
            <p id="balance-amount-left"><?= number_format($_SESSION['PROFILE']->balance->amount, 2) ?></p>
        </div>

        <div class="flexBetween" style="gap: 13px">
            <a class="gradient-border sidebar-button flexCenter text-decoration-none" data-bs-toggle="modal" data-bs-target="#profile" style="width: 50%">
                <?= L::lb_profile ?>
            </a>
            <button class="gradient-border sidebar-button flexCenter" onclick="callmodalDeposit()" style="width: 50%">
                <?= L::lb_deposit ?> - <?= L::lb_withdraw ?>
            </button>
        </div>
        <div class="flexBetween" style="gap: 13px">
            <button class="gradient-border sidebar-button flexCenter" style="width: 50%" id="bag-modal-btn" data-bs-toggle="modal" data-bs-target="#bagModal">
                <?= L::lb_wallet ?>
            </button>
            <button class="gradient-border sidebar-button flexCenter" style="width: 50%" id="history-btn" onclick="InquiryHistory()" data-bs-toggle="modal" data-bs-target="#historyModal">
                <?= L::lb_history ?>
            </button>
        </div>


        <a href="<?= $_SESSION["PROFILE"]->info->configLobby->s_line ?>" target="_blank" class="gradient-border sidebar-button flexCenter text-decoration-none"
            style="width: 100%; margin-bottom: 16px">
            <?= L::lb_contactus ?>
        </a>
        <button class="gradient-border sidebar-button flexCenter" style="width: 100%; margin-bottom: 16px" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
            <?= L::lb_changepass ?>
        </button>
        <button class="gradient-border sidebar-button flexCenter" style="width: 100%; margin-bottom: 16px" data-bs-toggle="modal" data-bs-target="#confirmLogout">
            <?= L::lb_logout ?>
        </button>

    </aside>
    <div class="sidebar-container-background"></div>
</div>