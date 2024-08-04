
<!-- share-->
<div class="modal modal-popup fade" id="affiliateMember" data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1" aria-labelledby="affiliateMember" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="position-relative w-100 inner">
                    <h5 class="modal-title text-center fs-5" id="depositWithdrawLabel"><?= L::menu_affMember ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body px-3 pb-3">
                <div class="tab-pane fade show active" id="pills-history1" role="tabpanel" aria-labelledby="pills-history1-tab" tabindex="0">
                    <ul class="nav nav-history nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="">
                            <?= L::lb_username ?>
                        </li>

                        <li class="nav-item" role="">
                            <?= L::lb_regDate ?>
                        </li>
                    </ul>
                    <ul class="list-group list-history list-group-flush affiliate-list" id="affiliateMemberList">
                        <?php for ($i = 0; $i < 20; $i++) { ?>
                            <li class="list-group-item fs-8 text-white bg-transparent">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <div>xxxxxxxxx</div>
                                    </div>
                                    <div class="col-6 d-flex flex-column align-items-end justify-content-between">
                                        <div>2023-09-25</div>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
