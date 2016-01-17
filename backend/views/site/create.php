<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'message:ntext',
        'created_by',
        'permissions',
        'created_at',
        'updated_at',
    ],
]) ?>