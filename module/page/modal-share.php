
<!-- share-->
<div class="modal modal-popup fade" id="modalshare" data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1" aria-labelledby="depositWithdrawLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="position-relative w-100 inner">
                    <h5 class="modal-title text-center fs-5" id="depositWithdrawLabel"><?= L::lb_share ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body px-3 pb-3">
                <div class="overflow-hidden mb-2">
                    <div class="row g-2">
                        <div class="col-3">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $_SESSION['ProfileInfo']->shorturl ?>&quote=สมัครเพื่อร่วมสนุกกับ <?= $_SESSION["PROFILE"]->info->configLobby->s_link_domain ?>" target="blank">
                                <img src="images/icon/facebook.png" class="padding-2 w-100"  />
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="https://twitter.com/intent/tweet?url=<?= $_SESSION['ProfileInfo']->shorturl ?>&via=<?= $_SESSION["PROFILE"]->info->configLobby->s_link_domain ?>&text=สมัครสมาชิกเพื่อร่วมสนุก กับ <?= $_SESSION["PROFILE"]->info->configLobby->s_link_domain ?>" target="blank">
                                <img src="images/icon/twitter.png" class="padding-2 w-100"  />
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="https://line.me/R/share?text=<?= $_SESSION['ProfileInfo']->shorturl ?> สมัครเพื่อร่วมสนุกกับ <?= $_SESSION["PROFILE"]->info->configLobby->s_link_domain ?>" class="" target="_blank">
                                <img src="images/icon/line_cicle.png" class="padding-2 w-100"  />
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="https://t.me/share/url?url=<?= $_SESSION['ProfileInfo']->shorturl ?>&text=สมัครเพื่อร่วมสนุกกับ <?= $_SESSION["PROFILE"]->info->configLobby->s_link_domain ?>"" target="_blank">
                                <img src="images/icon/telegram.png" class="padding-2 w-100"  />
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
