var gameBtnSel = "";
const hamburgerElement = document.querySelector(".hamburger");
//const hamburgerElementMobile = document.querySelector(".hamburgerMobile");
const turnBack = document.querySelector(".icon-turn-back");

$(document).ready(function () {
    initFlatpickr();
    number2digit();
//    setInterval(RatePercen, 30000);
//    setInterval(clearTurnover, 60000);
//    setInterval(notification, 60000);
//    setInterval(updateInfo, 60000);
    if (NEWSMODAL) {
        $('#modalNews').modal('show');
    }
});

function selectGameBar(elmGame) {
    $('.btn-game-bar-desktop').removeClass('active');
    $('#bargame-desktop-' + elmGame).addClass('active');
    $('.container-game-desktop').addClass('d-none');
    $('.container-game').addClass('d-none');
    $('.desktop-game-' + elmGame).removeClass('d-none');

    $('.all-mobile-games').addClass('d-none');
    $('.mobile-game-' + elmGame).removeClass('d-none');
//    $('#game-' + elmGame).removeClass('d-none');
}

function openSideMenu() {
    const sideBarElement = document.querySelector(".sidebar-container");
    sideBarElement.setAttribute("style", "display: flex;");

    const sideBar = document.querySelector(".sidebar");
    sideBar.setAttribute("style", "animation: slideInFromLeft 0.5s ease-in-out;");
    const sideBarBgElement = document.querySelector(".sidebar-container-background");

    sideBarBgElement.addEventListener("click", () => {
        const sideBar = document.querySelector(".sidebar");
        sideBar.setAttribute("style", "animation: slideInToLeft 0.5s ease-in-out;");

        setTimeout(() => {
            const sideBarElement = document.querySelector(".sidebar-container");
            sideBarElement.setAttribute("style", "display: none;");
        }, 500);
    });

}
function closeSideMenu() {

    const sideBar = document.querySelector(".sidebar");
    sideBar.setAttribute("style", "animation: slideInToLeft 0.5s ease-in-out;");

    setTimeout(() => {
        const sideBarElement = document.querySelector(".sidebar-container");
        sideBarElement.setAttribute("style", "display: none;");
    }, 500);
}




//<editor-fold defaultstate="collapsed" desc="refreshBalance()">
function refreshBalance() {
    $.ajax({
        type: "GET",
        url: contextPath + cVersion + "/Member/Balance",
        dataType: "json",
        cache: false,
        beforeSend: function () {
            //            blockPage();
            $("#btn-refresh").addClass("fa-spin");
            $("#btn-refresh-cashback").addClass("fa-spin");
            $("#btn-refresh-affiliate").addClass("fa-spin");
        },
        success: function (data) {
            if (isSuccess(data)) {
                runNingCredit("PreCreditWD", data.data.amount, 2);
                runNingCredit("profile-balance", data.data.amount, 2);
                runNingCredit("header-balance-amount", data.data.amount, 2);
                runNingCredit("header-balance-point", data.data.point, 0);
                runNingCredit("balance-cashback", data.data.cashback, 2);
                runNingCredit("balance-affiliate", data.data.affiliate, 2);
                $("#affiliate-lastupdate").html(data.updatetime);
                $("#cashback-lastupdate").html(data.updatetime);
                $("#btn-refresh").removeClass("fa-spin");
                $("#btn-refresh-cashback").removeClass("fa-spin");
                $("#btn-refresh-affiliate").removeClass("fa-spin");
            }
            //            unblockPage();
        },
        error: function (data) {
            unblockPage();
        },
    });
}
//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="ClearTurnOver()">
function clearTurnover() {
    $.ajax({
        type: "GET",
        url: contextPath + cVersion + "/Member/ClearTurnOver",
        dataType: "json",
        cache: false,
        beforeSend: function () {},
        success: function (data) {
            if (isSuccess(data)) {
            }
        },
        error: function (data) {
            unblockPage();
        },
    });
}
//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="running credit">
function runNingCredit(elm, num, digit) {
    var oldNumber = parseFloat(
            $("#" + elm)
            .text()
            .replace(",", "")
            );
    var newNumber = parseFloat(num);
    coUp(elm, oldNumber, newNumber, digit);
}
//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="changePassword()">
function changePassword() {
    jsonData = $("#form-action-changePassword").serialize();
    $.ajax({
        type: "POST",
        url: contextPath + cVersion + "/Member/ChangePassword",
        data: jsonData,
        dataType: "json",
        cache: false,
        beforeSend: function () {
            blockPage();
        },
        success: function (data) {
            if (isSuccess(data)) {
                $("#profile-password").text(data.data);
                clear_changePassword();
                $("#changePassword").modal("hide");
            }
            notify(data);
            unblockPage();
        },
        error: function (data) {
            unblockPage();
        },
    });
}

function clear_changePassword() {
    $("#passwordOld").val("");
    $("#passwordNew").val("");
    $("#passwordConfirm").val("");
}
//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="Access Game & Select Game">
function accessGame(brandCode, gameCode) {
    $.ajax({
        type: "POST",
        url: contextPath + cVersion + "/AccessGame",
        data: {s_brand_code: brandCode, s_game_code: gameCode},
        dataType: "json",
        cache: false,
        beforeSend: function () {
            blockPage();
        },
        success: function (data) {
            if (isSuccess(data)) {
                var res = data.data;
                $("#id-click-game").attr("href", res);
                $("#id-click-game")[0].click();
            } else {
                notify(data);
            }
            unblockPage();
        },
        error: function (data) {
            unblockPage();
        },
    });
}

