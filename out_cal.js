//年月を受け取って、その月のカレンダーを表示するプグラム
const prompt = require('prompt-sync')({sigint: true});
const year = Number(prompt('表示したいカレンダーの年を力してください'));
const month = Number(prompt('表示したいカレンダーの月を力してください'));

const date = new Date();
const weeks = ["日", "月", "火", "水", "木", "金", "土"];

console.log("年:", date.getFullYear());
console.log("月:", date.getMonth());
console.log("日:", date.getDate());
console.log("曜日:", weeks[date.getDay()]);

console.log("======", year, "年 ", month, "月 カレンダー ======");

//最初の曜日行を作る。
let week_line ='';
for(x of weeks) {
  week_line += ( x + "\t");
}

console.log(week_line);