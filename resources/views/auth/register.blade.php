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
			<form action="#" class="form" id="form1">
				<h2 class="form__title">Nouveau Client ?</h2>
				<p style="color:black ;">Inscription gratuite - Completez vos coordonnées ci-dessous</p>
				<div class="row">
					<div class="col-6">
						<input type="text" placeholder="Prénom" class="input" />
					</div>
					<div class="col-6">
						<input type="email" placeholder="Nom" class="input" />
					</div>
				</div>
				<input type="email" placeholder="E-mail" class="input" />
				
				<input type="password" placeholder="Mot De Passe" class="input" />
	
				<input type="password" placeholder="Confirmer Mot De Passe" class="input" />
				<div class="row">
							<div class="col-1" style="  text-align: left;">
								<input type="checkbox" class="custom-control-input" id="customCheck1">
							</div>
							<div class="col-11" style='text-align: left;'>
								<label class="custom-control-label"  style="color:black ;"for="customCheck1">j'ai lu et j'accepte les termes et conditions </label>
			 
							</div>
				</div>
				
				
				<button class="btn">Creér Un Compte</button>
			</form>
		</div>
	
		<!-- Sign In -->
		<div class="container__form container--signin">
			<form action="#" class="form" id="form2">
				<h2 class="form__title">Nouveau Client ?</h2>
				<p style="color:black ;"class="mb-5">Inscription gratuite - Completez vos coordonnées ci-dessous</p>
				<div class="row">
					<div class="col-md-12">
						<div class="wizard">
							<div class="wizard-inner">
								<div class="connecting-line"></div>
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active">
										<a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>Étape : 1</i></a>
									</li>
									<li role="presentation" class="disabled">
										<a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span> <i>Étape : 2</i></a>
									</li>
									<li role="presentation" class="disabled">
										<a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab">3</span> <i>Étape : 3</i></a>
									</li>
									<li role="presentation" class="disabled">
										<a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab">4</span> <i>Étape : 4</i></a>
									</li>
								</ul>
							</div>
			
							<form role="form" action="index.html" class="login-box">
								<div class="tab-content" id="main_form">
									<div class="tab-pane active" role="tabpanel" id="step1">
										<h4 class="text-center"style="color: #000 ;">Étape 1</>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Prénom (*) : </label> 
													<input class="form-control" type="text" name="prenom" id="prenom" placeholder=""> 
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Nom  (*) :</label> 
													<input class="form-control" type="text" name="nom" id="nom" placeholder=""> 
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Nom d'agence (*) : </label> 
													<input class="form-control" type="text" name="agence" id="agence" placeholder=""> 
												</div>
											</div>
											
											<div class="col-md-6">
												<div class="form-group">
													<label>Adresse d'agence  (*) : </label> 
													<input class="form-control" type="text" name="adresse_agence" id="adresse_agence" placeholder=""> 
												</div>
											</div>
											
											
										</div>
										<ul class="list-inline pull-right">
											<li><button type="button" class="default-btn next-step">Continuer</button></li>
										</ul>
									</div>
									<div class="tab-pane" role="tabpanel" id="step2">
										<h4 class="text-center"style="color: #000 ;">Étape 2</h4>
										<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Localité \Ville (*) : </label> 
												<input class="form-control" type="text" name="ville" id="ville" placeholder=""> 
											</div>
										</div>
										
										<div class="col-md-6">
											<div class="form-group">
												<label>Code Postal  (*):</label> 
												<input class="form-control" type="text" name="postal" id="postal"  placeholder=""> 
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Télephone Principale  (*):</label> 
												<input class="form-control" type="text" name="tel-1" id="tel-1" placeholder=""> 
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Télephone Secondaire :</label> 
												<input class="form-control" type="text" name="tel-2"  id="tel-2" placeholder=""> 
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label>Catégorie Professionnelle d'architecte exercées (*) : </label> 
												<select name="categorie" class="form-control" id="categorie">
													<option value="__" selected="selected">Veuillez Selectionner</option>
													<option value="NU">Niue</option>
													<option value="NF">Norfolk Island</option>
													<option value="KP">North Korea</option>
													<option value="MP">Northern Mariana Islands</option>
													<option value="NO">Norway</option>
												</select>
											</div>
										</div>
										
										
										
										
									</div>
										
										
										<ul class="list-inline pull-right">
											<li><button type="button" class="default-btn prev-step">Retour</button></li>
											<!--<li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>-->
											<li><button type="button" class="default-btn next-step">Continuer</button></li>
										</ul>
									</div>
									<div class="tab-pane" role="tabpanel" id="step3">
										<h4 class="text-center" style="color: #000 ;">Étape 3</h4>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Projects réalisés (*) : </label> 
													<select name="nature_projet" class="form-control" id="nature_projet">
														<option value="__" selected="selected">Veuillez Selectionner</option>
														<option value="NU">Niue</option>
														<option value="NF">Norfolk Island</option>
														<option value="KP">North Korea</option>
														<option value="MP">Northern Mariana Islands</option>
														<option value="NO">Norway</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Information</label> 
													<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Select file</label>
													</div>
												</div>
											</div>
										<div class="col-md-12">
											<div class="form-group">
												<label>Site Internet  :</label> 
												<input class="form-control" type="text" name="name" placeholder=""> 
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label>Ajouter une description de votre Societé : </label> 
												<textarea id="story" name="story" rows="2" cols="60">It was a dark and stormy night...</textarea>
											</div>
										</div>
										
										
										
										
										</div>
										<ul class="list-inline pull-right">
											<li><button type="button" class="default-btn prev-step">Retour</button></li>
										
											<li><button type="button" class="default-btn next-step">Continuer</button></li>
										</ul>
									</div>
									<div class="tab-pane" role="tabpanel" id="step4">
										<h4 class="text-center"style="color: #000 ;">Étape 4</h4>
										<div class="all-info-container">
											<div class="list-content">
												<a href="#listone" data-toggle="collapse" aria-expanded="false" aria-controls="listone">Collapse 1 <i class="fa fa-chevron-down"></i></a>
												<div class="collapse" id="listone">
													<div class="list-box">
														<div class="row">
															
															<div class="col-md-6">
																<div class="form-group">
																	<label>First and Last Name *</label> 
																	<input class="form-control" type="text"  name="name" placeholder="" disabled="disabled"> 
																</div>
															</div>
															
															<div class="col-md-6">
																<div class="form-group">
																	<label>Phone Number *</label> 
																	<input class="form-control" type="text" name="name" placeholder="" disabled="disabled"> 
																</div>
															</div>
															
														</div>
													</div>
												</div>
											</div>
											<div class="list-content">
												<a href="#listtwo" data-toggle="collapse" aria-expanded="false" aria-controls="listtwo">Collapse 2 <i class="fa fa-chevron-down"></i></a>
												<div class="collapse" id="listtwo">
													<div class="list-box">
														<div class="row">
															
															<div class="col-md-6">
																<div class="form-group">
																	<label>Address 1 *</label> 
																	<input class="form-control" type="text" name="name" placeholder="" disabled="disabled"> 
																</div>
															</div>
															
															<div class="col-md-6">
																<div class="form-group">
																	<label>City / Town *</label> 
																	<input class="form-control" type="text" name="name" placeholder="" disabled="disabled"> 
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label>Country *</label> 
																	<select name="country2" class="form-control" id="country2" disabled="disabled">
																		<option value="NG" selected="selected">Nigeria</option>
																		<option value="NU">Niue</option>
																		<option value="NF">Norfolk Island</option>
																		<option value="KP">North Korea</option>
																		<option value="MP">Northern Mariana Islands</option>
																		<option value="NO">Norway</option>
																	</select>
																</div>
															</div>
															
															
															
															<div class="col-md-6">
																<div class="form-group">
																	<label>Legal Form</label> 
																	<select name="legalform2" class="form-control" id="legalform2" disabled="disabled">
																		<option value="" selected="selected">-Select an Answer-</option>
																		<option value="AG">Limited liability company</option>
																		<option value="GmbH">Public Company</option>
																		<option value="GbR">No minimum capital, unlimited liability of partners, non-busines</option>
																	</select> 
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label>Business Registration No.</label> 
																	<input class="form-control" type="text" name="name" placeholder="" disabled="disabled"> 
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label>Registered</label> 
																	<select name="vat2" class="form-control" id="vat2" disabled="disabled">
																		<option value="" selected="selected">-Select an Answer-</option>
																		<option value="yes">Yes</option>
																		<option value="no">No</option>
																	</select> 
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label>Seller</label> 
																	<input class="form-control" type="text" name="name" placeholder="" disabled="disabled"> 
																</div>
															</div>
															<div class="col-md-12">
																<div class="form-group">
																	<label>Company Name *</label> 
																	<input class="form-control" type="password" name="name" placeholder="" disabled="disabled"> 
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="list-content">
												<a href="#listthree" data-toggle="collapse" aria-expanded="false" aria-controls="listthree">Collapse 3 <i class="fa fa-chevron-down"></i></a>
												<div class="collapse" id="listthree">
													<div class="list-box">
														<div class="row">
															
															<div class="col-md-6">
																<div class="form-group">
																	<label>Name *</label> 
																	<input class="form-control" type="text" name="name" placeholder=""> 
																</div>
															</div>
															
															
															<div class="col-md-6">
																<div class="form-group">
																	<label>Number *</label> 
																	<input class="form-control" type="text" name="name" placeholder=""> 
																</div>
															</div>
															
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<ul class="list-inline pull-right">
											<li><button type="button" class="default-btn prev-step">Back</button></li>
											<li><button type="button" class="default-btn next-step">Finish</button></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
								
							</form>
						</div>
					</div>	
				</div>
							
						
				</form>
			<!--<form action="#" class="form" id="form2">
				<h2 class="form__title">Login In</h2>
				<input type="email" placeholder="Email" class="input" />
				<input type="password" placeholder="Password" class="input" />
				<a href="#" class="link">Forgot your password?</a>
				<button class="btn">Login In</button>
			</form>-->
		</div>
	
		<!-- Overlay -->
		<div class="container__overlay">
			<div class="overlay">
				<div class="overlay__panel overlay--left">
					<button class="btn" id="signIn">Nouveau Architecte ?</button>
				</div>
				<div class="overlay__panel overlay--right">
					<button class="btn" id="signUp">Nouveau Client ?</button>
				</div>
			</div>
		</div>
	</div>
	<!--wrapper
	<div class="wrapper">
		<div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
					<div class="col mx-auto">
						<div class="my-4 text-center">
							<img src="{{ asset('/assets/client/images/inner-page-logo.png') }}" width="180" alt="" />
						</div>
						<div class="card">
							<div class="card-body ">
								<div class="home-banner-explore__tabs">
									<div class="tabs-container">
										<ul class="nav nav-tabs tabs-container__navigation tabs-nav " role="tablist">
											<li class="nav-item tabs-container__navigation--item active">
												<a class="nav-link active" id="restaurant-tab" data-toggle="tab" href="#restaurant" role="tab" aria-controls="restaurant" aria-selected="false">
													Architectes
												</a>
											</li>
											
											<li class="nav-item tabs-container__navigation--item ">
													<a class="nav-link " id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="true">
														Realisations
													</a>
											</li>
											
										</ul>
										<div class="tab-content">
											<div class="tab-pane active" id="restaurant" role="tabpanel" aria-labelledby="restaurant-tab">
												<form method="GET" action="/en/hotels-stays" data-action="/en/hotels-stays" data-suggest-url="/en/suggestion">
													<div class="tabs-container__content js-autocomplete__container">
														<h3 class='text-center'style='color:#000 ;'> Nouveau Architecte ?</h3>
														<p><strong>Inscription gratuite - Completez vos coordonnées ci-dessous</strong></p>
														<div class="stepwizard">
															<div class="stepwizard-row setup-panel">
																<div class="stepwizard-step">
																	<a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
																	<p>Étape 1</p>
																</div>
																<div class="stepwizard-step">
																	<a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
																	<p>Étape 2</p>
																</div>
																<div class="stepwizard-step">
																	<a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
																	<p>Étape 3</p>
																</div>
																 <div class="stepwizard-step">
																	<a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
																	<p>Étape 4</p>
																</div>
															</div>
														</div>
													
															<div class="row setup-content" id="step-1">
																
																
																	<div class="row">
																		<div class="col-md-6">
																			
																			<div class="form-group">
																				<label class="control-label">First Name</label>
																				<input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name"  />
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group">
																				<label class="control-label">Last Name</label>
																				<input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
																			</div>
																		</div>
																	</div>
																	
																	
																		<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
																</div>
															
															
															<div class="row setup-content" id="step-2">
																<div class="col-xs-12">
																	<div class="col-md-12">
																		<h3> Step 2</h3>
																		<div class="form-group">
																			<label class="control-label">Company Name</label>
																			<input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Name" />
																		</div>
																		<div class="form-group">
																			<label class="control-label">Company Address</label>
																			<input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address"  />
																		</div>
																		<div class="row">
																			<div class="col-6">
																				<button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Prev</button>
																			</div>
																			<div class="col-6">
																				<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
																			</div>
																			
																		</div>
																		
																	</div>
																</div>
															</div>
															<div class="row setup-content" id="step-3">
																<div class="col-xs-12">
																	<div class="col-md-12">
																		<h3> Step 3</h3>
																		<div class="form-group">
																			<label class="control-label">Skills</label>
																			<input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter skill or skills" />
																		</div>
																		<div class="form-group">
																			<label class="control-label">Comment</label>
																			<textarea class="form-control" placeholder="Enter Comment" ></textarea>
																		</div>
																		<button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Prev</button>
																		<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
																	</div>
																</div>
															</div>
															<div class="row setup-content" id="step-4">
																<div class="col-xs-12">
																	<div class="col-md-12">
																		<h3> Step 4</h3>
																		<button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Prev</button>
																		<button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
																	</div>
																</div>
															</div>
													
														
														
													
													</div>
												</form>
											</div>
										
											<div class="tab-pane " id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
													<form method="GET" action="/en/hotels-stays" data-action="/en/hotels-stays" data-suggest-url="/en/suggestion">
														<div class="tabs-container__content js-autocomplete__container">
															<h3 class='text-center'style='color:#000 ;'> Nouveau Client ?</h3>
															<p>
																<strong>Inscription gratuite - Completez vos coordonnées ci-dessous</strong>
															</p>
															<div class="row">
																	<div class=" mb-3 col-6">
																		<label for="exampleInputEmail1" style="color:black;"class="form-label">Prénom (*) :</label>
																		<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
																	</div>
																	<div class=" mb-3 col-6">
																		<label for="exampleInputEmail1" style="color:black;"class="form-label">Nom (*) :</label>
																		<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
																	</div>
															</div>
															<div class="row">
																	<div class=" mb-3 col-12">
																		<label for="exampleInputEmail1" style="color:black;"class="form-label">Email (*)  :</label>
																		<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
																	</div>
																	<div class=" mb-3 col-12">
																		<label for="exampleInputEmail1" style="color:black;"class="form-label">Mot de passe  (*):</label>
																		<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
																	</div>
																	<div class=" mb-3 col-8">
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck1">
																			<label class="custom-control-label" for="customCheck1">j'ai lu et j'accepte les termes et conditions </label>
																		  </div>
																	</div>
																	
															</div>
															<div class="row">
																<div class=" mb-3 col-2">
																
																	
																</div>
																<div class="mb-3 col-8">
																	<label for="exampleInputEmail1" style="color:black;"class="form-label"></label>
																		<button type="submit" class="btn  btn-lg btn-block" style="background-color:#000;color:aliceblue; ">Créer un compte<i class="fa fa-search"></i></button> 
																</div>
																
															
															</div>
															
															
																
														</div>
													</form>
											</div>
											
										</div>
										<!-- End of Tab Pane 
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<!--end row
			</div>
		</div>
	</div>
	end wrapper-->



	<!--plugins-->
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


