(function($) {


/* --------------------------------------------------
  Slider-Pro: オプション（http://on-ze.com/archives/2717）（https://masamitsu.biz/slider-pro/）
-------------------------------------------------- */
$( '#slider' ).sliderPro({
  responsive: true,
  width: 1100, //横幅
  height: 460,
  autoplay: true, //自動再生
  autoplayDelay: 5500, //自動再生の間隔 初期値：5000
  autoplayOnHover: 'pause', //マウスカーソルをスライダーにホバーさせたときの挙動（一時停止は'pause'、完全停止は'stop'、何も起こらないときは'none'で指定 初期値：'pause'）
  startSlide: 0, //スライダーをどの画像で始めるかを選択します。 初期:0
  fade: false, //フェード処理 初期値：false
  fadeOutPreviousSlide: true, //前のスライドがフェードアウトしたとき次のスライドをフェードインさせる 初期値：true
  fadeDuration: 500, //フェードに要するアニメーションの時間 初期値：500
  imageScaleMode: 'cover', //画像のスケールモード 'cover'、'contain'、'exact'、'none'
  buttons: false, //ナビゲーションボタンを出すか
  arrows: true, //左右の矢印
  fadeArrows: false, //矢印ボタンをフェードイン・フェードアウトで表示
  slideDistance: 0, //スライド同士の距離 ピクセルで指定 初期値：10
  visibleSize: '100%', //前後のスライドを表示（値を大きくすると前後のスライドの見える範囲が広がる）
  thumbnailWidth: 170, //サムネイルサイズ
  thumbnailHeight: 60, //サムネイルサイズ
  thumbnailPointer: true, //ポインタが選択されたサムネイルの表示 初期値：false
  //レスポンシブ用に細かく調整
  breakpoints: {
    768: {//ブレークポイント
      thumbnailWidth: 85,
      thumbnailHeight: 30,
      thumbnailArrows: true, //サムネイル用の矢印
    }
  }
});


})(jQuery);
