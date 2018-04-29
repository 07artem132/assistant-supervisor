$(function () {
    $("#language").on("change",
        function (e) {
            window.location = "/setlocale/" + this.value;
        });
});
