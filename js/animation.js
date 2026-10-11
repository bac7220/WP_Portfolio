window.addEventListener('DOMContentLoaded', () => {
  const target = document.querySelector('.js-text-span');
  if (!target) return;

  // 1. <br>（class付きも含む）を残したまま、それ以外の文字を1文字ずつ span で包む
  const parts = target.innerHTML.split(/(<br[^>]*>)/);
  target.innerHTML = parts
    .map((part) => (/^<br/.test(part) ? part : [...part].map((char) => `<span>${char}</span>`).join("")))
    .join("");

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
const targets = document.querySelectorAll('.c-card, .c-service__card, .p-voice__item');

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