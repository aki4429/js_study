/* -------- FizzBuzz (1〜100) -------- 
for (let i = 1; i <= 100; i++) {
  let out = '';
  if (i % 3 === 0) out += 'Fizz';
  if (i % 5 === 0) out += 'Buzz';
  console.log(out || i);
}
*/


/* -------- 九九表（配列 & for…of） -------- 
const table = [];
for (let i = 1; i <= 9; i++) {
  const row = [];
  for (let j = 1; j <= 9; j++) row.push(i * j);
  table.push(row);
}
table.forEach(r => console.log(r.join('\t')));
*/
const table = [];
table.push([1,2,3]);
table.push([4,5,6]);
table.push([7,8,9]);
console.log("table:", table);

function printRow(row, idx) {
  console.log("idx:", idx, "row:", row)
}

table.forEach(printRow);

table.forEach((r, i) => {console.log("i:", i , "r:", r)});

const date = new Date();

console.log("年:", date.getFullYear());
console.log("月:", date.getMonth());
console.log("日:", date.getDate());
console.log("曜日:", date.getDay());

let line = '';

for (x of table) {
  line += x;
}
console.log("line:", line);