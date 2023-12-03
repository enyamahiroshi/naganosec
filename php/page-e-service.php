<?php get_header(); ?>

<?php //セクション - ログイン ?>
<section class="sec e-service_login">

  <div class="es_login_box">
    <?php // e-照会ログイン ?>
    <a class="btn btn---e_shokai_login" href="https://espc.jip-jet.ne.jp/login.con?code=186">e-照会ログイン<i class="fa fa-sign-in" aria-hidden="true"></i></a>
    <p>ログインに必要なパスワード等を紛失された場合はお取引店の担当者にお尋ねください。</p>
    <div class="pdf_box">
      <a class="btn_pdf_download" href="<?php echo esc_url(home_url()); ?>/pdf/e-service-rule.pdf" target="_black"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>利用規定</a>
      <a class="btn_pdf_download" href="<?php echo esc_url(home_url()); ?>/pdf/e-service-manual.pdf" target="_black"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>マニュアル</a>
      <p>こちらから「利用規定」「確認書兼マニュアル」<br class="no_sp">がダウンロードできます。</p>
    </div>
  </div>

</section><?php //.sec ?>


<?php //セクション - e-照会とは ?>
<section class="sec">

  <h2 class="headline"><span>e-照会とは</span></h2>
  <div class="what_es">
    <p>お客様のパソコンから、ご自身のお取引の履歴、保有株の状況などを閲覧できるサービスです。ご利用は無料です。ご利用のようすをデモ画面でご確認ください。<br><em>※株式の売買などのインターネット取引はできません。</em></p>
    <div class="to_demo">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/img_pc.png" alt="PCモニタ">
      <a class="btn btn---showdemo" href="<?php echo esc_url(home_url()); ?>/e-service/e-service_demo/">デモ画面を見る</a>
    </div>
  </div>

</section><?php //.sec ?>

<?php //セクション - e-照会のメリット ?>
<section class="sec">
  <h2 class="headline"><span>e-照会のメリット</span></h2>
  <ul class="list_style_num">
    <?php //flow ?>
    <li class="num num-1">
      お客様のライフスタイルに合わせてお好きな時間<sup class="important">＊</sup>に照会できます。 <span class="small_txt"><span class="important">＊</span>3:00〜5:45を除く</span>
    </li>
    <?php //flow ?>
    <li class="num num-2">
      前日の終値を元に時価を確認できます。お客様の預り資金の一覧、お取引の履歴、保有資産の評価損益などが照会できます。
    </li>
    <?php //flow ?>
    <li class="num num-3">
      見やすい一覧表示でお手持ち株の見直し、ポートフォリオ形成の一助にお役立てください。
    </li>
  </ul>
</section><?php //.sec ?>

<?php //セクション - お申し込み ?>
<section class="sec">
  <h2 class="headline"><span>お申し込み</span></h2>
  <p>このサービスのご利用には事前のお申し込みが必要になります。利用規定をご了承いただいたうえ、申込書をご提出ください。ログインに必要なパスワードを発行いたします。<br>サービスに関してはお気軽にお取引店の担当者にお尋ねください。</p>
</section><?php //.sec ?>

<?php get_footer(); ?>