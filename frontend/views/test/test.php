Wybiesz:<br/>
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