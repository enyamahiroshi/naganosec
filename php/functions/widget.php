<?php
/********************************************************************************
 ウィジェットの登録
*********************************************************************************/
if(function_exists('register_sidebar')){

  register_sidebar(array(
      'name' => 'あなたへのおすすめ',
      'id' => 'osusumeitem',
      'before_widget' => '<div class="osusume_wrap">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="osusume_title">',
      'after_title' => '</h3>',
  ));

}
?>
