$(document).ready(function() {
	$(".a-ac").click(function() {
        // Clear các thẻ li có Class click cũ
		$(".a-ac").removeClass("click");
        // Thêm Class
		$(this).addClass("click");
	});
});