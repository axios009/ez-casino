<!-- สร้างรายได้ 1 -->
<div class="modal fade modal-lobby" id="makeMoneyModal" tabindex="-1" aria-labelledby="earnMoneyModalLabel" aria-hidden="true" >
    <div class="modal-border">
        <div class="modal-content modal-dialog">
            <div class="modal-header-container">
                <div class="modal-header">
                    <img src="./assets/icons/icon-back-modal.svg" class="modal-icon-back" alt="" data-bs-toggle="modal" data-bs-target="#bagModal" data-bs-dismiss="modal">
                    <p class="modal-title"><?= L::lb_income ?></p>
                    <img src="./assets/icons/icon-close-modal.svg" class="modal-icon-close" data-bs-dismiss="modal" aria-label="Close" alt="">
                </div>
            </div>
            <div class="modal-body">
                <div class="earn-modal-content">
                    <!--                    <div class="earn-qr-container">
                                            <div class="border-input-gold">
                                                                            <div class="earn-qr-content">
                                                                                <img class="earn-qr-img" src="./assets/images/qr-code-image.svg" alt="">
                                                                            </div>
                                            </div>
                                        </div>-->

                    <div class="border-input-gold">
                        <div class="link-shared">
                            <p class="link-shared-title"><?= L::lb_ReferFriendLink ?></p>
                            <p class="link-shared-subtitle">
                                <?= L::remark_makemoney1 ?>
                            </p>
                            <input type="hidden" id="s_shorturl" value="<?= $_SESSION["PROFILE"]->info->shorturl ?>">
                            <input type="text" class="link-shared-input" value="<?= $_SESSION["PROFILE"]->info->shorturl ?>"
                                   readonly />
                            <div class="link-shared-btn-group">
                                <div class="border-input-gold border-btn">
                                    <button type="button" class="btn-copy-link"  onclick="CopyPaste('s_shorturl', 'btn-copy-shorturl', 1500)">
                                        <?= L::btn_copyLink ?>
                                    </button>
                                </div>
                                <!--                                <button type="button" class="btn-share-link">แชร์</button>-->
                            </div>
                        </div>
                    </div>

                    <div class="earn-menu-content">

                        <div class="border-input-gold">

                            <div class="earn-menu-item" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modalRecvAff" ">
                                <img class="earn-menu-item-img" src="./assets/images/img-total-lose.png" alt="">
                                <p class="earn-menu-item-title"><?= L::lb_getFreeCredit ?></p>
                                <p class="earn-menu-item-subtitle">
                                    <?= L::lb_freeCreditReferrals ?>
                                </p>
                            </div>

                        </div>
                    </div>

                    <p class="fs-9 text-center mb-0" style="color: #00FFF0;">
                        <?= L::remark_youQuestion ?>
                        <a href="#" class="text-white">
                            <?= L::lb_readRules ?>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-lobby" id="modalRecvAff" data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1" role="dialog">
    <div class="modal-border">
        <div class="modal-content modal-dialog ">
            <div class="modal-content">
                <div class="modal-header-container">
                    <div class="modal-header">
                        <img src="./assets/icons/icon-back-modal.svg" class="modal-icon-back" alt="" data-bs-toggle="modal" data-bs-target="#makeMoneyModal" data-bs-dismiss="modal">
                        <p class="modal-title" id="history-title-deposit" style="display: block;">  <?= L::menu_makeMoney ?></p>
                        <img src="./assets/icons/icon-close-modal.svg" class="modal-icon-close" data-bs-dismiss="modal" aria-label="Close" alt="">
                    </div>
                </div>


                <div class="modal-body">
                    <div class="earn-modal-content">
                        <div class="earn-tab-container">
                            <div class="border-input-gold">
                                <div class="earn-tab">
                                    <div id="earn-tab1" class="earn-tab-item active" onclick="showhide('earn-detail-overview1');">
                                        <?= L::lb_overView ?>
                                    </div>
                                    <div class="border-input-gold earn-tab-item-2">
                                        <div id="earn-tab2" class="earn-tab-item"  onclick="showhide('earn-detail-income2');">
                                            <?= L::lb_income ?>
                                        </div>
                                    </div>
                                    <div id="earn-tab3" class="earn-tab-item"  onclick="showhide('earn-detail-withdraw-income3');">
                                        <?= L::lb_wdIncome ?>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--tab 1-->  
                        <div class="earn-detail-data" id="earn-detail-overview1"  >
                            <div class="filter-date">
                                <p class="filter-label"  style="width: 133px;"><?= L::lb_dateOverView ?></p>
