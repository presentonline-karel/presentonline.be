const typingAnimation = () => {
  if (window.innerWidth < 1024) {
    const texts = [];
    const typedWords = document.querySelectorAll(".typedWord");

    typedWords.forEach((typedWord) => {
      texts.push(typedWord.innerText);
    });

    //Count how many words = index from texts
    let count = 0;

    //Count characters from each word = index from a word character
    let index = 0;
    let currentText = "";
    let letter = "";
    let wait = 0;

    (function type() {
      if (count === texts.length) {
        count = 0;
      }
      currentText = texts[count];
      letter = currentText.slice(0, ++index);

      document.querySelector(".typing").textContent = letter;
      if (letter.length === currentText.length) {
        if (wait < 13) {
          wait += 1;
        } else {
          count++;
          index = 0;
          wait = 0;
        }
      }

      setTimeout(type, 180);
    })();
  }
};

typingAnimation();
