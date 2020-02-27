<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="page-ttl">
  <div class="wrap">
    <p>- news -</p>
    <h2>お知らせ</h2>
  </div>
</section>

<section id="news" class="mb-5">
<div class="wrap">
  <ul class="list">
    <?php if (have_posts()): while (have_posts()):
    the_post();
    $t = get_the_title();
    if (mb_strlen($t, 'UTF-8') > 28) {
        $t = mb_substr($t, 0, 28, 'UTF-8').'…';
    }
    $day = get_the_date();
    ?>
    <li>
      <a href="<?php the_permalink(); ?>" class="">
        <div class="txt-wrap">
        <p><?php echo $day; ?></p>
        <h3><?php echo $t; ?></h3>
        </div>
      </a>
    </li>
    <?php endwhile; endif; ?>
  </ul>
<?php get_template_part('pagenav'); ?>
</div>
</section>


<?php get_footer();