<!--                                <input class="filter-date-input" type="date" name="" id="">-->
                                <input type="hidden" id="dateOverviewPage" name="dateOverviewPage" value="0">
                                <input type="text" id="dateOverview" name="dateOverview" value="<?= date('Y-m'); ?>" placeholder="<?= date('Y-m'); ?>"
                                       readonly class="form-control flatpickr flatpickr-date bg-white text-muted mx-w-128pxe"  onchange="AffOverviewBydate()" />
                            </div>

                            <div class="border-input-gold">
                                <div class="table-earn-date">
                                    <div class="border-input-gold">
                                        <div class="th-earn-container">
                                            <span class="th-earn"><?= L::lb_date ?></span>
                                            <span class="th-earn"><?= L::lb_apply ?></span>
                                            <span class="th-earn"><?= L::lb_dpMoney ?></span>
                                            <span class="th-earn"><?= L::lb_income ?></span>
                                        </div>
                                    </div>

                                    <div class="tr-earn-container">
                                        <div class="d-block text-black fw-bold fs-9" style="max-height: 240px;" id="dateOverviewList"
                                             data-overlayscrollbars-initialize>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="filter-date">
                                <p class="filter-label"  style="width: 133px;"> <?= L::lb_incomeHistory ?></p>                                
                                <div class="col-auto">
                                    <input type="hidden" id="yearOverviewPage" name="yearOverviewPage" value="0">
                                    <input type="text" id="yearOverview" name="yearOverview" value="<?= date('Y'); ?>" placeholder="<?= date('Y'); ?>"
                                           readonly class="form-control flatpickr flatpickr-date  bg-white text-muted mx-w-128pxe"  onchange="AffOverviewByYear()" />
                                </div>
                            </div>



                            <div class="border-input-gold">
                                <div class="table-earn-date">
                                    <div class="border-input-gold">
                                        <div class="th-earn-container">
                                            <span class="th-earn">><?= L::lb_month ?></span>
                                            <span class="th-earn"><?= L::lb_apply ?></span>
                                            <span class="th-earn"><?= L::lb_dpMoney ?></span>
                                            <span class="th-earn"><?= L::lb_income ?></span>
                                        </div>
                                    </div>
                                    <div class="tr-earn-container">
                                        <div class="d-block text-black fw-bold fs-9" style="max-height: 200px;" id="yearOverviewList"
                                             data-overlayscrollbars-initialize>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--tab 2-->  
                        <div class="earn-detail-data" id="earn-detail-income2">   
                            <p class="filter-label"> <?= L::lb_dateOverView ?></p>
                            <div class="filter-date">

  <!--<input class="filter-date-input" type="date" name="" id="">-->
                                <input type="hidden" id="incomeListPage" name="incomeListPage" value="0">

                                <input class="form-control flatpickr flatpickr-date  bg-white text-muted mx-w-112px from-his"
                                       type="text" placeholder="<?= date('Y-m'); ?>" value="<?= date('Y-m'); ?>" onchange="InquiryIncome()" readonly="readonly" id="dStartView">
                                <input class="form-control flatpickr flatpickr-date  bg-white text-muted mx-w-112px from-his"
                                       type="text" placeholder="<?= date('Y-m'); ?>" value="<?= date('Y-m'); ?>" onchange="InquiryIncome()" readonly="readonly" id="dEndView">
                            </div>

                            <div class="border-input-gold">
                                <div class="table-earn-date">
                                    <div class="border-input-gold">
                                        <div class="th-earn-container">
                                            <span class="th-earn"><?= L::lb_billDate ?></span>
                                            <span class="th-earn"><?= L::lb_amount ?></span>

                                        </div>
                                    </div>

                                    <div class="tr-earn-container">
                                        <div class="d-block text-black fw-bold fs-11" id="incomeList" style="max-height: 240px;"
                                             data-overlayscrollbars-initialize >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--tab 3-->  
                        <div class="earn-detail-data" id="earn-detail-withdraw-income3">
                            <div class="border-input-gold">
                                <div class="form-withdraw-income">
                                    <div class="form-withdraw-group">
                                        <label class="form-withdraw-label"><?= L::lb_CurrentIncome ?></label>
                                        <!--<input type="text" class="form-withdraw-input">-->
                                        <div class="row d-flex">
                                            <div class="col-10">
                                                <span  class="form-control bg-white text-black rounded-2" id="balance-affiliate" >
                                                    <?= number_format($_SESSION['PROFILE']->balance->affiliate, 2) ?>
                                                </span> 
                                            </div>
                                            <div class="col-2 p-0">
                                                <button type="button" onclick="refreshBalance()" id="btn-refresh-affiliate" class="btn mr-top-5px ">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path
                                                        d="M8.33332 9.16678H5.91749L5.91832 9.15928C6.02713 8.62647 6.2401 8.1204 6.54499 7.67011C6.9987 7.00163 7.63511 6.47774 8.37832 6.16094C8.62999 6.05428 8.89249 5.97261 9.15999 5.91844C9.7149 5.80594 10.2867 5.80594 10.8417 5.91844C11.6391 6.08185 12.3709 6.47629 12.9458 7.05261L14.1258 5.87594C13.594 5.34398 12.9648 4.91931 12.2725 4.62511C11.9194 4.47563 11.5523 4.36174 11.1767 4.28511C10.4015 4.12762 9.60263 4.12762 8.82749 4.28511C8.45153 4.36206 8.08417 4.47623 7.73082 4.62594C6.6896 5.0677 5.79827 5.80102 5.16416 6.73761C4.7374 7.36915 4.43896 8.07844 4.28582 8.82511C4.26249 8.93761 4.24999 9.05261 4.23332 9.16678H1.66666L4.99999 12.5001L8.33332 9.16678ZM11.6667 10.8334H14.0825L14.0817 10.8401C13.8639 11.9082 13.2343 12.8477 12.3292 13.4551C11.879 13.7603 11.3729 13.9732 10.84 14.0818C10.2854 14.1943 9.71379 14.1943 9.15916 14.0818C8.62635 13.973 8.12028 13.76 7.66999 13.4551C7.44884 13.3055 7.24236 13.1353 7.05332 12.9468L5.87499 14.1251C6.40708 14.6569 7.03659 15.0813 7.72916 15.3751C8.08249 15.5251 8.45166 15.6393 8.82499 15.7151C9.59984 15.8727 10.3985 15.8727 11.1733 15.7151C12.6671 15.4051 13.9811 14.5246 14.8358 13.2609C15.2622 12.6299 15.5603 11.9212 15.7133 11.1751C15.7358 11.0626 15.7492 10.9476 15.7658 10.8334H18.3333L15 7.50011L11.6667 10.8334Z"
                                                        fill="white" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" onclick="SaveAffiliate()" class="btn-withdraw-income">
                                        <?= L::lb_wdIncome ?>
                                    </button>
                                </div>
                            </div>
                            <div class="filter-date">
                                <p class="filter-label"><?= L::lb_incomeHistory ?></p>
                            </div>

                            <div class="border-input-gold">
                                <div class="table-earn-date">
                                    <div class="border-input-gold">
                                        <div class="th-earn-container">
                                            <span class="th-earn"><?= L::lb_dateTime ?></span>
                                            <span class="th-earn"><?= L::lb_amount ?></span>

                                        </div>
                                    </div>

                                    <div class="tr-earn-container">
                                        <div class="d-block text-black fw-bold fs-9" style="max-height: 240px;" data-overlayscrollbars-initialize="">
                                            <div class="overflow-hidden bg-transparent rounded-2 p-2 mb-2"  id="IncomeHistory" >

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    </div>
</div>