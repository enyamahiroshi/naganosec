<?php
/* -------------------------------------------------------------
//  外部設定ファイルのインポート
// ------------------------------------------------------------*/
// カスタム投稿ポストの設定
include_once( 'functions/custom-post-type.php' );
// ウィジェット設定
include_once( 'functions/widget.php' );
// カスタマイザー設定
include_once( 'functions/customizer.php' );
// クライアント用ダッシュボードのレイアウト
include_once( 'functions/dashbord-layout.php' );

/* -------------------------------------------------------------
//  自動更新設定
// ------------------------------------------------------------*/
//プラグインの自動更新を有効化
//add_filter( 'auto_update_plugin', '__return_true' );
//テーマの自動更新を有効化
//add_filter( 'auto_update_theme', '__return_true' );
//メジャーアップグレードの自動更新を有効化
add_filter( 'allow_major_auto_core_updates', '__return_true' );

/* -------------------------------------------------------------
//  ヘッダーの読込
// ------------------------------------------------------------*/
// ▼ CSSファイルの追加
function import_header_scripts01() {
  // スライダー（Slider Pro）：http://sterfield.co.jp/demo/abe/49/
  wp_enqueue_style( 'slider-pro', get_template_directory_uri() . '/css/slider-pro-master/slider-pro.css');
  wp_enqueue_style( 'scroll-hint', get_template_directory_uri() . '/css/scroll-hint.css');
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style( 'add', get_template_directory_uri() . '/add.css');
}
add_action( 'wp_enqueue_scripts', 'import_header_scripts01' );

// ▼ JSファイル追加
function my_load_widget_scripts() {
  wp_enqueue_script( 'inview', get_template_directory_uri() . '/js/jquery.inview.min.js', true, array());
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/menu.js', true, array());
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', true, array());
  // スライダー（Slider Pro）：http://sterfield.co.jp/demo/abe/49/
  wp_enqueue_script( 'slider-pro', get_template_directory_uri() . '/js/slider-pro-master/jquery.sliderPro.min.js', true, array());
  wp_enqueue_script( 'scroll-hint', get_template_directory_uri() . '/js/scroll-hint.min.js', true, array());
  wp_enqueue_script( 'run-scroll-hint', get_template_directory_uri() . '/js/run-scroll-hint.js', true, array());
  // フォーム関連
  if( is_page('order-shop') ) {
      wp_enqueue_script( 'form', get_template_directory_uri() . '/js/form.js', true, array());
  }
  // 各jQueryプラグインの発動
  wp_enqueue_script( 'plugin-trigger', get_template_directory_uri() . '/js/plugin-trigger.js', true, array());
}
// wp_footerに処理を登録
add_action('wp_footer', 'my_load_widget_scripts');

/* -------------------------------------------------------------
//ｐタグ削除
// ------------------------------------------------------------*/
add_action('init', function() {
	remove_filter('the_excerpt', 'wpautop');
	remove_filter('the_content', 'wpautop');
});

add_filter('tiny_mce_before_init', function($init) {
	$init['wpautop'] = false;
	//$init['apply_source_formatting'] = ture;
	return $init;
});

/* -------------------------------------------------------------
// カスタムメニュー
// ------------------------------------------------------------*/
// 有効化
add_theme_support('menus');
// liに付与されるclassやidを消す
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
//add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
   // ただし以下のid,classは残す
   return is_array($var) ? array_intersect($var, array(
   'current-menu-item',
   'menu-item-home',
   'menu-item-has-children',
   'no_link',
   'no_sp',
   'no_pc',
    )) : '';
}

/* -------------------------------------------------------------
// アイキャッチの設定
// ------------------------------------------------------------*/
// アイキャッチを有効にする
add_theme_support( 'post-thumbnails' );
// アイキャッチの基本サイズ設定
set_post_thumbnail_size(300, 300, false) ;

/* -------------------------------------------------------------
// メディアサイズの追加
// ------------------------------------------------------------*/
// add_image_size('size1',186, 142, false);
// add_image_size('size2',280, 168, false);
// add_image_size('size3',255, 328, false);

/* -------------------------------------------------------------
//  エディタの見た目
// ------------------------------------------------------------*/
function my_theme_add_editor_styles() {
  add_editor_style( 'custom-editor-style.css' );
}
add_action( 'after_setup_theme', 'my_theme_add_editor_styles' );

