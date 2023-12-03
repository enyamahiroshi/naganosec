<?php get_header(); ?>

<p class="emphasis">NISAは年齢によって開設できる口座が異なります。</p>

<?php //▼▼▼ NISA ▼▼▼ ?>
<div class="sec_title sec_title---nisa">20才以上の方のための</div>

<?php //セクション - NISA（ニーサ）とは ?>
<section class="sec">

  <h2 class="headline"><span>NISA（ニーサ）とは</span></h2>

  <p class="emphasis">NISA（少額投資非課税制度）</p>
  <p>NISA口座で購入した上場株式や投資信託等の値上がり益および、その配当金、普通分配金などが、最長5年間非課税となる制度です。年間120万円まで購入することが出来ます。日本に住む20歳以上の方が対象です。<br>未成年の方には<a class="link_cap" href="#jr_nisa">ジュニアNISA</a>口座があります。</p>

  <div class="content_image"><img class="img-nisa" src="<?php echo get_stylesheet_directory_uri(); ?>/img/nisa/img_nisa.png" alt="NISAとは"></div>


</section><?php //.sec ?>


<?php //セクション - NISAのポイント ?>
<section class="sec">

  <h2 class="headline"><span>NISAのポイント</span></h2>

  <table class="tbl_typeA tbl_typeA---blue">
    <tr>
      <th scope="row">口座を開設できる方</th>
      <td>口座開設する年の1月1日時点において満20歳以上で、日本国内にお住まいの方</td>
    </tr>
    <tr>
      <th scope="row">非課税となる対象</th>
      <td>
        <p>NISA口座で新規購入した上場株式や投資信託、ETF、REIT等の配当金・普通分配金・譲渡益。</p>
        <ul class="list_style_asterisk small_txt">
          <li>信用取引、債券、公社債投資信託などは対象ではありません。</li>
          <li>配当金等を非課税で受け取るためには「株式数比例配分方式」の選択が必要です。配当は証券会社を通じて証券口座に入金されます。</li>
        </ul>
      </td>
    </tr>
    <tr>
      <th scope="row">年間の非課税投資枠</th>
      <td>年間120万円まで。その年、非課税枠が残ってしまっても、次年度には繰越せません。</td>
    </tr>
    <tr>
      <th scope="row">非課税期間</th>
      <td>投資した年から最大5年間。途中で売却することは可能ですが、その売却枠は再投資には使えません。5年間売却しなかった枠は、新たな非課税投資枠への移管（ロールオーバー）で継続して保有が可能です。</td>
    </tr>
    <tr>
      <th scope="row">口座開設できる期間</th>
      <td>平成26年（2014年）～平成35年（2023年）までの10年間、開設が可能です。</td>
    </tr>
    <tr>
      <th scope="row">NISAは一人一口座</th>
      <td>NISA口座は複数開設することができません。一つの金融機関を決めて開設します。その勘定年にまだ購入していない場合は、1年ごと（一つの非課税管理勘定ごと）に金融機関の変更は可能です。</td>
    </tr>
  </table>
  <ul class="list_style_disc small_txt">
    <li>上場株式等を売却等（譲渡）したことにより生じた損失は、他の口座（一般口座・特定口座）等の利益と相殺（損益通算）はできません。</li>
    <li>投資信託の分配金のうち「特別分配金」は元本の払い戻しに相当し、課税口座（一般口座・特定口座）においても、もともと非課税でありNISAの非課税のメリットを享受できません。</li>
    <li>海外転勤等で日本の非居住者となられる場合は、NISA口座は廃止となります。</li>
  </ul>

</section><?php //.sec ?>


<?php //セクション - NISA口座の開設 ?>
<section class="sec">

  <h2 class="headline"><span>NISA口座の開設</span></h2>

  <div class="bording_bloc2">NISA口座開設に必要な書類： <!-- br class="no_pc" --><br><em>非課税適用確認交付申請書 兼 口座開設届出書 <br>又は<br>非課税口座簡易開設届出書（2019年1月以降）</em></div>

  <p>NISA口座の開設は証券口座開設が必要になります。</p>

  <?php //口座開設 タブ ?>
  <div class="acc_tab_title acc_tab_title---personal"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/acc_p_i-man.png" alt="個人マーク">口座開設に必要な書類等（個人のお客様）</div>
  <?php //口座開設読み込み ?>
  <div class="acc_wrap">
  <?php include('inc/kozakaisetu_kojin.php'); ?><?php //（個人） ?>
  </div>

</section><?php //.sec ?>



<?php //▼▼▼ ジュニアNISA ▼▼▼ ?>
<div class="sec_title sec_title---jr_nisa" id="jr_nisa">0才～19才の方のための</div>

