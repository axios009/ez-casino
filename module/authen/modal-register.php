<div class="modal fade" id="signUpModal" tabindex="-1" aria-labelledby="signUpModalLabel" aria-hidden="true">
    <div class="modal-border">
        <div class="modal-content modal-dialog">
            <div class="signup-background"></div>
            <div class="signup-modal-content">



                <div class="register-page flexCenter">
                    <div class="signup-modal-body">
                        <div class="d-flex">
                            <div style="width:20%">&nbsp;</div>
                            <img src="./images/betboy/betboy-888-2.png" class="logo" alt="logo" style="width:60%" />
                            <div style="width:20%;text-align: end;">
                                <a href="javascript:void(1)" onclick="closeModal('signUpModal')">
                                    <img src="./assets/icons/x-close.svg" alt="close-icon" aria-label="Close" />
                                </a>
                            </div>
                        </div>
                        <div class="progress-step-container flexCenter">
                            <div class="progress-step flexCenter">
                                <div class="step-active flexCenter" id="step-1-mobile">1</div>
                                <small><?= L::lb_bankAcct ?></small>
                            </div>
                            <hr>
                            <div class="progress-step flexCenter">
                                <div class="step flexCenter" id="step-2-mobile">2</div>
                                <small><?= L::lb_dataRegister ?></small>
                            </div>
                            <hr>
                            <div class="progress-step flexCenter">
                                <div class="step flexCenter" id="step-3-mobile">3</div>
                                <small><?= L::lb_login ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="" id="form-mobile-step-one">
                        <div class="text-container">
                            <p><?= L::lb_bankAcct ?></p>
                        </div>
                        <form id="action-reg-mobile">
                            <input type="hidden" id="m_ref" name="m_ref" value="<?= $ref ?>">
                            <div class="phone-input">
                                <div class="input-container flexCenter">
                                    <img src="./assets/icons/phone.svg" alt="phone icon">
                                    <input name="m_phone" id="m_phone" type="text" placeholder="<?= L::lb_phonNo ?>">
                                </div>
                            </div>
                            <div class="phone-input">
                                <div class="input-container flexCenter">
                                    <img src="./assets/icons/bank.svg" alt="phone icon">
                                    <select name="m_bank" id="m_bank" class="select-bank">
                                        <option value="-1">กรุณาเลือกธนาคาร</option>
                                        <?php
                                        $bank = array(
                                            '1' => array('name' => 'ธนาคารไทยพาณิชย์', "image" => "scb.png", "bgColor" => "#4C297E"),
                                            '2' => array('name' => 'ธนาคารกสิกรไทย', "image" => "kbank.png", "bgColor" => "#118f46"),
                                            '3' => array('name' => 'ธนาคารกรุงไทย', "image" => "ktb.png", "bgColor" => "#1EA1DB"),
                                            '4' => array('name' => 'ธนาคารกรุงเทพ', "image" => "bbl.png", "bgColor" => "#003399"),
                                            '5' => array('name' => 'ธนาคารกรุงศรีอยุธยา', "image" => "bay.png", "bgColor" => "#FED20F"),
                                            '6' => array('name' => 'ธนาคารทหารไทยธนชาต', "image" => "tmb.png", "bgColor" => "#0052F7"),
                                            //                                    '7' => array('name' => 'TrueWallet', "image" => "tw.png", "bgColor" => "#F58021"),
                                            '8' => array('name' => 'ธนาคารออมสิน', "image" => "gsb.png", "bgColor" => "#EC068D"),
                                            '10' => array('name' => 'ธนาคารยูโอบี', "image" => "uob.png", "bgColor" => "#00377A"),
                                            '11' => array('name' => 'ธนาคารเกียรตินาคิน', "image" => "kk.png", "bgColor" => "#009BCB"),
                                            '12' => array('name' => 'ธนาคารแลนด์ แอนด์ เฮ้าส์', "image" => "lh.png", "bgColor" => "#009BCB"),
                                            '13' => array('name' => 'ธนาคารอิสลาม', "image" => "ibank.png", "bgColor" => "#154714"),
                                            '14' => array('name' => 'ธนาคารทิสโก้', "image" => "tisco.png", "bgColor" => "#0270BB"),
                                            //                                    '15' => array('name' => 'SCIB', "image" => "scib_.png", "bgColor" => "#CD030B"),
                                            '16' => array('name' => 'ธนาคารอาคารสงเคราะห์', "image" => "ghb.png", "bgColor" => "#F89828"),
                                            '17' => array('name' => 'ธนาคารซีไอเอ็มบีไทย', "image" => "cimb.png", "bgColor" => "#B9021D"),
                                            '18' => array('name' => 'ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร', "image" => "baac.png", "bgColor" => "#006637"),
                                            '19' => array('name' => 'ธนาคารไอซีบีซี', "image" => "icbc.png", "bgColor" => "#BD0014"),
                                        );
                                        $directory = 'images/bank';
                                        $bank = (object) $bank;
                                        foreach ($bank as $k => $v) {
                                            ?>
                                            <option value="<?= $k ?>"><?= $v['name'] ?></option>
                                            <?php
                                        }
                                        ?>


                                    </select>
                                </div>
                            </div>
                            <div class="phone-input">
                                <div class="input-container flexCenter">
                                    <img src="./assets/icons/bank.svg" alt="phone icon">
                                    <input type="text" id="m_account_no" name="m_account_no" placeholder="<?= L::lb_bankAcct ?>">
                                </div>
                            </div>
                        </form>
                        <button class="next-step-button" onclick="mobileRegStep1()"><?= L::lb_next ?></button>
                    </div>
                    <div class="d-none" id="form-mobile-step-two" style="width: 60%;">
                        <div class="text-container">
                            <p><?= L::lb_name ?> - <?= L::lb_lastName ?></p>
                        </div>

                        <div class="phone-input">
                            <div class="input-container flexCenter">
                                <img src="./assets/icons/name.svg" alt="phone icon">
                                <input name="m_name" id="m_name" type="text" placeholder="<?= L::lb_name ?>">
                            </div>
                        </div>
                        <div class="phone-input">
                            <div class="input-container flexCenter">
                                <img src="./assets/icons/name.svg" alt="phone icon">
                                <input name="m_lastname" id="m_lastname" type="text" placeholder="<?= L::lb_lastName ?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row d-flex">
                                <div class="col-6"><label class="text-white"><?= L::lb_password ?> : </label> </div>
                                <div class="col-6"> <span class="text-white" id="display_password"></span></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row d-flex">
                                <div class="col-6"><label class="text-white"><?= L::lb_phonNo ?> : </label> </div>
                                <div class="col-6"> <span class="text-white" id="display_phone"></span></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row d-flex">
                                <div class="col-6"><label class="text-white"><?= L::lb_bank ?> : </label> </div>
                                <div class="col-6"> <span class="text-white" id="display_bank"></span></div>
                            </div>
                        </div>
                        <br>
                        <button class="next-step-button" onclick="mobileRegStep2()"><?= L::lb_next ?></button>
                    </div>
                    <div class="d-none" id="form-mobile-step-three" style="width: 350px;">
                        <div class="register-success-modal-content mar-auto">
                            <div class="border-input-gold">
                                <div class="register-info-content">
                                    <!-- <p class="register-info-title">ข้อมูลสมัคร</p> -->
                                    <div class="register-info-group">
                                        <p class="register-info-text">Username :</p>
                                        <p class="register-info-text-bold" id="m_res_username"></p>
                                    </div>

                                    <div class="register-info-group">
                                        <p class="register-info-text">Password :</p>
                                        <p class="register-info-text-bold" id="m_res_password"></p>
                                    </div>

                                </div>
                            </div>
                            <a class="next-step-button btn-register-success" id="m_link_login">
                                <?= L::lb_register ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- REG MOBILE -->
