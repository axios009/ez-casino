var testdata = "";

$(document).ready(function () {
  //    $('#regis-step-1').removeClass('d-none');
  //    $('#regis-step-2').addClass('d-none');
  //    $('#regis-step-3').addClass('d-none');
  //    $('#regis-step-4').addClass('d-none');
  //    $('#regis-login').removeAttr("href");
  //    $('#step-item1').addClass('active');
  //    $('#step-item2').removeClass('active');
  //    $('#step-item3').removeClass('active');
  //    clearBank();
});
$("#signUpModal").on("shown.bs.modal", function () {
  resetRegForm();
  $("#reg-mobile").html("");
});
$("#reg-mobile").on("shown.bs.modal", function () {
  resetRegForm();
  $("#signUpModal").html("");
});

$("#signUpModal").on("hidden.bs.modal", function () {
  $("#step-item1").addClass("active");
  $("#form-desktop-step-one").removeClass("d-none");
  $("#action-reg-mobile")[0].reset();
  $("#step-item2").removeClass("active");
  $("#form-desktop-step-two").addClass("d-none");
});

function resetRegForm() {
  $("#step-1-mobile").addClass("step-active");
  $("#step-1-mobile").removeClass("step");
  $("#step-2-mobile").addClass("step");
  $("#step-2-mobile").removeClass("step-active");
  $("#step-3-mobile").addClass("step");
  $("#step-3-mobile").removeClass("step-active");
  $("#form-mobile-step-one").removeClass("d-none");
  $("#form-mobile-step-two").addClass("d-none");
  $("#form-mobile-step-three").addClass("d-none");
}

function DesktopRegStep1() {
  jsonData = $("#action-reg-mobile").serialize();

  $.ajax({
    type: "POST",
    url: contextPath + cVersion + "/Member/Register/Confirm",
    data: jsonData,
    dataType: "json",
    cache: false,
    beforeSend: function () {
      //            blockPage();
    },
    success: function (data) {
      if (isSuccess(data)) {
        $("#regis-step-2").addClass("d-none");
        $("#regis-step-3").removeClass("d-none");
        $("#registerModalLabel").html();
        if (data.data != "") {
          var res = data.data.data;
          $("#desktop_link_login").attr("href", res.endpoint);
          $("#desktop_res_username").html(res.s_username);
          $("#desktop_res_password").html(res.s_password);
          $("#step-item1").removeClass("active");
          $("#form-desktop-step-one").addClass("d-none");
          $("#step-item2").addClass("active");
          $("#form-desktop-step-two").removeClass("d-none");
        }
      } else {
        notify(data);
      }
    },
    error: function (data) {
      //            unblockPage();
    },
  });
  //        $('#step-item1').removeClass('active');
  //        $('#form-desktop-step-one').addClass('d-none');
  //
  //        $('#step-item2').addClass('active');
  //        $('#form-desktop-step-two').removeClass('d-none');
  //    }
}

function mobileRegStep1() {
  var dataReg = {
    s_phone: $("#m_phone").val(),
    s_password: $("#m_phone").val(),
    i_bank: $("#m_bank").val(),
    s_account_no: $("#m_account_no").val(),
    ref: $("#m_ref").val(),
  };
  $.ajax({
    type: "POST",
    url: contextPath + cVersion + "/Member/Register/Verify",
    data: dataReg,
    dataType: "json",
    cache: false,
    beforeSend: function () {
      //            blockPage();
    },
    success: function (data) {
      if (isSuccess(data)) {
        $("#step-1-mobile").addClass("step");
        $("#step-1-mobile").removeClass("step-active");
        $("#step-3-mobile").addClass("step");
        $("#step-3-mobile").removeClass("step-active");

        $("#step-2-mobile").addClass("step-active");
        $("#step-2-mobile").removeClass("step");

        $("#form-mobile-step-one").addClass("d-none");
        $("#form-mobile-step-three").addClass("d-none");

        $("#form-mobile-step-two").removeClass("d-none");
        if (data.data != "") {
          var res = data.data;
          var htmlBank =
            '<img src="assets/images/bankName/' + bankImg[res.i_bank].img + '" alt="bank" width="25" height="25">';
          var htmlBankName = bankName[res.i_bank].name;
          $("#i_channel").val(res.i_channel);
          $("#display_phone").html(res.s_phone);
          $("#display_bank").html(htmlBank);
          $("#display_password").html(res.s_password);
        }
      } else {
        notify(data);
      }
    },
    error: function (data) {
      //            unblockPage();
    },
  });
}

