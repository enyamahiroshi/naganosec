<?php get_header(); ?>

<article class="entry_list_wrap">

<?php
$idObj = get_category_by_slug('news'); //news（お知らせカテゴリー）のIDを取得して除外
$id = $idObj->term_id;
$args = array(
	'type'                     => 'post',
	'child_of'                 => 0,
	'parent'                   => $id,
	'orderby'                  => 'name',
	'order'                    => 'ASC',
	'hide_empty'               => 1, //記事のないカテゴリーを排除するか
	'hierarchical'             => 1,
	'exclude'                  => '',
	'include'                  => '',
	'number'                   => '',
	'taxonomy'                 => 'category',
	'pad_counts'               => false
);
$categories = get_categories($args);
foreach( $categories as $category ):
?>
<?php
$args = array(
  'posts_per_page' => '5',
  'cat' => $category->cat_ID,
  'paged' => $paged,
);
$cat_slug = $category->slug;
$cat_name = $category->name;
query_posts($args);
if(have_posts()) : ?>
<ul class="entry_list entry_list---allcat entry_list---<?php echo $cat_slug; ?>">
<?php /* <h2 class="entry_list_title_catname"><?php echo $cat_name; ?></h2> */?>
<?php while (have_posts()) : the_post(); ?>
<?php //投稿カテゴリー名とスラッグを取得
  $cat = get_the_category();
  $cat_id = $cat[0]->cat_ID; //カテゴリーID
  $catname = $cat[0]->cat_name; //カテゴリー名
  $catslug = $cat[0]->slug; //スラッグ名
  $catlink = get_category_link($cat_id); //カテゴリーリンク
?>
<li class="entry_list_li">
  <div class="entry_meta">
    <a class="cat_label cat_color_<?php echo $catslug; ?>" href="<?php echo $catlink; ?>"><?php echo $catname; ?></a>
    <span class="entry_date"><?php echo date('Y.m.d', strtotime($post->post_date)); ?></span>
  </div>
  <a class="entry_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</li>
<?php endwhile; ?>
</ul>
<?php endif; ?>
<?php endforeach; ?>

<?php //  ページナビ
if(function_exists('wp_pagenavi')): wp_pagenavi(); endif; ?>

</article><?php //.entry_list_wrap ?>

<?php get_footer(); ?>