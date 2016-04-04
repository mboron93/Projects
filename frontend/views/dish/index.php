<?php
/* @var $this yii\web\View */
/*//idRestauracji->nazwa pobierze  idRestauracji jako nazwa */

$this->title = 'MENU';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-condensed" id="tabela" >
				<thead >
					<tr>
						<th>
							Nazwa
						</th>
						<th>
							rodzaj
						</th>
						<th>
							Składniki
						</th>
						<th>
							Cena
						</th>
					</tr>
				</thead>
				<tbody>
                                    <?php 
                                    foreach ($result as $dish) { ?>
                                        <tr>
                                            <td>
                                                    <?=$dish->nazwa_dania?>
                                            </td>
                                            <td>
                                                    <?=$dish->rodzaj?>
                                            </td>
                                            <td>
                                                    <?=$dish->opis?>
                                            </td>
                                            <td>
                                                    <?=number_format($dish->koszt_dania,2,","," ")?>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                    
                                    
                                     
				</tbody>
			</table>
			<a href="/koszyk">
            	<button type="button" class="btn btn-primary">
		Do koszyka
		</button>
            </a>
		</div>
	</div>
</div>

