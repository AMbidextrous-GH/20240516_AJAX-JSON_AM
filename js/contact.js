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

  