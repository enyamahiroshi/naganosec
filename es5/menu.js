(function($) {

/* --------------------------------------------------
  PC ヘッダー内サブメニュー開閉
-------------------------------------------------- */
var HideMenu = '.header_cont .sub-menu';
var SubMenu = '.sub-menu';
var hasSubMenu = '.menu-item-has-children';
$(HideMenu).hide();
$(hasSubMenu).mouseover(function(){
  $(this).children(SubMenu).css({display:'block'});
})
.mouseout(function(){
  $(this).children(SubMenu).css({display:'none'});
});

/* --------------------------------------------------
  スマホメニュー開閉
-------------------------------------------------- */
var SmpMenu = '.s-menu';
var BtnOpen = '.btn_menu';
var BtnClose = '.btn_menu--close';
$(SmpMenu).hide();
$(BtnOpen).on('tap click', function(){
  $(SmpMenu).fadeIn();
});
$(BtnClose).on('tap click', function(){
  $(SmpMenu).fadeOut();
});

/* --------------------------------------------------
  aリンクを無効化
-------------------------------------------------- */
$('li.no_link > a, a.no_link').click(function(){
  return false;
});

/* --------------------------------------------------
  タブ切り替え
-------------------------------------------------- */
var swiTab = $('.acc_tab_title');
var swiCnt = $('.acc_personal, .acc_corp');
var swichtContent = function(){
  swiTab.toggleClass('active');
  swiCnt.toggleClass('active');
}
swiCnt.hide();
swiTab.on('tap click', swichtContent);


})(jQuery);
