const user = {
  name: '山田',
  age: 32,
  isMember: true
};

console.log(user.name);       // 山田
console.log(user['age']);     // 32

user.city = '名古屋';         // 追加
user.age = 33;                // 更新
delete user.isMember;         // 削除
console.log("user.city:", user.city);
console.log("user.age:", user.age);

const users = [
  { name: '佐藤', age: 28 },
  { name: '鈴木', age: 35 },
  { name: '田中', age: 24 }
];

users.forEach(user => {
  console.log(`${user.name}さんは${user.age}歳です`);
});

const member = {
  id: 102,
  name: '佐藤太郎',
  email: 'sato@example.com',
  isActive: true
};

for (let key in member) {
  console.log(`${key}: ${member[key]}`);
}
