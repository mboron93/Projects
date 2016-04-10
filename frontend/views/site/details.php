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
                                                     
							nazwa_dania
                                                        <?php                                                       
                                 
                                                       $result = count($query);
                                      for($i=0; $i<$result ;$i++){
                                       
                                          $x=$query[$i]['id_dania']-3;
                                          
                                        
                                   echo  '<li>'.' '.$query1[$x]['nazwa_dania'].'</li>';
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
                                                <th>
							ulica
                                                        <?php 
                                                       
                                      $result = count($query);
                                      for($i=0; $i<$result ;$i++){
                                   echo  '<li>'.' '.$query[$i]['ulica'].'</li>';
                                  }
                                      ?>
						</th>
                                                <th>
							miasto
                                                        <?php 
                                                       
                                      $result = count($query);
                                      for($i=0; $i<$result ;$i++){
                                   echo  '<li>'.' '.$query[$i]['miasto'].'</li>';
                                  }
                                      ?>
						</th>
                                                <th>
							telefon kontaktowy
                                                        <?php 
                                                       
                                      $result = count($query);
                                      for($i=0; $i<$result ;$i++){
                                   echo  '<li>'.' '.$query[$i]['telefon'].'</li>';
                                  }
                                      ?>
						</th>
						
					</tr>                                                        
				</thead>                           
			</table>   
		</div>
             <a href="view/details">
            	<button type="button">
		dodaj adres
		</button>
            </a>
	</div>
</div>
