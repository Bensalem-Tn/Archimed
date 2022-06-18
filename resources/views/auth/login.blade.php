<!doctype html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--favicon-->
		<link rel="icon" href="{{ asset('assets/client/images/favicon-32x32.png') }}" type="image/png" />
		<!-- loader-->
		<link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
		<script src="{{ asset('assets/js/pace.min.js') }}"></script>
		<!-- Bootstrap CSS -->
		<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
		<link href="{{ asset('assets/client/css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
		<style>
			:root {
					/* COLORS */
					--white: #e9e9e9;
					--gray: rgb(0, 0, 0);
					--blue: #fa9620;
					--lightblue: #7b470b;

					/* RADII */
					--button-radius: 0.7rem;

					/* SIZES */
					--max-width: 950px;
					--max-height: 650px;

					font-size: 16px;
					font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
						Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
				}

			body {
				align-items: center;
				background-color: var(--white);
				background: url("{{ asset('/assets/client/images/banner-2.jpg') }}");
				background-attachment: fixed;
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				display: grid;
				height: 100vh;
				place-items: center;
			}

			.form__title {
				font-weight: 300;
				margin: 0;
				margin-bottom: 1.25rem;
				color :rgb(0, 0, 0) ;
			}

			.link {
				color: var(--gray);
				font-size: 0.9rem;
				margin: 1.5rem 0;
				text-decoration: none;
			}

			.container {
				background-color: var(--white);
				border-radius: var(--button-radius);
				box-shadow: 0 0.9rem 1.7rem rgba(0, 0, 0, 0.25),
					0 0.7rem 0.7rem rgba(0, 0, 0, 0.22);
				height: var(--max-height);
				max-width: var(--max-width);
				overflow: hidden;
				position: relative;
				width: 100%;
			}

			.container__form {
				height: 100%;
				position: absolute;
				top: 0;
				transition: all 0.6s ease-in-out;
			}

			.container--signin {
				left: 0;
				width: 50%;
				z-index: 2;
			}

			.container.right-panel-active .container--signin {
				transform: translateX(100%);
			}

			.container--signup {
				left: 0;
				opacity: 0;
				width: 50%;
				z-index: 1;
			}

			.container.right-panel-active .container--signup {
				animation: show 0.6s;
				opacity: 1;
				transform: translateX(100%);
				z-index: 5;
			}

			.container__overlay {
				height: 100%;
				left: 50%;
				overflow: hidden;
				position: absolute;
				top: 0;
				transition: transform 0.6s ease-in-out;
				width: 50%;
				z-index: 100;
			}

			.container.right-panel-active .container__overlay {
				transform: translateX(-100%);
			}

			.overlay {
				background-color: var(--lightblue);
				background: url("{{ asset('/assets/client/images/banner-2.jpg') }}");
				background-attachment: fixed;
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				height: 100%;
				left: -100%;
				position: relative;
				transform: translateX(0);
				transition: transform 0.6s ease-in-out;
				width: 200%;
			}

			.container.right-panel-active .overlay {
				transform: translateX(50%);
			}

			.overlay__panel {
				align-items: center;
				display: flex;
				flex-direction: column;
				height: 100%;
				justify-content: center;
				position: absolute;
				text-align: center;
				top: 0;
				transform: translateX(0);
				transition: transform 0.6s ease-in-out;
				width: 50%;
			}

			.overlay--left {
				transform: translateX(-20%);
			}

			.container.right-panel-active .overlay--left {
				transform: translateX(0);
			}

			.overlay--right {
				right: 0;
				transform: translateX(0);
			}

			.container.right-panel-active .overlay--right {
				transform: translateX(20%);
			}

			.btn {
				background-color: var(--blue);
				background-image: linear-gradient(90deg, var(--blue) 0%, var(--lightblue) 74%);
				border-radius: 20px;
				border: 1px solid var(--blue);
				color: var(--white);
				cursor: pointer;
				font-size: 0.8rem;
				font-weight: bold;
				letter-spacing: 0.1rem;
				padding: 0.9rem 4rem;
				text-transform: uppercase;
				transition: transform 80ms ease-in;
			}

			.form > .btn {
				margin-top: 1.5rem;
			}

			.btn:active {
				transform: scale(0.95);
			}

			.btn:focus {
				outline: none;
			}

			.form {
				background-color: var(--white);
				display: flex;
				align-items: center;
				justify-content: center;
				flex-direction: column;
				padding: 0 3rem;
				height: 100%;
				text-align: center;
			}

			.input {
				background-color: #fff;
				border: none;
				padding: 0.9rem 0.9rem;
				margin: 0.5rem 0;
				width: 100%;
			}

			@keyframes show {
				0%,
				49.99% {
					opacity: 0;
					z-index: 1;
				}

				50%,
				100% {
					opacity: 1;
					z-index: 5;
				}
			}
			/* step */
			/*------------------------*/
			input:focus,
			button:focus,
			.form-control:focus{
				outline: none;
				box-shadow: none;
			}
			.form-control:disabled, .form-control[readonly]{
				background-color: #fff;
			}
			/*----------step-wizard------------*/
			.d-flex{
				display: flex;
			}
			.justify-content-center{
				justify-content: center;
			}
			.align-items-center{
				align-items: center;
			}

			/*---------signup-step-------------*/
			.bg-color{
				background-color: #333;
			}
			.signup-step-container{
				padding: 150px 0px;
				padding-bottom: 60px;
			}

    		.wizard .nav-tabs {
       		 position: relative;
       		 margin-bottom: 0;
       		 border-bottom-color: transparent;
   			 }

			.wizard > div.wizard-inner {
					position: relative;
			margin-bottom: 50px;
			text-align: center;
			}

			.connecting-line {
				height: 2px;
				background: #e0e0e0;
				position: absolute;
				width: 75%;
				margin: 0 auto;
				left: 0;
				right: 0;
				top: 15px;
				z-index: 1;
			}

			.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
				color: #555555;
				cursor: default;
				border: 0;
				border-bottom-color: transparent;
			}

			span.round-tab {
				width: 30px;
				height: 30px;
				line-height: 30px;
				display: inline-block;
				border-radius: 50%;
				background: #fff;
				z-index: 2;
				position: absolute;
				left: 0;
				text-align: center;
				font-size: 16px;
				color: #0e214b;
				font-weight: 500;
				border: 1px solid #ddd;
			}
			span.round-tab i{
				color:#555555;
			}
			.wizard li.active span.round-tab {
					background: #fa9620;
				color: #fff;
				border-color: #fa9620;
			}
			.wizard li.active span.round-tab i{
				color: #5bc0de;
			}
			.wizard .nav-tabs > li.active > a i{
				color: #fa9620;
			}

			.wizard .nav-tabs > li {
				width: 25%;
			}

			.wizard li:after {
				content: " ";
				position: absolute;
				left: 46%;
				opacity: 0;
				margin: 0 auto;
				bottom: 0px;
				border: 5px solid transparent;
				border-bottom-color: red;
				transition: 0.1s ease-in-out;
			}



			.wizard .nav-tabs > li a {
				width: 30px;
				height: 30px;
				margin: 20px auto;
				border-radius: 100%;
				padding: 0;
				background-color: transparent;
				position: relative;
				top: 0;
			}
			.wizard .nav-tabs > li a i{
				position: absolute;
				top: -15px;
				font-style: normal;
				font-weight: 400;
				white-space: nowrap;
				left: 50%;
				transform: translate(-50%, -50%);
				font-size: 12px;
				font-weight: 700;
				color: #000;
			}

			.wizard .nav-tabs > li a:hover {
				background: transparent;
			}

			.wizard .tab-pane {
				position: relative;
				padding-top: 20px;
			}


			.wizard h3 {
				margin-top: 0;
			}
			.prev-step,
			.next-step{
				font-size: 13px;
				padding: 8px 24px;
				border: none;
				border-radius: 4px;
				margin-top: 30px;
			}
			.next-step{
				background-color: #fa9620;
			}
			.skip-btn{
				background-color: #cec12d;
			}
			.step-head{
				font-size: 20px;
				text-align: center;
				font-weight: 500;
				margin-bottom: 20px;
			}
			.term-check{
				font-size: 14px;
				font-weight: 400;
			}
			.custom-file {
				position: relative;
				display: inline-block;
				width: 100%;
				height: 40px;
				margin-bottom: 0;
			}
			.custom-file-input {
				position: relative;
				z-index: 2;
				width: 100%;
				height: 40px;
				margin: 0;
				opacity: 0;
			}
			.custom-file-label {
				position: absolute;
				top: 0;
				right: 0;
				left: 0;
				z-index: 1;
				height: 40px;
				padding: .375rem .75rem;
				font-weight: 400;
				line-height: 2;
				color: #495057;
				background-color: #fff;
				border: 1px solid #ced4da;
				border-radius: .25rem;
			}
			.custom-file-label::after {
				position: absolute;
				top: 0;
				right: 0;
				bottom: 0;
				z-index: 3;
				display: block;
				height: 38px;
				padding: .375rem .75rem;
				line-height: 2;
				color: #495057;
				content: "Browse";
				background-color: #e9ecef;
				border-left: inherit;
				border-radius: 0 .25rem .25rem 0;
			}
			.footer-link{
				margin-top: 30px;
			}
			.all-info-container{

			}
			.list-content{
				margin-bottom: 10px;
			}
