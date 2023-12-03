<?php
/********************************************************************************
 カスタマイザーの登録（https://nelog.jp/add-image-uploader-to-wp-theme-custumizer）
*********************************************************************************/


define('SLIDE_IMAGE_SECTION', 'slide_image_section'); //セクションIDの定数化
define('SLIDE_IMAGE_URL_1', 'slide_image_url_1'); //セッティング：画像
define('SLIDE_CAPTION_1', 'slide_caption_1'); //セッティング：キャプション
define('SLIDE_CREDIT_1', 'slide_credit_1'); //セッティング：クレジット
define('SLIDE_IMAGE_URL_2', 'slide_image_url_2'); //セッティング：画像
define('SLIDE_CAPTION_2', 'slide_caption_2'); //セッティング：キャプション
define('SLIDE_CREDIT_2', 'slide_credit_2'); //セッティング：クレジット
define('SLIDE_IMAGE_URL_3', 'slide_image_url_3'); //セッティング：画像
define('SLIDE_CAPTION_3', 'slide_caption_3'); //セッティング：キャプション
define('SLIDE_CREDIT_3', 'slide_credit_3'); //セッティング：クレジット
define('SLIDE_IMAGE_URL_4', 'slide_image_url_4'); //セッティング：画像
define('SLIDE_CAPTION_4', 'slide_caption_4'); //セッティング：キャプション
define('SLIDE_CREDIT_4', 'slide_credit_4'); //セッティング：クレジット