function selectorGame(gameBtn, type) {
    if (type == "FAVORITE") {
        $("#searchFavorite").val("");
        initialGameFavorite();
    }
    if (type == "HIT") {
        $("#search").val("");
    }
    gameBtnSel = gameBtn;
    $(".brand-elm").addClass("d-none");
    $(".btn-select-game").removeClass("active");
    $(gameBtn).addClass("active");
    $("#BRAND-" + type).removeClass("d-none");
}
//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="Search Game">
function initialGameFavorite() {
    classGame = "game-favorite";
    idElmGame = "#BRAND-FAVORITE";
    $("." + classGame).remove();
    $.ajax({
        type: "POST",
        url: contextPath + cVersion + "/SearchGameMainPage",
        data: {category: "FAVORITE"},
        dataType: "json",
        cache: false,
        beforeSend: function () {},
        success: function (data) {
            if (isSuccess(data)) {
                var res = data.data;
                if (res != null) {
                    var htmlGame = "";
                    $.each(res, function (k, v) {
                        htmlGame += htmlLobbyGameFavoriteList(v, classGame);
                    });
                    $("." + classGame).remove();
                    $(idElmGame)
                            .append(htmlGame)
                            .promise()
                            .done(function () {});
                } else {
                    var html = "";
                    html += '<div class="col m-auto text-center  ' + classGame + '">';
                    html += '<p class="text-white">' + L.lb.noData + "</p>";
                    html += "</div>";
                    $("." + classGame).remove();
                    $(idElmGame)
                            .append(htmlGame)
                            .promise()
                            .done(function () {});
                }
            }
        },
        error: function (data) {
            unblockPage();
        },
    });
}

function SearchGameMain(e, key, category) {
    var classGame = "";
    var idElmGame = "";
    if (category == "HOTHIT") {
        classGame = "game-hothit";
        idElmGame = "#BRAND-HIT";
    } else {
        classGame = "game-favorite";
        idElmGame = "#BRAND-FAVORITE";
    }

    if (e.key == "Enter" || key.length == 0) {
        $("." + classGame).remove();
        var search = key;
        $.ajax({
            type: "POST",
            url: contextPath + cVersion + "/SearchGameMainPage",
            data: {search: search, category: category},
            dataType: "json",
            cache: false,
            beforeSend: function () {
                //            blockPage();
            },
            success: function (data) {
                if (isSuccess(data)) {
                    var res = data.data;
                    if (res != null) {
                        var htmlGame = "";
                        $.each(res, function (k, v) {
                            if (category == "HOTHIT") {
                                htmlGame += htmlLobbyGameHitList(v, classGame);
                            } else {
                                htmlGame += htmlLobbyGameFavoriteList(v, classGame);
                            }
                        });
                        $("." + classGame).remove();
                        $(idElmGame)
                                .append(htmlGame)
                                .promise()
                                .done(function () {});
                    } else {
                        var html = "";
                        html += '<div class="col m-auto text-center  ' + classGame + '">';
                        html += '<p class="text-white">' + L.lb.noData + "</p>";
                        html += "</div>";
                        $("." + classGame).remove();
                        $(idElmGame).append(html);
                    }
                }
            },
            error: function (data) {
                unblockPage();
            },
        });
    }
}

function searchGame(e) {
    var search = $("#search").val();
    if (e.key == "Enter" || search.length == 0) {
        var brandCode = $("#s_brand_code").val();
        $.ajax({
            type: "POST",
            url: contextPath + cVersion + "/SearchGame",
            data: {brandCode: brandCode, search: search},
            dataType: "json",
            cache: false,
            beforeSend: function () {
                //            blockPage();
            },
            success: function (data) {
                if (isSuccess(data)) {
                    var res = data.data;
                    if (res != null) {
                        var htmlGame = "";
                        $.each(res, function (k, v) {
                            htmlGame += htmlLobbyGameHitList(v, "xx");
                        });
                        $("#game-elem").html(htmlGame);
                    } else {
                        var html = "";
                        html += '<div class="col m-auto">';
                        html += '<p class="text-white text-center">' + L.lb.noData + "</p>";
                        html += "</div>";
                        $("#game-elem").html(html);
                    }
                }
            },
            error: function (data) {
                unblockPage();
            },
        });
    }
}

function htmlLobbyGameFavoriteList(row, classElm) {
    var html = "";
    var Classcommon = classElm;
    var Classspecif = classElm + "-" + row.s_brand_code + row.s_game_code;
    html += '<div  class="col text-center ' + Classcommon + " " + Classspecif + ' ">';
    html += '<div class="container position-relative">';
    html += '<div class="bar-favorite">';
    html +=
            "<a href=\"javascript:favoriteSelect('" +
            row.s_brand_code +
            "','" +
            row.s_game_code +
            "','" +
            row.id_favorite +
            "');\" >";
    html += '<img src="./images/icon/favorite-active.png" ';
    html +=
            '   class="favorite-icon" id="fav_' + row.s_brand_code + "" + row.s_game_code + '" alt="' + row.s_game_name + '">';
    html += "</a>";
    html += "</div>";
    html += '<a href="AccessGamePage/' + row.s_brand_code + "/" + row.s_game_code + '" target="_blank" >';
    html += '<img   class="img-fluid  lazyload  ' + (row.s_status == "MA" ? game - ma : "") + '"';
    html += ' src="./images/misc/default-img-game.webp"';
    html += ' data-src="' + row.s_img + '"';
    html += ' data-src-small="' + row.s_img + '">';
    html += "</a>";
    html += '<div class="row justify-content-center">';
    html += '<div class="progress-bar-percen">';
    html += '<span id="percen_text_' + row.s_brand_code + "" + row.s_game_code + '" >' + row.f_percen + "%</span>";
    html += '<progress  id="percen_' + row.s_brand_code + "" + row.s_game_code + '" class="progress-percen-game" ';
    html += ' value="' + row.f_percen + '" max="100">';
    html += row.f_percen;
    html += "</progress>";
    html += "</div>";
    html += "</div>";
    html += "</div>";
    html += '<p class="text-center text-white">';
    html += row.s_game_name;
    html += "</p>";
    html += "</div>";
    return html;
}

