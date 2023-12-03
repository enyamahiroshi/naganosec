<?php get_header(); ?>

<article class="search_result_wrap">

<h2 class="search_title"><?php the_search_query(); ?> の検索結果 : <em><?php echo $wp_query->found_posts; ?>件</em></h2>

<?php if(have_posts()) : ?>
<ul class="search_list">
<?php while(have_posts()) : the_post(); ?>
  <li class="search_list_li">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php if(is_single()): ?> <span class="entry_date">（<?php echo date('Y.m.d', strtotime($post->post_date)); ?>）</span><?php endif; ?>
  </li>
<?php endwhile; ?>
</ul>
<?php else: ?>
    <div class="post">
        <p>申し訳ございません。<br />該当する記事がございません。</p>
    </div>
<?php endif; ?>

<?php //  ページナビ
if(function_exists('wp_pagenavi')): wp_pagenavi(); endif; ?>

</article><?php //.search_result_wrap ?>
<?php get_footer(); ?>