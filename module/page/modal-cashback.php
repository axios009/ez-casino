<!-- cashback 1 -->
<!-- cashback 2 -->
<div class="modal modal-popup fade" id="cashback2Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cashback2ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="position-relative w-100 inner">
                    <h5 class="modal-title text-center fs-5" id="cashback2ModalLabel">
                        <?= L::lb_cashback ?>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column gap-3">
                    <h4 class="fs-6 text-center fw-semibold">
                        <?= L::lb_cashback ?>
                        <?= L::game_slot ?>
                    </h4>
                    <div class="row g-3">
                        <div class="col">
                            <?= L::lb_accumulateLoss ?> 0
                        </div>
                        <div class="col-auto">
                            <?= L::lb_cashback ?> 5.00 %
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <?= L::lb_todayLoss ?> 0
                        </div>
                        <div class="col-auto">
                            <span class="d-inline-block px-2 text-black rounded" style="background-color: #00FFFF;">
                                <?= L::lb_recvHistory ?>
                            </span>
                        </div>
                    </div>
                    <div class="text-center">
                        <h5 class="fw-semibold">
                            <?= L::lb_youLoss ?>
                        </h5>
                        <div class="h4 fw-bold">0</div>
                        <div class="fs-7">
                            <?= L::lb_latestUpdate ?> 09-09-65 12.00 น.
                        </div>
                    </div>
                    <button class="btn btn-pink border-white fw-semibold">
                        <?= L::lb_acceptCredit ?>
                    </button>
                    <button class="btn btn-purple border-pink fw-semibold">
                        <?= L::lb_acceptCredit ?>
                    </button>
                    <div class="row g-1 fs-8">
                        <div class="col">
                            <?= L::lb_min ?> 1
                            <?= L::lb_max ?> 10000
                        </div>
                        <div class="col-auto text-red">
                            <?= L::lb_disableAcc ?>
                        </div>
                    </div>
                    <div class="text-center fs-7 fw-bold">
                        <a href="#" class="d-inline-block text-white text-decoration-none">
                            <?= L::lb_readRules ?>
                            <svg class="ms-3" xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                            <path
                                d="M10.0248 20.78C4.53197 20.78 0.0794067 16.3269 0.0794067 10.8333C0.0794067 5.33982 4.53197 0.886719 10.0248 0.886719C15.5177 0.886719 19.9702 5.33982 19.9702 10.8333C19.9702 16.3269 15.5177 20.78 10.0248 20.78ZM10.0248 18.7906C12.135 18.7906 14.1587 17.9523 15.6508 16.46C17.1429 14.9677 17.9811 12.9438 17.9811 10.8333C17.9811 8.72294 17.1429 6.69897 15.6508 5.20668C14.1587 3.7144 12.135 2.87604 10.0248 2.87604C7.91467 2.87604 5.89094 3.7144 4.39884 5.20668C2.90674 6.69897 2.06849 8.72294 2.06849 10.8333C2.06849 12.9438 2.90674 14.9677 4.39884 16.46C5.89094 17.9523 7.91467 18.7906 10.0248 18.7906ZM9.03028 13.8173H11.0194V15.8067H9.03028V13.8173ZM11.0194 12.1811V12.8227H9.03028V11.3307C9.03028 11.0669 9.13506 10.8139 9.32157 10.6273C9.50808 10.4408 9.76105 10.336 10.0248 10.336C10.3073 10.336 10.5841 10.2557 10.8228 10.1046C11.0615 9.95343 11.2523 9.73759 11.3732 9.48218C11.494 9.22677 11.5399 8.94229 11.5054 8.66184C11.4709 8.38139 11.3575 8.11651 11.1783 7.89801C10.9992 7.67951 10.7617 7.51637 10.4935 7.42759C10.2252 7.33881 9.93733 7.32802 9.66323 7.39649C9.38912 7.46496 9.14009 7.60987 8.94511 7.81436C8.75013 8.01885 8.61722 8.27451 8.56185 8.55159L6.61056 8.16069C6.73153 7.55602 7.01087 6.99432 7.42003 6.53301C7.8292 6.0717 8.35351 5.72732 8.93936 5.53509C9.52522 5.34286 10.1516 5.30967 10.7545 5.43891C11.3574 5.56814 11.9151 5.85517 12.3708 6.27065C12.8264 6.68613 13.1635 7.21517 13.3477 7.80366C13.5319 8.39216 13.5565 9.01902 13.419 9.62016C13.2816 10.2213 12.987 10.7752 12.5654 11.2251C12.1438 11.6751 11.6102 12.005 11.0194 12.1811Z"
                                fill="#00FFFF" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-lobby" id="cashbackDetail" tabindex="-1" aria-labelledby="cashbackDetail" aria-hidden="true">
    <div class="modal-border">
        <div class="modal-content modal-dialog ">
            <div class="modal-header-container">
                <div class="modal-header">
                    <img src="./assets/icons/icon-back-modal.svg" class="modal-icon-back" alt="" data-bs-toggle="modal" data-bs-target="#bagModal"
                         data-bs-dismiss="modal"/>
                    <p class="modal-title"><?= L::menu_receiveCashBack ?></p>
                    <img src="./assets/icons/icon-close-modal.svg"  class="modal-icon-close" data-bs-dismiss="modal" aria-label="Close" alt="" />
                </div>
            </div>
            <div class="modal-body">
                <div class="change-cashback-detail-modal-content" id="cashbackMember">
                    <div class="detail">
                        <?php
                        $cb_cfg = $_SESSION["PROFILE"]->info->cashback;
                        ?>
                        <div class="accumulated-lot-amount">
                            <div class="text-amount">
                                <div class="text-left font-14"><?= L::lb_yourAccumulatedLosses ?> (<?= L::lb_cashback ?> <?= $cb_cfg->{"f_level_" . $cb_cfg->level} ?>%)</div>
                                <a href="javascript:CashbackHistory()" class="text-right history-background text-decoration-none text-white"><?= L::lb_recvHistory ?></a>
                            </div>
                        </div>
                        <div class="your-loss"><?= L::lb_yourAccumulatedLosses ?></div>
                        <div class="fs-2 fw-bold position-relative d-flex" style="color: #E58A24;"><span id="balance-cashback">
                                <?= number_format($_SESSION['PROFILE']->balance->cashback, 2) ?>
                            </span> 
                            <button type="button" onclick="refreshBalance()" id="btn-refresh-cashback" class="btn ms-1 p-0 top-20 mar-auto">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path
                                    d="M8.33332 9.16678H5.91749L5.91832 9.15928C6.02713 8.62647 6.2401 8.1204 6.54499 7.67011C6.9987 7.00163 7.63511 6.47774 8.37832 6.16094C8.62999 6.05428 8.89249 5.97261 9.15999 5.91844C9.7149 5.80594 10.2867 5.80594 10.8417 5.91844C11.6391 6.08185 12.3709 6.47629 12.9458 7.05261L14.1258 5.87594C13.594 5.34398 12.9648 4.91931 12.2725 4.62511C11.9194 4.47563 11.5523 4.36174 11.1767 4.28511C10.4015 4.12762 9.60263 4.12762 8.82749 4.28511C8.45153 4.36206 8.08417 4.47623 7.73082 4.62594C6.6896 5.0677 5.79827 5.80102 5.16416 6.73761C4.7374 7.36915 4.43896 8.07844 4.28582 8.82511C4.26249 8.93761 4.24999 9.05261 4.23332 9.16678H1.66666L4.99999 12.5001L8.33332 9.16678ZM11.6667 10.8334H14.0825L14.0817 10.8401C13.8639 11.9082 13.2343 12.8477 12.3292 13.4551C11.879 13.7603 11.3729 13.9732 10.84 14.0818C10.2854 14.1943 9.71379 14.1943 9.15916 14.0818C8.62635 13.973 8.12028 13.76 7.66999 13.4551C7.44884 13.3055 7.24236 13.1353 7.05332 12.9468L5.87499 14.1251C6.40708 14.6569 7.03659 15.0813 7.72916 15.3751C8.08249 15.5251 8.45166 15.6393 8.82499 15.7151C9.59984 15.8727 10.3985 15.8727 11.1733 15.7151C12.6671 15.4051 13.9811 14.5246 14.8358 13.2609C15.2622 12.6299 15.5603 11.9212 15.7133 11.1751C15.7358 11.0626 15.7492 10.9476 15.7658 10.8334H18.3333L15 7.50011L11.6667 10.8334Z"
                                    fill="white" />
                                </svg>
                            </button>
                        </div>
                        <div class="updated"><?= L::lb_latestUpdate ?> <span id="cashback-lastupdate"><?= date('Y-m-d h:i:s') ?></span></div>
                        <div class="btn">
                            <button type="button" class="receive-credit" onclick="SaveCashBack()"><?= L::lb_acceptCredit ?></button>
                        </div>

                    </div>
                </div>
                <div class="modal-body px-3 pb-3 d-none" id="cashbackHistory">
                    <ul class="nav nav-history nav-pills w-100 justify-content-between mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="">
                            <?= L::lb_recvHistory ?>
                        </li>

                        <li class="nav-item" role="">
                            <a href="javascript:CashbackMenu()" class="px-2 rounded text-black bg-white fw-semibold text-decoration-none"><?= L::btn_back ?></a>
                        </li>
                    </ul>
                    <!--<div class="tab-pane fade show active" id="pills-history1" role="tabpanel" aria-labelledby="pills-history1-tab" tabindex="0">-->
                    <ul class="nav nav-history nav-pills w-100 justify-content-between mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="">
                            <?= L::lb_datetime ?>
                        </li>

                        <li class="nav-item" role="">
                            <?= L::lb_amount ?>
                        </li>
                    </ul>
                    <ul class="list-group list-history list-group-flush w-100" id="CashbackHistory">

                    </ul>
                    <!--</div>-->
                </div>

                <div class="text-center d-flex flex-column align-items-center">
                    <p class="fs-7 mb-3"><?= L::remark_foundProb ?> 
                        <a href="<?= $_SESSION["PROFILE"]->info->configLobby->s_line ?>" class="fw-semibold" target="_blank" style="color: #00FCFC;"><?= L::remark_customerService ?>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>