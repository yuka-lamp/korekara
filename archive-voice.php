<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="page-ttl">
  <div class="wrap">
    <p>- voice -</p>
    <h2>合格者の声</h2>
  </div>
</section>

<section id="news" class="sec oblique ">
<div class="wrap">
  <ul class="list">
    <?php if (have_posts()): while (have_posts()):
    the_post();
    $t = get_the_title();
    if (mb_strlen($t, 'UTF-8') > 28) {
        $t = mb_substr($t, 0, 28, 'UTF-8').'…';
    }
    ?>
    <li>
      <a href="<?php the_permalink(); ?>" class="">
        <div class="txt-wrap">
        <h3><?php echo $t; ?></h3>
        <p><?php the_date(); ?></p>
        </div>
      </a>
    </li>
    <?php endwhile; endif; ?>
  </ul>
<?php get_template_part('pagenav'); ?>
</div>
</section>


<?php get_footer();