function htmlLobbyGameHitList(row, classElm) {
    var html = "";
    html += '<div class="col ' + classElm + '">';
    html += '<div class="container position-relative">';
    html += '<div class="bar-favorite">';
    html +=
            "<a href=\"javascript:favoriteSelect('" +
            row.s_brand_code +
            "','" +
            row.s_game_code +
            "','" +
            row.id_favorite +
            "');\" >";
    html += '<img src="./images/icon/favorite' + (row.s_flg_favorite == "Y" ? "-active" : "") + '.png" ';
    html +=
            '   class="favorite-icon" id="fav_' + row.s_brand_code + "" + row.s_game_code + '" alt="' + row.s_game_name + '">';
    html += "</a>";
    html += "</div>";
    html += '<a href="AccessGamePage/' + row.s_brand_code + "/" + row.s_game_code + '" target="_blank" >';
    html += '<img   class="img-fluid  lazyload ' + (row.s_status == "MA" ? game - ma : "") + '"';
    html += ' src="./images/misc/default-img-game.webp"';
    html += ' data-src="' + row.s_img + '"';
    html += ' data-src-small="' + row.s_img + '">';
    html += "</a>";
    html += '<div class="row justify-content-center">';
    html += '<div class="progress-bar-percen">';
    html += '<span id="percen_text_' + row.s_brand_code + "" + row.s_game_code + '" >' + row.f_percen + "%</span>";
    html += '<progress  id="percen_' + row.s_brand_code + "" + row.s_game_code + '" class="progress-percen-game" ';
    html += ' value="' + row.f_percen + '" max="100">';
    html += row.f_percen;
    html += "</progress>";
    html += "</div>";
    html += "</div>";
    html += "</div>";
    html += '<p class="text-center text-white">';
    html += row.s_game_name;
    html += "</p>";
    html += "</div>";
    return html;
}
//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="Inquiry Rate percen">

function RatePercen() {
    InquiryRate();
    InquiryRateGameLobby();
}

function InquiryRate() {
    var search = $("#search").val();
    $.ajax({
        type: "POST",
        url: contextPath + cVersion + "/InquiryRate",
        data: {search: search},
        dataType: "json",
        cache: false,
        beforeSend: function () {
            //            blockPage();
        },
        success: function (data) {
            if (isSuccess(data)) {
                var res = data.data;
                if (res != null) {
                    $.each(res, function (k, v) {
                        $("[id^=percen_" + v.s_brand_code + "" + v.s_game_code + "]").val(v.f_percen);
                        $("[id^=percen_text_" + v.s_brand_code + "" + v.s_game_code + "]").html(v.f_percen + "%");
                    });
                }
            }
        },
        error: function (data) {
            unblockPage();
        },
    });
}

function InquiryRateGameLobby() {
    var search = $("#search").val();
    var brandCode = $("#s_brand_code").val();
    $.ajax({
        type: "POST",
        url: contextPath + cVersion + "/InquiryRateSlot",
        data: {brandCode: brandCode, search: search},
        dataType: "json",
        cache: false,
        beforeSend: function () {
            //            blockPage();
        },
        success: function (data) {
            if (isSuccess(data)) {
                var res = data.data;
                if (res != null) {
                    $.each(res, function (k, v) {
                        $("[id^=percen_" + v.s_brand_code + "" + v.s_game_code + "]").val(v.f_percen);
                        $("[id^=percen_text_" + v.s_brand_code + "" + v.s_game_code + "]").html(v.f_percen + "%");
                    });
                }
            }
        },
        error: function (data) {
            unblockPage();
        },
    });
}

//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="toggleDDLmenu">

function toggleDDLmenu(elm) {
    if ($(elm).hasClass("show")) {
        $(elm).removeClass("show");
    } else {
        $(elm).toggleClass("show");
    }
}
$(document).click(function (e) {
    var elmclick = e.target;
    if (elmclick.id != "ddl-tw" && elmclick.id != "ddl-dp" && elmclick.id != "ddl-wd") {
        if ($(".ddl-tw").hasClass("show")) {
            $(".ddl-tw").removeClass("show");
        }

        if ($(".ddl-dp").hasClass("show")) {
            $(".ddl-dp").removeClass("show");
        }

        if ($(".ddl-wd").hasClass("show")) {
            $(".ddl-wd").removeClass("show");
        }
    }
});
//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="Cash Back">

