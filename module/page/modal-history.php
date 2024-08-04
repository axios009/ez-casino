<!-- ประวัติฝาก -->

<div class="modal fade modal-lobby" id="historyModal" data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1" role="dialog">
    <div class="modal-border">
        <div class="modal-content modal-dialog ">
            <div class="modal-content">
                <div class="modal-header-container">
                    <div class="modal-header">
                        <p class="modal-title" id="history-title-deposit" style="display: block;"><?= L::lb_dpHistory ?></p>
                        <p class="modal-title" id="history-title-withdraw" style="display: none;">
                            <?= L::lb_withdraw ?>
                        </p>
                        <p class="modal-title" id="history-title-bonus" style="display: none;"><?= L::lb_bonus ?></p>
                        <img src="./assets/icons/icon-close-modal.svg" class="modal-icon-close" data-bs-dismiss="modal" aria-label="Close" alt="">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="history-modal-content">
                        <div class="history-tab">
                            <div class="history-tab-item active" onclick="selectHistory('deposit')" id="tab-deposit"><?= L::lb_deposit ?></div>
                            <div class="history-tab-item" onclick="selectHistory('withdraw')" id="tab-withdraw"><?= L::lb_withdraw ?></div>
                            <div class="history-tab-item" onclick="selectHistory('bonus')" id="tab-bonus"><?= L::lb_bonus ?></div>
                        </div>
                        <!-- ฝาก -->
                        <div class="history-tx" id="history-deposit" >


                        </div>

                        <!-- ถอน -->
                        <div class="history-tx d-none" id="history-withdraw" >

                        </div>

                        <!-- โบนัส -->
                        <div class="history-tx d-none" id="history-bonus">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>