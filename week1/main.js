
console.log('Hello JS');

// 変数の宣言と代入
let a = 10;
let b = 3;

// 四則演算
console.log('足し算:', a + b ,'結果です');
console.log('引き算:', a - b);
console.log('掛け算:', a * b);
console.log('割り算:', a / b);
console.log('余り:', a % b);

// 比較演算子
console.log('a > b:', a > b);
console.log('a == b:', a == b);
console.log('a === b:', a === b);

// 複合代入演算子
a += 5;
console.log('a += 5 →', a);

const price = 580;
const tax = price * 0.1;
console.log('税込み:', price + tax);
console.log('price=5をやってみる');
// price=5;

console.log('ランダムな整数（1〜6）:', Math.floor(Math.random() * 6) + 1);
console.log('Math.random()*10:', Math.random()*10 );
console.log('Math.floor(1.5):', Math.floor(1.5) );

console.log("process.stdout のテスト")
process.stdout.write('Hello ');
process.stdout.write('JS');
process.stdout.write(' 🚀\n'); // ← 必要なら自分で改行を付ける

let buffer = '';
buffer += 'Loading';
buffer += '.';
buffer += '.';
console.log(buffer); // => Loading..
