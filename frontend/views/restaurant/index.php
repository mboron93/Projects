<?php
?>
<h1>restauracje</h1>
  	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
                    <label for="sel1">Wybierz restauracje waćpanie:</label>
			<div class="btn-group">
                              
				<button class="btn btn-default">
					restauracja
				</button> 
				<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
                                      <?php 
                                      
                                      $result = count($query);
                                      for($i=0; $i<$result ;$i++){
                                   echo  '<li><a href="/restaurant/nazwa?id='.$query[$i]['id_restauracji'].'">'.$query[$i]['nazwa'].'</a></li>';
                                      }
                                      ?>
				</ul>
			</div> 
		</div>
	</div>
</div>


