<!-- Side Bar -->
<div class="sidebar-container">
    <aside class="sidebar">
        <div class="icon-turn-back">
            <img src="./assets/images/turn-back 1.png" alt="" />
        </div>
        <img src="./images/betboy/betboy-888-2.png" alt="logo" />
        <!--        <div class="flexBetween font-14">
            <p>사용자 이름 : </p>
            <p>ST1561651</p>
        </div>
        <div class="flexBetween font-14">
            <p>전화 번호 :</p>
            <p>095-222-9999</p>
        </div>
        <div class="balance">
            <small>일반머니</small>
            <p>1,000.00</p>
        </div>-->

        <div class="flexBetween" style="gap: 13px">
            <button class="gradient-border sidebar-button flexCenter" style="width: 50%" data-bs-toggle="modal" data-bs-target="#profile">

                <?= L::lb_profile ?>
            </button>
            <button class="gradient-border sidebar-button flexCenter" data-bs-toggle="modal" data-bs-target="#depositWithdraw" style="width: 50%">
                <?= L::lb_deposit ?> - <?= L::lb_withdraw ?>
            </button>
        </div>
        <div class="flexBetween" style="gap: 13px">
            <button class="gradient-border sidebar-button flexCenter" style="width: 50%" id="bag-modal-btn" data-bs-toggle="modal" data-bs-target="#bagModal">
                <?= L::lb_wallet ?>
            </button>
            <button class="gradient-border sidebar-button flexCenter" style="width: 50%" id="history-btn" data-bs-toggle="modal" data-bs-target="#historyModal">
                <?= L::lb_playhistory ?>
            </button>
        </div>
        <div class="flexBetween" style="gap: 13px">
            <button class="gradient-border sidebar-button flexCenter" style="width: 50%">
                <?= L::lb_linebot ?>
            </button>
            <button class="gradient-border sidebar-button flexCenter" style="width: 50%">
                <?= L::lb_contactus ?>
            </button>
        </div>
        <button class="gradient-border sidebar-button flexCenter" style="width: 100%; margin-bottom: 16px" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
            <?= L::lb_changepass ?>
        </button>
        <button class="gradient-border sidebar-button flexCenter" style="width: 100%; margin-bottom: 16px">
            <?= L::lb_logout ?>
        </button>

    </aside>
    <div class="sidebar-container-background"></div>
</div>