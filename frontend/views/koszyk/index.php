<?php
/* @var $this yii\web\View */

$this->title = 'TWÓJ KOSZYK';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="cart-items">
	<div class="container">
            <?php if(isset($settings)&&!empty($settings)){?>
			 <h1>Twój Koszyk</h1>
                       <?php  foreach ($settings as $index) { ?>
			 <div class="cart-header">
                             <a href="/koszyk/usun?id=<?=$index['id']?>"><div class="close1"></div></a>
				 <div class="cart-sec simpleCart_shelfItem">
<!--						<div class="cart-item cyc">
							 <img src="web/images/cuisine3.jpg" class="img-responsive" alt="">
						</div>-->
					   <div class="cart-item-info">
						<h3><?=$index['nazwa']?></h3>
						<ul class="qty">
							<li><p>Ilość: <?=$index['ilosc']?>szt</p></li>
							<li><p>Rozmiar:<?=$index['porcja']?> </p></li>
						</ul>
							 <div class="delivery">
							 <p>Cena: <?=$index['cena']?>zł</p>
							 <span>Delivered in 1-1:30 hours</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
                         </div>
                         <?php } 
                         echo '            <a href="/koszyk/wyslij">
            	<button type="button" class="btn btn-primary">
		ZREALIZUJ
		</button>
            </a>
            <a href="/koszyk/clean">
            	<button type="button" class="btn btn-default">
		OPRÓŻNIJ
		</button>
            </a>';
                         
                         }
else {
      \Yii::$app->getSession()->setFlash('warning', 'Koszyk posty');   
}?>
		  
		 </div>
		 </div>
<!-- checkout -->
	