function mobileRegStep2() {
  var dataReg = {
    s_phone: $("#m_phone").val(),
    s_password: $("#m_phone").val(),
    i_bank: $("#m_bank").val(),
    s_account_no: $("#m_account_no").val(),
    ref: $("#m_ref").val(),
    s_firstname: $("#m_name").val(),
    s_lastname: $("#m_lastname").val(),
  };
  $.ajax({
    type: "POST",
    url: contextPath + cVersion + "/Member/Register/Confirm",
    data: dataReg,
    dataType: "json",
    cache: false,
    beforeSend: function () {},
    success: function (data) {
      if (isSuccess(data)) {
        var res = data.data.data;
        $("#step-1-mobile").addClass("step");
        $("#step-1-mobile").removeClass("step-active");
        $("#step-2-mobile").addClass("step");
        $("#step-2-mobile").removeClass("step-active");

        $("#step-3-mobile").addClass("step-active");
        $("#step-3-mobile").removeClass("step");

        $("#form-mobile-step-one").addClass("d-none");
        $("#form-mobile-step-two").addClass("d-none");

        $("#form-mobile-step-three").removeClass("d-none");
        $("#m_link_login").attr("href", res.endpoint);
        $("#m_res_username").html(res.s_username);
        $("#m_res_phoneNo").html(res.s_username);
        $("#m_res_password").html(res.s_password);
      } else {
        notify(data);
      }
      //            unblockPage();
    },
    error: function (data) {
      //            unblockPage();
    },
  });
}

function verifyStep1() {
  var sphone = $("#s_phone").val();

  if (sphone == "") {
    notifyErr("", "กรุณาระบุเบอร์โทรศัพท์");
  } else {
    $("#regis-step-1").addClass("d-none");
    $("#regis-step-1").addClass("d-none");
    $("#promotion-container").addClass("d-none");
    $("#regis-step-2").removeClass("d-none");
    $("#step-item2").addClass("active");
    $("#step-item1").removeClass("active");
  }
}

function verifyReg() {
  var accNo = $("#s_account_no").val();
  $("#s_password").val(accNo);

  var ibank = $("#i_bank").val();

  if (ibank == "") {
    notifyErr("", "กรุณาเลือกธนาคาร");
  }

  jsonData = $("#form-action-register").serialize();
  $.ajax({
    type: "POST",
    url: contextPath + cVersion + "/Member/RegisterKorea/",
    data: jsonData,
    dataType: "json",
    cache: false,
    beforeSend: function () {
      //            blockPage();
    },
    success: function (data) {
      if (isSuccess(data)) {
        var res = data.data.data;
        $("#regis-step-3").addClass("d-none");
        $("#regis-step-4").removeClass("d-none");
        $("#login-username").html(res.s_phone);
        $("#login-password").html(res.s_password);
        $("#regis-login").attr("href", res.endpoint);
        $("#step-item3").addClass("active");
        $("#step-item2").removeClass("active");
      } else {
        notify(data);
      }
      //            unblockPage();
    },
    error: function (data) {
      //            unblockPage();
    },
  });
}

function ConfirmReg() {
  jsonData = $("#form-action-register").serialize();
  $.ajax({
    type: "POST",
    url: contextPath + cVersion + "/Member/Register/Confirm",
    data: jsonData,
    dataType: "json",
    cache: false,
    beforeSend: function () {
      //            blockPage();
      $("#regis-login").removeAttr("href");
    },
    success: function (data) {
      console.log("resapi=" + JSON.stringify(data));
      if (isSuccess(data)) {
        var res = data.data.data;
        $("#regis-step-3").addClass("d-none");
        $("#regis-step-4").removeClass("d-none");
        $("#login-username").html(res.s_phone);
        $("#login-password").html(res.s_password);
        $("#regis-login").attr("href", res.endpoint);
        $("#step-item3").addClass("active");
        $("#step-item2").removeClass("active");
      } else {
        notify(data);
      }
      //            unblockPage();
    },
    error: function (data) {
      //            unblockPage();
    },
  });
}

function selectBank(bankid) {
  $("#bank" + bankid).addClass("active");
  $("#i_bank").val(bankid);
  clearBankNotSel(bankid);
}

function clearBankNotSel(bankid) {
  for (let i = 1; i <= 19; i++) {
    if (i != bankid) {
      $("#bank" + i).removeClass("active");
    }
  }
}

function clearBank() {
  for (let i = 1; i <= 19; i++) {
    $("#bank" + i).removeClass("active");
  }
  $("#i_bank").val("");
}
