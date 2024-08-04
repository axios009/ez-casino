<header class="header">
    <div class="left">
        <img src="./assets/images/icon-hamburger.svg" alt="hamburger" class="hamburger" height="37px" width="35px" />
        <img src="./images/betboy/betboy-888-2.png" alt="logo" class="logo-web" style="cursor: pointer" id="" />
    </div>
    <div class="right">
        <button type="button" class="desktop-button button" id="singup-btn" data-bs-toggle="modal" data-bs-target="#signUpModal">
            <?= L::lb_register ?>
        </button>

        <button class="font-20 desktop-button button" id="loginBtn" onclick="modalLogin()">
            <?= L::lb_login ?>
        </button>

        <a href="javascript:$('#reg-mobile').modal('show');" class="text-decoration-none">
            <button class="font-20 mobile-button button " id="registerBtn-mobile">
                <?= L::lb_register ?>
            </button>
        </a>
        <a href="javascript:$('#login-mobile').modal('show');" class="text-decoration-none">
            <button class="font-20 mobile-button button" id="loginBtn-mobile">

                <?= L::lb_login ?>
            </button>
        </a>
        <!--<img src="./assets/images/korea.png" class="logo-thai" alt="logo kr" style="width: 50px;height: 50px;" />-->
        <img src="./assets/images/logo-thai.svg" class="logo-thai" alt="logo thai" />
    </div>
</header>