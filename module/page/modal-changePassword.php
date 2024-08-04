

<div class="modal fade modal-lobby" id="changePasswordModal" data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1" role="dialog">
    <div class="modal-border">
        <div class="modal-content modal-dialog ">
            <div class="modal-content">
                <div class="modal-header-container">
                    <div class="modal-header">
                        <img src="./assets/icons/icon-back-modal.svg" class="modal-icon-back" alt="" data-bs-toggle="modal" data-bs-target="#bagModal" data-bs-dismiss="modal">
                        <p class="modal-title"><?= L::lb_changepass ?></p>
                        <img src="./assets/icons/icon-close-modal.svg" class="modal-icon-close" data-bs-dismiss="modal" aria-label="Close" alt="">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="change-password-modal-content">
                        <form id="form-action-changePassword" class="d-content">
                            <div class="border-input-gold">
                                <input type="password" placeholder="<?= L::lb_passwordOld ?>" id="passwordOld" name="passwordOld" class="input-for-border-gold">
                            </div>
                            <div class="change-password-hr">
                                <div class="hr"></div>
                            </div>
                            <div class="border-input-gold">
                                <input type="password" placeholder="<?= L::lb_passwordNew ?>" id="passwordNew" name="passwordNew" class="input-for-border-gold">
                            </div>
                            <div class="border-input-gold">
                                <input type="password" placeholder="<?= L::lb_passwordNewConfirm ?>" id="passwordConfirm" name="passwordConfirm" class="input-for-border-gold">
                            </div>
                        </form>
                        <button type="button" class="button-warning" onclick="changePassword()">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>