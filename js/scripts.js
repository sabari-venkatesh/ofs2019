$(document).ready(function () {
  $(".navbar-toggler").click(function () {
    if (!$(this).hasClass("is-active")) {
      $(this).addClass("is-active");
      $(".navbar-nav.is-primary>.nav-item:first").addClass("is-active");
    } else {
      $(this).removeClass("is-active");
      $(".navbar-nav.is-primary>.nav-item").removeClass("is-active");
    }
  });

  $(".bot-offerings a").click(function (event) {
    var target = $(this).attr("href");

    $(".bot-content").animate({
      scrollTop: $(target).offset().top
    }, 1000);
  });

  // $(".bot-content").scroll(function () {
  //   if ($(this).scrollTop() > 50) {
  //     $(".bot-offerings").css({
  //       position: "fixed",
  //       top: "4px"
  //     })
  //   } else {
  //     $(".bot-offerings").css({
  //       position: "static",
  //     })
  //   }
  // });

  $("html").removeClass("is-animating");

  const swup = new Swup({
    debugMode: true,
    elements: [".content-page", ".content-overlay-h", ".content-overlay-v", ".bot"],
    LINK_SELECTOR: 'a[href^="' + window.location.origin + '"]:not([data-no-swup]), a[href^="/"]:not([data-no-swup]), a[href^="./"]:not([data-no-swup]), a[href^="#"]:not([data-no-swup])',
  });

  $(".navbar-nav.is-primary>.nav-item>.nav-link").hover(function () {
    var menuitem = $(this).parent();
    menuitem.addClass("is-active").siblings().removeClass("is-active");
  });

  document.addEventListener("swup:animationOutStart", event => {
    $(".navbar-toggler").removeClass("is-active");
    $(".nav-item").removeClass("is-active");
  });
});