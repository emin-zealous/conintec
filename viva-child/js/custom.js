(function ($) {
  $(document).ready(function () {
    ("use strict");

    const bodyNodes = $("body *");
    const styledLettersClass = "styled-letters";

    // Make CONINTEC word style look like a logo
    styleMatchesWithConintec("CONINTEC");

    function styleMatchesWithConintec(word) {
      const regex = new RegExp("\\b" + word + "\\b", "g");
      for (const node of bodyNodes) {
        let textNode = node.firstChild;
        while (textNode) {
          if (textNode.nodeType === 3) {
            const text = textNode.textContent;
            const matches = text.match(regex);
            if (matches) {
              const parts = text.split(regex);
              const newNodes = createNodesWithConintec(parts, matches);
              $(textNode).replaceWith(newNodes);
            }
          }
          textNode = textNode.nextSibling;
        }
      }
    }

    // Create nodes with CONINTEC word
    function createNodesWithConintec(parts, matches) {
      const newNodes = [];
      for (let i = 0; i < parts.length; i++) {
        newNodes.push(document.createTextNode(parts[i]));
        if (i < parts.length - 1) {
          const matchNode = createMatchNodeWithConintec(matches[i]);
          newNodes.push(matchNode);
        }
      }
      return newNodes;
    }

    // Create a matching node with CONINTEC word
    function createMatchNodeWithConintec(match) {
      const matchNode = document.createElement("span");
      const matchHtml = match.replace(
        match.substring(3, 5),
        `<span class="${styledLettersClass}">${match.substring(3, 5)}</span>`
      );
      matchNode.innerHTML = matchHtml;
      const parentColor = $(matchNode.parentNode).css("color");
      if (parentColor !== "rgb(255, 255, 255)") {
        styleMatchNodeWithConintec(matchNode);
      }
      return matchNode;
    }

    // Style matching node
    function styleMatchNodeWithConintec(word) {
      const styledLetters = $(word).find(`.${styledLettersClass}`);
      styledLetters.each(function () {
        $(this).parent().css({
          "font-weight": "bold",
          color: "#000000",
          "font-family": "arial",
        });
        $(this)
          .css({ color: "#567CD8", "font-size": "68%" })
          .removeClass(styledLettersClass);
      });
    }
  });
})(jQuery);
