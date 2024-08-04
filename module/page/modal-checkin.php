<!-- Check-in -->
<div class="modal modal-popup fade" id="checkIn" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="checkInLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <div class="position-relative w-100 inner">
          <h5 class="modal-title text-center fs-5" id="checkInLabel">
            <?= L::lb_dpHistory ?>
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
      </div>
      <div class="modal-body px-3 pb-3">
        <!-- <div class="row g-0 row-cols-5">
                  <div class="col">
                    <div class="position-relative">
                      <img src="./assets/images/check-in/bg.png" class="img-fluid" alt="Check In" />
                      <span
                        class="position-absolute d-block text-black fs-9 fw-semibold bottom-0 start-0 w-100 text-center mb-1">วันที่
                        1</span>
                    </div>
                  </div>
                </div> -->
        <!-- Start Loop for Demo -->
        <div class="row g-0 row-cols-5" id="checkInLists"></div>
        <script>
          for (let i = 1; i <= 30; i++) {
            const html = `
                        <div class="col">
                          <div class="position-relative">
                            <img src="./assets/images/check-in/bg.png" class="img-fluid" alt="Check In" />
                            <span
                              class="position-absolute d-block text-black fs-9 fw-semibold bottom-0 start-0 w-100 text-center mb-1"><?= L::lb_date ?> ${i}</span>
                          </div>
                        </div>
                      `;
            const tempContainer = document.createElement('div');
            tempContainer.innerHTML = html;

            const tournamentLists = document.getElementById('checkInLists');
            tournamentLists.appendChild(tempContainer.firstElementChild);
          }
        </script>
        <!-- End Loop for Demo -->
        <div class="py-3">
          <div class="row g-3 fs-10">
            <div class="col-6">
              <?= L::lb_dpMoneyToReward ?>
            </div>
            <div class="col-6">
              <?= L::lb_condPass ?> ,
              <?= l::lb_recvReward ?>
            </div>
            <div class="col-6">
              <?= L::lb_recvPrize ?>
            </div>
            <div class="col-6">
              <?= L::lb_doesCondPrize ?>
            </div>
            <div class="col-6">
              <?= L::lb_didRecvThatDay ?>
            </div>
            <div class="col-6">
              <?= L::lb_eventDueDate ?>
            </div>
          </div>
        </div>
        <div class="text-center">
          <button type="button" class="btn btn-sm btn-pink px-4 border-radius-10">
            <?= l::lb_dpForReward ?>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>