require('./bootstrap');

window.validation = require('./validation');
window.model = require('./model');

$(function() {
	var $menuIconAnimate;

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$(document).on('click', 'a.menu-toggler', function() {
		clearTimeout($menuIconAnimate);
		$('#side-menu a.menu i').removeClass('rubberBand').removeClass('animated');
		$('#app .section').toggleClass('collapsed');

		if($('#app .section.left').hasClass('collapsed') === true) {
			$menuIconAnimate = setTimeout(function() {
				$('#side-menu a.menu i').addClass('rubberBand').addClass('animated');
			}, 300);
		}
	});

	$(document).on('click', '#btn-about-save', function(e) {
		e.preventDefault();
		window.model.saveAbout();
		return false;
	});

	$(document).on('click', 'a.picute-edit-tools.tool-change', function(e) {
		e.preventDefault();
		$(this).closest('div.profile-picture').find('input[type="file"]').click();
		return false;
	});

	$(document).on('click', 'a.picute-edit-tools.tool-remove', function(e) {
		e.preventDefault();
		$(this).closest('div.profile-picture').find('input[type="file"]').val('');
		$(this).closest('div.profile-picture').find('img#avatar').attr('src', 'images/avatars/default.png');
		return false;
	});

	$(document).on('change', 'input[name="profile_picture"]', function() {
		readURL(this);
	});

	function readURL(input) {
		if(input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#avatar').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

});