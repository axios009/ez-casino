<!-- เครดิตฟรี -->
<div class="modal modal-popup fade" id="freeCreditModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="freeCreditModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="position-relative w-100 inner">
                    <button type="button" class="btn-back" data-bs-dismiss="modal" onclick="modalbagModal()" aria-label="Close"></button>
                    <h5 class="modal-title text-center fs-5" id="freeCreditModalLabel">
                        <?= L::menu_creditFree ?>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body d-flex align-items-center" style="min-height: 360px;">
                <div class="w-100 box-purple-60 p-3 border-radius-10">
                    <div class="row align-items-center">
                        <div class="col-5 text-center">
                            <img src="./assets/images/icons/coin-black.png" width="80" height="80" class="object-fit-cover opacity-50" alt="Coin" />
                        </div>
                        <div class="col-7">
                            <p class="fw-medium mb-0 text-white text-opacity-50">
                                <?= L::lb_noData ?><br />
                                <?= L::lb_creditFree ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>