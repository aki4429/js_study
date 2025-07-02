const add = (a, b) => a + b;
const hiku = (a, b) => a - b;
const kakeru = (a, b) => a * b;
const waru = (a, b) => a / b;

document.getElementById('add').addEventListener('click', () => {
  const n1 = Number(document.getElementById('num1').value);
  const n2 = Number(document.getElementById('num2').value);
  const result = add(n1, n2);
  document.getElementById('result').textContent = `結果: ${result}`;
});

document.getElementById('hiku').addEventListener('click', () => {
  const n1 = Number(document.getElementById('num1').value);
  const n2 = Number(document.getElementById('num2').value);
  const result = hiku(n1, n2);
  document.getElementById('result').textContent = `結果: ${result}`;
});

document.getElementById('kakeru').addEventListener('click', () => {
  const n1 = Number(document.getElementById('num1').value);
  const n2 = Number(document.getElementById('num2').value);
  const result = kakeru(n1, n2);
  document.getElementById('result').textContent = `結果: ${result}`;
});

document.getElementById('waru').addEventListener('click', () => {
  const n1 = Number(document.getElementById('num1').value);
  const n2 = Number(document.getElementById('num2').value);
  const result = waru(n1, n2);
  document.getElementById('result').textContent = `結果: ${result}`;
});
