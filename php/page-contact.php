<?php get_header(); ?>

<?php //セクション ?>
<section class="contact_sec">

  <p class="intro">長野證券のホームページをご利用いただきましてありがとうございます。<br class="no_sp">当社へのお問い合わせは電話にてお受付しております。</p>

  <div class="uketsuke">
    <h6>［受付時間］</h6>
    <div class="uketsuke_time">9:00 〜 17:00</div>
    <span>※土・日・祝日・年末年始　休み</span>
  </div>

  <table class="tbl_contact">
    <tr>
      <th scope="row">各種お手続き、資産運用、お取引について</th>
      <td>
        <span class="small_txt">お近くの長野證券の店舗まで</span>
        <div class="office_menu_wrap">
          <table class="office_list">
            <tr>
              <th><span>北　信</span></th>
              <td>
                <ul class="office_menu">
                  <li><a href="<?php echo esc_url(home_url()); ?>/office/#honten">本店</a></li>
                  <li><a href="<?php echo esc_url(home_url()); ?>/office/#nakano">中野支店</a></li>
                  <li><a href="<?php echo esc_url(home_url()); ?>/office/#suzaka">須坂支店</a></li>
                  <li><a href="<?php echo esc_url(home_url()); ?>/office/#yoshida">吉田支店</a></li>
                </ul>
              </td>
            </tr>
            <tr>
              <th><span>中　信</span></th>
              <td>
                <ul class="office_menu">
                  <li><a href="<?php echo esc_url(home_url()); ?>/office/#matsumoto">松本支店</a></li>
                </ul>
              </td>
            </tr>
            <tr>
              <th><span>南　信</span></th>
              <td>
                <ul class="office_menu">
                  <li><a href="<?php echo esc_url(home_url()); ?>/office/#suwa">諏訪支店</a></li>
                  <li><a href="<?php echo esc_url(home_url()); ?>/office/#okaya">岡谷営業所</a></li>
                  <li><a href="<?php echo esc_url(home_url()); ?>/office/#chino">茅野営業所</a></li>
                </ul>
              </td>
            </tr>
          </table>
        </div>
      </td>
    </tr>
    <tr>
      <th scope="row">お取引に関するご不明な点等について</th>
      <td>
        業務管理部<br>
        <div class="tel"><a href="tel:0262283113">026-228-3113</a></div>
      </td>
    </tr>
    <tr>
      <th scope="row">採用について</th>
      <td>
        総務部　採用担当<br>
        <div class="tel"><a href="tel:0262282511">026-228-2511</a></div>
      </td>
    </tr>
    <tr>
      <th scope="row">その他のお問い合わせは</th>
      <td>
        <div class="tel"><a href="tel:0262282301">026-228-3003</a><span class="xxsmall_txt">（代表）</span></div>
      </td>
    </tr>
  </table>

</section><?php //.sec ?>

<?php get_footer(); ?>