<div class="modal modal-authen" id="reg-mobile" tabindex="-1">
    <div class="modal-dialog">
        <div class="register-page flexCenter" id="reg-action-mobile">
            <a href="javascript:closeModal('reg-mobile')">
                <img src="./assets/icons/home-icon.svg" id="mobile-home-button" alt="home-icon">
            </a>
            <img class="logo" src="./images/betboy/betboy-888-2.png" alt="logo">

            <div class="banner">
                <img src="./images/betboy/bn1.png" alt="login-banner">
            </div>
            <div class="slide-left">
                <div class="slide-game ">
                    <img src="./images/betboy/bn2.png" alt="game">
                    <img src="./images/betboy/bn3.png" alt="game">
                    <img src="./images/betboy/bn4.png" alt="game">
                    <img src="./images/betboy/bn5.png" alt="game">
                </div>
            </div>

            <div class="progress-step-container flexCenter">
                <div class="progress-step flexCenter">
                    <div class="step-active flexCenter" id="step-1-mobile">1</div>
                    <small><?= L::lb_bankAcct ?></small>
                </div>
                <hr>
                <div class="progress-step flexCenter">
                    <div class="step flexCenter" id="step-2-mobile">2</div>
                    <small><?= L::lb_dataRegister ?></small>
                </div>
                <hr>
                <div class="progress-step flexCenter">
                    <div class="step flexCenter" id="step-3-mobile">3</div>
                    <small><?= L::lb_login ?></small>
                </div>
            </div>
            <div class="" id="form-mobile-step-one">
                <div class="text-container">
                    <p><?= L::lb_bankAcct ?></p>
                </div>
                <form id="action-reg-mobile">
                    <input type="hidden" id="m_ref" name="m_ref" value="<?= $ref ?>">
                    <div class="phone-input">
                        <div class="input-container flexCenter">
                            <img src="./assets/icons/phone.svg" alt="phone icon">
                            <input name="m_phone" id="m_phone" type="text" placeholder="<?= L::lb_phonNo ?>">
                        </div>
                    </div>
                    <div class="phone-input">
                        <div class="input-container flexCenter">
                            <img src="./assets/icons/bank.svg" alt="phone icon">
                            <select name="m_bank" id="m_bank" class="select-bank">
                                <option value="-1"><?= L::lb_pleaseSelect ?></option>
                                <?php
                                $bank = array(
                                    '1' => array('name' => 'ธนาคารไทยพาณิชย์', "image" => "scb.png", "bgColor" => "#4C297E"),
                                    '2' => array('name' => 'ธนาคารกสิกรไทย', "image" => "kbank.png", "bgColor" => "#118f46"),
                                    '3' => array('name' => 'ธนาคารกรุงไทย', "image" => "ktb.png", "bgColor" => "#1EA1DB"),
                                    '4' => array('name' => 'ธนาคารกรุงเทพ', "image" => "bbl.png", "bgColor" => "#003399"),
                                    '5' => array('name' => 'ธนาคารกรุงศรีอยุธยา', "image" => "bay.png", "bgColor" => "#FED20F"),
                                    '6' => array('name' => 'ธนาคารทหารไทยธนชาต', "image" => "tmb.png", "bgColor" => "#0052F7"),
                                    //                                    '7' => array('name' => 'TrueWallet', "image" => "tw.png", "bgColor" => "#F58021"),
                                    '8' => array('name' => 'ธนาคารออมสิน', "image" => "gsb.png", "bgColor" => "#EC068D"),
                                    '10' => array('name' => 'ธนาคารยูโอบี', "image" => "uob.png", "bgColor" => "#00377A"),
                                    '11' => array('name' => 'ธนาคารเกียรตินาคิน', "image" => "kk.png", "bgColor" => "#009BCB"),
                                    '12' => array('name' => 'ธนาคารแลนด์ แอนด์ เฮ้าส์', "image" => "lh.png", "bgColor" => "#009BCB"),
                                    '13' => array('name' => 'ธนาคารอิสลาม', "image" => "ibank.png", "bgColor" => "#154714"),
                                    '14' => array('name' => 'ธนาคารทิสโก้', "image" => "tisco.png", "bgColor" => "#0270BB"),
                                    //                                    '15' => array('name' => 'SCIB', "image" => "scib_.png", "bgColor" => "#CD030B"),
                                    '16' => array('name' => 'ธนาคารอาคารสงเคราะห์', "image" => "ghb.png", "bgColor" => "#F89828"),
                                    '17' => array('name' => 'ธนาคารซีไอเอ็มบีไทย', "image" => "cimb.png", "bgColor" => "#B9021D"),
                                    '18' => array('name' => 'ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร', "image" => "baac.png", "bgColor" => "#006637"),
                                    '19' => array('name' => 'ธนาคารไอซีบีซี', "image" => "icbc.png", "bgColor" => "#BD0014"),
                                );
                                $directory = 'images/bank';
                                $bank = (object) $bank;
                                foreach ($bank as $k => $v) {
                                    ?>
                                    <option value="<?= $k ?>"><?= $v['name'] ?></option>
                                    <?php
                                }
                                ?>


                            </select>
                        </div>
                    </div>
                    <div class="phone-input">
                        <div class="input-container flexCenter">
                            <img src="./assets/icons/bank.svg" alt="phone icon">
                            <input type="text" id="m_account_no" name="m_account_no" placeholder="<?= L::lb_bankAcct ?>">
                        </div>
                    </div>
                </form>
                <button class="next-step-button" onclick="mobileRegStep1()"><?= L::lb_next ?></button>
            </div>
            <div class="d-none" id="form-mobile-step-two">
                <div class="text-container">
                    <p><?= L::lb_name ?> - <?= L::lb_lastName ?></p>
                </div>

                <div class="phone-input">
                    <div class="input-container flexCenter">
                        <img src="./assets/icons/name.svg" alt="phone icon">
                        <input name="m_name" id="m_name" type="text" placeholder="<?= L::lb_name ?>">
                    </div>
                </div>
                <div class="phone-input">
                    <div class="input-container flexCenter">
                        <img src="./assets/icons/name.svg" alt="phone icon">
                        <input name="m_lastname" id="m_lastname" type="text" placeholder="<?= L::lb_lastName ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="row d-flex">
                        <div class="col-6"><label class="text-white"><?= L::lb_password ?> : </label> </div>
                        <div class="col-6"> <span class="text-white" id="display_password"></span></div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row d-flex">
                        <div class="col-6"><label class="text-white"><?= L::lb_phonNo ?> : </label> </div>
                        <div class="col-6"> <span class="text-white" id="display_phone"></span></div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row d-flex">
                        <div class="col-6"><label class="text-white"><?= L::lb_bank ?> : </label> </div>
                        <div class="col-6"> <span class="text-white" id="display_bank"></span></div>
                    </div>
                </div>
                <br>
                <button class="next-step-button" onclick="mobileRegStep2()"><?= L::lb_next ?></button>
            </div>
            <div class="d-none" id="form-mobile-step-three" style="width: 350px;">
                <div class="register-success-modal-content mar-auto">
                    <div class="border-input-gold">
                        <div class="register-info-content">
                             <p class="register-info-title font-zc">* รหัสผ่านของคุณคือเบอร์โทร กรุณาเปลี่ยนรหัสผ่านหลังสมัครเสร็จค่ะ *</p> 
                            <div class="register-info-group mar-bt">
                                <p class="register-info-text"><?= L::lb_username ?> :</p>
                                <p class="register-info-text-bold" id="m_res_username"></p>
                            </div>
                             
                             <div class="register-info-group mar-bt">
                                <p class="register-info-text"><?= L::lb_telNo ?> :</p>
                                <p class="register-info-text-bold" id="m_res_phoneNo"></p>
                            </div>

                            <div class="register-info-group mar-bt">
                                <p class="register-info-text"><?= L::lb_password ?> :</p>
                                <p class="register-info-text-bold" id="m_res_password"></p>
                            </div>

                        </div>
                    </div>
                    <a class="next-step-button btn-register-success" id="m_link_login">
                        <?= L::lb_login ?>
                    </a>
                </div>
            </div>
            <p style="margin-top: 8px;">
                Ready have Account?
                <a href="/pages/login-page-mobile.html"><?= L::lb_register ?></a>
            </p>
        </div>
    </div>
</div>