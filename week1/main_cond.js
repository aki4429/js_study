// --- 年齢判定 JS ---
function checkAge() {
const age = Number(prompt('年齢を入力してください'));

if (age >= 20) {
  alert('飲酒OK 🍻');
} else if (age >= 0) {
  alert('未成年 🚫');
} else {
  alert('数字を入力してね');
}
}


// ページが読み込まれたらボタンにイベント登録
document.addEventListener('DOMContentLoaded', () => {
  document.getElementById('check').addEventListener('click', checkAge);
});


// switch 練習：曜日メッセージ
const day = new Date().getDay(); // 0=Sun
switch (day) {
  case 0:
    console.log('日曜はゆっくり');
    break;
  case 1:
    console.log('月曜スタート!');
    break;
  default:
    console.log('平日ファイト');
}
