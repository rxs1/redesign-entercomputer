$(function() {
	var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	$("#topTab li a").each(function(){
		if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
			$(this).addClass("active");
	})
});