/* -------------------------------------------------------------
//  記事作成時に最上位のカテゴリーを選べないようにする：http://design-matome.com/archives/90
// ------------------------------------------------------------*/
// require_once(ABSPATH . '/wp-admin/includes/template.php');
// class Danda_Category_Checklist extends Walker_Category_Checklist {
//      function start_el( &$output, $category, $depth, $args, $id = 0 ) {
//         extract($args);
//         if ( empty($taxonomy) )
//             $taxonomy = 'category';
//         if ( $taxonomy == 'category' )
//             $name = 'post_category';
//         else
//             $name = 'tax_input['.$taxonomy.']';
//         $class = in_array( $category->term_id, $popular_cats ) ? ' class="popular-category"' : '';
// 	$cat_child = get_category_children($category->term_id);
// 	if($cat_child !== "") {
//             $output .= "\n<li id='{$taxonomy}-{$category->term_id}'$class>" . '<label class="selectit"><input value="' . $category->term_id . '" type="checkbox" name="'.$name.'[]" id="in-'.$taxonomy.'-' . $category->term_id . '"' . checked( in_array( $category->term_id, $selected_cats ), true, false ) . disabled( empty( $args['disabled'] ), true, false ) . ' /> ' . esc_html( apply_filters('the_category', $category->name )) . '</label>';
//         }else{
//             $output .= "\n<li id='{$taxonomy}-{$category->term_id}'$class>" . '<label class="selectit"><input value="' . $category->term_id . '" type="checkbox" name="'.$name.'[]" id="in-'.$taxonomy.'-' . $category->term_id . '"' . checked( in_array( $category->term_id, $selected_cats ), true, false ) . disabled( empty( $args['disabled'] ), false, false ) . ' /> ' . esc_html( apply_filters('the_category', $category->name )) . '</label>';
//         }
//     }
// }

// function lig_wp_category_terms_checklist_no_top( $args, $post_id = null ) {
//     $args['checked_ontop'] = false;
//     $args['walker'] = new Danda_Category_Checklist();
//     return $args;
// }
// add_action( 'wp_terms_checklist_args', 'lig_wp_category_terms_checklist_no_top' );

/* -------------------------------------------------------------
//  記事作成後にカテゴリーの構造を保つようにする（https://liginc.co.jp/programmer/archives/2931）
// ------------------------------------------------------------*/
function lig_wp_category_terms_checklist_no_top( $args, $post_id = null ) {
  $args['checked_ontop'] = false;
  return $args;
}
add_action( 'wp_terms_checklist_args', 'lig_wp_category_terms_checklist_no_top' );

/* -------------------------------------------------------------
//  body_classでスラッグを出力する
//  http://terabenote.net/archives/1712/
// ------------------------------------------------------------*/
function pagename_class($classes = '') {
  if (is_page()) {
    $page = get_page(get_the_ID());
    $classes[] = "page-" . $page->post_name;
  }
  return $classes;
}
add_filter('body_class','pagename_class');
function cateslug_class($classes = '') {
  if (is_single()) {
    foreach((get_the_category($post->ID)) as $category)
    $classes[] = 'cateslug-'.$category->category_nicename;
  }
  return $classes;
}
add_filter('body_class','cateslug_class');

/* -------------------------------------------------------------
//  ダッシュボードにてカスタム投稿ポストをタクソノミーで絞り込みできるようにする
//  http://yusukexp.com/wordpress/snippet/taxonomy-filter/
// ------------------------------------------------------------*/
add_action( 'restrict_manage_posts', 'add_post_taxonomy_restrict_filter' );
function add_post_taxonomy_restrict_filter() {
    global $post_type;
    if ( 'items' == $post_type ) {
        ?>
        <select name="items_category">
            <option value="">カテゴリー指定なし</option>
            <?php
            $terms = get_terms('items_category');
            foreach ($terms as $term) { ?>
                <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
            <?php } ?>
        </select>
        <?php
    }
}

/* -------------------------------------------------------------
// 固定ページの親ページと子ページをスラッグで判定する
// ------------------------------------------------------------*/
function is_parent_slug() {
  global $post;
  if ( !empty($post->post_parent) ) {
    $post_data = get_post($post->post_parent);
    return $post_data->post_name;
  }
}

/* -------------------------------------------------------------
//  メインループの表示件数を制御（https://irec.jp/wordpress/custom-list-functions/）
// ------------------------------------------------------------*/
// 表示件数制御
// -1ですべて表示

add_action('pre_get_posts','my_pre_get_posts');
function my_pre_get_posts( $query ) {

//   if(is_admin() || ! $query -> is_main_query()) return;
//   if($query -> is_front_page()) { //フロントページ
//     $query -> set('posts_per_page', 10); //表示件数
//   }
//   if($query->is_home()){ // トップページ
//     $query->set( 'posts_per_page', 20); //表示件数
//   }
//   if($query->is_month()){ // 月別アーカイブ
//     $query->set('posts_per_page', -1); //表示件数
//   }
//   if($query->is_year()){ // 年別アーカイブ
//     $query->set('posts_per_page', 10); //表示件数
//   }
//   if($query->is_author()){ // 作成者アーカイブ
//     $query->set('posts_per_page', 10); //表示件数
//   }
  if($query->is_category() && !is_front_page()){ // カテゴリーアーカイブ
    $query->set('posts_per_page', 15); //表示件数
  }
  if($query->is_search()){ // 検索結果ページ
    $query->set('posts_per_page', 15); //表示件数
  }
  //カスタム投稿タイプのアーカイブページ
  if($query -> is_tax()){
  $query -> set('posts_per_page', 15); //表示件数
    // $query -> set('order', 'ASC'); //昇順
    // $query -> set('orderby', 'date'); //日
  }

}

