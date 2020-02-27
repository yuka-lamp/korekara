<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="page-ttl">
  <div class="wrap">
    <p>- faq -</p>
    <h2>よくあるご質問</h2>
  </div>
</section>

<section id="faq" class="sec">
  <div class="wrap">
    <div class="">
      <div class="table">
        <?php
        $arg = array(
          'posts_per_page' => -1,
          'orderby' => 'date',
          'order' => 'DESC',
          'post_type' => 'faq',
        );
        $posts = get_posts($arg);
        if ($posts): ?>
        <?php foreach ($posts as $post): setup_postdata($post);
        ?>
        <dl class="ac">
          <dt><?php the_field( 'q' ); ?></dt>
          <dd><?php the_field( 'a' ); ?></dd>
        </dl>
      <?php endforeach; ?>
      <?php endif; wp_reset_postdata(); ?>
      </div>
    </div>
</section>

<?php get_footer();
