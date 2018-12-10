<?php
	echo "Hello World!";
	?>
<!DOCTYPE html>
<html>
<head>
	<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/css/uikit.min.css" />
	<title></title>
		<body>
	<!-- UIkit JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit-icons.min.js"></script>
		<div class="uk-section uk-container"></div>
		<div class="uk-grid uk-chikd-width-1-3-@s uk-child-with-1"></div>
		<form class="uk-form-stacked">

	    <div class="uk-margin">
	        <label class="uk-form-label" for="form-stacked-text">Text</label>
	        <div class="uk-form-controls">
	            <input class="uk-input" id="form-stacked-text" type="text" placeholder="Some text...">
	        </div>
	    </div>

	    <div class="uk-margin">
	        <label class="uk-form-label" for="form-stacked-select">Select</label>
	        <div class="uk-form-controls">
	            <select class="uk-select" id="form-stacked-select">
	                <option>Option 01</option>
	                <option>Option 02</option>
	            </select>
	        </div>
	    </div>

    <div class="uk-margin">
        <div class="uk-form-label">Radio</div>
        <div class="uk-form-controls">
            <label><input class="uk-radio" type="radio" name="radio1"> Option 01</label><br>
            <label><input class="uk-radio" type="radio" name="radio1"> Option 02</label>
        </div>
    </div>

</form>
	</body>
</head>
</html>