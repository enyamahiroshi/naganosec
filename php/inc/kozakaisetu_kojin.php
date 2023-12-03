<?php //口座開設に必要な書類等（個人） ?>
<section class="acc_personal active">
  <div class="acc_head_txt">
    <p>2016年1月より証券会社への個人番号（マイナンバー）の提示が法令で定められました。<br>口座開設のお申し込みの際に「申込書」等のご記入とともに、以下の確認書が必要となります。</p>
    <ul class="acc_head_list">
      <li>個人番号<span class="small_txt">（マイナンバー）</span>確認書 … 1種類</li>
      <li>本人確認書 … 1〜2種類　　</li>
    </ul>
  </div>
  <table class="acc_tbl acc_tbl---personal">
    <tr>
      <th>
        <div class="acc_thbox"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/acc_p_i-mynumber.png" alt="マイナンバー確認書類イメージ" class="img-mynumber">
        <em>マイナンバーを確認するための書類</em></div>
      </th>
      <td>
        <h5>次のうちのいずれか<strong>1種類</strong>をご用意ください。</h5>
        <ul class="list_style_disc">
          <li>個人番号カード<span class="small_txt">（本人確認書類と兼ねることができます）</span></li>
          <li>通知カード</li>
          <li>マイナンバーの記載された住民票の写し<span class="small_txt">（発行日より６ヶ月）</span></li>
        </ul>
      </td>
    </tr>
    <tr>
      <th>
        <div class="acc_thbox"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/acc_p_i-inkan.png" alt="ご印鑑" class="img-inkan">
        <em>ご印鑑</em></div>
      </th>
      <td>
        <h5>お届け印<span class="small_txt">（諸手続きの際に押印いただくご印鑑です。）</span></h5>
        <p class="small_txt">※スタンプ印は不可となります。</p>
      </td>
    </tr>
    <tr>
      <th>
        <div class="acc_thbox"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/acc_p_i-menkyo.png" alt="運転免許証イメージ" class="img-menkyo">
        <em>本人確認書類</em></div>
      </th>
      <td>
        <h5>顔写真が<strong>有るものは1種類、無いものは2種類</strong>をご用意ください。</h5>
        <div class="acc_honnin">
          <dl class="acc_kao_ari">
            <dt><span>A</span>顔写真が<em>有る</em>場合</dt>
            <dd>
              <span class="small_txt">※以下から1種類</span>
              <ul class="list_style_disc">
                <li>運転免許証</li>
                <li>個人番号カード</li>
                <li>パスポート<span class="small_txt">（有効期限内であること）</span></li>
              </ul>
            </dd>
          </dl>
          <dl class="acc_kao_nashi">
            <dt><span>B</span>顔写真が<em>無い</em>場合</dt>
            <dd>
              <span class="small_txt">※以下から異なる２種類</span>
              <ul class="list_style_disc">
                <li>各種健康保険証</li>
                <li>住民票の写し<span class="small_txt">（発行日より６ヶ月以内のもの）</span></li>
                <li>印鑑登録証明書<span class="small_txt">（発行日より６ヶ月以内のもの）</span><br><span class="txt_nado">等</span></li>
              </ul>
            </dd>
          </dl>
        </div>
      </td>
    </tr>
    <tr>
      <th>
        <div class="acc_thbox"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/acc_p_i-ginko.png" alt="銀行通帳 キャッシュカード イメージ" class="img-ginko">
        <em>金融機関口座がわかるもの</em></div>
      </th>
      <td>
        <h5>ご本人名義の通帳やキャッシュカード</h5>
        <p class="small_txt">（証券口座からの送金や株式配当金などを受取るための金融機関の口座番号がわかるものをご用意ください。）</p>
      </td>
    </tr>
    <tr class="no_cont">
      <th>
        <div class="acc_thbox"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/acc_p_i-u20.png" alt="未成年者イメージ" class="img-i-u20">
        <em>未成年者の方</em></div>
      </th>
      <td>
        <ul class="list_style_disc">
          <li>未成年者の取引に関する同意書</li>
          <li>親権者の本人確認書類</li>
          <li>印鑑証明書</li>
          <li>続柄確認書類</li>
        </ul>
      </td>
    </tr>
    <!-- tr class="no_cont">
      <th>
        <div class="acc_thbox"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/acc_p_i-u20.png" alt="未成年者イメージ" class="img-i-u20">
        <em>未成年者の方</em></div>
      </th>
      <td>
        <h5>非課税適用確認交付申請書 兼 口座開設届出書
又は<br/>非課税口座簡易開設届出書</h5>
        <p class="small_txt">（2019年1月以降）</p>
      </td>
    </tr -->
  </table>
  <?php //ご注意とお願い ?>
  <div class="acc_attention">
    <h6>【ご注意とお願い】</h6>
    <ul class="list_style_disc">
      <li>「非課税口座簡易開設届出書」によりお申込みされた場合は、即日にNISA口座を開設し買付することが可能ですが、事後に二重口座であったことが判明した場合、「NISA口座」で買付けした上場株式等は当初から「一般口座」で買付けたものとして
取扱われ、配当所得及び譲渡所得等について課税等の申告が必要になります。</li>
      <li>海外赴任等により日本の非居住者となられた場合は、当社で継続してお取引はできません。原則として、口座を閉鎖させていただくことになります。また、特定口座やNISA口座等も廃止などの手続をさせていただきます。</li>
      <li>提示いただきます本人確認書類はご来店の際に原本をお持ちください。</li>
    </ul>
  </div>
</section>
