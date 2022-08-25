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

// $("a[href^='#']").bind("click", function (e) {
//   $("a[href^='#']").removeClass("actives");
//   $(this).addClass("actives");
// });
//

window.onscroll = function () {
  stickyNav();
  var navlinks = document.getElementById("myTopnav").getElementsByTagName("a");
  var articles = document
    .getElementById("myMain")
    .getElementsByTagName("section");
  for (var a = 0; a < articles.length; a++) {
    var arTop = articles[a].offsetTop;
    var arBot = articles[a].offsetTop + articles[a].offsetHeight;

    if (window.scrollY >= arTop && window.scrollY < arBot) {
      navlinks[a].classList.add("actives");
    } else {
      navlinks[a].classList.remove("actives");
    }
  }
};
