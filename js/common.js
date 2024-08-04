//<editor-fold defaultstate="collapsed" desc="Variable Master">
var bankImg = {
  1: {
    img: "scb.png",
  },
  2: {
    img: "kbank.png",
  },
  3: {
    img: "ktb.png",
  },
  4: {
    img: "bbl.png",
  },
  5: {
    img: "bay.png",
  },
  6: {
    img: "tmb.png",
  },
  7: {
    img: "tw.png",
  },
  8: {
    img: "gsb.png",
  },
  9: {
    img: "tbank.png",
  },
  10: {
    img: "uob.png",
  },
  11: {
    img: "kk.png",
  },
  12: {
    img: "lh.png",
  },
  13: {
    img: "ibank.png",
  },
  14: {
    img: "tisco.png",
  },
  15: {
    img: "scib.png",
  },
  16: {
    img: "ghb.png",
  },
  17: {
    img: "icbc.png",
  },
  18: {
    img: "baac.png",
  },
  19: {
    img: "cimb.png",
  },
};
var bankName = {
  1: {
    name: "SCB",
  },
  2: {
    name: "KBANK",
  },
  3: {
    name: "KTB",
  },
  4: {
    name: "BBL",
  },
  5: {
    name: "BAY",
  },
  6: {
    name: "TMB",
  },
  7: {
    name: "",
  },
  8: {
    name: "GSB",
  },
  9: {
    name: "TBANK",
  },
  10: {
    name: "uob",
  },
  11: {
    name: "KIATNAKIN",
  },
  12: {
    name: "LHBANK",
  },
  13: {
    name: "IBANK",
  },
  14: {
    name: "IISCO",
  },
  15: {
    name: "SCIB",
  },
  16: {
    name: "GHB",
  },
  17: {
    name: "ICBC",
  },
  18: {
    name: "BAAC",
  },
  19: {
    name: "CIMB",
  },
};
//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="BlockPage & BlockUI">
function blockPage() {}
function unblockPage() {}

function blockBody() {}

function unblockBody() {}

//function blockui(id) {}
//function unblockui(id) {}

function blockui() {
    $.blockUI({
        message: '<img src="./images/misc/loading.gif" style="width: 50px;" />',
        css: {
            backgroundColor: 'transparent',
            border: 'none',
            zIndex: 9999999999
        },
        overlayCSS: {
            backgroundColor: '#000', // กำหนดสีพื้นหลังของ overlay
            opacity: 0.5, // กำหนดความทึบของ overlay
            zIndex: 9998 // กำหนดค่า zIndex สูงกว่า backdrop ของ Bootstrap modal
        }

    });
}

function unblockui() {
    $.unblockUI();
}

//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="Auto Inquiry">
function notification() {
  $.ajax({
    type: "POST",
    url: contextPath + cVersion + "/Notification",
    dataType: "json",
    cache: false,
    beforeSend: function () {},
    success: function (data) {
      if (isSuccess(data)) {
        var res = data.data;
        if (res != null) {
          $.each(res, function (k, v) {
            notifySuccess(data.statusCode, L.lb.mdDepositText + " " + v.f_in + " " + L.status.complated);
            runNingCredit("PreCreditWD", v.f_amount, 2);
            runNingCredit("profile-balance", v.f_amount, 2);
            runNingCredit("header-balance-amount", v.f_amount, 2);
          });
        }
      }
    },
    error: function (data) {},
  });
}

function updateInfo() {
  $.ajax({
    type: "POST",
    url: contextPath + cVersion + "/UpdateInfo",
    dataType: "json",
    cache: false,
    beforeSend: function () {},
    success: function (data) {
      if (isSuccess(data)) {
      }
    },
    error: function (data) {},
  });
}
//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="Notify and Form Validate">
function isSuccess(data) {
  if (data != "") {
    data = convertString2Json(data);
    if (data.statusCode == "0") {
      return true;
    }
  }
  return false;
}

function convertString2Json(data) {
  if (typeof data == "string") {
    return JSON.parse(data);
  } else {
    return data;
  }
}

function notify(data) {
  data = convertString2Json(data);
  if (data.statusCode == "0") {
    notifySuccess(data.statusCode, data.statusDesc);
  } else {
    notifyErr(data.statusCode, data.statusDesc);
  }
}

