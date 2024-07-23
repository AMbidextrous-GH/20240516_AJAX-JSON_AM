jQuery(function($){
  window.addEventListener("scroll", (function() {
    var t = window.pageYOffset
    , e = document.getElementById("js-trigger")
    , n = document.getElementById("js-fixed-btn");
    n && e && (t > t + e.getBoundingClientRect().top ? n.setAttribute("aria-expanded", "true") : n.setAttribute("aria-expanded", "false"))
  }))
});

function popupImage() {
  var popup = document.getElementById('js-popup');
  if(!popup) return;
  var blackBg = document.getElementById('js-black-bg');
  var closeBtn = document.getElementById('js-close-btn');
  var showBtn = document.getElementById('js-show-popup');

  closePopUp(blackBg);
  closePopUp(closeBtn);
  closePopUp(showBtn);
  function closePopUp(elem) {
    if(!elem) return;
    elem.addEventListener('click', function() {
      popup.classList.toggle('is-show');
    });
  }
}
popupImage();

document.addEventListener('DOMContentLoaded', function() {
  var showPopup = document.getElementById('js-show-popup');
  var popup = document.getElementById('js-popup');
  var closeBtn = document.getElementById('js-close-btn');
  var blackBg = document.getElementById('js-black-bg');

  showPopup.addEventListener('click', function() {
      popup.classList.add('is-show');
  });

  closeBtn.addEventListener('click', function() {
      popup.classList.remove('is-show');
  });

  blackBg.addEventListener('click', function() {
      popup.classList.remove('is-show');
  });
});