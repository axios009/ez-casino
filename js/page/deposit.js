$(document).ready(function () {

});

//<editor-fold defaultstate="collapsed" desc="xxx()">
function xxx() {

    $.ajax({
        type: 'GET',
        url: contextPath + cVersion + '/xxx/xxx',
        dataType: 'json',
        cache: false,
        beforeSend: function () {
//            blockPage();
        },
        success: function (data) {
            if (isSuccess(data)) {

            }
//            unblockPage();
        },
        error: function (data) {
            unblockPage();
        }
    });
}
//</editor-fold>

function verifyDeposit() {

    $.ajax({
        type: 'GET',
        url: contextPath + cVersion + '/Deposit/Check/WaitApprove',
        dataType: 'json',
        cache: false,
        beforeSend: function () {
            blockPage();
        },
        success: function (data) {
            if (isSuccess(data)) {
                DepositForm2Fill();
            } else {
                notify(data);
            }
            unblockPage();
        },
        error: function (data) {
            unblockPage();
        }
    });
}

function DepositForm2Fill() {
    var jsonData = $("#form-action-amount-deposit").serialize();
    $.ajax({
        type: 'POST',
        url: contextPath + cVersion + '/Deposit/Form2Fill',
        data: jsonData,
        dataType: 'json',
        cache: false,
        beforeSend: function () {
            blockPage();
        },
        success: function (data) {
            if (isSuccess(data)) {
                $('#amountDeposit').val('');
            }
            notify(data);

            unblockPage();
        },
        error: function (data) {
            unblockPage();
        }
    });
}

function CheckTxDeposit() {
    $('#depositWithdraw').modal('hide');

    $.ajax({
        type: 'GET',
        url: contextPath + cVersion + '/Deposit/Check/WaitApprove',
        dataType: 'json',
        cache: false,
        beforeSend: function () {

        },
        success: function (data) {
            var res = data;

            if (isSuccess(data)) {
                $('.select-promotion-list').removeClass('d-none');
                $('#btn-deposit-amt').removeAttr('disabled');
                $('#btn-deposit-amt').html(L.btn.notifyDpAmount);
            } else {
                $('#btn-deposit-amt').attr('disabled', 'disabled');
                $('#btn-deposit-amt').html(res.statusDesc);
            }
            InquiryDepositType();

        },
        error: function (data) {
            unblockPage();
        }
    });

}

function InquiryDepositType() {
    $.ajax({
        type: 'GET',
        url: contextPath + cVersion + '/Deposit/Inquiry/type',
        dataType: 'json',
        cache: false,
        beforeSend: function () {
            blockPage();
        },
        success: function (data) {
            if (isSuccess(data)) {
                var res = data.data;
                htmlPormotionAT(res);
                if (res.type == 'A') {
                    $('.btn-dp').addClass('d-none');
                    $('.btn-dp-auto').removeClass('d-none');
                    $('#amountDeposit').addClass('d-none');
                    $('#btn-deposit-amt').addClass('d-none');
                    $('#autoDeposit').modal('show');
                } else {
                    $('.btn-dp').removeClass('d-none');
                    $('.btn-dp-auto').addClass('d-none');
                    $('#amountDeposit').removeClass('d-none');
                    $('#btn-deposit-amt').removeClass('d-none');
                    $('#autoDeposit').modal('show');
                }

            }


        },
        error: function (data) {

        }
    });

}

function htmlPormotionAT(data) {
   
    if (data != '') {
        var html = '';
        if (data.current != null) {
            $.each(data.promotionList, function (k, v) {
                if (v.key == data.current.s_prm_code) {
                    document.getElementById('prmText_AT').textContent = v.value;
                    document.getElementById('prmCode_AT').value = v.key;
                }
            });
        }
        html += '<li>';
        html += '<a class="dropdown-item px-2 d-flex cursor-pointer align-items-center gap-2" ';
        html += 'onclick="changeDropdownPrmAT(\'-1\',\'' + L.lb.dontPrm + '\')">';
        html += L.lb.dontPrm;
        html += '</a>';
        html += '</li>';

        $.each(data.promotionList, function (k, v) {
            html += '<li>';
            html += '<a class="dropdown-item px-2 d-flex cursor-pointer align-items-center gap-2" ';
            html += 'onclick="changeDropdownPrmAT(\'' + v.key + '\',\'' + v.value + '\')">';
            html += v.value;
            html += '</a>';
            html += '</li>';
        });
        $('#promotion-list-at').html(html);
    }
}
$("#funcDeposit").on('shown.bs.modal', function () {
    $('.select-promotion-list').removeClass("show");
});
function changeDropdownPrmAT(key, text) {
    toggleDDLmenu('.select-promotion-list');
    $.ajax({
        type: 'POST',
        url: contextPath + cVersion + '/Deposit/Promotion/Select',
        data: {key: key, s_type: 'AUTO'},
        dataType: 'json',
        cache: false,
        beforeSend: function () {
            blockPage();
        },
        success: function (data) {
            if (isSuccess(data)) {
                document.getElementById('prmText_AT').textContent = text;
                document.getElementById('prmId_AT').value = key;
            }
            notify(data);

        },
        error: function (data) {

        }
    });
}


