

<div class="modal fade modal-lobby" id="withdraw" data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1" role="dialog">
    <div class="modal-border">
        <div class="modal-content modal-dialog ">
            <div class="modal-content">
                <div class="modal-header-container">
                    <div class="modal-header">
                        <img src="./assets/icons/icon-back-modal.svg" class="modal-icon-back" alt="" data-bs-toggle="modal" data-bs-target="#depositWithdraw" data-bs-dismiss="modal">
                        <p class="modal-title" id="withdraw"><?= L::lb_withdraw ?></p>
                        <img src="./assets/icons/icon-close-modal.svg" onclick="refreshBalance();" class="modal-icon-close" data-bs-dismiss="modal" aria-label="Close" alt="">
                    </div>
                </div>
                <div class="modal-body">
                    <?php
                    $data = $_SESSION['PROFILE']->balance;
                    $bank = $_SESSION['PROFILE']->info->bankList[0];
                    $bankName = $_SESSION["MASTER"]["BANK"][$bank->i_bank]["name"];
                    $color = $_SESSION["MASTER"]["BANK"][$bank->i_bank]["bgColor"];
                    $bank = (Object) $bank;
                    ?>
                    <div class="withdraw-modal-content flexCenter">
                        <div class="card-select">

                            <div class="card flexBetween " style="background: <?= $color ?>" onclick="selectCard(this)">
                                <div class="left flexCenter">

                                    <p><?= $bankName ?></p>
                                    <p><?= $bank->s_account_name ?></p>
                                    <p><?= $bank->s_account_no ?></p>
                                </div>
                                <div class="right flexCenter">
                                    <div class="flexCenter bank">
                                        <h4></h4>
                                        <div style="background-color: #fff; border-radius: 100%">
                                            <img src="./assets/images/bankName/<?= strtolower($bankName) ?>.png" alt="kbank">
                                        </div>
                                    </div>
                                    <div class="visa">
                                        <img src="./assets/icons/visa.svg" alt="visa">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--                        <div class="slider-wrapper flexBetween">
                                                    <div class="active slider"></div>
                                                    <div class="slider"></div>
                                                </div>-->

                        <div class="money-input flexBetween">
                            <p><?= L::lb_amtCanWD ?></p>
                            <input id="balanceWD"  type="text" placeholder="1000" value="<?= $data->amount ?>" readonly="true">
                        </div>
                        <div class="money-input flexBetween">
                            <p style="color: red"><?= L::lb_fixmoneyWD ?></p>
                            <input type="text" placeholder="1000" value="0" id="creditWD" name="creditWD">
                        </div>
                        <a href="javascript:CreateTransaction();" class="button-warning">
                            <?= L::lb_wdMoney ?>                        
                        </a>


                        <p>พบปัญหา <a href="/">ติดต่อฝ่ายบริการลูกค้า</a></p>

                        <button class="line-button flexCenter">
                            <img src="./assets/icons/icon-line.svg" alt="line icon">
                            <p>Line bot / Contact Admin</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // ฟังก์ชันเมื่อคลิกบนการ์ดเพื่อเลือก
    function selectCard(card) {
        const cards = document.querySelectorAll('.card');
        cards.forEach(item => {
            item.classList.remove('active');
        });
        card.classList.add('active');
    }

    // ฟังก์ชันเมื่อคลิกบนสไลด์เพื่อเลือก
    function selectSlider(direction) {
        const sliders = document.querySelectorAll('.slider');
        const activeSliderIndex = Array.from(sliders).findIndex(slider => slider.classList.contains('active'));
        let targetIndex;

        if (direction === 'left') {
            targetIndex = (activeSliderIndex - 1 + sliders.length) % sliders.length; // หา index ของสไลด์ที่เป้าหมาย (ทางซ้าย)
        } else if (direction === 'right') {
            targetIndex = (activeSliderIndex + 1) % sliders.length; // หา index ของสไลด์ที่เป้าหมาย (ทางขวา)
        }

        sliders.forEach(item => {
            item.classList.remove('active');
        });
        sliders[targetIndex].classList.add('active');
    }
</script>
