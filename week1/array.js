
const fruits = ['りんご', 'みかん', 'ぶどう'];
console.log(fruits[0]); // りんご
console.log(fruits.length); // 3

fruits.forEach(fruit => {
  console.log(fruit);
});

fruits.push('バナナ');    // 末尾に追加
  console.log(fruits);
fruits.pop();             // 末尾から削除
  console.log(fruits);
fruits.unshift('もも');   // 先頭に追加
  console.log(fruits);
fruits.shift();           // 先頭から削除
  console.log(fruits);


// shopping.js
const items = [];
items.push('牛乳');
items.push('パン');
items.push('卵');

items.forEach((item, i) => {
  console.log(`${i + 1}. ${item}`);
});

let i=0;
for(item of items){
  console.log(`${i + 1}. ${item}`);
  i ++;
};
console.log("this is:", this);
