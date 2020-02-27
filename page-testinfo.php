<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="info" class="mt-3">
  <div class="pnk_bg pb-2">
    <div class="wrap">
      <h2 class="txt-c pt-2 mb-2">保育士試験の情報</h2>
      <div class="table-01">
      <?php
      $arg = array(
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'info',
      );
      $posts = get_posts($arg);
      if ($posts): ?>
      <?php foreach ($posts as $post): setup_postdata($post);
      ?>
        <dl class="ac">
          <dt><?php the_field( 'year' ); ?>前期(<?php the_field( 'day_01_01' ); ?>,<?php the_field( 'day_01_02' ); ?>,<?php the_field( 'day_01_03' ); ?>)</dt>
          <dd>
            <h3>前期(1回目)試験 筆記試験</h3>
            <h4><?php the_field( 'day_01_01' ); ?></h4>
            <div class="table"><?php the_field( 'timetable_01_01' ); ?></div>
            <h4><?php the_field( 'day_01_02' ); ?></h4>
            <div class="table"><?php the_field( 'timetable_01_02' ); ?></div>
            <h3>前期(1回目)試験 筆記試験</h3>
            <p><?php the_field( 'day_01_03' ); ?></p>
          </dd>
        </dl>
        <dl class="ac">
          <dt><?php the_field( 'year' ); ?>後期(<?php the_field( 'day_02_01' ); ?>,<?php the_field( 'day_02_02' ); ?>,<?php the_field( 'day_02_03' ); ?>)</dt>
          <dd>
            <h3>後期(2回目)試験 筆記試験</h3>
            <h4><?php the_field( 'day_02_01' ); ?></h4>
            <div class="table"><?php the_field( 'timetable_02_01' ); ?></div>
            <h4><?php the_field( 'day_02_02' ); ?></h4>
            <div class="table"><?php the_field( 'timetable_02_02' ); ?></div>
            <h3>後期(2回目)試験 筆記試験</h3>
            <p><?php the_field( 'day_02_03' ); ?></p>
          </dd>
        </dl>
      <?php endforeach; ?>
      <?php endif; wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
  <div class="wrap">
    <div class="table-02 pt-2">
      <dl class="ac">
        <dt>受験料</dt>
        <dd>12,700円（税込）＋250円（郵送料）＝12,950円</dd>
      </dl>
      <dl class="ac">
        <dt>受験資格</dt>
        <dd>１．大学卒業者
          <br>２．大学中退又は在学中で62単位修得済み又は習得見込みがあると学校長が認めた方。
          <br>３．短大卒業
          <br>４．短大在学中で卒業見込みがある
          <br>５．2年以上通う専門学校卒業
          <br>６．2年以上通う専門学校に在学中で卒業見込みがある
          <br>７．平成3年3月31日以前に高校卒業
          <br>８．平成8年3月31日以前に保育科高校卒業
          <br>９．中学・高校卒業後（同等の資格を有する方含む）児童福祉施設において2年以上かつ2880時間以上従事し実務経験を積んだ方
          <br>１０．中学卒業後、児童福祉施設において5年以上かつ7200時間以上従事した方
          <br>１１．平成３年（1991年）3月31日前までに高校を卒業された方</dd>
      </dl>
    </div>
  </div>
</section>

<div class="ttl-img schedule">
  <div class="ttl-img-bg">
    <img src="<?php echo $wp_url ?>/lib/images/testinfo/icon_schedule.png" alt="schedule">
    <p>schedule</p>
  </div>
</div>

<section id="schedule" class="bg-gray pt-4 mb-3">
  <div class="wrap">
    <h2 class="ttl2">どうやって<br><span class="maker">これから保育士</span>で合格したの？</h2>
    <p class="txt-c mb-2">Aさんの場合</p>
    <ul class="">
      <li>
        <div class="ttl">
          <p>試験まで<span>4週間</span></p>
          <h3>まずは動画で基礎を勉強</h3>
        </div>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/testinfo/01.png" alt="合格までの様子">
        </div>
        <p>知識をインプットしたあとはひたすら一問一答!間違った問題は正解するまで解き続けました。スマホでできるので、ゲーム感覚で楽しく勉強できました。</p>
      </li>
      <li>
        <div class="ttl">
          <p>試験まで<span>3週間</span></p>
          <h3>解説動画で知識を深める</h3>
        </div>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/testinfo/02.png" alt="合格までの様子">
        </div>
        <p>過去問を解く前に、重要ポイントを動画で学びました。実際の試験問題や自分がつまづきそうなところを解消していきました。</p>
      </li>
      <li>
        <div class="ttl">
          <p>試験まで<span>2週間</span></p>
          <h3>1問1答を繰り返す</h3>
        </div>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/testinfo/03.png" alt="合格までの様子">
        </div>
        <p>知識をインプットしたあとはひたすら一問一答!間違った問題は正解するまで解き続けました。スマホでできるので、ゲーム感覚で楽しく勉強できました。</p>
      </li>
      <li>
        <div class="ttl">
          <p>試験まで<span>1週間</span></p>
          <h3>過去問にチャレンジ</h3>
        </div>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/testinfo/04.png" alt="合格までの様子">
        </div>
        <p>総仕上げとして過去問を解きました。間違った問題はすぐに解答と解説が確認できるので、わからない部分が放ったらかしにならずに、理解まで辿り着くことができました。</p>
      </li>
      <li>
        <div class="ttl">
          <p>試験<span>本番</span></p>
          <h3>試験の待ち時間で一問一答</h3>
        </div>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/testinfo/05.png" alt="合格までの様子">
        </div>
        <p>試験当日は移動中や待ち時間にもスマホで最終確認!このとき解いた問題が実際に試験にも出たので嬉しかったです。</p>
      </li>
      <li>
        <div class="ttl">
          <p>緊張の<span>発表日</span></p>
          <h3>合格！</h3>
        </div>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/testinfo/06.png" alt="合格までの様子">
        </div>
        <p>無事に合格!スマホだけで勉強を進められたので、仕事をしながらでも合格できました。eラーニングは初めてだったけど、かなり便利なので他の人にもおすすめしたいです。</p>
      </li>
    </ul>
  </div>
</section>

<?php get_footer();