.list-content a{
	padding: 10px 15px;
    width: 100%;
    display: inline-block;
    background-color: #f5f5f5;
    position: relative;
    color: #565656;
    font-weight: 400;
    border-radius: 4px;
}
.list-content a[aria-expanded="true"] i{
	transform: rotate(180deg);
}
.list-content a i{
	text-align: right;
    position: absolute;
    top: 15px;
    right: 10px;
    transition: 0.5s;
}
.form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
    background-color: #fdfdfd;
}
.list-box{
	padding: 10px;
}
.signup-logo-header .logo_area{
	width: 200px;
}
.signup-logo-header .nav > li{
	padding: 0;
}
.signup-logo-header .header-flex{
	display: flex;
	justify-content: center;
	align-items: center;
}
.list-inline li{
    display: inline-block;
}
.pull-right{
    float: right;
}
/*-----------custom-checkbox-----------*/
/*----------Custom-Checkbox---------*/
input[type="checkbox"]{
    position: relative;
    display: inline-block;
    margin-right: 5px;
}
input[type="checkbox"]::before,
input[type="checkbox"]::after {
    position: absolute;
    content: "";
    display: inline-block;   
}
input[type="checkbox"]::before{
    height: 16px;
    width: 16px;
    border: 1px solid #999;
    left: 0px;
    top: 0px;
    background-color: #fff;
    border-radius: 2px;
}
input[type="checkbox"]::after{
    height: 5px;
    width: 9px;
    left: 4px;
    top: 4px;
}
input[type="checkbox"]:checked::after{
    content: "";
    border-left: 1px solid #fff;
    border-bottom: 1px solid #fff;
    transform: rotate(-45deg);
}
input[type="checkbox"]:checked::before{
    background-color: #18ba60;
    border-color: #18ba60;
}






