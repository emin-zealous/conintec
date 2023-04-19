(function ($) {
  $(document).ready(function () {
    "use strict";
    // Floating menu issue on screen resize
    jQuery(window).on("resize", function () {
      jQuery(".fm-list").each(function () {
        var tabs_nr = jQuery(this).children(".fm-item").length;
        var tabs_width = jQuery(this).width();
        jQuery(".fm-list .nav-indicator").css("width", tabs_width / tabs_nr);
      });
    });

    // Navigate to a page section with animation
    var target = location.hash;
    var navbar_height = 0;
    var adminbar_offset = 0;
    if ($("#wpadminbar").length > 0) {
      adminbar_offset = 32;
    }
    if ($(".navbar.navbar-default .menubar").length > 0) {
      navbar_height = $(".navbar.navbar-default .menubar").outerHeight();
    }
    function addAnimation(id) {
      if ($(id).offset()) {
        $("html, body").animate(
          {
            scrollTop: $(id).offset().top - (navbar_height + adminbar_offset),
          },
          1000,
          "easeInOutQuart"
        );
      }
    }

    if (location.hash) {
      setTimeout(() => {
        addAnimation(target);
      }, 250);
    }

    // Use animation when switching between sections on the same page using the main menu
    $(
      "#menu-conintec > li > a[href*=\\#], #menu-conintec > li > ul > li > a[href*=\\#], #menu-conintec > li > ul > li > ul > li > a[href*=\\#], #menu-conintec_de > li > a[href*=\\#], #menu-conintec_de > li > ul > li > a[href*=\\#], #menu-conintec_de > li > ul > li > ul > li > a[href*=\\#]"
    ).bind("click", function (e) {
      const pageHref = location.href.split("#")[0];
      const buttonLink = $(this).attr("href").split("#")[0];
      const buttonId = "#" + $(this).attr("href").split("#")[1];
      if (pageHref === buttonLink) {
        e.preventDefault();
        addAnimation(buttonId);
        return false;
      }
    });
    
    /* Add About Us section icons */
    $(".fa-chalkboard-teacher")
      .removeClass("fas fa-chalkboard-teacher")
      .addClass("fa-solid fa-person-chalkboard");

    /* Add Journey to Partnership section icons */
    $(".fa-puzzle-piece")
      .removeClass("fas fa-puzzle-piece")
      .addClass("fa-light fa-puzzle");

    $(".fa-handshake")
      .removeClass("far fa-handshake")
      .addClass("fa-light fa-hands-holding-diamond");

    // Update social media icons
    var $linkedinIcon = $(".fa-linkedin");
    var $linkedinImg = $(
      '<img width="34px" height="34px" src="/wp-content/uploads/2023/03/icons8-linkedin-2-1.svg" class="header-logo" alt="Linkedin" title="Linkedin">'
    );
    $linkedinImg.insertBefore($linkedinIcon);
    $linkedinIcon.remove();
    var $xingIcon = $(".fa-xing");
    var $linkedinImg = $(
      '<img width="34px" height="34px" src="/wp-content/uploads/2023/03/xing-icon.svg" class="header-logo" alt="Xing" title="Xing">'
    );
    $linkedinImg.insertBefore($xingIcon);
    $xingIcon.remove();

    var $youtubeIcon = $(".fa-youtube");
    var $linkedinImg = $(
      '<img width="34px" height="34px" src="/wp-content/uploads/2023/03/youtube-icon.svg" class="youtube-logo" alt="Youtube" title="Youtube">'
    );
    $linkedinImg.insertBefore($youtubeIcon);
    $youtubeIcon.remove();
    
    // Arrows position in Nearshore Services sections
    function imageDementions() {
      const img = $(
        "#nearshore-images > div > div > div > div > div > div > div.owl-item.active > div > div.photobox-img > img"
      );
      const arrowLength = $(
        "#nearshore-images > div > div > div > div > div.owl-wrapper-outer"
      );
      // Set the top and width properties of your target div to the image height
      $(".owl-nav").css({
        top: img.height() / 2 - 35 + "px",
        "max-width": arrowLength.width() - 12,
      });
    }
    imageDementions();
    $(window).resize(function () {
      setTimeout(() => {
        imageDementions();
      }, 1000); // set timer to wait 1s after resize event has finished
    });
    
    // Fix bugs related to Linkedin icon
    $(".fa-linkedin-square")
      .removeClass("fa-linkedin-square")
      .addClass("fa-linkedin-in");

    // Add tooltip to social media icons
    $(".fa-linkedin-in").attr("title", "Linkedin");
    $(".fa-xing").attr("title", "Xing");
    $(".fa-youtube").attr("title", "Youtube");

    // Make Journey to partnership section non clickable
    $(".make-non-clickable").click(function (event) {
      event.preventDefault();
    });

    // Make Polylang menu icon non clickable
    $(".pll-parent-menu-item > a").click(function () {
      return false;
    });

    /* Add Journey to Partnership section icons */    
    $('.fa-puzzle-piece').removeClass('fas fa-puzzle-piece').addClass('fa-light fa-puzzle');
    $('.fa-handshake').removeClass('far fa-handshake').addClass('fa-light fa-hands-holding-diamond'); 

  });
})(jQuery);
