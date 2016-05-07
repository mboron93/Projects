<center>
<h2>WYBIERZ SWOJE MIASTO</h2>
  	<div class="cart-items">
	<div class="container">
		<div class="col-md-12">
                    
                   
			<div class="btn-group">
                              
				<button class="btn btn-default">
					lista miast do wyboru
				</button> 
				<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
                                      <?php 
                                   
                                      $result = count($query);
                                      for($i=0; $i<$result ;$i++){
                                   echo  '<li><a href="/site/restaurant?id='.$query[$i]['id_miasta'].'">'.$query[$i]['miasto'].'</a></li>';
                                      }
                                      ?>
				</ul>
                           
			</div> 
		</div>
	</div>
</div>
</center>
		<div class="banner wow fadeInUp" data-wow-delay="0.4s" id="Home">
		    <div class="container">
				<div class="banner-info">
					<div class="banner-info-head text-center wow fadeInLeft" data-wow-delay="0.5s">
						<h1>Sieć z około 100 Restauracjami w Trójmieście</h1>
						<div class="line">
							<h2> Do zamówienia Online</h2>
						</div>
					</div>
					<div class="form-list wow fadeInRight" data-wow-delay="0.5s">
                                            
						<form>
						  <ul class="navmain">
							<li><span>Nazwa lokalizacji</span>
							 <input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
							</li>
							<li><span>Nazwa restauracji</span>
							 <input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
							</li>
							<li><span>Nazwa dania</span>
							 <input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
						    </li>
						  </ul>
						</form>
                                            
						</div>				
				</div>
			</div>

		</div>
<!-- content-section-starts -->
	<div class="content">
		<div class="ordering-section" id="Order">
			<div class="container">
				<div class="ordering-section-head text-center wow bounceInRight" data-wow-delay="0.4s">
					<h3>Zamawianie jedzenia nigdy nie było takie łatwe jak teraz</h3>
					<div class="dotted-line">
						<h4>Wystarczą 4 kroki </h4>
					</div>
				</div>
				<div class="ordering-section-grids">
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="one"></i><br>
							<i class="one-icon"></i>
							<p>Wybierz <span>Restauracje</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="two"></i><br>
							<i class="two-icon"></i>
							<p>Zamów  <span>Swoje Danie</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="three"></i><br>
							<i class="three-icon"></i>
							<p>Zapłać <span> online</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="four"></i><br>
							<i class="four-icon"></i>
							<p>Ciesz się <span>jedzeniem </span></p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		
		<div class="popular-restaurents" id="Popular-Restaurants">
			<div class="container">
				<div class="col-md-4 top-restaurents">
					<div class="top-restaurent-head">
						<h3>Najlepsze Restauracje</h3>
					</div>
					<div class="top-restaurent-grids">
						<div class="top-restaurent-logos">
							<div class="res-img-1 wow bounceIn" data-wow-delay="0.4s">
								<img src="/images/restaurent-1.jpg" class="img-responsive" alt="" />
							</div>
							<div class="res-img-2 wow bounceIn" data-wow-delay="0.4s">
							    <img src="/images/restaurent-2.jpg" class="img-responsive" alt="" />
							</div>
							<div class="res-img-1 wow bounceIn" data-wow-delay="0.4s">
							    <img src="/images/restaurent-3.jpg" class="img-responsive" alt="" />
							</div>
							<div class="res-img-2 wow bounceIn" data-wow-delay="0.4s">
							    <img src="/images/restaurent-4.jpg" class="img-responsive" alt="" />
							</div>
							<div class="res-img-1 nth-grid1 wow bounceIn" data-wow-delay="0.4s">
							    <img src="/images/restaurent-5.jpg" class="img-responsive" alt="" />
							</div>
							<div class="res-img-2 nth-grid1 wow bounceIn" data-wow-delay="0.4s">
							    <img src="/images/restaurent-6.jpg" class="img-responsive" alt="" />
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-8 top-cuisines">
					<div class="top-cuisine-head">
						<h3>Najlepsze Dania</h3>
					</div>
					<div class="top-cuisine-grids">
						<div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="/images/cuisine1.jpg" class="img-responsive" alt="" /> </a>
							<label>Pizza</label>
					    </div>
						<div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="/images/cuisine2.jpg" class="img-responsive" alt="" /> </a>
							<label>Hamburgery</label>
					    </div>
						<div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="/images/cuisine3.jpg" class="img-responsive" alt="" /> </a>
							<label>Desery</label>
					    </div>
						<div class="top-cuisine-grid nth-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="/images/cuisine4.jpg" class="img-responsive" alt="" /> </a>
							<label>Dania Ostre</label>
					    </div>
						<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="/images/cuisine5.jpg" class="img-responsive" alt="" /> </a>
							<label>Dania fastfoodowe</label>
					    </div>
						<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="/images/cuisine6.jpg" class="img-responsive" alt="" /> </a>
							<label>Dania fit</label>
					    </div>
						<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="/images/cuisine7.jpg" class="img-responsive" alt="" /> </a>
							<label>Dania włoskie</label>
					    </div>
						<div class="top-cuisine-grid nth-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="/images/cuisine8.jpg" class="img-responsive" alt="" /> </a>
							<label>Dania orientalne</label>
					    </div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="service-section">
		
			<div class="service-section-bottom-row">
				<div class="container">
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="/images/icon1.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>100% Gwarancja serwisu</h4>
							<p>Brak ukrytych kosztów</p>
                                                        <p>Ceny jak w restauracji</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="/images/icon2.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>Pełna Ochrona Płatności</h4>
							<p>Nie pobieramy żadnej dodatkowej opłaty za płatność online</p>
                                                        <p>100% poufność informacji</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="/images/icon3.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>Śledź swoje zamówienie</h4>
							<p>Możliwość śledzenia swojego zamówienia online</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>

