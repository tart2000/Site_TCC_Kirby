$(window).scroll(function() {
  if ($(document).scrollTop() > 250) {
    $('.navdate').removeClass('hide');
  } else {
    $('.navdate').addClass('hide');
  }
});