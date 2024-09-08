$(document).ready(function() {
    $('.nav-link.dropdown-toggle').on('click', function(e) {
        e.preventDefault();
        var href = $(this).data('href');
        window.location.href = href;
    });
});