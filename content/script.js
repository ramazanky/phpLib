var showAllImages = document.getElementById("showAllImages");
showAllImages.addEventListener("click", function() {
	$.ajax({
		url: "app/controller/foreach-img-file.php",
		type: "GET",
		success: function(response) {
			$(".write-images").html(response);
		}
	});
	showAllImages.style.display = "none";
});



document.getElementById("insert-file-btn").addEventListener("click", function() {
	var fileInput = document.getElementsByName("yuklenecekdosya")[0];
	var file = fileInput.files[0];
	var formData = new FormData();
	formData.append("yuklenecekdosya", file);

	$.ajax({
		type: "POST",
		url: "app/ajax/insert-update-file.php",
		data: formData,
		processData: false,
		contentType: false,
		success: function(response) {
			$(".div1").html(response);
			$.ajax({
				url: "app/controller/foreach-img-file.php",
				type: "GET",
				success: function(response) {
					$(".write-images").html(response);
				}
			});
		}
	});


});