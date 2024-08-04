<div class="modal fade modal-lobby" id="depositWithdraw" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog">
    <div class="modal-border">
        <div class="modal-content modal-dialog ">
            <div class="modal-header-container">
                <div class="modal-header">
                    <img src="./assets/icons/icon-back-modal.svg" class="modal-icon-back" alt="" data-bs-toggle="modal" data-bs-target="#bagModal" data-bs-dismiss="modal">
                    <p class="modal-title" id="depositWithdraw"><?= L::lb_deposit ?> - <?= L::lb_withdraw ?></p>
                    <img src="./assets/icons/icon-close-modal.svg" class="modal-icon-close" data-bs-toggle="modal" aria-label="Close" alt="">
                </div>
            </div>
            <div class="modal-body">
                <?php
                $bank = $_SESSION['PROFILE']->info->bankDeposit[0];
                $bankName = $_SESSION["MASTER"]["BANK"][$bank->i_bank]["name"];
                $color = $_SESSION["MASTER"]["BANK"][$bank->i_bank]["bgColor"];
                $img = $_SESSION["MASTER"]["BANK"][$bank->i_bank]["image"];
                ?>
                <div class="deposit-withdraw-modal-content">
                    <div class="card flexBetween" style="background: <?= $color ?>">
                        <div class="left flexCenter">
                            <p><?= $bank->s_account_name ?></p>
                            <p  text-decorations="none" class="text-dec"><?= $bank->s_account_no ?></p>
                        </div>
                        <div class="right flexCenter">
                            <div class="flexCenter bank">
                                <!--                                <h4><?= $bankName ?></h4>-->
                                <div style="background-color: #fff; border-radius: 100%">
                                    <img src="./assets/images/bankName/<?= $img ?>" width="64" height="64" class="img-bank object-fit-contain" id="bank-deposit-img" />

                                </div>
                            </div>
                            <div class="balance">
                                <!--<p>일반머니</p>-->
                                <!--                                <p>1000.00 บาท</p>-->
                            </div>
                            <div class="visa">
                                <img src="./assets/icons/visa.svg" alt="visa">
                            </div>
                        </div>
                    </div>

                    <div class="slider-wrapper flexCenter">
                        <div class="active slider"></div>
                        <div class="slider"></div>
                    </div>
                    <div style="
                         display: grid;
                         gap: 5px;
                         grid-template-columns: repeat(3, 1fr);
                         color: white;
                         ">
                        <!--<div style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#autoDeposit" data-bs-dismiss="modal" >-->
                        <div style="cursor: pointer" class="d-none elm-deposit" id="d-auto" onclick="callmodal('funcDeposit')">
                            <div class="type-of-withdrawal">
                                <div class="withdrawal">
                                    <img src="./assets/images/credit-card-machine.svg" alt="kkk">
                                    <div><?= L::lb_depositauto ?></div>
                                </div>
                            </div>
                        </div>
                        <!--<div style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#leaveAdecimal" data-bs-dismiss="modal">-->
                        <div style="cursor: pointer" class="d-none elm-deposit" id="d-decimal" onclick="callmodal('funcDeposit')">
                            <div class="type-of-withdrawal">
                                <div class="withdrawal">
                                    <img src="./assets/images/Leave a-decimal.svg" alt="kkk">
                                    <div><?= L::lb_dpDecimal ?></div>
                                </div>
                            </div>
                        </div>
                        <!--<div style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#withdraw" data-bs-dismiss="modal">-->
                        <div style="cursor: pointer" class="d-none elm-deposit" id="d-decimal" onclick="callmodal('funcDeposit')">
                            <div class="type-of-withdrawal">
                                <div class="withdrawal">
                                    <img src="./assets/images/Withdraw-money.svg" alt="kkk">
                                    <div><?= L::lb_wdMoney ?></div>
                                </div>
                            </div>
                        </div>

                        <!--<div data-bs-toggle="modal" data-bs-target="#qrplay" data-bs-dismiss="modal" style="cursor: pointer">-->
                        <div style="cursor: pointer" class="d-none elm-deposit" onclick="callmodal('funcDeposit')">
                            <div class="type-of-withdrawal">
                                <div class="withdrawal">
                                    <img src="./assets/images/scan.svg" alt="kkk">
                                    <div>QR PAY</div>
                                </div>
                            </div>
                        </div>
                        <!--<div style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#slipVerify" data-bs-dismiss="modal">-->
                        <div style="cursor: pointer" class="d-none elm-deposit" id="d-slip" onclick="callmodal('funcDeposit')">
                            <div class="type-of-withdrawal">
                                <div class="withdrawal">
                                    <img src="./assets/images/verified.svg" alt="kkk">
                                    <div>Slip Verify</div>
                                </div>
                            </div>
                        </div>

                        <!--<div style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#trueWallet" data-bs-dismiss="modal">-->
                        <div style="cursor: pointer" class="d-none elm-deposit" id="d-true">
                            <div class="type-of-withdrawal">
                                <div class="withdrawal">
                                    <img src="./assets/images/true-money-wallet.svg" alt="kkk">
                                    <div>Truewallet</div>
                                </div>
                            </div>
                        </div>
                        <div style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#withdraw" data-bs-dismiss="modal">
                            <div class="type-of-withdrawal">
                                <div class="withdrawal">
                                    <img src="./assets/images/Withdraw-money.svg" alt="<?= L::systemName ?>">
                                    <div><?= L::lb_withdraw ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="step-de-ti">*ขั้นตอนการฝาก*</span>
                    <img class="step-UploadSlip" src="./images/betboy/step-upload-slip.jpg" alt="stepUpload">
                    
                    <div style="text-align: center; margin-top: 10px">
                        <div style="font-size: 12px">
                            <?= L::remark_foundProb ?>
                            <span style="
                                  color: rgba(0, 252, 252, 1);
                                  text-decoration: underline;
                                  cursor: pointer;
                                  font-size: 13px;
                                  "><?= L::remark_customerService ?></span>
                        </div>
                    </div>

                    <button class="line-button flexCenter">
                        <img src="./assets/icons/icon-line.svg" alt="line icon">
                        <p>Line bot / Contact Admin</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div class="modal fade" id="" tabindex="-1" aria-labelledby="autoDeposit" aria-hidden="true" style="display: flex;">-->
