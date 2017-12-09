jQuery(document).ready(function($) {
	$("a").click(function(event) {
		link=$(this).attr("href");
		$.ajax({
			url: link,
		})
		.done(function(html) {
			$("#page").empty().append(html);
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complate")
		});
		return false;
	});
});