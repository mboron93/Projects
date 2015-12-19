Wybierz:<br/>
 <form method="post" enctype="multipart/form-data">
       <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
       <input type="radio" name="nazw" value="Milk"/> Milk<br/>
       <input type="radio" name="nazw" value="juice"/> Juice<br/>
       <input type="radio" name="nazw" value="wather"/> Wather<br/>
       Select a file: <input type="file" name="img"><br/>
       <input type="checkbox"/>Klik<br/>
       <input type="submit" value="Wyslij"/>
 </form>
<img src="/ussing/<?=$nazwa?>">
<a href="javascript:void(0)" id="dodaj">Dodaj do koszyka</a>
<?php
foreach($users as $user) {
    echo $user->username."<br>";
}
ob_start();
?>
$(document).ready(function(){
    $('#dodaj').click(function() {
        $.ajax({
            url: '/test/dodajdokoszyka?co=cos&ile=3',
            success: function(resp) {
                alert('dodano');
            }
        });
    });
})  ;
<?php
$js = ob_get_clean();

$this->registerJs( 
    $js 
);
?>
 