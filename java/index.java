// ヘッダーバーのスクロール
// TOPのボタン
const topButton = document.querySelector('#header a.nav-link.top');
// クリックした時の位置を取得
topButton.addEventListener('click', () => {
    window.scrollTo({
        top: 0, 
        behavior: 'smooth' 
    });
});
// ABOUTのボタン
const aboutButton = document.querySelector('#header a.nav-link.about');
// クリックした時に#aboutまでスクロール
aboutButton.addEventListener('click', (event) => {
    event.preventDefault(); // デフォルトのリンク動作を無効化
    const aboutSection = document.querySelector('#about'); // #aboutセクションを取得
    const offsetTop = aboutSection.offsetTop; // #aboutの位置を取得

    window.scrollTo({
        top: offsetTop, // #aboutの位置までスクロール
        behavior: 'smooth'
    });
});
// MENUのボタン
const menuButton = document.querySelector('#header a.nav-link.menu');
// クリックした時に#aboutまでスクロール
menuButton.addEventListener('click', (event) => {
    event.preventDefault(); // デフォルトのリンク動作を無効化
    const aboutSection = document.querySelector('#menu'); // #menuセクションを取得
    const offsetTop = aboutSection.offsetTop; // #menuの位置を取得

    window.scrollTo({
        top: offsetTop, // #menuの位置までスクロール
        behavior: 'smooth'
    });
});
// ACCESSボタン
const accessButton = document.querySelector('#header a.nav-link.access');
// クリックした時に#accessまでスクロール
accessButton.addEventListener('click', (event) => {
    event.preventDefault(); // デフォルトのリンク動作を無効化
    const aboutSection = document.querySelector('#access'); // #accessセクションを取得
    const offsetTop = aboutSection.offsetTop; // #accessの位置を取得

    window.scrollTo({
        top: offsetTop, // #accessの位置までスクロール
        behavior: 'smooth'
    });
});
// NEWSボタン
const newsButton = document.querySelector('#header a.nav-link.news');
// クリックした時に#accessまでスクロール
newsButton.addEventListener('click', (event) => {
    event.preventDefault(); // デフォルトのリンク動作を無効化
    const aboutSection = document.querySelector('#news'); // #accessセクションを取得
    const offsetTop = aboutSection.offsetTop; // #accessの位置を取得

    window.scrollTo({
        top: offsetTop, // #accessの位置までスクロール
        behavior: 'smooth'
    });
});


// フッターのボタン
const footerTopButton = document.querySelector('#footer button');
// クリックした時の位置を取得
footerTopButton.addEventListener('click', () => {
    window.scrollTo({
        top: 0, 
        behavior: 'smooth' 
    });
});