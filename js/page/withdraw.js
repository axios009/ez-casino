$(document).ready(function () {

});

$("#bankWithdraw").on('shown.bs.modal', function () {

    $.ajax({
        type: 'GET',
        url: contextPath + cVersion + '/Member/Balance',
        dataType: 'json',
        cache: false,
        beforeSend: function () {
            $('#btn-refresh').addClass("fa-spin");
            $('#btn-refresh-cashback').addClass("fa-spin");
            $('#btn-refresh-affiliate').addClass("fa-spin");
        },
        success: function (data) {
            if (isSuccess(data)) {
                runNingCredit('profile-balance', data.data.amount, 2);
                runNingCredit('PreCreditWD', data.data.amount, 2);
                runNingCredit('header-balance-amount', data.data.amount, 2);
                runNingCredit('header-balance-point', data.data.point, 0);
                runNingCredit('balance-cashback', data.data.cashback, 2);
                runNingCredit('balance-affiliate', data.data.affiliate, 2);


            }
//            unblockPage();
        },
        error: function (data) {
            unblockPage();
        }
    });
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

//<editor-fold defaultstate="collapsed" desc="setCreditWD()">
function setCreditWD(credit) {
    $('#creditWD').val(number_format(credit, 2));
}
//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="createWithdraw()">
function CreateTransaction() {

    var credit = $('#creditWD').val();
    $.ajax({
        type: 'POST',
        url: contextPath + cVersion + '/Withdraw/CreateTransaction',
        data: {credit: credit},
        dataType: 'json',
        beforeSend: function () {
//            blockPage();
        },
        success: function (data) {
            if (isSuccess(data)) {
                $('#creditWD').val(number_format(0, 2));
                $('#withdraw').modal('hide');
            }
            notify(data);

        },
        error: function (data) {
//            unblockPage();
        }
    }
    );
}
//</editor-fold>

function CheckTxWithdraw() {

    $.ajax({
        type: 'GET',
        url: contextPath + cVersion + '/Withdraw/Check/WaitApprove',
        dataType: 'json',
        cache: false,
        beforeSend: function () {

        },
        success: function (data) {
            var res = data;

            if (isSuccess(data)) {
                var res = data.data;
                if (res.s_withdraw_all == 'Y') {
                    $('#group-btn-wd-credit').addClass('d-none');
                    $("#creditWD").prop("readonly", true);
                } else {
                    $('#group-btn-wd-credit').removeClass('d-none');
                    $("#creditWD").prop("readonly", false);
                }
                $('#creditWD').val(number_format(res.amount, 2));
                $('#bankWithdraw').modal('hide');
                $('#withdraw').modal('show');
            } else {
                notify(data);
            }
        },
        error: function (data) {
            unblockPage();
        }
    });
}


function refreshBalance() {
    $.ajax({
        type: "GET",
        url: contextPath + cVersion + "/Member/Balance",
        dataType: "json",
        cache: false,
        beforeSend: function () {
            //            blockPage();
        },
        success: function (data) {
            if (isSuccess(data)) {
                runNingCredit("balance-amount-header", data.data.amount, 2);
                runNingCredit("balance-amount-left", data.data.amount, 2);
                $('#balanceWD').val(data.data.amount);
            }
            //            unblockPage();
        },
        error: function (data) {
            unblockPage();
        },
    });
}