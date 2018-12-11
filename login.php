<!DOCTYPE html>
	<html>
	<head>
	<title></title>
	</head>
<body>	
	<div class="uk-grid uk-chikd-width-1-3-@s uk-child-with-1"></div>
	<form class="uk-form-stacked js-login">

	<h3> Login </h3>	
	
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Email</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="email" required="required" placeholder="email@email.com">
        </div>
    </div

    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Password</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="Password " required = "required" placeholder="Your Password">
        </div>
    </div>

    <div class="uk-margin">
    	<button class="uk-button uk.button-default" type="submit">LOGIN</button>
    		<? php requre_once "inc/footer.php"; ?>
    	</div>
  </form>
</body>
</html>