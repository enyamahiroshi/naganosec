<?php get_header(); ?>

<?php //セクション - ETF ／ ETN ?>
<section class="sec">
  <h2 class="headline"><span>ETF ／ ETN</span></h2>
  <div class="for_customer_box">
    <ul class="list_style_check">
      <li>コストを抑えて投資を始めたい方（特に投資初心者向け）</li>
      <li>ポートフォリオにアクセントをつけたい方（レバレッジやヘッジなど）</li>
    </ul>
  </div>
  <p class="our_support"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/arrow_r-green.png" alt="→矢印">「長野證券」は専任アドバイザーがお客様の投資をサポートします。</p>
</section><?php //.sec ?>

<?php //セクション - ETF（上場投資信託） ?>
<section class="sec">
  <h2 class="headline"><span>ETF（上場投資信託）</span></h2>
  <p class="emphasis">ETFは証券取引所に上場している「投資信託」です。</p>
  <p>TOPIX（東証株価指数）などの株価指数、商品先物取引、海外の株価指数などの特定の指数（インデックス）と連動することを目指し運用・設計されている金融商品です。</p>
</section><?php //.sec ?>

<?php //セクション - ETFと株式・投資信託の違い ?>
<section class="sec">
  <h3 class="cap_title cap_title---orange">ETFと株式・投資信託の違い</h3>
  <div class="scroll_tbl_wrap">
    <table class="tbl_typeA tbl_typeA---etf">
      <thead>
        <tr>
          <th></th>
          <th scope="col">株式</th>
          <th scope="col" class="cell_etf">ETF</th>
          <th scope="col">通常の投資信託</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <td colspan="4">※上表は一般的な特徴を比較したものであり、すべてを網羅したものではありません。</td>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <th scope="row">信託報酬</th>
          <td>なし</td>
          <td class="cell_etf">あり<br><span class="small_txt">（通常の投資信託と比較し<br>低い傾向がある）</span></td>
          <td>あり</td>
        </tr>
        <tr>
          <th scope="row">分散投資</th>
          <td>大きい資金が必要</td>
          <td class="cell_etf">比較的少額の資金で可能</td>
          <td>比較的少額の資金で可能</td>
        </tr>
        <tr>
          <th scope="row">証券取引所への上場</th>
          <td>あり</td>
          <td class="cell_etf">あり</td>
          <td>なし</td>
        </tr>
        <tr>
          <th scope="row">取引方法</th>
          <td>証券取引所で売買<br><span class="small_txt">（指値・成行など）</span></td>
          <td class="cell_etf">証券取引所で売買<br><span class="small_txt">（指値・成行など）</span></td>
          <td>販売会社で申込み</td>
        </tr>
        <tr>
          <th scope="row">取引価格</th>
          <td>市場価格<br><span class="small_txt">（リアルタイムで変動）</span></td>
          <td class="cell_etf">市場価格<br><span class="small_txt">（リアルタイムで変動）</span></td>
          <td>特定日の基準価格<br><span class="small_txt">（申込み時点では未定）</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</section><?php //.sec ?>

<?php //セクション - ETFの特徴・魅力 ?>
<section class="sec">
  <h3 class="cap_title cap_title---orange">ETFの特徴・魅力</h3>
  <?php //特徴・魅力 ?>
  <table class="tokucho_tbl">
    <tr>
      <th><span>1</span>分散投資</th>
      <td>株式指数などを連動対象とするETFでは、分散投資効果によりリスク低減を図ることができます。</td>
    </tr>
    <tr>
      <th><span>2</span>運用コストが低い</th>
      <td>一般的には、投資信託と比べて信託報酬が安価です。</td>
    </tr>
    <tr>
      <th><span>3</span>値動きがシンプルで把握しやすい</th>
      <td>株式と同様に成行・指値注文が可能で、その時の取引所の時価で売買可能です。</td>
    </tr>
  </table>
  <p>欧米では個人投資家から機関投資家まで活用されている商品です。</p>
</section><?php //.sec ?>

<?php //セクション - ETN（指標連動証券） ?>
<section class="sec">
  <h2 class="headline"><span>ETN（指標連動証券）</span></h2>
  <p>ETNは日本語では「上場投資証券」または「指数連動証券」と呼ばれ、指数（インデックス）との連動性を保証する金融商品です。ETFと同様に証券取引所に上場しています。</p>
</section><?php //.sec ?>


<?php //セクション - ETF / ETNのリスク ?>
<section class="sec risk_bloc">
  <h4 class="risk_title">ETF / ETNのリスク</h4>
  <p>ETF、ETNは250銘柄以上が上場されています。組入有価証券の価格変動や、発行者および投資法人の経営・財務状況の変化およびそれらに関する外部評価の変化等により損失を被ることがあります。また、外貨建て資産で運用されるものの場合は、為替の変動や投資国の経済情勢や金融市場の動向等により損失を被ることがあります。先物取引を利用して通常の値動きの2倍の動きをさせるレバレッジ型やダブルインバース型のETFは、それだけ価格変動リスクが大きくなります。</p>
</section><?php //.sec ?>

<?php get_footer(); ?>