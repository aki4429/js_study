<?php
declare(strict_types=1);
$y = (int)(filter_input(INPUT_GET,'y',FILTER_VALIDATE_INT) ?: date('Y'));
$m = (int)(filter_input(INPUT_GET,'m',FILTER_VALIDATE_INT) ?: date('n'));
?>
<!DOCTYPE html>
<meta charset="utf-8">
<title>カレンダー</title>
<style>
th,
td {
  border: 1px solid #aaa;
  width: 2rem;
  height: 1.8rem;
  text-align: right
}
</style>
<div id="app"></div>
<button id="prev">‹</button><button id="next">›</button>

<script type="module">
const week = ['日', '月', '火', '水', '木', '金', '土'];
let year = <?= $y ?>,
  month = <?= $m ?>;
render(year, month); // 初期描画

async function render(y, m) {
  const r = await fetch(`api.php?y=${y}&m=${m}`);
  const j = await r.json();
  if (j.error) return alert(j.error);

  const tbl = document.createElement('table');
  tbl.innerHTML = `<caption>${j.year}年 ${j.month}月</caption>` +
    '<tr>' + week.map(w => `<th>${w}</th>`).join('') + '</tr>';

  let row = document.createElement('tr');
  row.innerHTML = '<td></td>'.repeat(j.firstWeekday);

  for (let d = 1; d <= j.lastDay; d++) {
    if ((j.firstWeekday + d - 1) % 7 === 0 && d !== 1) {
      tbl.appendChild(row);
      row = document.createElement('tr');
    }
    row.innerHTML += `<td>${d}</td>`;
  }
  tbl.appendChild(row);
  document.getElementById('app').innerHTML = '';
  document.getElementById('app').appendChild(tbl);
  year = j.year;
  month = j.month;
}
document.getElementById('prev').onclick = () => render(year, month === 1 ? (year -= 1, 12) : --month);
document.getElementById('next').onclick = () => render(year, month === 12 ? (year += 1, 1) : ++month);
</script>