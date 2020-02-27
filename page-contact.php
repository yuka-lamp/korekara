<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="contact-faq" class="sec">
<div class="wrap">
<p class="txt-c">お客様からのよくあるご質問とその回答を掲載しています。<a href="<?php echo $home ?>/faq/" class="main-color">よくあるご質問</a><br>上記をご覧になっても疑問が解決しない場合はお問い合わせフォームか電話番号へお問い合わせ下さい。</p>
</div>
</section>

<section id="contact-form">
<div class="wrap">
<?php echo do_shortcode('[contact-form-7 id="46" title="お問合せフォーム"]'); ?>
</div>
</section>

<?php get_footer();
