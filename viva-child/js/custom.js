(function ($) {
  $(document).ready(function () {
    ("use strict");

    // Make CONINTEC word style look like a logo
    var word = "CONINTEC";
    var regex = new RegExp("\\b" + word + "\\b", "g");
    $("body *").each(function () {
      var textNode = this.firstChild;
      while (textNode) {
        if (textNode.nodeType === 3) {
          var text = textNode.nodeValue;
          var matches = text.match(regex);
          if (matches) {
            var parts = text.split(regex);
            var newNodes = [];
            for (var i = 0; i < parts.length; i++) {
              newNodes.push(document.createTextNode(parts[i]));
              if (i < parts.length - 1) {
                var matchNode = document.createElement("span");
                matchNode.innerHTML = matches[i].replace(
                  matches[i].substring(3, 5),
                  '<span class="styled-letters">' +
                    matches[i].substring(3, 5) +
                    "</span>"
                );
                newNodes.push(matchNode);
                if ($(this).css("color") !== "rgb(255, 255, 255)") {
                  $(matchNode)
                    .find(".styled-letters")
                    .each(function () {
                      $(this).parent().css({
                        "font-weight": "bold",
                        color: "#000000",
                        "font-family": "arial",
                      }),
                        $(this)
                          .css({ color: "#567CD8", "font-size": "68%" })
                          .removeClass("styled-letters");
                    });
                }
              }
            }
            $(textNode).replaceWith(newNodes);
          }
        }
        textNode = textNode.nextSibling;
      }
    });
  });
})(jQuery);
