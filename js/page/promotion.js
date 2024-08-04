$(document).ready(function () {
    var slideCount = $('.slide').length;
    var slideWidth = $('.slide').outerWidth();
    var currentSlide = 1;

//    $('.slider-promotion').css({
//        width: slideCount * slideWidth,
//        marginLeft: -slideWidth
//    });

    $('.slide:last-child').prependTo('.slider-promotion');

    createDots();

    function moveLeft() {
        $('.slider-promotion').animate({
            left: +slideWidth
        }, 200, function () {
            $('.slide:last-child').prependTo('.slider-promotion');
            $('.slider-promotion').css('left', '');
            updateDots('prev-prm');
        });
    }

    function moveRight() {
        $('.slider-promotion').animate({
            left: -slideWidth
        }, 200, function () {
            $('.slide:first-child').appendTo('.slider-promotion');
            $('.slider-promotion').css('left', '');
            updateDots('next-prm');
        });
    }

    $('.prev-prm').click(function () {
        moveLeft();
    });

    $('.next-prm').click(function () {
        moveRight();
    });

    function createDots() {
        for (var i = 0; i < slideCount; i++) {
            $('.slider-dots').append('<span class="dot"></span>');
        }
        $('.dot:first-child').addClass('active-dot');
    }

    function updateDots(direction) {
        if (direction === 'next-prm') {
            currentSlide++;
        } else {
            currentSlide--;
        }
        if (currentSlide > slideCount) {
            currentSlide = 1;
        } else if (currentSlide === 0) {
            currentSlide = slideCount;
        }
        $('.dot').removeClass('active-dot');
        $('.dot:nth-child(' + currentSlide + ')').addClass('active-dot');
    }

    $('.dot').click(function () {
        var dotIndex = $(this).index() + 1;
        var moveAmount = currentSlide - dotIndex;
        if (moveAmount !== 0) {
            var direction = (moveAmount > 0) ? 'next-prm' : 'prev-prm';
            for (var i = 0; i < Math.abs(moveAmount); i++) {
                if (direction === 'next-prm') {
                    moveRight();
                } else {
                    moveLeft();
                }
            }
        }
    });

    // Touch Swipe Functionality
    var touchStartX = 0;
    var touchEndX = 0;

    $('.slider-promotion').on('touchstart', function (event) {
        touchStartX = event.originalEvent.touches[0].pageX;
    });

    $('.slider-promotion').on('touchmove', function (event) {
        touchEndX = event.originalEvent.touches[0].pageX;
    });

    $('.slider-promotion').on('touchend', function () {
        if (touchEndX < touchStartX) {
            moveRight();
        } else if (touchEndX > touchStartX) {
            moveLeft();
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

function getPromotion(promotion, id) {

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
                    changeDropdownPrmAT(id, promotion);
                } else if (res.type == 'U') {
                    $('#d-slip').removeClass('d-none');
                    $('#btn-slip').removeClass('d-none');
                }
                $('#funcDeposit').modal('show');
            }


        },
        error: function (data) {

        }
    });
    //    $('.select-promotion-list').addClass('d-none');
//    $('#prmId').val(id);
//    $('#prmText').html(promotion);
//    $.ajax({
//        type: 'GET',
//        url: contextPath + cVersion + '/Deposit/Inquiry/type',
//        dataType: 'json',
//        cache: false,
//        beforeSend: function () {
//            blockPage();
//        },
//        success: function (data) {
//            if (isSuccess(data)) {
//                var res = data.data;

//                htmlPormotionAT(res);
//                if (res.type == 'A') {
//                    $('.btn-dp').addClass('d-none');
//                    $('.btn-dp-auto').removeClass('d-none');
//                    $('#amountDeposit').addClass('d-none');
//                    $('#btn-deposit-amt').addClass('d-none');
//                    $('#promotionModal').modal('hide');
//                    $('.select-promotion-list').addClass('d-none');
//                    $('#prmId_AT').val(id);
//                    $('#prmText_AT').html(promotion);
//                    changeDropdownPrmAT(id, promotion);
//                    $('#autoDeposit').modal('show');
//                } else {
//                    $('.btn-dp').removeClass('d-none');
//                    $('.btn-dp-auto').addClass('d-none');
//                    $('#amountDeposit').removeClass('d-none');
//                    $('#btn-deposit-amt').removeClass('d-none');
//                    $('.select-promotion-list').addClass('d-none');
//                    $('#prmId').val(id);
//                    $('#prmText').html(promotion);
//                    $('#promotionModal').modal('hide');
//                    $('#autoDeposit').modal('show');
//                }
//                $('#autoDeposit').modal('show');
//            }
//
//
//        },
//        error: function (data) {
//
//        }
//    });
}