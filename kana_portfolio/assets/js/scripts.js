//ローディング
window.addEventListener('load', function() {
  body = document.body;
  setTimeout(function(){
    body.classList.add('loaded');
  }, 600);
});


