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

<section id="voice" class="mb-3 mt-2">
<div class="wrap">
  <ul class="list">
    <?php if (have_posts()): while (have_posts()):
    the_post();
    $t = get_the_title();
    $text = get_the_content();
    ?>
    <li>
      <h3><span class="maker"><?php echo $t; ?></span></h3>
      <p><?php echo $text; ?></p>
      <div class="user">
        <p><?php the_field( 'name' ); ?></p>
      </div>
    </li>
    <?php endwhile; endif; ?>
  </ul>
<?php get_template_part('pagenav'); ?>
</div>
</section>


<?php get_footer();
