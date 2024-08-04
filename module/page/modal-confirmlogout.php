<!-- Road Map -->
<!--<div class="modal modal-popup fade" id="confirmLogout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="confirmLogout" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="position-relative w-100 inner">
                    <h5 class="modal-title text-center fs-5" id="roadMapModalLabel">
<?= L::menu_logout ?>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body px-3 pb-3">
                <h5 class="modal-title text-center fs-5" id="roadMapModalLabel">
<?= L::remark_logout ?>
                </h5>
                <div class="row g-2 pt-5">

                    <div class="col-6">
                        <a href="Logout" class="btn align-items-center text-white gap-2 p-2 box-purple-60 text-decoration-none border-radius-10 hover-shadow-pink text-center w-100">
<?= L::btn_confirm ?>
                        </a>
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn align-items-center text-white gap-2 p-2 box-purple-60 text-decoration-none border-radius-10 hover-shadow-pink text-center w-100"
                            data-bs-dismiss="modal" aria-label="Close">
<?= L::btn_cancel ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->

<div class="modal fade modal-lobby" id="confirmLogout" data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1" role="dialog">
    <div class="modal-border">
        <div class="modal-content modal-dialog ">
            <div class="modal-content">
                <div class="modal-header-container">
                    <div class="modal-header">
 
                        <p class="modal-title"><?= L::menu_logout ?></p>
                        <img src="./assets/icons/icon-close-modal.svg" class="modal-icon-close" data-bs-dismiss="modal" aria-label="Close" alt="">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="change-password-modal-content">
                        <h5 class="modal-title text-center fs-5" id="roadMapModalLabel">
                            <?= L::remark_logout ?>
                        </h5>
                        <a href="Logout" class="button-logout">
                            <?= L::btn_confirm ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>