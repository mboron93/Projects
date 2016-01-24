<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'HISTORIA ZAMÓWIEŃ WAĆPANA';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
                    <label for="sel1">Wybierz zamówienie by poznać szczegóły:</label>
			<div class="btn-group">
                              
				<button class="btn btn-default">
					zamówienia:
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