
window.addEventListener('DOMContentLoaded', () => {
  const target = document.querySelector('.js-text-span');
  if (!target) return;

  const nodes = target.textContent.split("");
  target.innerHTML = "";
  nodes.forEach((char) => {
    target.innerHTML += `<span>${char}</span>`;
  });
  gsap.from(".js-text-span span",{
    y: -100,
    // opacity: 0,
    duration: 1,
    stagger: 0.2,
    ease:"back.out(1.7)",
  })
})