function notifySuccess(statusCode, statusDesc) {
  var msg = statusDesc; // + ' ' + "( " + statusCode + " )";
  msgSuccess(msg);
}

function notifyErr(statusCode, statusDesc) {
  var msg = statusDesc; // + ' ' + "( " + statusCode + " )";
  msgError(msg);
}

//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="Message Toast">
function toastOption() {
  toastr.options = {
    closeButton: true,
    debug: false,
    newestOnTop: false,
    progressBar: false,
    positionClass: "toast-top-right",
    preventDuplicates: false,
    onclick: null,
    showDuration: "300",
    hideDuration: "10000",
    timeOut: "5000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
    progressBar: true,
  };
}

function msgSuccess(msg, title) {
  toastOption();
  if (title != null) {
    toastr.success(msg, title);
  } else {
    toastr.success(msg, L.title.success);
  }
}

function msgError(msg, title) {
  toastOption();
  if (title != null) {
    toastr.error(msg, title);
  } else {
    toastr.error(msg, L.title.error);
  }
}

function msgInfo(msg, title) {
  toastOption();
  if (title != null) {
    toastr.info(msg, title);
  } else {
    toastr.info(msg, L.title.info);
  }
}

function msgWarning(msg, title) {
  toastOption();
  if (title != null) {
    toastr.warning(msg, title);
  } else {
    toastr.warning(msg, L.title.warning);
  }
}

//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="Utility function">
function coUp(id, numberFrom, numberTo, decimal) {
  const options = {
    startVal: numberFrom,
    decimalPlaces: decimal,
  };
  const n = new countUp.CountUp(id, numberTo, options);
  n.start();
}
//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="Copy">
function CopyPaste(textbox_id, button_id, delay) {
  let accNo = $("#" + textbox_id).val();
  let str = accNo.replace(/\-/g, "");
  navigator.clipboard.writeText(str);
  $("#" + button_id).attr("title", "Copy!");
  $("#" + button_id).tooltip("show");
  setTimeout(function () {
    $(".tooltip").remove();
    $("#" + button_id).removeData("tooltip");
    $("#" + button_id).removeAttr("title");
    $("#" + button_id).tooltip("hide");
  }, delay);
}

function copy_AccNo() {
  let accNo = $("#s_account_no").val();
  let str = accNo.replace(/\-/g, "");
  navigator.clipboard.writeText(str);
  $("#btn-copy-accno").attr("title", "Copy");
  $("#btn-copy-accno").tooltip("show");
  setTimeout(function () {
    $(".tooltip").remove();
    $("#btn-copy-accn").removeData("tooltip");
    $("#btn-copy-accn").removeAttr("title");
    $("#btn-copy-accn").tooltip("hide");
  }, 800);
}

function copy_AccNoWD() {
  let accNo = $("#dw_account_no").val();
  let str = accNo.replace(/\-/g, "");
  navigator.clipboard.writeText(str);
  $("#btn-copy-accno-wd").attr("title", "Copy");
  $("#btn-copy-accno-wd").tooltip("show");
  setTimeout(function () {
    $(".tooltip").remove();
    $("#btn-copy-accn").removeData("tooltip");
    $("#btn-copy-accn").removeAttr("title");
    $("#btn-copy-accn").tooltip("hide");
  }, 1500);
}

function copyShortUrl() {
  let link = $("#s_shorturl").val();
  let str = link.replace(/\-/g, "");
  navigator.clipboard.writeText(str);
  $("#btn-copy-shorturl").attr("title", "Copy");
  $("#btn-copy-shorturl").tooltip("show");
  setTimeout(function () {
    $(".tooltip").remove();
    $("#btn-copy-shorturl").removeData("tooltip");
    $("#btn-copy-shorturl").removeAttr("title");
    $("#btn-copy-shorturl").tooltip("hide");
  }, 800);
}
//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="Format">
function formatBankAcc(data) {
  if (data.length === 10) {
    var d1 = data.substring(0, 3);
    var d2 = data.charAt(3);
    var d3 = data.substring(4, 9);
    var d4 = data.charAt(9);
    return d1 + "-" + d2 + "-" + d3 + "-" + d4;
  } else {
    return data;
  }
}

