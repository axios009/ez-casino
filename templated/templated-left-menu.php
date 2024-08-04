<!-- Sidebar -->
<div class="sidebar offcanvas offcanvas-start border-0" tabindex="-1" id="offcanvasSidebar"
     aria-labelledby="offcanvasSidebarLabel">
    <div class="offcanvas-body p-2 d-flex gap-3 flex-column justify-content-between">
        <div class="pt-4">
            <div >
                <img src="./assets/images/logo2.png" class="sidebar-img">
                <!-- <h3 class="text-nowrap m-0 btn-font-responsive-th">เกมฮิต</h3> -->
            </div>            
            <div class="pt-4 ps-3 pe-3">
                <div>
                    <p class="p-floatleft">Username :</p> 
                    <p class="p-floatright"><?= $_SESSION['PROFILE']->username ?></p> 
                </div>
                <div class="div-clear"> </div>
                <div>
                    <p class="p-floatleft">Phone :</p> 
                    <?php

                        function formatMobileNo($data) {
                            if (strlen($data) == 10) {
                                $d1 = substr($data, 0, 3);
                                $d2 = substr($data, 3, 3);
                                $d3 = substr($data, 6, 4);
                                
                                return $d1 . '-' . $d2 . '-' . $d3;
                            } else {
                                return $data;
                            }
                        }
                    ?>
                    <p class="p-floatright"><?= formatMobileNo($_SESSION['PROFILE']->info->profile->s_phone) ?></p> 
                    <!-- FIXED -->
                </div>
                <div class="div-clear"> </div>
            </div>
            <div class="row ps-4 pe-4 pb-4"> 
                <div class="col sidebar-box">
                    <div class="p-floatleft fs-8">
                        <label> ยอดเงินคงเหลือ </label>
                    </div>       
                    <div class="div-clear"> </div>                                                                   
                    <div class="p-floatright"> 
                        <?= number_format($_SESSION['PROFILE']->balance->amount, 2) ?>
                    </div>                        
                </div>         
            </div>
           
            <div class="row ps-2 pe-2 pb-2"> 
                <div class="col">
                    <button type="button" class="sidebar-btn" data-bs-toggle="modal" 
                        data-bs-target="#profileModal">  โปรไฟล์</button>
                </div>
                <div class="col ml-minus1">
                    <button type="button" class="sidebar-btn" data-bs-toggle="modal"
                        data-bs-target="#depositWithdraw"><?= L::menu_deposit ?>-<?= L::menu_withdraw ?></button>
                </div>
            </div>
            <div class="row ps-2 pe-2 pb-2"> 
                <div class="col">
                    <button type="button" class="sidebar-btn" data-bs-toggle="modal"
                            data-bs-target="#bagModal"><?= L::menu_wallet ?></button>
                </div>
                <div class="col ml-minus1">                    
                    <button type="button" class="sidebar-btn" onclick="InquiryHistory()" ><?= L::menu_history ?></button>
                </div>
            </div>
            <div class="row ps-2 pe-2 pb-2"> 
                <div class="col">
                    <button type="button" class="sidebar-btn"><?= L::menu_lineBot ?></button>
                </div>
                <div class="col ml-minus1">
                    <button type="button" class="sidebar-btn"><?= L::menu_contactAdmin ?></button>
                </div>
            </div>
            <div class="row ps-2 pe-2 pb-2"> 
                <div class="col">                                                                                               
                    <button type="button" class="sidebar-btn" data-bs-toggle="modal"
                            data-bs-target="#changePassword"><?= L::menu_changePassword ?></button>                        
                </div>         
            </div>
            <div class="row ps-2 pe-2 pb-2"> 
                <div class="col">
                    <button type="button" class="sidebar-btn" data-bs-toggle="modal"
                            data-bs-target="#confirmLogout"><?= L::menu_logout ?></button>  
                </div>         
            </div>
            
        </div>
        <div class="ps-2 pe-2">
            
            <div class="download-box">
                <h5 class="title"><?= L::lb_downloadApp ?> !</h5>
                <div class="row g-2">
                    <div class="col">
                        <a href="#" class="d-block">
                            <img src="assets/images/icons/google-play.png" class="img-fluid" alt="Google Play">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="d-block">
                            <img src="assets/images/icons/app-store.png" class="img-fluid" alt="App Store">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-2 pe-2">
            <div class="div-center pb-2">Power By</div>
            <div>
                <img src="./assets/images/powerby.png" class="sidebar-img">

            </div>
        </div>
    </div>
</div>
