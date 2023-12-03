<?php get_header(); ?>

<?php //セクション - お取引口座について ?>
<section class="sec">

  <h2 class="headline"><span>お取引口座について</span></h2>

  <p class="emphasis">口座開設時に口座の種類をお選びいただきます</p>

  <div class="bording_bloc">
    <ul class="list_style_org list_style_org---green">
      <li>特定口座<span class="small_txt">（源泉徴収あり）</span></li>
      <li>特定口座<span class="small_txt">（源泉徴収なし）</span></li>
      <li>一般口座</span></li>
    </ul>
  </div>

</section><?php //.sec ?>


<?php //セクション - 特定口座について ?>
<section class="sec">

  <h2 class="headline"><span>特定口座について</span></h2>

  <dl class="d_list1">
    <dt>1. 「年間取引報告書」で確定申告が簡単です</dt>
    <dd>特定口座での売買記録の管理や損益計算を長野證券が行い、結果を「年間取引報告書」でお知らせします。</dd>
    <dt>2. さらに「源泉徴収あり」選択で、確定申告不要です</dt>
    <dd>納税を長野證券が行いますので、お客様ご自身での確定申告が不要となります。<br class="no_sp">配偶者控除・扶養控除や健康保険料等に影響はありません。</dd>
    <dt>3. 「源泉徴収なし」を選択した場合</dt>
    <dd>発行された「年間取引報告書」を利用して、お客様ご自身で確定申告を行います。</dd>
    <dt>4. 当社で相続・贈与で取得した株式は特定口座で管理することができます</dt>
    <dd><p>当社で相続（贈与）した株式につきましては、取得証明書の確認をすることで、特定口座で管理が可能です。</p><p><span class="important">※NISA口座の開設がまだでしたら、同時にお申込みいただきますと、手続きが簡単です。</span><br>（<a class="link_cap" href="<?php echo esc_html(home_url()); ?>/nisa/">NISA口座</a>は一定の額までの投資にかかる税金が非課税になる制度です。）</p>
</dd>
  </dl>

  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tokuteikoza/img_koza_flow.png" alt="特定口座と一般口座のフロー">

</section><?php //.sec ?>


<?php //セクション - 特定口座の開設について ?>
<section class="sec">

  <h2 class="headline"><span>特定口座の開設について</span></h2>

  <p>特定口座は口座開設と同時に開設できます。</p>

  <?php //口座開設 タブ ?>
  <div class="acc_tab_title acc_tab_title---personal"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/acc_p_i-man.png" alt="個人マーク">口座開設に必要な書類等（個人のお客様）</div>
  <?php //口座開設読み込み ?>
  <div class="acc_wrap">
  <?php include('inc/kozakaisetu_kojin.php'); ?><?php //（個人） ?>
  </div>

</section><?php //.sec ?>

<?php get_footer(); ?>