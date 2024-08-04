$(document).ready(function () {

});

//<editor-fold defaultstate="collapsed" desc="saveCoupon()">
function saveCoupon() {
    var jsonData = $("#form-action-coupon").serialize();
    $.ajax({
        type: 'POST',
        url: contextPath + cVersion + '/Coupon/Save',
        data: jsonData,
        dataType: 'json',
        cache: false,
        beforeSend: function () {

        },
        success: function (data) {
            if (isSuccess(data)) {
                runNingCredit('profile-balance', data.data.amount, 2);
                runNingCredit('header-balance-amount', data.data.amount, 2);
                runNingCredit('header-balance-point', data.data.point, 0);
                runNingCredit('balance-cashback', data.data.cashback, 2);
                runNingCredit('balance-affiliate', data.data.affiliate, 2);
            }
            notify(data);

        },
        error: function (data) {
            unblockPage();
        }
    });
}
//</editor-fold>
