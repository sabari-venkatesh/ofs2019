$(document).ready(function () {

  registerEvents();

  $(".navbar-toggler").click(function () {
    if (!$(this).hasClass("is-active")) {
      $(this).addClass("is-active");
      $(".navbar-nav.is-primary>.nav-item:first").addClass("is-active");
    } else {
      $(this).removeClass("is-active");
      $(".navbar-nav.is-primary>.nav-item").removeClass("is-active");
    }
  });

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

  document.addEventListener("swup:contentReplaced", event => {
    registerEvents();
  });

  function registerEvents() {
    var slideHIndex = 0, slideVIndex = 0;
    var slidesH = $(".slider.is-horizontal .slide");
    $(".slider-pagelink").eq(slideHIndex).attr("disabled", true);
    $(".slider-navlink").eq(slideVIndex).attr("disabled", true);
    $(".bot-offerings a").click(function (event) {
      var target = $(this).attr("href");

      $(".bot-content").animate({
        scrollTop: $(target).offset().top
      }, 1000);
    });

    $(".slider-navlink").click(function (event) {
      event.preventDefault();
      slideVIndex = $(this).parent().index();
      $(".slider-navlink").removeAttr("disabled");
      $(this).attr("disabled", true);
      $(".slider.is-vertical .slides").css({
        transform: "translateY(-" + (slideVIndex * 100) + "%)"
      });
    });

    $(".slider-pagelink").click(function (event) {
      event.preventDefault();

      if ($(this).hasClass("is-next")) {
        slideHIndex = slideHIndex < slidesH.length - 1 ? slideHIndex + 1 : slidesH.length - 1;
      } else {
        slideHIndex = slideHIndex > 0 ? slideHIndex - 1 : 0;
      }
      $(".slider-pageitem").eq(1).text(slideHIndex + 1 + " of " + slidesH.length);
      $(".slider.is-horizontal .slides").css({
        transform: "translateX(-" + (slideHIndex * 100) + "%)"
      });
      $(".bg-slider").css({
        transform: "translateX(-" + (slideHIndex * 100) + "%)"
      });
      $(".slider-pagelink").removeAttr("disabled");
      if (slideHIndex === 0) {
        $(".slider-pagelink").eq(0).attr("disabled", true);
      }
      if (slideHIndex === slidesH.length - 1) {
        $(".slider-pagelink").eq(1).attr("disabled", true);
      }
    });

    $(".quicklinks-toggler").click(function() {
      $(this).parent().toggleClass("is-active");
    });

    $(document).click(function(event) {
      $(".quicklinks").removeClass("is-active");
    });

    $(".quicklinks").click(function(event) {
      event.stopPropagation();
    });

    $(".text-info").hover(function() {
      var url = $(this).data("target");

      $(".bg-slide1").css({
        "background": "url('./img/" + url + "') no-repeat 50% 50% / 100% auto"
      })
    });

    setTimeout(function() {
      $(".quicklinks").addClass("is-active");
    }, 5000);
  }
});