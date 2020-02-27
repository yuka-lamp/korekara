<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="top-about" class="mt-3">
  <div class="wrap">
    <div class="left">
      <h2>働く女性のキャリアアップを<br>応援する<span class="maker">「これから…」</span></h2>
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/top/about.png" alt="働く女性のキャリアアップを応援する「これから…」">
      </div>
    </div>
    <div class="right mt-2">
      <p>これから…を運営している株式会社京進は学習塾として創業44年を迎えました。私たちは「教育を通じて社会に貢献したい」「人づくり教育を実践していく」という想いから、女性ひとりひとりのキャリアアップをサポートします。</p>
      <p>これから…では京進が学習塾などで培った独自のノウハウと最新のeラーニングシステムを活用し資格取得に向けた試験対策を提供することで社会で活躍する人材の養成に貢献します。 システムを活用し資格取得に向けた試験対策を提供することで社会で活躍する人材の養成に貢献します。</p>
      <div class="btn">
        <a href="<?php echo $home ?>/about">Read more</a>
      </div>
    </div>
  </div>
</section>

<div class="ttl-img">
  <div class="ttl-img-bg">
    <img src="<?php echo $wp_url ?>/lib/images/top/icon_service.png" alt="service">
    <p>service</p>
  </div>
</div>

<section id="top-service" class="bg-gray pt-4">
  <div class="wrap">
    <h2 class="ttl2 mb-2"><span class="maker">試験対策講座について</span></h2>
    <ul class="slide_01">
      <li>
        <img src="<?php echo $wp_url ?>/lib/images/top/slide/01.png" alt="画面イメージ">
      </li>
      <li>
        <img src="<?php echo $wp_url ?>/lib/images/top/slide/01.png" alt="画面イメージ">
      </li>
      <li>
        <img src="<?php echo $wp_url ?>/lib/images/top/slide/01.png" alt="画面イメージ">
      </li>
    </ul>
    <div class="txt-wrap conma-txt">
      <p>京進eラーニング保育士講座では、9科目の基本を押さえたオリジナル学習教材とプロ講師による講義動画を24時間受講可能。スマホやパソコンさえ あればスキマ時間で学習できます。</p>
    </div>
    <div class="btn">
      <a href="<?php echo $home ?>/system">Read more</a>
    </div>
  </div>
</section>

<?php get_footer();
