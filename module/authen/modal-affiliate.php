<!-- Register -->

<div class="modal modal-access fade" id="affiliateModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <h2 class="text-center fw-bold fs-4 mb-3">
                    <?= L::lb_affiliate ?>
                </h2>
                <form id="form-action-register">
                    <input type="hidden" id="ref" name="ref" value="<?= $ref ?>">
                    <input type="hidden" id="type_shorturl" name="type_shorturl">
                    <input type="hidden" id="more_detail" name="more_detail">
                    <input type="hidden" id="s_channel_remark" name="s_channel_remark">
                    <div class="row gx-1  gx-md-2 gy-2 gy-md-3 " id="regis-step-1">
                        <div class="col-12">
                            <input type="text" class="form-control" id="s_phone" name="s_phone" placeholder="<?= L::lb_enterPhone ?>" value="" required>
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control" id="s_password" name="s_password" placeholder="<?= L::lb_enterPwd ?>" value="" required>
                        </div>
                        <div class="col-12">
                            <select class="form-select" id="i_bank" name="i_bank" aria-label="Default select example">
                                <option value="-1" selected>
                                    <?= L::lb_selYourBank ?>
                                </option>
                                <option value="1">
                                    <?= L::i_bank_1 ?>
                                </option>
                                <option value="2">
                                    <?= L::i_bank_2 ?>
                                </option>
                                <option value="3">
                                    <?= L::i_bank_3 ?>
                                </option>
                                <option value="4">
                                    <?= L::i_bank_4 ?>
                                </option>
                                <option value="5">
                                    <?= L::i_bank_5 ?>
                                </option>
                                <option value="6">
                                    <?= L::i_bank_6 ?>
                                </option>
                                <option value="8">
                                    <?= L::i_bank_8 ?>
                                </option>
                                <option value="10">
                                    <?= L::i_bank_10 ?>
                                </option>
                                <option value="11">
                                    <?= L::i_bank_11 ?>
                                </option>
                                <option value="12">
                                    <?= L::i_bank_12 ?>
                                </option>
                                <option value="13">
                                    <?= L::i_bank_13 ?>
                                </option>
                                <option value="14">
                                    <?= L::i_bank_14 ?>
                                </option>
                                <option value="15">
                                    <?= L::i_bank_15 ?>
                                </option>
                                <option value="16">
                                    <?= L::i_bank_16 ?>
                                </option>
                                <option value="17">
                                    <?= L::i_bank_17 ?>
                                </option>
                                <option value="18">
                                    <?= L::i_bank_18 ?>
                                </option>
                                <option value="19">
                                    <?= L::i_bank_19 ?>
                                </option>
                            </select>
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" id="s_account_no" name="s_account_no" placeholder="<?= L::lb_enterAccNo ?>" value="" required>
                        </div>
                        <!--                        <div class="col-12">
                            <input type="text" class="form-control" id="s_line" name="s_line" placeholder="LINE" value="" required>
                        </div>-->
                        <div class="col-12 py-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="true" id="accept" name="accept">
                                <label class="form-check-label fs-8" for="accept">
                                    <?= L::lb_accept ?>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="button" class="btn btn-register font-size-1rem lh-sm border-radius-pill" onclick="verifyReg()">
                                <?= L::btn_register ?>
                            </button>
                        </div>
                    </div>
                    <div class="row gx-1  gx-md-2 gy-2 gy-md-3  d-none marg-top-20px" id="regis-step-2">
                        <input type="hidden" id="i_channel" name="i_channel" value="">
                        <div class="col-12">
                            <input type="text" class="form-control" id="s_firstname" name="s_firstname" placeholder="<?= L::lb_firstName ?>" value="" required>

                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" id="s_lastname" name="s_lastname" placeholder="<?= L::lb_lastName ?>" value="" required>
                            <div class="row d-none" id="section-firstname">
                                <div class="col-6"><label>
                                        <?= L::lb_firstName ?> -
                                        <?= L::lb_lastName ?> :
                                    </label> </div>
                                <div class="col-6"> <span id="display_fullname"></span></div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-6"><label>
                                        <?= L::lb_password ?> :
                                    </label> </div>
                                <div class="col-6"> <span id="display_password"></span></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6"><label>
                                        <?= L::lb_phonNo ?> :
                                    </label> </div>
                                <div class="col-6"> <span id="display_phone"></span></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6"><label>
                                        <?= L::lb_bank ?> :
                                    </label> </div>
                                <div class="col-6"> <span id="display_bank"></span></div>
                            </div>
                        </div>

                        <!--                        <div class="col-12">
                            <div class="row">
                                <div class="col-6"><label><?= L::lb_lineID ?> : </label> </div>
                                <div class="col-6"> <span id="display_line"></span></div>
                            </div>
                        </div>-->

                        <div class="col-12 text-center marg-top-60px ">
                            <button type="button" class="btn btn-register font-size-1rem fs-4 lh-sm border-radius-pill" onclick="ConfirmReg()">
                                <?= L::btn_confirmInfo ?>
                            </button>
                        </div>
                    </div>
                    <div class="row gx-1  gx-md-2 gy-2 gy-md-3  d-none marg-top-20px" id="regis-step-3">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6"><label>
                                        <?= L::lb_username ?> :
                                    </label> </div>
                                <div class="col-6"> <span id="login-username"></span></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6"><label>
                                        <?= L::lb_password ?> :
                                    </label> </div>
                                <div class="col-6"> <span id="login-password"></span></div>
                            </div>
                        </div>

                        <div class="col-12 text-center marg-top-60px ">
                            <a href="#" class="btn btn-register font-size-1rem fs-4 lh-sm border-radius-pill" id="regis-login">
                                <?= L::btn_login ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 py-2 text-center fs-8 fw-semibold">
                        <?= L::remark_foundProb ?> <a href="https://lin.ee/Fpq5RZl" class="" style="color: #00FCFC;" target="_blank">
                            <?= L::remark_customerService ?>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>