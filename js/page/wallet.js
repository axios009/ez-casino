$(document).ready(function () {
//    var mySwiper = new Swiper('.slide-promo', {
//   
//    });
//    mySwiper.on('transitionEnd', function () {
//        console.log('*** mySwiper.realIndex', mySwiper.realIndex);
//    });
});
//$(".slide-banner").on("swipe", function () {
//    console.log('xxxx')
//});
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

