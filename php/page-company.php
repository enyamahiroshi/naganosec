<?php get_header(); ?>

<section class="rinen_sec">
  <h2 class="company_title">企業理念<span>基本理念 / 経営方針</span></h2>
  <div class="company_rinen">
    <div class="rinen_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company/img_gaikan.jpg" alt="長野證券外観"></div>
    <div class="rinen_box">
      <div class="rinen">
        <h3>資産形成の良きアドバイザーとして</h3>
        <p>個人の資産形成においても企業の資金調達・運用においてもボーダーレス化が進展している今日、私たちは、直接金融市場の担い手として、グローバルな視点からの適切なアドバイスを心掛けています。</p>
      </div>
      <div class="rinen">
        <h3>地域と共に、地元の皆様と共に</h3>
        <p>これが1900年創業以来貫き続ける私たちのモットーです。<br class="no_sp">積み重ねた信用は一世紀を超える歴史を刻んでいます。</p>
      </div>
      <div class="rinen">
        <h3>地場証券としての誇りをもって</h3>
        <p>創業以来培ってきたお客様との信頼関係を大切にし、<br class="no_sp">地域に密着した“近くて親切”な証券会社として歩み続けます。</p>
      </div>
    </div>
  </div>
</section><?php //.sec ?>


<section class="rinen_sec">
  <h2 class="company_title">代表あいさつ</span></h2>
  <div class="company_pregident">
    <div class="aisatsu_wrap">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company/img_pregident.jpg" alt="長野證券株式会社 代表取締役社長 山田一隆">
      <p>このたびは、長野證券ホームページにアクセスしていただき、誠にありがとうございます。<br>長野證券は明治33年（西暦1900年）の創業以来<?php echo ( date("Y") - 1900 ); ?>年に亘り、「地域と共に、地元の皆様と共に」を企業理念として長野の地で歩んで参りました。</p>
      <p>長野證券の第一の使命は、「お客さまの最善の利益」の追求です。<br>私たちは日々対面営業という特長を最大限に生かし、お客様ご自身が「お金について」満足や安心を感じていただける心の通った金融サービスを目指します。最初のご相談からアフターフォロー・各種お問い合わせまで、全社員がお客様目線でのサービスに努めてまいりたいと思います。</p>
      <p>今はネット全盛で情報も溢れんばかりです。<br>また様々な場面で自動化が進み、人の手を借りることも少なくなりつつありますが、不安や不満が消えることはありません。</p>
      <p>長野證券はお客様と共に築いてきたよき伝統を守りつつ、時代の変遷に応じて変革を起こしながら、お客様に寄り添い、真のパートナーであり続けたいと願います。<br>お客様のご期待に添うべく、これからも邁進してまいります。</p>
      <p>これからも変わらぬご愛顧を賜りますようお願い申し上げます。</p>
      </p>
      <div class="pregident_sign"><span class="sign_com">長野證券株式会社</span><br><span class="sign_sub">代表取締役社長</span><span class="sign_name">山田　一隆</span></div>
    </div>
  </div>
</section><?php //.sec ?>


<ul class="company_menu">
  <li class="menu-company_profile"><a href="<?php echo esc_url(home_url()); ?>/company/about/#company_profile"><span></span><em>会社概要</em></a></li>
  <li class="menu-business_lines"><a href="<?php echo esc_url(home_url()); ?>/company/about/#business_lines"><span></span><em>事業案内</em></a></li>
  <li class="menu-history"><a href="<?php echo esc_url(home_url()); ?>/company/about/#history"><span></span><em>沿革</em></a></li>
  <li class="menu-office"><a href="<?php echo esc_url(home_url()); ?>/company/office/"><span></span><em>店舗案内</em></a></li>
</ul>

<?php get_footer(); ?>