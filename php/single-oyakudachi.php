<?php get_header(); ?>

<article class="entry_wrap">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php /* //現在のタームの情報
$my_taxonomy = 'oyakudachi_category'; //カスタム分類（カスタムタクソノミー）
$terms = wp_get_object_terms( $post->ID, $my_taxonomy );
?>
<?php echo $terms[0]->slug;
*/ ?>

	<h2 class="entry_title"><?php the_title(); ?></h2>
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