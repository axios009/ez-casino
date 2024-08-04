
<div style="height: 20px;"></div>
<footer class="footer menubar-authen" id="footer-mobile">
    <div class="menubar-inner">
        <div class="row g-0 row-cols-5">
            <div class="menu-wrapper col">
                <button class="footer-item flexCenter" data-bs-toggle="modal" data-bs-target="#promotionModal">
                    <img src="./assets/icons/icon-promotion.svg" alt="login">
                    <p><?= L::menu_promotion ?></p>
                </button>
                <button class="footer-item flexCenter" data-bs-toggle="modal" data-bs-target="#bagModal">
                    <img src="./assets/images/Icons/wallet.png" alt="login">
                    <p><?= L::menu_wallet ?></p>
                </button>
                <a href="./Lobby" style="text-decoration: none;" >
                    <div class="footer-item-home flexCenter">
                        <img src="./assets/images/Icons/btn-home.png" alt="login">
                    </div>
                </a>
                <button class="footer-item flexCenter" onclick="callmodalDeposit()">
                    <img src="./assets/images/Icons/deposit.png" alt="login">
                    <p><?= L::menu_deposit2withdraw ?></p>
                </button>
                <button class="footer-item flexCenter" onclick="openModal('spinnerModal')">
                    <img src="./assets/images/Icons/wheel.png" alt="login">
                    <p><?= L::menu_wheel ?></p>
                </button>
            </div>
        </div>
    </div>
</footer>