@media (max-width: 767px){
	.sign-content h3{
		font-size: 40px;
	}
	.wizard .nav-tabs > li a i{
		display: none;
	}
	.signup-logo-header .navbar-toggle{
		margin: 0;
		margin-top: 8px;
	}
	.signup-logo-header .logo_area{
		margin-top: 0;
	}
	.signup-logo-header .header-flex{
		display: block;
	}
}

		</style>
		<title>ArchiArt|Connexion</title>
	</head>

<body >


	<div class="container right-panel-active">
		<!-- Sign Up -->
		<div class="container__form container--signup">
			<form  class="form" method="POST" action="{{ route('login') }}" id="form1">
				@csrf
				<h2 class="form__title">Connexion au compte ArchiArt.com</h2>
				
				<input id="email" type="email" class="form-control  input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

				@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				<input id="password" type="password" class="form-control input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

				@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

					<label class="form-check-label" for="remember">
						{{ __('Rester Connecté') }}
					</label>
				</div>
				<div class="row mb-0">
					
						<button type="submit" class="btn btn-primary">
							{{ __('Login') }}
						</button>

						@if (Route::has('password.request'))
							<a class="" href="{{ route('password.request') }}">
								{{ __('Mot de passe oublié ?') }}
							</a>
						@endif
					
				</div>
			</form>
		</div>
	
		<!-- Sign In -->
	
	
		<!-- Overlay -->
		<div class="container__overlay">
			<div class="overlay">
				<div class="overlay__panel overlay--left">
					<a href="register">	
						<button class="btn" id="register">Creér Un Compte ArchiArt</button>
					</a>
				</div>
				
			</div>
		</div>
	</div>
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/client/js/app.js') }}"></script>
<script>
// ------------step-wizard-------------
$(document).ready(function () {
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var target = $(e.target);
    
        if (target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".prev-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        prevTab(active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


$('.nav-tabs').on('click', 'li', function() {
    $('.nav-tabs li.active').removeClass('active');
    $(this).addClass('active');
});
</script>
<script>
const signInBtn = document.getElementById("signIn");
const signUpBtn = document.getElementById("signUp");
const fistForm = document.getElementById("form1");
const secondForm = document.getElementById("form2");
const container = document.querySelector(".container");

signInBtn.addEventListener("click", () => {
	container.classList.remove("right-panel-active");
});

signUpBtn.addEventListener("click", () => {
	container.classList.add("right-panel-active");
});

fistForm.addEventListener("submit", (e) => e.preventDefault());
secondForm.addEventListener("submit", (e) => e.preventDefault());


</script>

</body>

</html>




<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

->