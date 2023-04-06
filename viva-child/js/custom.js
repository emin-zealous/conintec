(function ($) {
  $(document).ready(function () {
    ("use strict");

<<<<<<< Updated upstream
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
=======
    // Update social media icons
    var $linkedinIcon = $(".fa-linkedin");
    var $linkedinImg = $(
      '<img src="/wp-content/uploads/2023/03/icons8-linkedin-2-1.svg" class="header-logo" alt="Linkedin" title="Linkedin">'
    );
    $linkedinImg.insertBefore($linkedinIcon);
    $linkedinIcon.remove();

    var $xingIcon = $(".fa-xing");
    var $linkedinImg = $(
      '<img src="/wp-content/uploads/2023/03/xing-icon.svg" class="header-logo" alt="Xing" title="Xing">'
    );
    $linkedinImg.insertBefore($xingIcon);
    $xingIcon.remove();

    var $youtubeIcon = $(".fa-youtube");
    var $linkedinImg = $(
      '<img src="/wp-content/uploads/2023/03/youtube-icon.svg" class="youtube-logo" alt="Youtube" title="Youtube">'
    );
    $linkedinImg.insertBefore($youtubeIcon);
    $youtubeIcon.remove();
>>>>>>> Stashed changes
  });
})(jQuery);
