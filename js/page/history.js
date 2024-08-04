$(document).ready(function () {

});

function InquiryHistory() {

    $.ajax({
        type: 'GET',
        url: contextPath + cVersion + '/Member/History/Finance',
        dataType: 'json',
        cache: false,
        beforeSend: function () {
//            blockPage();
        },
        success: function (data) {
            if (isSuccess(data)) {
                var res = data.data;

                $('#history-deposit').html(htmlHistory(res.deposit, 'D'));
                $('#history-withdraw').html(htmlHistory(res.withdraw, 'W'));
                $('#history-bonus').html(htmlHistory(res.bonus, 'prm'));

            }
//            unblockPage();
        },
        error: function (data) {
            unblockPage();
        }
    });
}
//</editor-fold>

function selectHistory(elm) {
    $('.history-tx').addClass('d-none');
    $('.history-tab-item').removeClass('active');
    $('#history-' + elm).removeClass('d-none');
    $('#tab-' + elm).addClass('active');
}
function htmlHistory(data, type) {

    var html = '';
    if (data.length > 0) {
        $.each(data, function (k, v) {
            html += '<div class="history-list">';

            html += '<div class="history-list-left">';
            if (type == 'D') {
                html += '<label class="history-list-label">' + L.lb.txDeposit + '</label>';
                html += '<p class="history-list-label">' + v.f_amount + '</p>';
            } else if (type == 'W') {
                html += '<label class="history-list-label">' + L.lb.txWithdraw + '</label>';
                html += '<p class="history-list-label">' + v.f_amount + '</p>';
            } else {
                html += '<label class="history-list-label">' + L.lb.prm + '</label>';
                html += '<p class="history-list-label">' + v.f_amount_promotion + '</p>';
            }



            if (type == 'D') {
                html += '<p class="history-list-label">' + L.lb.remark + ' : ' + (v.s_flg_prm == 'Y' ? L.lb.getBonus : L.lb.dontAcceptBonus) + '</p>';
            } else if (type == 'W') {
                html += '<p class="history-list-label">' + L.lb.remark + ' : - </p>';
            } else {
                html += '<p class="history-list-label">' + v.s_remark + ' </p>';
            }



            html += '</div>';
            html += '<div class="history-list-right">';
            if (type == 'D' || type == 'W') {
                html += statusDP(v.s_status);
            } else {
                html += statusPrm(v.s_status)
            }
            html += '<div>' + v.d_datetime + '</div>';
            html += '</div>';

            html += '</div>';
        });
    } else {
        html += '<div class="history-list justify-content-center">' + L.lb.noData + '</div>';
    }
    return html;
}

function statusDP(status) {
    var html = '';
    if (status == 'Y') {
        html += '<span class="history-status tx-success">';
        html += L.status.complated + '</span>';
    } else if (status == 'N') {
        html += '<span class="history-status tx-pendding">';
        html += L.status.pending + '</span>';
    } else if (status == 'C') {
        html += '<span class="history-status tx-danger">';
        html += L.status.cancel + '</span>';
    }
    return html;
}

function statusPrm(status) {
    var html = '';
    if (status == 'S') {
        html += '<span class="d-inline-block fw-semibold px-2 py-1 rounded tx-success">';
        html += L.status.complated + '</span>';
    } else if (status == 'W') {
        html += '<span class="d-inline-block fw-semibold px-2 py-1 rounded tx-pendding">';
        html += L.status.pending + '</span>';
    } else if (status == 'A') {
        html += '<span class="d-inline-block fw-semibold px-2 py-1 rounded tx-active">';
        html += L.status.active + '</span>';
    } else if (status == 'R') {
        html += '<span class="d-inline-block fw-semibold px-2 py-1 rounded tx-danger">';
        html += L.status.cancel + '</span>';
    } else if (status == 'C') {
        html += '<span class="d-inline-block fw-semibold px-2 py-1 rounded tx-danger">';
        html += L.status.cancel + '</span>';
    } else {
        html += '';
    }
    return html;
}
