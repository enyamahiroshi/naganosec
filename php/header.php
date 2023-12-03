<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/notosansjp.css">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <?php wp_head(); ?>
  <link rel="Shortcut Icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon">
</head>

<body <?php body_class(); ?>>

<header>
  <section class="header_cont">
    <div class="header_top">
      <div class="company_catch"><?php bloginfo('description'); ?></div>
      <?php // カスタムメニューの呼び出し
      wp_nav_menu( array ( 'menu'=>'sub_menu', 'menu_class'=>'menu', 'container'=>'nav' , 'items_wrap'=>'<ul class="%2$s">%3$s</ul>' ) ); ?>
    </div>
    <div class="header_middle">
      <a class="logo_wrap" href="<?php echo esc_url(home_url()); ?>/"><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/logo.png" alt="長野證券株式会社"></a>
      <?php // サイト内検索 ?>
      <div class="search_box"><?php get_search_form(); ?></div>
      <?php // e-照会ログイン ?>
      <a class="btn btn---e_shokai_login" href="<?php echo esc_url(home_url()); ?>/e-service/">e-照会ログイン<i class="fa fa-sign-in" aria-hidden="true"></i></a>
    </div>
    <?php // カスタムメニューの呼び出し
    wp_nav_menu( array ( 'menu'=>'global_menu', 'menu_class'=>'menu', 'container'=>'nav' , 'items_wrap'=>'<ul class="%2$s">%3$s</ul>' ) ); ?>
  </section>

  <?php // スマホ開閉メニュー - ボタン ?>
  <div class="btn_menu"><span></span></div>
  <?php // スマホ開閉メニュー - メニュー ?>
  <section class="s-menu">
    <?php // サイト内検索 ?>
    <div class="search_box"><?php get_search_form(); ?></div>
    <?php // e-照会ログイン ?>
    <a class="btn btn---e_shokai_login" href="<?php echo esc_url(home_url()); ?>/e-service/">e-照会ログイン<i class="fa fa-sign-in" aria-hidden="true"></i></a>
    <?php // カスタムメニューの呼び出し
    wp_nav_menu( array ( 'menu'=>'global_menu', 'menu_class'=>'menu', 'container'=>'nav' , 'items_wrap'=>'<ul class="%2$s">%3$s</ul>' ) );
    wp_nav_menu( array ( 'menu'=>'sub_menu', 'menu_class'=>'menu', 'container'=>'nav' , 'items_wrap'=>'<ul class="%2$s">%3$s</ul>' ) );
    wp_nav_menu( array ( 'menu'=>'kiyaku_menu', 'menu_class'=>'menu', 'container'=>'nav' , 'items_wrap'=>'<ul class="%2$s">%3$s</ul>' ) );
    wp_nav_menu( array ( 'menu'=>'footer_menu', 'menu_class'=>'menu', 'container'=>'nav' , 'items_wrap'=>'<ul class="%2$s">%3$s</ul>' ) ); ?>
    <?php // スマホ開閉メニュー - ボタン 閉じる ?>
    <div class="btn_menu btn_menu--close"><span></span></div>
  </section>
</header>

<?php if( is_front_page() ): //メインビジュアル - HOME ?>

  <section class="slider_wrap">
  <div class="slider-pro" id="slider">
    <div class="sp-slides">

      <?php //スライド画像 ?>
      <div class="sp-slide">
        <a href="https://hifumi.rheos.jp/fund/marugoto100" target="_blank" rel="noopener noreferrer">
          <img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/img/top/slide-hifumiworld2022.png" alt="まるごとひふみ100">
        </a>
      </div>
      <div class="sp-slide">
        <a href="https://www.tokiomarineam.co.jp/fund/635048.html" target="_blank">
          <img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/img/top/slide-ensemble2022.png" alt="円奏会">
        </a>
      </div>
      <div class="sp-slide">
        <a href="<?php echo esc_html(home_url()); ?>/commodity/usa/">
          <img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/img/top/slide-commodity_usa.png" alt="米国株式">
        </a>
      </div>
      <div class="sp-slide">
        <a href="https://naganosec.co.jp/tsumitate_life_nisa/">
          <img class="sp-image" src="https://naganosec.co.jp/wp/wp-content/uploads/2019/10/slide-camp20180522_tsumitate.png" alt="つみたてNISA,つみたてライフ">
        </a>
      </div>
      <?php /* 保管
      <div class="sp-slide">
        <a href="https://naganosec.co.jp/cashbackcampaign2023">
          <img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/img/top/slide-camp2023.png" alt="株式等移管手数料キャッシュバックキャンペーン">
        </a>
      </div>
      */ ?>
      <div class="sp-slide">
        <a href="<?php echo esc_html(home_url()); ?>/csr/">
          <img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/img/top/slide-sdgs.jpg" alt="長野県SDGs推進企業第1期登録">
        </a>
      </div>
      <div class="sp-slide">
        <a href="<?php echo esc_html(home_url()); ?>/recruit/">
          <img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/img/top/slide-rectuit.jpg" alt="採用情報">
        </a>
      </div>
      <?php /* 保管
      <div class="sp-slide">
        <a href="https://endowment.jp/" target="_blank" rel="noopener noreferrer">
          <img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/img/top/slide-camp20180420_gci.png" alt="GCIエンダウメントファンド">
        </a>
      </div>
      <div class="sp-slide">
        <a href="<?php echo esc_html(home_url()); ?>/company/about/#history">
          <img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/img/top/slide-history.jpg" alt="長野證券の歩み">
        </a>
      </div>
      */ ?>
    </div>

    <?php //サムネイル画像 ?>
    <div class="sp-thumbnails">
      <img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/top/slide-hifumiplus-thumb.png" alt="ひふみワールド+">
      <img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/top/slide-hifumi-thumb.png" alt="ひふみプラス">
      <img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/top/slide-commodity_usa-thumb.png" alt="米国株式">
      <img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/top/slide-camp20180420_tsumitate-thumb.png" alt="つみたてNISA,つみたてライフ">
      <?php /* 保管
      <img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/top/slide-camp20180130-thumb.png" alt="株式等移管手数料キャッシュバックキャンペーン">
       */ ?>
      <img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/top/slide-sdgs-thumb.png" alt="CSR・SDGsへの取組">
      <img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/top/slide-rectuit-thumb.png" alt="採用情報">
      <?php /* 保管
      <img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/top/slide-camp20180420_gci-thumb.png" alt="GCIエンダウメントファンド">
      <img class="sp-thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/top/slide-history-thumb.png" alt="長野證券の歩み">
      */ ?>
    </div>

  </div>
</section>

<?php else: //メインビジュアル - HOME以外 ?>

<section class="page_head_wrap">
  <div class="page_head">
    <?php //パンくずリスト（yoast seo）
    if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">','</div>'); } ?>
    <?php //H1タイトル読込み ?>
    <?php require_once( 'inc/h1_title.php' ); ?>
  </div>
</section>

<?php endif; ?>

<section class="main_content">
