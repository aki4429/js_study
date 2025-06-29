//年月を受け取って、その月のカレンダーを表示するプグラム
const prompt = require('prompt-sync')({sigint: true});
const year = Number(prompt('表示したいカレンダーの年を力してください 年? :'));
const month = Number(prompt('表示したいカレンダーの月を力してください 月? :')) - 1;

const weeks = ["日", "月", "火", "水", "木", "金", "土"];

/*
const date = new Date();
console.log("年:", date.getFullYear());
console.log("月:", date.getMonth());
console.log("日:", date.getDate());
console.log("曜日:", weeks[date.getDay()]);
*/

function daysInMonth(year, month) {
  return new Date(year, month + 1, 0).getDate();
}

const lastDay = daysInMonth(year, month);

//その月の最終日は
console.log(year, "年", month + 1, "月の最終日は：",  lastDay);


//最初の曜日の項目行を作る。
let week_line ='';
for(x of weeks) {
  week_line += ( x + "\t");
}

console.log("======", year, "年 ", (month + 1), "月 カレンダー ======");
console.log(); //改行
console.log(week_line); //曜日項目


/* -------- 月カレンダ作成--------- */
const table = [];
for (let i = 1; i <= 6; i++) {  //7曜日5行のブランク表を作る
  const row = [];
  for (let j = 0; j <= 6; j++) {
    row.push('');
  };
  table.push(row);
}

let j = 0; // カレンダー行のインデックス
for (let i = 1; i <= lastDay; i++) { // 1カ月走る!
  wk = new Date(year, month, i).getDay();
  table[j][wk] = i ;
  if(wk === 6) {
    j+=1 ;
  }
}

table.forEach(r => console.log(r.join('\t')))