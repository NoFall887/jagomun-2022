// NAVBAR SHOW / HIDE
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-100%";
  }
  prevScrollpos = currentScrollPos;
};

var scene = document.getElementById("scene");
var parallax = new Parallax(scene);

$(document).ready(function () {
  $(".navbar-nav .dropdown-item").click(function () {
    $(".navbar-nav .dropdown-item").removeClass("active");
    $(this).addClass("active");
  });
});
