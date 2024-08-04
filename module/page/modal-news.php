
<style>

    .modal-pro {
        background-image: url('data:image/png;base64,<?= $_SESSION['PROFILE']->info->news->s_source_img ?>');
        background-repeat: no-repeat;
        background-size: 100% auto;

    }

</style>

<div class="modal modal-popup modal-news fade" id="modalNews" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="bagModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered orange-light-bulb layout-modal">
        <div class="modal-content modal-pro border-col">
            <div class="modal-header">
                <div class="position-relative w-100 inner text-end">
                    <button type="button" class="clo-pro btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
            </div>

        </div>
        <div class="modal-footer text-center text-white fs-07rem">
            <p class="text-white"><?= $_SESSION['PROFILE']->info->news->s_news_detail ?></p>

            <a href="<?= $_SESSION["PROFILE"]->info->configLobby->s_line ?>" target="_blank" class="btn-line flexCenter justify-content-center text-decoration-none"
               style="width: 65%; margin: auto; margin-bottom: 16px">
                <?= L::remark_helpDp ?>
            </a>
        </div>
    </div>
</div>