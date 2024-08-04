const loginModal = document.querySelector(".login-modal");

$(document).ready(function () {
    number2digit();

//    if (action === 'login') {
//        $('#loginModal').modal('show');
//    }
//    if (action === 'affiliate') {
//        $('#affiliateModal').modal('show');
//    }
//    if (action === 'register') {
//        $('#registerModal').modal('show');
//    }

});

$('#username').keyup(function (e) {
    if (e.keyCode == 13)
    {
        $('#password').focus();

    }
});
$('#password').keyup(function (e) {
    if (e.keyCode == 13)
    {
        login();
    }
});




function modalLogin() {
    loginModal.setAttribute("style", "display: flex;");

    loginModal.childNodes[1].setAttribute(
            "style",
            "animation: scaleUp 0.5s ease-in-out;"
            );
    const loginBtn = document.querySelector("#loginBtn");

    loginBtn.addEventListener("click", () => {
        const loginModal = document.querySelector(".login-modal");
        loginModal.setAttribute("style", "display: flex;");

        loginModal.childNodes[1].setAttribute(
                "style",
                "animation: scaleUp 0.5s ease-in-out;"
                );
    });

    loginModal.childNodes[3].addEventListener("click", () => {
        loginModal.childNodes[1].setAttribute(
                "style",
                "animation: scaleDown 0.5s ease-in-out;"
                );
        setTimeout(() => {
            loginModal.setAttribute("style", "display: none;");
        }, 400);
    });

}

function closeModalLogin() {
    loginModal.childNodes[1].setAttribute(
            "style",
            "animation: scaleDown 0.5s ease-in-out;"
            );
    setTimeout(() => {
        loginModal.setAttribute("style", "display: none;");
    }, 400);
}



function login() {
    $.ajax({
        type: 'POST',
        url: contextPath + cVersion + '/Authen/Login',
        data: {username: $('#username').val(), password: $('#password').val(), agentCode: $('#agentCode').val(), remember: $('#remember_d').val()},
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

function loginMobile() {
    $.ajax({
        type: 'POST',
        url: contextPath + cVersion + '/Authen/Login',
        data: {username: $('#username_m').val(), password: $('#password_m').val(), agentCode: $('#agentCode_m').val(), remember: $('#remember_m').val()},
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


function randomIntFromInterval(min, max) { // min and max included 
    return Math.floor(Math.random() * (max - min + 1) + min)
}

function selectGame(idElm) {
    $('.card-game-select').removeClass('active');
    $('.list-game-mobile').addClass('d-none');
    $('#select-' + idElm).addClass('active');
    $('#game-selected-' + idElm).removeClass('d-none');
}

