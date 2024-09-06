$(document).ready(function() {
  $('#navbarScrollingDropdown').on('click', function(e) {
      e.preventDefault();
      var href = $(this).data('href');
      window.location.href = href;
  });
});