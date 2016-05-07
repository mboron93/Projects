<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'HISTORIA ZAMÓWIEŃ';
$this->params['breadcrumbs'][] = $this->title;
?>
<center>
<div class="cart-items">
	<div class="container">
		<div class="col-md-12">
                    <h1> Historia twoich zamówień </h1>
                    <label for="sel1"></label>
			<div class="btn-group">
                              
				<button class="btn btn-default">
					wybierz zamówienie z listy
				</button> 
				<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
                                      <?php 
                                   
                                      $result = count($query);
                                      for($i=0; $i<$result ;$i++){
                                   echo  '<li><a href="/site/details?id='.$query[$i]['id_order'].'">'.$query[$i]['id_order'].'</a></li>';
                                      }
                                      ?>
				</ul>
			</div> 
		</div>
	</div>
</div>
</center>