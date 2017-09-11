(function() {
	var $baseUrl = '';
	var $saveAbout_xhr = null;

	function saveAbout() {
		if($saveAbout_xhr === null) {
			$saveAbout_xhr = $.ajax({
				url: $baseUrl + 'about',
				type: 'POST',
				data: new FormData($('form#about')[0]),
				dataType: 'json',
				contentType: false,
				cache: false,
				processData:false,
				beforeSend: function() {

				},
				complete: function() {
					$saveAbout_xhr = null;
				},
				success: function(json) {
					if(json.status == true) {
						toastr.success(json.message);
					}
				},
				error: function($saveAbout_xhr) {
					$errors = JSON.parse($saveAbout_xhr.responseText);
					if(Array.isArray($errors.message) == true) {
						$.each($errors.message, function($i, $error) {
							toastr.error($error);
						});
					} else {
						toastr.error($errors.message);
					}
				}
			});
		}
	}

	module.exports = {
		saveAbout: saveAbout
	}
})();