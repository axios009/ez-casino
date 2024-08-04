<!-- กล่องสุ่ม -->
<div class="modal modal-popup fade" id="randomBoxModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="randomBoxModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="position-relative w-100 inner">
                    <h5 class="modal-title text-center fs-5" id="randomBoxModalLabel">
                        <?= L::menu_randomBox ?>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body px-3 pb-3">
                <div class="box-purple-60 p-2 border-radius-10">
                    <div class="row g-2 align-items-center">
                        <div class="col-5 d-flex gap-2 flex-column align-items-center">
                            <img src="assets/images/media/pao-tung.png" width="64" height="64" alt="<?= L::lb_bag ?>" />
                            <button type="button" class="btn btn-sm btn-pink-shadow fw-semibold border-radius-10">
                                <?= L::lb_openhistory ?>
                            </button>
                        </div>
                        <div class="col-7 text-end">
                            <h6 class="fw-semibold">
                                <?= L::lb_bag ?>
                            </h6>
                            <p class="fs-8">
                                <?= L::lb_randomBoxPoint ?> : 0
                            </p>
                            <button type="button" class="btn btn-sm btn-yellow-grad fw-semibold border-0 border-radius-pill">
                                <?= L::lb_openRandomBox ?>
                            </button>
                        </div>
                    </div>
                </div>
                <div style="height: 150px;"></div>
            </div>
        </div>
    </div>
</div>