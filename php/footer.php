</section><!-- .main_content -->

<?php //お気軽にお問い合わせください（表示するページとしないページがある）
wp_reset_query();
if( !( is_front_page() || is_page( array('company','about','office','contact') ) ) ):?>
<section class="contact_here_wrap">
  <div class="contact_here">
    <div class="contact_here_txt">
      <h5>お気軽にお問い合わせください</h5>
      <?php //※ページによって文章を変える
      if(is_page(array(
        'about','account','beginner','bond','company','e-service','e-service_demo','etf-etn','flow','fund','hifumi-plus','j-reit','office','stock','tokuteikoza',
      ))):
      ?>
      <p>商品の特徴・活用法など専任アドバイザーが店頭・電話・訪問でのご相談を承っております。お気軽にお問い合わせください。</p>
      <?php elseif( is_page(array(
        'commission','nisa','bestexecution','policy','customer','riekisouhan','hansyakaiteki','site_policy','privacy_policy'
      )) || is_search() ): ?>
      <p>各店舗の窓口・電話・訪問でのご相談を承っております。<br class="no_sp">お気軽にお問い合わせください。</p>
      <?php else: ?>
      <p>各店舗の窓口・電話・訪問でのご相談を承っております。<br class="no_sp">お気軽にお問い合わせください。</p>
      <?php endif; ?>
    </div>
    <div class="contact_here_btn"><a class="btn btn---contact" href="<?php echo esc_url(home_url()); ?>/contact/"><i class="fa fa-envelope-o" aria-hidden="true"></i>お問い合わせはこちら</a></div>
  </div>
</section>
<?php endif; ?>

<?php // バナーエリア ?>
<section class="banner_area">
  <ul class="banner_link">
    <li class="banners">
      <a href="http://www.jsda.or.jp/nisa/index.html" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banners/bnr-nisa.png" alt="NISAホームページへ"></a>
    </li>
    <li class="banners">
      <a href="http://www.jsda.or.jp/jikan/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banners/bnr-e104.png" alt="投資の時間"></a>
    </li>
    <li class="banners">
      <a href="https://www.jsda.or.jp/gakusyu/edu/index.html" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banners/bnr-jsda.jpg" alt="先生、資産形成ってなんですか？"></a>
    </li>
    <li class="banners">
      <a href="https://www.jsda.or.jp/anshin/inv_alerts/toushisagi/index.html" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banners/bnr-toushisagi.png" alt="日本証券業協会ホームページへ"></a>
    </li>
    <li class="banners">
      <a href="http://money-bu-jpx.com/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banners/bnr-manebu.png" alt="東証マネ部ホームページへ"></a>
    </li>
  </ul>
</section>

<?php // 規約リンク ?>
<section class="kiyaku_menu_wrap">
<?php // カスタムメニューの呼び出し
wp_nav_menu( array ( 'menu'=>'kiyaku_menu', 'menu_class'=>'menu', 'container'=>'nav' , 'items_wrap'=>'<ul class="%2$s">%3$s</ul>' ) ); ?>
</section>

<?php // フッター情報 ?>
<footer>
  <section class="footer_head">
    <h5 class="footer_logo">長野證券株式会社</h5>
    <ul class="office_menu">
      <li><a href="<?php echo esc_url(home_url()); ?>/company/office/#honten">本店</a></li>
      <li><a href="<?php echo esc_url(home_url()); ?>/company/office/#nakano">中野支店</a></li>
      <li><a href="<?php echo esc_url(home_url()); ?>/company/office/#suzaka">須坂支店</a></li>
      <li><a href="<?php echo esc_url(home_url()); ?>/company/office/#yoshida">吉田支店</a></li>
      <li><a href="<?php echo esc_url(home_url()); ?>/company/office/#matsumoto">松本支店</a></li>
      <li><a href="<?php echo esc_url(home_url()); ?>/company/office/#suwa">諏訪支店</a></li>
      <li><a href="<?php echo esc_url(home_url()); ?>/company/office/#okaya">岡谷営業所</a></li>
      <li><a href="<?php echo esc_url(home_url()); ?>/company/office/#chino">茅野営業所</a></li>
    </ul>
  </section>
  <section class="footer_menu">
    <?php // カスタムメニューの呼び出し
    wp_nav_menu( array ( 'menu'=>'footer_menu', 'menu_class'=>'menu', 'container'=>'nav' , 'items_wrap'=>'<ul class="%2$s">%3$s</ul>' ) ); ?>
  </section>
  <section class="footer_bottom">
    <p>金融商品取引業者 関東財務局長（金商）第125号<br class="no_pc">加入協会：日本証券業協会</p>
    <p class="copyright">&copy; NAGANO SECURITIES Co.,LTD.</p>
  </section>
</footer>

<?php // ページトップへ ?>
<div class="btn_page_top"><span><i class="fa fa-angle-up" aria-hidden="true"></i></span></div>

<?php // ristページへ追随バナー：2021.01.13
if(is_front_page()): ?>
<div class="bnr_risk"><a href="./risk/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banners/bnr-risk.png" alt="リスク・手数料等紹介ページへ"></a><span class="js-cls-btn"></span></div>
<?php endif; ?>

<?php // 現在のテンプレートを表示
// global $template;
// $template_name = basename($template, '.php');
// echo $template_name;
?>

<?php wp_footer(); ?>
</body>
</html>
