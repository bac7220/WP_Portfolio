// 料金ページ：業務改善の費用対効果シミュレーター
document.addEventListener("DOMContentLoaded", () => {
    const root = document.querySelector(".js-dx-calc");
    if (!root) return;

    const inputs = root.querySelectorAll(".js-dx-calc-input");
    const out = {
        hours: root.querySelector(".js-dx-calc-hours"),
        monthly: root.querySelector(".js-dx-calc-monthly"),
        yearly: root.querySelector(".js-dx-calc-yearly"),
        payback: root.querySelector(".js-dx-calc-payback"),
    };
    const fmt = (n) => Math.round(n).toLocaleString("ja-JP");

    const update = () => {
        const v = {};
        inputs.forEach((input) => {
            const n = Number(input.value);
            v[input.name] = Number.isFinite(n) && n > 0 ? n : 0;
        });

        const hours = (v.staff * v.minutes * v.days) / 60;
        const monthly = hours * v.wage;

        out.hours.textContent = (Math.round(hours * 10) / 10).toLocaleString("ja-JP");
        out.monthly.textContent = fmt(monthly);
        out.yearly.textContent = fmt(monthly * 12);
        out.payback.textContent = monthly > 0 ? (v.cost / monthly).toFixed(1) : "—";
    };

    inputs.forEach((input) => input.addEventListener("input", update));
    update();
});
