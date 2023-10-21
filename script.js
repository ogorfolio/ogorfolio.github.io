

const textElement1 = document.getElementById("text-animation-1");
const words1 = ["tanio", "dobrze", "szybko"];
let wordIndex1 = 0;
let charIndex1 = 0;


function typeText1() {
  if (wordIndex1 < words1.length) {
    if (charIndex1 < words1[wordIndex1].length) {
      textElement1.textContent += words1[wordIndex1].charAt(charIndex1);
      charIndex1++;
      setTimeout(typeText1, 100);
    } else {
      setTimeout(eraseText1, 1000);
    }
  }
}

function eraseText1() {
  if (charIndex1 > 0) {
    textElement1.textContent = words1[wordIndex1].substring(0, charIndex1 - 1);
    charIndex1--;
    setTimeout(eraseText1, 50);
  } else {
    wordIndex1 = (wordIndex1 + 1) % words1.length;
    setTimeout(typeText1, 500);
  }
}


typeText1();

