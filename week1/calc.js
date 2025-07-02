// ---------------- utils ----------------
const ops = {
  add:   (a, b) => a + b,
  sub:   (a, b) => a - b,
  mul:   (a, b) => a * b,
  div:   (a, b) => b === 0 ? '÷0!?' : a / b
};

const getNums = () => [
  Number(document.getElementById('num1').value),
  Number(document.getElementById('num2').value)
];

// ------------- event delegation -------------
document.getElementById('buttons').addEventListener('click', e => {
  const op = e.target.dataset.op;              // 例: "add"
  if (!op) return;                             // クリックがボタン以外
  const [a, b] = getNums();
  if (Number.isNaN(a) || Number.isNaN(b)) {
    return (result.textContent = '数値を入力してください');
  }
  const out = ops[op](a, b);
  result.textContent = `結果: ${out}`;
});
