<?php
use yii\helpers\Html;

/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\MessageInterface the message being composed */
/* @var $content string main view render result */
$message = Yii::$app->mailer->compose();

// Attach file from local file system:
$message->attach('a.pdf');

// Create attachment on-the-fly
$message->attachContent('Attachment content', ['fileName' => 'attach.txt', 'contentType' => 'text/plain']);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?= Yii::$app->charset ?>" />

    <?php $this->head() 
            ?>
</head>
<body>
    <?php $this->beginBody() ?>
  
    <div class="footer">With kind regards, <?= Yii::$app->name ?> team<img width="100" src="<?= $message->embed($logo); ?>"></div>
    <img src="
 
         " alt="" height="211" width="213">
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>