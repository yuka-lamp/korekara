<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="system-about-01" class="pt-4 mb-3">
  <div class="wrap">
    <p class="txt-c">これまでの学習ノウハウを生かした</p>
    <h2 class="ttl2"><span class="maker">脳科学に基づく得点UP学習法！</span></h2>
    <div class="img-wrap">
      <img src="<?php echo $wp_url ?>/lib/images/system/system.png" alt="脳科学に基づく得点UP学習法！">
    </div>
    <p class="pb-3">脳はインプットよりアウトプットを重要視します。テキストを読んでいる（インプット）と、新しく知ることが増えて覚えた感覚になりますが、記憶として脳に定着させるには、インプットの倍の分量で繰り返し問題を解く（アウトプット）ことが必要です。
インプット１に対してアウトプット2 で効率よく学習しましょう！</p>
  </div>
</section>

<section id="system-about-02" class="mb-3">
  <div class="wrap">
    <h2 class="ttl2 mb-1">学びのプロが<br>あなたの資格取得をサポート</h2>
    <div class="about-wrap">
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/system/about_02.png" alt="学びのプロがあなたの資格取得をサポート">
      </div>
      <div class="txt-c mb-1 mt-1">
        <img src="<?php echo $wp_url ?>/lib/images/system/kyoshin_logo.png" alt="京進">
      </div>
      <p class="">学習塾、英会話教室、日本語学校、保育園など、幼児から小学生・中学生・高校生・社会人までを対象に教育サービスを提供する総合教育企業。保育園は認可保育園を中心に全国で73園運営中。</p>
    </div>
  </div>
</section>

<section id="system" class="bg-gray pt-4 mb-3">
  <div class="wrap">
    <h2 class="ttl2">どうやって<br><span class="maker">これから保育士</span>で合格したの？</h2>

  </div>
</section>

<?php get_footer();
