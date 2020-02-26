<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>


<section id="campaign">
    <?php
    $arg = array(
      'posts_per_page' => 1,
      'orderby' => 'date',
      'order' => 'DESC',
      'post_type' => 'campaign',
    );
    $posts = get_posts($arg);
    if ($posts): ?>
    <?php foreach ($posts as $post): setup_postdata($post);
    ?>
    <div class="wrap">
      <div class="">
        <div class="img-wrap">
          <img src="<?php the_field( 'img' ); ?>" alt="<?php the_field( 'ttl' ); ?>">
        </div>
        <div class="txt-wrap">
          <h3><?php the_field( 'ttl' ); ?></h3>
          <p class="money"><?php the_field( 'money_01' ); ?><span><?php the_field( 'money_02' ); ?></span>円</p>
          <p class="dur">実施機関：<?php the_field( 'duration' ); ?></p>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
    <?php endif; wp_reset_postdata(); ?>
</section>

<section id="cta" class="mb-2 mt-2">
  <div class="wrap">
    <div class="cta-bg">
      <div class="contant">
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/footer/logo_fff.png" alt="白のロゴ">
        </div>
        <p>働く女性のキャリアアップを<br>応援する「これから…」</p>
        <div class="btn">
          <a href="https://kyoshin-korekara.etudes.jp/jp/top/dashboard">今すぐ受講！</a>
        </div>
      </div>
    </div>
  </div>
</section>

</main>
<!-- メインコンテンツ終了 -->
<!-- フッター -->
<footer>
  <div class="footer-top">
    <ul>
      <li><a href="<?php echo $home ?>/about">これから…とは</a></li>
      <li><a href="<?php echo $home ?>/testinfo">試験情報</a></li>
      <li><a href="<?php echo $home ?>/schedule">合格スケジュール</a></li>
      <li><a href="<?php echo $home ?>/voice">受講者の声</a></li>
      <li><a href="<?php echo $home ?>/plan">料金プラン</a></li>
      <li><a href="<?php echo $home ?>/system">機能紹介</a></li>
      <li><a href="<?php echo $home ?>/contact">お問い合わせ</a></li>
    </ul>
    <ul>
      <li><a href="<?php echo $home ?>/news">お知らせ</a></li>
      <li><a href="<?php echo $home ?>/faq">よくあるご質問</a></li>
    </ul>
    <ul class="wrap mt-2 mb-2">
      <li><a href="<?php echo $home ?>/pp">プライバシーポリシー</a></li>
      <li><a href="<?php echo $home ?>/term">利用規約</a></li>
      <li><a href="<?php echo $home ?>/law">特定商取引法に基づく表記</a></li>
    </ul>
  </div>
  <small>© 2020  KYOSHIN.</small>
</footer>
<!-- フッター終了 -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
<script src="<?php echo $wp_url; ?>/lib/js/jquery.fatNav.min.js"></script>
<script src="<?php echo $wp_url; ?>/lib/js/slick.js"></script>
<script src="<?php echo $wp_url; ?>/lib/js/app.js"></script>
<?php wp_footer(); ?>
</body>
</html>
