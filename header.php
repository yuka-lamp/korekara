<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html lang="ja">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/jquery.fatNav.min.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/slick.css"/>
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/slick-theme.css"/>
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/header.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/footer.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/common.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/sub-mv.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/top.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/about.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/testinfo.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/voice.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/plan.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/system.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/faq.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/news.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/contact.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/article.css">
<?php wp_head(); ?>
<?php if (!is_user_logged_in()): ?>
<!-- ここにGAトラッキングタグ -->
<?php endif; ?>
</head>

<body>

<!-- ヘッダー -->
<header>

  <!-- スマホヘッダー -->
  <div id="sp-header">
    <div class="header-wrap">
      <div class="content">
        <a href="<?php echo $home ?>"><img class="logo" src="<?php echo $wp_url ?>/lib/images/header/logo.png" alt="これから…のロゴ"></a>
      </div>
    </div>
    <div class="fat-nav">
      <div class="fat-nav__wrapper">
        <nav class="gnav">
          <div class="gnav__wrap">
            <ul class="gnav__menu">
              <li><a href="https://elearning.ko-re-ka-ra.com/korekara/user/hoiku"><img src="<?php echo $wp_url ?>/lib/images/header/login-sp.png" alt="人のアイコン">会員の方はこちら</a></li>
              <li><a href="https://kyoshin-korekara.etudes.jp/jp/top/dashboard" target="_blank"><img src="<?php echo $wp_url ?>/lib/images/header/app-sp.png" alt="お申し込みのアイコン">お申し込み</a></li>
            </ul>
            <ul class="gnav__menu">
              <li><a href="<?php echo $home ?>/about">about<span>これから…とは</span></a></li>
              <li><a href="<?php echo $home ?>/testinfo">testinfo<span>試験情報</span></a></li>
              <li><a href="<?php echo $home ?>/testinfo#schedule">schedule<span>合格スケジュール</span></a></li>
              <li><a href="<?php echo $home ?>/voice">voice<span>受講者の声</span></a></li>
              <li><a href="<?php echo $home ?>/plan">plan<span>料金プラン</span></a></li>
              <li><a href="<?php echo $home ?>/system">system<span>機能紹介</span></a></li>
              <li><a href="<?php echo $home ?>/contact">contact<span>お問い合わせ</span></a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <!-- スマホヘッダー終了 -->

  <!-- PCヘッダー -->
  <nav id="pc-header" class="flex pc-only">
    <div class="content">
      <div class="img-wrap">
        <a href="<?php echo $home ?>"><img class="logo" src="<?php echo $wp_url ?>/lib/images/header/logo.png" alt="これから…のロゴ"></a>
      </div>
      <ul>
        <li><a href="<?php echo $home ?>/about">about<span>これから…とは</span></a></li>
        <li><a href="<?php echo $home ?>/testinfo">testinfo<span>試験情報</span></a></li>
        <li><a href="<?php echo $home ?>/testinfo#schedule">schedule<span>合格スケジュール</span></a></li>
        <li><a href="<?php echo $home ?>/voice">voice<span>受講者の声</span></a></li>
        <li><a href="<?php echo $home ?>/plan">plan<span>料金プラン</span></a></li>
        <li><a href="<?php echo $home ?>/system">system<span>機能紹介</span></a></li>
        <li><a href="<?php echo $home ?>/contact">contact<span>お問い合わせ</span></a></li>
      </ul>
      <ul>
        <li><a href="https://elearning.ko-re-ka-ra.com/korekara/user/hoiku"><img src="<?php echo $wp_url ?>/lib/images/header/login-pc.png" alt="人のアイコン">ログイン</a></li>
        <li><a href="https://kyoshin-korekara.etudes.jp/jp/top/dashboard" target="_blank"><img src="<?php echo $wp_url ?>/lib/images/header/app-pc.png" alt="お申し込みのアイコン">お申し込み</a></li>
      </ul>
    </div>
  </nav>
  <!-- PCヘッダー終了 -->
  <div class="fix-btn">
    <a href="https://kyoshin-korekara.etudes.jp/jp/top/dashboard" target="_blank"><img src="<?php echo $wp_url ?>/lib/images/header/fix_btn.png" alt="今すぐ受講する"></a>
  </div>
</header>
<!-- ヘッダー終了 -->

<!-- メインコンテンツ -->
<main>
  <?php if (is_home() || is_front_page()): ?>
  <div id="mv">
    <div class="img-wrap">
      <img src="<?php echo $wp_url ?>/lib/images/top/mv/mv_ttl.png" alt="スマホひとつで保育士筆記試験対策">
    </div>
  </div>
<?php else: ?>

<?php endif; ?>