$("#receiveLossModal").on("hidden.bs.modal", function () {
    $("#cashbackHistory").addClass("d-none");
    $("#cashbackLVL").removeClass("d-none");
});
function CashbackMenu() {
    $("#cashbackHistory").addClass("d-none");
    $("#cashbackMember").removeClass("d-none");

}
function SaveCashBack() {
    $.ajax({
        type: "GET",
        url: contextPath + cVersion + "/Cashback/Receive",
        dataType: "json",
        cache: false,
        beforeSend: function () {},
        success: function (data) {
            if (isSuccess(data)) {
                runNingCredit("header-balance-amount", data.data.amount, 2);
                runNingCredit("header-balance-point", data.data.point, 0);
                runNingCredit("balance-cashback", data.data.cashback, 2);
                runNingCredit("balance-affiliate", data.data.affiliate, 2);
            }
            notify(data);
        },
        error: function (data) {
            unblockPage();
        },
    });
}
function CashbackHistory() {
    $("#cashbackMember").addClass("d-none");
    $("#cashbackHistory").removeClass("d-none");
    $.ajax({
        type: "GET",
        url: contextPath + cVersion + "/Cashback/History",
        dataType: "json",
        cache: false,
        beforeSend: function () {},
        success: function (data) {
            if (isSuccess(data)) {
                var res = data.data;
                $("#CashbackHistory").html(htmlHistoryCashback(res));
            }
        },
        error: function (data) {
            unblockPage();
        },
    });
}
function htmlHistoryCashback(data) {
    var html = "";

    if (typeof data != 'undefined') {
        $.each(data, function (k, v) {
            html += '<li class="list-group-item fs-8 text-white bg-transparent">';
            html += '<div class="list-data-history">';
            html += '<div class="col-6">';
            html += "<div>" + v.d_create + "</div>";
            html += "</div>";
            html += '<div class="col-6">';
            html += "<div>" + number_format(v.f_amount, 2) + "</div>";
            html += "</div>";
            html += "</div>";
            html += "</li>";
        });
    } else {
        html += '<li class="list-group-item fs-8 text-white bg-transparent text-center">' + L.lb.noData + "</li>";
    }
    return html;
}
//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="affiiateMenu">

$("#makeMoneyModal").on("hidden.bs.modal", function () {
    $("#makemoneyForm").removeClass("d-none");
    $("#affiliateCreditMenu").addClass("d-none");
    $("#affiliateHistory").addClass("d-none");
});
function AffiliateCreditMenu() {
    $("#makeMoneyModal").modal("hide");
    $("#makeMoney2Modal").modal("show");
    AffOverviewBydate();
    AffOverviewByYear();
    InquiryIncome();
}

function AffiliateMenu() {
    $("#affiliateCreditMenu").removeClass("d-none");
    $("#affiliateHistory").addClass("d-none");
}

function AffiliateToMakemoneyMenu() {
    if ($("#affiliateCreditMenu").hasClass("d-none")) {
        $("#makeMoneyModal").modal("hide");
        $("#bagModal").modal("show");
    } else {
        $("#affiliateCreditMenu").addClass("d-none");
        $("#makemoneyForm").removeClass("d-none");
    }
}

function AffiliateHistory() {
    $.ajax({
        type: "GET",
        url: contextPath + cVersion + "/Affiliate/History",
        dataType: "json",
        cache: false,
        beforeSend: function () {},
        success: function (data) {
            if (isSuccess(data)) {
                var res = data.data;
                $("#IncomeHistory").html(HtmlIncomeHistory(res));
            }
        },
        error: function (data) {
            unblockPage();
        },
    });
}

function SaveAffiliate() {
    $.ajax({
        type: "GET",
        url: contextPath + cVersion + "/Affiliate/Receive",
        dataType: "json",
        cache: false,
        beforeSend: function () {},
        success: function (data) {
            if (isSuccess(data)) {
                runNingCredit("header-balance-amount", data.data.amount, 2);
                runNingCredit("header-balance-point", data.data.point, 0);
                runNingCredit("balance-cashback", data.data.cashback, 2);
                runNingCredit("balance-affiliate", data.data.affiliate, 2);
            }
            notify(data);
        },
        error: function (data) {
            unblockPage();
        },
    });
}

function HtmlIncomeHistory(data) {
    var html = "";
    if (data && data.length > 0) {
        $.each(data, function (k, v) {
            html += '<div class="row g-1  justify-content-between text-white ">';
            html += '<div class="col-6 text-start ps-3">' + v.d_create + "</div>";
            html += '<div class="col-6 text-end pe-3">' + number_format(v.f_amount, 2) + "</div>";
            html += "</div>";
        });
    } else {
        html += '<div class="row g-1  justify-content-between">';
        html += '<div class="col-12 text-center text-white ps-3">' + L.lb.noData + "</div>";
        html += "</div>";
    }
    return html;
}

