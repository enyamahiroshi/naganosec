<?php
//
//	H1タイトル
//
?>

<?php // ページ ---------------------------------------------------------------- ?>
<?php //ページ毎に
if( is_page(array('efforts','kpi')) ): ?>
<h1 class="page_title">お客様本位の業務運営に関する方針</h1>

<?php //その他
elseif( is_page() ): ?>
<h1 class="page_title"><?php the_title(); ?></h1>

<?php // アーカイブ ---------------------------------------------------------------- ?>
<?php //カスタム投稿タイプのアーカイブ
elseif( is_post_type_archive( 'oyakudachi' )): ?>
<h1 class="page_title">お役立ち情報</h1>

<?php // カスタムポスト ---------------------------------------------------------------- ?>
<?php //お役立ち情報
elseif( ( get_post_type() == 'oyakudachi') ): ?>
<h1 class="page_title page_title---oyakudachi">
<?php
$my_taxonomy = 'oyakudachi_category'; //カスタム分類（カスタムタクソノミー）
$terms = wp_get_object_terms( $post->ID, $my_taxonomy );
?>
<img class="icon icon---<?php echo $terms[0]->slug; ?>" src="<?php echo get_template_directory_uri(); ?>/img/oyakudachi/icon-<?php echo $terms[0]->slug; ?>.png" alt="<?php echo $terms[0]->name; ?>のアイコン">
<?php echo $terms[0]->name; ?>
</h1>

<?php // タクソノミー ---------------------------------------------------------------- ?>
<?php //カスタム投稿タイプのタクソノミー
elseif( is_tax('oyakudachi_category')): ?>
<h1 class="page_title">お役立ち情報</h1>

<?php //ID「1」の子カテゴリーの場合
elseif( cat_is_ancestor_of(1, $cat) ): ?>
<?php
  $cat = get_the_category();
  $cat = $cat[0];
  $cat_name = $cat->cat_name;?>
<h1 class="page_title"><?php echo $cat_name; ?></h1>

<?php //カテゴリー指定
elseif( is_category('topics') ): ?>
<h1 class="page_title">TOPICS</h1>

<?php //その他
elseif( is_archive() ): ?>
<h1 class="page_title">お知らせ</h1>


<?php // シングル ---------------------------------------------------------------- ?>
<?php
elseif( in_category( 'new_items' ) ): ?>
<h1 class="page_title">NEW ITEMS</h1>
<?php
elseif( in_category( 'events' ) ): ?>
<h1 class="page_title">EVENTS</h1>
<?php
elseif( in_category( 'media' ) ): ?>
<h1 class="page_title">MEDIA</h1>

<?php //その他
elseif( is_single() ): ?>
<h1 class="page_title"><?php $cat = get_the_category(); $cat = $cat[0]; {echo "$cat->cat_name" ;} ?></h1>


<?php // 上記以外 ---------------------------------------------------------------- ?>
<?php //検索結果
elseif( is_search()): ?>
<h1 class="page_title">検索結果</h1>

<?php //404
elseif( is_404()): ?>
<h1 class="page_title">NOT FOUND</h1>

<?php else: ?>
<h1 class="page_title"><?php the_title(); ?></h1>

<?php endif; ?>
