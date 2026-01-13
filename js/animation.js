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
    stagger: 0.1, // 0.2だと少し遅いかもしれないので調整してみてください
    ease: "back.out(1.7)",
  });
});
// GSAPとScrollTriggerが読み込まれている前提です
gsap.registerPlugin(ScrollTrigger);

ScrollTrigger.create({
  trigger: ".l-main", // fv.phpの一番外側のタグをターゲットにする
  start: "top top",
  pin: true,           // その場に固定
  pinSpacing: false,   // 隙間を作らず、次の要素を上に重ねる
  // end: "bottom top" // 基本は不要ですが、挙動を見て調整
});