function AffOverviewBydate() {
    var OverviewDate = $("#dateOverview").val();
    var Page = 0;
    $.ajax({
        type: "POST",
        url: contextPath + cVersion + "/Affiliate/Inquiry/Register",
        data: {d_date: OverviewDate, page_start: Page},
        dataType: "json",
        cache: false,
        beforeSend: function () {
            $("#dateOverviewList").html(ListLoading("dateOverviewLoading"));
        },
        success: function (data) {
            if (isSuccess(data)) {
                if (data.data.list && data.data.list.length > 0) {
                    var res = data.data.list;
                    var html = "";
                    $.each(res, function (k, v) {
                        html += '<div class="overflow-hidden bg-white border-radius-5 p-2 mb-2">';
                        html += '<div class="row g-1 col-overview">';
                        html += '<div class="col-3 text-start ps-3">' + formatDate(v.d_create, "TH") + "</div>";
                        html += '<div class="col-3 text-center">' + v.regisCount + "</div>";
                        html += '<div class="col-3 text-end">' + number_format(v.deposit, 2) + "</div>";
                        html += '<div class="col-3 text-end pe-3">' + v.f_affiliate_credit + "</div>";
                        html += "</div>";
                        html += "</div>";
                    });
                } else {
                    html += '<div class="overflow-hidden bg-white border-radius-5 p-2 mb-2">';
                    html += '<div class="row g-1">';
                    html += '<div class="col-12 text-center ">' + L.lb.noData + "</div>";
                    html += "</div>";
                    html += "</div>";
                }
                $("#dateOverviewList").html(html);
                $("#dateOverviewPage").val(data.data.nextPage);
            }
        },
        error: function (data) {},
    });
}

function AffOverviewByYear() {
    var OverviewYear = $("#yearOverview").val();
    var Page = 0;
    $.ajax({
        type: "POST",
        url: contextPath + cVersion + "/Affiliate/Inquiry/RegisterByYear",
        data: {d_year: OverviewYear, page_start: Page},
        dataType: "json",
        cache: false,
        beforeSend: function () {
            $("#yearOverviewList").html(ListLoading("yearOverviewLoading"));
        },
        success: function (data) {
            if (isSuccess(data)) {
                if (data.data.list.length > 0) {
                    var res = data.data.list;
                    var html = "";
                    $.each(res, function (k, v) {
                        html += '<div class="overflow-hidden bg-white border-radius-5 p-2 mb-2">';
                        html += '<div class="row g-1">';
                        html += '<div class="col-3 text-start ps-3">' + v.month + "</div>";
                        html += '<div class="col-3 text-center">' + v.regisCount + "</div>";
                        html += '<div class="col-3 text-end">' + number_format(v.deposit, 2) + "</div>";
                        html += '<div class="col-3 text-end pe-3">' + number_format(v.f_affiliate_credit, 2) + "</div>";
                        html += "</div>";
                        html += "</div>";
                    });
                } else {
                    html += '<div class="overflow-hidden bg-white border-radius-5 p-2 mb-2">';
                    html += '<div class="row g-1">';
                    html += '<div class="col-12 text-center ">' + L.lb.noData + "</div>";
                    html += "</div>";
                    html += "</div>";
                }
                $("#yearOverviewList").html(html);
                $("#yearOverviewPage").val(data.data.nextPage);
            }
        },
        error: function (data) {
            $("#yearOverviewLoading").remove();
        },
    });
}

function InquiryIncome() {
    var d_start = $("#dStartView").val();
    var d_end = $("#dEndView").val();
    var Page = 0;
    $.ajax({
        type: "POST",
        url: contextPath + cVersion + "/Affiliate/Inquiry/Income",
        data: {d_start: d_start, d_end: d_end, page_start: Page},
        dataType: "json",
        cache: false,
        beforeSend: function () {
            $("#incomeList").html(ListLoading("incomeListLoading"));
        },
        success: function (data) {
            if (isSuccess(data)) {
                if (typeof data.data.list != 'undefined') {
                    var res = data.data.list;
                    var html = "";
                    $.each(res, function (k, v) {
                        html += '<div class="overflow-hidden bg-white border-radius-5 p-2 mb-2">';
                        html += '<div class="row g-1">';
                        html += '<div class="col-6 text-center ps-3">' + formatDateYM(v.d_date, "TH") + "</div>";
                        html += '<div class="col-6 text-center pe-3">' + v.f_affiliate + "</div>";
                        html += "</div>";
                        html += "</div>";
                    });
                } else {
                    html += '<div class="overflow-hidden bg-white border-radius-5 p-2 mb-2">';
                    html += '<div class="row g-1">';
                    html += '<div class="col-12 text-center ">' + L.lb.noData + "</div>";
                    html += "</div>";
                    html += "</div>";
                }
                $("#incomeList").html(html);
                $("#incomeListPage").val(data.data.nextPage);
            }
        },
        error: function (data) {
            $("#incomeListLoading").remove();
        },
    });
}

