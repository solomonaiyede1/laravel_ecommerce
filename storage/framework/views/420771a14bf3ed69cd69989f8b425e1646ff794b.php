<!DOCTYPE html>
<html lang="en">
<head>
	<title>Breetek Integrated Solutions Login Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link href="images/logo.jpeg" rel="icon">
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
    <div class="bg-contact3" style="background-image: url('auth1/images/bg-01.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
			<center><h4 style="color: white">Breetek Integrated Solutions Login page</h4></center><br>

				<form class="contact3-form validate-form"  method="POST" action="<?php echo e(route('login')); ?>">
                     <?php echo csrf_field(); ?>
                 
					<div class="wrap-input3 validate-input" data-validate="Email is required">
					     <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.label','data' => ['for' => 'name','value' => ''.e(__('*Email')).'','style' => 'color: white']]); ?>
<?php $component->withName('jet-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'name','value' => ''.e(__('*Email')).'','style' => 'color: white']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
						<input class="input3" type="email" name="email" placeholder="Your Email" required>
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					     <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.label','data' => ['for' => 'name','value' => ''.e(__('*Password')).'','style' => 'color: white']]); ?>
<?php $component->withName('jet-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'name','value' => ''.e(__('*Password')).'','style' => 'color: white']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
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
						<a href="/forgot-password" class="btn btn-transparent" style="border: 1px white solid; color: white">
							Forgot? Click here
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
<?php /**PATH /home/ccharle2/public_html/resources/views/auth/login.blade.php ENDPATH**/ ?>