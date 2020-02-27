<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="page-ttl">
  <div class="wrap">
    <p>- sitemap -</p>
    <h2>サイトマップ</h2>
  </div>
</section>

<section id="article" class="mt-3">
  <div class="wrap">
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
      <li><a href="<?php echo $home ?>/sitemap">サイトマップ</a></li>
    </ul>
  </div>
</section>

<?php get_footer();
