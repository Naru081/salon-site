<?php
// データベース接続ファイルを読み込み
require_once __DIR__ . '/db_connect.php';

// データベース接続を取得
$pdo = getDatabaseConnection();

// お知らせのデータ取得クエリ
$query = "SELECT day, name, news FROM messages ORDER BY day DESC";
$stmt = $pdo->prepare($query);
$stmt->execute();

// メニュー表の画像データ取得クエリ
$imageQuery = "SELECT id, image_path FROM menu_images";
$imageStmt = $pdo->prepare($imageQuery);
$imageStmt->execute();

// 結果を取得
$newsItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
$menuImages = $imageStmt->fetchAll(PDO::FETCH_ASSOC);

?>

<?php
echo '<link rel="stylesheet" href="/css/style.css">';
?>
<?php
echo'<link rel="stylesheet" href="/css/popup.css">';
?>
<?php
echo '<script src="/java/index.java" defer></script>';
?>


<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kamiann.com</title>
    <meta name="description" content="隼人駅から近い美容室です。">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- リセットCSS -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <!-- BootstrapのCSS読み込み -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Googleフォント読み込み -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Kosugi+Maru&family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" 
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <!-- FontAwesomeの読み込み -->
    <script src="https://kit.fontawesome.com/80b6c9e945.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/popup.css">
    <!-- アニメーション追加　-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.css" type="text/css" media="all" />
</head>

