
<div class="modal fade modal-lobby" id="codeModal" data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1" role="dialog">

    <div class="modal-border">
        <div class="modal-content modal-dialog ">
            <div class="modal-content">
                <div class="modal-header-container">
                    <div class="modal-header">
                        <img src="./assets/icons/icon-back-modal.svg" class="modal-icon-back" alt="" data-bs-toggle="modal" data-bs-target="#bagModal" data-bs-dismiss="modal">
                        <p class="modal-title"><?= L::lb_enterCode ?></p>
                        <img src="./assets/icons/icon-close-modal.svg" class="modal-icon-close" data-bs-dismiss="modal" aria-label="Close" alt="">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="code-modal-content">
                        <form id="form-action-coupon">
                            <input type="text" id="s_coupon_code" name="s_coupon_code" placeholder="กรุณากรอกโค้ด" class="input-box">
                        </form>
                        <button type="button" class="button-warning" onclick="saveCoupon()">ยืนยัน</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>