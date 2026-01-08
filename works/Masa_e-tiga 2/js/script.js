document.addEventListener("DOMContentLoaded", () => {
  const heads = document.querySelectorAll(".qa-box__head");

  const minusIcon = `
    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="2" viewBox="0 0 22 2" fill="none">
      <path d="M1 1H21" stroke="#2392DB" stroke-width="2" stroke-linecap="round"/>
    </svg>
  `;

  const plusIcon = `
    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="21" viewBox="0 0 22 21" fill="none">
      <path d="M1 10H21" stroke="#2392DB" stroke-width="2" stroke-linecap="round"/>
      <path d="M11 1V20" stroke="#2392DB" stroke-width="2" stroke-linecap="round"/>
    </svg>
  `;

  // 初期状態：1つ目だけ開く
  heads.forEach((head, index) => {
    const body = head.nextElementSibling;
    const toggle = head.querySelector(".qa-box__toggle");

    if (index === 0) {
      body.style.display = "block";
      toggle.innerHTML = minusIcon;
    } else {
      body.style.display = "none";
      toggle.innerHTML = plusIcon;
    }

    // クリックで開閉
    head.addEventListener("click", () => {
      const isOpen = body.style.display === "block";

      if (isOpen) {
        body.style.display = "none";
        toggle.innerHTML = plusIcon;
      } else {
        body.style.display = "block";
        toggle.innerHTML = minusIcon;
      }
    });
  });
});

// document.addEventListener("DOMContentLoaded", () => {
//   const heads = document.querySelectorAll(".qa-box__head");
//   const toggles = document.querySelectorAll(".qa-box__toggle");
//   const bodies = document.querySelectorAll(".qa-box__body");

//   const minusIcon = `
//     <svg xmlns="http://www.w3.org/2000/svg" width="22" height="2" viewBox="0 0 22 2" fill="none">
//       <path d="M1 1H21" stroke="#2392DB" stroke-width="2" stroke-linecap="round"/>
//     </svg>
//   `;

//   const plusIcon = `
//     <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
//       <path d="M1 11H21" stroke="#2392DB" stroke-width="2" stroke-linecap="round"/>
//       <path d="M11 1V21" stroke="#2392DB" stroke-width="2" stroke-linecap="round"/>
//     </svg>
//   `;

//   // 初期状態（1つ目だけ開く）
//   bodies.forEach((body, i) => {
//     const inner = body.querySelector(".qa-box__a");

//     if (i === 0) {
//       body.style.maxHeight = inner.scrollHeight + "px";
//     } else {
//       body.style.maxHeight = "0px";
//     }
//   });

//   toggles.forEach((toggle, i) => {
//     toggle.innerHTML = i === 0 ? minusIcon : plusIcon;
//   });

//   // クリック処理
//   heads.forEach((head) => {
//     head.addEventListener("click", () => {
//       const body = head.nextElementSibling;
//       const inner = body.querySelector(".qa-box__a");
//       const toggle = head.querySelector(".qa-box__toggle");

//       const willOpen = body.style.maxHeight === "0px";

//       if (willOpen) {
//         body.style.maxHeight = inner.scrollHeight + "px";
//         toggle.innerHTML = minusIcon;
//       } else {
//         body.style.maxHeight = "0px";
//         toggle.innerHTML = plusIcon;
//       }
//     });
//   });
// });

const swiper = new Swiper(".swiper", {
  // Optional parameters
  slidesPerView: "auto",
  // slidesPerView: 1.2,
  // width: 360,
  spaceBetween: 18,
  loop: true,
  
  breakpoints: {
    1024: {
      // width: 604,
      centeredSlides:true,
    },
  },

  // virtual: {
  //   enabled: true,
  //   addSlidesAfter: 6,
  // },

  // If we need pagination
  pagination: {
    el: "#js-casestudy-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: "#js-casestudy-next",
    prevEl: "#js-casestudy-prev",
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
  },
});
