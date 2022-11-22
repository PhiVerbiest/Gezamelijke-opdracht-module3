var counter = 1;
setInterval(function()  {
  document.getElementById('radio'+ counter).checked = true;
  counter++; 

  if(counter>4){
    counter=1
  }

}, 5000);9


$(document).ready(function () {
  var docEl = $(document),// selector die die document beet pakt
      homeEl = $('#nav-container');// selector die die ul beet pakt
      h1El = $('h1');
      headerEl = $('header');

  docEl.on('scroll', function () { // vuurt function uit op scroll
      if (docEl.scrollTop() > 10) {// als de bovenkant op 260 hoog is
          homeEl.addClass('animation-to-top');// houd de ul altijd boven
          h1El.addClass('animation-to-side');
          headerEl.addClass('opacity-1');
      }
      else {
        homeEl.removeClass('animation-to-top');
        h1El.removeClass('animation-to-side');
        headerEl.removeClass('opacity-1');
      }
  });
});