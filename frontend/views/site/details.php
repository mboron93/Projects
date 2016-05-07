<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<div class="cart-items">
	<div class="container">
		<div class="col-md-12">
			<h1>Historia twoich zamówień</h1>
			<div class="cart-header">
                             <div class="cart-sec simpleCart_shelfItem">
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
	
					</tr>   
                                     </div>
				</thead> 

			</table>   
		</div>
             </div>

	</div>
</div>
