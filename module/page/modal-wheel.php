<!-- กงล้อ -->
<div class="modal modal-popup fade" id="wheelModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="wheelModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="position-relative w-100 inner">
                    <button type="button" class="btn-back" data-bs-dismiss="modal" onclick="modalbagModal()" aria-label="Close"></button>
                    <h5 class="modal-title text-center fs-5" id="wheelModalLabel">
                        <?= L::menu_wheel ?>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body px-3 pb-3">
                <h6 class="fs-5 fw-medium mb-0">
                    <?= L::lb_totalPoint ?> : 0.00
                </h6>
                <p class="fs-10 mb-0">10
                    <?= L::lb_point ?>
                    <?= L::lb_turnWheel ?> 1
                    <?= L::lb_time ?>
                </p>
                <div class="container">
                    <div class="row">
                        <div class="col-md-auto d-flex flex-row align-items-center gap-2 justify-content-center">
                            <div class="d-flex flex-column align-items-center">
                                <img src="assets/images/media/spin-wheel.png" width="150" height="150" class="object-fit-contain" alt="<?= L::lb_spin ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-auto d-flex flex-row align-items-center gap-2 justify-content-center">
                            <button type="button" class="btn btn-sm py-0 btn-sky fs-6 fw-semibold">
                                <?= L::lb_spin ?>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-auto d-flex flex-row align-items-center gap-2 justify-content-center">
                            <div class="fw-medium fs-5">
                                <?= L::lb_creditWheel ?> : 0.00
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-md-auto d-flex flex-row align-items-center gap-2 justify-content-center">
                            <input ype="text" class="form-control border-0" placeholder="<?= L::lb_amount ?>" style="background-color: #343434;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-auto d-flex flex-row align-items-center gap-2 justify-content-center">
                            <div class="fs-8 fw-semibold" style="color: #FF0000;">
                                <?= L::lb_exchangeMoneyCredit ?>
                                <?= L::lb_min ?> 100.00
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-auto d-flex flex-row align-items-center gap-2 justify-content-center">
                            <button type="button" class="btn btn-gold py-2 fw-semibold">
                                <?= L::lb_exchangeMoneyCredit ?>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-auto d-flex flex-row align-items-center gap-2 justify-content-center">
                            <a href="#" class="d-inline-block text-white text-decoration-none">
                                <?= L::lb_readRules ?> <svg class="ms-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 20 21" fill="none">
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
</div>