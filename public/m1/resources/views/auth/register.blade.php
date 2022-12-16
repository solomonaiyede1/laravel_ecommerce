
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Marketmasta Login Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<!--<link rel="icon" type="image/png" href="auth1/images/icons/favicon.ico"/>-->
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
			    <a href="{{url('/')}}" class="btn btn-success">Home</a>
			    <center><h4 style="color: white">Marketmasta Registration page</h4></center>
			    <center><h6 style="color: red"><b>Please, Register below</b></h6></center>
				  <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <input class="form-control" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

                <input id="role" type="hidden" name="role" value="user"/>
            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <input class="form-control" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <input class="form-control" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <input class="form-control" id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="country" value="{{ __('Country') }}" />
               <input class="form-control" id="country" class="block mt-1 w-full" type="text" name="country" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="state" value="{{ __('State') }}" />
                <input class="form-control" id="state" class="block mt-1 w-full" type="text" name="state" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="city" value="{{ __('City') }}" />
                <input class="form-control" id="city" class="block mt-1 w-full" type="text" name="city" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="street" value="{{ __('Street') }}" />
                <input class="form-control" id="street" class="block mt-1 w-full" type="text" name="street" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="bus_stop" value="{{ __('Bus stop') }}" />
                <input class="form-control" id="bus_stop" class="block mt-1 w-full" type="text" name="bus_stop" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="phone" value="{{ __('Phone') }}" />
                <input class="form-control" id="phone" class="block mt-1 w-full" type="text" name="phone" required autocomplete="new-password" />
            </div>
           

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
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
