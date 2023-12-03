<?php get_header(); ?>

<article class="term_arichive_wrap">
<section class="term_arichive">

<?php if(have_posts()) : ?>
<ul class="term_list">
<?php while(have_posts()) : the_post(); ?>
<?php //記事情報
$terms = wp_get_object_terms( $post->ID, 'oyakudachi_category' );
foreach( $terms as $term ) {
  $termname = $term->name;
} ?>
<li class="term_list_item">
  <a href="<?php echo get_permalink($tax_posts->ID); ?>"><?php echo get_the_title($tax_posts->ID); ?></a>
</li>
<?php endwhile; ?>
</ul><?php //.term_list ?>
<?php else: ?>
<div class="no_post">
  <p>只今準備中でございます。</p>
</div>
<?php endif; ?>

<?php //  ページナビ
if(function_exists('wp_pagenavi')): wp_pagenavi(); endif; ?>

</section><?php //.term_arichive ?>
</article><?php //.term_arichive_wrap ?>

<?php get_footer(); ?>