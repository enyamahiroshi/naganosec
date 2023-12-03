(function($) {


/* --------------------------------------------------
	オブジェクトの高さを揃える
-------------------------------------------------- */
$.fn.tile = function(columns) {
	var tiles, max, c, h, last = this.length - 1, s;
	if(!columns) columns = this.length;
	this.each(function() {
		s = this.style;
		if(s.removeProperty) s.removeProperty("height");
		if(s.removeAttribute) s.removeAttribute("height");
	});
	return this.each(function(i) {
		c = i % columns;
		if(c === 0) tiles = [];
		tiles[c] = $(this);
		h = tiles[c].height();
		if(c === 0 || h > max) max = h;
		if(i == last || c == columns - 1)
			$.each(tiles, function() { this.height(max); });
	});
};

// 高さを揃える -- 実行（スマホでは揃える場合）
// $(window).on("load resize" , function(){
//   $('.label_list li img').tile();
// });

// 高さを揃える -- 実行（スマホでは揃えない場合）
$(window).on("load resize" , function(){
	var ua = navigator.userAgent;
	if( !(ua.indexOf("iPhone") > 0 && ua.indexOf("iPod") == -1 || ua.indexOf("Android") > 0 && ua.indexOf("Mobile") > 0) ){
	 $('.brand_cat_list_text .logo_brand, .entry_photos, .label_list li img').tile();
	}
});



})(jQuery);
