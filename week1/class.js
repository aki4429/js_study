class Person {
  constructor(name) {
    this.name = name;
  }
  greet() {
    console.log(`こんにちは、${this.name}です`);
  }
}

const p = new Person('太郎'); // ← constructor 実行される
p.greet(); // こんにちは、太郎です

console.log("p.__prptp__:", p.__proto__);

// ① 真のプロトタイプを取得（推奨）
const proto = Object.getPrototypeOf(p);   // Person.prototype と同じ参照

// ② そのプロパティ名を列挙
console.log(Object.getOwnPropertyNames(proto));
// → [ 'constructor', 'greet' ]

// ③ 本当に同一か？
console.log(proto === Person.prototype);  // true

Person.prototype.greet();
