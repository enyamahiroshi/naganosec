(function($) {

  const activeClass = "is-active";

/* --------------------------------------------------
  inview
-------------------------------------------------- */
  $(".js-fadeUp").on("inview", function () {
    $(this).addClass(activeClass);
  });

/* --------------------------------------------------
  開閉
-------------------------------------------------- */
  const ocButton = $('.js-tgl-ocButton');
  const ocTarget = $('.js-oc-target');

  ocTarget.hide();

  ocButton.on('click', function () {
    if ($(this).hasClass(activeClass)) {
      $(this).removeClass(activeClass);
      $(this).next(ocTarget).slideToggle('fast');
    } else {
      $(this).addClass(activeClass);
      $(this).next(ocTarget).slideToggle('fast');
    }
  });

/* --------------------------------------------------
  採用情報：つづきを読むボタン処理
-------------------------------------------------- */
var abridgementTxt = function(){
  //$(openTxt).hide();
  $(this).parent().toggle().parents('.senpai_txt').next(openTxt).slideToggle();
}
var hideTxt = function(){
  $(this).parents(openTxt).slideToggle().prev().find('.openclosewrap').slideToggle();
}
var openTxt = '.abridgement_txt';
var openBtn = '.openBtn';
var closeBtn = '.closeBtn';
$(openBtn).on('tap click', abridgementTxt);
$(closeBtn).on('tap click', hideTxt);
$(openTxt).hide();
$(openBtn).show();

/* --------------------------------------------------
  ページトップへボタン
-------------------------------------------------- */
var topBtn = $('.btn_page_top');
topBtn.hide();
$(window).scroll(function () {
  if ($(this).scrollTop() > 400) {
    topBtn.fadeIn(300,"swing");
  } else {
    topBtn.fadeOut(300,"swing");
  }
});
// スクロールしてトップへ
topBtn.click(function () {
$('body,html').animate({
  scrollTop: 0
}, 200);
return false;
});

/* --------------------------------------------------
  ページ内アンカー スムーズスクロール
-------------------------------------------------- */
// $('a[href^=#]').click(function(){
//   var speed = 600;
//   var href= $(this).attr("href");
//   var target = $(href === "#" || href === "" ? 'html' : href);
//   var position = target.offset().top;
//   $("html, body").animate(
//     {scrollTop:position - 120}, speed, "swing"
//   );
//   return false;
// });

/* --------------------------------------------------
  別ページのアンカーリンクにも対応 + 固定メニューの分アンカー位置をずらす
-------------------------------------------------- */
$(function(){
  //URLのハッシュ値を取得
  var urlHash = location.hash;
  //ハッシュ値があればページ内スクロール
  if(urlHash) {
    //スクロールを0に戻す
    $('body,html').stop().scrollTop(0);
    setTimeout(function () {
      //ロード時の処理を待ち、時間差でスクロール実行
      scrollToAnker(urlHash) ;
    }, 100);
  }
  //通常のクリック時
  $('a[href^="#"]').click(function() {
    //ページ内リンク先を取得
    var href= $(this).attr("href");
    //リンク先が#か空だったらhtmlに
    var hash = href == "#" || href == "" ? 'html' : href;
    //スクロール実行
    scrollToAnker(hash);
    //リンク無効化
    return false;
  });
  // 関数：スムーススクロール
  // 指定したアンカー(#ID)へアニメーションでスクロール
  function scrollToAnker(hash) {
    var target = $(hash);
    var headerHeight = 180; //固定ヘッダーの高さ
    var position = target.offset().top - headerHeight; //ターゲットの座標からヘッダの高さ分引く
    $('body,html').stop().animate({scrollTop:position}, 500);
  }
});

/* --------------------------------------------------
  アクセス：Google Map にオーバーレイしているボックスをクリックで消す
-------------------------------------------------- */
$('.gmap_click_act_box').on('click touchend', function(){
  $(this).css({display:'none'});
});

/* ▼スマホ時 */
/* --------------------------------------------------
  telリンクを有効にする
-------------------------------------------------- */
var ua = navigator.userAgent.toLowerCase();
var isMobile = /iphone/.test(ua)||/android(.+)?mobile/.test(ua);
if (!isMobile) {
    $('a[href^="tel:"]').on('click', function(e) {
        e.preventDefault();
    });
}

/* --------------------------------------------------
  ristページへ追随バナー：2021.01.13
-------------------------------------------------- */
  const tglbtn = $('.js-cls-btn');
  const trg = $('.bnr_risk');
  tglbtn.on('tap click', function () {
    trg.fadeOut();
    return false;
  });


})(jQuery);
