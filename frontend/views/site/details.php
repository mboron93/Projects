<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1>
				historia zamówienia
			</h1>
			
			<table class="table">
				<thead>
					<tr>
						<th>
                                                     
							id_zamówienia
                                                        <?php                                                       
                                  
                                                       $result = count($query);
                                      for($i=0; $i<$result ;$i++){
                                   echo  '<li>'.' '.$query[$i]['id_order'].'</li>';
                                  }
                                      ?>
						</th>
                                                <th>
                                                     
							nazwa_dania
                                                        <?php                                                       
                                 
                                                       $result = count($query);
                                      for($i=0; $i<$result ;$i++){
                                   echo  '<li>'.' '.$query1[$i]['nazwa_dania'].'</li>';
                                  }
                                      ?>
						</th>
						<th>
							ilość
                                                       <?php 
                                                      
                                      $result = count($query);
                                      for($i=0; $i<$result ;$i++){
                                   echo  '<li>'.' '.$query[$i]['ilosc'].'</li>';
                                                       } 
                                      ?>
						</th>
						<th>
							Cena
                                                        <?php 
                                                       
                                      $result = count($query);
                                      for($i=0; $i<$result ;$i++){
                                   echo  '<li>'.' '.$query[$i]['cena'].'</li>';
                                  }
                                      ?>
						</th>
						
					</tr>
				</thead>
			</table>

          
		</div>
	</div>
</div>