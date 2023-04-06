(function ($) {
  $(document).ready(function () {
    ("use strict");

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
  });
})(jQuery);
