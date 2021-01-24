<?php include('./header.php')?>
<main class="main-container">
    <section class="mv ofh" id="sec01">
        <div class="mv-base">
            <div class="mv-title">
                <h1 class="mv-title__text serif">KANA SEINO</h1>
            </div>
            <nav>
                <ul class="mv-lists d-f">
                    <li class="mv-list">
                        <a class="mv-list__link" href="#sec02">about</a>
                    </li>
                    <li class="mv-list">
                        <a class="mv-list__link" href="#sec03">portfolio</a>
                    </li>
                    <li class="mv-list">
                        <a class="mv-list__link" href="#sec04">contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- About -->
    <section class="about top-section" id="sec02">
        <div class="inner">
            <div class="sec-head">
                <div class="sec-head__title">
                    <h2 class="sec-head__title__text serif">About</h2>
                    <p>私について</p>
                </div>
            </div>
            <div class="about-contents d-f">
                <div class="about-content__profile">
                    <div class="about-content__image">
                        <img src="./assets/images/top/about_01.jpg" class="ofi" alt="">
                    </div>
                </div>
                <div class="about-content__desc">
                    <div class="profile-name">
                        <h3>清野　佳奈</h3>
                        <p>Kana Seino</p>
                    </div>
                    <ul class="profile-lists">
                        <li class=profile-list>出身：大阪府</li>
                        <li class=profile-list>趣味：Nettflix/fps/漫画/グルメ</li>
                        <li class=profile-list>希望職種：フロントエンジニア</li>
                    </ul>

                </div>
            </div>
            <div class="about-content__message">
                <p>2019年12月からProgate,ドットインストールを利用し、学習を始めました。<br>
                    現在、HTML/CSS/Sass/JavaScript/phpを学んでいます。<br>
                    2020年2月から長期インターンをはじめ、4月からコロナウイルスの影響により自宅学習を余儀なくされました。<br>
                    その後、8月まで課題を出していただき勉強を続けることで、第一目標であったクライアントの案件を実際に任せていただけることになり、10月からアルバイト生として現在働いています。</p>
            </div>
        </div>
    </section>
    <!-- portfolio -->
    <section class="portfolio top-section" id="sec03">
        <div class="inner">
            <div class="sec-head">
                <div class="sec-head__title">
                    <h2 class="sec-head__title__text serif">Portfolio</h2>
                    <p>制作作品</p>
                </div>
            </div>
            <div class="test-text">
                <p>※こちらはテスト用なのでリンクは繋いでいません。</p>
            </div>
            </div>
            <div class="portfolio-wrap">
                <ul class="portfolio-lists d-f">
                    <li class="portfolio-list">
                        <a href="./">
                            <div class="portfolio-list__image">
                                <img src="./assets/images/top/portfolio_01.jpg" class="ofi" alt="">
                            </div>
                        </a>
                    </li>
                    <li class="portfolio-list">
                        <a href="./">
                            <div class="portfolio-list__image">
                                <img src="./assets/images/top/portfolio_02.jpg" class="ofi" alt="">
                            </div>
                        </a>
                    </li>
                    <li class="portfolio-list">
                        <a href="./">
                            <div class="portfolio-list__image">
                                <img src="./assets/images/top/portfolio_03.jpg" class="ofi" alt="">
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
    </section>
    <!-- contact -->
    <section class="contact top-section" id="sec04">
        <div class="inner">
            <div class="sec-head">
                <div class="sec-head__title">
                    <h2 class="sec-head__title__text serif">Contact</h2>
                    <p>お問い合わせ</p>
                </div>
            </div>
            <div class="test-text">
                <p>※こちらはテスト用なのでリンクは繋いでいません。</p>
            </div>
           <ul class="contact-lists d-f">
               <li class="contact-list">
                   <a href="./">
                       <img src="./assets/images/common/mail.png" alt="">
                   </a>
               </li>
               <li class="contact-list">
                   <a href="./">
                       <img src="./assets/images/common/face-book.png" alt="">
                   </a>
               </li>
               <li class="contact-list">
                   <a href="./">
                       <img src="./assets/images/common/insta.png" alt="">
                   </a>
               </li>
           </ul>
        </div>
    </section>
</main>
<?php include('./footer.php')?>