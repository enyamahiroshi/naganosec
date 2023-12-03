<?php get_header(); ?>

<article class="term_arichive_wrap">

<?php //タクソノミーで絞って各タームの情報をループ表示
$my_taxonomy = 'oyakudachi_category'; //カスタム分類（カスタムタクソノミー）
$args = array(
'orderby' => 'term_order',
'order' => 'ASC',
'parent' => 0,
'hierarhical' => 0 );
$terms = get_terms($my_taxonomy,$args);
if ( ! empty( $terms ) && ! is_wp_error( $terms )): ?>
<?php foreach ( $terms as $term ): ?>

  <section class="term_arichive">

    <?php //ターム名表示 ?>
    <div class="term_title_wrap">
      <h3 class="term_title">
        <img class="icon icon---<?php echo $term->slug; ?>" src="<?php echo get_template_directory_uri(); ?>/img/oyakudachi/icon-<?php echo $term->slug; ?>.png" alt="<?php echo $term->name; ?>のアイコン">
        <?php echo $term->name; ?>
        <a class="term_archive_link" href="<?php echo esc_html(home_url()); ?>/oyakudachi_category/<?php echo $term->slug; ?>">一覧<span class="no_sp">はこちら</span></a>
      </h3>
    </div>

    <?php //各ターム記事の出力
    $tax_posts = new WP_Query(array(
      'post_type' => 'oyakudachi',
      'posts_per_page' => 5, //表示件数
      'tax_query' => array(
        array(
          'taxonomy' => 'oyakudachi_category', //カスタム分類
          'terms' => array($term->slug), //タームからスラッグ取得
          'field' => 'slug', //ターム名をスラッグで指定する
          )
        ),
    ));
    if ($tax_posts -> have_posts()) : ?>
    <ul class="term_list">
      <?php while ($tax_posts->have_posts()) : $tax_posts->the_post(); ?>
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

    <?php endif; ?><?php wp_reset_postdata(); ?>

  </section><?php //.term_arichive ?>

<?php endforeach; endif; ?>

</article><?php //.term_arichive_wrap ?>

<?php get_footer(); ?>