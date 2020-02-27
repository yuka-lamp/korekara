<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="page-ttl" class="about">
  <div class="wrap">
    <p>- plan -</p>
    <h2>料金プラン</h2>
  </div>
</section>

<section id="sub-mv" class="plan">
  <div class="flex">
    <div class="img-wrap pc-only">
      <img src="<?php echo $wp_url ?>/lib/images/plan/mv/mv.png" alt="メインビジュアル">
    </div>
    <div class="ttl">
      <div class="ttl-wrap">
        <div class=""><p>月々1,980円〜</p></div>
        <div class=""><p>はじめられる</p></div>
        <div class=""><p>保育士試験対策講座</p></div>
      </div>
    </div>
  </div>
</section>

<section id="plan" class="mt-5">
  <div class="wrap">
    <ul>
      <li>
        <a href="https://kyoshin-korekara.etudes.jp/jp/top/course_group_detail/D664E30F-4A76-4CEC-81B6-1CEC6DF8C0CD" target="_blank">
          <div class="txt-wrap">
            <p>まずは14日間お試し！</p>
            <h3>受講体験コース</h3>
            <p>料金：<span>980</span>円</p>
            <p>受講期間：14日間</p>
          </div>
        </a>
      </li>
      <li>
        <a href="https://kyoshin-korekara.etudes.jp/jp/top/course_group_detail/F8C3E264-4F3E-4294-8A63-C91D54022F87" target="_blank">
          <div class="txt-wrap">
            <p>今日から本格的に！</p>
            <h3>受講本格コース</h3>
            <p>料金：月額<span>3,960</span>円</p>
            <p>受講期間：4ヶ月</p>
          </div>
        </a>
      </li>
    </ul>
  </div>
</section>

<div class="flow ttl-img">
  <div class="ttl-img-bg">
    <img src="<?php echo $wp_url ?>/lib/images/plan/icon_flow.svg" alt="flow">
    <p>flow</p>
  </div>
</div>

<section id="flow" class="bg-gray pt-4 mb-3">
  <div class="wrap">
    <h2 class="ttl2"><span class="maker">受講の流れ</span></h2>
    <ul class="mt-2">
      <li>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/plan/01.png" alt="流れのイラスト">
        </div>
        <h3 class="mt-1">購入するボタンをタップ</h3>
        <p>「購入する」ボタンをタップすると受講可能な講座が一覧で表示されます。</p>
      </li>
      <li>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/plan/02.png" alt="流れのイラスト">
        </div>
        <h3 class="mt-1">コースを選択</h3>
        <p>希望するコースの受講内容と受講期限を確認して、選択します。</p>
      </li>
      <li>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/plan/03.png" alt="流れのイラスト">
        </div>
        <h3 class="mt-1">商品購入をタップ</h3>
        <p>クレジットカードが使えるのでその場でお手軽に決済して、今すぐ受講できます。</p>
      </li>
      <li>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/plan/04.png" alt="流れのイラスト">
        </div>
        <h3 class="mt-1">登録フォームへ入力</h3>
        <p>新規受講者登録ページから必要な情報を入力し、ご登録ください。</p>
      </li>
      <li>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/plan/05.png" alt="流れのイラスト">
        </div>
        <h3 class="mt-1">購入完了メールからログイン</h3>
        <p>決済完了後、ご登録のメールアドレスに届いた「購入完了メール」から、これからマイページにログインします。</p>
      </li>
      <li>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/plan/06.png" alt="流れのイラスト">
        </div>
        <h3 class="mt-1">登録後すぐに受講開始！</h3>
        <p>ログインしたらすぐに受講可能!動画や一問一答などお好きなコンテンツをお好きな順番で受講できます。</p>
      </li>
    </ul>
  </div>
</section>

<?php get_footer();
