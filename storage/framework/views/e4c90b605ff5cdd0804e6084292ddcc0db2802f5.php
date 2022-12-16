<!DOCTYPE html>
<html lang="en">
<head>
	<title>Breetek Integrated Solutions Login Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="auth1/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="auth1/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="auth1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="auth1/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="auth1/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="auth1/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="auth1/css/util.css">
	<link rel="stylesheet" type="text/css" href="auth1/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    <div class="bg-contact3" class="bg-info">
		<div class="container-contact3">
			<div class="wrap-contact3">
			<center><h4 style="color: white">Breetek Integrated Solutions Login page</h4></center><br>

				<form class="contact3-form validate-form"  method="POST" action="<?php echo e(route('login')); ?>">
                     <?php echo csrf_field(); ?>
                 
					<div class="wrap-input3 validate-input" data-validate="Email is required">
						<input class="input3" type="email" name="email" placeholder="Your Email" required>
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input3" type="password" name="password" placeholder="Your password" required>
						<span class="focus-input3"></span>
					</div>

					<div class="container-contact3-form-btn">
						<button type="submit" class="contact3-form-btn">
							Submit
						</button><br>
						<a href="/register" class="btn btn-transparent" style="border: 1px white solid; color: white">
							Not yet Registered? Click here
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="auth1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="auth1/vendor/bootstrap/js/popper.js"></script>
	<script src="auth1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="auth1/vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="auth1/js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
<?php /**PATH C:\wamp64\www\backup_code\resources\views\auth\login.blade.php ENDPATH**/ ?>