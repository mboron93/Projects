<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
	<div class="header">
		<div class="container">
			<div class="top-header">
				<div class="logo">
					<a href="index.html"><img src="/images/logo.png" class="img-responsive" alt="" /></a>
				</div>
				<div class="queries">
					<p>Pytania? Zadzwoń do nas<span>0000-0000-0000 </span><label>(od 11 do 22)</label></p>
				</div>
				<div class="header-right">
						<div class="cart box_1">
							<a href="/koszyk/index">
                                                            <h3><p>W koszyku:</p>
                <span id="simpleCart_quantity" class="simpleCart_quantity"><?= Yii::$app->runAction('koszyk/liczba');?> </span>
                <img src="/images/bag.png" alt="">
                </h3>
							</a>	
							<p><a href="/koszyk/clean" class="simpleCart_empty">Opróźnij koszyk</a></p>
							<div class="clearfix"> </div>
						</div>
					</div>
				<div class="clearfix"></div>
			</div>
		</div>
<div class="menu-bar">
<div class="container" id="top">
        <div class="top-menu">
        <?php
        $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'historia zamówienia', 'url' => ['/site/about']],
        ['label' => 'Kontakt', 'url' => ['/site/contact']],
        ['label' => 'Koszyk', 'url' => ['/koszyk/index']],
        ];
        if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Rejestracja', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Logowanie', 'url' => ['/site/login']];
        } else {
            $menuItems[] = '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>';
        }
        echo Nav::widget([
            'items' => $menuItems,
        ]);
        ?>
        <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- koniec menu -->

 
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
 
	<!-- content-section-ends -->
        
	<!-- footer-section-starts -->
	<div class="footer">
		<div class="container">
			<p class="wow fadeInLeft" data-wow-delay="0.4s">&copy; Jedzonko.pl <?= date('Y') ?></p>
		</div>
	</div>
	<!-- footer-section-ends -->
	  <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
