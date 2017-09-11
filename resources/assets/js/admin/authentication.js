$(function() {

	var $loginWait = '<div class="wait"><div class="blob blob-0"></div><div class="blob blob-1"></div><div class="blob blob-2"></div><div class="blob blob-3"></div><div class="blob blob-4"></div><div class="blob blob-5"></div></div>';
	var $login_xhr = null;

	var login = function($btn) {
		$parent = $btn.parent();
		if($login_xhr == null) {
			$login_xhr = $.ajax({
				url: '/admin/login',
				type: 'POST',
				data: $('#login input'),
				dataType: 'json',
				beforeSend: function() {
					$parent.append($loginWait);
				},
				complete: function() {
					$login_xhr = null;
					$('div.wait').remove();
				},
				success: function(json) {
					toastr.success(json.message);
					window.location = json.redirect;
				},
				error: function(error) {
					toastr.error(error.responseJSON.message);
				}
			});
		}
	}

	$('.btn-login').on('click', function() {
		$this = $(this);
		if(validation.validate($('#login'))) {
			login($this);
		}
	});

	$('#login input').on('keypress', function(e) {
		if(e.which == 13) {
			if(validation.validate($('#login'))) {
				login($('.btn-login'));
			}
		}
	});

});