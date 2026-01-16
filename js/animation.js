window.addEventListener('DOMContentLoaded', () => {
  const target = document.querySelector('.js-text-span');
  if (!target) return;

  // 1. まず <br> で分割して行ごとの配列を作る
  const lines = target.innerHTML.split('<br>');
  
  // 中身を一旦空にする
  target.innerHTML = "";

  // 2. 行ごとに処理を行う
  lines.forEach((line, index) => {
    const chars = line.split("");
    chars.forEach((char) => {
      target.innerHTML += `<span>${char}</span>`;
    });

    // 最後の行以外には <br> を戻す
    if (index < lines.length - 1) {
      target.innerHTML += '<br>';
    }
  });

  // GSAPの実行
  gsap.from(".js-text-span span", {
    y: "-100vh",
    duration: 1,
    stagger: 0.1, 
    ease: "back.out(1.7)",
  });
});



const sections = gsap.utils.toArray(".l-section");

sections.forEach((section) => {
  ScrollTrigger.create({
    trigger: section,
    start: "top top",
    end: true,
    pinSpacing:false
  })
})

// ふわっと現れるフェードインアニメーション
const targets = document.querySelectorAll('.c-card, .c-service__card');

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('js-fade-in');
    }
  });
}, { threshold: 0.5 });

targets.forEach(card => {
  observer.observe(card);
});