<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="list-group">
				 <a href="#" class="list-group-item active">Panel Administracyjny</a>
				<div class="list-group-item">
					<h4 class="list-group-item">
                                            <a href="/city">Dodaj / Usuń Miasto</a><span class="badge">+/-</span>
					</h4>
                                        <h4 class="list-group-item">
                                            <a href="/restaurant">Dodaj / Usuń Restaurację</a><span class="badge">+/-</span>
					</h4>
                                        <h4 class="list-group-item">
                                            <a href="/dish">Dodaj / Usuń Danie</a><span class="badge">+/-</span>
					</h4>
                                        <h4 class="list-group-item">
                                            <a href="/order">Dodaj / Usuń Zamówienie</a><span class="badge">+/-</span>
					</h4>
				</div>
				<div class="list-group-item">
   <!--trzeba zrobić prawidłowe odwołanie do site pomoc.php-->    <a href="site/pomoc">Help</a><span class="badge">?</span>
				</div>
			</div>
		</div>
	</div>
</div>