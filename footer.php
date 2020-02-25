<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
</main>
<!-- メインコンテンツ終了 -->
<!-- フッター -->
<footer>
</footer>
<!-- フッター終了 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php echo $wp_url; ?>/lib/js/jquery.fatNav.min.js"></script>
<script src="<?php echo $wp_url; ?>/lib/js/app.js"></script>
<?php wp_footer(); ?>
</body>
</html>
