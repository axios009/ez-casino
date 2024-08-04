$(document).ready(function () {
    showMD();
});
function showhide(id) {
    var lastChar = id.substr(id.length - 1);
    $(".earn-tab-item").css("background", "#000");
    $('.earn-detail-data').css("display", "none");
    $('.earn-tab-item').removeClass('active')
    $("#" + id).css("display", "flex");
    $("#earn-tab" + lastChar).css("background", "#3a2c12");
}
function showMD() {
    $('.earn-detail-data').css("display", "none");
    $("#earn-detail-overview1").css("display", "flex");
}
