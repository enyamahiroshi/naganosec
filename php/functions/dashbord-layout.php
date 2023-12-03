<?php
/********************************************************************************
 クライアント用ダッシュボードの設定
 http://htdsn.com/blog/archives/wordpress-admin-customize.html
*********************************************************************************/

/* -------------------------------------------------------------
//  ログイン画面のロゴを変更する
// ------------------------------------------------------------*/
// テーマのイメージフォルダ内にオリジナルのロゴ画像ファイル（例：logo-login.gif）を格納する
function custom_login_logo() {
echo '<style type="text/css">h1 a { background: url('.get_bloginfo('template_directory').'/images/logo-login.gif) 50% 50% no-repeat !important; }</style>';
}
add_action('login_head', 'custom_login_logo');

/* -------------------------------------------------------------
//  WordPressバージョンの更新情報を非表示にする
// ------------------------------------------------------------*/
add_filter('pre_site_transient_update_core', '__return_zero');
// APIによるバージョンチェックの通信をさせない
remove_action('wp_version_check', 'wp_version_check');
remove_action('admin_init', '_maybe_update_core');

/* -------------------------------------------------------------
//  フッターのWordPressリンクを非表示にする
// ------------------------------------------------------------*/
function custom_admin_footer() { echo '<a href="mailto:info@web8.co.jp">お問い合わせ</a>'; }
add_filter('admin_footer_text', 'custom_admin_footer');

/* -------------------------------------------------------------
//  管理バーの項目を非表示にする
// ------------------------------------------------------------*/
function remove_admin_bar_menu( $wp_admin_bar ) {
$wp_admin_bar->remove_menu( 'wp-logo' ); // WordPressシンボルマーク
}
add_action( 'admin_bar_menu', 'remove_admin_bar_menu', 70 );

/* -------------------------------------------------------------
//  ダッシュボードウィジェット（level10以下のユーザーに対して非表示にする）
// ------------------------------------------------------------*/
function example_remove_dashboard_widgets() {
if (!current_user_can('level_10')) { //level10以下のユーザーの場合ウィジェットを非表示にする
global $wp_meta_boxes;
unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']); // 現在の状況
unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); // 最近のコメント
unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']); // 被リンク
unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']); // プラグイン
//unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']); // クイック投稿
//unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']); // 最近の下書き
unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']); // WordPressブログ
unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); // WordPressフォーラム
}
}
add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets');

/* -------------------------------------------------------------
//  メニュー項目（level10以下のユーザーに対して非表示にする）
// ------------------------------------------------------------*/
function remove_menus () {
if (!current_user_can('level_10')) { //level10以下のユーザーの場合メニューを非表示にする
// remove_menu_page('wpcf7'); //Contact Form 7
global $menu;
// unset($menu[2]); // ダッシュボード
// unset($menu[4]); // メニューの線1
// unset($menu[5]); // 投稿
// unset($menu[10]); // メディア
// unset($menu[15]); // リンク
// unset($menu[20]); // ページ
unset($menu[25]); // コメント
// unset($menu[59]); // メニューの線2
// unset($menu[60]); // テーマ
// unset($menu[65]); // プラグイン
// unset($menu[70]); // プロフィール
unset($menu[75]); // ツール
// unset($menu[80]); // 設定
// unset($menu[90]); // メニューの線3
}
}
add_action('admin_menu', 'remove_menus');

/* -------------------------------------------------------------
//  投稿画面の項目を非表示にする（level10以下のユーザーに対して非表示にする）
// ------------------------------------------------------------*/
function remove_default_post_screen_metaboxes() {
if (!current_user_can('level_10')) { // level10以下のユーザーの場合メニューを非表示にする
remove_meta_box( 'postcustom','post','normal' ); // カスタムフィールド
// remove_meta_box( 'postexcerpt','post','normal' ); // 抜粋
remove_meta_box( 'commentstatusdiv','post','normal' ); // ディスカッション
remove_meta_box( 'commentsdiv','post','normal' ); // コメント
remove_meta_box( 'trackbacksdiv','post','normal' ); // トラックバック
remove_meta_box( 'authordiv','post','normal' ); // 作成者
// remove_meta_box( 'slugdiv','post','normal' ); // スラッグ
// remove_meta_box( 'revisionsdiv','post','normal' ); // リビジョン
}
}
add_action('admin_menu','remove_default_post_screen_metaboxes');


?>