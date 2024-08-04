<header class="lobby-header header flexBetween elm-mobile">
    <div class="left">
        <a href="javascript:openSideMenu()">
            <img class="hamburger" src="./assets/images/icon-hamburger.svg" alt="hamburger icon" />
        </a>
    </div>
    <div class="right">
        <div class="balance-container">
            <div class="balance">
                <div class="icon flexCenter">
                    <img src="./assets/icons/user-outline-white.svg" alt="icon" />
                </div>
                <div class="balance-text">
                    <p> <?= $_SESSION['PROFILE']->info->profile->s_username ?></p>
                </div>
            </div>
            <div class="balance">
                <div class="icon flexCenter">
                    <img src="./assets/icons/wallet-outline-white.svg" alt="icon" />
                </div>
                <div class="balance-text">
                    <p id="balance-amount-header"> <?= number_format($_SESSION['PROFILE']->balance->amount, 2) ?></p>
                </div>
            </div>
        </div>

        <div class="system-option flexCenter">

            <img class="thai-logo dropbtn" src="./assets/images/logo-<?= $_SESSION["lang"] ?>.svg" onclick="showlang()" alt="" />


            <div id="myDropdown" class="box-drop dropdown-content">
                <a href="Lobby?lang=en" class="dropdown-item text-decoration-none cursor-pointer">
                    <img src="./assets/images/navbar/english-flag-icon.jpg" alt="<?= L::lang_en ?>"
                        style="height: 28px; width: 26px; object-fit: cover; margin-right: 10px; margin-bottom: 5px; border-radius: 5px;">
                    <?= L::lang_en ?>
                </a>
                <a href="Lobby?lang=th" class="dropdown-item  text-decoration-none cursor-pointer">
                    <img src="./assets/images/navbar/thai-flag-icon.png" alt="<?= L::lang_th ?>"
                        style="height: 28px; width: 26px; object-fit: cover; margin-right: 10px; margin-bottom: 5px; border-radius: 5px;">
                    <?= L::lang_th ?>
                </a>

            </div>


            <div class="logout-btn">
                <img src="./assets/icons/power-off.svg" alt="logout icon" data-bs-toggle="modal" data-bs-target="#confirmLogout" />
                <p><?= L::lb_logout ?></p>

            </div>
        </div>

    </div>
</header>

<header class="lobby-header-desktop  elm-desktop">
    <div class="left">
        <div class="coin-balance">
            <img src="./assets/images/coin.svg" alt="coin">
            <?= number_format($_SESSION['PROFILE']->balance->amount, 2) ?>
        </div>
    </div>
    <div class="middle">
        <a href="./Lobby" class="text-decoration-none">
            <img src="./images/betboy/betboy-888-2.png" alt="logo" height="49px" style="cursor: pointer" id="banner">
        </a>
    </div>
    <div class="right">
        <div class="gem-balance">
            <img src="./assets/images/gem.svg" alt="gem">
            <?= number_format($_SESSION['PROFILE']->balance->point, 2) ?>
        </div>
        <a href="javascript:openSideMenu()">
            <img src="./assets/images/icon-hamburger.svg" alt="hamburger" class="hamburger2" height="37px" width="35px">
        </a>
    </div>
</header>




<script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function showlang() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>