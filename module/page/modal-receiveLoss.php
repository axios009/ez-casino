<!-- รับยอดเสีย -->
<div class="modal modal-popup fade" id="receiveLossModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="receiveLossModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="position-relative w-100 inner">
                    <button type="button" class="btn-back" onclick="modalbagModal()" aria-label="Close"></button>
                    <h5 class="modal-title text-center fs-5" id="receiveLossModalLabel">
                        <?= L::menu_receiveCashBack ?>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body px-3 pb-3" id="cashbackLVL">
                <div class="d-flex align-items-center justify-content-between fs-9">
                    <div>
                        <?= L::lb_getCashBack ?>
                    </div>
                    <a href="javascript:CashbackHistory()" class="px-2 rounded text-black bg-white fw-semibold text-decoration-none">
                        <?= L::lb_recvHistory ?>
                    </a>
                </div>
                <div class="position-relative border-pink-light mt-5 bg-black bg-opacity-50 rounded">
                    <?php
                    $cb_cfg = $_SESSION["PROFILE"]->info->cashback;
                    ?>
                    <div class="modal-header border-radius-10 translate-middle" style="width: 60%">
                        <div class="position-relative w-100 inner border-radius-10">
                            <h6 class="modal-title text-center fs-8">
                                <?= L::lb_cashback ?>
                                <?= $cb_cfg->{"f_level_" . $cb_cfg->level} ?>%
                            </h6>
                        </div>
                    </div>
                    <div class="px-2 pb-2 pt-4 text-center d-flex flex-column align-items-center">
                        <div class="fs-10 fw-medium mt-2">
                            <?= L::lb_yourAccumulatedLosses ?>
                        </div>
                        <div class="fs-2 fw-bold position-relative" style="color: #E58A24;"><span id="balance-cashback">
                                <?= number_format($_SESSION['PROFILE']->balance->cashback, 2) ?>
                            </span>
                            <button type="button" onclick="refreshBalance()" id="btn-refresh-cashback" class="btn ms-1 p-0 position-absolute top-20 ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M8.33332 9.16678H5.91749L5.91832 9.15928C6.02713 8.62647 6.2401 8.1204 6.54499 7.67011C6.9987 7.00163 7.63511 6.47774 8.37832 6.16094C8.62999 6.05428 8.89249 5.97261 9.15999 5.91844C9.7149 5.80594 10.2867 5.80594 10.8417 5.91844C11.6391 6.08185 12.3709 6.47629 12.9458 7.05261L14.1258 5.87594C13.594 5.34398 12.9648 4.91931 12.2725 4.62511C11.9194 4.47563 11.5523 4.36174 11.1767 4.28511C10.4015 4.12762 9.60263 4.12762 8.82749 4.28511C8.45153 4.36206 8.08417 4.47623 7.73082 4.62594C6.6896 5.0677 5.79827 5.80102 5.16416 6.73761C4.7374 7.36915 4.43896 8.07844 4.28582 8.82511C4.26249 8.93761 4.24999 9.05261 4.23332 9.16678H1.66666L4.99999 12.5001L8.33332 9.16678ZM11.6667 10.8334H14.0825L14.0817 10.8401C13.8639 11.9082 13.2343 12.8477 12.3292 13.4551C11.879 13.7603 11.3729 13.9732 10.84 14.0818C10.2854 14.1943 9.71379 14.1943 9.15916 14.0818C8.62635 13.973 8.12028 13.76 7.66999 13.4551C7.44884 13.3055 7.24236 13.1353 7.05332 12.9468L5.87499 14.1251C6.40708 14.6569 7.03659 15.0813 7.72916 15.3751C8.08249 15.5251 8.45166 15.6393 8.82499 15.7151C9.59984 15.8727 10.3985 15.8727 11.1733 15.7151C12.6671 15.4051 13.9811 14.5246 14.8358 13.2609C15.2622 12.6299 15.5603 11.9212 15.7133 11.1751C15.7358 11.0626 15.7492 10.9476 15.7658 10.8334H18.3333L15 7.50011L11.6667 10.8334Z"
                                        fill="white" />
                                </svg>
                            </button>
                        </div>
                        <div class="fs-10 fw-medium">
                            <?= L::lb_latestUpdate ?> <span id="cashback-lastupdate">
                                <?= date('Y-m-d h:i:s') ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="py-2 mb-3">
                    <div class="row g-0">

                        <div class="col-3 d-flex justify-content-center pt-2">
                            <div class="d-flex flex-column gap-2 border-pink-light rounded-5 position-relative">
                                <?php for ($i = $cb_cfg->level_max; $i >= 1; $i--) { ?>
                                    <?php $activeLVL = ($i <= $cb_cfg->level ? 'active' : 'lock'); ?>
                                    <?php
                                    $HPercen = (100 / 7) * ($cb_cfg->level + 1);
                                    ?>
                                    <?php if ($i == $cb_cfg->level_max) { ?>
                                        <div class="py-2 position-relative mt-1 mb-2">
                                            <img src="assets/svg/chest-<?= $activeLVL ?>.svg" width="48" height="38" class="position-absolute top-50 start-50 translate-middle z-1" alt="Chest" />
                                        </div>
                                    <?php } else { ?>
                                        <img src="assets/svg/star-<?= $activeLVL ?>.svg" width="36" height="36" class="d-block position-relative z-1" <?php if ($i == 1) { ?> style="transform: translateY(3px);"
                                            <?php } ?> alt="Star" />
                                    <?php } ?>
                                <?php } ?>
                                <div class="progress-active w-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column gap-2 justify-content-end rounded-5"
                                    style="height: <?= $HPercen ?>%;">
                                </div>
                            </div>
                        </div>
                        <div class="col-9 fs-10 text-center d-flex flex-column gap-2">
                            <?php for ($i = $cb_cfg->level_max; $i >= 1; $i--) { ?>
                                <?php
                                $percen = $cb_cfg->{"f_level_" . $i};
                                $percenArr = explode('.', $percen);
                                $percen = ($percenArr[1] == "00" ? $percenArr[0] : $percen);
                                ?>
                                <div class="p-2 border-pink-light rounded">
                                    <?= L::lb_getCashbackAmount ?>
                                    <?= $percen ?> %
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col d-grid">
                        <button type="button" class="btn btn-pink-shadow shadow-purple" onclick="SaveCashBack()">
                            <?= L::lb_acceptCredit ?>
                        </button>
                    </div>
                    <!--                    <div class="col d-grid">
                                            <button type="button" class="btn btn-inner-shadow shadow-purple"><?= L::lb_wdToAcc ?></button>
                                        </div>-->
                </div>
            </div>
            <div class="modal-body px-3 pb-3 d-none" id="cashbackHistory">
                <ul class="nav nav-history nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="">
                        <?= L::lb_recvHistory ?>
                    </li>

                    <li class="nav-item" role="">
                        <a href="javascript:CashbackMenu()" class="px-2 rounded text-black bg-white fw-semibold text-decoration-none">
                            <?= L::btn_back ?>
                        </a>
                    </li>
                </ul>
                <div class="tab-pane fade show active" id="pills-history1" role="tabpanel" aria-labelledby="pills-history1-tab" tabindex="0">
                    <ul class="nav nav-history nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="">
                            <?= L::lb_datetime ?>
                        </li>

                        <li class="nav-item" role="">
                            <?= L::lb_amount ?>
                        </li>
                    </ul>
                    <ul class="list-group list-history list-group-flush" id="CashbackHistory">

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>