function themename_theme_customizer( $wp_customize ) {


$wp_customize->add_section( SLIDE_IMAGE_SECTION , array(
'title' => 'TOPスライダー', //セクション名
'priority' => 30, //カスタマイザー項目の表示順
'description' => 'トップページのスライド画像とキャプションを設定します（最大4枚）。', //セクションの説明
) );

$wp_customize->add_setting( SLIDE_IMAGE_URL_1, array(
'transport' => 'refresh', //表示更新のタイミング。デフォルトは'refresh'（即時反映）/postMessage（保存後）
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, SLIDE_IMAGE_URL_1, array(
'label' => 'スライド1 - 画像', //設定ラベル
'section' => SLIDE_IMAGE_SECTION, //セクションID
'settings' => SLIDE_IMAGE_URL_1, //セッティングID
'description' => '1枚目のスライド画像。',
) ) );

$wp_customize->add_setting( SLIDE_CAPTION_1, array(
'transport' => 'refresh', //表示更新のタイミング。デフォルトは'refresh'（即時反映）/postMessage（保存後）
) );
$wp_customize->add_control( SLIDE_CAPTION_1, array(
'label' => 'スライド1 - キャプション', //設定ラベル
'section' => SLIDE_IMAGE_SECTION, //セクションID
'settings' => SLIDE_CAPTION_1, //セッティングID
'description' => '1枚目のスライドキャプション。',
'type' => 'text', // フォームの種類を指定
 ) );

$wp_customize->add_setting( SLIDE_CREDIT_1, array(
'transport' => 'refresh', //表示更新のタイミング。デフォルトは'refresh'（即時反映）/postMessage（保存後）
) );
$wp_customize->add_control( SLIDE_CREDIT_1, array(
'label' => 'スライド1 - クレジット', //設定ラベル
'section' => SLIDE_IMAGE_SECTION, //セクションID
'settings' => SLIDE_CREDIT_1, //セッティングID
'description' => '1枚目のスライド画像のクレジット。',
'type' => 'text', // フォームの種類を指定
 ) );

$wp_customize->add_setting( SLIDE_IMAGE_URL_2, array(
'transport' => 'refresh', //表示更新のタイミング。デフォルトは'refresh'（即時反映）/postMessage（保存後）
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, SLIDE_IMAGE_URL_2, array(
'label' => 'スライド2 - 画像', //設定ラベル
'section' => SLIDE_IMAGE_SECTION, //セクションID
'settings' => SLIDE_IMAGE_URL_2, //セッティングID
'description' => '2枚目のスライド画像。',
) ) );

$wp_customize->add_setting( SLIDE_CAPTION_2, array(
'transport' => 'refresh', //表示更新のタイミング。デフォルトは'refresh'（即時反映）/postMessage（保存後）
) );
$wp_customize->add_control( SLIDE_CAPTION_2, array(
'label' => 'スライド2 - キャプション', //設定ラベル
'section' => SLIDE_IMAGE_SECTION, //セクションID
'settings' => SLIDE_CAPTION_2, //セッティングID
'description' => '2枚目のスライドキャプション。',
'type' => 'text', // フォームの種類を指定
) );

$wp_customize->add_setting( SLIDE_CREDIT_2, array(
'transport' => 'refresh', //表示更新のタイミング。デフォルトは'refresh'（即時反映）/postMessage（保存後）
) );
$wp_customize->add_control( SLIDE_CREDIT_2, array(
'label' => 'スライド2 - クレジット', //設定ラベル
'section' => SLIDE_IMAGE_SECTION, //セクションID
'settings' => SLIDE_CREDIT_2, //セッティングID
'description' => '2枚目のスライド画像のクレジット。',
'type' => 'text', // フォームの種類を指定
) );

$wp_customize->add_setting( SLIDE_IMAGE_URL_3, array(
'transport' => 'refresh', //表示更新のタイミング。デフォルトは'refresh'（即時反映）/postMessage（保存後）
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, SLIDE_IMAGE_URL_3, array(
'label' => 'スライド3 - 画像', //設定ラベル
'section' => SLIDE_IMAGE_SECTION, //セクションID
'settings' => SLIDE_IMAGE_URL_3, //セッティングID
'description' => '3枚目のスライド画像。',
) ) );

$wp_customize->add_setting( SLIDE_CAPTION_3, array(
'transport' => 'refresh', //表示更新のタイミング。デフォルトは'refresh'（即時反映）/postMessage（保存後）
) );
$wp_customize->add_control( SLIDE_CAPTION_3, array(
'label' => 'スライド3 - キャプション', //設定ラベル
'section' => SLIDE_IMAGE_SECTION, //セクションID
'settings' => SLIDE_CAPTION_3, //セッティングID
'description' => '3枚目のスライドキャプション。',
'type' => 'text', // フォームの種類を指定
) );

$wp_customize->add_setting( SLIDE_CREDIT_3, array(
'transport' => 'refresh', //表示更新のタイミング。デフォルトは'refresh'（即時反映）/postMessage（保存後）
) );
$wp_customize->add_control( SLIDE_CREDIT_3, array(
'label' => 'スライド3 - クレジット', //設定ラベル
'section' => SLIDE_IMAGE_SECTION, //セクションID
'settings' => SLIDE_CREDIT_3, //セッティングID
'description' => '3枚目のスライド画像のクレジット。',
'type' => 'text', // フォームの種類を指定
) );

$wp_customize->add_setting( SLIDE_IMAGE_URL_4, array(
'transport' => 'refresh', //表示更新のタイミング。デフォルトは'refresh'（即時反映）/postMessage（保存後）
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, SLIDE_IMAGE_URL_4, array(
'label' => 'スライド4 - 画像', //設定ラベル
'section' => SLIDE_IMAGE_SECTION, //セクションID
'settings' => SLIDE_IMAGE_URL_4, //セッティングID
'description' => '4枚目のスライド画像。',
) ) );

$wp_customize->add_setting( SLIDE_CAPTION_4, array(
'transport' => 'refresh', //表示更新のタイミング。デフォルトは'refresh'（即時反映）/postMessage（保存後）
) );
$wp_customize->add_control( SLIDE_CAPTION_4, array(
'label' => 'スライド4 - キャプション', //設定ラベル
'section' => SLIDE_IMAGE_SECTION, //セクションID
'settings' => SLIDE_CAPTION_4, //セッティングID
'description' => '4枚目のスライドキャプション。',
'type' => 'text', // フォームの種類を指定
) );

$wp_customize->add_setting( SLIDE_CREDIT_4, array(
'transport' => 'refresh', //表示更新のタイミング。デフォルトは'refresh'（即時反映）/postMessage（保存後）
) );
$wp_customize->add_control( SLIDE_CREDIT_4, array(
'label' => 'スライド4 - クレジット', //設定ラベル
'section' => SLIDE_IMAGE_SECTION, //セクションID
'settings' => SLIDE_CREDIT_4, //セッティングID
'description' => '4枚目のスライド画像のクレジット。',
'type' => 'text', // フォームの種類を指定
) );

}
add_action( 'customize_register', 'themename_theme_customizer' );//カスタマイザーに登録

//呼び出し用関数定義：イメージURLの取得
function get_the_slide_image_url_1(){
return esc_url( get_theme_mod( SLIDE_IMAGE_URL_1 ) );
}
function get_the_slide_caption_1(){
return get_theme_mod( SLIDE_CAPTION_1 );
}
function get_the_slide_credit_1(){
return get_theme_mod( SLIDE_CREDIT_1 );
}
function get_the_slide_image_url_2(){
return esc_url( get_theme_mod( SLIDE_IMAGE_URL_2 ) );
}
function get_the_slide_caption_2(){
return get_theme_mod( SLIDE_CAPTION_2 );
}
function get_the_slide_credit_2(){
return get_theme_mod( SLIDE_CREDIT_2 );
}
function get_the_slide_image_url_3(){
return esc_url( get_theme_mod( SLIDE_IMAGE_URL_3 ) );
}
function get_the_slide_caption_3(){
return get_theme_mod( SLIDE_CAPTION_3 );
}
function get_the_slide_credit_3(){
return get_theme_mod( SLIDE_CREDIT_3 );
}
function get_the_slide_image_url_4(){
return esc_url( get_theme_mod( SLIDE_IMAGE_URL_4 ) );
}
function get_the_slide_caption_4(){
return get_theme_mod( SLIDE_CAPTION_4 );
}
function get_the_slide_credit_4(){
return get_theme_mod( SLIDE_CREDIT_4 );
}


?>