

<div class="modal fade modal-lobby" id="promotionModal" tabindex="-1" aria-labelledby="cashbackDetail" aria-hidden="true">
    <div class="modal-border">
        <div class="modal-content modal-dialog ">
            <div class="modal-header-container">
                <div class="modal-header">
                    <img src="./assets/icons/icon-back-modal.svg" class="modal-icon-back" alt="" data-bs-toggle="modal" data-bs-target="#bagModal"
                         data-bs-dismiss="modal"/>
                    <p class="modal-title"><?= L::lb_promotion ?></p>
                    <img src="./assets/icons/icon-close-modal.svg"  class="modal-icon-close" data-bs-dismiss="modal" aria-label="Close" alt="" />
                </div>
            </div>
            <div class="modal-body">

                <?php
                if (is_array($_SESSION['PROFILE']->info->promotionList)) {
                    $promotion = count($_SESSION['PROFILE']->info->promotionList);
                }
                ?>
                <?php if ($promotion != NULL) { ?>
                    <div class="slider-container mb-3">
                        <div class="slider-promotion mb-3">
                            <?php foreach ($_SESSION['PROFILE']->info->promotionList as $k => $v) { ?>
                                <div class="slide">
                                    <img src="<?= $v->source_image ?>" alt="Promotion 1">
                                    <div class="text-center">
                                        <h6 class="text-center" style="color: #FF8A00;"><?= $v->s_promotion ?></h6>
                                        <p class="fs-8 mb-0"><?= $v->s_detail ?></p>
                                        <p class="fs-8">(<?= L::remark_contactTheAdmin ?>)</p>
                                    </div>
                                    <div class="d-flex flex-column gap-2">
                                        <button type="button" class="btn btn-menu-custom text-white" data-bs-toggle="modal"  onclick="getPromotion('<?= $v->s_promotion ?>', '<?= $v->s_code ?>')">
                                            <?= L::lb_getBonus ?>
                                        </button>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        <button class="prev-prm">&#10094;</button>
                        <button class="next-prm">&#10095;</button>
                        <div class="slider-dots mb-3"></div>
                    </div>
                <?php } else { ?>
                    <br>
                    <div class="text-center"><?= L::lb_noData ?></div>
                <?php } ?>


            </div>
        </div>
    </div>
</div>
