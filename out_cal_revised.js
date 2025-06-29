const prompt = require('prompt-sync')({ sigint: true });

const year  = Number(prompt('年 (e.g. 2025): '));
const month = Number(prompt('月 (1-12): ')) - 1;   // 0–11

if (!Number.isInteger(year) || month < 0 || month > 11) {
  console.error('⚠️  年は整数、月は 1–12 を入力してください');
  process.exit(1);
}

const weeks = ['日','月','火','水','木','金','土'];
const last  = new Date(year, month + 1, 0).getDate();
const firstWeekday = new Date(year, month, 1).getDay();

// ヘッダ出力
console.log(`====== ${year}年 ${month + 1}月 カレンダー ======\n`);
console.log(weeks.join(' '));

// カレンダー生成
let line = ''.padStart(firstWeekday * 3, ' ');   // 1日までの空白

for (let d = 1; d <= last; d++) {
  line += String(d).padStart(2, ' ') + ' ';
  if ((firstWeekday + d) % 7 === 0 || d === last) {
    console.log(line);
    line = '';
  }
}
