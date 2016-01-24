<?php
/* @var $this yii\web\View */
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1>
				Menu
			</h1>
			
			<table class="table">
				<thead>
					<tr>
						<th>
                                                     
							Nazwa
                                                        <?php                                                       
                                  
                                                       $result = count($query);
                                      for($i=0; $i<$result ;$i++){
                                   echo  '<li><a href="../koszyk/add?id='.$query[$i]['id_dania'].'" >'.' '.$query[$i]['nazwa_dania'].'</a></li>';
                                  }
                                      ?>
						</th>
                                                <th>
                                                     
							rodzaj
                                                        <?php                                                       
                                 
                                                       $result = count($query);
                                      for($i=0; $i<$result ;$i++){
                                   echo  '<li>'.' '.$query[$i]['rodzaj'].'</a></li>';
                                  }
                                      ?>
						</th>
						<th>
							Składniki
                                                       <?php 
                                                      
                                      $result = count($query);
                                      for($i=0; $i<$result ;$i++){
                                   echo  '<li>'.' '.$query[$i]['nazwa_dania'].'</li>';
                                                       } 
                                      ?>
						</th>
						<th>
							Cena
                                                        <?php 
                                                       
                                      $result = count($query);
                                      for($i=0; $i<$result ;$i++){
                                   echo  '<li>'.' '.$query[$i]['koszt_dania'].'</li>';
                                  }
                                      ?>
						</th>
						<th>
							Ocena
						</th>
					</tr>
				</thead>
			</table>

            <a href="/koszyk">
            	<button type="button" class="btn btn-primary">
		Do koszyka
		</button>
            </a>
		</div>
	</div>
</div>


