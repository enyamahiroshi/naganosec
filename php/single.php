<?php get_header(); ?>

<article class="entry_wrap">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php //投稿カテゴリー名とスラッグを取得
  $cat = get_the_category();
  $cat_id = $cat[0]->cat_ID; //カテゴリーID
  $catname = $cat[0]->cat_name; //カテゴリー名
  $catslug = $cat[0]->slug; //スラッグ名
  $catlink = get_category_link($cat_id); //カテゴリーリンク
?>

	<h2 class="entry_title"><?php the_title(); ?></h2>
	<div class="entry_meta">
    <a class="cat_label cat_color_<?php echo $catslug; ?>" href="<?php echo $catlink; ?>"><?php echo $catname; ?></a>
    <span class="entry_date"><?php echo date('Y.m.d', strtotime($post->post_date)); ?></span>
  </div>
	<section class="entry_body mce">
		<?php the_content(); ?>
	</section>
<?php endwhile; endif; ?>

<?php/*
<?php //ページネーション ?>
	<div class="pagenation">
		<div class="prev"><?php previous_post_link('« %link', '%title', ''); ?></div>
		<div class="button"><a href="<?php echo esc_url(home_url()); ?>/category/recruit_news/"><i class="fa fa-undo"></i>一覧</a></div>
		<div class="next"><?php next_post_link('%link »', '%title', ''); ?></div>
	</div>
*/ ?>

</article>

<?php get_footer(); ?>