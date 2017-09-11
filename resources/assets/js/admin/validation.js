(function() {
	'use strict';

	var $errors = {
		"empty": "%s must not be empty!",
		"notSelected" : "Please select %s!",
		"invalid": "%s is not valid!"
	};

	function getValueLength($val){
		return $val.replace(/ /g, '').length;
	}

	function getErrorMessage($errorType, $fieldName) {
		var $error = '';
		if(typeof $errors[$errorType] !== undefined) {
			$error = $errors[$errorType];
			$error = $error.replace(/%s/, $fieldName);			
		}
		return $error;
	}

	var validate = function($form) {

		var $isValid = true;

		var $this, $val, $valLength, $errorType, $fieldType, $fieldName;

		$form.find('.required').each(function($index, $input) {
			$this = $(this);
			$val = $input.value;
			$valLength = getValueLength($val);
			$errorType = 'notSelected';
			$fieldType = $this.attr('data-field-type');
			$fieldName = $this.attr('data-field-name');
			
			switch($fieldType) {
				case 'text':
					if(getValueLength($val) <= 0) {
						$isValid = false;
						toastr.error(getErrorMessage('empty', $fieldName));
					}
			}
		});

		return $isValid;
	}

	module.exports = {
		validate: validate
	}
})();