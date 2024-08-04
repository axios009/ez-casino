<!-- ทัวร์นาเมนต์ -->
<div class="modal modal-popup fade" id="tournament" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="tournamentLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <div class="position-relative w-100 inner">
                    <button type="button" class="btn-back" data-bs-dismiss="modal" onclick="modalbagModal()" aria-label="Close"></button>
                    <h5 class="modal-title text-center fs-5" id="tournamentLabel"><?= L::menu_tournament ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body px-3 pb-3" data-overlayscrollbars-initialize>
                <div class="d-flex justify-content-center mb-3">
                    <div class="dropdown">
                        <button id="dropdownButton"
                                class="btn bg-white text-black d-flex align-items-center dropdown-toggle border-radius-pill" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="px-3 py-2 position-relative mt-1">
                                <img id="dropdownIcon" src="assets/svg/tournament-30-1.svg"
                                     class="img-fluid position-absolute top-50 translate-middle-y start-0" alt="<?= L::lb_top30players ?>">
                            </div>
                            <span id="dropdownText"><?= L::lb_top30players ?></span>
                        </button>
                        <ul class="dropdown-menu w-100">
                            <li>
                                <a class="dropdown-item px-2 d-flex" href="#"
                                   onclick="changeDropdownOption('assets/svg/tournament-30-1.svg', '<?= L::lb_top30players ?>')">
                                    <div class="px-3 py-2 position-relative mt-1">
                                        <img src="assets/svg/tournament-30-1.svg"
                                             class="img-fluid position-absolute top-50 translate-middle-y start-0"
                                             alt="<?= L::lb_top30players ?>">
                                    </div><?= L::lb_top30players ?>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item px-2 d-flex" href="#"
                                   onclick="changeDropdownOption('assets/svg/tournament-30-2.svg', '<?= L::lb_top30Deposit ?>')">
                                    <div class="px-3 py-2 position-relative mt-1">
                                        <img src="assets/svg/tournament-30-2.svg"
                                             class="img-fluid position-absolute top-50 translate-middle-y start-0"
                                             alt="<?= L::lb_top30Deposit ?>">
                                    </div><?= L::lb_top30Deposit ?>"
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item px-2 d-flex" href="#"
                                   onclick="changeDropdownOption('assets/svg/tournament-30-3.svg', '<?= L::lb_top30Losses ?>')">
                                    <div class="px-3 py-2 position-relative mt-1">
                                        <img src="assets/svg/tournament-30-3.svg"
                                             class="img-fluid position-absolute top-50 translate-middle-y start-0"
                                             alt="<?= L::lb_top30Losses ?>">
                                    </div><?= L::lb_top30Losses ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <script>
                    function changeDropdownOption(newIconSrc, newText) {
                        document.getElementById('dropdownIcon').src = newIconSrc;
                        document.getElementById('dropdownText').textContent = newText;
                    }
                </script>
                <div class="d-flex flex-column gap-2 fw-semibold">
                    <div class="row g-3 align-items-center">
                        <div class="col-2">
                            <img src="assets/svg/tournament-no-1.svg" class="img-fluid mt-1" alt="อันดับ 1">
                        </div>
                        <div class="col-10">
                            <div class="p-2 bg-tournament-no-1 border-radius-10 overflow-hidden">
                                <div class="row g-2">
                                    <div class="col">
                                        <div><?= L::lb_username ?></div>
                                        <div>095-xxx-xxxx</div>
                                    </div>
                                    <div class="col-auto text-end">
                                        <div><?= L::lb_sum ?></div>
                                        <div>5,1351,353</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-2">
                            <img src="assets/svg/tournament-no-2.svg" class="img-fluid mt-1" alt="อันดับ 1">
                        </div>
                        <div class="col-10">
                            <div class="p-2 bg-tournament-no-2 border-radius-10 overflow-hidden">
                                <div class="row g-2">
                                    <div class="col">
                                        <div><?= L::lb_username ?></div>
                                        <div>095-xxx-xxxx</div>
                                    </div>
                                    <div class="col-auto text-end">
                                        <div><?= L::lb_sum ?></div>
                                        <div>5,1351,353</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-2">
                            <img src="assets/svg/tournament-no-3.svg" class="img-fluid mt-1" alt="อันดับ 1">
                        </div>
                        <div class="col-10">
                            <div class="p-2 bg-tournament-no-3 border-radius-10 overflow-hidden">
                                <div class="row g-2">
                                    <div class="col">
                                        <div><?= L::lb_username ?></div>
                                        <div>095-xxx-xxxx</div>
                                    </div>
                                    <div class="col-auto text-end">
                                        <div><?= L::lb_sum ?></div>
                                        <div>5,1351,353</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row g-3 align-items-center">
                      <div class="col-2 text-center">4</div>
                        <div class="col-10">
                          <div class="row g-0 py-1 px-2 rounded-2" style="background-color: #5E5E5E;">
                            <div class="col-6">095-xxx-xxxx</div>
                            <div class="col-2 text-center"><?= L::lb_sum ?></div>
                            <div class="col-4 text-end">351,353</div>
                          </div>
                        </div>
                    </div> -->

                    <!-- Start Loop for Demo -->
                    <div class="d-flex flex-column gap-2" id="tournamentLists"></div>
                    <script>
                        for (let i = 4; i <= 30; i++) {
                            const html = `
                          <div class="row g-3 align-items-center">
                            <div class="col-2 text-center">${i}</div>
                            <div class="col-10">
                              <div class="row g-0 py-1 px-2 rounded-2" style="background-color: #5E5E5E;">
                                <div class="col-6">095-xxx-xxxx</div>
                                <div class="col-2 text-center"><?= L::lb_sum ?></div>
                                <div class="col-4 text-end">351,353</div>
                              </div>
                            </div>
                          </div>
                      `;
                            const tempContainer = document.createElement('div');
                            tempContainer.innerHTML = html;

                            const tournamentLists = document.getElementById('tournamentLists');
                            tournamentLists.appendChild(tempContainer.firstElementChild);
                        }
                    </script>
                    <!-- End Loop for Demo -->
                </div>
            </div>
        </div>
    </div>
</div>
