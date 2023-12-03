<?php get_header(); ?>

<?php //セクション - こちらから ?>
<section class="sec">

  <h2 class="headline"><span>口座開設はお近くの長野證券店舗で承っています</span></h2>

  <p>口座開設のお手続きは、お近くの長野證券店舗にご来店、または担当アドバイザーの訪問にて承ります。<br><em>口座管理料は無料</em>です。下の「<a href="#koza_kaisetsu">口座開設に必要な書類等</a>」をよくお読みいただき必要書類のご提出をお願いします。<br>ご不明な点がございましたらお気軽にお問い合わせください。</p>

  <div class="to_office_list_wrap">
    <h4>長野證券店舗はこちらからご確認ください</h4>
    <div class="to_office_list_box">
      <table class="office_list">
        <tr>
          <th><span>北　信</span></th>
          <td>
            <ul class="office_menu">
              <li><a href="<?php echo esc_url(home_url()); ?>/company/office/#honten">本店</a></li>
              <li><a href="<?php echo esc_url(home_url()); ?>/company/office/#nakano">中野支店</a></li>
              <li><a href="<?php echo esc_url(home_url()); ?>/company/office/#suzaka">須坂支店</a></li>
              <li><a href="<?php echo esc_url(home_url()); ?>/company/office/#yoshida">吉田支店</a></li>
            </ul>
          </td>
        </tr>
        <tr>
          <th><span>中　信</span></th>
          <td>
            <ul class="office_menu">
              <li><a href="<?php echo esc_url(home_url()); ?>/company/office/#matsumoto">松本支店</a></li>
            </ul>
          </td>
        </tr>
        <tr>
          <th><span>南　信</span></th>
          <td>
            <ul class="office_menu">
              <li><a href="<?php echo esc_url(home_url()); ?>/company/office/#suwa">諏訪支店</a></li>
              <li><a href="<?php echo esc_url(home_url()); ?>/company/office/#okaya">岡谷営業所</a></li>
              <li><a href="<?php echo esc_url(home_url()); ?>/company/office/#chino">茅野営業所</a></li>
            </ul>
          </td>
        </tr>
      </table>
      <p class="note_type1">お近くに長野證券の店舗がない場合でも、長野県内の長野銀行各支店でも口座開設ができます。</p>
    </div>
  </div>

</section><?php //.sec ?>


<?php //セクション - はじめての方へ ?>
<section class="sec for_beginner">

  <div class="for_beginner_info">
    <h3><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/ico_beginner.png" alt="初心者マーク">はじめての方へ</h3>
    <p>投資自体がはじめての方、当社とのお取引がはじめての方、口座開設からお取引開始までの流れを知りたい方はこちらをご覧ください。</p>
  </div>
  <span class="step_arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/arrow_green.png" alt="↓"></span>
  <div class="btn_wrap btn_wrap---beginner">
    <a class="btn" href="<?php echo esc_url(home_url()); ?>/beginner/">投資がはじめての方</a>
    <a class="btn btn---yellowgreen" href="<?php echo esc_url(home_url()); ?>/flow/">口座開設からお取引までの流れ</a>
  </div>

</section><?php //.sec ?>


<?php //セクション - 口座開設に必要な書類等 ?>
<section class="sec">

  <h2 class="headline"><span>口座開設に必要な書類等（個人/法人）</span></h2>

  <?php //口座開設 タブ切り替え ?>
  <div class="acc_tab_wrap">
    <div class="acc_tab_title acc_tab_title---personal active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/acc_p_i-man.png" alt="個人マーク">個人のお客様</div>
    <div class="acc_tab_title acc_tab_title---corp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/acc_c_i-bill.png" alt="法人マーク">法人のお客様</div>
  </div>
  <?php //口座開設読み込み ?>
  <div class="acc_wrap">
  <?php include('inc/kozakaisetu_kojin.php'); ?><?php //（個人） ?>
  <?php include('inc/kozakaisetu_hojin.php'); ?><?php //（法人） ?>
  </div>

</section><?php //.sec ?>


<?php get_footer(); ?>