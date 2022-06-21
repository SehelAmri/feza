$(document).ready(function(){
$("#regPad").click(function(){
$(".container").css({"animation":"bubble 1.0s forwards"});
$(".form").fadeIn(1000)
$(".alumform").css({"display":"none"});
})
$("#alumni").click(function(){
  $(".container").css({"animation":"bubble 1.0s forwards"});
  $(".alumform").fadeIn(1000)
  $(".form").css({"display":"none"});
  })
  $("#alumni2").click(function(){
    $(".container").css({"animation":"bubble 1.0s forwards"});
    $(".alumform").fadeIn(1000)
    $(".form").css({"display":"none"});
    })

var body = $('#hero');
var colors = ['bg04.jpg', 'bg02.jpg', 'bg03.jpg', 'bg01.jpg', 'bg05.jpg'];
var currentIndex = 0;
setInterval(function () {
   body.css(
     'background-image','url(assets/'+colors[currentIndex]+')'
   );
   if (!colors[currentIndex]) {
       currentIndex = 0;
   } else {
       currentIndex++;
   }
}, 20000);


})