function changeBankDeposit(Id, bankNo, bankNoFormat, accName, color, img, BankName) {
    $('#i_bank_agent').val(Id);
    $('.ddl-btn-deposit').css('background', color);
    $('#bank-deposit-img').attr("src", "./assets/images/bankName/" + img);
    $('#bank-deposit-name').html(BankName);
    $('#s_account_no').val(bankNo);
    $('#bankAccount').val(bankNoFormat);
    $('#bank-deposit-acc-name').html(accName);
}

function changeBankDepositSlip(Id, bankNo, bankNoFormat, accName, color, img, BankName) {
    $('#i_bank_agent_slip').val(Id);
    $('.ddl-btn-deposit-slip').css('background', color);
    $('#bank-deposit-img-slip').attr("src", "./assets/images/bankName/" + img);
    $('#bank-deposit-name-slip').html(BankName);
    $('#s_account_no_slip').val(bankNo);
    $('#bankAccountSlip').val(bankNoFormat);
    $('#bank-deposit-acc-name-slip').html(accName);
}

function changeBankWD(Id, bankNo, bankNoFormat, accName, color, img, BankName) {
    $('#i_bank').html(Id);
    $('.ddl-btn-wd').css('background', color);
    $('#bank-wd-img').attr("src", "./assets/images/bankName/" + img);
    $('#bank-wd-name').html(BankName);
    $('#dw_account_no').val(bankNo);
    $('#bankAccountWD').val(bankNoFormat);
    $('#bank-wd-acc-name').html(accName);
}
function changeTw(Id, bankNo, bankNoFormat, accName, color, img, BankName) {
    $('#i_bank_agent_tw').html(Id);
    $('.ddl-btn-deposit-tw').css('background', color);
    $('#bank-deposit-img-tw').attr("src", "./assets/images/bankName/" + img);
    $('#bank-deposit-name-ts').html(BankName);
    $('#s_account_no-ts').val(bankNo);
    $('#bankAccountTw').val(bankNoFormat);
    $('#bank-deposit-acc-name-tw').html(accName);
}

function callmodalDeposit() {
    $('.elm-deposit').addClass('d-none');
    $.ajax({
        type: 'GET',
        url: contextPath + cVersion + '/Deposit/Inquiry/type',
        dataType: 'json',
        cache: false,
        beforeSend: function () {
            blockPage();
        },
        success: function (data) {
            if (isSuccess(data)) {
                var res = data.data;
                htmlPormotionAT(res);
                if (res.type == 'A' || res.type == 'S') {
                    $('#d-auto').removeClass('d-none');
                } else if (res.type == 'U') {
                    $('#d-slip').removeClass('d-none');
                    $('#btn-slip').removeClass('d-none');
                }
                $('#depositWithdraw').modal('show');
            }


        },
        error: function (data) {

        }
    });

}
async function uploadFile() {
//    blockui();
    const fileInput = document.getElementById('fileslip');
    const file = fileInput.files[0];
    const _URL = window.URL || window.webkitURL;
    var img;
    const slip = await uploadSlip(_URL.createObjectURL(file));
}

async  function uploadSlip(url) {
    let imgData = null;
    const minScale = 0.75;
    const maxScale = 5;
    const step = 0.25;
    let currentScale = minScale;

    do {
        imgData = await addImageProcess(url, currentScale);

        currentScale += step;
    } while (imgData === null && currentScale <= maxScale);
    document.getElementById('fileslip').value = '';
    if (imgData != null) {

        $.ajax({
            type: 'POST',
            url: contextPath + cVersion + '/Deposit/UploadSlip',
            data: {'qr': imgData.data, 'i_bank_agent': $('#i_bank_agent').val(), 's_prm_code': $('#prmCode_AT').val()},
            dataType: 'json',
            cache: false,
            beforeSend: function () {
                 blockui();
            },
            success: function (data) {

                if (isSuccess(data)) {
                    notify(data);
//                    alertNotify('success', data.statusDesc);
                    unblockui();
                } else {
                    notify(data);
//                    alertNotify('fail', data.statusDesc);
                    unblockui();
                }
            },
            error: function (data) {


            }

        });
    } else {

        notify(data);
    }

}

async  function addImageProcess(src, scale) {
    return new Promise((resolve, reject) => {
        let img = new Image();
        img.onload = function () {
            const canvas = document.createElement("canvas");
            canvas.width = Math.floor(img.width * scale);
            canvas.height = Math.floor(img.height * scale);

            const ctx = canvas.getContext("2d");
            ctx.fillStyle = "white";
            ctx.fillRect(0, 0, canvas.width, canvas.height);

            ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
            // add grayscale
            let imgData = ctx.getImageData(0, 0, ctx.canvas.width, ctx.canvas.height);
            let pixels = imgData.data;
            for (var i = 0; i < pixels.length; i += 4) {

                let lightness = parseInt((pixels[i] + pixels[i + 1] + pixels[i + 2]) / 3);

                pixels[i] = lightness;
                pixels[i + 1] = lightness;
                pixels[i + 2] = lightness;
            }
            ctx.putImageData(imgData, 0, 0);
            // add grayscale
            let imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
            const code = jsQR(imageData.data, canvas.width, canvas.height);
            resolve(code);
        }
        img.onerror = reject;
        img.src = src;
    });
}