<?php
/********************************************************************************
 デフォルトの「投稿」ポストの編集
*********************************************************************************/
function edit_admin_menus() {
  global $menu;
  global $submenu;
  $menu[5][0] = 'お知らせ';
  $submenu['edit.php'][5][0] = 'すべての記事';
}
add_action('admin_menu', 'edit_admin_menus');


/********************************************************************************
 カスタム投稿タイプの設定：function.php 内で読み込むことで使用可能
*********************************************************************************/

// -------- ここからカスタム投稿タイプ設定のセット
function oyakudachi_custom_post_type(){
	//▼カスタム投稿タイプを作成
	$labels = array(
		'name'               => 'お役立ち情報', //管理画面などで表示する名前（単数形）
		'singular_name'      => 'お役立ち情報', //管理画面などで表示する名前（単数形）
		'menu_name'          => 'お役立ち情報', //管理画面メニューで表示する名前（nameより優先される）
		'add_new'            => '新規追加', //メニューの新規追加ボタンのラベル
		'add_new_item'       => '新規お役立ち情報追加', //新規作成ページのタイトルに表示される名前
		'new_item'           => '新規お役立ち情報', //一覧ページの「新規追加」ボタンのラベル
		'edit_item'          => 'お役立ち情報を編集', //編集ページのタイトルに表示される名前
		'view_item'          => 'お役立ち情報を表示', //編集ページの「投稿を表示」ボタンのラベル
		'search_items'       => 'お役立ち情報検索', //一覧ページの検索ボタンのラベル
		'not_found'          =>  '記事が見つかりません', //一覧ページに投稿が見つからなかったときに表示
		'not_found_in_trash' => 'ゴミ箱に記事はありません', //ゴミ箱に何も入っていないときに表示
		'parent_item_colon'  => ''
	);
	$args = array(
    'label' => 'oyakudachi',
		'labels' => $labels,
		'public' => true, //ユーザーが内容を投稿する場合true(通常はtrue)
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive'  => true, //アーカイブページを作成するか否かを設定(trueでindexページを作成)
		'hierarchical' => true, //階層構造か否か（trueの場合はカテゴリー、falseの場合はタグ）
		'exclude_from_search' => false, //WPの検索機能から検索した際、検索対象に含めるか否かを設定（※trueの場合は検索対象に含めない）
		'menu_position' => 5,
		'supports' => array( //管理画面から投稿できる項目を設定
  		'title', //タイトル表示を有効に
  		'editor', //本文の表示を有効に
  		//'custom-fields', カスタムフィールド
			'thumbnail' //アイキャッチ画像
		)
	);
	register_post_type( 'oyakudachi',$args );
	//▼カスタムタクソノミーを作成
	//カテゴリータイプ
	$args = array(
		'label'        => 'お役立ち情報カテゴリー',
		'public'       => true,
		'show_ui'      => true,
		'hierarchical' => true, //階層構造か否か（trueの場合はカテゴリー、falseの場合はタグ）
	);
	register_taxonomy( 'oyakudachi_category','oyakudachi',$args );
	/*
	//タグタイプ
	$args = array(
		'label'        => 'タグ',
		'public'       => true,
		'show_ui'      => true,
		'hierarchical' => false, //階層構造か否か（trueの場合はカテゴリー、falseの場合はタグ）
	);
	register_taxonomy( 'AAA_tag','AAA',$args );
	*/
}
add_action( 'init', 'oyakudachi_custom_post_type' );
// -------- ここまでカスタム投稿タイプ設定のセット


?>