<body>
    <!-- ヘッダー要素 -->
    <header id="header">
        <!-- トップメニュー -->
        <div class="navbar-nav nav-fill">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link top" href="#">TOP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link about" href="#">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link access" href="#">ACCESS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu" href="#">MENU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link news" href="#">NEWS</a>
                </li>
            </ul>
        </div>
    </header>



    <!-- メインコンテンツ -->
    <main id="main-content">

        <!-- トップ画像 -->
        <section id="top-image">
            <img src="/img/top.jpg" alt="店名と店の写真">
        </section>
         <!-- スマホ表示用 -->
        <section id="top-imagePh">
            <img src="./../img/top-imagePh.jpg" alt="店名と店の写真">
         </section>

        <!-- NEWS -->
        <section id="news">
            <h2 class="section-title">NEWS</h2>
            <h3 class="sub-titile">お知らせ</h3>
            <div class="news-list">
                <?php foreach ($newsItems as $index => $news): ?>
                    <div class="news-item">
                        <p class="news-day"><strong><?php echo htmlspecialchars($news['day'], ENT_QUOTES, 'UTF-8'); ?></strong></p>
                        <input type="checkbox" id="popup-<?php echo $index; ?>">
                        <label class="popup-open" for="popup-<?php echo $index; ?>">
                            <p class="news-name"><?php echo htmlspecialchars($news['name'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </label>  
                        <div class="popup-overlay">
                            <div class="popup-window">
                                <p class="news-mane"><?php echo nl2br(htmlspecialchars($news['news'], ENT_QUOTES, 'UTF-8')); ?></p>
                                <label class="popup-close" for="popup-<?php echo $index; ?>">
                                    <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="0" y1="0" x2="18" y2="18" stroke="black" stroke-width="3"></line>
                                        <line x1="0" y1="18" x2="18" y2="0" stroke="black" stroke-width="3"></line>
                                    </svg>
                                </label>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>


        <!-- ABOUT -->
        <section id="about">
            <h2 class="section-title">ABOUT</h2>
            <h3 class="sub-titile">店舗情報</h3>
            <div class="about-content">
                <div class="about-img">
                    <img src="/img/shop1.jpg" alt="店内の写真">
                </div>
                <div class="info">
                    <!-- 店舗の説明 -->
                    <div class="about-text">
                        <p>
                            初めての方でも安心してご来店いただけるよう、カウンセリングを大切にし、
                            お悩みやご希望にしっかりとお応えします。カットやカラーはもちろん、
                            髪や頭皮のケアにもこだわり、毎日がもっと楽しくなるスタイルをご提案。
                        </p>
                        <p>忙しい日常を忘れ、ホッと一息つけるひとときをお過ごしください。皆さまのご来店を心よりお待ちしております。</p>
                    </div>
                    <!-- 店舗の情報 -->
                    <table class="about-info">
                        <tr class="info-tal">
                            <th>TEL</th>
                            <td>0995-42-XXXX</td>
                        </tr>
                        <tr>
                            <th>営業時間</th>
                            <td>10:00〜20:00</td>
                        </tr>
                        <tr>
                            <th>定休日</th>
                            <td>第一週目と第四週目の月曜日</td>
                        </tr>
                        <tr>
                            <th>駐車場</th>
                            <td>有り(4台まで駐車可能)</td>
                        </tr>
                        <tr>
                            <th>住所</th>
                            <td>〒899-5106 鹿児島県霧島市隼人町内山田X-XX-XX</td>
                        </tr>
                    </table>
                    <div class="line">
                        <p>LINE予約</p>
                        <button type="button" class="linelink">
                            <a class="linelink" href="https://line.me/ti/p/aXy2ujKpEj" target="_blank"
                                rel="noopener noreferrer">友達追加する</a>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- MENU -->
        <section id="menu">
            <h2 class="section-title">MENU</h2>
            <h3 class="sub-titile">料金価格</h3>
            <div class="menu-text">
                <p class="menu-text">当店では、学割等の割引サービスを実施しています。気軽に、ご利用下さい。</p>
                <p class="menu-text">会計は、電子決済や、クレジットカードも対応可能です。</p>
            </div>
    <!-- メニュー画像データ -->
    <div class="menu-images">
        <?php foreach ($menuImages as $image): ?>
            <?php if ($image['id'] == 1): ?>
                <!-- デスクトップ用画像 -->
                <img src="<?php echo htmlspecialchars($image['image_path'], ENT_QUOTES, 'UTF-8'); ?>" alt="メニュー画像(PC)" class="desktop-image">
            <?php elseif ($image['id'] == 2): ?>
                <!-- スマホ用画像 -->
                <img src="<?php echo htmlspecialchars($image['image_path'], ENT_QUOTES, 'UTF-8'); ?>" alt="メニュー画像(スマホ)" class="mobile-image">
         <?php endif; ?>
        <?php endforeach; ?>
    </div>
        </section>

        <!-- ACCESS -->
        <section id="access">
            <h2 class="section-title">ACCESS</h2>
            <h3 class="sub-titile">MAP</h3>
            <!-- GoogleMapを挿入 -->
            <div class="googlemap">
                <!-- GoogleMapを挿入 -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3349.123456789012!2d130.7353461!3d31.7431335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x353efb8c92c25153%3A0x31f6056237455801!2z44CSODk5LTUxMDYg5bKh5bO255yM5bKh5bO25biC5a6J5bO255-z5biC5Lit5aSu5Yy65p2x5Yy65aSn5a2m!5e0!3m2!1sja!2sjp!4v1234567890123!5m2!1sja!2sjp"
                    title="Googleマップ - 髪庵の所在地" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>
    </main>

    <!-- フッダー要素 -->
    <footer id="footer">
        <!-- トップに戻る -->
        <div class="top">
            <button type="button">▲TOP</button>
        </div>
         <!-- SNSリンク -->
         <ul class="sns-links">
            <li><a href="https://x.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiamEifQ%3D%3D%22%7D">
                <i class="fa-brands fa-square-x-twitter fa-2x white-color faa-vertical animated-hover"></i></a></li>
            <li><a href="https://www.facebook.com/?locale2=ja_JP&_rdr">
                <i class="fa-brands fa-square-facebook fa-2x white-color faa-vertical animated-hover"></i></a></li>
            <li><a href="https://www.instagram.com/accounts/login/?next=%2Fpeter_gomez%2F&source=private_profile&locale=ja-JP">
                <i class="fa-brands fa-instagram fa-2x white-color faa-vertical animated-hover"></i></a></li>
        </ul>
        <!-- 店舗情報 -->
        <table class="info">
            <tr>
                <th>TEL</th>
                <td>0995-42-XXXX</td>
            </tr>
            <tr>
                <th>営業時間</th>
                <td>10:00〜20:00</td>
            </tr>
            <tr>
                <th>住所</th>
                <td>〒899-5106 鹿児島県霧島市隼人町内山田X-XX-XX</td>
            </tr>
        </table>
        <div class="copyright">
            <small>&copy;2010 髪庵</small>

        </div>
    </footer>
    <!-- BootstrapのJavaScript読み込み -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>
</body>

</html>