<?php
/* @var $this yii\web\View */

$this->title = 'MENU';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-condensed" id="tabela" >
				<thead>
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
					<tr>
						<td>
							   <?php                                                       
                                  
                                                       $result = count($query);
                                      for($i=0; $i<$result ;$i++){
                                   echo  '<p><a href="../koszyk/add?id='.$query[$i]['id_dania'].'" >'.' '.$query[$i]['nazwa_dania'].'</a></p>';
                                  }
                                      ?>
						</td>
						<td>
							 <?php                                                       
                                 
                                                       $result = count($query);
                                      for($i=0; $i<$result ;$i++){
                                   echo  '<p>'.' '.$query[$i]['rodzaj'].'</a></p>';
                                  }
                                      ?>
						</td>
						<td>
							<?php 
                                                      
                                      $result = count($query);
                                      for($i=0; $i<$result ;$i++){
                                   echo  '<p>'.' '.$query[$i]['opis'].'</p>';
                                                       } 
                                      ?>
						</td>
						<td>
							<?php 
                                                       
                                      $result = count($query);
                                      for($i=0; $i<$result ;$i++){
                                   echo  '<p>'.' '.$query[$i]['koszt_dania'].'<p>';
                                  }
                                      ?>
						</td>
					</tr>
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