$("#dateOverviewList").on("scroll", function () {
    let div = $(this).get(0);
    if (
            div.scrollTop + div.clientHeight >= div.scrollHeight &&
            $("#dateOverviewList").find("#dateOverviewLoading").length <= 0
            ) {
        var OverviewDate = $("#dateOverview").val();
        var Page = $("#dateOverviewPage").val();
        $.ajax({
            type: "POST",
            url: contextPath + cVersion + "/Affiliate/Inquiry/Register",
            data: {d_date: OverviewDate, page_start: Page},
            dataType: "json",
            cache: false,
            beforeSend: function () {
                $("#dateOverviewList").append(ListLoading("dateOverviewLoading"));
            },
            success: function (data) {
                if (isSuccess(data)) {
                    if (data.data.list && data.data.list.length > 0) {
                        var res = data.data.list;
                        var html = "";
                        $.each(res, function (k, v) {
                            html += '<div class="overflow-hidden bg-white border-radius-5 p-2 mb-2">';
                            html += '<div class="row g-1">';
                            html += '<div class="col-3 text-start ps-3">' + formatDate(v.d_create, "TH") + "</div>";
                            html += '<div class="col-3 text-center">' + v.regisCount + "</div>";
                            html += '<div class="col-3 text-end">' + v.deposit + "</div>";
                            html += '<div class="col-3 text-end pe-3">' + v.f_affiliate_credit + "</div>";
                            html += "</div>";
                            html += "</div>";
                        });
                        $("#dateOverviewList").append(html);
                        $("#dateOverviewPage").val(data.data.nextPage);
                    }
                    $("#dateOverviewLoading").remove();
                    $("#dateOverviewList").scrollTop($("#dateOverviewList").scrollTop() - 90);
                }
            },
            error: function (data) {
                $("#dateOverviewLoading").remove();
            },
        });
    }
});
//$('#yearOverviewList').on('scroll', function () {
//    let div = $(this).get(0);
//    if (div.scrollTop + div.clientHeight >= div.scrollHeight && $('#yearOverviewList').find('#yearOverviewLoading').length <= 0) {
//
//        var OverviewDate = $('#yearOverview').val();
//        var Page = $('#yearOverviewPage').val();
//        $.ajax({
//            type: 'POST',
//            url: contextPath + cVersion + '/Affiliate/Inquiry/RegisterByYear',
//            data: {d_date: OverviewDate, page_start: Page},
//            dataType: 'json',
//            cache: false,
//            beforeSend: function () {
//                $('#yearOverviewList').append(ListLoading('yearOverviewLoading'));
//            },
//            success: function (data) {
//                if (isSuccess(data)) {
//                    $('#yearOverviewLoading').remove();
//                    if (data.data.list && data.data.list.length > 0) {
//                        var res = data.data.list;
//                        var html = '';
//                        $.each(res, function (k, v) {
//                            html += '<div class="overflow-hidden bg-white border-radius-5 p-2 mb-2">';
//                            html += '<div class="row g-1">';
//                            html += '<div class="col-3 text-start ps-3">' + formatDate(v.d_create, 'TH') + '</div>';
//                            html += '<div class="col-3 text-center">' + v.regisCount + '</div>';
//                            html += '<div class="col-3 text-end">' + v.deposit + '</div>';
//                            html += '<div class="col-3 text-end pe-3">' + v.f_affiliate_credit + '</div>';
//                            html += '</div>';
//                            html += '</div>';
//                        });
//                        $('#yearOverviewList').append(html);
//                        $('#yearOverviewPage').val(data.data.nextPage);
//                    }
//
//                }
//            },
//            error: function (data) {
//                $('#yearOverviewLoading').remove();
//            }
//        });
//    }
//});

$("#incomeList").on("scroll", function () {
    let div = $(this).get(0);
    if (div.scrollTop + div.clientHeight >= div.scrollHeight && $("#incomeList").find("#incomeListLoading").length <= 0) {
        var d_start = $("#dStartView").val();
        var d_end = $("#dEndView").val();
        var Page = $("#incomeListPage").val();
        $.ajax({
            type: "POST",
            url: contextPath + cVersion + "/Affiliate/Inquiry/Income",
            data: {d_start: d_start, d_end: d_end, page_start: Page},
            dataType: "json",
            cache: false,
            beforeSend: function () {
                $("#incomeList").append(ListLoading("incomeListLoading"));
            },
            success: function (data) {
                if (isSuccess(data)) {
                    $("#incomeListLoading").remove();
                    if (data.data.list && data.data.list.length > 0) {
                        var res = data.data.list;
                        var html = "";
                        $.each(res, function (k, v) {
                            html += '<div class="overflow-hidden bg-white border-radius-5 p-2 mb-2">';
                            html += '<div class="row g-1">';
                            html += '<div class="col-6 text-center ps-3">' + v.month + "</div>";
                            html += '<div class="col-6 text-center pe-3">' + number_format(v.f_affiliate_credit, 2) + "</div>";
                            html += "</div>";
                            html += "</div>";
                        });
                    } else {
                        html += '<div class="overflow-hidden bg-white border-radius-5 p-2 mb-2">';
                        html += '<div class="row g-1">';
                        html += '<div class="col-12 text-center ">' + L.lb.noData + "</div>";
                        html += "</div>";
                        html += "</div>";
                    }
                    //                    $('#yearOverviewList').append(html);
                    $("#yearOverviewPage").val(data.data.nextPage);
                }
            },
            error: function (data) {
                $("#incomeListLoading").remove();
            },
        });
    }
});
//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="Profile">
function changeMainBankDP(key) {
    $.ajax({
        type: "POST",
        url: contextPath + cVersion + "/Member/Bank/Default",
        data: {key: key},
        dataType: "json",
        cache: false,
        beforeSend: function () {},
        success: function (data) {
            if (isSuccess(data)) {
                var res = data.data;
                var html = "";
                $.each(res, function (k, v) {
                    html += '<div class="p-2 rounded-3 mb-2" style="background-color: ' + bankData[v.i_bank].bgColor + '">';
                    html += '<div class="row g-2 align-items-center">';
                    html += '<div class="col-3 text-center">';
                    html +=
                            '<img src="./assets/images/bankName/' +
                            bankData[v.i_bank].image +
                            '" class="img-bank" width="48" height="48" alt="kbank">';
                    html += "</div>";
                    html += '<div class="col-7 fw-semibold d-inline">';
                    html += '<span class="lh-1 mb-0">';
                    html += bankData[v.i_bank].name;
                    if (v.s_default == "Y") {
                        html += '<span class="d-inline-block border-radius-pill px-2 my-1 badge-custom"';
                        html +=
                                'style="background: #FA00FF;padding-bottom: 2px; border: 1px solid #01FAFF">' + L.lb.mainAcc + "</span>";
                    }
                    html += "</span><br>";
                    html += '<span class=" mb-0 normal-text text-white ">' + formatBankAcc(v.s_account_no) + "</span><br>";
                    html += '<span class=" mb-0 text-decoration-none">' + v.s_account_name + "</span>";
                    html += "</div>";
                    html += '<div class="col-2 ">';
                    if (k != 0) {
                        html += '<div class="dropdown">';
                        html += '<button id="dropdownButton"';
                        html += 'class="btn text-white d-flex align-items-center text-start text-black w-100"';
                        html += ' type="button" data-bs-toggle="dropdown" aria-expanded="false">';
                        html += '<div class="d-flex flex-column w-100">';
                        html += '<div class="flex flex-row justify-content-start">';
                        html += '<img id="dropdownIcon2" src="images/icon/three-dots.png" class="me-1" width="20" height="20"';
                        html += '  alt="Bank">';
                        html += "</div>";
                        html += "</div>";
                        html += "</button>";
                        html += '<ul class="dropdown-menu w-100">';
                        html += "<li>";
                        html += '<a class="dropdown-item px-2 d-flex align-items-center gap-2" ';
                        html += "onclick=\"changeMainBankDP('" + v.id + "')\">";
                        html += L.lb.cMainBankDp;
                        html += "</a>";
                        html += "</li>";
                        html += "</ul>";
                        html += "</div>";
                    }
                    html += "</div>";
                    html += "</div>";
                    html += "</div>";
                });
                $("#bank-deposit-list").html(html);
            }
            notify(data);
        },
        error: function (data) {},
    });
}
//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="affiiateMemberMenu">

