<div class="modal fade modal-lobby" id="wheelRewardModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog">
  <div class="modal-border">
    <div class="modal-content modal-dialog">
      <div class="modal-header-container">
        <div class="modal-header">
          <!-- <img src="./assets/icons/icon-back-modal.svg" class="modal-icon-back" alt="" data-bs-toggle="modal" data-bs-target="#spinnerModal" data-bs-dismiss="modal"> -->
          <p class="modal-title" id="spinnerModalTitle"><?= L::lb_recvReward ?></p>
          <img src="./assets/icons/icon-close-modal.svg" class="modal-icon-close" onclick="closeModal('wheelRewardModal')" aria-label="Close" alt="">
        </div>
      </div>
      <div class="modal-body">
        <?php
        $bank = $_SESSION['PROFILE']->info->bankDeposit[0];
        $bankName = $_SESSION["MASTER"]["BANK"][$bank->i_bank]["name"];
        ?>
        <div class="deposit-withdraw-modal-content">
          <div class="row justify-content-center" style="margin-top:15px;">
            <div class="col-12 text-center">
              <img id="imgReward" width="150" height="150">
              <h3 class="text-white" id="descReward"></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>