function formatDate(originalDate, lang) {
  var parts = originalDate.split("-");
  var year = "";
  if (lang == "TH") {
    year = parseInt(parts[0]) + 543;
  } else {
    year = parseInt(parts[0]);
  }
  var month = parts[1];
  var day = parts[2];
  var formattedDate = day + "/" + month + "/" + year;
  return formattedDate;
}

function formatDateYM(originalDate, lang) {
  var parts = originalDate.split("-");
  var year = "";
  if (lang == "TH") {
    year = parseInt(parts[0]) + 543;
  } else {
    year = parseInt(parts[0]);
  }
  var month = parts[1];
  var day = parts[2];
  var formattedDate = month + "/" + year;
  return formattedDate;
}
//</editor-fold>

//<editor-fold defaultstate="collapsed" desc="flatpickr">
function initFlatpickr() {
  $("#dateOverview")
    .datepicker({
      minViewMode: "months",
      changeMonth: true,
      changeYear: true,
      showButtonPanel: true,
      dateFormat: "yy-mm",
    })
    .on("change", function (dateText, inst) {
      var dateObject = $(this).datepicker("getDate");
      var date = new Date(dateObject);
      var month = (date.getMonth() + 1).toString().padStart(2, "0");
      var year = date.getFullYear();
      formattedDate = year + "-" + month;
      $(this).val(formattedDate);
    });
  $("#yearOverview")
    .datepicker({
      minViewMode: "years",
      changeMonth: true,
      changeYear: true,
      showButtonPanel: true,
      format: "yyyy",
    })
    .on("change", function (dateText, inst) {
      var dateObject = $(this).datepicker("getDate");
      var date = new Date(dateObject);
      var month = (date.getMonth() + 1).toString().padStart(2, "0");
      var year = date.getFullYear();
      formattedDate = year;
      $(this).val(formattedDate);
    });
  $("#dStartView")
    .datepicker({
      minViewMode: "months",
      changeMonth: true,
      changeYear: true,
      showButtonPanel: true,
      dateFormat: "yy-mm",
    })
    .on("change", function (dateText, inst) {
      var dateObject = $(this).datepicker("getDate");
      var date = new Date(dateObject);
      var month = (date.getMonth() + 1).toString().padStart(2, "0");
      var year = date.getFullYear();
      formattedDate = year + "-" + month;
      $(this).val(formattedDate);
    });
  $("#dEndView")
    .datepicker({
      minViewMode: "months",
      changeMonth: true,
      changeYear: true,
      showButtonPanel: true,
      dateFormat: "yy-mm",
    })
    .on("change", function (dateText, inst) {
      var dateObject = $(this).datepicker("getDate");
      var date = new Date(dateObject);
      var month = (date.getMonth() + 1).toString().padStart(2, "0");
      var year = date.getFullYear();
      formattedDate = year + "-" + month;
      $(this).val(formattedDate);
    });
  //    $("#dStartView").datepicker({
  //        changeMonth: true,
  //        changeYear: true,
  //        showButtonPanel: true,
  //        format: "yyyy",
  //    }).on("change", function (dateText, inst) {
  //        var dateObject = $(this).datepicker('getDate');
  //        var date = new Date(dateObject);
  //        var day = date.getDate().toString().padStart(2, '0');
  //        var month = (date.getMonth() + 1).toString().padStart(2, '0');
  //        var year = date.getFullYear();
  //        formattedDate = year + "-" + month + "-" + day;
  //        $(this).val(formattedDate);
  //    });
  //    $("#dEndView").datepicker({
  //        changeMonth: true,
  //        changeYear: true,
  //        showButtonPanel: true,
  //        format: "yyyy",
  //    }).on("change", function (dateText, inst) {
  //        var dateObject = $(this).datepicker('getDate');
  //        var date = new Date(dateObject);
  //        var day = date.getDate().toString().padStart(2, '0');
  //        var month = (date.getMonth() + 1).toString().padStart(2, '0');
  //        var year = date.getFullYear();
  //        formattedDate = year + "-" + month + "-" + day;
  //        $(this).val(formattedDate);
  //    });
}
//</editor-fold>

function closeModal(elmId) {
  $("#" + elmId).modal("hide");
}

function isUndefined(data) {
  if (typeof data === "undefined") {
    return true;
  } else {
    return false;
  }
}