function AffiliateMemberMenu() {
    $("#affiliateMember").modal("show");
}
function ListLoading(id) {
    var html = "";
    html += '<div class="row g-3" id="' + id + '">';
    html += '<div class="col-12 text-center">';
    html += '<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>';
    html += "</div>";
    html += "</div>";
    return html;
}

function AffliateHtmlLoadmore() {
    //    <li class="list-group-item fs-8 text-white bg-transparent">
    var html = "";
    for (let i = 0; i < 10; i++) {
        html += ' <li class="list-group-item fs-8 text-white bg-transparent">';
        html += '<div class="row g-3">';
        html += '<div class="col-6">';
        html += "<div>xxxxxx" + i + "</div>";
        html += "</div>";
        html += '<div class="col-6 d-flex flex-column align-items-end justify-content-between">';
        html += "<div>2023-09-25</div>";
        html += "</div>";
        html += "</div>";
        html += "</li>";
    }
    return html;
}

//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="Select FavGame">
function favoriteSelect(brandCode, gameCode, id_favorite) {
    $.ajax({
        type: "POST",
        url: contextPath + cVersion + "/Favorite/Select",
        data: {id_favorite: id_favorite},
        dataType: "json",
        cache: false,
        beforeSend: function () {},
        success: function (data) {
            if (isSuccess(data)) {
                var res = data.data;
                if (res.action === "add favorite") {
                    //                    $('#fav_' + brandCode + gameCode).attr("src", "./images/icon/favorite-active.png");
                    $('img[id^="fav_' + brandCode + gameCode + '"]').attr("src", "./images/icon/favorite-active.png");
                } else {
                    $(".game-favorite-" + brandCode + "" + gameCode).fadeOut();
                    $('img[id^="fav_' + brandCode + gameCode + '"]').attr("src", "./images/icon/favorite.png");
                }
                notify(data);
            }
        },
        error: function (data) {
            unblockPage();
        },
    });
}

function favoriteSelectPageFavorite(brandCode, gameCode, id_favorite) {
    $.ajax({
        type: "POST",
        url: contextPath + cVersion + "/Favorite/Select",
        data: {id_favorite: id_favorite},
        dataType: "json",
        cache: false,
        beforeSend: function () {},
        success: function (data) {
            if (isSuccess(data)) {
                $("#" + brandCode + gameCode).remove();
                notify(data);
            }
        },
        error: function (data) {
            unblockPage();
        },
    });
}
//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="True">
function truemoneyWallet() {
    $.ajax({
        type: "GET",
        url: contextPath + cVersion + "/Deposit/Check/PlayerPromotion",
        dataType: "json",
        cache: false,
        beforeSend: function () {},
        success: function (data) {
            if (isSuccess(data)) {
                var res = data.data;
                $("#depositWithdraw").modal("hide");
                $("#truemoneyWallet").modal("show");
                $("#promotion-list-tw").html(htmlPormotionTW(res));
            } else {
                notify(data);
            }
        },
        error: function (data) {
            unblockPage();
        },
    });
}

