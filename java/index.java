// ヘッダーのボタン
const topButton = document.querySelector('#header a.nav-link top');
// クリックした時の位置を取得
topButton.addEventListener('click', () => {
    window.scrollTo({
        top: 0, 
        behavior: 'smooth' 
    });
});


// フッターのボタン
const topButton = document.querySelector('#footer div.top');
// クリックした時の位置を取得
topButton.addEventListener('click', () => {
    window.scrollTo({
        top: 0, 
        behavior: 'smooth' 
    });
});