/* -------------------------------------------------------------
// サイト内検索の範囲に、カテゴリー名、タグ名、を含める(http://taneakashi.ad-mk.com/wordpress-site-search-customize.html)
// ------------------------------------------------------------*/
function custom_search($search, $wp_query) {
  global $wpdb;
  //サーチページ以外だったら終了
  if (!$wp_query->is_search)
   return $search;
  if (!isset($wp_query->query_vars))
   return $search;
  // ユーザー名とか、タグ名・カテゴリ名も検索対象に
  $search_words = explode(' ', isset($wp_query->query_vars['s']) ? $wp_query->query_vars['s'] : '');
   if ( count($search_words) > 0 ) {
     $search = '';
     foreach ( $search_words as $word ) {
       if ( !empty($word) ) {
         $search_word = $wpdb->escape("%{$word}%");
         $search .= " AND (
             {$wpdb->posts}.post_title LIKE '{$search_word}'
             OR {$wpdb->posts}.post_content LIKE '{$search_word}'
            --  OR {$wpdb->posts}.post_author IN (
            --    SELECT distinct ID
            --    FROM {$wpdb->users}
            --    WHERE display_name LIKE '{$search_word}'
            --    )
             OR {$wpdb->posts}.ID IN (
               SELECT distinct r.object_id
               FROM {$wpdb->term_relationships} AS r
               INNER JOIN {$wpdb->term_taxonomy} AS tt ON r.term_taxonomy_id = tt.term_taxonomy_id
               INNER JOIN {$wpdb->terms} AS t ON tt.term_id = t.term_id
               WHERE t.name LIKE '{$search_word}'
             OR t.slug LIKE '{$search_word}'
             OR tt.description LIKE '{$search_word}'
             )
         ) ";
       }
     }
   }
   return $search;
   }
   add_filter('posts_search','custom_search', 10, 2);

/* -------------------------------------------------------------
// 親カテゴリーのスラッグで分岐する（https://webutubutu.com/webdesign/2108）
↓ テンプレートには以下のように書く
<?php if ( in_category( '親カテゴリーのスラッグ' ) || post_is_in_descendant_category( get_term_by( 'slug', '親カテゴリーのスラッグ', 'category' ))): ?>
  カテゴリーAとこのカテゴリーを親に持つ子カテゴリーであれば表示する内容
<?php endif; ?>
// ------------------------------------------------------------*/
function post_is_in_descendant_category( $cats, $_post = null ){
    foreach ( (array) $cats as $cat ) {
      $descendants = get_term_children( (int) $cat, 'category');
        if ( $descendants && in_category( $descendants, $_post ) )
        return true;
    }
    return false;
  }

/* -------------------------------------------------------------
//  『contact』ページ意外でContactForm7のcssとjsを読み込まない
// ------------------------------------------------------------*/
function my_contact_enqueue_scripts(){
	wp_deregister_script('contact-form-7');
	wp_deregister_style('contact-form-7');
	if (is_page(array('contact'))) {
		if (function_exists( 'wpcf7_enqueue_scripts')) {
      wpcf7_enqueue_scripts();
		}
		if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
		  wpcf7_enqueue_styles();
		}
	}
}
add_action( 'wp_enqueue_scripts', 'my_contact_enqueue_scripts');
/* -------------------------------------------------------------
//  フォームプラグイン「contact form 7」：記事の投稿タイトルをメールフォームの件名に紐付ける
//  参考：http://web-designer-mitainahito.com/contactform7-title/
// ------------------------------------------------------------*/
// function otoriyose_filter_itemtitle($tag){
//   if ( ! is_array( $tag ) )
//   return $tag;
//   if(isset($_GET['item_title'])){
//     $name = $tag['name'];
//     if($name == 'item_title')
//       $tag['values'] = (array) $_GET['item_title'];
//   }
//   return $tag;
// }
// add_filter('wpcf7_form_tag', 'otoriyose_filter_itemtitle', 11);
/* -------------------------------------------------------------
//  フォームプラグイン「contact form 7」：郵便番号から住所を自動入力
//  参考：http://ryus.co.jp/blog/ajaxzip3-contact-form-7-2016/
// ------------------------------------------------------------*/
function add_head_link() {
    echo '<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>';
    echo "
    <script type=\"text/javascript\">
    jQuery(function($){
    $(\"#zip\").attr('onKeyUp', 'AjaxZip3.zip2addr(this,\'\',\'address\',\'address\');');
})";
    echo '</script>';
}
add_action('wp_head', 'add_head_link');
/* -------------------------------------------------------------
//  フォームプラグイン「contact form 7」：ラジオボタンを必須項目にする
//  参考：https://seous.info/wp-plugin/4748
// ------------------------------------------------------------*/
// add_action( 'wpcf7_init', 'wpcf7_add_shortcode_radio_required' );
// function wpcf7_add_shortcode_radio_required(){
// 	wpcf7_add_shortcode( array('radio*'), 'wpcf7_checkbox_form_tag_handler', true );
// }
// add_filter( 'wpcf7_validate_radio*', 'wpcf7_checkbox_validation_filter', 10, 2 );