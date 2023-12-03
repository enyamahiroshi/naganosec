<?php get_header(); ?>

<article class="entry_list_wrap">

<?php /* ----- BASE
	<ul class="entry_list">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <li class="entry_list_li">
        <span class="entry_list_date"><?php echo date('Y.m.d', strtotime($post->post_date)); ?></span>
        <a class="entry_list_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </li>
		<?php endwhile; endif; ?>
  </ul>
*/ ?>

	<ul class="entry_list">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
		<?php endwhile; endif; ?>
  </ul>

<?php //  ページナビ
if(function_exists('wp_pagenavi')): wp_pagenavi(); endif; ?>

</article><?php //.entry_list_wrap ?>

<?php get_footer(); ?>