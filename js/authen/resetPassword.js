$(document).ready(function () {
    
    
});

function save() {
    jsonData = $('#form-action-resetPassword').serialize();
    $.ajax({
        type: 'POST',
        url: contextPath + cVersion + '/Authen/ResetPassword',
        data: jsonData,
        dataType: 'json',
        cache: false,
        beforeSend: function () {
            blockPage();
        },
        success: function (data) {
            if (isSuccess(data)) {
                window.location = contextPath + data.data;
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

function showPassword(ElmId) {
    var passwordInput = document.getElementById(ElmId);
    passwordInput.type = "text";
}

function hidePassword(ElmId) {
    var passwordInput = document.getElementById(ElmId);
    passwordInput.type = "password";
}