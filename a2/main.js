window.onscroll = function () {
  stickyNav();
};

var nav = document.getElementById("myNav");
var sticky = nav.offsetTop;

function stickyNav() {
  if (window.pageYOffset > sticky) {
    nav.classList.add("sticky");
  } else {
    nav.classList.remove("sticky");
  }
}

function responsiveNav() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

var headerHeight = $("#myHeader").height();

$("a[href^='#']").bind("click", function (e) {
  e.preventDefault();

  var target = $(this).attr("href"); //Get the target
  var scrollToPosition = $(target).offset().top - headerHeight - 23;

  $("html").animate({ scrollTop: scrollToPosition }, 0, function () {
    window.location.hash = "" + target;
    // This hash change will jump the page to the top of the div with the same id
    // so we need to force the page to back to the end of the animation
    $("html").animate({ scrollTop: scrollToPosition }, 0);
  });
});