<?php //セクション - ジュニアNISA（未成年者少額投資非課税制度） ?>
<section class="sec">

  <h2 class="headline headline---green"><span>ジュニアNISA（未成年者少額投資非課税制度）</span></h2>
  <p>ジュニアNISAは日本にお住いの0才～19才までの未成年者のための非課税口座です。年間80万円まで購入することが可能です。株式、投資信託等の譲渡益、およびその配当金、普通分配金などが、最長5年間非課税になる制度です。</p>

</section><?php //.sec ?>


<?php //セクション - ジュニアNISA制度のポイント ?>
<section class="sec">

  <h2 class="headline headline---green"><span>ジュニアNISA制度のポイント</span></h2>

  <table class="tbl_typeA tbl_typeA---green">
    <tr>
      <th scope="row">口座を開設できる方</th>
      <td>口座開設する年の1月1日時点において満19歳以下で、日本国内にお住まいの方</td>
    </tr>
    <tr>
      <th scope="row">非課税となる対象</th>
      <td>
        <p>ジュニアNISA口座で新規購入した上場株式や投資信託、ETF、REIT等の配当金・普通分配金・譲渡益。</p>
        <ul class="list_style_asterisk small_txt">
          <li>信用取引、債券、公社債投資信託などは対象ではありません。</li>
          <li>配当金等を非課税で受け取るためには「株式数比例配分方式」の選択が必要です。配当は証券会社を通じて証券口座に入金されます。</li>
        </ul>
      </td>
    </tr>
    <tr>
      <th scope="row">年間の非課税投資枠</th>
      <td>新規投資額は年間80万円まで</td>
    </tr>
    <tr>
      <th scope="row">非課税期間</th>
      <td>
        <p>最長5年間、途中売却可能（ただし、売却部分の枠は再利用不可）</p>
        <span class="small_txt">＊新たな非課税投資枠への移管（ロールオーバー）による継続保有が可能です。</span>
      </td>
    </tr>
    <tr>
      <th scope="row">口座開設できる期間</th>
      <td>平成28年（2016年）4月～平成35年（2023年）12月</td>
    </tr>
    <tr>
      <th scope="row">ジュニアNISAは<br>一人一口座</th>
      <td>ジュニアNISA口座は複数開設することができません。一つの金融機関を決めて開設します。その勘定年にまだ購入していない場合は、1年ごと（一つの非課税管理勘定ごと）に金融機関の変更は可能です。</td>
    </tr>
    <tr>
      <th scope="row">運用管理者</th>
      <td>口座開設者ご本人（未成年者）の二親等以内（両親・祖父母等）</td>
    </tr>
    <tr>
      <th scope="row">払出し制限</th>
      <td>
        <p>3月31日時点で18歳である年の1月1日以降はお引き出しが可能となります。</p>
        <span class="small_txt">ただし、災害等のやむを得ない事由の場合は、払出し可能です。</span>
      </td>
    </tr>
  </table>

</section><?php //.sec ?>


<?php //セクション - ジュニアNISA口座の開設 ?>
<section class="sec">

  <h2 class="headline headline---green"><span>ジュニアNISA口座の開設</span></h2>

  <?php //口座開設 タブ ?>
  <div class="acc_tab_title acc_tab_title---u20"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/acc_p_i-man.png" alt="個人マーク">口座開設に必要な書類等（個人のお客様）</div>
  <?php //口座開設読み込み ?>
  <div class="acc_wrap">
  <?php include('inc/kozakaisetu_kojin_u20.php'); ?><?php //（個人：未成年者） ?>
  </div>

</section><?php //.sec ?>


<?php //セクション - その他の事項 ?>
<section class="sec">

  <h2 class="headline headline---green"><span>その他の事項</span></h2>
  <ul class="list_style_disc">
    <li>ジュニアNISA口座で運用する資金は、口座開設者本人（未成年者）に帰属する資金に限定されます。</li>
    <li>上場株式等を売却等（譲渡）したことにより生じた損失は、他の口座（一般口座・特定口座）等の利益と相殺（損益通算）はできません。（課税未成年者口座内で生じた損失の損益通算は可能）</li>
    <li>投資信託の分配金のうち「特別分配金」は元本の払い戻しに相当し、課税口座（一般口座・特定口座）においても、そもそも非課税でありジュニアNISAの非課税のメリットを享受できません。</li>
    <li>払出し制限内の払出しついては、災害等を除き過去の利益に対して課税されます。また、払出し制限内の払出しを行うには、ジュニアNISA口座を廃止することになります。</li>
    <li>平成35年12月末以降、当初の非課税期間（5年間）の満了を迎えても一定の金額までは、20歳になるまで継続管理勘定内で引き続き非課税で保有できます。</li>
    <li><span class="important">長期海外留学等、日本の非居住者となられる場合は、ジュニアNISA口座の非課税口座での継続できません。</span></li>
  </ul>

</section><?php //.sec ?>

<?php get_footer(); ?>
