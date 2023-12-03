<?php get_header(); ?>

<?php //全カテゴリ混ぜて最新の10件 ?>
<article class="entry_list_wrap">
<h2 class="entry_list_title">長野證券からのお知らせ<a class="in_title_link" href="<?php echo esc_url(home_url()); ?>/category/news/"><span class="no_sp">お知らせ</span>一覧<i class="fa fa-angle-right" aria-hidden="true"></i></a></h2>
<ul class="entry_list">

<?php
$args = array(
  'posts_per_page'   => '10',
  'category_name'    => 'news',
);
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata( $post ); ?>
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
<?php endforeach; wp_reset_postdata(); ?>

</ul>
</article><?php //.entry_list_wrap ?>

<?php get_footer(); ?>