<div class="modal fade modal-lobby" id="funcDeposit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog">
    <div class="modal-border">
        <div class="modal-content modal-dialog ">
            <div class="modal-header-container">
                <div class="modal-header">
                    <img src="./assets/icons/icon-back-modal.svg" class="modal-icon-back" alt="" data-bs-toggle="modal" data-bs-target="#depositWithdraw" data-bs-dismiss="modal">
                    <p class="modal-title" id="autoDeposit">ฝากออโต้</p>
                    <img src="./assets/icons/icon-close-modal.svg" class="modal-icon-close" data-bs-dismiss="modal" aria-label="Close" alt="">
                </div>
            </div>
            <div class="modal-body">
                <?php

                function formatBank($data) {
                    if (strlen($data) == 10) {
                        $d1 = substr($data, 0, 3);
                        $d2 = substr($data, 3, 1);
                        $d3 = substr($data, 4, 5);
                        $d4 = substr($data, 9, 1);
                        return $d1 . '-' . $d2 . '-' . $d3 . '-' . $d4;
                    } else {
                        return $data;
                    }
                }

                $data = $_SESSION['PROFILE']->info;
                $bank = $_SESSION['PROFILE']->info->bankDeposit[0];
                $bank = (Object) $bank;
                $bankList = $_SESSION['PROFILE']->info->bankDeposit;
                $bankList = (object) $bankList;
                ?>
                <form id="form-action-amount-deposit" class="position-relative">
                    <div class="card-list-bank" style="background: <?= $_SESSION["MASTER"]["BANK"][$bank->i_bank]["bgColor"] ?>;">
                        <div class="col-5 text-center">
                            <img src="./assets/images/bankName/<?= $_SESSION["MASTER"]["BANK"][$bank->i_bank]["image"] ?>" width="64" height="64" class="img-bank object-fit-contain"
                                 id="bank-deposit-img" />
                        </div>
                        <a href="javascript:toggleDDLmenu('.ddl-dp')" id="ddl-dp" class="dropdown-toggle text-white text-decoration-none">
                            <div class="col-7 fw-semibold cursor-pointer">
                                <div class="text-white text-left" id="bank-deposit-name"><?= $_SESSION["MASTER"]["BANK"][$bank->i_bank]["name"] ?></div>
                                <div class="d-flex">
                                    <span class="line-h-2">
                                        <input id="bankAccount" class="acc-copy" value="<?= formatBank($bank->s_account_no) ?>" disabled style="max-width: 112px;" />
                                    </span>
                                </div>
                                <p id="bank-deposit-acc-name" class="text-white"><?= $bank->s_account_name ?></p>
                            </div>
                            <div class="text-center">

                                <svg fill="#FFF" width="15" height="15" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     viewBox="-19.8 -19.8 369.60 369.60" xml:space="preserve" transform="rotate(270)matrix(1, 0, 0, 1, 0, 0)" stroke="#000000" stroke-width="0.00330002">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="1.320008"></g>
                                <g id="SVGRepo_iconCarrier">
                                <path id="XMLID_24_"
                                      d="M229.966,0.847c-6.011-2.109-12.698-0.19-16.678,4.784L93.288,155.635 c-4.382,5.478-4.382,13.263,0.001,18.741l120,149.996c2.902,3.628,7.245,5.63,11.716,5.63c1.658,0,3.336-0.276,4.962-0.847 c6.012-2.108,10.035-7.784,10.035-14.154v-300C240.001,8.63,235.978,2.955,229.966,0.847z M210.001,272.24l-85.79-107.235 l85.79-107.241V272.24z">
                                </path>
                                </g>
                                </svg>
                            </div>
                        </a>
                        <!-- <div class="d-grid">
                            <div></div>
                            <a href="javascript:CopyPaste('s_account_no', 'btn-copy-accno', 1300);" id="btn-copy-accno" class="a-copy mr-l-15px" style="width: 2rem;background-color: #2E2D2D;">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.463 4.51465H6.29318C5.44131 4.51465 4.75073 5.20523 4.75073 6.0571V12.2269C4.75073 13.0788 5.44131 13.7694 6.29318 13.7694H12.463C13.3149 13.7694 14.0054 13.0788 14.0054 12.2269V6.0571C14.0054 5.20523 13.3149 4.51465 12.463 4.51465Z"
                                            stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M10.6398 4.23438V2.69193C10.6398 2.28284 10.4773 1.89051 10.1881 1.60125C9.8988 1.31198 9.50648 1.14948 9.09739 1.14948H2.92758C2.5185 1.14948 2.12617 1.31198 1.83691 1.60125C1.54764 1.89051 1.38513 2.28284 1.38513 2.69193V8.86173C1.38513 9.27082 1.54764 9.66315 1.83691 9.95241C2.12617 10.2417 2.5185 10.4042 2.92758 10.4042H4.47004"
                                            stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                            <div></div>
                        </div> -->
                    </div>
                    <div class="row" style="margin-top: .5rem;">
                        <div class="col">
                            <button type="button" onclick="CopyPaste('s_account_no', 'btn-copy-accno', 1300)" id="btn-copy-accno" class="btn" style="width:100% ;background-color: #2E2D2D;">
                                <span class="fa fa-copy"> </span>
                                &nbsp; <?= L::btn_copyAcct ?>
                            </button>
                        </div>
                    </div>
                    <input type="hidden" id="i_bank_agent" name="i_bank_agent" value="<?= $bank->id ?>" />
                    <input type="hidden" id="s_account_no" name="s_account_no" value="<?= $bank->s_account_no ?>" />
                    <ul class="dropdown-menu ddl-dp w-100 bg-transparent">
                        <?php
                        foreach ($bankList as $k => $v) {
                            if ($v->i_bank == 7) {
                                continue;
                            }
                            $color = $_SESSION["MASTER"]["BANK"][$v->i_bank]["bgColor"];
                            $img = $_SESSION["MASTER"]["BANK"][$v->i_bank]["image"];
                            $bankName = $_SESSION["MASTER"]["BANK"][$v->i_bank]["name"];
                            $bankId = $v->id;
                            $bankNoFormat = formatBank($v->s_account_no);
                            $bankNo = $v->s_account_no;
                            $accName = $v->s_account_name;
                            ?>
                    
                            <li onclick="changeBankDeposit('<?= $bankId ?>', '<?= $bankNo ?>', '<?= $bankNoFormat ?>', '<?= $accName ?>', '<?= $color ?>', '<?= $img ?>', '<?= $bankName ?>')">
                                <a class="card dropdown-item  d-flex  text-white dropdown-bank" style="background: <?= $color ?>">
                                    <div class="row d-flex p-2">
                                        <div class="col-5 text-center">
                                            <img src="./assets/images/bankName/<?= $img ?>" width="64" height="64" class="img-bank object-fit-contain" id="bank-deposit-img" />
                                        </div>
                                        <div class="col-7 fw-semibold">
                                            <div class="text-white text-left" id="bank-deposit-name"><?= $bankName ?></div>
                                            <div class="d-flex">
                                                <span><?= $bankNoFormat ?> </span>
                                            </div>
                                            <p id="bank-deposit-acc-name" class="text-white"><?= $accName ?></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="mb-3">
                        <button id="dropdownButton" class="btn btn-prm text-white d-flex align-items-center text-start  dropdown-toggle w-100" type="button" data-bs-toggle="dropdown"
                                onclick="toggleDDLmenu('.select-promotion-list')" style="border: 1px solid #F5E2BD;">
                            <div class="d-flex flex-column w-100">
                                <span class="d-block fs-11"><?= L::lb_choosePrm ?></span>
                                <input type="hidden" id="prmId_AT" name="prmId_AT" value="-1">
                                <input type="hidden" id="prmCode_AT" name="prmCode_AT">
                                <div class="flex flex-row justify-content-start">
                                    <span class="w-100 text-start" id="prmText_AT"><?= L::lb_dontPrm ?></span>
                                </div>
                            </div>

                            <div class="text-center drop-left">

                                <svg fill="#FFF" width="15" height="15" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     viewBox="-19.8 -19.8 369.60 369.60" xml:space="preserve" transform="rotate(270)matrix(1, 0, 0, 1, 0, 0)" stroke="#000000" stroke-width="0.00330002">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="1.320008"></g>
                                <g id="SVGRepo_iconCarrier">
                                <path id="XMLID_24_"
                                      d="M229.966,0.847c-6.011-2.109-12.698-0.19-16.678,4.784L93.288,155.635 c-4.382,5.478-4.382,13.263,0.001,18.741l120,149.996c2.902,3.628,7.245,5.63,11.716,5.63c1.658,0,3.336-0.276,4.962-0.847 c6.012-2.108,10.035-7.784,10.035-14.154v-300C240.001,8.63,235.978,2.955,229.966,0.847z M210.001,272.24l-85.79-107.235 l85.79-107.241V272.24z">
                                </path>
                                </g>
                                </svg>
                            </div>

                        </button>



                    </div>
                    <ul class="dropdown-menu w-100 select-promotion-list" id="promotion-list-at">

                    </ul>
                    <div>
                        <div class="button-validationt">
                            <div style="color: white">
                                <?= L::remark_dp1 ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="file" id="fileslip" accept="image/*" onchange="uploadFile()" class="d-none" />
                        <input type="button" id="btn-slip" class="btn d-flex gap-2 border border-white w-100 justify-content-center btn-ups elm-deposit" value="<?= L::btn_upslip ?>"
                               onclick="document.getElementById('fileslip').click();" />
                    </div>
                </form>


                <div style="text-align: center; margin-top: 10px">
                    <div>
                        พบปัญหา
                        <span style="
                              color: rgba(0, 252, 252, 1);
                              text-decoration: underline;
                              cursor: pointer;
                              ">ติดต่อฝ่ายบริการลูกค้า</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>