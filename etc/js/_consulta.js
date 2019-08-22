$(document).ready(function () {
  // get hash code at next page
  var hashcode = window.location.hash;

  // move page to any specific position of next page(let that is div with id "hashcode")
  $('html,body').animate({scrollTop: $('div#'+hascode).offset().top},'slow');
});