function htmlPormotionTW(data) {
    if (data != "") {
        var html = "";
        if (data.current != null) {
            $.each(data.promotionList, function (k, v) {
                if (v.key == data.current.s_prm_code) {
                    document.getElementById("prmText_TW").textContent = v.value;
                    document.getElementById("prmkey_TW").value = v.key;
                }
            });
        }
        html += "<li>";
        html += '<a class="dropdown-item px-2 d-flex align-items-center gap-2" ';
        html += "onclick=\"changeDropdownPrmTW('-1','" + L.lb.dontPrm + "')\">";
        html += L.lb.dontPrm;
        html += "</a>";
        html += "</li>";
        $.each(data.promotionList, function (k, v) {
            html += "<li>";
            html += '<a class="dropdown-item px-2 d-flex align-items-center gap-2" ';
            html += "onclick=\"changeDropdownPrmTW('" + v.key + "','" + v.value + "')\">";
            html += v.value;
            html += "</a>";
            html += "</li>";
        });
        $("#promotion-list-tw").html(html);
    }
}

//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="True" desc="DLL Promotion">
function changeDropdownPrm(newText2, id, Code) {
    document.getElementById("prmText").textContent = newText2;
    document.getElementById("prmId").value = id;
    document.getElementById("prmCode").value = Code;
}
function changeDropdownPrmSlip(newText2, id, Code) {
    document.getElementById("prmText_slip").textContent = newText2;
    document.getElementById("prmId_slip").value = id;
    document.getElementById("prmCode_slip").value = Code;
}
function changeDropdownPrmTW(key, text) {
    $.ajax({
        type: "POST",
        url: contextPath + cVersion + "/Deposit/Promotion/Select",
        data: {key: key, s_type: "TRUEWALLET"},
        dataType: "json",
        cache: false,
        beforeSend: function () {
            blockPage();
        },
        success: function (data) {
            if (isSuccess(data)) {
                document.getElementById("prmText_TW").textContent = text;
                document.getElementById("prmkey_TW").value = key;
            }
            notify(data);
        },
        error: function (data) {},
    });
}
//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="BackButton Modal">
function modaldepositWithdraw() {
    $("#depositWithdraw").modal("show");
}
function modalbagModal() {
    if ($("#cashbackHistory").hasClass("d-none")) {
        $("#receiveLossModal").modal("hide");
        $("#bagModal").modal("show");
    } else {
        $("#cashbackHistory").addClass("d-none");
        $("#cashbackLVL").removeClass("d-none");
    }
}

//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="BackButton Modal">
function CallpromotionModal() {
    $("#bagModal").modal("hide");
    $.ajax({
        type: "GET",
        url: contextPath + cVersion + "/Pormotion/Inquiry",
        dataType: "json",
        cache: false,
        beforeSend: function () {},
        success: function (data) {
            if (isSuccess(data)) {
                var res = data.data;
                var htmlPrm = "";
                $.each(res, function (k, v) {
                    htmlPrm += htmlPromotion(v);
                });
                $("#prmList").html(htmlPrm);
                $("#promotionModal").modal("show");
            }
        },
        error: function (data) {
            unblockPage();
        },
    });
}

function htmlPromotion(v) {
    var html = "";
    html += '<div class="swiper-slide">';
    html += '<img src="data:image/png;base64,' + v.s_source_img + '" class="img-fluid" alt="Promotion 1">';
    html += '<div class="text-center">';
    html += '<h6 class="text-center" style="color: #FF8A00;">' + v.s_promotion + "</h6>";
    html += '<p class="fs-8 mb-0">' + v.s_detail + "</p>";
    html += '<p class="fs-8">' + L.remark.contactTheAdmin + "</p>";
    html += "</div>";
    html += '<div class="d-flex flex-column gap-2">';
    html +=
            '<button type="button" class="btn btn-menu-custom text-white" onclick="getPromotion(\'' +
            v.s_promotion +
            "','" +
            v.s_code +
            "')\">";
    html += L.lb.getBonus;
    html += "</button>";
    html += "</div>";
    html += "</div>";

    return html;
}

//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="Open Modal">
    function openModal(divId) {
        $("#" + divId).modal("show");
        if (divId === 'spinnerModal') {
            $.ajax({
                type: "POST",
                url: contextPath + cVersion + "/LuckyWheel/Inquiry",
                dataType: "json",
                cache: false,
                beforeSend: function () {
                    blockui();
                    $("#drawing").html(ListLoading("luckyWheelLoading"));
                },
                success: function (data) {
                    if (isSuccess(data)) {
                        if (!isUndefined(data.data)) {
                            var res = data.data;
                            $('#i_per_day').html(res.i_per_day);
                            $('#i_max').html(res.times);
                            $('#Ecredit').html(res.point);
                            $('#day').html(res.day);
                            $('#all').html(res.all);
                            $('#eventCode').val(res.eventCode);
                            drawGraphic(res.Item)
                            localStorage.setItem("defaultConfig", JSON.stringify(_globalVars.config));
                            loadEvents();
                            setDefaultParams();
                        } else {
                            $("#drawing").html(L.lb.noData);
                        }
                    }
                },
                error: function (data) {
                    unblockPage();
                },
            });
        }
    }

    function closeModal(divId) {
        $("#" + divId).modal("hide");
    }
//</editor-fold>

function changeBankDeposit(Id, bankNo, bankNoFormat, accName, color, img, BankName) {
    $('#i_bank_agent').val(Id);
    $('.ddl-btn-deposit').css('background', color);
    $('#bank-deposit-img').attr("src", "./assets/images/bankName/" + img);
    $('#bank-deposit-name').html(BankName);
    $('#s_account_no').val(bankNo);
    $('#bankAccount').val(bankNoFormat);
    $('#bank-deposit-acc-name').html(accName);
}


function callmodal(idModal) {
    $('#' + idModal).modal('show')
}