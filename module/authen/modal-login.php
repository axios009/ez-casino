<!-- Login Modal -->
<div class="login-modal flexCenter">
    <div class="login-modal-wrapper flexCenter" id="login-modal">
        <a href="javascript:closeModalLogin()">
            <img src="./assets/icons/x-close.svg" alt="close-icon" class="close-btn" />
        </a>
        <img src="./images/betboy/betboy-888-2.png" class="mt-2" alt="logo" />
        <h3><?= L::lb_login ?> </h3>
        <input type="hidden" id="agentCode" name="agentCode" value="<?= AGENT ?>">
        <div class="phone-input">
            <img src="./assets/icons/phone.svg" alt="icon" />
            <label for="phone"></label>
            <input type="text" id="username" name="username" value="<?= (isset($_COOKIE['userName']) ? $_COOKIE['userName'] : '') ?>" placeholder=" <?= L::lb_phonNo ?>" />
        </div>
        <div class="phone-input" style="margin-top: 20px;">
            <img src="./assets/icons/lock-alt.svg" alt="lock icon" />
            <label for="phone"></label>
            <input name="password" id="password" type="password" value="<?= (isset($_COOKIE['pwd']) ? $_COOKIE['pwd'] : '') ?>" placeholder="<?= L::lb_password ?>" />
        </div>
        <div class="chk-rem-d">
            <input type="checkbox" class="text-white chk-rem" value="Y" id="remember_d" name="remember_d" <?= (isset($_COOKIE['userName']) ? 'checked' : '') ?>>
            <label for="show-password"><?= L::lb_rememberMe ?></label>
        </div>
        <div class="button-container">
            <button type="button" id="login-btn" onclick="login()"><?= L::lb_login ?></button>
            <button><?= L::lb_cancel ?></button>
        </div>
        <div class="problem"><?= L::lb_contactus ?></div>
    </div>
    <div class="background" id="login-modal-background"></div>
</div>



<!-- LOGIN MOBILE -->
<div class="modal modal-authen" id="login-mobile" tabindex="-1">
    <div class="modal-dialog">
        <div class="login-page flexCenter">
            <a href="javascript:closeModal('login-mobile')">
                <img src="./assets/icons/home-icon.svg" id="mobile-home-button" alt="home-icon">
            </a>
            <img class="logo" src="./images/betboy/betboy-888-2.png" alt="banner">
            <div class="banner">
                <img src="./images/betboy/bn1.png" alt="game">
            </div>
            <!-- slide -->
            <div class="slide-left">
                <div class="slide-game ">
                    <img src="./images/betboy/bn2.png" alt="game">
                    <img src="./images/betboy/bn3.png" alt="game">
                    <img src="./images/betboy/bn4.png" alt="game">
                    <img src="./images/betboy/bn5.png" alt="game">
                </div>
            </div>
            <!-- slide -->
            <h1><?= L::lb_login ?></h1>
            <input type="hidden" name="agentCode_m" id="agentCode_m" value="<?= AGENT ?>" />
            <div class="phone-input">
                <!--<small>전화번호를 입력해주세요.</small>-->
                <div class="input-container flexCenter">
                    <img src="./assets/icons/phone.svg" alt="phone icon">
                    <label for="username_m"></label>
                    <input name="username_m" id="username_m" type="text" placeholder="<?= L::lb_phonNo . ' / ' . L::lb_username ?>"
                           value="<?= (isset($_COOKIE['userName']) ? $_COOKIE['userName'] : '') ?>" />
                </div>
            </div>
            <div class="phone-input">
                <!--<small>비밀번호를 입력해주세요.</small>-->
                <div class="input-container flexCenter">
                    <img src="./assets/icons/lock-alt.svg" alt="lock icon">
                    <label for="password_m"></label>
                    <input name="password_m" id="password_m" type="password" placeholder="<?= L::lb_password ?>" value="<?= (isset($_COOKIE['pwd']) ? $_COOKIE['pwd'] : '') ?>" />
                </div>
            </div>

            <!--            <div class="suggest-info" style="margin-bottom: 20px;">
                            비밀번호는 고객이 신청한 은행계좌번호입니다.
                        </div>-->

            <div class="chk-rem-m">
                <input type="checkbox" class="text-white" value="Y" id="remember_m" name="remember_m" <?= (isset($_COOKIE['userName']) ? 'checked' : '') ?>>
                <label for="show-password"><?= L::lb_rememberMe ?></label>

            </div>


            <div class="button-container flexCenter">
                <button style="cursor: pointer" id="loginBtn" onclick="loginMobile()"><?= L::lb_login ?></button>
                <button style="cursor: pointer" id="signupBtn"><?= L::lb_logout ?></button>
            </div>

            <a href="/">หากเกิดปัญหาในการใช้งาน โปรดติดต่อเรา</a>
        </div>
    </div>
</div>