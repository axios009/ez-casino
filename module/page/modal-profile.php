<!-- Profile -->

<div class="modal fade modal-lobby" id="profile" data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1" role="dialog">
    <div class="modal-border">
        <div class="modal-content modal-dialog ">
            <div class="modal-content">
                <div class="modal-header-container">
                    <div class="modal-header">
                        <img src="./assets/icons/icon-back-modal.svg" class="modal-icon-back" alt="" data-bs-toggle="modal" data-bs-dismiss="modal">
                        <p class="modal-title"><?= L::lb_myinformation ?></p>
                        <img src="./assets/icons/icon-close-modal.svg" class="modal-icon-close"  data-bs-toggle="modal">
                    </div>
                </div>
                <div class="modal-body">
                    <?php
//                    $bank = $_SESSION['PROFILE']->info->bankDeposit[0];
                    $bank = $_SESSION['PROFILE']->info->bankList[0];
                    $bankName = $_SESSION["MASTER"]["BANK"][$bank->i_bank]["name"];
                    ?>
                    <div class="change-profile-modal-content-mobile flexCenter">
                        <div class="card flexBetween">
                            <div class="left">
                                <p><?= $bankName ?></p>
                                <p><?= $bank->s_account_name ?></p>
                                <p><?= $bank->s_account_no ?></p>
                            </div>
                            <div class="right">
                                <div class="bank">
                                    <!--<p><?= $bankName ?></p>-->
                                    <!--<img src="./assets/icons/icon-bank-default/Ellipse 10.svg" alt="bank logo">-->
                                </div>
                                <div class="balance">
<!--                                    <small>일반머니</small>
                                    <p>1000.00฿</p>-->
                                </div>
                                <div class="visa">
                                    <img src="./assets/icons/visa.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="slider-container" style="display: flex; justify-content: center;">
                            <div class="active-slider"></div>
                            <div class="slider"></div>
                        </div>
                        <div class="button-container flexCenter">
                            <div class="left flexCenter"><?= L::lb_default ?></div>
                            <div class="right flexCenter" data-bs-toggle="modal" data-bs-target="#addAccount">
                               <?= L::lb_addbankacc ?>
                            </div>
                        </div>
                        <hr>
                        <div class="user-detail flexBetween">
                            <div class="left">
                                <p>Username</p>
                                <p>Password</p>
                            </div>
                            <div class="right">
                                <small><?= $_SESSION['PROFILE']->username ?></small>
                                <small>************</small>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    var bankData = <?php echo json_encode($_SESSION["MASTER"]["BANK"]); ?>;

</script>