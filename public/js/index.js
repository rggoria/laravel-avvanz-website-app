$(document).ready(function () {
    console.log("jQuery is loaded, and the DOM is ready!");
    $(".nav-main").on("click", function (e) {
        e.preventDefault();
        var href = $(this).data("href");
        window.location.href = href;
    });
});
