@extends("architect.layouts.app")

@section("wrapper")

	<!-- MAIN START -->
	<main class="main">

	<div class="home-banner-explore home-explore-hero js-home__banner">
			<div class="home-banner-explore--container">
				<div class="image-bg lazy d-none js-homebg-rest entered loaded adjusted" data-bg="{{ asset('assets/client/images/banner-2.jpg')}}" data-ll-status="loaded" style="background-image: url(&quot;{{ asset('assets/client/images/banner-2.jpg')}}&quot;);">
					<noscript><img src="{{ asset('assets/client/images/banner-2.jpg')}}" alt=""></noscript>
				</div>
		
				<div class="image-bg lazy d-none js-homebg-hotel entered loaded adjusted d-block" data-bg="{{ asset('assets/client/images/banner.jpg')}}" data-ll-status="loaded" style="background-image: url(&quot;{{asset('assets/client/images/banner.jpg')}}&quot;);">
					<noscript><img src="{{ asset('assets/client/images/banner.jpg')}}" alt=""></noscript>
				</div>
			</div>
		
			<div class="home-banner-explore__content">
				
		
				<div class="home-banner-explore__content--subtitle">
					<h1>Bienvenue sur ARCHIART !</h1>
					<h2>
						Explorez le monde des architectes
						
					</h2>
				</div>
		
				<div class="home-banner-explore__tabs">
					<div class="tabs-container">
						<!-- Tab Nav start -->
						<ul class="nav nav-tabs tabs-container__navigation tabs-nav " role="tablist">
							<li class="nav-item tabs-container__navigation--item active">
								<a class="nav-link active" id="restaurant-tab" data-toggle="tab" href="#restaurant" role="tab" aria-controls="restaurant" aria-selected="false">
									Architectes
								</a>
							</li>
							<li class="nav-item tabs-container__navigation--item ">
								<a class="nav-link " id="hotel-tab" data-toggle="tab" href="#new" role="tab" aria-controls="hotel" aria-selected="true">
									Nouveau Projet
								</a>
							</li>
							<li class="nav-item tabs-container__navigation--item ">
								<a class="nav-link " id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="true">
										Realisations
								</a>
							</li>
								
							
						</ul>
						<!-- End of Tab Nav -->
		
						<!-- Tab Pane Start -->
						<div class="tab-content">
							<div class="tab-pane active" id="restaurant" role="tabpanel" aria-labelledby="restaurant-tab">
								<form method="GET" action="/en/hotels-stays" data-action="/en/hotels-stays" data-suggest-url="/en/suggestion">
									<div class="tabs-container__content js-autocomplete__container">
										<p>
										   <strong>	Trouvez un architecte à proximité</strong>
										</p>
										
										<div class="tabs-container__content--hotel tabs-container__content--hotel-form">
											<div class="destination-explore">
													<div class="row">
														
														<div class="col  col-md-12 col_spin">
															<div class="destination-explore__forms">
																<div class="row">
																	<div class="col  col-md-2  destination-explore__item--groupleft">
																		<div class="destination-explore__forms">
																				<button type="button" class="destination-explore__item--cta destination-explore__item--submit ">
																					<i class="fa fa-search"></i>
																				</button>
																		</div>
																	</div>
																	<div class="col col-7 col-md-7 destination-explore__item--groupleft">
																		<div class="destination-explore__item ">
																			
																			<div class="form-group">
																				<input type="email" class="form-control float-right" id="inputEmail" placeholder="Chercher des architectes , décorateurs ..." name="name"> 
																			
																			</div>
																			
																			</div>
																	</div>
																	
																	<div class="col col-3 col-md-3 destination-explore__item--groupright">
																		<div class="destination-explore__form">
																			<button type="button" class="destination-explore__item--cta1 destination-explore__item--submit ">
																				Recherche avancé 
																			
																			</button>
																			
																			
																			</div>
																	</div>
																</div>
															</div>
														</div>
														
		
													</div>
												</div>
											</div>
											<div class="hotels-spinner js-hotels__spinner" style="display: none;">
											<div class="hotels-spinner__wrapper">
												<div class="hotels-spinner__content">
													<div class="search-hotelswrap">
														<span class="search-hotelswrap--close js-close-msearch">
															<i class="fal fa-chevron-left fa-lg"></i>
														</span>
														<span class="search-hotelswrap--text">
															Rooms
														</span>
													</div>
										
													<div class="hotels-spinner__content--item">
														<div class="spin__label">
															Adults
														</div>
										
														<div class="spin__container">
															<button type="button" class="sitem spin-minus js-hotels__adults_min">
																<i class="fal fa-minus"></i>
															</button>
															<span class="sitem spin-value js-hotels__view_adults">1</span>
															<button type="button" class="sitem spin-plus js-hotels__adults_plus">
																<i class="fal fa-plus"></i>
															</button>
														</div>
													</div>
										
													<div class="hotels-spinner__content--item">
														<div class="spin__label">
															Children
														</div>
										
														<div class="spin__container">
															<button type="button" class="sitem spin-minus js-hotels__children_min">
																<i class="fal fa-minus"></i>
															</button>
															<span class="sitem spin-value js-hotels__view_children">0</span>
															<button type="button" class="sitem spin-plus js-hotels__children_plus">
																<i class="fal fa-plus"></i>
															</button>
														</div>
													</div>
										
													<div class="hotels-spinner__content--item">
														<div class="spin__label">
															Rooms
														</div>
										
														<div class="spin__container">
															<button type="button" class="sitem spin-minus js-hotels__rooms_min">
																<i class="fal fa-minus"></i>
															</button>
															<span class="sitem spin-value js-hotels__view_rooms">1</span>
															<button type="button" class="sitem spin-plus js-hotels__rooms_plus">
																<i class="fal fa-plus"></i>
															</button>
														</div>
													</div>
												</div>
										
												<div class="hotels-spinner__footer">
													<div class="hotels-spinner__footer--item">
														<button type="button" class="cancel-btn js-hotels__counter_cancel">
															Cancel
														</button>
														<button type="button" class="apply-btn js-hotels__counter_apply">
															Apply
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						
							<div class="tab-pane " id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
									<form method="GET" action="/en/hotels-stays" data-action="/en/hotels-stays" data-suggest-url="/en/suggestion">
										<div class="tabs-container__content js-autocomplete__container">
											<p>
												<strong>Trouvez un architecte à proximité</strong>
											</p>
											<div class="row">
													<div class=" mb-3 col-6">
														<label for="exampleInputEmail1" style="color:black;"class="form-label">Type d'activité</label>
														<select  class="form-control float-right"  style="background-color:black;color:aliceblue;">
																<option>Veuillez selectionner</option>
																<option>Construction</option>
																<option>Réinnnovation</option>
																<option>Aménagement</option>
																<option>Réhabitation</option>
															
																<optgroup label="Décoration Interne">
																	
																	<option>Cuisine</option>
																	<option>Chambre à coucher</option>
																	<option>Autres</option>
																	</optgroup>
																	<optgroup label="Décoration externe">
																	
																		<option>Mur</option>
																		<option>Piscine</option>
																		<option>Jardin</option>
																	</optgroup>
																
															
														</select>
													</div>
													<div class=" mb-3 col-6">
														<label for="exampleInputEmail1" style="color:black;"class="form-label">Ville ,Code Postal</label>
														<select  class="form-control float-right" >
															<option>Veuillez selectionner</option>
															<option>Construction</option>
															<option>Réinnnovation</option>
															<option>Aménagement</option>
															<option>Réhabitation</option>
														
															<optgroup label="Décoration Interne">
																
																<option>Cuisine</option>
																<option>Chambre à coucher</option>
																<option>Autres</option>
																</optgroup>
																<optgroup label="Décoration externe">
																
																	<option>Mur</option>
																	<option>Piscine</option>
																	<option>Jardin</option>
																</optgroup>
															
														
														</select>
													</div>
											</div>
											<div class="row">
													<div class=" mb-3 col-4">
														<label for="exampleInputEmail1" style="color:black;"class="form-label">Type de projet</label>
														<select  class="form-control float-right"  >
																<option>Veuillez selectionner</option>
																<option>Construction</option>
																<option>Réinnnovation</option>
																<option>Aménagement</option>
																<option>Réhabitation</option>
															
																<optgroup label="Décoration Interne">
																	
																	<option>Cuisine</option>
																	<option>Chambre à coucher</option>
																	<option>Autres</option>
																	</optgroup>
																	<optgroup label="Décoration externe">
																	
																		<option>Mur</option>
																		<option>Piscine</option>
																		<option>Jardin</option>
																	</optgroup>
																
															
														</select>
													</div>
													<div class=" mb-3 col-4">
														<label for="exampleInputEmail1" style="color:black;"class="form-label">Nature de chantier</label>
														<select  class="form-control float-right"  >
																<option>Veuillez selectionner</option>
																<option>Haute Gamme</option>
																<option>Bad Gamme</option>
																<option>Moyenne Gamme</option>
														</select>
													</div>
													<div class=" mb-3 col-4">
														<label for="exampleInputEmail1" style="color:black;"class="form-label">Taille de chantier</label>
														<select  class="form-control float-right" >
																<option>Veuillez selectionner</option>
																<option>Construction</option>
																<option>Réinnnovation</option>
																<option>Aménagement</option>
																<option>Réhabitation</option>
															
																<optgroup label="Décoration Interne">
																	
																	<option>Cuisine</option>
																	<option>Chambre à coucher</option>
																	<option>Autres</option>
																	</optgroup>
																	<optgroup label="Décoration externe">
																	
																		<option>Mur</option>
																		<option>Piscine</option>
																		<option>Jardin</option>
																	</optgroup>
																
															
														</select>
													</div>
													
											</div>
											<div class="row">
												<div class=" mb-3 col-4">
													<label for="exampleInputEmail1" style="color:black;"class="form-label">Budget</label>
													<select  class="form-control float-right"  >
															<option>Veuillez selectionner</option>
															<option>Construction</option>
															<option>Réinnnovation</option>
															<option>Aménagement</option>
															<option>Réhabitation</option>
														
															<optgroup label="Décoration Interne">
																
																<option>Cuisine</option>
																<option>Chambre à coucher</option>
																<option>Autres</option>
																</optgroup>
																<optgroup label="Décoration externe">
																
																	<option>Mur</option>
																	<option>Piscine</option>
																	<option>Jardin</option>
																</optgroup>
															
														
													</select>
												</div>
												<div class="mb-3 col-8">
													<label for="exampleInputEmail1" style="color:black;"class="form-label"></label>
														<button type="submit" class="btn  btn-lg btn-block" style="background-color:#000;color:aliceblue; ">Rechercher 	<i class="fa fa-search"></i></button> 
												</div>
												
											
											</div>
											
											
												
										</div>
									</form>
							</div>
							
							<div class="tab-pane " id="new" role="tabpanel" aria-labelledby="hotel-tab">
								<form method="GET" action="/en/hotels-stays" data-action="/en/hotels-stays" data-suggest-url="/en/suggestion">
									<div class="tabs-container__content js-autocomplete__container">
										<p>
											<strong>Trouvez un architecte à proximité</strong>
										</p>
										<div class="row">
												<div class=" mb-3 col-6">
													<label for="exampleInputEmail1" style="color:black;"class="form-label">Type d'activité</label>
													<select  class="form-control float-right"  style="background-color:black;color:aliceblue;">
															<option>Veuillez selectionner</option>
															<option>Construction</option>
															<option>Réinnnovation</option>
															<option>Aménagement</option>
															<option>Réhabitation</option>
														
															<optgroup label="Décoration Interne">
																
																<option>Cuisine</option>
																<option>Chambre à coucher</option>
																<option>Autres</option>
																</optgroup>
																<optgroup label="Décoration externe">
																
																	<option>Mur</option>
																	<option>Piscine</option>
																	<option>Jardin</option>
																</optgroup>
															
														
													</select>
												</div>
												<div class=" mb-3 col-6">
													<label for="exampleInputEmail1" style="color:black;"class="form-label">Ville ,Code Postal</label>
													<select  class="form-control float-right" >
														<option>Veuillez selectionner</option>
														<option>Construction</option>
														<option>Réinnnovation</option>
														<option>Aménagement</option>
														<option>Réhabitation</option>
													
														<optgroup label="Décoration Interne">
															
															<option>Cuisine</option>
															<option>Chambre à coucher</option>
															<option>Autres</option>
															</optgroup>
															<optgroup label="Décoration externe">
															
																<option>Mur</option>
																<option>Piscine</option>
																<option>Jardin</option>
															</optgroup>
														
													
													</select>
												</div>
										</div>
										<div class="row">
												<div class=" mb-3 col-4">
													<label for="exampleInputEmail1" style="color:black;"class="form-label">Type de projet</label>
													<select  class="form-control float-right"  >
															<option>Veuillez selectionner</option>
															<option>Construction</option>
															<option>Réinnnovation</option>
															<option>Aménagement</option>
															<option>Réhabitation</option>
														
															<optgroup label="Décoration Interne">
																
																<option>Cuisine</option>
																<option>Chambre à coucher</option>
																<option>Autres</option>
																</optgroup>
																<optgroup label="Décoration externe">
																
																	<option>Mur</option>
																	<option>Piscine</option>
																	<option>Jardin</option>
																</optgroup>
															
														
													</select>
												</div>
												<div class=" mb-3 col-4">
													<label for="exampleInputEmail1" style="color:black;"class="form-label">Nature de chantier</label>
													<select  class="form-control float-right"  >
															<option>Veuillez selectionner</option>
															<option>Haute Gamme</option>
															<option>Bad Gamme</option>
															<option>Moyenne Gamme</option>
													</select>
												</div>
												<div class=" mb-3 col-4">
													<label for="exampleInputEmail1" style="color:black;"class="form-label">Taille de chantier</label>
													<select  class="form-control float-right" >
															<option>Veuillez selectionner</option>
															<option>Construction</option>
															<option>Réinnnovation</option>
															<option>Aménagement</option>
															<option>Réhabitation</option>
														
															<optgroup label="Décoration Interne">
																
																<option>Cuisine</option>
																<option>Chambre à coucher</option>
																<option>Autres</option>
																</optgroup>
																<optgroup label="Décoration externe">
																
																	<option>Mur</option>
																	<option>Piscine</option>
																	<option>Jardin</option>
																</optgroup>
															
														
													</select>
												</div>
												
										</div>
										<div class="row">
											<div class=" mb-3 col-4">
												<label for="exampleInputEmail1" style="color:black;"class="form-label">Budget</label>
												<select  class="form-control float-right"  >
														<option>Veuillez selectionner</option>
														<option>Construction</option>
														<option>Réinnnovation</option>
														<option>Aménagement</option>
														<option>Réhabitation</option>
													
														<optgroup label="Décoration Interne">
															
															<option>Cuisine</option>
															<option>Chambre à coucher</option>
															<option>Autres</option>
															</optgroup>
															<optgroup label="Décoration externe">
															
																<option>Mur</option>
																<option>Piscine</option>
																<option>Jardin</option>
															</optgroup>
														
													
												</select>
											</div>
											<div class="mb-3 col-8">
												<label for="exampleInputEmail1" style="color:black;"class="form-label"></label>
													<button type="submit" class="btn  btn-lg btn-block" style="background-color:#000;color:aliceblue; ">Rechercher 	<i class="fa fa-search"></i></button> 
											</div>
											
										
										</div>
										
										
											
									</div>
								</form>
						</div>
						</div>
						<!-- End of Tab Pane -->
					</div>
				</div>
		
			
			</div>
		</div>

	
	</main>
	<!-- MAIN END -->
	@endsection