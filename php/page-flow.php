<?php get_header(); ?>

<?php //セクション - 流れ ?>
<section class="sec">

  <p>お取引には、証券取引口座のご準備が必要です。<br>口座開設の流れ、必要書類をご確認いただき、お申込みください。</p>

  <div class="flow_wrap">
    <ul class="list_style_num">

      <?php //flow ?>
      <li class="num num-1">
        <h2>お近くの長野證券店舗にご来店</h2>
        <p>ご本人様のご来店をお願いします。ご来店が難しい場合は、お近くの店舗までお気軽にご相談ください。申込書等の郵送やご自宅なにお伺いするなど、アドバイザーが承ります。長野県内の長野銀行各支店でも口座開設手続きができます。詳しくは お近くの店舗 までお気軽にお問合せください。</p>
        <div class="btn_wrap">
          <a class="btn_find_office" href="<?php echo esc_url(home_url()); ?>/company/office/">近くの長野證券店舗を探す<i class="fa fa-angle-right" aria-hidden="true"></i></a>
        </div>
        <?php //口座開設 タブ ?>
        <div class="acc_tab_title acc_tab_title---personal"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/acc_p_i-man.png" alt="個人マーク">口座開設に必要な書類等（個人のお客様）</div>
        <?php //口座開設読み込み ?>
        <div class="acc_wrap">
        <?php include('inc/kozakaisetu_kojin.php'); ?><?php //（個人） ?>
        </div>
        <img class="arrow_down" src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/arrow_down.png" alt="↓矢印">
      </li>
      <?php //flow ?>
      <li class="num num-2">
        <h2>ご本人様による申込書のご記入・ご捺印</h2>
        <p>特定口座、NISA口座もあわせてお申し込みいただけます。</p>
        <img class="arrow_down" src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/arrow_down.png" alt="↓矢印">
      </li>
      <?php //flow ?>
      <li class="num num-3">
        <h2>口座開設審査（当社所定の審査を行います）</h2>
        <p>審査の結果、ご希望にそえない場合があります。あらかじめご了承ください。</p>
        <img class="arrow_down" src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/arrow_down.png" alt="↓矢印">
      </li>
      <?php //flow ?>
      <li class="num num-4">
        <h2>口座開設完了  お取引スタート</h2>
        <p>お買い付けの場合は、事前にご入金が必要になります。</p>
      </li>

    </ul>
  </div>

</section><?php //.sec ?>

<?php get_footer(); ?>