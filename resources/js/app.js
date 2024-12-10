import "./bootstrap";

$(document).ready(function () {
    $(".nav-main").on("click", function (e) {
        e.preventDefault();
        var href = $(this).data("href");
        window.location.href = href;
    });
});
