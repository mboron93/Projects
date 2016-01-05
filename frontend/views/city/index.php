<?php

?>
<h1>miasta</h1>

<div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1">
      <?php 
      $result = count($query);
      for($i=0; $i<$result ;$i++){
   echo  "<option>".$query[$i]['miasto']."</option>";
      }?>
   <input type ="submit" name="wyslij" value="wybierz"/>
  </select>
</div>